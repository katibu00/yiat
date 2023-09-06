@extends('admin.layout.app')

@section('pageTitle', 'Create a New Project')
@section('css')
    <style>
        .featured-image-preview {
            display: none;
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

        .featured-image-placeholder {
            width: 200px;
            height: 200px;
            background-color: #f1f1f1;
            text-align: center;
            line-height: 100px;
            font-size: 20px;
            color: #999;
        }
    </style>
@endsection
@section('content')


<div class="main-content">

    <div class="page-content">

          <!-- start page title -->
      <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Projects</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Projects</a></li>
                        <li class="breadcrumb-item active">Create New Project</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Create a New Project</h5>
                        </div>
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
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif


                            <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                                @csrf
                            
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                                </div>
                            
                                <div class="form-group mb-2">
                                    <label for="body">Description</label>
                                    <textarea name="body" id="body" class="form-control" rows="5">{{ old('body') }}</textarea>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="featured">Featured</label>
                                    <input type="checkbox" name="featured" id="featured" {{ old('featured') ? 'checked' : '' }}>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="featured_image">Featured Image</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img id="featured_image_preview" class="featured-image-preview" src="#" alt="Featured Image Preview">
                                            <div id="featured_image_placeholder" class="featured-image-placeholder">No Image Selected</div>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" name="featured_image" id="featured_image" class="form-control-file" onchange="previewFeaturedImage(event)">
                                        </div>
                                    </div>
                                </div>
                            
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('js')
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
