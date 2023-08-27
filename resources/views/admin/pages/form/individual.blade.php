@extends('admin.master')
@section('content')
    @inject('form_model', 'App\Models\Form')
    @inject('usessrname', 'App\Models\UserForm')

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

        span#section_style {

            text-decoration: 2px underline dotted;
        }

        .user-information {
            display: flex;
            justify-content: space-between;
        }

         table#myTable {
            overflow-x: hidden !important;
            display: inline-block;
            white-space: nowrap;
        }
    </style>

    <div class="content">
        <div class="page-inner">


            <div class="entryform">
                <h3>Menu>Form generator</h3>
                <input type="hidden" name="db_table_name" value="{{ $form_tables[0]->table_name }}">
                <input type="hidden" name="created_by_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="form_creator" value="{{ $form[0]->form_creator }}">

                <div class="first-item">
                    <span id="section_style">{{ $usessrname->getUserName($data_value[0]->created_by) }} -</span>
                    শাখা/অধিশাখা
                </div>
                <div class="second-item">
                    বিষয়ঃ <span></span>{{ $form_tables[0]->table_headline }}
                </div>
                <form action="{{ url('tablecreate') }}" method="POST">
                    @csrf

                    <hr>

                    <div class="p-3">
                        {{-- <h1 class="text-info">{{ $form_tables[0]->table_headline }}</h1> --}}
                    </div>

        
      <div class="printed-link" id="tablePrinting" style="width: min-content">
                        <?php
                        $larry = DB::table($table_info)->get();
                        $array_head = json_decode(json_encode($larry), true);
                        $for_val = end($array_head);
                        
                        if (count($array_head)) {
                            echo '<table class="table-responsive" id="myTable" border="1">';
                            echo '<thead>';
                            $headerRow = true;
                            if ($headerRow) {
                                $headerRow = false;
                                echo '<tr>';


                                foreach (array_keys($array_head[0]) as $header) {

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
                                    
                                    echo "<th scope='col' $styling_option>" . str_replace('_', ' ', $header) . '</th>';
                                }
                                echo '</tr>';
                                echo '<thead>';
                            }
                            echo '<tbody>';
                        
                            foreach ($data_value as $key => $value) {
                                echo '<tr>';
                                foreach ($value as $key_col => $col) {
                                    $checkread = strlen($col);
                                    $present_form_id = $form[0]->id;
                        
                                    $kkk = URL::to('/');


                                  if ($key_col == 'id') {
               $styling_option = 'style="display:none"';
              }elseif($key_col == 'table_name'){
               $styling_option = 'style="display:none"';
              }elseif($key_col == 'created_at'){
                $styling_option = 'style="display:none"';
              }elseif($key_col == 'created_by'){
                $styling_option = 'style="display:none"';
              }elseif($key_col == 'filled_by'){
                $styling_option = 'style="display:none"';
              }elseif($key_col == 'authorize_user'){
                $styling_option = 'style="display:none"';
              }elseif($key_col == 'status'){
                $styling_option = 'style="display:none"';
              }
              else{
                $styling_option = '';
              }

              if ($key_col == 'id') {
                echo "<td $styling_option>$col</td>";
              }elseif($key_col == 'table_name'){
                echo "<td $styling_option>$col</td>";  
              }elseif($key_col == 'created_at'){
                echo "<td $styling_option>$col</td>";  
              }elseif($key_col == 'created_by'){
                echo "<td $styling_option>$col</td>";  
              }elseif($key_col == 'filled_by'){
                echo "<td $styling_option>$col</td>";  
              }elseif($key_col == 'authorize_user'){
                echo "<td $styling_option>$col</td>";  
              }elseif($key_col == 'status'){
                echo "<td $styling_option>$col</td>";  
              }else{
                echo "<td $styling_option class='calclass'>$col</td>";
                
              }
                        
                                    // if ($key_col == 'created_by') {
                                    //     $username = $usessrname->getUserName($col);
                                    //     echo "<td $styling_option>$username</td>";
                                    // } else {
                                    //     echo "<td $styling_option>$col</td>";
                                    // }

                                     
                        
                                    // if (Auth::user()->hasRole('super-admin')) {
                                    //     echo "<td>$newcol</td>";
                                    // } elseif ($value->created_by == Auth::user()->id) {
                                    //     echo "<td>$newcol</td>";
                                    // }
                                }
                                echo '</tr>';
                            }
                        
                            echo '<tbody>';
                        
                            echo '</table>';
                        }
                        ?>


                    </div>

                    </div>
              
                    <br>
                    <br>
                    <br>

                    {{-- <div class="row">
                        <div class="col-md-6">
                            <div class="m-5 signtaures">

                                <div class="right-item">

                                    <span><img src="{{ URL('public/2.png') }}" alt=""
                                            id="approver_sign"></span><br>
                                    অনুমোদনকারী
                                    নির্বাহী কর্মকর্তার
                                    স্বাক্ষর ও সিল
                                </div>




                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="m-5 signtaures">
                                <div class="right-item">

                                    <span><img src="{{ URL('public/1.png') }}" alt=""></span><br> প্রতিবেদন
                                    প্রস্তুতকারী কর্মকর্তার স্বাক্ষর ও সিল
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Button trigger modal -->
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                    </button> --}}











                    <button type="button" class="btn btn-danger"><a href="<?php echo url('generate-pdf-individual/' . $data_value[0]->created_by . '/' . $form[0]->id); ?>">Generate Pdf</a></button>






            </div>
        </div>

        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });



            $("button#approve").click(function(e) {
                e.preventDefault();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
                $('#exampleModal').hide();
                swal("Good job!", "Approved!", "success");
                // $('img#approver_sign').show();
            });




            $("button#decline").click(function(e) {
                e.preventDefault();

                $('div#feedback').show();
                $('button#approve').hide();
                $('button#decline').hide();






            });


            $("button#Feedback_btn").click(function(e) {
                e.preventDefault();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
                $('#exampleModal').hide();
                swal("", "Feedback Sent!", "warning");

                location.reload();







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

            let bro = $('#select_user_name option:selected').val();




            $('#select_user_name').change(function() {

                var select_user = $("#select_user_name option:selected").val();
                $("input[type=hidden][name=select_user]").val(select_user);



            });



            window.addEventListener('load', function() {
                $('div#feedback').hide();
                //$('img#approver_sign').hide();

                var strDate = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();
                var newbie_select = $("textarea[name=select_user]").val();
                $("input[type=text][name=created_at]").val(strDate);
                $("input[type=text][name=table_name]").val(db_table_name);
                $("input[type=text][name=created_by]").val(created_by_id);
                $("input[type=text][name=select_user]").val(select_user);
                $("input[type=text][name=table_name]").attr("readonly", true);
                $("input[type=text][name=updated_by]").attr("readonly", true);
                $("input[type=text][name=created_at]").attr("readonly", true);
                $("input[type=text][name=created_by]").attr("readonly", true);
                $("input[type=text][name=select_user]").prop("type", "hidden");
                $("input[type=text][name=id]").val(1);
                $("input[type=text][name=id]").attr("readonly", true);
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

                        $("input[type=text][name=id]").val(response + 1);


                    }


                });



               let column = $("#myTable > tbody > tr:first > td").length - 7;
               let totals = [];

               for (let i = 0; i < column; i++) {
                    $('#myTable').append('<td class="totalCol"></td>');
                    totals.push(0);
                }


                            $(document).ready(function() {


                let check_user_type = $('h3#check_user_type').text();


                let $dataRows = $("#myTable tr");

                    $dataRows.each(function() {
                        $(this).find('.calclass').each(function(i) {
                            totals[i] += parseInt($(this).text());
                        });
                    });


                    $("#myTable td.totalCol").each(function(i) {
                        $(this).text(totals[i]);
                    });

           



            });

                // $.ajax({
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     },
                //     type: "GET",
                //     url: '{{ url('select-user-id') }}',
                //     success: function(response) {

                //         $("textarea[name=created_by]").val(response);


                //     }


                // });

                //  $("input[type=text][name=id]").val(random_numb);


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
<script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable100').DataTable();

        });
    </script>
        <script type="text/javascript"></script>
    @endsection
