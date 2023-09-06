<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectsController extends Controller
{
    public function create()
    {
        return view('admin.projects.create');
    }

    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $project = new Project();
        $project->title = $request->input('title');
        $project->slug = Str::slug($project->title);
        $project->body = $request->input('body');

        if ($request->file('featured_image') != null) {
            $destination = 'uploads/';
            $file = $request->file('featured_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($destination, $filename);
            $project->featured_image = $destination . $filename;
        }
        $project->featured = $request->has('featured') ? 1 : 0;
        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project  created successfully.');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $project = Project::findOrFail($id);
        $project->title = $request->input('title');
        $project->body = $request->input('content');

        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/' . $imageName;
            $image->move(public_path('uploads'), $imageName);
            $project->featured_image = $imagePath;
        }
        $project->featured = $request->has('featured') ? 1 : 0;
        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        if ($project->featured_image) {
            Storage::delete($project->featured_image);
        }

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }

    public function show($slug)
    {
        $data['project'] = Project::where('slug',$slug)->first();
        $data['recents'] = Project::where('slug', '!=',$slug)->orderBy('created_at', 'desc')->take(3)->get();
        return view('frontend.pages.project', $data);
    }

    public function allProjects()
    {
        $projects = Project::all();
        return view('frontend.pages.projects', compact('projects'));
    }
}
