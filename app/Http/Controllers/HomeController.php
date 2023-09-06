<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function admin()
    {
        $totalAdmins = User::count();
        $totalBlogPosts = Blog::count();
        $totalProjects = Project::count();
        $totalEvents = Event::count();
    
        return view('admin.home', compact('totalAdmins', 'totalBlogPosts', 'totalProjects', 'totalEvents'));
    }
    


    public function guest()
    {
        $data['blogs'] = Blog::orderBy('created_at', 'desc')->take(3)->get();;

        $data['projects'] = Project::where('featured', true)->orderBy('created_at', 'desc')->take(3)->get();
        $data['events'] = Event::where('featured', true)->orderBy('created_at', 'desc')->take(4)->get();
        return view('frontend.pages.home', $data);
    }

    
}
