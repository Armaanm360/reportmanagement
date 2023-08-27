@extends('admin.master')
@section('content')
    <?php
    $user = Auth::user();
    //echo '<pre>';
    //print_r($user);die;
    ?>
    <div class="content">

        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">{{ __('Ministry Department') }}</h4>
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
                        <a href="#">{{ __('Ministry Department') }}</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">{{ __('List of Ministry Departments') }}</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div style="width: 100%;text-align: right;float: right;margin-bottom: 7px"><button type="button"
                        class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        <i class="la flaticon-plus" style="font-size: 18px"></i> {{ __('Add Ministry Department') }}
                    </button></div>
                {{-- @if ($user->can('add-ministry'))
                <div style="width: 100%;text-align: right;float: right;margin-bottom: 7px"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        <i class="la flaticon-plus" style="font-size: 18px"></i> {{__('Add Ministry Department')}}
                    </button></div>
            @endif --}}
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('List of Ministry Department') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatable" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Sl') }}</th>
                                            <th>{{ __('Ministry') }}</th>
                                            <th>{{ __('Description') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_ministry as $row)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>

                                                <td>
                                                    {{ $row->name }}
                                                </td>
                                                <td>
                                                    {{ $row->description }}
                                                </td>



                                                <td>
                                                    <button data-id="{{ $row->id }}" style="margin-right: 5px"
                                                        type="button"
                                                        class="btn btn-success btn-sm float-left view_modal">{{ __('Edit') }}</button>


                                                    <button class="btn btn-sm btn-danger btn-delete"
                                                        data-id="<?php echo $row->id; ?>">{{ __('Delete') }}</button>

                                                    {{-- @if ($user->can('edit-ministry'))
                                             <button data-id="{{$row->id}}" style="margin-right: 5px" type="button"  class="btn btn-success btn-sm float-left view_modal" >{{__('Edit')}}</button>
                                            @endif
                                            @if ($user->can('delete-ministry'))
                                              <button class="btn btn-sm btn-danger btn-delete" data-id="<?php echo $row->id; ?>">{{__('Delete')}}</button>
                                            @endif --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">{{ __('Add Ministry Department') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="add_form">
                        @csrf
                        <div class="modal-body">


                            <div class="card">

                                <div class="card-body">

                                    <div class="col-md-12 col-lg-12">
                                        <div class="row">


                                            {{-- <div class="form-group col-12">
                                                <label for="Name"
                                                    style="display: block;">{{ __('Select Institute') }}</label>
                                                <select class="form-control select2" id="institution_id"
                                                    name="institution_id" style="width: 100%">
                                                    @foreach ($all_institutions as $row)
                                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                    @endforeach
                                                </select>

                                            </div> --}}



                                            {{-- <div class="form-group col-12">
                                                <label for="Name"
                                                    style="display: block;">{{ __('Select Head Ministry') }}</label>
                                                <select class="form-control select2" id="parent_id" name="parent_id"
                                                    style="width: 100%">
                                                    <option value="">{{ __('Select Head Ministry') }}</option>
                                                    @foreach ($all_ministry as $row)
                                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div> --}}
                                            <div class="form-group col-12">
                                                <label for="name">{{ __('Ministry') }} </label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Enter Ministry Name">

                                            </div>
                                            <div class="form-group col-12">
                                                <label for="comment">Description</label>
                                                <textarea class="form-control" id="description" name="description" rows="5">

                                            </textarea>
                                            </div>



                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="loader" class="lds-ellipsis">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" id="add_btn" class="btn btn-success">Save </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalTable"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalTable">Edit Ministry</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form id="edit_form">
                        <div id="modal_body" class="modal-body">

                        </div>
                        @method('PUT')
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary edit_button">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable').DataTable({});
        });
        $("#add_form").submit(function(e) {
            e.preventDefault();
            $('#loader').show();
            $(".error_msg").html('');
            var data = new FormData($('#add_form')[0]);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "{{ url('ministry') }}",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data, textStatus, jqXHR) {

                }
            }).done(function() {
                $("#success_msg").html("Data Save Successfully");
                window.location.href = "{{ url('ministry') }}";
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
    <script type="text/javascript">
        $(".view_modal").click(function() {
            var id = $(this).data("id");
            $.ajax({
                method: "GET",
                url: "ministry/" + id + "/edit",
                data: id,
                success: function(data, textStatus, jqXHR) {
                    $("#modal_body").html(data);
                    $("#editModal").modal("show");

                }
            });
        });
        $(".edit_button").click(function() {
            $(".error_msg").html('');
            $('#loader1').show();

            var data = new FormData($('#edit_form')[0]);

            var id = $('[name=id]').val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "ministry/" + id,
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data, textStatus, jqXHR) {

                }
            }).done(function() {
                $("#success_msg").html("Data Save Successfully");
                location.reload();
            }).fail(function(data, textStatus, jqXHR) {
                $('#loader1').hide();
                var json_data = JSON.parse(data.responseText);
                $.each(json_data.errors, function(key, value) {
                    $("#" + key).after(
                        "<span class='error_msg' style='color: red;font-weigh: 600'>" + value +
                        "</span>");
                });
            });
        });

        $(document).on('click', '.btn-delete', function() {
            var id = $(this).attr('data-id');
            if (confirm('Are you sure?', true)) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'Delete',
                    url: "ministry/" + id,
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    beforeSend: function() {},
                    success: function(data) {
                        alert('Hi');
                        notifiAlert('Alert!', 'Ministry deleted successfully');
                        return false;
                    }
                });
                $(this).parent().parent().remove();
                notifiAlert('Alert!', 'Ministry deleted successfully');
                return false;
            } else {
                return false;
            }
        });
    </script>
@endsection
