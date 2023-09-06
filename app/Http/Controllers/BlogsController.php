<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogsController extends Controller
{

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function index()
    {
        $blogs = Blog::all();

        return view('admin.blogs.index', compact('blogs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->slug = Str::slug($blog->title); 
        $blog->body = $request->input('content');

        if ($request->file('featured_image') != null) {
            $destination = 'uploads/';
            $file = $request->file('featured_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($destination, $filename);
            $blog->featured_image = $destination . $filename;
        }

        // Assuming you have an authenticated user, assign the creator ID
        $blog->author_id = auth()->user()->id;

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog post created successfully.');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->slug = Str::slug($blog->title); 
        $blog->body = $request->input('content');

        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/' . $imageName;
            $image->move(public_path('uploads'), $imageName);
            $blog->featured_image = $imagePath;
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete the featured image if it exists
        if ($blog->featured_image) {
            Storage::delete($blog->featured_image);
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog post deleted successfully.');
    }

    public function show($slug)
    {
        $data['blog'] = Blog::where('slug',$slug)->first();
        $data['recents'] = Blog::where('slug', '!=',$slug)->orderBy('created_at', 'desc')->take(3)->get(); 
        return view('frontend.pages.blog', $data);
    }

    public function allBlogs()
    {
        $blogs = Blog::all();
        return view('frontend.pages.blogs', compact('blogs'));
    }
}
