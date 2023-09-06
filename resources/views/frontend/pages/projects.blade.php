

@extends('frontend.layouts.app')
@section('pageTitle', 'Projects')
@section('content')

    <!-- page banner start -->
    <div class="page-banner-area bgs-cover overlay text-white py-165 rpy-125 rmt-65"
        style="background-image: url(/frontend/banner1.jpeg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="page-title">Our Projects</h2>
                        <ul class="page-list">
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li>Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page banner end -->


    <!-- Our cause area start -->
    <div class="our-cause-page py-120 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                
                @foreach ($projects as $project)
                <div class="col-xl-4 col-md-6">
                    <div class="cause-two-item">
                        <div class="image">
                            <img src="{{ $project->featured_image }}" alt="Cause">
                        </div>
                        <div class="content">
                            
                            <h4><a href="{{ route('projects.show', ['slug' => $project->slug]) }}">{{ $project->title }}</a></h4>
                            
                            <p>{!! Illuminate\Support\Str::limit($project->body, 100, '...') !!}</p>
                            <div class="cause-btn">
                                <a class="btn" href="{{ route('projects.show', ['slug' => $project->slug]) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
           
        </div>
    </div>
    <!-- Our cause area end -->
    @endsection