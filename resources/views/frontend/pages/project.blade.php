
@extends('frontend.layouts.app')
@section('pageTitle', $project->title)
@section('content')


    <!-- Cause Details area start -->
    <div class="cause-details-area py-120">
        <div class="container">
            <div class="row gap-60">
                <div class="col-lg-8">
                    <div class="cause-details-content">
                        <div class="details-image mb-30">
                            <img src="{{ '/'.$project->featured_image }}" alt="Project Details Image">
                        </div>
                        <h3 class="title">{{ $project->title }}</h3>
                        <br/>
                        {!! $project->body !!}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-sidebar rmt-75">
                        <div class="widget widget_search">
                            <h5 class="widget-title">Search projects</h5>
                            <form class="search-form">
                                <div class="form-group">
                                    <input type="text" placeholder="Search key word" required>
                                </div>
                                <button class="submit-btn" type="submit"><i
                                        class="flaticon-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="widget widget-recent-causes">
                            <h5 class="widget-title">Recent Projects</h5>
                            <ul>
                              @foreach ($recents as $recent)
                                <li>
                                    <div class="image">
                                        <img src="{{ '/'.$recent->featured_image }}" alt="Cause">
                                    </div>
                                    <div class="content">
                                        <h6><a href="cause-details.html">{{ $recent->title }}</a></h6>
                                        
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                       
                        <div class="widget widget_cta">
                            <div class="cta-widget-inner" style="background-image: url(/frontend/banner1.jpeg);">
                                <h5>Join our passionate team of volunteers and make a difference in countering extremism and promoting peace.</h5>
                                <a class="btn ml-5" href="#">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cause Details area end -->
    @endsection