@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
$user = auth()->user();
@endphp




  


  <div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="/default.png" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-reset fw-medium font-size-16">{{ $user->name }}</a>
                <p class="text-muted mt-1 mb-0 font-size-13">{{ $user->user_type }}</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                @if(auth()->user()->usertype == 'admin')

                <li>
                    <a href="{{ route('admin.home') }}" class="waves-effect">
                        <i class="mdi mdi-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('blogs.index') }}" class="waves-effect">
                        <i class="mdi mdi-newspaper"></i>
                        <span>Blog</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('events.index') }}" class="waves-effect">
                        <i class="mdi mdi-calendar"></i>
                        <span>Events</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('projects.index') }}" class="waves-effect">
                        <i class="mdi mdi-briefcase"></i> <!-- Changed to briefcase icon for "Projects" -->
                        <span>Projects</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admins.index') }}" class="waves-effect">
                        <i class="mdi mdi-account"></i> <!-- Changed to account icon for "Users" -->
                        <span>Users</span>
                    </a>
                </li>
                
              @endif

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>