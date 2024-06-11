@extends('frontend.layouts.app')
@section('pageTitle','Home')
@section('content')
@include('frontend.layouts.slider')

    <!-- Urgent cause area start -->
    <div class="urgent-cause-area overlay bgs-cover pt-120 pb-90 rel z-1"
        style="background-image: url(/frontend/img/causes/urgent-causes.jpg);">
        <div class="container container-1370">
            <div class="row gap-40">
                <div class="col-xl-3 col-md-6">
                    <div class="urgent-cause-content mb-30 rmb-65">
                        <div class="section-title mb-30">
                            <span class="section-title__subtitle mb-30">Recent Projects</span>
                            <h3>Transforming Communities Through Innovative <span>Youth Initiatives</span></h3>
                        </div>
                        <p>Explore our impactful projects aimed at countering extremism, supporting survivors, and fostering peace in Northern Nigeria's vulnerable regions</p>
                        <a class="btn ml-5 mt-35" href="{{ route('projects.all') }}">View All Projects</a>
                    </div>
                </div>
                @foreach ($projects as $project)
                <div class="col-xl-3 col-md-6">
                    <div class="cause-item">
                        <div class="image">
                            <img src="{{ $project->featured_image }}" alt="Cause">
                        </div>
                        <div class="content">
                            <h5><a href="causes.html">{{ $project->title }}</a></h5>
                            <p>{!! Illuminate\Support\Str::limit($project->body, 100, '...') !!}</p>
                            <div class="cause-btn">
                                <a class="btn" href="{{ route('projects.show', ['slug' => $project->slug]) }}">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
        <div class="urgent-cause-shapes">
            <img class="one top_image_bounce" src="/frontend/img/shapes/half-circle-with-dots.png" alt="Shape">
            <img class="two left_image_bounce" src="/frontend/img/shapes/circle-with-line-red.png" alt="Shape">
            <img class="three right_image_bounce" src="/frontend/img/shapes/circle-with-line-green.png" alt="Shape">
        </div>
    </div>
    <!-- Urgent cause area end -->


  <!-- About us area start -->
  <div class="about-us-two">
      <div class="container">
          <div class="row gap-100 align-items-center">
              <div class="col-xl-6">
                  <div class="about-us-content-part mb-50">
                      <div class="section-title mb-50">
                          <span class="section-title__subtitle mb-10 mt-4">About us</span>
                          <h2><span>Who</span> We Are</h2>
                      </div>
                      <p>We are the Youth Initiative Against Terrorism (YIAT), a passionate team of young volunteers dedicated to countering extremism, supporting victims, and fostering peace in Northern Nigeria.</p>
                      <hr class="mt-40">
                      <div class="about-middle-images">
                          <img src="/frontend/image1.jpeg" alt="About">
                          <img src="/frontend/image2.jpeg" alt="About">
                          <img src="/frontend/image3.jpeg" alt="About">
                          <img src="/frontend/image4.jpeg" alt="About">
                          <img src="/frontend/image5.jpeg" alt="About">
                      </div>
                      <hr>
                      <ul class="list-style-one pt-15">
                          <li>Empowering Youth for Change</li>
                          <li>Countering Violent Extremism</li>
                          <li>Supporting Terrorism Survivors</li>
                          <li>Promoting Peace Education</li>
                          <li>Uniting Against Terrorism</li>
                          <li>Youth-Led Positive Transformation</li>
                
                      </ul>
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="about-us-image-part mb-65 rel">
                      <img src="/frontend/image1.jpeg" alt="About">
                      <div class="experiences-year" style="background-image: url(/frontend/image4.jpeg);">
                          <span class="experiences-year__number">10</span>
                          <span class="experiences-year__text">Years Experiences</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- About us area end -->

  <!-- Counter area start -->
  <div class="counter-area pt-110 rpt-115 pb-90 bgs-cover rel z-1"
      style="background-image: url(/frontend/boko_haram.jpeg);">
      <div class="container">
          <div class="row justify-content-end">
              <div class="col-xl-8 col-lg-10">
                  <div class="counter-section-content">
                      <div class="section-title">
                          <h2>Countering Boko Haram Extremism for a Safer North East Nigeria</h2>
                      </div>
                      <i>Dedicated to peace,<br> we're countering <span>Boko Haram's</span> influence in North East Nigeria.</i>
                      <div class="counter-btns pt-5 mb-100">
                          <a class="btn" href="{{ route('projects.all') }}">See All Projects</a>
                          <a class="btn btn--yellow" href="#">Contac us</a>
                      </div>
                      <div class="row">
                          <div class="col-md-4 col-sm-6">
                              <div class="counter-item counter-text-wrap">
                                  <div class="counter-item__icon counter-item__icon--green"><i
                                          class="flaticon-solidarity"></i></div>
                                  <div class="counter-item__content">
                                      <span class="count-text" data-speed="3000" data-stop="1000000">0</span>
                                      <h5 class="counter-title">Number of Lives Impacted</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 col-sm-6">
                              <div class="counter-item counter-text-wrap">
                                  <div class="counter-item__icon"><i class="flaticon-help"></i></div>
                                  <div class="counter-item__content">
                                      <span class="count-text" data-speed="3000" data-stop="20">0</span>
                                      <h5 class="counter-title">Community Projects</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 col-sm-6">
                              <div class="counter-item counter-text-wrap">
                                  <div class="counter-item__icon counter-item__icon--yellow"><i
                                          class="flaticon-heart"></i></div>
                                  <div class="counter-item__content">
                                      <span class="count-text" data-speed="3000" data-stop="10">0</span>
                                      <h5 class="counter-title">Years of Service</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Counter area end -->


  <!-- Our Event area start -->
  <div class="our-event-two bgs-cover pt-120 pb-90 rel z-1"
      style="background-image: url(/frontend/img/events/event-bg.jpg);">
      <div class="container container-1090">
          <div class="row justify-content-center">
              <div class="col-xl-7 col-lg-8 col-md-10">
                  <div class="section-title text-center mb-55">
                      <span class="section-title__subtitle mb-10">Our Event</span>
                      <h3>Our <span>Upcoming Event</span></h3>
                      <p>Explore our upcoming events and be part of our mission to foster peace and resilience in Northern Nigeria.</p>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
            {{-- @php
                dd($events);
            @endphp --}}
            @foreach ($events as $event)
            <div class="col-lg-6">
                <div class="event-two-item">
                    <div class="image">
                        <img src="{{ asset($event->featured_image) }}" alt="Event Image">
                    </div>
                    <div class="content">
                        <h6><a href="{{ route('events.show', ['slug' => $event->slug]) }}">{{ $event->title }}</a></h6>
                        <ul>
                            <li><i class="flaticon-pin"></i> {{ $event->location }}</li>
                            <li><i class="flaticon-time"></i> {{ $event->date }}</li>
                        </ul>
                    </div>
                    <div class="date">
                        <b>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $event->date)->format('d') }}</b>
                        <span>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $event->date)->format('M') }}</span>
                    </div>
                </div>
            </div>
        @endforeach
        
            
          </div>
      </div>
  </div>
  <!-- Our Event area end -->


  <!-- Become Volunteer area start -->
  <div class="become-volunteer-two bgc-black py-120 rel z-1">
      <div class="container">
          <div class="row gap-60 align-items-center">
              <div class="col-lg-6">
                  <div class="volunteer-left-image rel rmb-65">
                      <img src="/frontend/boko_haram.jpeg" alt="valunteer">
                      {{-- <img class="circle" src="/frontend/img/valunteer/volunteer-left-circle.jpg" alt="valunteer"> --}}
                      <img class="shape top_image_bounce" src="/frontend/img/shapes/three-round-big-green.png"
                          alt="Shape">
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="volunteer-content form-style-two text-white">
                      <div class="section-title mb-40">
                          <span class="section-title__subtitle mb-10">Be Come Volunteer</span>
                          <h3>Become a <span>volunteer</span></h3>
                      </div>
                      <form action="#" class="volunteer-form">
                          <div class="row">
                              <div class="col-xl-9 mb-30">
                                  <p></p>
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
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="phone_number">Phone Number</label>
                                      <input type="text" id="phone_number" name="phone_number" class="form-control"
                                          value="" placeholder="Phone Number">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="birth-day">Date Of Birth</label>
                                      <input type="date" id="birth-day" name="birth-day" class="form-control"
                                          value="">
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="message">Message</label>
                                      <textarea name="message" id="message" class="form-control" rows="3"
                                          placeholder="Write Your Messages" required></textarea>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group pt-10 mb-0">
                                      <button type="submit" class="btn ml-5">Send us a message</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Become Volunteer area end -->


  <!-- Volunteer area start -->
  {{-- <div class="volunteer-area-two pt-120 pb-90 rel z-1">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-8 col-md-10">
                  <div class="section-title text-center mb-60">
                      <span class="section-title__subtitle mb-10">Our Volunteers</span>
                      <h3>Meet <span>With Volunteers</span></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati
                          consectetur adipisicing</p>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-xl-3 col-sm-6">
                  <div class="valunteer-two-item">
                      <div class="valunteer-two-item__img">
                          <img src="/frontend/img/valunteer/volunteer-two1.jpg" alt="Volunteer">
                      </div>
                      <div class="valunteer-two-item__des">
                          <h5>Brooklyn Simmons</h5>
                          <span>volunteer</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                  <div class="valunteer-two-item">
                      <div class="valunteer-two-item__img">
                          <img src="/frontend/img/valunteer/volunteer-two2.jpg" alt="Volunteer">
                      </div>
                      <div class="valunteer-two-item__des valunteer-two-item__des--yellow">
                          <h5>Savannah Nguyen</h5>
                          <span>volunteer</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                  <div class="valunteer-two-item">
                      <div class="valunteer-two-item__img">
                          <img src="/frontend/img/valunteer/volunteer-two3.jpg" alt="Volunteer">
                      </div>
                      <div class="valunteer-two-item__des valunteer-two-item__des--green">
                          <h5>Darrell Steward</h5>
                          <span>volunteer</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                  <div class="valunteer-two-item">
                      <div class="valunteer-two-item__img">
                          <img src="/frontend/img/valunteer/volunteer-two4.jpg" alt="Volunteer">
                      </div>
                      <div class="valunteer-two-item__des">
                          <h5>Leslie Alexander</h5>
                          <span>volunteer</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div> --}}
  <!-- Volunteer area end -->


  {{-- <!-- Testimonials area start -->
  <div class="testimonials-area-two pb-120">
      <div class="container">
          <div class="row gap-100 align-items-center">
              <div class="col-lg-5">
                  <div class="testimonial-two-image rel z-1 rmb-65">
                      <img src="/frontend/img/testimonials/testimonial-two-left.png" alt="Testimonials">
                      <img class="circle-shape top_image_bounce" src="/frontend/img/testimonials/testimonial-two-bg.png"
                          alt="World">
                  </div>
              </div>
              <div class="col-lg-7">
                  <div class="testimonial-style-two rel">
                      <div class="testimonial-content-slider">
                          <div class="testimonial-content-item">
                              <div class="icon"><img src="/frontend/img/testimonials/quote-icon.png" alt="Quote"></div>
                              <div class="text">Available, but the majority have suffered alteroform, by injected
                                  humour, or randomised wwhdon't oeven slightly believable.you are going to use a ne
                                  of the more obscure Latin</div>
                              <div class="ratting">
                                  <i class="flaticon-star"></i>
                                  <i class="flaticon-star"></i>
                                  <i class="flaticon-star"></i>
                                  <i class="flaticon-star"></i>
                                  <i class="flaticon-star"></i>
                              </div>
                              <h4>Robart Jonson</h4>
                              <span class="designation">Doner, Canada</span>
                          </div>
                          <div class="testimonial-content-item">
                              <div class="icon"><img src="/frontend/img/testimonials/quote-icon.png" alt="Quote"></div>
                              <div class="text">A ne of the more obscure Latin You are going to use. Available, but
                                  the majority have suffered alteration soform, by injected humour, or randomised
                                  words whdon't look even htly.</div>
                              <div class="ratting">
                                  <i class="flaticon-star"></i>
                                  <i class="flaticon-star"></i>
                                  <i class="flaticon-star"></i>
                                  <i class="flaticon-star"></i>
                                  <i class="flaticon-star"></i>
                              </div>
                              <h4>Jesse Rayford</h4>
                              <span class="designation">Doner, Canada</span>
                          </div>
                          <div class="testimonial-content-item">
                              <div class="icon"><img src="/frontend/img/testimonials/quote-icon.png" alt="Quote"></div>
                              <div class="text">Randomised words whdon't look even htly believable Available, but the
                                  majority have suffered alteration soform, by injected humour, a ne of the more
                                  obscure Latin or you are going.</div>
                              <div class="ratting">
                                  <i class="flaticon-star"></i>
                                  <i class="flaticon-star"></i>
                                  <i class="flaticon-star"></i>
                                  <i class="flaticon-star"></i>
                                  <i class="flaticon-star"></i>
                              </div>
                              <h4>Ralph Alfred</h4>
                              <span class="designation">Doner, Canada</span>
                          </div>
                      </div>
                      <div class="testimonial-thumb-two">
                          <div class="testimonial-thumb-item">
                              <img src="/frontend/img/testimonials/testi-thumb1.jpg" alt="Author">
                          </div>
                          <div class="testimonial-thumb-item">
                              <img src="/frontend/img/testimonials/testi-thumb2.jpg" alt="Author">
                          </div>
                          <div class="testimonial-thumb-item">
                              <img src="/frontend/img/testimonials/testi-thumb3.jpg" alt="Author">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Testimonials area end --> --}}


  <!-- Call to action area start -->
  <div class="cta-area bgc-black pt-110 rpt-120 pb-120 rel z-1">
      <div class="container container-1170">
          <div class="row justify-content-center">
              <div class="col-xl-8 col-lg-10">
                  <div class="section-title text-center text-white">
                      <h2>Join Us in Building a Peaceful and Resilient <span>North East Nigeria</span></h2>
                      <p>Make a difference today by supporting our initiatives. Together, we can counter extremism, support survivors, and create a brighter future for North East Nigeria. Join our mission for peace.</p>
                      <a class="btn mt-35" href="#">Join Now</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="cta-area-shapes">
          <img class="one" src="/frontend/img/valunteer/valunteer-bg.png" alt="Shape">
          <img class="two" src="/frontend/img/valunteer/valunteer-bg2.png" alt="Shape">
      </div>
  </div>
  <!-- Call to action area end -->


  <!-- FAQ area start -->
  <div class="faq-area-two py-120">
      <div class="container">
          <div class="row gap-60">
              <div class="col-lg-6">
                  <div class="faq-video-part rel">
                      <img src="/frontend/image5.jpeg" alt="Video">
                      <a class="video-play video-play--two" href="https://www.youtube.com/embed/Wimkqo8gDZ0"
                          data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="faq-content-part rmt-65">
                      <div class="section-title mb-45 for-hide-summary">
                          <span class="section-title__subtitle mb-10">Faq</span>
                          <h2>Answers to Common<span> Questions</span></h2>
                          <p>Find clarity on our mission, initiatives, and impact in promoting peace and resilience in North East Nigeria.</p>
                      </div>
                      <div class="faq-accordion-two" id="faqAccordion">
                          <div class="accordion-item">
                              <h5 class="accordion-header" id="headingThree">
                                  <button class="collapsed" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseThree" aria-expanded="false"
                                      aria-controls="collapseThree">
                                      How do you support survivors of extremism?
                                  </button>
                              </h5>
                              <div id="collapseThree" class="accordion-collapse collapse"
                                  aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                  <div class="accordion-body">
                                    We offer counseling, support sessions, and empowerment programs to help survivors rebuild their lives.
                                  </div>
                              </div>
                          </div>
                          <div class="accordion-item">
                              <h5 class="accordion-header" id="headingOne">
                                  <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                      aria-expanded="true" aria-controls="collapseOne">
                                      What is the main goal of your organization?
                                  </button>
                              </h5>
                              <div id="collapseOne" class="accordion-collapse collapse show"
                                  aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                  <div class="accordion-body">
                                    Our primary goal is to counter extremism and promote peace and resilience in North East Nigeria.
                                  </div>
                              </div>
                          </div>
                          <div class="accordion-item">
                              <h5 class="accordion-header" id="headingTwo">
                                  <button class="collapsed" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      How can I get involved in your initiatives?
                                  </button>
                              </h5>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                  data-bs-parent="#faqAccordion">
                                  <div class="accordion-body">
                                    You can volunteer, donate, or participate in our awareness campaigns. Visit our 'Get Involved' page for details.
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- FAQ area end -->


  <!-- Blog area start -->
  <div class="blog-area-two overlay pt-120 pb-90 rel z-1">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-7 col-lg-8 col-md-10">
                  <div class="section-title text-center text-white mb-55">
                      <span class="section-title__subtitle mb-10">Our Blog Post</span>
                      <h2>Our Latest <span>News & Update</span></h2>
                      <p>Stay informed with our latest news, updates, and stories of resilience, as we work towards a peaceful Northern Nigeria.</p>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              @foreach ($blogs as $blog)
                <div class="col-xl-4 col-md-6">
                    <div class="blog-item blog-item--two">
                        <div class="blog-item__img">
                            <img src="{{ $blog->featured_image }}" alt="featured image">
                        </div>
                        <div class="blog-item__content">
                            <div class="post-date-two">
                                <b>{{ $blog->created_at->format('d') }}</b>
                                <span>{{ $blog->created_at->format('M') }}</span>
                            </div>
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
  <!-- Blog area end -->


  <!-- Client Logo area start -->
  <div class="client-logo-area bgc-lighter py-30">
      <div class="container">
          <div class="client-logo-wrap">
              <div class="client-logo-item">
                  <a href="#"><img src="/frontend/img/client-logo/client-logo1.png" alt="Client Logo"></a>
              </div>
              <div class="client-logo-item">
                  <a href="#"><img src="/frontend/img/client-logo/client-logo2.png" alt="Client Logo"></a>
              </div>
              <div class="client-logo-item">
                  <a href="#"><img src="/frontend/img/client-logo/client-logo3.png" alt="Client Logo"></a>
              </div>
              <div class="client-logo-item">
                  <a href="#"><img src="/frontend/img/client-logo/client-logo4.png" alt="Client Logo"></a>
              </div>
              <div class="client-logo-item">
                  <a href="#"><img src="/frontend/img/client-logo/client-logo5.png" alt="Client Logo"></a>
              </div>
          </div>
      </div>
  </div>
  <!-- Client Logo area end -->




@endsection