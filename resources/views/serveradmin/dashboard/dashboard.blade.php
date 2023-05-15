@extends('layouts.backend.master')

@section('title','Server Admin Dashboard')

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
                    <h1 class="m-0">{{ __('panel.dash-h1') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('serveradmin.dashboard') }}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.dash-h1') }}</li>
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
                <div class="col-md-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h5 class="card-title">{{ __('panel.dash-overview') }}</h5>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                        <h3>{{ $news_count }}</h3>

                                        <p>{{ __('panel.dash-total-news') }}</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-ios-paper"></i>
                                        </div>
                                        <a href="{{ route('serveradmin.newses.index') }}" class="small-box-footer">{{ __('panel.dash-view-news') }} <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                        <h3>{{ $pending_news }}</h3>

                                        <p>{{ __('panel.dash-pending-news') }}</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-ios-paper"></i>
                                        </div>
                                        <a href="{{ route('serveradmin.newses.pending') }}" class="small-box-footer">{{ __('panel.dash-view-news') }} <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                        <h3>{{ $event_count }}</h3>

                                        <p>{{ __('panel.dash-total-event') }}</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-ios-paper"></i>
                                        </div>
                                        <a href="{{ route('serveradmin.events.index') }}" class="small-box-footer">{{ __('panel.dash-view-event') }} <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                        <h3>{{ $pending_event }}</h3>

                                        <p>{{ __('panel.dash-pending-event') }}</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-ios-paper"></i>
                                        </div>
                                        <a href="{{ route('serveradmin.events.pending') }}" class="small-box-footer">{{ __('panel.dash-view-event') }} <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->

                                {{-- <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                        <h3>{{ $tender_count }}</h3>

                                        <p>{{ __('panel.dash-total-tenders') }}</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-document-text"></i>
                                        </div>
                                        <a href="{{ route('serveradmin.tender.index') }}" class="small-box-footer">{{ __('panel.dash-view-tenders') }} <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                        <h3>{{ $pending_tenders }}</h3>

                                        <p>{{ __('panel.dash-pending-tenders') }}</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-document-text"></i>
                                        </div>
                                        <a href="{{ route('serveradmin.tender.pending') }}" class="small-box-footer">{{ __('panel.dash-view-tenders') }} <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div> --}}
                                <!-- ./col -->

                                {{-- <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                        <h3>{{ $docs_count }}</h3>

                                        <p>{{ __('panel.dash-total-documents') }}</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-android-document"></i>
                                        </div>
                                        <a href="{{ route('serveradmin.document.index') }}" class="small-box-footer">{{ __('panel.dash-view-documents') }} <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                        <h3>{{ $pending_docs }}</h3>

                                        <p>{{ __('panel.dash-pending-documents') }}</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-android-document"></i>
                                        </div>
                                        <a href="{{ route('serveradmin.document.pending') }}" class="small-box-footer">{{ __('panel.dash-view-documents') }} <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div> --}}
                                <!-- ./col -->

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                        <h3>{{ $gallery_count }}</h3>

                                        <p>{{ __('panel.dash-total-gallery') }}</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-images"></i>
                                        </div>
                                        <a href="{{ route('serveradmin.images.index') }}" class="small-box-footer">{{ __('panel.dash-view-gallery') }} <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-light">
                                        <div class="inner">
                                        <h3>{{ $pending_images }}</h3>

                                        <p>{{ __('panel.dash-pending-gallery') }}</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-images"></i>
                                        </div>
                                        <a href="{{ route('serveradmin.images.pending') }}" class="small-box-footer">{{ __('panel.dash-view-gallery') }} <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Admin List -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h5 class="card-title">{{ __('panel.dash-admin-list') }}</h5>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    {{-- <div class="table-responsive"> --}}
                                        <table id="tblUser" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th class="text-center">Active/Deactive</th>
                                                    <th>Created_At</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            @php
                                                $id = 1;
                                            @endphp
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{$id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->role->name}}</td>
                                                    <td class="text-center">
                                                        <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-size="small" data-toggle="toggle" data-style="slow" data-on="Active" data-off="Deactive" {{ $user->status ? '' : 'checked' }}>
                                                    </td>
                                                    <!-- <td class="text-center">
                                                        @if($user->status == '0')
                                                            <span class="badge badge-success">Active</span>
                                                        @elseif($user->status == '1')
                                                            <span class="badge badge-danger">Deactive</span>
                                                        @endif
                                                    </td> -->
                                                    <td>{{$user->created_at}}</td>
                                                    <td>
                                                        <a href="{{ route('serveradmin.editUserRole', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="{{ route('serveradmin.changeadminpassword', $user->id) }}" class="btn btn-sm btn-warning">Change Password</a>
                                                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteUser({{ $user->id }})">Delete</button>
                                                        <form id="delete-form-{{ $user->id }}" action="{{ route('serveradmin.deleteUserRole', $user->id) }}" method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </td>
                                                </tr>
                                                @php
                                                    $id++;
                                                @endphp
                                            @endforeach
                                            </tbody>
                                        </table>
                                    {{-- </div> --}}
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.admin list -->


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
                    Are you sure, you want to delete this user account ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
                    <button type="button" class="btn btn-danger" id="del-user">Yes, Delete</button>
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
            $("#tblUser").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#tblUser_wrapper .col-md-6:eq(0)');
        });
    </script>

    <!-- Delete Function -->
    <script>
        function deleteUser(id)
        {
            $("#delModal").modal('show');

            document.getElementById("del-user").addEventListener("click", function(){
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
            });
        }

        // Toggle Switch User
        $('#tblUser').on('draw.dt', function(){
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 0 : 1;
                var user_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: 'changeuserstatus',
                    data: {'status': status, 'user_id': user_id},
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
