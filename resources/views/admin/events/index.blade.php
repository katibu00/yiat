@extends('admin.layout.app')

@section('pageTitle', 'Events')

@section('content')



<div class="main-content">

    <div class="page-content">

          <!-- start page title -->
      <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Events</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Events</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Events</h5>
                            <a href="{{ route('events.create') }}" class="btn btn-primary">Create New Event</a>
                        </div>
                        
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if($events->isEmpty()) <!-- Check if events are empty -->
                                <p>No events found.</p>
                            @else
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Thumbnail</th>
                                            <th style="width: ">Title</th>
                                            <th style="width: 20%">Body</th>
                                            <th>Date</th>
                                            <th>Location</th>
                                            <th>Featured</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($events as $event)
                                            <tr>
                                                <td>
                                                    @if($event->featured_image)
                                                        <img src="{{ asset($event->featured_image) }}" width="60" height="50" alt="Thumbnail" class="img-thumbnail">
                                                    @else
                                                        No Image
                                                    @endif
                                                </td>
                                                <td>{{ $event->title }}</td>
                                                <td>{{ Str::limit(strip_tags($event->body), 50) }}</td>
                                                <td>{{ $event->date }}</td>
                                                <td>{{ @$event->location }}</td>
                                                <td>
                                                    @if($event->featured)
                                                    <span class="badge bg-success">Featured</span>
                                                    @else
                                                        <span class="badge bg-secondary">Not Featured</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-secondary">Edit</a>
                                                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Event?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
@endsection
