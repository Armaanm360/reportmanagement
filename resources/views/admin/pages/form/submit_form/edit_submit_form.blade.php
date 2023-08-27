@extends('admin.master')
@section('content')

<div class="content">

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">{{__('Form')}}</h4>
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
                    <a href="#">{{__('Form')}}</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#"></a>
                </li>
            </ul>
        </div>
           <div class="container-fluid" id="search_parameter_card">
               <div class="row">

          
                <div class="col-md-6">
         <h2>Form Name :{{ $generated_form[0]->form_name }}</h2>
         <h2>Table Name :{{ $form_tables[0]->table_headline }}</h2>
         <h2>Description :</h2>
         <p>{{ $generated_form[0]->html_form }}</p>
         </div>
         <div class="col-md-6">
                            @if (isset($date_submission[0]->duration))
                                <h2 class="text-danger">Last Date of Submission:<span class="text-muted">{{ $date_submission[0]->duration }}</span></h2>

                             @elseif (!isset($date_submission[0]->duration))
                                  
                            @endif
                   
      
             
         </div>
  
		<form action="{{ url('generated_update') }}" method="POST" id="complete_form">
			@csrf		 
			<input type="hidden" name="form_id_get" value="{{ $generated_form[0]->id }}">
               @php
       


$larry   = DB::table($table_info)->get();
$array_head = json_decode(json_encode($larry),true);
$for_val = end($array_head);
if (count($array_head)) {
    echo '<table class="table-responsive" id="tableId">';
    echo '<thead>';
    $headerRow = true;
        if ($headerRow) {
            $headerRow = false;
            echo '<tr>';
            foreach (array_keys($array_head[0]) as $header) {?>
              <?php  
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
                echo "<th scope='col' id='$header' $styling_option>".str_replace("_"," ",$header)."</th>";
            }
            echo '</tr>'; 
						echo '<thead>';   
        }
				echo '<tbody>';
     

                                $i = 0;
								foreach ($data_value as $key=>$value) {
                                                              $i++;
									echo '<tr>';
                                                //   echo $value->id;
                                              
                                                   echo "<input name='row_id' type='hidden' value='$i'>";
                                       $colmns = '';
										foreach ($value as $key_col => $col) {
                                         $colmns .= ','.$key_col;
                                            $name = $key_col.'_'.$value->id;
                                             $exp_array = explode(" ",$value->created_by);
                                             $exp_user = explode(" ",Auth::user()->id);
                                            $checkread = strlen($col);

                                            /* hide cols */
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
                                     /* end */
                                            if ($exp_array == $exp_user) {
                                                $check = "";
                                            }elseif($exp_array !== $exp_user && $checkread == 0){
                                                $check = "";
                                            }else{
                                                $check = "readonly";
                                            }

                                            
										    echo "<td $styling_option><textarea name='$name' id='$key_col' class='styling_class' $check>$col</textarea><input type='hidden' name='colmns' value='$colmns'></td>";
										}
									 echo '</tr>';
            
				
        }
		
      
				echo '<tbody>';

    echo '</table>';
}
							 @endphp
<button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
<button type="button" class="btn btn-danger"><a href="<?php echo url('generate-pdf/'.$generated_form[0]->id)?>">Generate Pdf</a></button>

                        </form>
                       
                        

                </div>
               
                  <div class="col-md-2"></div>
                 
                        <div id="loader" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
               </div>
           </div>

           <div class="container-fluid" id="founded_form">

        </div>
    </div>
</div>

<script>
    $('#complete_form').find('textarea[class=styling_class]').each(function(e){

         let me = $(this).val();
         console.log(me);
    })   


window.addEventListener('load', function () {

let vars = 3;
  if(vars == 3){

 let pros = $("textarea[class=styling_class]").val();


//  $("th#id").hide();
//  $("td#id").hide();
//  $("th#created_by").hide();
//  $("td#created_by").hide();
//  $("th#table_name").hide();
//  $("td#table_name").hide();
//  $("th#created_at").hide();
//  $("td#created_at").hide();

//  console.log(pros);
// alert(txt);
    // $.ajax({
    //     url:'textfield-permission',
    //     success:function(response){
                     
    //     }
    // });
  }  
// function myFunction() {
//     var elements = document.getElementById("myForm").elements;
//     var obj ={};
//     for(var i = 0 ; i < elements.length ; i++){
//         var item = elements.item(i);
//         obj[item.name] = item.value;
//     }

//     document.getElementById("demo").innerHTML = JSON.stringify(obj);
// }
 $("textarea[id=table_name]").attr("readonly",true);
 $("textarea[id=id]").attr("readonly",true);
 $("textarea[id=created_at]").attr("readonly",true);
 $("textarea[id=created_by]").attr("readonly",true);
});



</script>
@endsection    
