<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    // Display all sliders
    public function index()
    {
        $sliders = Slider::all();
        return view('section.sliders.index', compact('sliders'));
    }

    // Show form to create a new slider
    public function create()
    {
        return view('section.sliders.create');
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
            'button_url' => 'required|url',
        ]);

        $imagePath = $request->file('image_url')->store('sliders', 'public');

        Slider::create([
            'image_url' => $imagePath,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
        ]);

        return redirect()->route('sliders.index')->with('success', 'Slider created successfully.');
    }

    // Show form to edit an existing slider
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('section.sliders.edit', compact('slider'));
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
            'button_url' => 'required|url',
        ]);

        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('sliders', 'public');
            $slider->image_url = $imagePath;
        }

        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->description = $request->description;
        $slider->button_text = $request->button_text;
        $slider->button_url = $request->button_url;
        $slider->save();

        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully.');
    }

    // Delete slider
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();

        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully.');
    }
}
