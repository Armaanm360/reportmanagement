@extends('admin.master')
@section('content')
    @inject('usessrname', 'App\Models\UserForm')
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


                    <div class="col-md-6">
                        {{-- <h2>Form Name :{{ $generated_form[0]->form_name }}</h2>
                        <h2>Table Name :{{ $form_tables[0]->table_headline }}</h2>
                        <h2>Description :</h2> --}}

                        <h2><span class="text-info">প্রতিষ্ঠানের/শাখা
                                নামঃ</span>আর্থিক প্রতিষ্ঠান
                            বিভাগ,{{ $usessrname->getDeptNameUserWise($userforms[0]->reciever_user_id) }}</h2>
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
              }elseif($header == 'created_at'){
                $styling_option = 'style="display:none"';
              }elseif($header == 'created_by'){
                $styling_option = '';
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
                                                          $styling_option = '';
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
                                            if ($key_col == 'created_by') {
                                               $coling = $usessrname->getUserName($col);
                                               echo "<td id='$key_col' $styling_option><input name='$name' id='$key_col' class='styling_class'  value='$col' type='hidden'><textarea>$coling</textarea><input type='hidden' name='colmns' value='$colmns'></td>";
                                            }elseif($key_col == 'created_by'){
                                                $col = $col;
                                            }else{

										    echo "<td id='$key_col' $styling_option><textarea  name='$name' id='$key_col' class='styling_class'>$col</textarea><input type='hidden' name='colmns' value='$colmns'></td>";
                                            }
										}

									 echo '</tr>';
            
				
        }
		
      
				echo '<tbody>';

    echo '</table>';
}

 echo '<button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>';   

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

                <div class="row">
                    <div class="col-md-6">

                        <img src="{{ url('') }}/public/user_images/{{ $usessrname->getUserSignature($formsupdate[0]->receiver_id) }}"
                            width='450px'; height='150px' alt="manufacturer_sign_img">
                        <h3>প্রতিবেদন প্রস্তুতকারী কর্মকর্তার স্বাক্ষর ও সিল</h3>
                    </div>
                    @if ($formsupdate[0]->final_status == 1)
                        <div class="col-md-6" id="approver_sign">
                            <img src="{{ url('') }}/public/user_images/{{ $usessrname->getUserSignature($formsupdate[0]->sender_id) }}"
                                alt="approver_sign_img" id="" width='450px'; height='150px'>
                            <h4>অনুমোদনকারী নির্বাহী কর্মকর্তার স্বাক্ষর ও সিল</h4>
                        </div>
                    @endif
                </div>



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
            Auth::user()->user_type == 'ENTRY_USER')
            <button class="btn btn-warning" style="width:100%">Feedback</button>

            <div class="card">
                <div class="card-body">
                    {{ $formsupdate[0]->feedback_msg }}
                </div>
            </div>
        @elseif($formsupdate[0]->final_status == 1 &&
            $formsupdate[0]->receiver_id == Auth::user()->id &&
            Auth::user()->user_type == 'ENTRY_USER')
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

    <script>
        $('#complete_form').find('textarea[class=styling_class]').each(function(e) {

            let me = $(this).val();
            console.log(me);
        });





        window.addEventListener('load', function() {

            let vars = 3;
            if (vars == 3) {

                let pros = $("textarea[class=styling_class]").val();

            }

            $("textarea[id=table_name]").attr("readonly", true);
            $("textarea[id=id]").attr("readonly", true);
            $("textarea[id=created_at]").attr("readonly", true);
            $("textarea[id=created_by]").attr("readonly", true);
        });






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
