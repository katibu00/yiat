@extends('frontend.layouts.app')
@section('pageTitle', 'Blogs')
@section('content')


    <!-- page banner start -->
    <div class="page-banner-area bgs-cover overlay text-white py-165 rpy-125 rmt-65"
        style="background-image: url(/frontend/banner1.jpeg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="page-title">Blog Post</h2>
                        <ul class="page-list">
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li>Blog Post</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page banner end -->


    <!-- Blog Page area start -->
    <div class="blog-page-area py-120 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
               
                @foreach ($blogs as $blog)
                    
                <div class="col-xl-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-item__img">
                            <img src="{{ $blog->featured_image }}" alt="featured image">
                            <div class="post-date">
                                <b>{{ $blog->created_at->format('d') }}</b>
                                <span>{{ $blog->created_at->format('M') }}</span>
                            </div>
                        </div>
                        <div class="blog-item__content">
                            <ul class="blog-meta">
                                <li><i class="flaticon-user"></i> <a href="#">{{ $blog->author->name }}</a></li>
                                <li><i class="flaticon-bubble-chat"></i> <a href="#">0 Comment</a></li>
                            </ul>
                            <h4><a href="{{ route('blogs.show', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a></h4>
                            <p>{!! Illuminate\Support\Str::limit($blog->body, 100, '....') !!}</p>
                            <a href="{{ route('blogs.show', ['slug' => $blog->slug]) }}" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Blog Page area end -->
@endsection