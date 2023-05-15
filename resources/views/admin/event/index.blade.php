@extends('layouts.backend.master')

@section('title', 'Event List')

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('panel.event-page-h1') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.event-page-h1') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row pt-4 pb-4">
                <div class="col-lg-12 col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header d-flex">
                            <h3 class="card-title my-auto" style="font-size: 18px; font-weight: 600;">
                                {{ __('panel.event-list') }}
                                <span class="badge badge-info pt-1 pb-1 pl-2 pr-2 ml-1" data-toggle="tooltip" data-placement="top" title="{{ __('panel.event-tooltip') }}" style="font-size: 14px; font-weight: 500;">{{ $events->count() }}</span>
                            </h3>

                            <a class="btn btn-sm btn-primary ml-auto" href="{{route('admin.events.create')}}"><i class="nav-icon fas fa-plus-circle" style="margin-right: 5px;"></i>{{ __('panel.event-btn-add') }}</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="tblEvent" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">{{ __('panel.event-tbl-sno') }}</th>
                                        <th class="text-center">{{ __('panel.event-tbl-title') }}</th>
                                        <th class="text-center">{{ __('panel.event-tbl-date') }}</th>
                                        <th class="text-center">{{ __('panel.event-tbl-time') }}</th>
                                        <th class="text-center">{{ __('panel.event-tbl-place') }}</th>
                                        <th class="text-center">{{ __('panel.event-tbl-description') }}</th>
                                        <th class="text-center">{{ __('panel.event-tbl-image') }}</th>
                                        <th class="text-center">{{ __('panel.news-tbl-status')}}</th>
                                        <th class="text-center">{{ __('panel.event-tbl-action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $key=>$event)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td class="w-25">{{ Str::limit($event->title, '30') }}</td>
                                            <td>{{ date('d-m-Y', strtotime($event->date)) }}</td>
                                            <td>{{ date('h:i A',strtotime($event->time)) }}</td>
                                            <td>{{ $event->place }}</td>
                                            <td class="w-50">{!! Str::limit($event->description, 300, '...') !!}</td>
                                            <td>
                                                @php
                                                    $path = public_path() . "/storage/event_image/".$event->image;
                                                @endphp

                                                @if (!empty($event['image']) && file_exists($path))
                                                    <img src="{{asset('public/storage/event_image/'.$event->image)}}" width="150" height="100" class="img-responsive rounded" alt="image">
                                                @else
                                                    <img src="{{asset('public/assets/images/'.$event->image)}}" width="150" height="100" class="img-responsive rounded" alt="image">
                                                @endif

                                                {{-- <img src="{{asset('public/storage/event_image/'.$event->image)}}" width="150" height="100" class="img-responsive rounded" alt="image"> --}}
                                            </td>
                                            <td>
                                                @if ($event->status == '0')
                                                    <span class="badge badge-success">Approved</span>
                                                @else
                                                    <span class="badge badge-danger">Pending</span>
                                                @endif
                                            </td>
                                            <td class="text-center w-25">
                                                <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-sm btn-info mt-1"><i class="nav-icon fas fa-edit"></i> Edit</a>

                                                <button type="button" class="btn btn-sm btn-danger mt-1" onclick="deleteEvent({{ $event->id }})"><i class="nav-icon fas fa-trash-alt"></i> Delete</button>
                                                <form id="delete-form-{{ $event->id }}" action="{{ route('admin.events.destroy', $event->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
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
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('panel.event-modal-title') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ __('panel.event-modal-body') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('panel.event-modal-btn-cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="delEvent">{{ __('panel.event-modal-btn-yes') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /. Modal -->
@endsection

@push('js')
    <!-- DataTables  & Plugins -->
    <script src="{{asset('public/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#tblEvent").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#tblEvent_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script>
        // Delete Function
        function deleteEvent(id)
        {
            $("#delModal").modal('show');

            document.getElementById("delEvent").addEventListener("click", function(){
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
            });
        }

        //Initialize Tooltip
        $('[data-toggle=tooltip]').tooltip();
    </script>
@endpush
