<!-- resources/views/admin/events/edit.blade.php -->

@extends('admin.layout.app')

@section('pageTitle', 'Edit Event')

@section('content')

<div class="main-content">
    <div class="page-content">
        <!-- Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title">Edit Event</h4>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Event Edit Form -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('events.update', $event->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $event->title) }}">
                            </div>

                            <div class="form-group">
                                <label for="body">Description</label>
                                <textarea name="body" id="body" class="form-control" rows="5">{{ old('body', $event->body) }}</textarea>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $event->date) }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="location">Location</label>
                                    <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $event->location) }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="featured">Featured</label>
                                <input type="checkbox" name="featured" id="featured" {{ old('featured', $event->featured) ? 'checked' : '' }}>
                            </div>

                            <div class="form-group">
                                <label for="featured_image">Featured Image</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img id="featured_image_preview" class="featured-image-preview" src="{{ asset($event->featured_image) }}" width="100" alt="Featured Image Preview">
                                        <div id="featured_image_placeholder" class="featured-image-placeholder">No Image Selected</div>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="file" name="featured_image" id="featured_image" class="form-control-file" onchange="previewFeaturedImage(event)">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Event Edit Form -->
    </div>

@section('js')
<script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
            toolbar: [
                { name: 'document', items: ['Styles', 'Format'] },
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
                { name: 'clipboard', items: ['Undo', 'Redo', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord'] },
                { name: 'links', items: ['Link', 'Unlink'] },
                { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar'] },
                { name: 'tools', items: ['Maximize', 'Source'] },
                '/',
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote'] }
            ]
        });
    });

    function previewFeaturedImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById('featured_image_preview');
            var placeholder = document.getElementById('featured_image_placeholder');

            preview.src = reader.result;
            preview.style.display = 'block';
            placeholder.style.display = 'none';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection

@endsection
