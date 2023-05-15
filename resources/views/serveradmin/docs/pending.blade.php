@extends('layouts.backend.master')

@section('title','Pending Documents')

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
                    <h1 class="m-0">{{ __('panel.dash-pending-documents') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('serveradmin.dashboard')}}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.dash-pending-documents') }}</li>
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
                                {{ __('panel.dash-pending-documents') }}
                                <span class="badge badge-info pt-1 pb-1 pl-2 pr-2 ml-1" data-toggle="tooltip" data-placement="top" title="Total Number of Pending Document's" style="font-size: 14px; font-weight: 500;">{{ $pendingDocument->count() }}</span>
                            </h3>
                            {{-- <a class="btn btn-sm btn-primary ml-auto" href="{{route('superadmin.document.create')}}"><i class="nav-icon fas fa-plus-circle" style="margin-right: 5px;"></i>{{ __('panel.document-btn-add') }}</a> --}}
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="tblDocs" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">{{ __('panel.document-tbl-sno') }}</th>
                                        <th class="text-center">{{ __('panel.document-tbl-title') }}</th>
                                        {{-- <th class="text-center">{{ __('panel.document-tbl-image') }}</th> --}}
                                        <th class="text-center">{{ __('panel.document-tbl-doc-type') }}</th>
                                        <th class="text-center">{{ __('panel.document-tbl-file-size') }}</th>
                                        <th class="text-center">{{ __('panel.news-tbl-status')}}</th>
                                        <th class="text-center">{{ __('panel.document-tbl-action') }}</th>
                                    </tr>
                                </thead>

                                    @foreach($pendingDocument as $key => $document)
                                        <tr>
                                            <td class="text-center">{{ $key + 1 }}</td>
                                            <td width="15%" class="text-center">{{$document->title}}</td>
                                            {{-- <td class="text-center">
                                                <img src="{{asset('public/storage/document/images/'.$document->image)}}" width="150" height="100" class="img-responsive rounded" alt="doc-image">
                                            </td> --}}
                                            <td class="text-center">
                                                @if ($document->file_extension)
                                                    @if ($document->file_extension == 'doc' || $document->file_extension == 'docx')
                                                        <img src="{{asset('public/assets/images/doc-icon/word.png')}}" width="24" height="24" class="img-responsive rounded" alt="doc-image">
                                                    @endif

                                                    @if ($document->file_extension == 'pdf')
                                                        <img src="{{asset('public/assets/images/doc-icon/pdf.png')}}" width="28" height="28" class="img-responsive rounded" alt="doc-image">
                                                    @endif
                                                @endif
                                            </td>
                                            <td width="10%" class="text-center">
                                                @if ($document->file_extension == 'doc' || $document->file_extension == 'docx')
                                                    <span class="badge badge-primary" style="font-size: 14px;">{{ HumanReadable::bytesToHuman($document->file_size) }}</span>
                                                @endif

                                                @if ($document->file_extension == 'pdf')
                                                    <span class="badge badge-danger" style="font-size: 14px;">{{ HumanReadable::bytesToHuman($document->file_size) }}</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <input data-id="{{$document->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-size="small" data-toggle="toggle" data-style="slow" data-on="Approved" data-off="Pending" {{ $document->status ? '' : 'checked' }}>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('serveradmin.document.edit', $document->id) }}" class="btn btn-sm btn-primary"><i class="far fa-edit" style="margin-right: 5px;"></i>Edit</a>

                                                <button type="button" class="btn btn-sm btn-danger" onclick="deleteTender({{ $document->id }})"><i class="fa fa-trash-alt" style="margin-right: 5px;"></i>Delete</button>
                                                <form id="delete-form-{{ $document->id }}" action="{{ route('serveradmin.document.destroy', $document->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                                <a href="{{ route('btr.docs.download', $document->original_filename) }}" class="btn btn-sm btn-success"><i class="fa fa-download" style="margin-right: 4px;"></i>Download</a>
                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                        <!-- /.card-body -->
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
                    Are you sure, you want to delete this document ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
                    <button type="button" class="btn btn-danger" id="delTender">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
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
            $("#tblDocs").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "excel", "pdf", "print", "colvis"],
                "language": {
                    "sEmptyTable": "<h5 class='font-weight-bold'>{{ __('panel.document-not-found') }}</h5>"
                }
            }).buttons().container().appendTo('#tblDocs_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script>
        // Delete Function
        function deleteTender(id)
        {
            $("#delModal").modal('show');

            document.getElementById("delTender").addEventListener("click", function(){
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
            });
        }

        //Initialize Tooltip
        $('[data-toggle=tooltip]').tooltip();

        // Toggle Switch Document
        $('#tblDocs').on('draw.dt', function(){
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 0 : 1;
                var doc_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: 'changedocumentstatus',
                    data: {'status': status, 'id': doc_id},
                    success: function(data){
                        if(status == 0)
                        {
                            toastr['success'](data.message);
                        }
                        else if(status == 1)
                        {
                            toastr['error'](data.message);
                        }
                        else
                        {
                            toastr['warning'](data.message);
                        }
                    }
                });
                //Alert
                setTimeout(function () {
                    $('.alert').slideUp('slow');
                }, 4000);
            });
        });
    </script>
@endpush
