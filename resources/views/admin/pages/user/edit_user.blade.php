@extends('admin.master')

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">{{ __('Edit User') }}</h4>
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
                        <a href="#">{{ __('Edit User') }}</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <form id="add_form">
                        @method('PUT')
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

                                                        <div class="form-group col-md-6">
                                                            <label for="Name">{{ __('Name') }}</label>
                                                            <input type="text" class="form-control" name="name"
                                                                id="name" value="{{ $userData->name }}"
                                                                placeholder="Enter Name" readonly>
                                                            <input type="hidden" class="form-control" name="id"
                                                                id="id" value="{{ $userData->id }}"
                                                                placeholder="Enter Name">
                                                        </div>

                                                        <div class="form-group col-6">
                                                            <label for="name">{{ __('User ID') }}</label>
                                                            <input type="text" class="form-control" name="user_id"
                                                                id="userId" value="{{ $userData->user_id }}"
                                                                placeholder="Enter user id" readonly>

                                                        </div>
                                                        <div class="form-group col-8">
                                                            <label for="Name"
                                                                style="display: block;">{{ __('Designation') }}</label>
                                                            <select class="form-control select2" id="designation"
                                                                name="designation" style="width: 100%;width: 60px;">
                                                                <option value="" disabled>
                                                                    {{ __('Select Designation') }}
                                                                </option>
                                                                @foreach ($all_designation as $row)
                                                                    <option value="{{ $row->id }}"
                                                                        @if ($row->id == $userData->designation) selected @endif>
                                                                        {{ $row->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-8">
                                                            <label for="Name"
                                                                style="display: block;">{{ __('Type') }}</label>
                                                            <select class="form-control select2" id="user_type"
                                                                name="user_type" style="width: 100%;width: 60px;">
                                                                <option value="" disabled>{{ 'User Type' }}
                                                                </option>
                                                                @if (Auth::user()->user_type == 'ENTRY_USER')
                                                                    <option value="ENTRY_USER"
                                                                        @if ($userData->user_type == 'ENTRY_USER') selected='selected' @endif>
                                                                        {{ __('Entry User') }}</option>
                                                                @endif
                                                                @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                                                                    <option value="AUTHORIZE_USER"
                                                                        @if ($userData->user_type == 'AUTHORIZE_USER') selected='selected' @endif>
                                                                        {{ __('Authorize User') }}</option>
                                                                @endif
                                                            </select>
                                                        </div>

                                                        @if (Auth::check() && Auth::user()->user_category == '1')
                                                            <div class="form-group col-8">
                                                                <label for="Name"
                                                                    style="display: block;">{{ __('Division') }}</label>
                                                                <select class="form-control select2" id="division"
                                                                    name="division" style="width: 100%">
                                                                    <option value="" disabled>
                                                                        {{ __('Select Division') }}
                                                                    </option>
                                                                    @foreach ($all_division as $row)
                                                                        <option value="{{ $row->id }}"
                                                                            @if ($row->id == $userData->division)  @endif>
                                                                            {{ $row->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        @endif
                                                        @if (Auth::check() && Auth::user()->user_category == '2')
                                                            <div class="form-group col-8">
                                                                <label for="Name"
                                                                    style="display: block;">{{ __('Ministry Department') }}</label>
                                                                <select class="form-control select2" id="ministrydept"
                                                                    name="ministrydept" style="width: 100%">
                                                                    @foreach ($all_ministry as $row)
                                                                        <option value="{{ $row->id }}"
                                                                            @if ($row->id == $userData->ministry_department)  @endif>
                                                                            {{ $row->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        @endif

                                                        @if (Auth::check() && Auth::user()->user_category == '3')
                                                            <div class="form-group col-8">
                                                                <label for="Name"
                                                                    style="display: block;">{{ __('Regulatory Authority') }}</label>
                                                                <select class="form-control select2" id="regauthority"
                                                                    name="regauthority" style="width: 100%">
                                                                    @foreach ($all_regulatory_authority as $row)
                                                                        <option value="{{ $row->id }}"
                                                                            @if ($row->id == $userData->regulatory_authority)  @endif>
                                                                            {{ $row->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        @endif
                                                        @if (Auth::check() && Auth::user()->user_category == '4')
                                                            <div class="form-group col-8">
                                                                <label for="Name"
                                                                    style="display: block;">{{ __('Institution') }}</label>
                                                                <select class="form-control select2" id="institution_id"
                                                                    name="institution_id" style="width: 100%">
                                                                    @foreach ($all_institutions as $row)
                                                                        <option value="{{ $row->id }}"
                                                                            @if ($row->id == $userData->institution_id)  @endif>
                                                                            {{ $row->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        @endif
                                                        @if (Auth::check() && Auth::user()->user_category == '5')
                                                            <div class="form-group col-8">
                                                                <label for="Name"
                                                                    style="display: block;">{{ __('Organization User') }}</label>
                                                                <select class="form-control select2" id="orguser"
                                                                    name="orguser" style="width: 100%">
                                                                    @foreach ($all_organization_users as $row)
                                                                        <option value="{{ $row->id }}"
                                                                            @if ($row->id == $userData->organization_user)  @endif>
                                                                            {{ $row->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        @endif

                                                        @if (Auth::check() && Auth::user()->user_category == '6')
                                                            <div class="form-group col-8">
                                                                <label for="Name"
                                                                    style="display: block;">{{ __('Branch') }}</label>
                                                                <select class="form-control select2" id="branch"
                                                                    name="branch" style="width: 100%">
                                                                    <option value="">{{ __('Select Division') }}
                                                                    </option>
                                                                    @foreach ($all_branch as $row)
                                                                        <option value="{{ $row->id }}"
                                                                            @if ($row->id == $userData->branch_user)  @endif>
                                                                            {{ $row->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        @endif
                                                        <div class="col-md-4"></div>
                                                        {{-- <div class="form-group col-6">
                                                            <label for="Name"
                                                                style="display: block;">{{ __('Select Department') }}</label>
                                                            <select class="form-control select2" id="department_id[]"
                                                                name="department_id[]" multiple="multiple"
                                                                style="width: 100%">
                                                                @foreach ($all_department as $row)
                                                                    <option value="{{ $row->id }}"
                                                                        <?php if (in_array($row->id, $user_departments)) {
                                                                            echo 'selected';
                                                                        } ?>>{{ $row->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div> --}}
                                                        <div class="form-group col-md-6">
                                                            <label for="Name">{{ __('Email') }}</label>
                                                            <input type="text" class="form-control" name="email"
                                                                id="email" value="{{ $userData->email }}"
                                                                placeholder="Enter Email">
                                                        </div>

                                                        <div class="form-group col-6">
                                                            <label for="name">{{ __('Mobile Number') }}</label>
                                                            <input type="number" class="form-control" name="phone"
                                                                id="phone" placeholder="Enter Phone"
                                                                value="{{ $userData->phone }}">
                                                            <span id="phonevalidation" class="text-danger"></span>
                                                            <span id="phonenew" class="text-info"></span>
                                                        </div>


                                                        <div class="form-group col-8">
                                                            <label for="name">{{ __('Address') }}</label>
                                                            <input type="text" class="form-control" name="address"
                                                                id="address" value="{{ $userData->address }}"
                                                                placeholder="Enter Address">
                                                        </div>
                                                        <div class="form-group col-4"></div>


                                                        <div class="form-group col-md-6">
                                                            <label for="Name">{{ __('Confirm Password') }}</label>
                                                            <input type="password" class="form-control" name="password"
                                                                id="password" autocomplete="off"
                                                                placeholder="Enter Password">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="Name">{{ __('Confirm New Password') }}</label>
                                                            <input type="password" class="form-control"
                                                                name="confirm_password" id="confirm_password"
                                                                placeholder="Confirm Password">
                                                        </div>
                                                        <div class="form-group col-8">
                                                            <label for="description">{{ __('Description') }}</label>
                                                            <textarea class="form-control textarea" id="description" name="description" rows="2">
                                                          {{ $userData->description }}
                                                        </textarea>
                                                        </div>

                                                        <div class="form-group col-4"></div>
                                                        <div class="row">
                                                            <div class="form-group col-6">
                                                                <div class="row">
                                                                    @if ($userData->image)
                                                                        <img id="pro_pic" height="200px" width="200px"
                                                                            src="{{ asset('public/user_images/') . '/' . $userData->image }}" />
                                                                    @else
                                                                        <img id="pro_pic" height="200px"
                                                                            width="200px" />
                                                                    @endif
                                                                </div>
                                                                <div class="row">
                                                                    <label
                                                                        for="image">{{ __('User Photo') }}(max-1mb)</label>
                                                                </div>


                                                                {{-- <input type="file" class="form-control" name="image"
                                                                id="image" placeholder="Enter Phone"> --}}
                                                                <input name="image" type=file
                                                                    oninput="pro_pic.src=window.URL.createObjectURL(this.files[0])">
                                                            </div>


                                                            <div class="form-group col-6">
                                                                <div class="row">
                                                                    @if ($userData->signature)
                                                                        <img id='pic'
                                                                            src="{{ asset('public/user_images/') . '/' . $userData->signature }}"
                                                                            alt="..." height="150px"
                                                                            width="400px"">
                                                                    @else
                                                                        <img id="pic" height="150px"
                                                                            width="400px" />
                                                                    @endif
                                                                </div>
                                                                <div class="row">
                                                                    <label for="Signature">{{ __('Signature') }}</label>
                                                                </div>
                                                                <input name="signature" type=file
                                                                    oninput="pic.src=window.URL.createObjectURL(this.files[0])">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile-icons" role="tabpanel"
                                                aria-labelledby="v-pills-profile-tab-icons">
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="Name"
                                                                style="display: block;">{{ __('Roles') }}</label>
                                                            <select class="form-control select2" name="role"
                                                                id="role" style="width: 100%">
                                                                <option value="" disabled>
                                                                    {{ __('Select Role') }}
                                                                </option>
                                                                @foreach ($all_roles as $row)
                                                                    <option value="{{ $row->id }}"
                                                                        @if ($userData->role_id == $row->id) selected @endif>
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


    <script>
        let permission_holders = [<?php if (isset($permission_holders)) {
            echo $permission_holders;
        } else {
            echo '""';
        } ?>];
        if (permission_holders) {
            $(".select-permission-holder").val(permission_holders);
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

        $("#add_form").submit(function(e) {
            e.preventDefault();
            $(".error_msg").html('');
            var data = new FormData($('#add_form')[0]);
            let getuser_id = $("[name=id]").val();
            $('#loader').show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "{{ url('users') }}/" + $("[name=id]").val(),
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data, textStatus, jqXHR) {
                    window.location.href = "{{ url('users') }}/" + getuser_id;
                }
            }).done(function() {
                $("#success_msg").html("Data Save Successfully");
                //window.location.href = "{{ url('users') }}/";
                // location.reload();
            }).fail(function(data, textStatus, jqXHR) {
                $('#loader').hide();
                var json_data = JSON.parse(data.responseText);
                $.each(json_data.errors, function(key, value) {
                    $("#" + key).after(
                        "<span class='error_msg' style='color: red;font-weigh: 600'>" + value +
                        "</span>");
                });
            });
        });

        $('#name').keyup(function() {
            let name = this.value.split(/[ ,]+/).join('-');
            let x = Math.floor((Math.random() * 1000000) + 1);
            document.getElementById("userId").value = name + x;
        });
    </script>
@endsection
