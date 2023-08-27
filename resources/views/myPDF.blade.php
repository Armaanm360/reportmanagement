@inject('usessrname', 'App\Models\UserForm')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Php') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        .form-1-new h3,
        .form-2-new h3,
        .form-3-new h3 {
            text-align: center;
        }

        textarea#id {
            color: chocolate;
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


</head>

<body>
    <div class="col-md-6">
        {{-- <h2>Form Name :{{ $form[0]->form_name }}</h2>
        <h2>Table Name :{{ $form_tables[0]->table_headline }}</h2> --}}

        <h2><span class="text-info">শাখা/প্রতিষ্ঠানের
                নামঃ</span>{{ $usessrname->getDeptNameUserWise($userforms[0]->reciever_user_id) }}</h2>
        <h2><span class="text-info">রিপোর্ট/প্রতিবেদনের নামঃ</span> <span
                style="dotted">{{ $usessrname->getUserFormById($userforms[0]->sub_form_id) }}</span>
        </h2>
        {{-- <h2>সময়কালঃ <span class="text-warning" id="deadline">{{ $date_submission[0]->deadline }}</span>
        </h2> --}}

        <p>

        <h3>Description:</h3>{{ $form[0]->html_form }}</p>
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


</body>

</html>
