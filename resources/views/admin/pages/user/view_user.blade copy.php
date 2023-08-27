@extends('admin.master')
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
      <form id="add_form" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-4">
            <div class="profile-img">
              @if ($user->image)
              <img id='changeImg' src="{{ asset('public/user_images/') . '/' . $user->image }}" alt="..."
                class="avatar-img rounded-circle">
              @else
              <img id='changeImg' src="{{ asset('public/admin_asset') }}/img/profile.png" alt="..."
                class="avatar-img rounded-circle">
              @endif

              @if ($user->id == \Illuminate\Support\Facades\Auth::user()->id ||
              \Illuminate\Support\Facades\Auth::user()->hasRole('super-admin'))
              <div class="file btn btn-lg btn-primary" id="changeProfilePic">
                {{ __('Change Photo') }}
                <input type="file" id="file" name="file" />
              </div>
              @endif
            </div>
          </div>
          <div class="col-md-6">
            <div class="profile-head">
              <h5>
                {{ $user->name }}
              </h5>
              <h6>
                {{ $user->designation_info->name }}
              </h6>
              <p class="proile-rating">ID : <span>{{ $user->user_id }}</span></p>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">{{ __('About') }}</a>
                </li>
                {{-- <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                            role="tab" aria-controls="profile"
                                            aria-selected="false">{{ __('Timeline') }} &nbsp;&nbsp;&nbsp;&nbsp;<strong
                  style="color:black;font-weight: bold">
                  <batch>Total Leave : </batch>{{ count($user_leaves) }}
                </strong></a>
                </li> --}}
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            @if ($user->id == \Illuminate\Support\Facades\Auth::user()->id ||
            \Illuminate\Support\Facades\Auth::user()->hasRole('super-admin'))
            <input type="text" onclick="location.href='<?php echo $user->id; ?>/edit'" class="profile-edit-btn"
              value="Edit Profile" />
            @endif
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="profile-work">
              <p>{{ __('Description') }}</p>
              <a href="">{{ $user->description }}</a>

            </div>
          </div>
          <div class="col-md-8">
            <div class="tab-content profile-tab" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                  <div class="col-md-6">
                    <label>{{ __('User Id') }}</label>
                  </div>
                  <div class="col-md-6">
                    <p>{{ $user->user_id }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>{{ __('Name') }}</label>
                  </div>
                  <div class="col-md-6">
                    <p>{{ $user->name }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>{{ __('Email') }}</label>
                  </div>
                  <div class="col-md-6">
                    <p>{{ $user->email }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>{{ __('Phone') }}</label>
                  </div>
                  <div class="col-md-6">
                    <p>{{ $user->phone }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>{{ __('Address') }}</label>
                  </div>
                  <div class="col-md-6">
                    <p>{{ $user->address }}</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4"></div>
                @if ($user->user_creator == Auth::user()->id or Auth::user()->hasRole('super-admin'))
                @if ($user->status == true)
                <div class="col-md-4"> <button class="btn btn-danger" type="button" id="inactivate_user"
                    user_id="{{ $user->id }}"> Inactive
                    User</button></div>
                @else
                <div class="col-md-4"><button class="btn btn-info" type="button" id="activate_user"
                    user_id="{{ $user->id }}"> Active

                    User</button>
                </div>
                @endif
                @endif
              </div>
            </div>
          </div>
        </div>
      </form>
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