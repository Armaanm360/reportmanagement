@extends('admin.master')
@section('content')
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

        /* label {
                                                                                            font-size: 0.4vw !important;
                                                                                        } */
    </style>

    <div class="content">
        <div class="page-inner">


            <div class="entryform">
                <h3>Menu>Form generator</h3>
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

                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="html_form">{{ $form[0]->html_form }}</textarea>
                    </div>
                    <hr>

                    <div class="p-3">
                        <h1 class="text-info">{{ $form_tables[0]->table_headline }}</h1>
                    </div>
                    <div class="printed-link" id="tablePrinting">
                        <?php
                        $larry = DB::table($table_info)->get();
                        $array_head = json_decode(json_encode($larry), true);
                        $for_val = end($array_head);
                        
                        if (count($array_head)) {
                            echo '<table class="table-responsive" border="1">';
                            echo '<thead>';
                            $headerRow = true;
                            if ($headerRow) {
                                $headerRow = false;
                                echo '<tr>';
                                foreach (array_keys($array_head[0]) as $header) {
                                    echo "<th scope='col'>" . str_replace('_', ' ', $header) . '</th>';
                                }
                                echo '</tr>';
                                echo '<thead>';
                            }
                            echo '<tbody>';
                        
                            foreach ($data_value as $key => $value) {
                                echo '<tr>';
                                foreach ($value as $key_col => $col) {
                                    $checkread = strlen($col);
                                    if ($checkread == 0) {
                                        $newcol = '-';
                                    } else {
                                        $newcol = $col;
                                    }
                        
                                    if (Auth::user()->hasRole('super-admin')) {
                                        echo "<td>$newcol</td>";
                                    } elseif ($value->created_by == Auth::user()->id) {
                                        echo "<td>$newcol</td>";
                                    }
                                }
                                echo '</tr>';
                            }
                        
                            echo '<tbody>';
                        
                            echo '</table>';
                        }
                        ?>


                    </div>


                    @foreach ($form_tables as $row)
                        <div class="form-row Tableblock" data-id="1">
                            <div class="form-group col-md-12">
                                <h3 for="Financial Year" style="text-align:left;font-weight: bold">{{ $row->table_name }}
                                </h3>

                                <input type="hidden" name="table_name" class="form-control" id="table_name"
                                    placeholder="Enter Table Name">
                            </div>

                            <?php
                            $ab = $form_model->table_columns($row->table_name);
                            
                            ?>
                            @foreach ($ab as $row)
                                @php
                                    // print_r($row);
                                    // $arr = explode(" ",$row);
                                    // echo $arr[0]->select_user;
                                @endphp

                                <div class="form-group col-md-2">
                                    <label for="Name">
                                        {{ str_replace('_', ' ', $row) }} <span class="add addBlock" data-id="1"
                                            data-table="1" style="color: rgb(3, 43, 3);cursor: pointer;"></span>
                                    </label>
                                    <div class="optionBox">
                                        <div class="block_1">
                                            @if ($row == 'select_user')
                                                @php
                                                    $dab = DB::table('users')
                                                        ->latest()
                                                        ->get();
                                                @endphp
                                                <select class="form-control select-2" id="select_user_name" name=""
                                                    style="width: 100%">
                                                    <option value="">{{ __('Select Division') }}</option>
                                                    @foreach ($dab as $opt)
                                                        <option value="{{ $opt->id }}">{{ $opt->name }}</option>
                                                    @endforeach


                                                </select>
                                            @endif



                                            <input type="text" class="form-control" name="{{ $row }}"
                                                id="name.0" placeholder="Enter Value">

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach


                    <button type="submit" class="btn btn-success">নতুন সারি যোগ করুন </button>
                    <button type="button" class="btn btn-danger"><a href="<?php echo url('generate-pdf/' . $form[0]->id); ?>">Generate Pdf</a></button>
                    <button type="button" class="btn btn-success"><a class="text-white" href="<?php echo url('created-submit-form/' . $form[0]->id); ?>">Edit
                            Form</a></button>
                    <button type="button" id="print_table" class="btn btn-danger" onClick="printTable()">Print Pdf</button>






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

            let bro = $('#select_user_name option:selected').val();




            $('#select_user_name').change(function() {
                var select_user = $("#select_user_name option:selected").val();
                $("input[type=hidden][name=select_user]").val(select_user);


            });



            window.addEventListener('load', function() {

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
