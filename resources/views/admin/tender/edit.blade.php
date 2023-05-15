@extends('layouts.backend.master')

@section('title', 'Edit Tender')

@push('css')

@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('panel.tender-edit-h1') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.tender-edit-h1') }}</li>
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
                        <div class="card-header bg-light d-flex">
                            <div class="card-title">
                                <i class="fas fa-newspaper" style="margin-right: 5px;"></i>
                                {{ __('panel.tender-edit-h1') }}
                            </div>

                            <div class="ml-auto">
                                @if ($tenders->status == '0')
                                    {{ __('panel.news-tbl-status')}} : <span class="badge rounded-pill pt-1 pb-1 pl-2 pr-2 badge-success">Approved</span>
                                @else
                                    {{ __('panel.news-tbl-status')}} : <span class="badge rounded-pill pt-1 pb-1 pl-2 pr-2 badge-danger">Pending</span>
                                @endif
                            </div>
                        </div>

                        <form action="{{ route('admin.tender.update', $tenders->id) }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">{{ __('panel.tender-title') }}</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$tenders->title}}" placeholder="Enter Tender Title">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">{{ __('panel.tender-description') }}</label>
                                    <textarea class="ckeditor form-control @error('description') is-invalid @enderror" rows="5" id="description" name="description">{{$tenders->description}}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="date">{{ __('panel.tender-date') }}</label>
                                    <input type="datetime-local" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{date('Y-m-d\TH:i', strtotime($tenders->last_date))}}" >
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="docs">{{ __('panel.tender-recent-docs') }}</label>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @if ($tenders->file_extension)
                                                @if ($tenders->file_extension == 'doc' || $tenders->file_extension == 'docx')
                                                    <img src="{{asset('public/assets/images/doc-icon/word.png')}}" width="32" height="32" class="img-responsive rounded" alt="doc-image">
                                                    <span style="font-weight: 600; position: relative; top: 4px;">{{ $tenders->original_filename }}</span>
                                                @endif

                                                @if ($tenders->file_extension == 'xls' || $tenders->file_extension == 'xlsx')
                                                    <img src="{{asset('public/assets/images/doc-icon/excel.png')}}" width="32" height="32" class="img-responsive rounded" alt="doc-image">
                                                    <span style="font-weight: 600; position: relative; top: 4px;">{{ $tenders->original_filename }}</span>
                                                @endif

                                                @if ($tenders->file_extension == 'pdf')
                                                    <img src="{{asset('public/assets/images/doc-icon/pdf.png')}}" width="32" height="32" class="img-responsive rounded" alt="doc-image">
                                                    <span style="font-weight: 600; position: relative; top: 4px;">{{ $tenders->original_filename }}</span>
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
