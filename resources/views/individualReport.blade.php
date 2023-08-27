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
    <div class="p-3">
        <h1 class="text-info">{{ $form_tables[0]->table_headline }}</h1>
    </div>

    <div class="printed-link" id="tablePrinting">
        <?php
        $larry = DB::table($table_info)->get();
        $array_head = json_decode(json_encode($larry), true);
        $for_val = end($array_head);
        $slice = array_slice($for_val, 3, -1);
        
        // print_r($slice);
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
                $free = array_slice($damn, 3, -1);
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
