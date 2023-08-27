<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('Php')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
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
    .form-6-new{
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

<?php 
$larry   = DB::table($table_info)->get();
$array_head = json_decode(json_encode($larry),true);
$for_val = end($array_head);
if (count($array_head)) {

    // print_r($array_head);
    // die;
    echo '<table border="1" class="table-responsive">';
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
              }elseif($header == 'created_by'){
                $styling_option = 'style="display:none"';
              }elseif($header == 'created_at'){
                $styling_option = 'style="display:none"';
              }
              else{
                $styling_option = '';
              }

                echo "<th scope='col' $styling_option>".str_replace("_"," ",$header)."</th>";
            }
            echo '</tr>'; 
						echo '<thead>';   
        }
				echo '<tbody>';
        
					
					      foreach ($data_value as $key=>$value) {
									echo '<tr>';      
										foreach ($value as $key_col => $col) {
                                                    if ($key_col == 'id') { 
                                                        $styling_option = 'style="display:none"';
                                                        }elseif($key_col == 'table_name'){
                                                         $styling_option = 'style="display:none"';
                                                        }elseif($key_col == 'created_by'){
                                                          $styling_option = 'style="display:none"';
                                                        }elseif($key_col == 'created_at'){
                                                         $styling_option = 'style="display:none"';
                                                        }else{
                                                             $styling_option = ''; 
                                                        }        

                                    $checkread = strlen($col);
                                    if($checkread == 0){
                                        
                                       $newcol = "-";
                                    }else{
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
				
   
      
    </body>
</html>
