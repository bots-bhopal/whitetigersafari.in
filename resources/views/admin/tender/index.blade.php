@extends('layouts.backend.master')

@section('title', 'Tender List')

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
                    <h1 class="m-0">{{ __('panel.tender-page-h1') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.tender-page-h1') }}</li>
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
                                {{ __('panel.tender-list') }}
                                <span class="badge badge-info pt-1 pb-1 pl-2 pr-2 ml-1" data-toggle="tooltip" data-placement="top" title="Total Number of Tender's" style="font-size: 14px; font-weight: 500;">{{ $tenders->count() }}</span>
                            </h3>
                            <a class="btn btn-sm btn-primary ml-auto" href="{{route('admin.tender.create')}}"><i class="nav-icon fas fa-plus-circle" style="margin-right: 5px;"></i>{{ __('panel.tender-btn-add') }}</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="tblTender" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">{{ __('panel.tender-tbl-sno') }}</th>
                                        <th class="text-center">{{ __('panel.tender-tbl-title') }}</th>
                                        <th class="text-center">{{ __('panel.tender-tbl-description')}}</th>
                                        <th class="text-center">{{ __('panel.tender-tbl-date') }}</th>
                                        <th class="text-center">{{ __('panel.tender-tbl-doc-type') }}</th>
                                        <th class="text-center">{{ __('panel.tender-tbl-file-size') }}</th>
                                        <th class="text-center">{{ __('panel.news-tbl-status')}}</th>
                                        <th class="text-center">{{ __('panel.tender-tbl-action') }}</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($tenders as $key=>$tender)
                                        <tr>
                                            <td class="text-center">{{ $key + 1 }}</td>
                                            <td width="15%" class="text-center">{{$tender->title}}</td>
                                            <td class="text-justify">{!! Str::limit($tender->description, 200, '...') !!}</td>
                                            <td>{{ date('d-M-Y',strtotime($tender->last_date)) }}</td>
                                            <td class="text-center">
                                                @if ($tender->file_extension)
                                                    @if ($tender->file_extension == 'doc' || $tender->file_extension == 'docx')
                                                        <img src="{{asset('public/assets/images/doc-icon/word.png')}}" width="24" height="24" class="img-responsive rounded" alt="doc-image">
                                                    @endif

                                                    @if ($tender->file_extension == 'xls' || $tender->file_extension == 'xlsx')
                                                        <img src="{{asset('public/assets/images/doc-icon/excel.png')}}" width="24" height="24" class="img-responsive rounded" alt="doc-image">
                                                    @endif

                                                    @if ($tender->file_extension == 'pdf')
                                                        <img src="{{asset('public/assets/images/doc-icon/pdf.png')}}" width="28" height="28" class="img-responsive rounded" alt="doc-image">
                                                    @endif
                                                @endif
                                            </td>
                                            <td width="10%" class="text-center">
                                                @if ($tender->file_extension == 'doc' || $tender->file_extension == 'docx')
                                                    <span class="badge badge-primary" style="font-size: 14px;">{{ HumanReadable::bytesToHuman($tender->file_size) }}</span>
                                                @endif

                                                @if ($tender->file_extension == 'xls' || $tender->file_extension == 'xlsx')
                                                    <span class="badge badge-success" style="font-size: 14px;">{{ HumanReadable::bytesToHuman($tender->file_size) }}</span>
                                                @endif

                                                @if ($tender->file_extension == 'pdf')
                                                    <span class="badge badge-danger" style="font-size: 14px;">{{ HumanReadable::bytesToHuman($tender->file_size) }}</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if ($tender->status == '0')
                                                    <span class="badge badge-success">Approved</span>
                                                @else
                                                    <span class="badge badge-danger">Pending</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.tender.edit', $tender->id) }}" class="btn btn-sm btn-primary mt-1" data-toggle="tooltip" data-placement="top" title="Edit" style="font-size: 14px; font-weight: 500;"><i class="far fa-edit"></i> Edit</a>

                                                <button type="button" class="btn btn-sm btn-danger mt-1" onclick="deleteTender({{ $tender->id }})" data-toggle="tooltip" data-placement="top" title="Delete" style="font-size: 14px; font-weight: 500;"><i class="fa fa-trash-alt"></i> Delete</button>
                                                <form id="delete-form-{{ $tender->id }}" action="{{ route('admin.tender.destroy', $tender->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                                <a href="{{ route('str.tender.download', $tender->original_filename) }}" class="btn btn-sm btn-success mt-1" data-toggle="tooltip" data-placement="top" title="Download" style="font-size: 14px; font-weight: 500;"><i class="fa fa-download"></i> Download</a>
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
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('panel.tender-modal-title') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ __('panel.tender-modal-body') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('panel.tender-modal-btn-cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="delTender">{{ __('panel.tender-modal-btn-yes') }}</button>
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
            $("#tblTender").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "excel", "pdf", "print", "colvis"],
                "language": {
                    "sEmptyTable": "<h5 class='font-weight-bold'>{{ __('panel.tender-not-found') }}</h5>"
                }
            }).buttons().container().appendTo('#tblTender_wrapper .col-md-6:eq(0)');
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
    </script>
@endpush
