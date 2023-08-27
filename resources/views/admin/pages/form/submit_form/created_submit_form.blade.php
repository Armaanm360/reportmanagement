@extends('admin.master')
@section('content')
    @inject('usessrname', 'App\Models\UserForm')

    <style>
        textarea {
            border: none;
        }

        ,
        td#filled_by {
            background: yellow;
        }

        ,

        table#myTable {
            overflow-x: hidden !important;
            display: inline-block;
            white-space: nowrap;
        }

        ,
    </style>
    <div class="content">


        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">{{ __('Form') }}</h4>
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
                        <a href="#">{{ __('Form') }}</a>
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

                    {{-- {{ $lob }} --}}
                    <h1 id="format_check" style="display:none">{{ $saved_format_type[0]->saved_form_type }}</h1>
                    <div class="col-md-6">
                        {{-- <h2>Form Name :{{ $generated_form[0]->form_name }}</h2>
                        <h2>Table Name :{{ $form_tables[0]->table_headline }}</h2>
                        <h2>Description :</h2> --}}
                        @if (Auth::user()->hasRole('super-admin'))
                        @else
                            <h2><span class="text-info">প্রতিষ্ঠানের/শাখা
                                    নামঃ</span>আর্থিক প্রতিষ্ঠান
                                বিভাগ,{{ $usessrname->getDeptNameUserWise($userforms[0]->reciever_user_id) }}</h2>
                            <h2><span class="text-info">ফর্মের ধরণ :</span>{{ $saved_format_type[0]->saved_form_type }}</h2>
                        @endif



                        <h2><span class="text-info">রিপোর্ট/প্রতিবেদনের নামঃ</span> <span
                                style="dotted">{{ $usessrname->getUserFormById($generated_form[0]->id) }}</span>
                        </h2>
                        @if (isset($date_submission[0]->deadline) && $formsupdate[0]->final_status == 0)
                            <h2>সময়কালঃ <span class="text-warning" id="deadline">{{ $date_submission[0]->deadline }}</span>
                            </h2>
                            <h2>অবশিষ্ট সময় : <span id="demo" class="text-info"></span></h2>
                        @elseif (!isset($date_submission[0]->deadline) && $formsupdate[0]->final_status == 0)
                            <h2>
                            </h2>
                        @elseif ($date_submission[0]->final_status == 1)
                            <h2></h2>
                        @endif


                        <h3 id="check_user_type">{{ Auth::user()->user_type }}</h3>
                        {{-- <p>{{ $generated_form[0]->html_form }}</p> --}}
                    </div>
                    <div class="col-md-6">
                        @if (isset($date_submission[0]->deadline) && $form[0]->status == 0)
                            <h2 class="text-danger">Last Date of Submission:<span
                                    class="text-muted">{{ $date_submission[0]->deadline }}</span></h2>
                        @elseif (!isset($date_submission[0]->deadline))
                        @endif



                    </div>

                    <form action="{{ url('generated_update') }}" method="POST" id="complete_form">
                        @csrf
                        <input type="hidden" name="form_id_get" value="{{ $generated_form[0]->id }}">
                        @php



                        $larry = DB::table($table_info)->get();
                        $array_head = json_decode(json_encode($larry),true);
                        $for_val = end($array_head);
                        if (count($array_head)) {
                        echo '<table class="table-responsive" id="myTable" border="1">';
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
              }elseif($header == 'created_at'){
                $styling_option = 'style="display:none"';
              }elseif($header == 'created_by'){
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
            echo '</tr>'; 
						echo '<thead>';   
        }
				echo '<tbody>';
     

                                $i = 0;
								foreach ($data_value as $key=>$value) {
                                    $i++;
                                //     if($value->created_by !== Auth::user()->id){
                                //         $tr_style = 'style="display:none"';
                                // }elseif(Auth::user()->hasRole('super-admin')){
                                //        $tr_style = 'style="display:block"';
                                // }else{
                                //        $tr_style = '';
                                // }

                            //     if(Auth::user()->hasRole('super-admin')){
                            //         $tr_style =' ';
                            //      }elseif($value->created_by !== Auth::user()->id){
                            //        $tr_style = 'style="display:none;"';
                            //      }else{
                            //        $tr_style = '';
                            // }

                            $tr_style = '';
									echo "<tr $tr_style>";
                                              
                                              
                                    echo "<input name='row_id[]' type='hidden' value='$i'>";
                                       $colmns = '';
										foreach ($value as $key_col => $col) {
                                         $colmns .= ','.$key_col;
                                            $name = $key_col.'_'.$value->id;                        
                                            echo "<input name='rowsk[]' type='hidden' value='$value->id'>";
                                   
                                             $exp_array = explode(" ",$value->created_by);
                                             $exp_user = explode(" ",Auth::user()->id);
                                             $checkread = strlen($col);
                                             /* hide cols */
                                                      if ($key_col == 'id') { 
                                                        $styling_option = 'style="display:none"';
                                                        }elseif($key_col == 'table_name'){
                                                         $styling_option = 'style="display:none"';
                                                        }elseif($key_col == 'created_at'){
                                                         $styling_option = 'style="display:none"';
                                                        }elseif($key_col == 'status'){
                                                          $styling_option = 'style="display:none"';
                                                        }elseif($key_col == 'created_by'){
                                                          $styling_option = 'style="display:none"';
                                                        }elseif($key_col == 'authorize_user'){
                                                            $styling_option = 'style="display:none"';
                                                        }elseif($key_col == 'filled_by' && $value->filled_by == 0){
                                                            $styling_option = 'style="display:none"';
                                                        }else{
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
                                            // if ($key_col == 'created_by') {
                                            //    $coling = $usessrname->getUserName($col);
                                            //    echo "<td id='$key_col' $styling_option><input name='$name' id='$key_col' class='styling_class' $check value='$col' type='hidden'><textarea>$coling</textarea><input type='hidden' name='colmns' value='$colmns'></td>";
                                            // }elseif($key_col == 'created_by'){
                                            //     $col = $col;
                                            // }else{

										    // echo "<td id='$key_col' $styling_option><textarea readonly name='$name' id='$key_col' class='styling_class' $check>$col</textarea><input type='hidden' name='colmns' value='$colmns'></td>";
                                            // }
                                            if ($key_col == 'filled_by') {
                                               $coling = $usessrname->getDeptNameUserWise($col);
                                               echo "<td id='$key_col' $styling_option><input name='$name' id='$key_col' class='styling_class'  value='$col' type='hidden'><textarea class='$key_col'>$coling</textarea><input type='hidden' name='colmns' value='$colmns'></td>";
                                            }elseif($key_col == 'table_name'){
                                                 echo "<td id='$key_col' $styling_option><input name='$name' id='$key_col' class='styling_class'  value='$col' type='hidden'><textarea class='$key_col'>$col</textarea><input type='hidden' name='colmns' value='$colmns'></td>";

                                            }elseif($key_col == $fixed_column){

                                                 echo "<td id='caltd' style='background: rgb(227 220 8);'><input name='$name' id='$key_col' class='styling_class'  value='$col' type='hidden'><textarea style='background: rgb(227 220 8);' class='calclass' id='fixed' readonly='readonly'>$col</textarea><input type='hidden' name='colmns' value='$colmns'></td>";


                                            }elseif($key_col == 'filled_by'){
                                                $col = $col;
                                            }else{
										    echo "<td id='caltd' $styling_option><textarea  name='$name' id='$key_col' class='calclass'>$col</textarea><input type='hidden' name='colmns' value='$colmns'></td>";
                                            }


                                            
										}

									 echo '</tr>';
            
				
        }
		
      
				echo '<tbody>';

    echo '</table>';
}

