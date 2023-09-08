  <!-- navbar start -->
  <div class="navbar-top pt-15 pb-10 bgc-black navtop--one">
    <div class="container">
        <div class="navtop-inner">
            <ul class="topbar-left">
                <li><span>Call Us</span>: 08033174228 </li>
                <li><i class="flaticon-pin"></i> Shiloh, Hawaii 81063</li>
            </ul>
            <ul class="topbar-right">
                <li class="social-area">
                    <span>Follow Us </span>
                    <a href="#"><i class="fab fa-facebook-f text-white"></i></a>
                    <a href="#"><i class="fab fa-twitter text-white"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<nav class="navbar py-30 navbar--one navbar-area navbar-expand-lg">
    <div class="container nav-container navbar-bg">
        <div class="responsive-mobile-menu">
            <button class="menu toggle-btn d-block d-lg-none" data-target="#Iitechie_main_menu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-left"></span>
                <span class="icon-right"></span>
            </button>
        </div>
        <div class="logo">
            <a href="{{ route('home') }}"><img src="/frontend/logo.png" width="60" height="60" alt="logo"></a>
        </div>
        <div class="nav-right-part nav-right-part-mobile">
            <a class="search-bar-btn" href="#">
                <i class="flaticon-magnifying-glass"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="Iitechie_main_menu">
            <ul class="navbar-nav menu-open text-lg-end">
               
              <li class="menu-item">
                    <a href="{{ route('homepage') }}">Home</a>
              </li>
              <li class="menu-item-has-children">
                    <a href="#">About Us</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('about') }}">Our History</a></li>
                        <li><a href="#">Registration and Affiliations</a></li>
                        <li><a href="#">Achievements</a></li>
                    </ul>
                </li>
                {{-- <li class="menu-item">
                  <a href="#">Objectives</a>
                </li> --}}
                <li class="menu-item">
                  <a href="{{ route('projects.all') }}">Projects</a>
                </li>
                {{-- <li class="menu-item">
                  <a href="#">Our Team</a>
                </li> --}}
                <li class="menu-item">
                  <a href="{{ route('blogs.all') }}">Blog</a>
                </li>
               
                <li class="menu-item">
                  <a href="{{ route('contact') }}">Contact Us</a>
                </li>

               
            </ul>
        </div>
        <div class="nav-right-part nav-right-part-desktop">
            <a class="search-bar-btn" href="#">
                <i class="flaticon-magnifying-glass"></i>
            </a>
            <div class="dropdown">
                <a class="dropdown-toggle" href="{{ route('system-admin') }}">
                    <i class="flaticon-user-1"></i>
                </a>
            </div>
            <a class="btn btn--style-two" href="#">Volunteer</a>
        </div>
    </div>
</nav>
<!-- navbar end -->