<?php

namespace App\Http\Controllers\Admin\Quotation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quotation;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\QuotationProduct;
use App\Models\Produk;


class QuotationAdminController extends Controller
{
    /**
     * Display a list of all quotations for the admin.
     *
     * @return \Illuminate\View\View
     */
        public function index()
        {
            // Load all quotations with related product and user data
            $quotations = Quotation::with('produk', 'user')->get();

            return view('Admin.Quotation.index', compact('quotations'));
        }

    /**
     * Update the status of a specific quotation.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateStatus(Request $request, $id)
    {
        $quotation = Quotation::findOrFail($id);

        // Update the quotation status
        $quotation->update([
            'status' => $request->input('status')
        ]);

        return redirect()->route('admin.quotations.index')->with('success', 'Status quotation berhasil diperbarui.');
    }
    public function show($id)
{
    $quotation = Quotation::with('produk', 'produk.images', 'produk.videos', 'produk.documentCertificationsProduk', 'produk.brosur')->findOrFail($id);

    return view('Admin.Quotation.show', compact('quotation'));
}

public function edit($id)
{
    // Fetch quotations based on the required criteria, e.g., finding all quotations or related quotations for a specific ID
    $quotations = Quotation::with('produk', 'user')->where('id', $id)->get(); 

    // Pass $quotations to the view
    return view('Admin.Quotation.edit', compact('quotations'));
}



public function update(Request $request, $id)
{
    // Validate incoming request data
    $request->validate([
        'recipient_company' => 'required|string|max:255',
        'recipient_contact_person' => 'required|string|max:255',
        'quotation_number' => 'required|string|max:255',
        'quotation_date' => 'required|date',
        'discount' => 'nullable|numeric',
        'ppn' => 'nullable|numeric',
        'notes' => 'nullable|string',
        'terms_conditions' => 'nullable|string',
        'signer_name' => 'nullable|string|max:255',
        'signer_position' => 'nullable|string|max:255',
        'products.*.quantity' => 'required|integer',
        'products.*.unit_price' => 'required|numeric',
        'products.*.produk_id' => 'required|integer', // Produk ID harus ada dan integer

    ]);

    $quotation = Quotation::findOrFail($id);

    // Initialize subtotal
    $subtotal = 0;

    // Loop through products to calculate subtotal and save them
    if ($request->has('products') && is_array($request->input('products'))) {
        foreach ($request->input('products') as $product) {
            $quantity = (int) $product['quantity'];
            $unitPrice = (float) $product['unit_price'];
            $totalPrice = $quantity * $unitPrice;
            $subtotal += $totalPrice;

            // Dapatkan produk terkait untuk mengambil equipment_name dan merk_type
        $relatedProduct = Produk::find($product['produk_id']);
        $equipmentName = $relatedProduct->nama ?? null;
        $merkType = $relatedProduct->merk ?? null;

            // Update or create the quotation product
            QuotationProduct::updateOrCreate(
                ['quotation_id' => $quotation->id, 'produk_id' => $product['produk_id']], // Assuming produk_id is sent from the form
                [
                    'quantity' => $quantity,
                    'unit_price' => $unitPrice,
                    'total_price' => $totalPrice,
                    'equipment_name' => $equipmentName,
                        'merk_type' => $merkType
                ]
            );
        }
    }

    // Perform discount and tax calculations
    $discount = (float) $request->input('discount', 0) / 100;
    $subTotalII = $subtotal - ($subtotal * $discount);

    $ppn = (float) $request->input('ppn', 0) / 100;
    $grandTotal = $subTotalII + ($subTotalII * $ppn);

    // Update quotation details with all relevant fields
    $quotation->update([
        'recipient_company' => $request->input('recipient_company'),
        'recipient_contact_person' => $request->input('recipient_contact_person'),
        'quotation_number' => $request->input('quotation_number'),
        'quotation_date' => $request->input('quotation_date'),
        'subtotal_price' => $subtotal,
        'discount' => $request->input('discount', 0),
        'total_after_discount' => $subTotalII,
        'ppn' => $request->input('ppn', 0),
        'grand_total' => $grandTotal,
        'notes' => $request->input('notes'),
        'terms_conditions' => $request->input('terms_conditions'),
        'authorized_person_name' => $request->input('signer_name'),
        'authorized_person_position' => $request->input('signer_position'),
    ]);

    // Generate the PDF
    $pdf = PDF::loadView('Admin.Quotation.pdf', compact('quotation'));

    // Create a filename based on the current time and the original file name
    $filename = time() . '_' . Str::slug('Quotation_' . $quotation->id) . '.pdf';

    // Define the path where the PDF will be saved
    $path = public_path('pdfs/' . $filename);

    // Ensure the directory exists
    if (!File::exists(public_path('pdfs'))) {
        File::makeDirectory(public_path('pdfs'), 0755, true);
    }

    // Save the PDF to the specified path
    $pdf->save($path);

    // Update the file path in the database (store the relative path)
    $quotation->update(['pdf_path' => 'pdfs/' . $filename]);

    return redirect()->route('admin.quotations.index')->with('success', 'Quotation updated and PDF generated successfully.');
}




    /**
     * Upload a file for a specific quotation.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function uploadFile(Request $request, $id)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:2048'
        ]);

        $quotation = Quotation::findOrFail($id);

        if ($request->hasFile('file')) {
            // Store file and update the file path in the quotation record
            $filePath = $request->file('file')->store('quotations', 'public');
            $quotation->update(['file_path' => $filePath]);
        }

        return redirect()->route('admin.quotations.index')->with('success', 'File berhasil diunggah untuk quotation.');
    }
}