echo '<br>';


$path_entry = url('send-form-entry-user').'/'.$form[0]->id;
$path_auth  = url('send-form').'/'.$form[0]->id;
if (Auth::user()->user_type == 'ENTRY_USER') {
   echo '<button type="submit" class="btn btn-success mr-2">সংরক্ষণ করুন</button>';   
   echo '<button type="button" class="btn btn-primary mr-2"><a class="text-white" href="'.$path_entry.'">SEND TO AUTH</a></button>';   
}elseif(Auth::user()->user_type == 'AUTHORIZE_USER' && Auth::user()->user_category != 1){ 
    if (Auth::user()->hasRole('super-admin')) {
      echo '<button type="button" class="btn btn-info mr-2"><a class="text-white" href="'.$path_entry.'">SEND TO ENTRY USER</a></button>';   
      echo '<button type="button" class="btn btn-primary mr-2"><a class="text-white" href="'.$path_auth.'">SEND TO AUTH USER</a></button>';  
        
    }else{
        if($form_creator_check != Auth::user()->id && Auth::user()->user_category != 1){
                  echo '<button type="button" class="btn btn-danger text-white mr-2" id="feedbackId" data-toggle="modal" data-target="#myModalBack">Send Back</button>'; 
        }
  
      echo '<button type="button" class="btn btn-info mr-2"><a class="text-white" href="'.$path_entry.'">SEND TO ENTRY USER</a></button>';   
      echo '<button type="button" class="btn btn-primary mr-2"><a class="text-white" href="'.$path_auth.'">SEND TO AUTH USER</a></button>'; 
    }
 
  

}


                         if ($formsupdate[0]->sender_id == Auth::user()->id && Auth::user()->user_type == 'AUTHORIZE_USER' && $formsupdate[0]->final_status == 0) { 
                                 echo '<button type="button" class="btn btn-success" id="feedbackId" data-toggle="modal" data-target="#myModal">FeedBack</button>'; 
                                   
                                    }elseif($formsupdate[0]->final_status == 1){

                                    }elseif($formsupdate[0]->final_status == 1 && Auth::user()->user_type == 'ENTRY_USER'){

                                    }elseif($formsupdate[0]->final_status == 0 && Auth::user()->user_type == 'AUTHORIZE_USER'){
                                        echo '<button type="button" class="btn btn-success" id="feedbackId" data-toggle="modal" data-target="#myModal">FeedBack</button>'; 
                                    }else{
                                        // $path = url('send-form-entry-user/'.$formsupdate[0]->form_id);
                                        
                                        //  echo '<button type="button" class="btn btn-info"><a href='.$path.'>Send To Authorize User</a></button>';   
                                    }
							 @endphp


                                    @if ($formsupdate[0]->final_status == 1)
                                        <button type="button" class="btn btn-danger"><a href="<?php echo url('generate-pdf/' . $generated_form[0]->id); ?>">Generate
                                    Pdf</a></button>
                                    @endif
                    </form>



                </div>


                @if (Auth::user()->user_category != 1)
                    <div class="row">
                        <div class="col-md-6">

                            <img src="{{ url('') }}/public/user_images/{{ $usessrname->getUserSignature($formsupdate[0]->receiver_id) }}"
                                width='450px'; height='150px' alt="manufacturer_sign_img">
                            <h3>প্রতিবেদন প্রস্তুতকারী কর্মকর্তার স্বাক্ষর ও সিল</h3>
                        </div>

                        @if (isset($final_status[0]))
                            @if ($final_status[0]->final_status == 1)
                                <div class="col-md-6" id="approver_sign">
                                    <img src="{{ url('') }}/public/user_images/{{ $usessrname->getUserSignature($formsupdate[0]->sender_id) }}"
                                        alt="approver_sign_img" id="" width='450px'; height='150px'>
                                    <h4>অনুমোদনকারী নির্বাহী কর্মকর্তার স্বাক্ষর ও সিল</h4>
                                </div>
                            @endif
                        @endif

                    </div>

                @endif



                <div class="col-md-2"></div>

                <div id="loader" class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>

        @if ($formsupdate[0]->final_status == 0 &&
            $formsupdate[0]->receiver_id == Auth::user()->id &&
            Auth::user()->user_type == 'ENTRY_USER' &&
            Auth::user()->user_category != 1)
            <button class="btn btn-warning" style="width:100%">Feedback</button>

            <div class="card">
                <div class="card-body">
                    {{ $formsupdate[0]->comment }}
                </div>
            </div>
        @elseif($formsupdate[0]->final_status == 1 &&
            $formsupdate[0]->receiver_id == Auth::user()->id &&
            Auth::user()->user_type == 'ENTRY_USER' &&
            Auth::user()->user_category != 1)
            <span class="">
                <h2 class="m-3 p-5">Status : <button class="btn btn-info">Approved</button></h2>
            </span>>
        @else
        @endif


    </div>
    </div>

    <!-- Button to Open the Modal -->


    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('প্রতিক্রিয়া ফর্ম') }}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">

                            <h1 id="user_name">{{ Auth::user()->id }}</h1>
                            <h3 id="basepath">{{ url('/') }}</h3>
                            <h4 id="formid">{{ $form[0]->id }}</h3>
                                <button id="approve" class="btn btn-primary">
                                    <i class="fa fa-check"></i>
                                    Approve
                                </button>
                                <button id="decline" class="btn btn-warning">
                                    <i class="fa fa-ban"></i>
                                    Decline
                                </button>

                                <div class="decline"></div>

                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">

                </div>

            </div>
        </div>
    </div>


    {{-- sendback --}}
    <div class="modal" id="myModalBack">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('প্রতিক্রিয়া ফর্ম') }}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="row">
                    <div class="col-md-12">
                        <form id="add_form">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title center"><span class="text-danger">Subject</span> :
                                        {{ $sub_forms[0]->form_name }}</div>
                                </div>
                                <div class="card-body">

                                    <div class="col-md-12 col-lg-12">
                                        <div class="row">
                                            <div class="col-12">

                                                <div class="form-group col-md-12">
                                                    <div class="form-group col-12">
                                                        <label for="Name"
                                                            style="display: block;">{{ __('Select Process') }}</label>

                                                        <select class="form-control select2" id="process"
                                                            name="process" style="width: 100%">

                                                            <option value="back">Form back</option>
                                                        </select>

                                                    </div>

                                                </div>


                                                <div class="form-group col-md-12" style="display: none">
                                                    <div class="form-group col-12">
                                                        <label for="Name"
                                                            style="display: block;">{{ __('Select Method') }}</label>
                                                        <select class="form-control select2" id="method"
                                                            name="method" style="width: 100%">
                                                            <option value="" disabled selected>Select Method</option>
                                                            {{-- <option value="group">By Group</option> --}}
                                                            <option value="user">By User</option>
                                                        </select>

                                                    </div>

                                                </div>

                                                {{-- <div class="form-group col-md-12" style="display: none" id="user_method">
                                                <div class="form-group col-12">
                                                    <label for="Name"
                                                        style="display: block;">{{ __('Select User') }}</label>
                                                    <select class="form-control select2" id="user_id" name="user_id"
                                                        style="width: 100%">
                                                        @foreach ($all_user as $row)
                                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> --}}

                                                <div class="form-group col-md-12">
                                                    <div class="block">
                                                        <div class="form-group col-12">
                                                            <label for="Name"
                                                                style="display: block;">{{ __('Select User') }} </label>
                                                            <select class="form-control" name="user_id" id="user_id">

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="form-group col-md-12" style="display: none"
                                                    id="group_method">
                                                    <div class="form-group col-12">
                                                        <label for="Name"
                                                            style="display: block;">{{ __('Select Group') }}</label>
                                                        <select class="form-control select2" id="group_id"
                                                            name="group_id" style="width: 100%">
                                                            @foreach ($all_group as $row)
                                                                <option value="{{ $row->id }}">{{ $row->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12" id="duration" style="display: none">
                                                    <div class="block">
                                                        <div class="form-group col-12">
                                                            <label for="Name"
                                                                style="display: block;">{{ __('Select Duration') }}
                                                            </label>
                                                            <input type="date" class="date form-control"
                                                                name="duration">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-6">


                                                <div class="form-group col-md-12" style="display: none">
                                                    <div class="block">
                                                        <div class="form-group col-12">
                                                            <label for="Name"
                                                                style="display: block;">{{ __('Select Form') }} </label>
                                                            <select class="form-control select2" id="form_id"
                                                                name="form_id" style="width: 100%">
                                                                <option value="" selected disabled="">Select Form
                                                                </option>
                                                                @foreach ($forms as $row)
                                                                    <option value="{{ $row->id }}">
                                                                        {{ $row->form_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <div class="form-group col-md-12">
                                                <div class="block">
                                                    <div class="form-group col-12">
                                                        <label for="Name"
                                                            style="display: block;">{{ __('Select Form') }} </label>
                                                        <select class="form-control select2" id="admin_form_id"
                                                            name="form_id" style="width: 100%">
                                                            <option value="">Select Form</option>
                                                            @foreach ($forms as $row)
                                                                <option value="{{ $row->form_id }}">
                                                                    {{ getForm($row->form_id)[0]->form_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> --}}



                                                <div class="form-group col-md-12" style="display: none">
                                                    <div class="block">
                                                        <div class="form-group col-12">
                                                            <label for="Name"
                                                                style="display: block;">{{ __('Select Sub Form') }}
                                                            </label>
                                                            <select class="form-control select2 subFormID"
                                                                id="sub_form_id" name="sub_form_id" style="width: 100%">
                                                                @foreach ($forms as $row)
                                                                    <option value="{{ $row->id }}">
                                                                        {{ $row->form_name }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group col-md-12">
                                                    <div class="block">
                                                        <div class="form-group col-12">
                                                            <label for="Name"
                                                                style="display: block;">{{ __('ফেরত পাঠানোর কারণ ') }}
                                                            </label>

                                                            <textarea name="comment" id="" cols="30" rows="10">

                                                        </textarea>



                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" id="formid" name="formid"
                                                    value="{{ $sub_forms[0]->id }}">
                                                {{-- <div class="form-group col-md-12">
                                                <div class="block">
                                                    <div class="form-group col-12">
                                                        <label for="Name"
                                                            style="display: block;">{{ __('Select Sub Form') }} </label>
                                                        <select class="form-control select2 subFormID"
                                                            id="admin_sub_form_id" name="sub_form_id[]"
                                                            style="width: 100%">
                                                            <option value="">Select</option>
                                                            @foreach ($sub_forms as $row)
                                                                <option value="{{ $row->id }}">
                                                                    {{ $row->sub_form_id }}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                            </div> --}}


                                                {{-- <div class="form-group col-md-12">
                                        <div class="block">
                                        <div class="form-group col-12">
                                            <label for="Name" style="display: block;">{{__('Sub Form ID')}} </label>
                                            <select class="form-control" name="sub_form_unique_id" id="sub_form_unique_id">
                                                
                                            </select>
                                         
                                        </div>
                                    </div>
                                    </div> --}}
                                            </div>




                                            <div id="loader" class="lds-ellipsis">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-action">
                                <button type="button" class="btn btn-success"
                                    id="add_btn">{{ __('Submit') }}</button>
                                <button class="btn btn-danger">{{ __('Cancel') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">

                </div>

            </div>
        </div>
    </div>

    <script>
        $('#complete_form').find('textarea[class=styling_class]').each(function(e) {

            let me = $(this).val();
            // console.log(me);
        });







        window.addEventListener('load', function() {

            $('table#myTable').css("overflow-x", "auto");




            // var a = [{
            //         name: "Micheal",
            //         age: 20,
            //         hometown: "New York"
            //     },
            //     {
            //         name: "Santino",
            //         age: 25,
            //         hometown: "Los Angeles"
            //     },
            //     {
            //         name: "Fredo",
            //         age: 29,
            //         hometown: "California"
            //     },
            //     {
            //         name: "Hagen",
            //         age: 28,
            //         hometown: "Long Beach"
            //     },
            // ]

            // //Insert data function

            // var table = document.getElementById("myTable");
            // var rows = table.querySelectorAll('tr');
            // console.log(rows)
            // for (let i = 1; i < 3; i++) {
            //     rows[i].children[0].textContent = a[i - 1].name
            // }






            format_check = $('h1#format_check').text();

            let column = $("#myTable > tbody > tr:first > td").length - 6
            let totals = [];
            let justtd = ['jokhn', 'nijhum', 'raata'];


            $('h3#check_user_type').css("display", "none");
            $(document).ready(function() {


                let check_user_type = $('h3#check_user_type').text();


                let $dataRows = $("#myTable tr");
                if (check_user_type == 'ENTRY_USER') {
                    $dataRows.each(function() {
                        $(this).find('#caltd textarea.calclass').each(function(i) {
                            totals[i] += parseFloat($(this).val());
                        });
                    });


                    $("#myTable td.totalCol").each(function(i) {
                        $(this).text(totals[i]);
                    });

                }



            });







            $(function() {
                let tbl = $('#myTable');
                tbl.find('tr').each(function() {
                    // $this = this;
                    $(this).find('.calclass').bind("keyup", function() {
                        calculateSum();
                    });
                });

                function calculateSum() {
                    let tbl = $('#myTable');
                    tbl.find('tr').each(function() {
                        let sum = 0;
                        $(this).find('.calclass').not('#total').each(function() {
                            if (!isNaN(this.value) && this.value.length != 0) {
                                sum += parseFloat(this.value);
                            }
                        });

                        $(this).find('#total').val(sum.toFixed(2));
                    });
                }
            });



            // let fruits = ["Banana", "Orange", "Apple", "Mango"];
            // // let eww = fruits.push("Kiwi", "Lemon");

            if (format_check == 'data_form') {

                // $("td#fmnjfnd").css("background-color", "rgb(96 193 143)");
                $("textarea[class=fmnjfnd]").attr("readonly", true);
                $("td#fmnjfnd").css("background-color", "rgb(227 220 8)");
                $("textarea[class=fmnjfnd]").css("background-color", "rgb(227 220 8)");


                for (let i = 0; i < column; i++) {
                    $('#myTable').append('<td class="totalCol"></td>');
                    totals.push(0);
                }
            }







            let vars = 3;
            if (vars == 3) {

                let pros = $("textarea[class=styling_class]").val();

            }

            $("textarea[class=table_name]").attr("readonly", true);
            $("textarea[class=id]").attr("readonly", true);
            $("textarea[class=created_at]").attr("readonly", true);
            $("textarea[class=created_by]").attr("readonly", true);
            $("textarea[class=filled_by]").attr("readonly", true);
            $("td#filled_by").css("background-color", "rgb(227 220 8)");
            $("textarea[class=filled_by]").css("background-color", "rgb(227 220 8)");
            $("textarea[class=filled_by]").addClass("text-dark");
            $("textarea[id=id]").removeClass("calclass");
            $("textarea[id=authorize_user]").removeClass("calclass");
            $("textarea[id=filled_by]").removeClass("calclass");
            $("textarea[id=created_by]").removeClass("calclass");



        });



        let meow = $('textarea.filled_by').val();
        if (meow == 0) {
            $('th#filled_by').css("display", "none");
            $('table#tableId').removeClass("table-responsive");

        } else {
            $('table#tableId').addClass("table-responsive");

        }





        $('button#approve').click(function(event) {
            event.preventDefault();
            let user_id = $('h1#user_name').text();
            let basepath = $("h3#basepath").text();
            let formid = $("h4#formid").text();

            // alert(user_name);

            $.ajax({

                // url: basepath + '/approval-check/' + user_id + '/' + formid,
                url: "{{ url('approval-check') }}/" + user_id + '/' + formid,
                success: function(response) {
                    // alert(response);

                    swal("সফল!", "ফর্মটি অনুমোদিত হয়েছে !", "success");
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    $('#myModal').hide();
                    $('button#feedbackId').hide();
                    $('div#approver_sign').show();
                    location.reload();


                }

            });

        });


        $('button#decline').click(function(event) {
            event.preventDefault();

            let user_id = $('h1#user_name').text();
            let basepath = $("h3#basepath").text();
            let formid = $("h4#formid").text();

            $(".decline").append(
                '<br><h2>Comment</h2>&nbsp;&nbsp;&nbsp;</label><br>' +
                '<textarea rows="10" col="10" id="msg"></textarea><br>' +
                '<button class="btn btn-warning" id="decline_submit">Submit</button>'
            );


            $('button#decline_submit').click(function(event) {
                event.preventDefault();


                let msg = $('#msg').val();

                $.ajax({

                    url: basepath + '/decline-feedback/' + user_id + '/' + formid + '/' + msg,
                    success: function(response) {
                        swal("সফল!", "ফিডব্যাক পাঠানো সম্পন্ন হয়েছে !", "success");
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                        $('#myModal').hide();
                        location.reload();



                    }

                });




            });




            $(this).hide();
            $('button#approve').hide();


        });



        /* send back form */


        $('button#sendback').click(function(event) {
            event.preventDefault();
            $("#process option[value='back']").attr("selected", true);

            let user_id = $('h1#user_name').text();
            let basepath = $("h3#basepath").text();
            let formid = $("h4#formid").text();

            $(".decline").append(
                '<br><h2>Comment</h2>&nbsp;&nbsp;&nbsp;</label><br>' +
                '<textarea rows="10" col="10" id="msg"></textarea><br>' +
                '<button class="btn btn-warning" id="decline_submit">Submit</button>'
            );


            $('button#decline_submit').click(function(event) {
                event.preventDefault();


                let msg = $('#msg').val();

                $.ajax({

                    url: basepath + '/decline-feedback/' + user_id + '/' + formid + '/' + msg,
                    success: function(response) {
                        swal("সফল!", "ফিডব্যাক পাঠানো সম্পন্ন হয়েছে !", "success");
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                        $('#myModal').hide();
                        location.reload();



                    }

                });




            });




            $(this).hide();
            $('button#approve').hide();


        });





        /* test */
        $("#add_btn").click(function() {
            $(".error_msg").html('');
            var data = new FormData($('#add_form')[0]);
            $("#loader").show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "{{ url('save-send-form-back') }}",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data, textStatus, jqXHR) {

                    swal("Success", "Form Back Successfully", "success");
                    $('#add_form')[0].reset();
                    location.reload();




                }
            }).done(function() {
                $("#success_msg").html("Data Save Successfully");
                $("#success_msg").show();
                $("#loader").hide();
                //    window.location.href = "{{ url('list-of-send-form') }}";
                //            setInterval(function () {
                //                window.location.href = "{{ url('permissions') }}";
                //            }, 2000);
                // location.reload();
            }).fail(function(data, textStatus, jqXHR) {
                $("#loader").hide();
                var json_data = JSON.parse(data.responseText);
                $.each(json_data.errors, function(key, value) {
                    //                console.log(key);
                    $("#" + key).after(
                        "<span class='error_msg' style='color: red;font-weigh: 600'>" +
                        value +
                        "</span>");
                });
            });
        });

        $('#form_id').on('change', function() {
            $("#loader").show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "{{ url('get-default-sub-form') }}",
                data: {
                    'form_id': this.value
                },
                //            cache: false,
                //            contentType: false,
                //            processData: false,
                success: function(data, textStatus, jqXHR) {
                    $('#sub_form_id').html(data);
                }
            }).done(function(data) {
                $("#success_msg").html("Data Save Successfully");
                $("#success_msg").show();
                $('#sub_form_id').html(data);
                $("#loader").hide();
                //            setInterval(function () {
                //            window.location.href = "{{ url('permissions') }}";
                //            }, 2000);
                // location.reload();
            }).fail(function(data, textStatus, jqXHR) {
                $("#loader").hide();
                var json_data = JSON.parse(data.responseText);
                $.each(json_data.errors, function(key, value) {
                    //                console.log(key);
                    $("#" + key).after(
                        "<span class='error_msg' style='color: red;font-weigh: 600'>" +
                        value +
                        "</span>");
                });
            });
        });
        $('#admin_form_id').on('change', function() {
            //alert(this.value);
            $("#loader").show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "{{ url('get-admin-default-sub-form') }}",
                data: {
                    'form_id': this.value
                },
                //            cache: false,
                //            contentType: false,
                //            processData: false,
                success: function(data, textStatus, jqXHR) {
                    $('#admin_sub_form_id').html(data);
                }
            }).done(function(data) {
                $("#success_msg").html("Data Save Successfully");
                $("#success_msg").show();
                $('#sub_form_id').html(data);
                $("#loader").hide();
                //            setInterval(function () {
                //                window.location.href = "{{ url('permissions') }}";
                //            }, 2000);
                // location.reload();
            }).fail(function(data, textStatus, jqXHR) {
                $("#loader").hide();
                var json_data = JSON.parse(data.responseText);
                $.each(json_data.errors, function(key, value) {
                    //                console.log(key);
                    $("#" + key).after(
                        "<span class='error_msg' style='color: red;font-weigh: 600'>" +
                        value +
                        "</span>");
                });
            });
        });

        $('.subFormID').on('change', function() {
            $("#loader").show();
            let uniqueFormId = 'Form-' + Math.floor(Math.random() * 900000) + Math.floor(1000 + Math.random() *
                9000);
            $('#unique_form_id').val(uniqueFormId);
            $("#loader").hide();
            //        clearInterval(myInterval);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "{{ url('get-default-sub-form-unique-ids') }}",
                data: {
                    'sub_form_id': this.value
                },
                success: function(data, textStatus, jqXHR) {
                    $('#sub_form_unique_id').html(data);
                }
            }).done(function(data) {
                $("#success_msg").html("Data Save Successfully");
                $("#success_msg").show();
                $('#sub_form_unique_id').html(data);
                $("#loader").hide();
                //            setInterval(function () {
                //                window.location.href = "{{ url('permissions') }}";
                //            }, 2000);
                // location.reload();
            }).fail(function(data, textStatus, jqXHR) {
                $("#loader").hide();
                var json_data = JSON.parse(data.responseText);
                $.each(json_data.errors, function(key, value) {
                    //                console.log(key);
                    $("#" + key).after(
                        "<span class='error_msg' style='color: red;font-weigh: 600'>" +
                        value +
                        "</span>");
                });
            });
        })

        $('#method').on('change', function() {
            //alert(this.value);
            $("#loader").show();
            if (this.value == 'user') {
                $('#user_method').show();
                $('#group_method').hide();
            } else if (this.value == 'group') {
                $('#group_method').show();
                $('#user_method').hide();
            }
            $("#loader").hide();
        });


        $("#loader").show();




        let process = $('#process').val();

        let formid = $('input#formid').val();


        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ url('send-form-process-back') }}/" + formid + '/' + process,
            success: function(data, textStatus, jqXHR) {
                $('#user_id').html(data);
            }
        }).done(function(data) {
            $("#success_msg").html("Form Back Successfully");
            $("#success_msg").show();
            $('#sub_form_unique_id').html(data);
            $("#loader").hide();
            //            setInterval(function () {
            //                window.location.href = "{{ url('permissions') }}";
            //            }, 2000);
            // location.reload();
        }).fail(function(data, textStatus, jqXHR) {
            $("#loader").hide();
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function(key, value) {
                //                console.log(key);
                $("#" + key).after(
                    "<span class='error_msg' style='color: red;font-weigh: 600'>" +
                    value +
                    "</span>");
            });
        });



        // if (this.value == 'up') {
        //     // $('#user_method').show();






        //     $('div#duration').hide();
        // } else if (this.value == 'down') {
        //     $('div#duration').show();
        //     $('#group_method').show();
        //     $('#user_method').hide();
        // }
        $("#loader").hide();




        /*  */





        let deadline = $('span#deadline').text();
        // alert(deadline);

        // Set the date we're counting down to
        var countDownDate = new Date(deadline).getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@endsection
