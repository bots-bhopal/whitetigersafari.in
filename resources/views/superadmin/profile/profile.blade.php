@extends('layouts.backend.master')

@section('title','Super Admin Profile')

@push('css')

@endpush

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('panel.profile-admin-h1') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('superadmin.dashboard')}}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.profile-admin-h1') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 offset-lg-3 offset-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            {{-- <div class="text-center">
                                @if (Auth::user()->image)
                                    <img class="profile-user-img img-fluid img-circle"
                                    src="{{asset('public/storage/profile/'.Auth::user()->image)}}"
                                    alt="User profile picture">
                                @else
                                    <img class="profile-user-img img-fluid img-circle"
                                    src="{{asset('public/storage/profile/avatar.jpg')}}"
                                    alt="User profile picture">
                                @endif
                            </div> --}}

                            <h3 class="profile-username text-center" style="font-weight: 600;">{{ __('panel.profile-msg') }} {{ Auth::user()->name }}</h3>
                            <h6 class="text-center" style="font-weight: 500;">{{ Auth::user()->email }}</h6>

                            <form action="{{route('superadmin.profile.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="inputName">{{ __('panel.profile-name') }}</label>
                                    <input type="text" class="form-control {{($errors->any() && $errors->first('name')) ? 'is-invalid' : ''}}" id="name" name="name" value="{{ Auth::user()->name }}" placeholder="Enter Your Name">
                                    @if ($errors->any())
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$errors->first('name')}}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail">{{ __('panel.profile-email') }}</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="Enter Your Email" disabled>
                                    {{-- @if ($errors->any())
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$errors->first('email')}}</strong>
                                        </span>
                                    @endif --}}
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary float-right"><i class="nav-icon fas fa-upload" style="margin-right: 5px;"></i>{{ __('panel.profile-btn-update') }}</button>
                                    @if (Auth::user()->role->id == '2')
                                        <a href="{{route('superadmin.dashboard')}}" class="btn btn-danger"><i class="nav-icon fas fa-arrow-circle-left" style="margin-right: 5px;"></i>{{ __('panel.profile-btn-back') }}</a>
                                    @endif
                                </div>
                            </form>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col (end) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@push('js')

@endpush
