<?php

namespace App\Http\Controllers\Admin\Slider;


use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;


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

        $routes = [
            'about' => route('about'),
            'product' => route('product'),
            'portal' => route('portal'),
            // Add more routes as needed
        ];

        $activities = Activity::all(); // Fetch all activities for selection


        return view('admin.slider.create', compact('routes','activities'));
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
            'button_url' => 'required|string', // Modify to dynamic URL handling
        ]);

        // Save image to public/uploads/slider
        $image = $request->file('image_url');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads/slider'), $imageName);
        $imagePath = 'uploads/slider/' . $imageName;

        // Determine if the button URL comes from a pre-defined route or an activity
        if ($request->filled('activity_id')) {
            $activity = Activity::find($request->activity_id);
            $buttonUrl = route('activity.show', $activity->id);
        } else {
            $buttonUrl = $request->button_url;
        }

        Slider::create([
            'image_url' => $imagePath,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_url' => $buttonUrl, // Dynamic button URL
        ]);

        return redirect()->route('admin.slider.index')->with('success', 'Slider created successfully.');
    }

    // Show form to edit an existing slider
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        $activities = Activity::all(); // Fetch activities for editing
        $routes = [
            'about' => route('about'),
            'product' => route('product'),
            'portal' => route('portal'),
        ];

        return view('admin.slider.edit', compact('slider', 'routes', 'activities'));
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

        // Dynamic button URL handling
        if ($request->filled('activity_id')) {
            $activity = Activity::find($request->activity_id);
            $slider->button_url = route('activity.show', $activity->id);
        } else {
            $slider->button_url = $request->button_url;
        }

        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->description = $request->description;
        $slider->button_text = $request->button_text;
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
