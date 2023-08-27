@extends('admin.master')
@section('content')
    @inject('usessrname', 'App\Models\UserForm')
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

        textarea {
            border: none;
        }

        /* label {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    font-size: 0.4vw !important;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                } */
    </style>

    <div class="content">
        <div class="page-inner">

            <div class="entryform">
                <h3>Form generator > <span class="text-danger">Plain Form</span></h3>
                <h1 id="form_format" class="text-info" style="display: none">plain_form</h1>
                <input type="hidden" name="db_table_name" value="{{ $form_tables[0]->table_name }}">
                <input type="hidden" name="created_by_id" value="{{ Auth::user()->id }}">
                <h2 id="final_fixed">{{ $final_fixed }}</h2>
                <input type="hidden" name="total" value="0">
                {{-- <input type="hidden" name="form_creator" value="{{ $form[0]->form_creator }}"> --}}

                <div class="form-group col-md-12">
                    <h3 for="Financial Year" style="text-align:center;font-weight: bold">{{ $form[0]->form_name }}
                    </h3>
                    {{-- <p>ID : {{ $form[0]->form_id }}</p> --}}
                    <input type="hidden" name="var_id" value="{{ $form[0]->id }}">
                </div>
                {{-- <div class="form-group">
                        <textarea class="ckeditor form-control" name="html_form">{{ $form[0]->html_form }}</textarea>
                    </div> --}}
                <hr>

                {{ $form_tables[0]->table_name }}
                <h1 id="table_name" table_name="{{ $table_info }}"></h1>
                <div class="p-3">
                    <h1 class="text-info">{{ $form_tables[0]->table_headline }}

                        <form action="{{ url('tablecreate') }}" method="POST">
                            @csrf




                            @foreach ($form_tables as $row)
                                <div class="form-row Tableblock" data-id="1">
                                    <div class="form-group col-md-12">
                                        {{-- <h3 for="Financial Year" style="text-align:left;font-weight: bold">
                                            {{ $row->table_name }}
                                        </h3> --}}

                                        <input type="hidden" name="table_name" class="form-control" id="table_name"
                                            placeholder="Enter Table Name">
                                    </div>

                                    <?php
                                    $ab = $form_model->table_columns($row->table_name);
                                    
                                    ?>
                                    @foreach ($ab as $row)
                                        <input type="hidden" class="form-control" name="{{ $row }}" id="name.0"
                                            placeholder="Enter Value">
                                    @endforeach
                                </div>
                            @endforeach

                            {{-- @if (Auth::user()->user_type == 'ENTRY_USER' && $status_check[0]->final_status == 0) --}}
                            @if ($saved_table[0]->final_status == 0)
                                <button type="submit" class="btn btn-success">
                                    <span class="text-bold">( + )</span>
                                </button>
                            @endif



                        </form>
                    </h1>
                </div>

                <form action="{{ url('generated_update') }}" method="POST" id="complete_form">
                    @csrf
                    <div class="printed-link" id="tablePrinting" style="width: min-content">
                        <?php
                        $larry = DB::getSchemaBuilder()->getColumnListing($table_info);
                        $array_head = json_decode(json_encode($larry), true);
                        $for_val = end($array_head);

   
                        if (count($larry)) {

                 
                            echo '<table class="table-responsive" border=".5" id="myTable" style="overflow-x: auto;width: fit-content">';
                            echo '<thead>';
                            $headerRow = true;
                            if ($headerRow) {
                                $headerRow = false;
                                echo '<tr>';
                                    foreach ($array_head as $header) {?>
                        <?php  
              if ($header == 'id') {
               $styling_option = 'style="display:none"';
              }elseif($header == 'table_name'){
               $styling_option = 'style="display:none"';
              }elseif($header == 'created_at'){
                $styling_option = 'style="display:none"';
              }elseif($header == 'created_by'){
                $styling_option = 'style="display:none"';
              }elseif($header == 'filled_by'){
                $styling_option = 'style="display:none"';
              }elseif($header == 'authorize_user'){
                $styling_option = 'style="display:none"';
              }elseif($header == 'status'){
                $styling_option = 'style="display:none"';
              }
              else{
                $styling_option = '';
              }

   
                echo "<th scope='col' id='$header' $styling_option >".str_replace("_"," ",$header)."</th>";
              
            }
            if ($saved_table[0]->final_status == 0) {
                echo "<th>Action</th>";
            }else{
                echo "";
            }
              
            echo '</tr>';
                                echo '<thead>';
                            }
                            echo '<tbody>';
                        
                            $i = 0;
                            // if (Auth::user()->user_type == 'ENTRY_USER') {
                             foreach ($data_value as $key => $value) {
                                $i++;
                                $tr_style = '';
                                echo "<tr $tr_style>";
                        
                                echo "<input name='row_id[]' type='hidden' value='$i'>";
                                $colmns = '';
                                foreach ($value as $key_col => $col) {
                                    $colmns .= ',' . $key_col;
                                    $name = $key_col . '_' . $value->id;
                                    echo "<input name='rowsk[]' type='hidden' value='$value->id'>";
                                    //  $exp_array = explode(" ",$value->created_by);
                                    $exp_user = explode(' ', Auth::user()->id);
                                    $checkread = strlen($col);
                                    /* hide cols */
                                    if ($key_col == 'id') {
                                        $styling_option = 'style="display:none"';
                                    } elseif ($key_col == 'table_name') {
                                        $styling_option = 'style="display:none"';
                                    } elseif ($key_col == 'created_at') {
                                        $styling_option = 'style="display:none"';
                                    } elseif ($key_col == 'status') {
                                        $styling_option = 'style="display:none"';
                                    } elseif ($key_col == 'created_by') {
                                        $styling_option = 'style="display:none"';
                                    }elseif ($key_col == 'authorize_user') {
                                        $styling_option = 'style="display:none"';
                                    }elseif ($key_col == 'filled_by') {
                                       $styling_option = 'style="display:none"';
                                    } else {
                                        $styling_option = '';
                                    }
                                    /* end */
                                    // if ($exp_array == $exp_user) {
                                    //     $check = "";
                                    // }elseif($exp_array !== $exp_user && $checkread == 0){
                                    //     $check = "";
                                    // }else{
                                    //     $check = "readonly";
                                    // }
                        
                                    // if ($key_col == 'created_by' && Auth::user()->id == $form[0]->form_creator) {
                                    //    $col = $usessrname->getUserName($col);
                                    // }elseif($key_col == 'created_by'){
                                    //     $col = $col;
                                    // }
                                    if ($key_col == 'authorize_user') {
                                        $coling = $usessrname->getDeptNameUserWise($col);
                                        echo "<td id='$key_col' $styling_option><input name='$name' id='$key_col' class='styling_class'  value='$col' type='hidden'><textarea>$coling</textarea><input type='hidden' name='colmns' value='$colmns'></td>";
                                    } elseif ($key_col == 'authorize_user') {
                                        $col = $col;
                                    } else {
                                        echo "<td id='$key_col' $styling_option><textarea name='$name' id='$key_col' class='styling_class' >$col</textarea><input type='hidden' name='colmns' value='$colmns'></td>";
                                    }

                                    // echo '<td class="total_sum_value"><input type="text" class="total_sum_value" readonly></td>';
      
                               
                                        // echo "<td id='$key_col' $styling_option><textarea name='$name' id='$key_col' class='styling_class' >$col</textarea><input type='hidden' name='colmns' value='$colmns'></td>";
                                    
                                }
                                if ($saved_table[0]->final_status == 0) {
                                    echo "<td><button type='button' class='btn btn-danger' id='row_delete' row_delete_btn = '$value->id'>(-)</button></td>";
                                }else{
                                    echo "";
                                }
                                

                                // if ($status_check[0]->final_status == 0) {
                                //                                echo "<td><button type='button' class='btn btn-danger' id='row_delete' row_delete_btn = '$value->id'>(-)</button></td>";
                                // }
    
                                echo '</tr>';

                                
                            }
                            // }
              
                        
                            echo '<tbody>';
                        
                            echo '</table>';
                        }
                        if ($data_value_count > 0) {
                           echo '<button type="submit" class="btn btn-info text-white m-2">সংরক্ষন করুন</button>';
                           echo '<button type="button" id="saved_button" class="btn btn-info text-white">চূড়ান্ত সংরক্ষণ</button>';
                        }
                 
                        ?>


                    </div>

                    @if ($default_form_check_count == 0 && isset($default_form_check[0]->default_form_status) == 0)
                        <div class="col-md-6">
                            <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded def-text">
                                <div class="card-header">
                                    <h3 class="font-weight-bold">Save This Form As Default Form</h3>
                                </div>
                                <div class="card-body">
                                    <button class="btn btn-secondary" id="saved_default">Save</button>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-md-3"></div>
                        <div class="col-md-3 card text-center shadow-lg p-3 mb-5 bg-secondary  def-text">
                            <h3 class="font-weight-bold text-white">Default form</h3>
                        </div>
                    @endif

                    <div class="row p-3">
                        <div class="col-md-4"></div>
                        {{-- <div class="col-md-4">
                            @if (Auth::user()->user_type == 'ENTRY_USER')
                                @if ($usessrname->getBlanck($table_info, Auth::user()->id) && $status_check[0]->final_status == 0)
                                    <button type="submit" class="btn btn-info text-white">সংরক্ষন করুন</button>
                                @else
                                @endif
                            @else
                            @endif

                        </div> --}}

                        {{-- <button type="submit" class="btn btn-info text-white">সংরক্ষন করুন</button>
                        <button type="button" id="saved_button" class="btn btn-info text-white">Save Form</button> --}}
                        <div class="col-md-4"></div>

                        <div class="col-md-4"></div>


                    </div>


                </form>
                {{-- @if (Auth::user()->user_type == 'AUTHORIZE_USER' && $form[0]->form_creator == Auth::user()->id)
                    <div class="card">
                        <div class="card-header">
                            Comments Rejection
                        </div>
                        <div class="card-body">
                            {{ $comment[0]->comment }}
                        </div>
                    </div>
                @endif --}}


                @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                    @if ($form[0]->form_creator !== Auth::user()->id)
                        <a type="buton" class="btn btn-info" href="<?php echo url('send-form-back/' . $form[0]->id); ?>">
                            Send Back
                        </a>
                    @endif

                    <a type="buton" class="btn btn-success" href="<?php echo url('send-form/' . $form[0]->id); ?>">Send To Authorized User
                    </a>
                    <a type="buton" class="btn btn-dark" href="<?php echo url('send-form-individual/' . $form[0]->id); ?>">individually (Authorize User)
                    </a>


                    <a type="buton" class="btn btn-success" href="<?php echo url('send-form-entry-user/' . $form[0]->id); ?>">Send To Entry User
                    </a>
                @elseif(Auth::user()->user_type == 'ENTRY_USER' && $status_check[0]->final_status == 0)
                    <a type="buton" class="btn btn-success" href="<?php echo url('send-form-entry-user/' . $form[0]->id); ?>">Send To Authorized User
                    </a>
                @endif

                {{-- @php
                        if ($form[0]->form_creator == Auth::user()->id) {
                            echo '<button type="button" class="btn btn-info">Comments</button>';
                        } else {
                            echo '<button type="submit" class="btn btn-success">নতুন সারি যোগ করুন </button>';
                        }
                    @endphp --}}


                {{-- <button type="button" class="btn btn-danger"><a href="<?php echo url('generate-pdf/' . $form[0]->id); ?>">Generate Pdf</a></button> --}}
                <!-- <button type="button" class="btn btn-success"><a class="text-white" href="<?php echo url('edit-form/' . $form[0]->id); ?>">Edit
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Form</a></button> -->
                <button type="button" id="print_table" class="btn btn-danger" onClick="printTable()">Print
                    Pdf</button>

                <input type="hidden" id="row_count" value>


                <!-- Button trigger modal -->


                <!-- Modal -->


            </div>
        </div>

        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });

            var d = new Date();
            var strDate = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();
            var db_table_name = $("input[type=hidden][name=db_table_name]").val();
            var created_by_id = $("input[type=hidden][name=created_by_id]").val();
            var select_user = $("#select_user_name option:selected").val();
            var n = 96845;
            var tex = '';
            var random_numb = 'Form-' + Math.floor(Math.random() * n) + 1;
            var var_id = $("input[type=hidden][name=var_id]").val();
            var filled_by = '';
            var authorize_user = '';


            let bro = $('#select_user_name option:selected').val();





            $('#select_user_name').change(function() {
                var select_user = $("#select_user_name option:selected").val();
                $("input[type=hidden][name=select_user]").val(select_user);


            });



            window.addEventListener('load', function() {


                $("textarea#id").removeClass();
                $("textarea#created_by").removeClass();
                $("textarea#filled_by").removeClass();
                $("textarea#authorize_user").removeClass();
                $("textarea#status").removeClass();
                $("textarea#table_name").removeClass();
                $("textarea#created_at").removeClass();

                var strDate = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();
                var newbie_select = $("textarea[name=select_user]").val();
                $("input[type=hidden][name=created_at]").val(strDate);
                $("input[type=hidden][name=table_name]").val(db_table_name);
                $("input[type=hidden][name=created_by]").val(created_by_id);
                $("input[type=hidden][name=select_user]").val(select_user);
                $("input[type=hidden][name=filled_by]").val(0);
                $("input[type=hidden][name=authorize_user]").val(0);
                $("input[type=hidden][name=status]").val(0);
                $("input[type=hidden][name=table_name]").attr("readonly", true);
                $("input[type=hidden][name=updated_by]").attr("readonly", true);
                $("input[type=hidden][name=created_at]").attr("readonly", true);
                $("input[type=hidden][name=created_by]").attr("readonly", true);
                $("input[type=hidden][name=status]").attr("readonly", true);
                $("input[type=hidden][name=select_user]").prop("type", "hidden");
                $("input[type=hidden][name=id]").val(1);
                $("h2#final_fixed").css("display", "none");

                // $("input[type=hidden][name=id]").attr("readonly", true);
                $("textarea[name=id]").attr("readonly", true);
                // $("textarea[name=created_at]").attr("readonly", true);
                // $("textarea[name=table_name]").attr("readonly", true);
                // $("textarea[name=created_by]").attr("readonly", true);
                // $("textarea[name=select_user]").attr("readonly", true);
                $("textarea[class=table_name]").attr("readonly", true);

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '{{ url('pass-some-data') }}/' + var_id,
                    success: function(response) {

                        $("input[type=hidden][name=id]").val(response + 1);


                    }


                });



                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "GET",
                    url: '{{ url('select-user-id') }}',
                    success: function(response) {

                        $("textarea[name=created_by]").val(response);


                    }


                });



                //  $("input[type=text][name=id]").val(random_numb);


            });





            $('button#row_delete').on('click', function(event) {
                event.preventDefault();

                let del_id = $(this).attr('row_delete_btn');
                let table_name = $('h1#table_name').attr('table_name');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "GET",
                    url: '{{ url('row-del-form') }}/' + del_id + '/' + table_name,
                    success: function(response) {

                        location.reload();


                    }

                });




            });



            /* saved form */

            $('button#saved_button').on('click', function(event) {
                event.preventDefault();

                let saved_table_name = $("input[type=hidden][name=db_table_name]").val();
                let saved_form_creator = $("input[type=hidden][name=created_by_id]").val();
                let saved_form_type = $('h1#form_format').text();
                let saved_format = $("input[id=row_count]").val();
                let saved_column = $("h2#final_fixed").text();
                let saved_form_id = $("input[type=hidden][name=var_id]").val();
                let status = 0;


                alert(saved_form_id);



                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: "post",
                    url: "{{ url('saved-format') }}",
                    data: {
                        saved_table_name: $("input[type=hidden][name=db_table_name]").val(),
                        saved_form_creator: $("input[type=hidden][name=created_by_id]").val(),
                        saved_form_type: saved_form_type,
                        saved_format: $("input[id=row_count]").val(),
                        saved_column: saved_column,
                        saved_form_id: saved_form_id,
                    },
                    // contentType: false,
                    // cache: false,
                    // processData: false,
                    success: function(data, textStatus, jqXHR) {
                        swal({
                            title: "Success!",
                            text: "Form Has Been Saved ",
                            icon: "success",
                            button: "ok",
                        });

                        location.reload();
                    }
                }).done(function(data) {
                    $("#success_msg").html("Data Save Successfully");
                    $('#exampleModalLong').modal('toggle');
                    $('#idForm')[0].reset();
                    location.reload();


                    //            console.log(data);
                    // window.location.href = "{{ url('form') }}/" + data;

                }).fail(function(data, textStatus, jqXHR) {
                    $("#loader").hide();
                    var json_data = JSON.parse(data.responseText);
                    $.each(json_data.errors, function(key, value) {
                        $("#" + key).after(
                            "<span class='error_msg' style='color: red;font-weigh: 600'>" + value +
                            "</span>");
                        $("#" + key).addClass("error");
                    });
                });




            });


            let table_name_row_check = $("input[type=hidden][name=db_table_name]").val();

            // alert(table_name_row_check);
            //row check 
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "GET",
                url: '{{ url('check-row-before-save') }}/' + table_name_row_check,
                success: function(response) {

                    $("input[id=row_count]").val(response);


                }

            });



            $('button#saved_default').on('click', function(event) {
                event.preventDefault();

                let default_form_id = $("input[type=hidden][name=var_id]").val();
                let default_table_name = $("input[type=hidden][name=db_table_name]").val();
                let default_created_by = $("input[type=hidden][name=created_by_id]").val();
                swal({
                        title: "Are you sure Save As Default Form?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {


                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                method: "post",
                                url: "{{ url('saved-default-form') }}",
                                data: {
                                    default_form_id: default_form_id,
                                    default_table_name: default_table_name,
                                    default_created_by: default_created_by,
                                },
                                // contentType: false,
                                // cache: false,
                                // processData: false,
                                success: function(data, textStatus, jqXHR) {
                                    swal({
                                        title: "Success!",
                                        text: "Form Has Been Saved ",
                                        icon: "success",
                                        button: "ok",
                                    });

                                    location.reload();
                                }
                            }).done(function(data) {
                                $("#success_msg").html("Data Save Successfully");
                                $('#exampleModalLong').modal('toggle');
                                $('#idForm')[0].reset();
                                location.reload();


                                //            console.log(data);
                                // window.location.href = "{{ url('form') }}/" + data;

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
                        } else {
                            swal("unsaved");
                        }
                    });

            });







            $(function() {
                let tbl = $('#myTable');
                tbl.find('tr').each(function() {
                    // $this = this;
                    $(this).find('textarea[type=number]').bind("keyup", function() {
                        calculateSum();
                    });
                });

                function calculateSum() {
                    let tbl = $('#myTable');
                    tbl.find('tr').each(function() {
                        let sum = 0;
                        $(this).find('textarea[type=number]').not('.total_sum_value').each(function() {
                            if (!isNaN(this.value) && this.value.length != 0) {
                                sum += parseFloat(this.value);
                            }
                        });

                        $(this).find('.total_sum_value').val(sum.toFixed(2));
                    });
                }
            });

            function printTable() {
                var prtContent = document.getElementById("tablePrinting");
                var WinPrint = window.open();
                WinPrint.document.write(prtContent.innerHTML);
                WinPrint.document.close();
                WinPrint.focus();
                WinPrint.print();
                WinPrint.close();
            }
        </script>

        <script type="text/javascript"></script>
    @endsection
