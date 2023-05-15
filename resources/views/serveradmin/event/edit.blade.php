@extends('layouts.backend.master')

@section('title', 'Edit Event')

@push('css')

@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('panel.event-edit-h1') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('serveradmin.dashboard')}}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.event-edit-h1') }}</li>
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
                <div class="col-lg-8 col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header bg-light d-flex">
                            <div class="card-title">
                                <i class="fas fa-newspaper" style="margin-right: 5px;"></i>
                                {{ __('panel.event-edit-h1') }}
                            </div>

                            <div class="ml-auto">
                                @if ($events->status == '0')
                                    {{ __('panel.news-tbl-status')}} : <span class="badge rounded-pill pt-1 pb-1 pl-2 pr-2 badge-success">Approved</span>
                                @else
                                    {{ __('panel.news-tbl-status')}} : <span class="badge rounded-pill pt-1 pb-1 pl-2 pr-2 badge-danger">Pending</span>
                                @endif
                            </div>
                        </div>

                        <form action="{{ route('serveradmin.events.update', $events->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">{{ __('panel.event-title') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$events->title}}" placeholder="Enter Event Title">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-primary far fa-clipboard copy-button" data-clipboard-target="#title" data-toggle="tooltip" data-placement="top" title="Copy to clipboard" style="border-top-right-radius: .25rem; border-bottom-right-radius: .25rem;"></button>
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
                                    <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{$events->date}}">
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="time">{{ __('panel.event-time') }}</label>
                                    <input type="time" class="form-control @error('time') is-invalid @enderror" id="time" name="time" value="{{ date('H:i', strtotime($events->time)) }}">
                                    @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="place">{{ __('panel.event-place') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('place') is-invalid @enderror" id="place" name="place" value="{{$events->place}}" placeholder="Enter Event Place">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-primary far fa-clipboard copy-button" data-clipboard-target="#place" data-toggle="tooltip" data-placement="top" title="Copy to clipboard" style="border-top-right-radius: .25rem; border-bottom-right-radius: .25rem;"></button>
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
                                    <textarea class="ckeditor form-control @error('description') is-invalid @enderror" rows="5" id="description" name="description">{{$events->description}}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <input type="hidden" name="h_image" value="{{$events->image}}">

                                <div class="form-group">
                                    <label>{{ __('panel.event-image') }}</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input border @error('image') is-invalid @enderror" name="image">
                                        <label class="custom-file-label" for="customFile">{{ __('panel.event-image-file') }}</label>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                @foreach ($events->images as $image)
                                    <input type="hidden" name="h_images[]" value="{{$image->image}}">
                                @endforeach

                                <div class="form-group">
                                    <label>{{ __('panel.news-images') }}</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input border @error('images.*') is-invalid @enderror" name="images[]" multiple>
                                        <label class="custom-file-label" for="customFile">{{ __('panel.news-image-file') }}</label>
                                        @error('images.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="nav-icon fa fa-pencil-alt" style="margin-right: 5px;"></i>{{ __('panel.event-btn-update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header bg-light">
                            <i class="fas fa-image" style="margin-right: 5px;"></i>
                            {{ __('panel.news-image') }}
                        </div>

                        <div class="card-body">
                            @php
                                $path = public_path() . "/storage/event_image/".$events->image;
                            @endphp

                            @if (!empty($image['image']) && file_exists($path))
                                <img src="{{asset('public/storage/event_image/'.$events->image)}}" width="100%" height="100%" class="img-responsive rounded" alt="image">
                            @else
                                <img src="{{asset('public/assets/images/'.$events->image)}}" width="100%" height="100%" class="img-responsive rounded" alt="image">
                            @endif
                        </div>

                        <!-- Image Tools -->
                        @if (!empty($events['image']) && file_exists($path))
                            <div class="card-footer d-flex">
                                <button type="button" class="btn btn-danger btn-sm" onclick="deleteImage({{ $events->id }})">Delete Image<i class="fas fa-trash-alt pl-1"></i></button>

                                <form id="delete-image-form-{{ $events->id }}" action="{{ route('serveradmin.events.destroy_image', $events->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header bg-light">
                            <i class="fas fa-image" style="margin-right: 5px;"></i>
                            {{ __('panel.news-images') }}
                        </div>

                        <div class="card-body">
                            <div class="row">
                                @forelse($events->images as $image)
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card mb-2 ">
                                            <div class="card-body pl-0 pr-0">
                                                <div class="image-box">
                                                    <img src="{{ asset('public/storage/event_images/'.$image->image) }}" width="100%" height="100%" class="img-responsive" alt="related-image">
                                                </div>
                                            </div>

                                            <!-- Image Tools -->
                                            @php
                                                $path = public_path() . "/storage/event_images/".$image->image;
                                            @endphp

                                            @if (!empty($image['image']) && file_exists($path))
                                                <div class="card-footer d-flex">
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="deleteImages({{ $image->id }})">Delete Image<i class="fas fa-trash-alt pl-1"></i></button>

                                                    <form id="delete-images-form-{{ $image->id }}" action="{{ route('serveradmin.events.destroy_images', $image->id) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-lg-12">
                                        <h5 class="font-weight-bold text-center">{{ __('panel.news-image-not-available') }}</h5>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure, you want to delete this image ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
                    <button type="button" class="btn btn-danger" id="delImage">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        //Initialize Tooltip
        $('[data-toggle=tooltip]').tooltip();

        // Delete Single Function
        function deleteImage(id)
        {
            $("#delModal").modal('show');

            document.getElementById("delImage").addEventListener("click", function(){
                event.preventDefault();
                document.getElementById('delete-image-form-'+id).submit();
            });
        }

        // Delete Multiple Function
        function deleteImages(id)
        {
            $("#delModal").modal('show');

            document.getElementById("delImage").addEventListener("click", function(){
                event.preventDefault();
                document.getElementById('delete-images-form-'+id).submit();
            });
        }
    </script>
@endpush
