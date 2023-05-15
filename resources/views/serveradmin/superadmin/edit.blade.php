@extends('layouts.backend.master')

@section('title', 'Edit Super Admin')

@section('content')
    <style>
        .error{
            color:red;
        }
    </style>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Superadmin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('serveradmin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Edit Superadmin</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content-header">
        <div class="row">
            <div class="col-lg-10 col-md-10 offset-lg-1 offset-md-1 col-sm-12">
                {{-- @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif --}}
                <div class="card card-primary card-outline">
                    <h5 class="card-header d-flex">Current Role : {{$user_roles->role->name}}
                        @if($user_roles->status == '0')
                            <span class="badge badge-success ml-auto">Active</span>
                        @elseif($user_roles->status == '1')
                            <span class="badge badge-danger ml-auto">Deactive</span>
                        @endif
                    </h5>
                    <div class="card-body">
                        <form action="{{url('serveradmin/superadmin-role-update/'.$user_roles->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">User Name: </label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$user_roles->name}}" placeholder="Enter Name Here">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">User Email: </label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$user_roles->email}}" placeholder="Enter Email Here">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">User Role: </label>
                                <div class="col-sm-10">
                                    <select name="roles" class="form-control @error('roles') is-invalid @enderror">
                                        <option value="">----- Select Role -----</option>
                                        <option value="2">Super Admin</option>
                                        <option value="3">Admin</option>
                                    </select>
                                    @error('roles')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">UPDATE</button>
                                <a href="{{url('serveradmin/dashboard')}}" class="btn btn-danger">BACK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->

@endsection
