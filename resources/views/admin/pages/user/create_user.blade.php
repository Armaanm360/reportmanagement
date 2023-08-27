@extends('admin.master')
@section('content')
    <?php
    $user = Auth::user();
    // $usercat = {{Auth::user()->user_category}} ;
    //echo '<pre>';
    //print_r($user);die;
    ?>
    @inject('getDepartmentId', 'App\Models\UserForm')
    @inject('getDivisionType', 'App\Models\UserForm')


    <style>
        .field-icon {
            float: right;
            margin-left: -25px;
            margin-top: -25px;
            position: relative;
            z-index: 2;
        }
    </style>
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">{{ __('Add User') }}</h4>
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
                        <a href="#">{{ __('User') }}</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">{{ __('Add User') }}</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 id="role_id">{{ Auth::user()->user_category }}</h3>
                    <form id="add_form">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('Employee Information') }}</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2 col-md-2">
                                        <div class="nav flex-column nav-pills nav-secondary nav-pills-no-bd nav-pills-icons"
                                            id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-home-tab-icons" data-toggle="pill"
                                                href="#v-pills-home-icons" role="tab" aria-controls="v-pills-home-icons"
                                                aria-selected="true">
                                                <span class="responsive-1"><i class="flaticon-user-4"></i>
                                                    <span class="text-1">{{ __('Profile') }}</span></span>
                                            </a>
                                            <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill"
                                                href="#v-pills-profile-icons" role="tab"
                                                aria-controls="v-pills-profile-icons" aria-selected="false">
                                                <span class="responsive-1"><i class="la flaticon-user-5"></i>
                                                    <span class="text-1">{{ __('Role Permission') }}</span></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-10 col-md-10">
                                        <div class="tab-content" id="v-pills-with-icon-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home-icons" role="tabpanel"
                                                aria-labelledby="v-pills-home-tab-icons">

                                                <div class="col-md-12 col-lg-12">
                                                    <div class="row">

                                                        <div class="form-group col-6">
                                                            <label for="name">{{ __('Name') }}</label>
                                                            <input type="text" class="form-control" name="name"
                                                                id="name" placeholder="Enter Name"
                                                                onkeypress="clsAlphaNoOnly(event)" onpaste="return false;">

                                                        </div>


                                                        <div class="form-group col-6">
                                                            <label for="name">{{ __('User ID') }}</label>
                                                            <input type="text" class="form-control" name="user_id"
                                                                readonly id="userId" placeholder="Enter user id">

                                                        </div>
                                                        <div class="form-group col-8">
                                                            <label for="Name"
                                                                style="display: block;">{{ __('Designation') }}</label>
                                                            <select class="form-control select2" id="designation"
                                                                name="designation" style="width: 100%;width: 60px;">
                                                                <option value="">{{ __('Select Designation') }}
                                                                </option>
                                                                @foreach ($all_designation as $row)
                                                                    <option value="{{ $row->id }}">
                                                                        {{ $row->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-8">
                                                            <label for="Name"
                                                                style="display: block;">{{ __('UserType') }}</label>
                                                            <select class="form-control select2" id="user_type"
                                                                name="user_type" style="width: 100%;width: 60px;">
                                                                <option value="" disabled selected>
                                                                    {{ __('Select Type') }}</option>
                                                                <option value="ENTRY_USER">
                                                                    {{ __('Entry User') }}
                                                                </option>
                                                                @if (Auth::user()->user_category !== 6)
                                                                    <option value="AUTHORIZE_USER">
                                                                        {{ __('Authorize User') }}</option>
                                                                @endif
                                                            </select>
                                                        </div>


                                                        <div id="empty_entry_div">
                                                            <input type="text" id="entryType_div"
                                                                name="{{ $getDivisionType->getDivisionType(Auth::user()->id) }}"
                                                                value="{{ $getDepartmentId->getDepartmentId(Auth::user()->id) }}">

                                                        </div>




                                                        {{-- <div class="form-group col-8">
                                                            <label for="Name"
                                                                style="display: block;">{{ __('Role') }}</label>
                                                            <select class="form-control select2" id="role_show"
                                                                name="role_show" style="width: 100%" disabled>
                                                            </select>
                                                        </div> --}}

                                                        @if (Auth::check() && Auth::user()->user_category == '1')
                                                            <div class="form-group col-8" id="lower_dept">
                                                                <label for="Name"
                                                                    style="display: block;">{{ __('Select Ministry Department') }}</label>
                                                                <select class="form-control select2" id="ministrydept"
                                                                    name="ministry_department" style="width: 100%">
                                                                    @foreach ($all_ministry as $row)
                                                                        <option value="{{ $row->id }}">
                                                                            {{ $row->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        @endif
                                                        @if (Auth::check() && Auth::user()->user_category == '2')
                                                            <div class="form-group col-6" id="lower_dept">
                                                                <label for="Name"
                                                                    style="display: block;">{{ __('Select Regulatory Authority') }}</label>
                                                                <select class="form-control select2" id="regauthority"
                                                                    name="regauthority" style="width: 100%">
                                                                    @foreach ($all_regulatory_authority as $row)
                                                                        <option value="{{ $row->id }}">
                                                                            {{ $row->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        @endif
                                                        @if (Auth::check() && Auth::user()->user_category == '3')
                                                            <div class="form-group col-6" id="lower_dept">
                                                                <label for="Name"
                                                                    style="display: block;">{{ __('Select Institution') }}</label>
                                                                <select class="form-control select2" id="institution_id"
                                                                    name="institution_id" style="width: 100%">
                                                                    @foreach ($all_institutions as $row)
                                                                        <option value="{{ $row->id }}">
                                                                            {{ $row->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        @endif
                                                        @if (Auth::check() && Auth::user()->user_category == '4')
                                                            <div class="form-group col-6" id="lower_dept">
                                                                <label for="Name"
                                                                    style="display: block;">{{ __('Select Organization User') }}</label>
                                                                <select class="form-control select2" id="orguser"
                                                                    name="orguser" style="width: 100%">
                                                                    @foreach ($all_organization_users as $row)
                                                                        <option value="{{ $row->id }}">
                                                                            {{ $row->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        @endif
                                                        {{-- <div class="form-group col-6">
                                                            <label for="Name"
                                                                style="display: block;">{{ __('Select Division') }}</label>
                                                            <select class="form-control select2" id="division"
                                                                name="division" style="width: 100%">
                                                                <option value="">{{ __('Select Division') }}
                                                                </option>
                                                                @foreach ($all_division as $row)
                                                                    <option value="{{ $row->id }}">
                                                                        {{ $row->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div> --}}
                                                        @if (Auth::check() && Auth::user()->user_category == '5')
                                                            <div class="form-group col-6" id="lower_dept">
                                                                <label for="Name"
                                                                    style="display: block;">{{ __('Select Branch') }}</label>
                                                                <select class="form-control select2" id="branch"
                                                                    name="branch" style="width: 100%">
                                                                    <option value="">{{ __('Select Division') }}
                                                                    </option>
                                                                    @foreach ($all_branch as $row)
                                                                        <option value="{{ $row->id }}">
                                                                            {{ $row->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        @endif




                                                        {{-- <div class="form-group col-8">
                                                            <label for="Name"
                                                                style="display: block;">{{ __('Select Department') }}</label>
                                                            <select class="form-control select2" id="department_id"
                                                                name="department_id[]" multiple="multiple"
                                                                style="width: 100%">

                                                            </select>
                                                        </div> --}}
                                                        <div class="row">
                                                            <div class="form-group col-6"></div>
                                                            <div class="form-group col-6"></div>
                                                        </div>
                                                        <div class="form-group col-6">
                                                            <label for="name">{{ __('Mobile Number') }}</label>
                                                            <input type="number" class="form-control" name="phone"
                                                                id="phone" placeholder="Enter Phone">
                                                            <span id="phonevalidation" class="text-danger"></span>
                                                            <span id="phonenew" class="text-info"></span>
                                                        </div>
                                                        <div class="form-group col-6">
                                                            <label for="email">{{ __('Email') }}</label>
                                                            <input type="email" class="form-control" name="email"
                                                                id="email" placeholder="Enter Email">

                                                        </div>


                                                        {{-- <div class="form-group col-6">
                                                            <label for="name">{{ __('Address') }}</label>
                                                            <input type="text" class="form-control" name="address"
                                                                id="address" placeholder="Enter Address">
                                                        </div> --}}
                                                        {{-- <div class="form-group col-6">

                                                        </div> --}}

                                                        {{-- <div class="form-group col-6">
                                                            <div class="form-group col-6">
                                                                <label for="image">{{ __('User Photo') }}</label>
                                                                <input type="file" class="form-control" name="image"
                                                                    id="image" placeholder="Enter Phone">
                                                            </div>
                                                        </div>


                                                        <div class="form-group col-6">
                                                            <label for="description">{{ __('Signature') }}</label>
                                                            <input name="signature" type=file
                                                                oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                                            <img id="pic" />
                                                        </div> --}}




                                                        <div class="form-group col-6">
                                                            <label for="password">{{ __('Password') }}</label>
                                                            <input type="password" class="form-control" name="password"
                                                                id="password-field" placeholder="Password  (min:8 digit)">
                                                            <span toggle="#password-field"
                                                                class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                        </div>

                                                        {{-- <div class="form-group col-6">
                                                            <input id="password-field" type="password"
                                                                class="form-control" name="password"
                                                                placeholder="password (min:8 digit)">
                                                            <span toggle="#password-field"
                                                                class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                        </div> --}}



                                                        <div class="form-group col-6">
                                                            <label for="password">{{ __('Confirm Password') }}</label>
                                                            <input type="password" class="form-control" id="password"
                                                                name="confirm_password" placeholder="Confirm Password">
                                                        </div>
                                                        <div class="form-group col-12">
                                                            <label for="description">{{ __('Description') }}</label>
                                                            <textarea class="form-control textarea" id="description" name="description" rows="2">
                                                    
                                                        </textarea>
                                                        </div>




                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile-icons" role="tabpanel"
                                                aria-labelledby="v-pills-profile-tab-icons">
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="row">
                                                        <div class="form-group col-6">
                                                            <label for="Name"
                                                                style="display: block;">{{ __('Roles') }}</label>
                                                            <select class="form-control" id="role" name="role"
                                                                style="width: 100%">
                                                                <option value="" disabled>
                                                                    {{ __('Select Role') }}
                                                                </option>
                                                                @foreach ($all_roles as $row)
                                                                    <option value="{{ $row->id }}">
                                                                        {{ $row->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-action float-right" style="text-align: right">
                                <div id="loader" class="lds-ellipsis">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>

                                <button type="submit" class="btn btn-success"
                                    id="add_btn">{{ __('Submit') }}</button>
                                <button class="btn btn-danger">{{ __('Cancel') }}</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
    <script>
        $('#entryType_div').hide();
        $("#add_form").submit(function(e) {
            e.preventDefault();
            $("#loader").show();
            $(".error_msg").html('');
            var data = new FormData($('#add_form')[0]);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "{{ url('users') }}",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data, textStatus, jqXHR) {
                    window.location.href = "{{ url('users') }}";

                }
            }).done(function() {
                $("#success_msg").html("Data Save Successfully");
                window.location.href = "{{ url('users') }}";
                // location.reload();
            }).fail(function(data, textStatus, jqXHR) {
                $("#loader").hide();
                var json_data = JSON.parse(data.responseText);
                $.each(json_data.errors, function(key, value) {
                    $("#" + key).after(
                        "<span class='error_msg' style='color: red;font-weigh: 600'>" + value +
                        "</span>");
                });
            });
        });

        $('select#user_type').on('change', function(event) {
            event.preventDefault();

            if (this.value == 'ENTRY_USER') {
                $('div#empty_entry_div').show();
                $.ajax({
                    url: "{{ url('auth-user-onchange') }}",
                    success: function(response) {
                        $('select#role').html(response);
                        $('select#role_show').html(response);
                        $('#dept').show();
                        $('div#lower_dept').empty();


                    }

                });
            } else {
                $.ajax({
                    url: "{{ url('entry-user-onchange') }}",
                    success: function(response) {
                        $('select#role').html(response);
                        $('select#role_show').html(response);
                        $('select#role_show').attr('selected');
                        $('div#empty_entry_div').empty();



                    }

                });

            }
        });






        function clsAlphaNoOnly(e) { // Accept only alpha numerics, no special characters 
            var regex = new RegExp("^[a-zA-Z0-9 ]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regex.test(str)) {
                return true;
            }

            e.preventDefault();
            return false;
        }








        /* phone number validation */


        $('#phone').on('change', function(event) {
            event.preventDefault
            var a = $(this).val();
            var filter =
                /(^(01){1}[3456789]{1}(\d){8})$/
            if (filter.test(a)) {

                $('span#phonenew').text('সঠিক মোবাইল নম্বর! ধন্যবাদ ');
                $('span#phonevalidation').hide();
                setTimeout(function() {
                    $('span#phonenew').fadeOut('slow');
                }, 4000);
            } else {
                $('span#phonevalidation').text('অনুগ্রহ করে সঠিক মোবাইল নম্বর প্রদান করুন ');
            }


        });





        // $("input[id='phone']").on("keyup", function(e) {
        //     e.target.value = e.target.value.replace(/[^\d]/, "");
        //     if (e.target.value.length === 10) {
        //         // do stuff
        //         var ph = e.target.value.split("");
        //         ph.splice(3, 0, "-");
        //         ph.splice(7, 0, "-");
        //         $("label").html(ph.join(""))
        //     }
        // })

        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });





        $('#name').keyup(function() {
            let name = this.value.split(/[ ,]+/).join('-');
            let x = Math.floor((Math.random() * 1000000) + 1);
            document.getElementById("userId").value = name + x;
        });
    </script>
@endsection
