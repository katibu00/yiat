@extends('frontend.layouts.app')
@section('pageTitle', $blog->title)
@section('content')

    <!-- Blog Details area start -->
    <div class="blog-details-area py-120">
        <div class="container">
            <div class="row gap-60">
                <div class="col-lg-8">
                    <div class="blog-details-content mb-55">
                        <div class="details-image rel mb-35">
                            <img src="{{ '/'.$blog->featured_image }}" alt="featured image">
                            <div class="post-date">
                                <b>13</b>
                                <span>dec</span>
                            </div>
                        </div>
                        <ul class="blog-meta">
                            <li><i class="flaticon-user"></i> <a href="#">{{ $blog->author->name }}</a></li>
                            <li><i class="flaticon-bubble-chat"></i> <a href="#">0 Comment</a></li>
                        </ul>
                        <h3 class="title">{{ $blog->title }}</h3>
                        <br />
                        {!! $blog->body !!}
                        
                        
                        <hr>
                        <div class="tag-and-share">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <div class="tags">
                                        <strong>Tag : </strong>
                                        {{-- <a href="#">Yiat</a> --}}
                                        
                                    </div>
                                </div>
                                <div class="col-md-5 text-md-end">
                                    <div class="share-area">
                                        <strong>Share: </strong>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>

                
                    

                    <div class="blog-comment-form form-style-two">
                        <form action="#" class="comment-form">
                            <div class="row">
                                <div class="col-xl-12 mb-5">
                                    <h4>Leave a Comment</h4>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value=""
                                            placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Your Email</label>
                                        <input type="email" id="email" name="email" class="form-control" value=""
                                            placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="5"
                                            placeholder="Write Your Messages" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group pt-5">
                                        <input type="checkbox" required id="conditions">
                                        <label class="ms-2" for="conditions">Save my name, email, and website in this
                                            browser for the next time I comment.</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group pt-10 mb-0">
                                        <button type="submit" class="btn ml-5">Post Comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-sidebar rmt-75">
                        <div class="widget widget_search">
                            <h5 class="widget-title">Search Blog</h5>
                            <form class="search-form">
                                <div class="form-group">
                                    <input type="text" placeholder="Search key word" required>
                                </div>
                                <button class="submit-btn" type="submit"><i
                                        class="flaticon-magnifying-glass"></i></button>
                            </form>
                        </div>
                       
                        <div class="widget widget-recent-post">
                            <h4 class="widget-title">Recent News</h4>
                            <ul>
                               
                               @foreach ($recents as $recent) 
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ '/'.$recent->featured_image }}" alt="featured image">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="title"><a href="{{ route('blogs.show', ['slug' => $recent->slug]) }}">{{ $recent->title }}</a></h6>
                                            <ul class="post-info">
                                                <li><i class="flaticon-time"></i> <a href="#">{{ $recent->created_at->format('d M, Y') }}</a></li>
                                                <li><i class="fas fa-user"></i> <a href="#">{{ $recent->author->name }}</a></li>
                                            </ul>
                                        </div>
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
    <!-- Blog Details area end -->
@endsection