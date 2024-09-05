<?php

namespace App\Http\Controllers\Admin\Slider;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\File;


class SliderController extends Controller
{
    // Display all sliders
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    // Show form to create a new slider
    public function create()
    {
        return view('admin.slider.create');
    }

    // Store new slider
    public function store(Request $request)
    {
        $request->validate([
            'image_url' => 'required|image',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'required|string|max:255',
            'button_url' => 'required|string',
        ]);

            // Save image to public/uploads/slider
            $image = $request->file('image_url');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/slider'), $imageName);
            $imagePath = 'uploads/slider/' . $imageName;

        Slider::create([
            'image_url' => $imagePath,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
        ]);

        return redirect()->route('admin.slider.index')->with('success', 'Slider created successfully.');
    }

    // Show form to edit an existing slider
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    // Update slider
     public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $request->validate([
            'image_url' => 'nullable|image',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'required|string|max:255',
            'button_url' => 'required|string',
        ]);

        if ($request->hasFile('image_url')) {
            // Delete the old image
            if (File::exists(public_path($slider->image_url))) {
                File::delete(public_path($slider->image_url));
            }

            // Save new image to public/uploads/slider
            $image = $request->file('image_url');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/slider'), $imageName);
            $slider->image_url = 'uploads/slider/' . $imageName;
        }

        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->description = $request->description;
        $slider->button_text = $request->button_text;
        $slider->button_url = $request->button_url;
        $slider->save();

        return redirect()->route('admin.slider.index')->with('success', 'Slider updated successfully.');
    }

    // Delete slider
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        // Delete the image file
        if (File::exists(public_path($slider->image_url))) {
            File::delete(public_path($slider->image_url));
        }

        $slider->delete();

        return redirect()->route('admin.slider.index')->with('success', 'Slider deleted successfully.');
    }
}
