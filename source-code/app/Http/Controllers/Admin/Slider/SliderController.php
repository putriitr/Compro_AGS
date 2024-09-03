<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::paginate(10);
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'deskripsi' => 'required',
            'url' => 'nullable|string',
            'tombol' => 'nullable|string',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            // Mengambil file yang diunggah
            $image = $request->file('image');
            $slug = Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME));
            $newImageName = time() . '_' . $slug . '.' . $image->getClientOriginalExtension();

            // Pindahkan gambar ke direktori yang diinginkan
            $image->move(public_path('uploads/slider/'), $newImageName);

            // Path gambar yang akan disimpan di database
            $imagePath = 'uploads/slider/' . $newImageName;
        }

        // Membuat slider dengan data yang diberikan
        Slider::create([
            'image' => $imagePath,
            'deskripsi' => $request->input('deskripsi'),
            'url' => $request->input('url'),
            'tombol' => $request->input('tombol'),
        ]);

        return redirect()->route('slider.index')->with('success', 'Slider created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image',
            'deskripsi' => 'required',
            'url' => 'nullable|string',
            'tombol' => 'nullable|string',
        ]);

        $slider = Slider::findOrFail($id);

        $imagePath = $slider->image; // Default to the existing image path

        if ($request->hasFile('image')) {
            // Mengambil file yang diunggah
            $image = $request->file('image');
            $slug = Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME));
            $newImageName = time() . '_' . $slug . '.' . $image->getClientOriginalExtension();

            // Pindahkan gambar ke direktori yang diinginkan
            $image->move(public_path('uploads/slider/'), $newImageName);

            // Path gambar yang akan disimpan di database
            $imagePath = 'uploads/slider/' . $newImageName;

            // Hapus gambar lama jika ada
            if ($slider->image && file_exists(public_path($slider->image))) {
                unlink(public_path($slider->image));
            }
        }

        // Update slider dengan data yang diberikan
        $slider->update([
            'image' => $imagePath,
            'deskripsi' => $request->input('deskripsi'),
            'url' => $request->input('url'),
            'tombol' => $request->input('tombol'),
        ]);

        return redirect()->route('slider.index')->with('success', 'Slider updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();

        return redirect()->route('slider.index')->with('success', 'Slider deleted successfully.');
    }
}
