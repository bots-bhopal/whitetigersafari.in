@extends('layouts.backend.master')

@section('title', 'Create Event')

@push('css')

@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('panel.event-h1') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.event-h1') }}</li>
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
                <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">
                    <div class="card card-primary card-outline">
                        <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">{{ __('panel.event-title') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" placeholder="Enter Event Title Here">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-primary far fa-clipboard copy-button" data-clipboard-target="#title" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard" style="border-top-right-radius: .25rem; border-bottom-right-radius: .25rem;"></button>
                                        </span>
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="date">{{ __('panel.event-date') }}</label>
                                    <input type="date" class="form-control mb-2 @error('date') is-invalid @enderror" id="date" name="date" value="{{old('date')}}" >
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="time">{{ __('panel.event-time') }}</label>
                                    <input type="time" class="form-control mb-2 @error('time') is-invalid @enderror" id="time" name="time" value="{{old('time')}}" >
                                    @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="place">{{ __('panel.event-place') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('place') is-invalid @enderror" id="place" name="place" value="{{old('place')}}" placeholder="Enter Event Place Here">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-primary far fa-clipboard copy-button" data-clipboard-target="#place" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard" style="border-top-right-radius: .25rem; border-bottom-right-radius: .25rem;"></button>
                                        </span>
                                        @error('place')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">{{ __('panel.event-description') }}</label>
                                    <textarea class="ckeditor form-control mb-2 @error('description') is-invalid @enderror" rows="5" id="description" name="description">{{old('description')}}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>{{ __('panel.event-image') }}</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input border mb-2 @error('image') is-invalid @enderror" name="image">
                                        <label class="custom-file-label" for="customFile">{{ __('panel.event-image-file') }}</label>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>{{ __('panel.event-images') }}</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input border @error('images.*') is-invalid @enderror" name="images[]" multiple>
                                        <label class="custom-file-label" for="customFile">{{ __('panel.event-image-file') }}</label>
                                        @error('images.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save" style="margin-right: 5px;"></i>{{ __('panel.event-btn-submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@push('js')

@endpush
