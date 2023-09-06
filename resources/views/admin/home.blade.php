@extends('admin.layout.app')
@section('pageTitle','Home')
@section('content')

<div class="main-content">

  <div class="page-content">

      <!-- start page title -->
      <div class="row">
          <div class="col-12">
              <div class="page-title-box d-flex align-items-center justify-content-between">
                  <h4 class="page-title mb-0 font-size-18">Dashboard</h4>

                  <div class="page-title-right">
                      <ol class="breadcrumb m-0">
                          <li class="breadcrumb-item active">Welcome Back to El-Habib Foundation</li>
                      </ol>
                  </div>

              </div>
          </div>
      </div>
      <!-- end page title -->

      <div class="row">
          <div class="col-md-3">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Total Admins</h5>
                      <p class="card-text">{{ $totalAdmins }}</p>
                  </div>
              </div>
          </div>

          <div class="col-md-3">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Total Blog Posts</h5>
                      <p class="card-text">{{ $totalBlogPosts }}</p>
                  </div>
              </div>
          </div>

          <div class="col-md-3">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Total Projects</h5>
                      <p class="card-text">{{ $totalProjects }}</p>
                  </div>
              </div>
          </div>

          <div class="col-md-3">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Total Events</h5>
                      <p class="card-text">{{ $totalEvents }}</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
