@extends('admin.master')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">{{ __('Send Form') }}</h4>
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
                        <a href="#">{{ __('Form') }}</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">{{ __('Send Form') }}</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form id="add_form">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">{{ __('Send Form Information') }}</div>
                            </div>
                            <div class="card-body">

                                <div class="col-md-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-6">

                                            <div class="form-group col-md-12">
                                                <div class="form-group col-12">
                                                    <label for="Name"
                                                        style="display: block;">{{ __('Select Process') }}</label>
                                                    <select class="form-control select2" id="process" name="process"
                                                        style="width: 100%">
                                                        <option value="" disabled selected>Select Process</option>
                                                        <option value="forward">Forward</option>
                                                    </select>

                                                </div>

                                            </div>
                                            <?php

                                          
                                            if(Illuminate\Support\Facades\Auth::user()->user_type == 'ENTRY_USER')
                                            {
                                            ?>
                                            <div class="form-group col-md-12">
                                                <div class="block">
                                                    <div class="form-group col-12">
                                                        <label for="Name"
                                                            style="display: block;">{{ __('Select Authorised User') }}
                                                        </label>
                                                        <select class="form-control" name="user_id" id="user_id">

                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <?php }else{ ?>

                                            <div class="form-group col-md-12">
                                                <div class="block">
                                                    <div class="form-group col-12">
                                                        <label for="Name"
                                                            style="display: block;">{{ __('Select Entry User') }}
                                                        </label>
                                                        <select class="form-control" name="user_id" id="user_id">

                                                        </select>

                                                    </div>
                                                </div>
                                            </div>


                                            <?php } ?>

                                            <?php if(Illuminate\Support\Facades\Auth::user()->user_type == 'ENTRY_USER')
                                            {
                                            ?>


                                            <?php }else{ ?>
                                            <div class="form-group col-md-12" id="duration">
                                                <div class="block">
                                                    <div class="form-group col-12">
                                                        <label for="Name"
                                                            style="display: block;">{{ __('Select Duration') }} </label>
                                                        <input type="date" class="date form-control" name="duration">

                                                    </div>
                                                </div>
                                            </div>

                                            <?php } ?>




                                            <div class="form-group col-md-12" style="display: none" id="group_method">
                                                <div class="form-group col-12">
                                                    <label for="Name"
                                                        style="display: block;">{{ __('Select Group') }}</label>
                                                    <select class="form-control select2" id="group_id" name="group_id"
                                                        style="width: 100%">
                                                        @foreach ($all_group as $row)
                                                            <option value="{{ $row->id }}">{{ $row->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="line-block"></div>

                                        <div class="col-6">

                                            <div class="form-group col-md-12">
                                                <div class="block">
                                                    <div class="form-group col-12">
                                                        <label for="Name"
                                                            style="display: block;">{{ __('Select Form') }} </label>
                                                        <select class="form-control select2" id="form_id" name="form_id"
                                                            style="width: 100%">
                                                            <option value="" selected disabled="">Select Form
                                                            </option>
                                                            @foreach ($forms as $row)
                                                                <option value="{{ $row->id }}">
                                                                    {{ $row->form_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- <div class="form-group col-md-12">
                                                <div class="block">
                                                    <div class="form-group col-12">
                                                        <label for="Name"
                                                            style="display: block;">{{ __('Select Form') }} </label>
                                                        <select class="form-control select2" id="admin_form_id"
                                                            name="form_id" style="width: 100%">
                                                            <option value="" selected disabled>Select Form</option>
                                                            <option value="{{ $row->form_id }}">

                                                        </select>
                                                    </div>
                                                </div>
                                            </div> --}}



                                            <div class="form-group col-md-12">
                                                <div class="block">
                                                    <div class="form-group col-12">
                                                        <label for="Name"
                                                            style="display: block;">{{ __('Select Sub Form') }} </label>
                                                        <select class="form-control select2 subFormID" id="sub_form_id"
                                                            name="sub_form_id[]" style="width: 100%">
                                                            @foreach ($forms as $row)
                                                                <option value="{{ $row->id }}">
                                                                    {{ $row->form_name }}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            {{-- <div class="form-group col-md-12">
                                                <div class="block">
                                                    <div class="form-group col-12">
                                                        <label for="Name"
                                                            style="display: block;">{{ __('Select Sub Form') }} </label>
                                                        <select class="form-control select2 subFormID"
                                                            id="admin_sub_form_id" name="sub_form_id[]"
                                                            style="width: 100%">
                                                            <option value="">Select</option>
                                                            @foreach ($sub_forms as $row)
                                                                <option value="{{ $row->id }}">
                                                                    {{ $row->sub_form_id }}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                            </div> --}}

                                        </div>




                                        <div id="loader" class="lds-ellipsis">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-action">
                            <button type="button" class="btn btn-success" id="add_btn">{{ __('Submit') }}</button>
                            <button class="btn btn-danger">{{ __('Cancel') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
    <script>
        $("#add_btn").click(function() {
            $(".error_msg").html('');
            var data = new FormData($('#add_form')[0]);
            $("#loader").show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "{{ url('save-send-form-entry') }}",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data, textStatus, jqXHR) {

                    swal("Success", "Form Has Been Sent Successfully", "success");
                    $('#add_form')[0].reset();
                    // location.reload();




                }
            }).done(function() {
                $("#success_msg").html("Data Save Successfully");
                $("#success_msg").show();
                $("#loader").hide();
                //    window.location.href = "{{ url('list-of-send-form') }}";
                //            setInterval(function () {
                //                window.location.href = "{{ url('permissions') }}";
                //            }, 2000);
                // location.reload();
            }).fail(function(data, textStatus, jqXHR) {
                $("#loader").hide();
                var json_data = JSON.parse(data.responseText);
                $.each(json_data.errors, function(key, value) {
                    //                console.log(key);
                    $("#" + key).after(
                        "<span class='error_msg' style='color: red;font-weigh: 600'>" + value +
                        "</span>");
                });
            });
        });

        $('#form_id').on('change', function() {
            $("#loader").show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "{{ url('get-default-sub-form') }}",
                data: {
                    'form_id': this.value
                },
                //            cache: false,
                //            contentType: false,
                //            processData: false,
                success: function(data, textStatus, jqXHR) {
                    $('#sub_form_id').html(data);
                }
            }).done(function(data) {
                $("#success_msg").html("Data Save Successfully");
                $("#success_msg").show();
                $('#sub_form_id').html(data);
                $("#loader").hide();
                //            setInterval(function () {
                //            window.location.href = "{{ url('permissions') }}";
                //            }, 2000);
                // location.reload();
            }).fail(function(data, textStatus, jqXHR) {
                $("#loader").hide();
                var json_data = JSON.parse(data.responseText);
                $.each(json_data.errors, function(key, value) {
                    //                console.log(key);
                    $("#" + key).after(
                        "<span class='error_msg' style='color: red;font-weigh: 600'>" + value +
                        "</span>");
                });
            });
        });
        $('#admin_form_id').on('change', function() {
            //alert(this.value);
            $("#loader").show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "{{ url('get-admin-default-sub-form') }}",
                data: {
                    'form_id': this.value
                },
                //            cache: false,
                //            contentType: false,
                //            processData: false,
                success: function(data, textStatus, jqXHR) {
                    $('#admin_sub_form_id').html(data);
                }
            }).done(function(data) {
                $("#success_msg").html("Data Save Successfully");
                $("#success_msg").show();
                $('#sub_form_id').html(data);
                $("#loader").hide();
                //            setInterval(function () {
                //                window.location.href = "{{ url('permissions') }}";
                //            }, 2000);
                // location.reload();
            }).fail(function(data, textStatus, jqXHR) {
                $("#loader").hide();
                var json_data = JSON.parse(data.responseText);
                $.each(json_data.errors, function(key, value) {
                    //                console.log(key);
                    $("#" + key).after(
                        "<span class='error_msg' style='color: red;font-weigh: 600'>" + value +
                        "</span>");
                });
            });
        });

        $('.subFormID').on('change', function() {
            $("#loader").show();
            let uniqueFormId = 'Form-' + Math.floor(Math.random() * 900000) + Math.floor(1000 + Math.random() *
                9000);
            $('#unique_form_id').val(uniqueFormId);
            $("#loader").hide();
            //        clearInterval(myInterval);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "{{ url('get-default-sub-form-unique-ids') }}",
                data: {
                    'sub_form_id': this.value
                },
                success: function(data, textStatus, jqXHR) {
                    $('#sub_form_unique_id').html(data);
                }
            }).done(function(data) {
                $("#success_msg").html("Data Save Successfully");
                $("#success_msg").show();
                $('#sub_form_unique_id').html(data);
                $("#loader").hide();
                //            setInterval(function () {
                //                window.location.href = "{{ url('permissions') }}";
                //            }, 2000);
                // location.reload();
            }).fail(function(data, textStatus, jqXHR) {
                $("#loader").hide();
                var json_data = JSON.parse(data.responseText);
                $.each(json_data.errors, function(key, value) {
                    //                console.log(key);
                    $("#" + key).after(
                        "<span class='error_msg' style='color: red;font-weigh: 600'>" + value +
                        "</span>");
                });
            });
        })

        $('#method').on('change', function() {
            //alert(this.value);
            $("#loader").show();
            if (this.value == 'user') {
                $('#user_method').show();
                $('#group_method').hide();
            } else if (this.value == 'group') {
                $('#group_method').show();
                $('#user_method').hide();
            }
            $("#loader").hide();
        });

        $('#process').on('change', function() {
            $("#loader").show();


            let up = $('#process').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "{{ url('send-form-process-entry') }}",
                data: {
                    'process_type': this.value
                },
                success: function(data, textStatus, jqXHR) {
                    $('#user_id').html(data);
                }
            }).done(function(data) {
                $("#success_msg").html("Data Save Successfully");
                $("#success_msg").show();
                $('#sub_form_unique_id').html(data);
                $("#loader").hide();
                //            setInterval(function () {
                //                window.location.href = "{{ url('permissions') }}";
                //            }, 2000);
                // location.reload();
            }).fail(function(data, textStatus, jqXHR) {
                $("#loader").hide();
                var json_data = JSON.parse(data.responseText);
                $.each(json_data.errors, function(key, value) {
                    //                console.log(key);
                    $("#" + key).after(
                        "<span class='error_msg' style='color: red;font-weigh: 600'>" +
                        value +
                        "</span>");
                });
            });
            $("#loader").hide();
        });
    </script>
@endsection
