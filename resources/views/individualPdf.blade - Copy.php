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

        .user-information {
            display: flex;
            justify-content: space-between;
        }
    </style>

    <div class="content">
        <div class="page-inner">


            <div class="entryform">
                <h3>Menu>Form generator</h3>
                <input type="hidden" name="db_table_name" value="{{ $form_tables[0]->table_name }}">
                <input type="hidden" name="created_by_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="form_creator" value="{{ $form[0]->form_creator }}">
                <form action="{{ url('tablecreate') }}" method="POST">
                    @csrf

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
                                    // if ($checkread == 0) {
                                    //     $newcol = '-';
                                    // } else {
                                    //     $newcol = $col;
                                    // }
                        
                                    // if ($key_col == 'table_name') {
                                    //     echo $kahini = $col;
                                    // }
                                    // die();
                                    $present_form_id = $form[0]->id;
                        
                                    $kkk = URL::to('/');
                        
                                    if ($key_col == 'created_by') {
                                        // echo $key_col;
                                        // die();
                                        // die();
                                        $username = $usessrname->getUserName($col);
                                        echo "<td>$username</td>";
                                    } else {
                                        echo "<td>$col</td>";
                                    }
                        
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

                    <br>
                    <br>
                    <br>







            </div>
        </div>

        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>


        <script type="text/javascript"></script>
    @endsection
