@extends('admin.master')
@section('content')

<div class="content">

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Dashboard</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Employee</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">List of Employee</a>
                </li>
            </ul>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List of Employee</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi-filter-select" class="display table table-striped table-hover" >
                                <thead>
                                    <tr>
                                        <th>sl</th>
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th>Email</th>                                        
                                        <th>Phone</th>                                        
                                        <th>Designation</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($search_result as $row)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$row->user_unique_id}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->phone}}</td>
                                        <td>{{$row->designation_name}}</td>
                                        <td>{{$row->role_name}}</td>
                                        <td>
                                            <a class='btn btn-primary btn-sm mr-2' href='{{url('employees/'.$row->id)}}'>View</a>
                                        </td>
                                       
                                    </tr>  
                                    @endforeach
                                </tbody>
                             
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--<script type="text/javascript">
    $(document).ready(function () {
        var dataTable = $('#multi-filter-select').DataTable({
            "pageLength": 10,
            "processing": true,
            // DataTables server-side processing mode
             "serverSide": true,
             "order": [],
        // Initial no order.
           "ajax": {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url : "{{url("user-list")}}",
            type : 'POST',
            'data': function(data){
             }
        },
        columns: [
            { data: 'sl' },
            { data: 'user_id' },
            { data: 'name' },
            { data: 'email' },            
            { data: 'phone' },            
            { data: 'designation' },
            { data: 'role_name' },
            { data: 'action' }
        ]
        });
  dataTable.columns([1, 2, 3, 4]).search(<?php echo $keywords?>).draw();
    });
  
</script>-->
@endsection