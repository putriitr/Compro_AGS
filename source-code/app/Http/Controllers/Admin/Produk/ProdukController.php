<?php

namespace App\Http\Controllers\Admin\Produk;

use App\Http\Controllers\Controller;
use App\Models\ControlGenerationsProduk;
use App\Models\DocumentCertificationsProduk;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\ProdukImage;
use App\Models\ProdukVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        $kategori = Kategori::all();
        return view('admin.produk.index', compact('produks','kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.produk.create', (compact('kategori')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'kegunaan' => 'required',
            'via' => 'required|in:labtek,labverse',
            'kategori_id' => 'required|exists:kategori,id',
            'gambar.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:15000',
            'video.*' => 'nullable|file|mimes:mp4,avi,mkv|max:50000', 
            'user_manual' => 'nullable|file|mimes:pdf,doc,docx|max:20000',
            'control_generation_pdf' => 'nullable|file|mimes:pdf|max:20000',
            'document_certification_pdf' => 'nullable|file|mimes:pdf|max:20000',
    
        ]);
        
        // Create a new Produk instance and fill it with the validated data
        $produk = new Produk;
        $produk->fill($request->all());
        $produk->save();
        
        // Handle user manual upload
        if ($request->hasFile('user_manual')) {
            $userManualName = time() . '_' . Str::slug(pathinfo($request->file('user_manual')->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $request->file('user_manual')->getClientOriginalExtension();
            $request->file('user_manual')->move('uploads/produk/user_manual/', $userManualName);
            $produk->user_manual = 'uploads/produk/user_manual/' . $userManualName;
            $produk->save();
        }

        if ($request->hasFile('control_generation_pdf')) {
            $controlGenerationPdfName = time() . '_' . Str::slug(pathinfo($request->file('control_generation_pdf')->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $request->file('control_generation_pdf')->getClientOriginalExtension();
            $request->file('control_generation_pdf')->move('uploads/produk/control_generations/', $controlGenerationPdfName);
    
            $controlGeneration = new ControlGenerationsProduk;
            $controlGeneration->produk_id = $produk->id;
            $controlGeneration->pdf = 'uploads/produk/control_generations/' . $controlGenerationPdfName;
            $controlGeneration->save();
        }

          // Handle document certification PDF upload
    if ($request->hasFile('document_certification_pdf')) {
        $documentCertificationPdfName = time() . '_' . Str::slug(pathinfo($request->file('document_certification_pdf')->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $request->file('document_certification_pdf')->getClientOriginalExtension();
        $request->file('document_certification_pdf')->move('uploads/produk/document_certifications/', $documentCertificationPdfName);

        $documentCertification = new DocumentCertificationsProduk;
        $documentCertification->produk_id = $produk->id;
        $documentCertification->pdf = 'uploads/produk/document_certifications/' . $documentCertificationPdfName;
        $documentCertification->save();
    }
    
        // Handle video upload
        if ($request->hasFile('video')) {
            foreach ($request->file('video') as $videoFile) {
                $slug = Str::slug(pathinfo($videoFile->getClientOriginalName(), PATHINFO_FILENAME));
                $newVideoName = time() . '_' . $slug . '.' . $videoFile->getClientOriginalExtension();
                $videoFile->move('uploads/produk/videos/', $newVideoName);
    
                $produkVideo = new ProdukVideo;
                $produkVideo->produk_id = $produk->id;
                $produkVideo->video = 'uploads/produk/videos/' . $newVideoName;
                $produkVideo->save();
            }
        }
    
        // Handle images upload
        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $imgProduk) {
                $slug = Str::slug(pathinfo($imgProduk->getClientOriginalName(), PATHINFO_FILENAME));
                $newImageName = time() . '_' . $slug . '.' . $imgProduk->getClientOriginalExtension();
                $imgProduk->move('uploads/produk/', $newImageName);
    
                $produkImage = new ProdukImage;
                $produkImage->produk_id = $produk->id;
                $produkImage->gambar = 'uploads/produk/' . $newImageName;
                $produkImage->save();
            }
        }
    
        return redirect()->route('admin.produk.index')->with('success', 'Produk created successfully.');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.produk.edit', compact('produk','kategori'));
    }

    public function show($id)
    {
        $produk = Produk::with('images', 'videos', 'controlGenerationsProduk', 'documentCertifications')->findOrFail($id);
        return view('admin.produk.show', compact('produk'));
    }
    


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'merk' => 'required|string|max:255',
        'kegunaan' => 'required',
        'via' => 'required|in:labtek,labverse',
        'kategori_id' => 'required|exists:kategori,id',
        'gambar.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:15000',
        'video.*' => 'nullable|file|mimes:mp4,avi,mkv|max:50000',
        'user_manual' => 'nullable|file|mimes:pdf,doc,docx|max:20000',
        'control_generation_pdf' => 'nullable|file|mimes:pdf|max:20000',
        'document_certification_pdf' => 'nullable|file|mimes:pdf|max:20000',
    ]);

    $produk = Produk::findOrFail($id);
    $produk->fill($request->all());
    $produk->save();

    // Handle user manual upload
    if ($request->hasFile('user_manual')) {
        // Delete the old manual if exists
        if ($produk->user_manual && file_exists(public_path($produk->user_manual))) {
            unlink(public_path($produk->user_manual));
        }

        $userManualName = time() . '_' . Str::slug(pathinfo($request->file('user_manual')->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $request->file('user_manual')->getClientOriginalExtension();
        $request->file('user_manual')->move('uploads/produk/user_manual/', $userManualName);
        $produk->user_manual = 'uploads/produk/user_manual/' . $userManualName;
        $produk->save();
    }

    // Handle control generation PDF upload
    if ($request->hasFile('control_generation_pdf')) {
        // Delete the old control generation PDF if exists
        $oldControlGeneration = ControlGenerationsProduk::where('produk_id', $produk->id)->first();
        if ($oldControlGeneration && file_exists(public_path($oldControlGeneration->pdf))) {
            unlink(public_path($oldControlGeneration->pdf));
            $oldControlGeneration->delete();
        }

        $controlGenerationPdfName = time() . '_' . Str::slug(pathinfo($request->file('control_generation_pdf')->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $request->file('control_generation_pdf')->getClientOriginalExtension();
        $request->file('control_generation_pdf')->move('uploads/produk/control_generations/', $controlGenerationPdfName);

        $controlGeneration = new ControlGenerationsProduk;
        $controlGeneration->produk_id = $produk->id;
        $controlGeneration->pdf = 'uploads/produk/control_generations/' . $controlGenerationPdfName;
        $controlGeneration->save();
    }

    // Handle document certification PDF upload
    if ($request->hasFile('document_certification_pdf')) {
        // Delete the old document certification PDF if exists
        $oldDocumentCertification = DocumentCertificationsProduk::where('produk_id', $produk->id)->first();
        if ($oldDocumentCertification && file_exists(public_path($oldDocumentCertification->pdf))) {
            unlink(public_path($oldDocumentCertification->pdf));
            $oldDocumentCertification->delete();
        }

        $documentCertificationPdfName = time() . '_' . Str::slug(pathinfo($request->file('document_certification_pdf')->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $request->file('document_certification_pdf')->getClientOriginalExtension();
        $request->file('document_certification_pdf')->move('uploads/produk/document_certifications/', $documentCertificationPdfName);

        $documentCertification = new DocumentCertificationsProduk;
        $documentCertification->produk_id = $produk->id;
        $documentCertification->pdf = 'uploads/produk/document_certifications/' . $documentCertificationPdfName;
        $documentCertification->save();
    }

    // Handle video upload
    if ($request->hasFile('video')) {
        foreach ($request->file('video') as $videoFile) {
            $slug = Str::slug(pathinfo($videoFile->getClientOriginalName(), PATHINFO_FILENAME));
            $newVideoName = time() . '_' . $slug . '.' . $videoFile->getClientOriginalExtension();
            $videoFile->move('uploads/produk/videos/', $newVideoName);

            $produkVideo = new ProdukVideo;
            $produkVideo->produk_id = $produk->id;
            $produkVideo->video = 'uploads/produk/videos/' . $newVideoName;
            $produkVideo->save();
        }
    }

    // Handle images upload
    if ($request->hasFile('gambar')) {
        foreach ($request->file('gambar') as $imgProduk) {
            $slug = Str::slug(pathinfo($imgProduk->getClientOriginalName(), PATHINFO_FILENAME));
            $newImageName = time() . '_' . $slug . '.' . $imgProduk->getClientOriginalExtension();
            $imgProduk->move('uploads/produk/', $newImageName);

            $produkImage = new ProdukImage;
            $produkImage->produk_id = $produk->id;
            $produkImage->gambar = 'uploads/produk/' . $newImageName;
            $produkImage->save();
        }
    }

    return redirect()->route('admin.produk.index')->with('success', 'Produk updated successfully.');
}




    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('admin.produk.index')->with('success', 'Produk deleted successfully.');
    }
    
}
