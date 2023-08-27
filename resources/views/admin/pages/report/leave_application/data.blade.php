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
                    <a href="#">{{__('Leave Requests')}}</a>
                </li>
            </ul>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{__('List of Leave Requests')}}
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">{{__('Leave Application')}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="add_form">
                        <div class="modal-body">


                            <div class="card">

                                <div class="card-body">

                                    <div class="col-md-12 col-lg-12">
                                        <div class="row">

                                            <div class="form-group  col-lg-6 col-sm-12 col-md-12">
                                                <label for="designation">{{__('Leave starting from')}}</label>
                                                <input type="date" class="form-control" name="leave_starting_from" id="leave_starting_from" placeholder="">
                                            </div>
                                            <div class="form-group  col-lg-6 col-sm-12 col-md-12">
                                                <label for="Name" style="display: block;">{{__('Select Time')}}</label>
                                                <select class="form-control select2" id="leave_starting_from_time" name="leave_starting_from_time" style="width: 100%">                                                       
                                                    <option value="fullDay" selected>{{__('Full Day')}}</option>
                                                </select>
                                            </div>
                                            <div class="form-group  col-lg-6 col-sm-12 col-md-12">
                                                <label for="designation">{{__('Leave ending on')}}</label>
                                                <input type="date" class="form-control" name="leave_ending_on" id="leave_ending_on" placeholder="">
                                            </div>
                                            <div class="form-group  col-lg-6 col-sm-12 col-md-12">
                                                <label for="Name" style="display: block;">{{__('Select Time')}}</label>
                                                <select class="form-control select2" id="leave_ending_on_time" name="leave_ending_on_time" style="width: 100%">                                                       
                                                    <option value="fullDay"  selected>{{__('Full Day')}}</option>
                                                </select>
                                            </div>


                                            <div class="form-group  col-lg-6 col-sm-12 col-md-12">
                                                <label for="Name" style="display: block;">{{__('Select Permission Holder')}}</label>
                                                <select class="form-control select2" id="permission_holder_id" name="permission_holder_id[]" multiple="multiple" style="width: 100%">

                                                   
                                                </select>
                                            </div>
                                            <div class="form-group  col-lg-6 col-sm-12 col-md-12">
                                                <label for="description">{{__('Reason')}}</label>
                                                <textarea class="form-control textarea" id="reason" name="reason" rows="2">                                                    
                                                </textarea>
                                            </div>

                                            <div class="form-group  col-lg-6 col-sm-12 col-md-12" style="float: right">
                                                <label for="password">{{__('Confirm Your Password')}}</label>
                                                <input type="password" class="form-control form-input" name="password" id="password" placeholder="Password">
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="loader" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                            <button type="submit" id="add_btn" class="btn btn-success">{{__('Save')}} </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalTable" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalTable">{{__('Edit Leave Application')}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form id="edit_form">
                        @method('PUT')
                        <div id="modal_body" class="modal-body">

                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                            <button type="button" class="btn btn-primary edit_button">Save</button>
                        </div>
                    </form>
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
                    url : "{{url("leave-requests/all-data")}}",
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
//        Add Row
    $("#add_form").submit(function (e) {
    e.preventDefault();
    $("#loader").show();
    $(".error_msg").html('');
    if ($('#password').val() !== ''){
    let passCheckk = checkPass($('#password').val());
    if (passCheckk == 1){
    var data = new FormData($('#add_form')[0]);
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            method: "POST",
            url: "{{url("leave-applications/all-data")}}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {
            console.log(data);
            }
    }).done(function (data) {
    $("#success_msg").html("Data Save Successfully");
    $('#exampleModalLong').modal('toggle');
    $('#add_form')[0].reset();
    $("#loader").hide();
    tbl.draw();
//            console.log(data);
//            window.location.href = "{{ url('leave-applications')}}";
    // location.reload();
    }).fail(function (data, textStatus, jqXHR) {
    $("#loader").hide();
    var json_data = JSON.parse(data.responseText);
    $.each(json_data.errors, function (key, value) {
    $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
    $("#" + key).addClass("error");
    });
    });
    } else{
    notifiAlert('Alert!', 'Password is incorrect!');
    $('#password').addClass("error");
    $("#loader").hide();
    }
    } else{
    $('#password').addClass("error");
    $("#loader").hide();
    notifiAlert('Alert!', 'Please confirm your password to submit your application!');
    }

    });
    $(document).on('click', '.btn-edit', function () {
    var id = $(this).data("id");
    $.ajax({
    method: "GET",
            url: "leave-applications/"+id+"/edit",
            data: id,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {
            $("#modal_body").html(data.html);
//                console.log(data.permission_holders);
            $(".select2").select2();
//                 $(".select2_multi").select2({closeOnSelect: false});
            $("#editModal").modal("show");
            }
    });
    });
    $(".edit_button").click(function () {
    //alert('sdfas');
    $(".error_msg").html('');
    $('#loader1').show();
    var id = $('[name=id]').val();
    if ($('#check_password').val() !== ''){
    let passCheckk = checkPass($('#check_password').val());
    if (passCheckk == 1){
    var data = new FormData($('#edit_form')[0]);
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            method: "POST",
            url: "leave-applications/" + id,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {
            console.log(data);
            }
    }).done(function (data) {
    $("#success_msg").html("Data Save Successfully");
    $('#editModal').modal('toggle');
    $('#edit_form')[0].reset();
    $("#loader1").hide();
    tbl.draw();
    }).fail(function (data, textStatus, jqXHR) {
    $("#loader1").hide();
    var json_data = JSON.parse(data.responseText);
    $.each(json_data.errors, function (key, value) {
    $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
    $("#" + key).addClass("error");
    });
    });
    } else{
    notifiAlert('Alert!', 'Password is incorrect!');
    $('#check_password').addClass("error");
    $("#loader1").hide();
    }
    } else{
    $('#check_password').addClass("error");
    $("#loader1").hide();
    notifiAlert('Alert!', 'Please confirm your password to submit your application!');
    }
    });
    $(document).on('click', '.btn-delete', function () {
    var id = $(this).attr('data-id');
    if (confirm('Are you sure?', true))
    {
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            type: 'Delete',
            url: "leave-applications/"+id,
            data: {id: id},
            dataType: 'json',
            beforeSend: function () {},
            success: function (data) {
            notifiAlert('Alert!', 'Leave Application deleted successfully');
            return false;
            }
    });
//                  alert('Hi');
    $(this).parent().parent().remove();
    notifiAlert('Alert!', 'Leave Application deleted successfully');
    return false;
    } else
    {
    return false;
    }
    });
    });
</script>
@endsection