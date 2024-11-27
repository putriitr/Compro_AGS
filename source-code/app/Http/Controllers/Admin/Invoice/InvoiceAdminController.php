<?php

namespace App\Http\Controllers\Admin\Invoice;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\ProformaInvoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class InvoiceAdminController extends Controller
{
    public function show($id)
{
    $invoice = Invoice::with('proformaInvoice.purchaseOrder')->findOrFail($id);
    return view('Admin.Invoice.show', compact('invoice'));
}

public function index(Request $request)
{
    // Ambil keyword pencarian dari input pengguna
    $keyword = $request->input('search');

    // Query Invoices dengan pencarian dan pagination
    $invoices = Invoice::with('proformaInvoice')
        ->when($keyword, function ($query) use ($keyword) {
            $query->where('invoice_number', 'like', "%{$keyword}%")
                ->orWhere('status', 'like', "%{$keyword}%")
                ->orWhere('grand_total_include_ppn', 'like', "%{$keyword}%");
        })
        ->paginate(10); // Menampilkan 10 item per halaman

    return view('Admin.Invoice.index', compact('invoices', 'keyword'));
}


public function create($proformaInvoiceId)
{
    // Ambil data Proforma Invoice dan relasi terkait seperti Purchase Order
    $proformaInvoice = ProformaInvoice::with('purchaseOrder.quotation')->findOrFail($proformaInvoiceId);

    // Ambil subtotal dan ppn asli dari Proforma Invoice
    $subtotal = $proformaInvoice->subtotal;
    $ppn = $proformaInvoice->ppn;

    // Hitung persentase jika ada `next_payment_amount`
    $percentage = $proformaInvoice->next_payment_amount
        ? ($proformaInvoice->next_payment_amount / $proformaInvoice->purchaseOrder->quotation->subtotal_price) * 100
        : 100; // Jika tidak ada `next_payment_amount`, gunakan 100%

    // Hitung Subtotal setelah Persentase
    $adjustedSubtotal = $subtotal - ($subtotal * $percentage / 100);

    // Hitung PPN berdasarkan Subtotal setelah Persentase
    $ppnAmount = $adjustedSubtotal * ($ppn / 100);

    // Hitung Grand Total (Include PPN)
    $grandTotalIncludePPN = $adjustedSubtotal + $ppnAmount;

    // Ambil data user dari Purchase Order untuk mengisi informasi vendor otomatis
    $user = $proformaInvoice->purchaseOrder->user;

    // Kirim data ke view
    return view('Admin.Invoice.create', compact('proformaInvoice', 'subtotal', 'ppn', 'grandTotalIncludePPN', 'user', 'percentage'));
}



    

    public function store(Request $request, $proformaInvoiceId)
{
    // Validasi input
    $request->validate([
        'vendor_name' => 'required|string',
        'vendor_address' => 'required|string',
        'vendor_phone' => 'required|string',
    ]);

    // Ambil Proforma Invoice terkait
    $proformaInvoice = ProformaInvoice::with('purchaseOrder.user')->findOrFail($proformaInvoiceId);
    // Dapatkan nama perusahaan dan buat singkatan nama
    $namaPerusahaan = $proformaInvoice->purchaseOrder->user->nama_perusahaan ?? 'Perusahaan';
    $singkatanNamaPerusahaan = strtoupper(implode('', array_filter(array_map(function ($kata) {
        return $kata !== 'PT' ? $kata[0] : ''; // Hindari "PT" dari singkatan
    }, explode(' ', $namaPerusahaan)))));

    // Konversi tanggal menjadi Romawi dan ambil tahun
    $tanggalRomawi = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII', 'XIII', 'XIV', 'XV', 'XVI', 'XVII', 'XVIII', 'XIX', 'XX', 'XXI', 'XXII', 'XXIII', 'XXIV', 'XXV', 'XXVI', 'XXVII', 'XXVIII', 'XXIX', 'XXX', 'XXXI'];
    $hariIni = \Carbon\Carbon::now();
    $dayRoman = $tanggalRomawi[$hariIni->day - 1];
    $tahun = $hariIni->year;
  // Tentukan nomor invoice otomatis
  $lastInvoice = Invoice::orderBy('id', 'desc')->first();
  $nextInvoiceNumber = str_pad($lastInvoice ? $lastInvoice->id + 1 : 1, 3, '0', STR_PAD_LEFT);

    // Format nomor PO dan nomor Invoice
    $poNumberFormatted = sprintf("%s/SPO/%s/%s/%s", $proformaInvoice->purchaseOrder->po_number, $singkatanNamaPerusahaan, $dayRoman, $tahun);
    $piNumberFormatted = sprintf("%s/INV-AGS-%s/%s/%s",  $nextInvoiceNumber, $singkatanNamaPerusahaan, $dayRoman, $tahun);
  // Ambil persentase dari Proforma Invoice
  $percentage = $proformaInvoice->next_payment_amount
  ? ($proformaInvoice->next_payment_amount / $proformaInvoice->purchaseOrder->quotation->subtotal_price) * 100
  : 100; // Jika tidak ada persentase, gunakan 100% sebagai default.

// Hitung Subtotal setelah Persentase
$adjustedSubtotal = $proformaInvoice->subtotal - ($proformaInvoice->subtotal * $percentage / 100);

// Hitung PPN berdasarkan Subtotal setelah Persentase
$ppnAmount = $adjustedSubtotal * ($proformaInvoice->ppn / 100);

// Hitung Grand Total (Include PPN)
$grandTotalIncludePPN = $adjustedSubtotal + $ppnAmount;
    // Buat data invoice dan simpan ke database
    $invoice = Invoice::create([
        'proforma_invoice_id' => $proformaInvoice->id,
        'invoice_number' => $nextInvoiceNumber,
        'invoice_date' => $hariIni,
     'subtotal' =>$adjustedSubtotal, // Subtotal berdasarkan persentase
     'ppn' => $proformaInvoice->ppn,           // PPN disimpan dalam bentuk persentase awal
     'grand_total_include_ppn' => $grandTotalIncludePPN, // Grand Total // Grand total berdasarkan subtotal + PPN
    ]);

    // Generate PDF dengan data invoice yang baru saja dibuat
    $pdf = PDF::loadView('Admin.Invoice.pdf', [
        'invoice' => $invoice,
        'proformaInvoice' => $proformaInvoice,
        'vendor_name' => $request->vendor_name,
        'vendor_address' => $request->vendor_address,
        'vendor_phone' => $request->vendor_phone,
        'poNumberFormatted' => $poNumberFormatted,  // Kirim format nomor PO ke view
        'piNumberFormatted' => $piNumberFormatted,  // Kirim format nomor Invoice ke view
    ]);

    // Buat nama file unik dan simpan PDF ke direktori publik
    $filename = time() . '_' . Str::slug('Invoice_' . $invoice->invoice_number) . '.pdf';
    $path = 'pdfs/invoices/' . $filename;

    // Pastikan direktori `pdfs/invoices` tersedia
    if (!File::exists(public_path('pdfs/invoices'))) {
        File::makeDirectory(public_path('pdfs/invoices'), 0755, true, true);
    }

    // Simpan PDF ke path yang ditentukan
    $pdf->save(public_path($path));

    // Update path file di record invoice
    $invoice->update(['file_path' => $path]);

    return redirect()->route('invoices.index')->with('success', 'Invoice created and PDF generated successfully.');
}


    

    
}
