@extends('admin.master')
@section('content')

<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">{{__('Create Group')}}</h4>
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
                    <a href="#">{{__('Group')}}</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">{{__('Create Group')}}</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form id="add_form">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">{{__('Group Information')}}</div>
                        </div>
                        <div class="card-body">

                            <div class="col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="name">{{__('Name')}}</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{$group->name}}" placeholder="Enter Name">
                                        <input type="hidden" class="form-control" name="group_id" id="id" value="{{$group->id}}" placeholder="Enter Name">
                                         </div>
                                       <br>
                                       <br>
                                       <div class="form-group col-6" style="margin-top:30px">                                        
                                        @foreach($all_institutions as $key=>$value)                                         
                                        <div class="selectgroup selectgroup-pills">
                                            <label class="selectgroup-item">
                                                <input type="checkbox" @if(in_array($value->id ,$group_institution))   checked="checked" @endif id="inlineCheckbox{{$key}}_{{ $loop->iteration }}" name="user[]" value="{{ $value->id }}" class="selectgroup-input">
                                                <span class="selectgroup-button" for="inlineCheckbox{{$key}}_{{ $loop->iteration }}">  {{ $value->name }} </span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>


                            </div>
                             <div id="loader" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                        </div>

                    </div>
            </div>
            <div class="card-action">
                <button class="btn btn-success" id="add_btn">{{__('Submit')}}</button>
                <button class="btn btn-danger">{{__('Submit')}}</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
<script>

    $("#add_form").submit(function (e) {
        e.preventDefault();
        $('#loader').show();
        $(".error_msg").html('');
        var data = new FormData($('#add_form')[0]);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{url("update-group")}}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {

            }
        }).done(function () {
            $("#success_msg").html("Data Save Successfully");
            window.location.href = "{{ url('groups')}}";
            // location.reload();
        }).fail(function (data, textStatus, jqXHR) {
             $('#loader').hide();
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function (key, value) {
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });
    });
</script>
@endsection