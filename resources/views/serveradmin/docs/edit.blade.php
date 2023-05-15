@extends('layouts.backend.master')

@section('title', 'Edit Document')

@push('css')

@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('panel.document-edit-h1') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('serveradmin.dashboard')}}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.document-edit-h1') }}</li>
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
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="card card-primary card-outline">
                        <form action="{{ route('serveradmin.document.update', $documents->id) }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">{{ __('panel.document-title') }}</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $documents->title }}" placeholder="Enter Document Title">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- <input type="hidden" name="h_image" value="{{$documents->image}}"> --}}

                                {{-- <div class="form-group">
                                    <label for="image">{{ __('panel.document-image') }}</label>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <img src="{{asset('public/storage/document/images/'.$documents->image)}}" width="250" height="150" class="img-responsive rounded" alt="doc-image">
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="form-group">
                                    <label for="file">{{ __('panel.document-recent-docs') }}</label>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @if ($documents->file_extension)
                                                @if ($documents->file_extension == 'doc' || $documents->file_extension == 'docx')
                                                    <img src="{{asset('public/assets/images/doc-icon/word.png')}}" width="32" height="32" class="img-responsive rounded" alt="doc-image">
                                                    <span style="font-weight: 600; position: relative; top: 4px;">{{ $documents->original_filename }}</span>
                                                @endif

                                                @if ($documents->file_extension == 'pdf')
                                                    <img src="{{asset('public/assets/images/doc-icon/pdf.png')}}" width="32" height="32" class="img-responsive rounded" alt="doc-image">
                                                    <span style="font-weight: 600; position: relative; top: 4px;">{{ $documents->original_filename }}</span>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="nav-icon fa fa-pencil-alt" style="margin-right: 5px;"></i>Update</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                        <!-- /.form -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
