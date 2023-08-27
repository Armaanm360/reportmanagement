@extends('admin.master')
@section('content')

<div class="content">

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">{{__('Dashboard')}}</h4>
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
                    <a href="#">{{__('Report')}}</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">{{__('Today Leaves')}}</a>
                </li>
            </ul>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{__('Today Leaves')}}
                            <!--<button type="button" class="btn btn-info"  data-toggle="modal" data-target="#exampleModalLong" style="float: right"><i class="la flaticon-plus" style="font-size: 18px"></i> Leave Application</button></h4>-->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi-filter-select" class="display table table-striped table-hover" >
                                <thead>
                                    <tr>
                                        <th>{{__('sl')}}</th>
                                        <th>{{__('User ID')}}</th>
                                        <?php if (Illuminate\Support\Facades\Auth::user()->hasRole('super-admin')) { ?>
                                            <th>{{__('Name')}}</th>
                                            <th>{{__('Email')}}</th>                                        
                                            <th>{{__('Phone')}}</th>                                        
                                            <th>{{__('Address')}}</th>                                        
                                            <th>{{__('Designation')}}</th>
                                        <?php } ?>
                                        <th>{{__('Leave starting from{Time}')}}</th>
                                        <th>{{__('Leave ending on{Time}')}}</th>
                                        <!--<th>Action</th>-->
                                    </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
    var tbl = $('#multi-filter-select').DataTable({
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
                    url : "{{url("leave-requests/today-leaves")}}",
                    type : 'POST',
                    'data': function(data){
                    }
            },
            columns: [
            { data: 'sl' },
            { data: 'user_id' },
    <?php if (Illuminate\Support\Facades\Auth::user()->hasRole('super-admin')) { ?>
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'phone' },
                    { data: 'address' },
                    { data: 'designation' },
    <?php } ?>
            { data: 'leave_starting_from' },
            { data: 'leave_ending_on' },
            // { data: 'action' }
            ]
    });
    });
//        Add Row
  
</script>
@endsection