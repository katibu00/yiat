<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventsController extends Controller
{
    public function create()
    {
        return view('admin.events.create');
    }

    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('admin.events.edit', compact('event'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            // 'featured' => 'boolean', // Assuming 'featured' is a boolean field
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $event = new Event();
        $event->slug = Str::slug($event->title); 
        $event->title = $request->input('title');
        $event->body = $request->input('body');
        $event->date = $request->input('date');
        $event->location = $request->input('location');
        $event->featured = $request->has('featured') ? 1 : 0;
    
        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/' . $imageName;
            $image->move(public_path('uploads'), $imageName);
            $event->featured_image = $imagePath;
        }
        $event->featured = $request->has('featured') ? 1 : 0;
        $event->save();
    
        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            // 'featured' => 'boolean',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $event = Event::findOrFail($id);
        $event->title = $request->input('title');
        $event->slug = Str::slug($event->title);
        $event->body = $request->input('body');
        $event->date = $request->input('date');
        $event->location = $request->input('location');
        $event->featured = $request->has('featured') ? 1 : 0;
    
        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/' . $imageName;
            $image->move(public_path('uploads'), $imageName);
            $event->featured_image = $imagePath;
        }
    
        $event->save();
    
        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }
    
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        // Delete the featured image if it exists
        if ($event->featured_image) {
            Storage::delete($event->featured_image);
        }

        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('front.pages.blog_details', compact('event'));
    }
}
