<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'guest'])->name('homepage');


// Route::get('/', [HomeController::class, 'guest'])->name('home');
Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact');

Route::get('/home', function(){
   
    if (auth()->check()) {
        if (auth()->user()->usertype == 'admin') {
            return redirect()->route('admin.home');
        }
        

    };

    return redirect()->route('home');

})->name('home');

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerIndex'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'registerStore']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/system-admin', [AuthController::class, 'index'])->name('system-admin')->middleware('guest');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/home', [HomeController::class, 'admin'])->name('admin.home');
});

Route::group(['prefix' => 'blogs', 'middleware' => ['auth','admin']], function () {
   
    Route::get('/index', [BlogsController::class, 'index'])->name('blogs.index');
    Route::get('/create', [BlogsController::class, 'create'])->name('blogs.create');
    Route::post('/store', [BlogsController::class, 'store'])->name('blogs.store');
    Route::post('/ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.upload');

    Route::get('/{blog}/edit', [BlogsController::class, 'edit'])->name('blogs.edit');
    Route::put('/{blog}', [BlogsController::class, 'update'])->name('blogs.update');
    Route::delete('/{blog}', [BlogsController::class, 'destroy'])->name('blogs.destroy');

});

Route::group(['prefix' => 'events', 'middleware' => ['auth','admin']], function () {
   
    Route::get('/index', [EventsController::class, 'index'])->name('events.index');
    Route::get('/create', [EventsController::class, 'create'])->name('events.create');
    Route::post('/store', [EventsController::class, 'store'])->name('events.store');

    Route::get('/{event}/edit', [EventsController::class, 'edit'])->name('events.edit');
    Route::put('/{event}', [EventsController::class, 'update'])->name('events.update');
    Route::delete('/{event}', [EventsController::class, 'destroy'])->name('events.destroy');

});
Route::group(['prefix' => 'projects', 'middleware' => ['auth','admin']], function () {
   
    Route::get('/index', [ProjectsController::class, 'index'])->name('projects.index');
    Route::get('/create', [ProjectsController::class, 'create'])->name('projects.create');
    Route::post('/store', [ProjectsController::class, 'store'])->name('projects.store');

    Route::get('/{project}/edit', [ProjectsController::class, 'edit'])->name('projects.edit');
    Route::put('/{project}', [ProjectsController::class, 'update'])->name('projects.update');
    Route::delete('/{project}', [ProjectsController::class, 'destroy'])->name('projects.destroy');

});


Route::group(['prefix' => 'admins', 'middleware' => ['auth','admin']], function () {
   
    Route::get('/', [UsersController::class, 'index'])->name('admins.index');

    Route::get('/create', [UsersController::class, 'create'])->name('admins.create');
    Route::post('/store', [UsersController::class, 'store'])->name('admins.store');

    Route::get('/{project}/edit', [UsersController::class, 'edit'])->name('admins.edit');
    Route::put('/{project}', [UsersController::class, 'update'])->name('admins.update');
    Route::delete('/{project}', [UsersController::class, 'destroy'])->name('admins.destroy');
    
});

Route::get('/blogs/{slug}',  [BlogsController::class, 'show'])->name('blogs.show');
Route::get('/blogs', [BlogsController::class, 'allBlogs'])->name('blogs.all');

Route::get('projects/{slug}', [ProjectsController::class, 'show'])->name('projects.show');
Route::get('/projects', [ProjectsController::class, 'allProjects'])->name('projects.all');

Route::get('/events/{slug}',  [EventsController::class, 'show'])->name('events.show');


Route::get('/about-us', function(){
    return view("frontend.pages.about");
})->name('about');
Route::get('/contact-us', function(){
    return view("frontend.pages.contact");
})->name('contact');



