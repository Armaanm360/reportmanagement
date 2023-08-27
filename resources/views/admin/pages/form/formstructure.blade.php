@extends('admin.master')
@section('content')
    <?php
    $user = Auth::user();
    //echo '<pre>';
    //print_r($user);die;
    ?>
    @inject('form_model', 'App\Models\Form')

    <style>
        .form-1-new h3,
        .form-2-new h3,
        .form-3-new h3 {
            text-align: center;
        }

        .user-information,
        .twonddataform,
        .form-1-new,
        .form-2-new,
        .form-3-new,
        .form-4-new,
        .form-5-new,
        .form-6-new {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .user-information {
            display: flex;
            justify-content: space-between;
        }
    </style>

    <div class="content">
        <div class="page-inner">


            <div class="entryform">
                {{-- <h3>Menu>Form generator</h3> --}}
                <h3>Form Structers</h3>
                <input type="hidden" name="db_table_name" value="{{ $form_tables[0]->table_name }}">
                <input type="hidden" name="created_by_id" value="{{ Auth::user()->id }}">
                {{-- <input type="hidden" name="form_creator" value="{{ $form[0]->form_creator }}"> --}}
                <form action="{{ url('tablecreate') }}" method="POST">
                    @csrf
                    <div class="form-group col-md-12">
                        <h3 for="Financial Year" style="text-align:center;font-weight: bold">{{ $form[0]->form_name }}
                        </h3>
                        <p>ID : {{ $form[0]->form_id }}</p>
                        <input type="hidden" name="var_id" value="{{ $form[0]->id }}">
                    </div>

                    <hr>

                    {{-- <div class="form-group">
                        <textarea class="ckeditor form-control" name="html_form">{{ $form[0]->html_form }}</textarea>
                    </div> --}}
                    <hr>

                    <div class="p-3">
                        {{-- <h1 class="text-info">{{ $form_tables[0]->table_headline }}</h1> --}}
                    </div>
                    <div class="printed-link" id="tablePrinting">
                        <?php
                        // $larry = DB::table($table_info)->get();
                        // $array_head = json_decode(json_encode($larry), true);
                        // $for_val = end($array_head);
                        
                        // if (count($array_head)) {
                        //     echo '<table class="table-responsive" border="1">';
                        //     echo '<thead>';
                        //     $headerRow = true;
                        //     if ($headerRow) {
                        //         $headerRow = false;
                        //         echo '<tr>';
                        //         foreach (array_keys($array_head[0]) as $header) {
                        //             echo "<th scope='col'>" . str_replace('_', ' ', $header) . '</th>';
                        //         }
                        //         echo '</tr>';
                        //         echo '<thead>';
                        //     }
                        //     echo '<tbody>';
                        
                        //     echo '<tbody>';
                        
                        //     echo '</table>';
                        // }
                        //
                        ?>
                        {{-- <h3 id="basepath">{{ url('/') }}</h3> --}}
                        @foreach ($form_tables as $row)
                            <div class="form-row Tableblock" data-id="1">
                                <div class="form-group col-md-12">
                                    <h3 for="Financial Year" id="tab_name" style="text-align:left;font-weight: bold">
                                        {{ $row->table_name }}
                                    </h3>

                                    <input type="hidden" name="table_name" class="form-control" id="table_name"
                                        placeholder="Enter Table Name">

                                </div>

                                <?php
                                $ab = $form_model->table_columns($row->table_name);
                                $sliced_columns = array_slice($ab, 4, -1);
                                
                                ?>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Columns</th>
                                            <th scope="col">Action</th>
                                            <th scope="col">
                                                {{-- @if ($user->can('edit-form')) --}}
                                                <button type="button" class="btn btn-outline-info text-white"
                                                    data-target="#exampleModalAddCol" data-toggle="modal"><i
                                                        class="fa fa-home"></i>
                                                    Add Column</button>
                                            </th>
                                            {{-- @endif --}}
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($sliced_columns as $row)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $row }}</td>
                                                <td>
                                                    {{-- @if ($user->can('edit-form')) --}}
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                        id="edit_btn" data-target="#exampleModal"
                                                        col_name="{{ $row }}">Edit</button>
                                                    {{-- @endif --}}
                                                    {{-- @if ($user->can('edit-form')) --}}
                                                    <button type="button" class="btn btn-warning btn-sm" id="delbtn"
                                                        col_name="{{ $row }}">Delete</button>

                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>

                            </div>
                        @endforeach

                        <br>


                        {{-- <button type="button" class="btn btn-danger"><a href="<?php echo url('generate-pdf/' . $form[0]->id); ?>">Generate
                                Pdf</a></button> --}}
                        {{-- <button type="button" class="btn btn-success"><a class="text-white" href="<?php echo url('created-submit-form/' . $form[0]->id); ?>">Edit
                                Form</a></button> --}}
                        <button type="button" id="print_table" class="btn btn-danger" onClick="printTable()">Print
                            Pdf</button>

                </form>
            </div>

        </div>



        <!-- Button trigger modal -->
        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button> --}}

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Column</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="col_update">
                            @csrf
                            <div class="form-group mx-sm-3 mb-2">
                                <h4>Column Name</h4>
                                <input type="text" id="column_input" name="" class="form-control" placeholder=""
                                    value="">
                                <input type="hidden" name="table_name" value="{{ $form_tables[0]->table_name }}">
                                <button type="submit" class="btn btn-primary btn-sm mt-3">Update</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="exampleModalAddCol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Column</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="modal-body">
                                <form id="col_insert">
                                    @csrf
                                    <div class="form-group mx-sm-3 mb-2">
                                        <h4>Column Name</h4>
                                        <input type="text" id="new_column_input" name="new_column_input"
                                            class="form-control" placeholder="" value="">
                                        <div id="aftsel">
                                            <label for="Name"
                                                style="display: block;">{{ __('After Column') }}</label>
                                            <div class="form-group">
                                                <select class="form-control" id="after_table" name="after_table"
                                                    style="width: 100%">
                                                    @foreach ($next as $next)
                                                        <option value="{{ $next }}">{{ $next }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div id="loader" class="lds-ellipsis">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>

                                        </div>

                                        <input type="hidden" name="table_name"
                                            value="{{ $form_tables[0]->table_name }}">
                                        <button type="submit" class="btn btn-primary btn-sm mt-3">Add Column</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>


    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $("button#edit_btn").click(function(e) {
                    e.preventDefault();
                    let pro = $(this).attr("col_name");
                    $("input[id='column_input']").val(pro);
                    $("input[id='column_input']").attr('name', pro);
                });
            });

            /* table edit */
            $('#col_update').submit(function(e) {
                e.preventDefault();
                var coldata = new FormData($('#col_update')[0]);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: "post",
                    url: "{{ url('column-update') }}",
                    data: coldata,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data, textStatus, jqXHR) {
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                        $('#insertmodel').hide();
                        swal("Good job!", "You clicked the button!", "success");
                        location.reload();
                    }
                }).done(function(data) {
                    $("#success_msg").html("Data Save Successfully");
                    $('#exampleModal').modal('toggle');
                    $('#idForm')[0].reset();

                    //            console.log(data);
                    window.location.href = "{{ url('form') }}/" + data;
                    // location.reload();
                }).fail(function(data, textStatus, jqXHR) {
                    $("#loader").hide();
                    var json_data = JSON.parse(data.responseText);
                    $.each(json_data.errors, function(key, value) {
                        $("#" + key).after(
                            "<span class='error_msg' style='color: red;font-weigh: 600'>" +
                            value +
                            "</span>");
                        $("#" + key).addClass("error");
                    });
                });

            });


            $('button#delbtn').click(function(e) {
                e.preventDefault();


                let colname = $(this).attr("col_name");
                let basepath = $("h3#basepath").text();
                let tablename = $("h3#tab_name").text();
                let cols = encodeURIComponent(colname);
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
                                // url: 'column-delete/' + colname,
                                url: basepath + '/column-delete/' + cols + '/' + tablename,
                                success: function(response) {
                                    swal("Poof! Your imaginary file has been deleted!", {
                                        icon: "success",
                                    });
                                    location.reload();


                                }
                            });




                        } else {
                            swal("Your imaginary file is safe!");
                        }
                    });



            });
            $('#aftsel').css("display", "none");
            $("#loader").hide();
            $("input[id='new_column_input']").blur(function() {
                let basepath = $("h3#basepath").text();
                let tablename = $("h3#tab_name").text();
                $('#aftsel').css("display", "block");
            });


            $('#col_insert').submit(function(e) {
                e.preventDefault();
                var coldata = new FormData($('#col_insert')[0]);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: "post",
                    url: "{{ url('column-create') }}",
                    data: coldata,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data, textStatus, jqXHR) {
                        $("#loader").show();
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                        $('#exampleModalAddCol').hide();
                        swal("Good job!", "You clicked the button!", "success");
                        location.reload();
                    }
                }).done(function(data) {
                    $("#success_msg").html("Data Save Successfully");
                    $('#exampleModal').modal('toggle');
                    $('#idForm')[0].reset();

                    //            console.log(data);
                    window.location.href = "{{ url('form') }}/" + data;
                    // location.reload();
                }).fail(function(data, textStatus, jqXHR) {
                    $("#loader").hide();
                    var json_data = JSON.parse(data.responseText);
                    $.each(json_data.errors, function(key, value) {
                        $("#" + key).after(
                            "<span class='error_msg' style='color: red;font-weigh: 600'>" +
                            value +
                            "</span>");
                        $("#" + key).addClass("error");
                    });
                });

            });

            /* table delete */


        })(jQuery)
    </script>
@endsection
