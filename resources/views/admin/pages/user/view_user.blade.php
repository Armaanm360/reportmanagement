@extends('admin.master')
@inject('getDesignation', 'App\Models\UserForm')
@inject('getRole', 'App\Models\UserForm')
<style>
    .emp-profile {
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }

    .profile-img {
        text-align: center;
    }

    .profile-img img {
        width: 70%;
        height: 100%;
    }

    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }

    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }

    .profile-head h5 {
        color: #333;
    }

    .profile-head h6 {
        color: #0062cc;
    }

    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }

    .proile-rating {
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }

    .proile-rating span {
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }

    .profile-head .nav-tabs {
        margin-bottom: 5%;
    }

    .profile-head .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
    }

    .profile-head .nav-tabs .nav-link.active {
        border: none;
        border-bottom: 2px solid #0062cc;
    }

    .profile-work {
        padding: 14%;
        margin-top: -15%;
    }

    .profile-work p {
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }

    .profile-work a {
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-work ul {
        list-style: none;
    }

    .profile-tab label {
        font-weight: 600;
    }

    .profile-tab p {
        font-weight: 600;
        color: #0062cc;
    }
</style>
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">{{ $user->name }}</h4>
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
                        <a href="#">{{ $user->name }}</a>
                    </li>
                </ul>
            </div>


            <div class="container emp-profile">
                <div class="container py-5">
                    <div class="row">
                        <div class="col">
                            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                                @if ($user->id == \Illuminate\Support\Facades\Auth::user()->id ||
                                    \Illuminate\Support\Facades\Auth::user()->hasRole('super-admin'))
                                    <div class="float-right"><button type="button"
                                            class="btn btn-info"onclick="location.href='<?php echo $user->id; ?>/edit'">Edit
                                            Profile</button></div>
                                @endif


                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item active" aria-current="page">User Profile / <span
                                            class="text-bold text-info">{{ $user->name }}</span></li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('public/user_images/') . '/' . $user->image }}" alt="avatar"
                                        class="rounded-circle img-fluid" style="width: 150px;">


                                    <h3 class="my-3 text-bold">{{ $user->name }}</h3>
                                    <p class="text-info mb-1">{{ $getDesignation->getDesignation($user->designation) }}</p>
                                    <h3 class="text-primary text-bold mb-4">{{ $getRole->getRole($user->role) }}</h3>
                                    <h4 class="text-mute text-bold mb-4">User Id:({{ $user->user_id }})</h3>
                                        <div class="d-flex justify-content-center mb-2">
                                            @if ($user->user_creator == Auth::user()->id or Auth::user()->hasRole('super-admin'))
                                                @if ($user->status == true)
                                                    <button class="btn btn-danger" type="button" id="inactivate_user"
                                                        user_id="{{ $user->id }}"> Inactive
                                                        User</button>
                                                @else
                                                    <button class="btn btn-info" type="button" id="activate_user"
                                                        user_id="{{ $user->id }}"> Active

                                                        User</button>
                                                @endif
                                            @endif
                                        </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Full Name</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $user->name }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Mobile</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $user->phone }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $user->address }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">User Type</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $user->user_type }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card mb-4 mb-md-0">
                                        <div class="card-title p-3 text-info text-underline">User Description</div>
                                        <div class="card-body">
                                            <p>{{ $user->description }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <div class="card mb-4 mb-md-0">
                                        <div class="card-title p-3 text-info text-underline">User Signature</div>
                                        <div class="card-body">
                                            <img src="{{ asset('public/user_images/') . '/' . $user->signature }}"
                                                height="150px" width="400px"">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
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

        /* activate user */

        $('button#activate_user').on('click', function(event) {
            event.preventDefault();

            let user_id = $(this).attr('user_id');

            $.ajax({
                url: "{{ url('activate-user-view') }}/" + user_id,
                success: function(response) {
                    swal({
                        title: "Activation Alert",
                        text: "User Has been Activated",
                        icon: "success",
                        button: "Activated!",
                    });

                    location.reload();

                }
            });

        });

        $('button#inactivate_user').on('click', function(event) {
            event.preventDefault();

            let user_id = $(this).attr('user_id');

            $.ajax({
                url: "{{ url('inactivate-user-view') }}/" + user_id,
                success: function(response) {
                    swal({
                        title: "Inactivation Alert",
                        text: "User Has been Inactivated",
                        icon: "success",
                        button: "InActivated!",
                    });
                    location.reload();


                }
            });

        });


        $('#changeProfilePic').on('change', function() {
            var data = new FormData($('#add_form')[0]);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "{{ url('change-profile-image') }}/" + <?php echo $user->id; ?>,
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data, textStatus, jqXHR) {

                }
            }).done(function(data) {
                $("#success_msg").html("Data Save Successfully");
                $("#changeImg").attr("src", window.location.origin + '/public/user_images/' + data);
                //            window.location.href = "{{ url('employees') }}";
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
    </script>
@endsection
