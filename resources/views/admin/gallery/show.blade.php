@extends('layouts.backend.master')

@section('title', 'View Images')

@push('css')
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="{{asset('public/assets/plugins/ekko-lightbox/ekko-lightbox.css')}}">

    <style>
        :root {
            --minimum-width: 300px;
            --ratio: 16/9;
        }

        .card .card-body .image-box img {
            background-color: #ffffff; /* To visualize empty space */
            aspect-ratio: var(--ratio);
            object-fit: contain;
            width: 100%;
            height: 100%;
        }
    </style>
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('panel.gallery-view') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.gallery-view') }}</li>
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
                <div class="col-lg-10 col-md-10 col-sm-12 offset-lg-1 offset-md-1">
                    <h4 class="text-center" style="font-weight: 600;">{{ __('panel.gallery-view-your') }}</span></h5>
                    <!-- Gallery Section Start Here -->
                    <div class="row">
                        @forelse ($images as $image)
                            <div class="col-md-6 col-sm-12">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="image-box">
                                            <a href="{{asset('public/storage/gallery/'. $image->filename)}}" data-toggle="lightbox" data-title="{{$image->original_name}}" data-gallery="gallery">
                                                <img class="img-fluid pad rounded" src="{{asset('public/storage/gallery/'. $image->filename)}}" alt="Gallery Image" style="height: 300px!important;">
                                            </a>
                                        </div>
                                    </div><!-- /.card-body -->

                                    <div class="card-footer d-flex">
                                        <p class="card-title text-center float-none">
                                            {{$image->original_name}}
                                            <span class="badge badge-info">{{ HumanReadable::bytesToHuman($image->file_size) }}</span>
                                        </p>

                                        <div class="ml-auto">
                                            @if ($image->status == '0')
                                                {{ __('panel.news-tbl-status')}} : <span class="badge rounded-pill pt-1 pb-1 pl-2 pr-2 badge-success">Approved</span>
                                            @else
                                                {{ __('panel.news-tbl-status')}} : <span class="badge rounded-pill pt-1 pb-1 pl-2 pr-2 badge-danger">Pending</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- /.card-footer-->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->

                            @empty

                            <div class="col-md-12">
                                <div class="card card-widget">
                                    <div class="card-body">
                                        <h3 class="text-center" style="font-weight: 600;">{{ __('panel.gallery-h5') }}</h3>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        @endforelse
                    </div>
                    <!-- Gallery Section End Here -->

                    <!-- Pagination Section Start Here -->
                    <div class="d-flex justify-content-center">
                        {!! $images->links() !!}
                    </div>
                    <!-- Pagination Section End Here -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@push('js')
    <!-- Ekko Lightbox -->
    <script src="{{asset('public/assets/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
    <script>
        $(function () {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });
        })
    </script>
@endpush
