@extends('frontend.layouts.app')
@section('pageTitle','About Us')
@section('content')

    <!-- page banner start -->
    <div class="page-banner-area bgs-cover overlay text-white py-165 rpy-125 rmt-65"
        style="background-image: url(/frontend/img/background/page-banner.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="page-title">About Us</h2>
                        <ul class="page-list">
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page banner end -->


    <!-- Client Logo area start -->
    <div class="client-logo-area py-75"
        style="background-image: url(/frontend/img/client-logo/client-logo-section-bg.jpg);">
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


    <!-- About area start -->
    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-part">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="image">
                                    <img src="/frontend/image1.jpeg" alt="About">
                                </div>
                                <div class="project-complete mb-30">
                                    <div class="project-complete__icon">
                                        <i class="flaticon-charity"></i>
                                    </div>
                                    <div class="project-complete__content">
                                        <h5>We Complate 20+ Project</h5>
                                        <span>Done for charity</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="image mt-65 rmt-15 rel">
                                    <img src="/frontend/image2.jpeg" alt="About">
                                    <div class="experiences-years">
                                        <span class="experiences-years__number">10</span>
                                        <span class="experiences-years__text">Years Experiences</span>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="/frontend/image3.jpeg" alt="About">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-part rmt-65">
                        <div class="section-title mb-60">
                            <span class="section-title__subtitle mb-10">About us</span>
                            <h2>Empowering Northern Nigeria Through <span>Sustainable Initiatives</span></h2>
                        </div>
                        <p>Youth Initiative Against Terrorism (formerly, Youth Coalition Against Terrorism) is a youth NGO that aims to weaken the appeal of violent extremism in northern Nigeria through counter-radical peace education, skills training for vulnerable youth, and counselling services to victims of terrorism. Formed in 2010 as a volunteer-led network, the majority of our volunteers are themselves victims of terrorism.</p>
                        <p>The organization is formally registered with the Corporate Affairs Commission in 2018 with registration Number: CAC/IT/NO: 120574, FIRS VAT registration number: 23494484-0001, DUNS Registration Number: 85-173-6302 and EuropeAID number: NG-2020-CDB-2509493924. </p>
                        <p>YIAT is a member of the United Network of Young Peacebuilders (UNOY), the Global Coalition on Youth, Peace & Security (GCYPS), as well as the Nigerian Coalition on Youth Peace and Security (NCYPS). 
                        </p>

                        <div class="section-title mb-60">
                            <span class="section-title__subtitle mb-10">Vision</span>
                        </div>
                        <p style="margin-top: -60px">YIAT envisions being the leading youth organization in peace building, countering violent extremism and youth engagement in Nigeria.
                        </p>
                        <div class="section-title mb-60">
                            <span class="section-title__subtitle mb-10">Mission</span>
                        </div>
                        <p style="margin-top: -60px">To serve as a platform for enlightenment and empowerment of youth to reduce the appeal of violent extremism and promote peace in Nigeria.
                        </p>
                        <div class="section-title mb-60">
                            <span class="section-title__subtitle mb-10">Values</span>
                        </div>
                        <p style="margin-top: -60px">Team Work, Equity, Accountability and Service.
                        </p>
                        <a class="btn ml-5 mt-25" href="{{ route('projects.all') }}">See Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About area end -->

@endsection