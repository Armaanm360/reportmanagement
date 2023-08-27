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
                <h4 class="page-title">{{ __('Form') }}</h4>
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
                        <a href="#">{{ __('List of Form') }}</a>
                    </li>
                </ul>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('List of Form') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatable" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Sl') }}</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Form Type') }}</th>
                                            {{-- <th>{{ __('Last Date') }}</th> --}}
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($forms as $row)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>

                                                <td>
                                                    {{ $row->form_name }}
                                                </td>

                                                <td>
                                                    @if ($row->saved_form_type == 'plain_form')
                                                        <span class="badge badge-info">Plain Form</span>
                                                    @else
                                                        <span class="badge badge-success">Data Form</span>
                                                    @endif
                                                </td>

                                                <td>
                                                    @if ($row->form_creator == Auth::user()->id)
                                                        @if ($row->saved_form_type == 'plain_form')
                                                            <a class="btn btn-success btn-sm"
                                                                href="{{ url('form/') }}/{{ $row->id }}">
                                                                {{ __('View') }}
                                                            </a>
                                                        @endif
                                                        @if ($row->saved_form_type == 'data_form')
                                                            <a class="btn btn-success btn-sm"
                                                                href="{{ url('form-calc/') }}/{{ $row->id }}">
                                                                {{ __('View') }}
                                                            </a>
                                                        @endif


                                                        <a class="btn btn-warning btn-sm"
                                                            href="{{ url('created-latest-form/') }}/{{ $row->id }}">
                                                            {{ __('Edit') }}
                                                        </a>
                                                        <a class="btn btn-danger btn-sm text-white" id="delbtn"
                                                            delattr="{{ $row->id }}">
                                                            {{ __('Delete') }}
                                                        </a>
                                                    @endif


                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>{{ __('Sl') }}</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('ID') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable').DataTable({});

            let id = $(this).attr('delattr');





            $('#delbtn').click(function(event) {
                //   var form =  $(this).closest("form");
                let id = $(this).attr('delattr');

                //  alert(id);
                //   let id = $(this).attr('delattr');
                //   event.preventDefault();

                //   alert(id);
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this imaginary file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {

                            $.ajax({
                                url: 'list/' + id,
                                success: function(dataResult) {
                                    location.reload(true);


                                }
                            });





                            swal("Poof! Your imaginary file has been deleted!", {
                                icon: "success",
                            });
                        } else {
                            swal("Your imaginary file is safe!");
                        }
                    });
            });



            //     $("#delete_form").click(function()
            //     {
            //         var del_id = $(this).attr('id');

            //      $.ajax({
            //     type: "GET",
            //     url: "/forms/list/" + del_id,
            //     success: function (data) {
            //         console.log('deleted');
            //     }
            // });
            //     });


        });
    </script>
@endsection
