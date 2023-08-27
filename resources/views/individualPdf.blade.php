    @inject('usessrname', 'App\Models\UserForm')

    <body>

        <div class="entryform">
            <h3>Report</h3>
            <input type="hidden" name="db_table_name" value="{{ $form_tables[0]->table_name }}">
            <input type="hidden" name="created_by_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="form_creator" value="{{ $form[0]->form_creator }}">

            <hr>

            <div class="first-item">
                <span id="section_style">{{ $usessrname->getUserName($data_value[0]->created_by) }} -</span>
                শাখা/অধিশাখা
            </div>
            <div class="second-item">
                <span id="section_style">বিষয়ঃ {{ $form_tables[0]->table_headline }} -</span>

            </div>

        </div>

        <div class="p-3">
            <h1 class="text-info">{{ $form_tables[0]->table_headline }}</h1>
        </div>
        <div class="printed-link" id="tablePrinting">
             <?php
        $larry = DB::table($table_info)->get();
        $array_head = json_decode(json_encode($larry), true);
        $for_val = end($array_head);
        $slice = array_slice($for_val, 6, -1);
        // $first = array_keys($slice)[0];
        // $turnintoarr = json_encode($first);
        // $rest = array_keys($for_val);
        // $resplice = array_slice($rest, 4, -1);
        //$merge = array_merge($turnintoarr, $resplice);
        // echo '<pre>';
        // print_r($turnintoarr);
        // die();
        
        if (count($slice)) {
            echo '<table class="table-responsive" border="1">';
            echo '<thead>';
            $headerRow = true;
            if ($headerRow) {
                $headerRow = false;
                echo '<tr>';
                foreach (array_keys($slice) as $header) {
                    echo "<th scope='col'>" . str_replace('_', ' ', $header) . '</th>';
                }
                echo '</tr>';
                echo '<thead>';
            }
            echo '<tbody>';
        
            foreach ($data_value as $key => $value) {
                echo '<tr>';
                $damn = json_decode(json_encode($value), true);
                $free = array_slice($damn, 6, -1);
                $obj = json_encode($free);
                foreach ($free as $key_col => $col) {
                    $checkread = strlen($col);
                    if ($checkread == 0) {
                        $newcol = '-';
                    } else {
                        $newcol = $col;
                    }
                    echo "<td>$newcol</td>";
                }
                echo '</tr>';
            }
        
            echo '<tbody>';
        
            echo '</table>';
        }
        ?>


        </div>
        </div>


        <div class="row">
            <div class="row">
                <div class="col-md-6">
                    <div class="m-5 signtaures">
                        <div class="right-item">

                            <span><img src="{{ URL('public/2.png') }}" alt="" id="approver_sign"></span><br>
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
            </div>
        </div>
    </body>
