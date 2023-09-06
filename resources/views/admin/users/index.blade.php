@extends('admin.layout.app')

@section('pageTitle', 'Admins')

@section('content')
<div class="main-content">
    <div class="page-content">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Admins</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Admins</li>
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
                        <h5 class="card-title">Admins</h5>
                        <a href="{{ route('admins.create') }}" class="btn btn-primary">Create New Admin</a>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table style="width: 100%; border-collapse: collapse;">
                                <thead>
                                    <tr style="background-color: #f2f2f2;">
                                        <th style="padding: 10px; border: 1px solid #ddd;">#</th>
                                        <th style="padding: 10px; border: 1px solid #ddd;">Name</th>
                                        <th style="padding: 10px; border: 1px solid #ddd;">Phone</th>
                                        <th style="padding: 10px; border: 1px solid #ddd;">Email</th>
                                        <th style="padding: 10px; border: 1px solid #ddd;">About</th>
                                        <th style="padding: 10px; border: 1px solid #ddd;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $key+1 }}</td>
                                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $user->name }}</td>
                                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $user->phone }}</td>
                                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $user->email }}</td>
                                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $user->about }}</td>
                                            <td style="padding: 10px; border: 1px solid #ddd;">
                                                <a href="{{ route('admins.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('admins.destroy', $user->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this admin?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
