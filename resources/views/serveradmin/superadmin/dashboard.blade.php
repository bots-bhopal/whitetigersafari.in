@extends('layouts.backend.master')

@section('title', 'Super Admin List')

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Superadmin List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('serveradmin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Superadmin List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content-header">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div id="myAlert"></div>
                {{-- @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif --}}
                <div class="card">
                    <h5 class="card-header">Superadmin List</h5>
                    <div class="card-body">
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
                                @foreach($admins as $admin)
                                    <tr>
                                        <td>{{$id}}</td>
                                        <td>{{$admin->name}}</td>
                                        <td>{{$admin->email}}</td>
                                        <td>{{$admin->role->name}}</td>
                                        <td class="text-center">
                                            <input data-id="{{$admin->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-size="small" data-toggle="toggle" data-style="slow" data-on="Active" data-off="Deactive" {{ $admin->status ? '' : 'checked' }}>
                                        </td>
                                        <!-- <td class="text-center">
                                            @if($admin->status == '0')
                                                <span class="badge badge-success">Active</span>
                                            @elseif($admin->status == '1')
                                                <span class="badge badge-danger">Deactive</span>
                                            @endif
                                        </td> -->
                                        <td>{{$admin->created_at}}</td>
                                        <td>
                                            <a href="{{ route('serveradmin.editSuperAdminRole', $admin->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{ route('serveradmin.changesuperadminpassword', $admin->id) }}" class="btn btn-sm btn-warning">Change Password</a>
                                            <button type="button" class="btn btn-sm btn-danger" onclick="deleteUser({{ $admin->id }})">Delete</button>
                                            <form id="delete-form-{{ $admin->id }}" action="{{ route('serveradmin.deleteUserRole', $admin->id) }}" method="POST" style="display: none;">
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
                </div>
            </div>
        </div>
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
