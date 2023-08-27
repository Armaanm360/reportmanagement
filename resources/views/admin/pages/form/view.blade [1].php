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
    .form-6-new{
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
            <form action="{{ url('tablecreate') }}" method="POST">
							@csrf
                <div class="form-group col-md-12">
                    <h3 for="Financial Year" style="text-align:center;font-weight: bold">{{$form[0]->form_name}}</h3>              
                    <p>ID : {{$form[0]->form_id}}</p>
                </div>

                <hr>
               
                <div class="form-group">
                    <textarea class="ckeditor form-control" name="html_form">{{$form[0]->html_form}}</textarea>
                </div>
<hr>

<h2 class="text-cemte">Created Table</h2>


<?php 
$larry   = DB::table($table_info)->latest()->get();
$array = json_decode(json_encode($larry),true);

if (count($array)) {
    echo '<table class="table">';
    echo '<thead>';
    $headerRow = true;
        if ($headerRow) {
            $headerRow = false;
            echo '<tr>';
            foreach (array_keys($array[0]) as $header) {
                echo "<th scope='col'>$header</th>";
            }
            echo '</tr>'; 
						echo '<thead>';   
        }
				echo '<tbody>';
        echo '<tr>';
				// 	print_r($array);
					      foreach ($array[0] as $value) {
            echo "<td><textarea>$value</textarea></td>";
        }

        echo '</tr>';
				echo '<tbody>';

    echo '</table>';
}
?>
								   


                @foreach($form_tables as $row)
                <div class="form-row Tableblock" data-id="1">
                    <div class="form-group col-md-12">
                        <h3 for="Financial Year" style="text-align:left;font-weight: bold">{{$row->table_name}}</h3>
												<input type="hidden" name="db_table_name" value="{{ $row->table_name }}">
                     <input type="hidden"  name="table_name" class="form-control" id="table_name"  placeholder="Enter Table Name">
                    </div>              
							
                    <?php
                    $ab = $form_model->table_columns($row->table_name);
			
                    ?>
                    @foreach($ab as $row)
									<?php  
								
									 
									?>
                    <div class="form-group col-md-2">
                        <label for="Name">
                            {{$row}}  <span class="add addBlock" data-id="1" data-table="1" style="color: rgb(3, 43, 3);cursor: pointer;"></span>
                        </label>

								
                        <div class="optionBox">
                            <div class="block_1">
                                <input type="text" class="form-control" name="{{$row}}" id="name.0" placeholder="Enter Value">
                            </div>
                        </div>
									
                    </div>

										
                    @endforeach

                </div>
                @endforeach


                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                {{-- <button type="submit" class="btn btn-danger">সংশোধন</button> --}}
            </form>
        </div>

    </div>
</div>
  
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });

var d = new Date();
var strDate = d.getFullYear() + "/" + (d.getMonth()+1) + "/" + d.getDate();
var db_table_name = $("input[type=hidden][name=db_table_name]").val();

window.addEventListener('load', function(){

     $( "input[type=text][name=created_at]" ).val(strDate);
		 $("input[type=text][name=table_name]").val(db_table_name);
		 

});
</script>
  
 <script>
//    $("#idForm").submit(function (e) {
//     e.preventDefault();
//      var data = new FormData($('#idForm')[0]);
//         $.ajax({
//     headers: {
//     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     },
//             method: "post",
//             url: "{{url("create-form-table")}}",
//             data: data,
//             contentType:false,
//             cache: false,
//              processData:false,
//             success: function (data, textStatus, jqXHR) {
//             console.log(data);
//             }
//     }).done(function (data) {
//     $("#success_msg").html("Data Save Successfully");
//     $('#exampleModalLong').modal('toggle');
//     $('#idForm')[0].reset();
     
// //            console.log(data);
//             window.location.href = "{{ url(' ')}}/"+data;
//     // location.reload();
//     }).fail(function (data, textStatus, jqXHR) {
//     $("#loader").hide();
//     var json_data = JSON.parse(data.responseText);
//     $.each(json_data.errors, function (key, value) {
//     $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
//     $("#" + key).addClass("error");
//     });
//     });
//     });

		// $('#createdFormNew').submit(function(event){
		// 	event.preventDefault();
		// 	var data = $('createdFormNew').serialize()
		// 	alert();

		// });
    
 </script>
@endsection