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
                    <a href="#">{{__($form[0]->sub_form_name)}}</a>
                </li>
            </ul>
        </div>
           <div class="container-fluid" id="search_parameter_card">
               <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card p-3">
                        <div class="card-header text-info font-weight-bolder">
                            Parameter Selection
                              
                       
                        </div>
                        <form method="POST" id="form_parameter">
                            @csrf
                            <input type="hidden" name="form_id" id="form_id" value="{{$form[0]->id}}">
                            <input type="hidden" name="form_name" value="{{$form[0]->sub_form_name}}">
                            
                            <div class="form-group">
                               
                                <label for="exampleFormControlSelect1">Fiscal Year</label>
                                <select class="form-control" id="exampleYear" name="form_year">
                                <option hidden value="">Choose Year</option>
                                  <option value="২০২১-২২">২০২১-২২</option>
                                  <option value="২০২২-২৩">২০২২-২৩</option>
                                  <option value="২০২৩-২৪">২০২৩-২৪</option>
                                  <option value="২০২৪-২৫">২০২৪-২৫</option>
                                  

                        
                                </select>
                                </div>

                                <div class="form-group">  
                                <label for="exampleFormControlSelect1">Select Quarter</label>
                                <select class="form-control" id="exampleQuarter" name="quarter">
                                <option hidden value="">Choose Quarter</option>
                                  <option value="প্রথম কোয়ার্টার  (জানুয়ারি-মার্চ)">জানুয়ারি-মার্চ(Q1)</option>
                                  <option value="দ্বিতীয় কোয়ার্টার (এপ্রিল-জুন)">এপ্রিল-জুন(Q2)</option>
                                  <option value="তৃতীয় কোয়ার্টার (জুলাই-সেপ্টেম্বর)">জুলাই-সেপ্টেম্বর(Q3)</option>
                                  <option value="চতুর্থ কোয়ার্টার  (অক্টোবর-ডিসেম্বর)">অক্টোবর-ডিসেম্বর(Q4)</option>
                                </select>

 

  
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Ministry</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="ministry">
                                 <option hidden >Select From List</option>   
                                 @foreach ($ministry as $ministry)
                                      <option value="{{ $ministry -> id }}">{{ $ministry -> name }}</option>
                                 @endforeach
                                 

                                </select>
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Department</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="department">
                                <option hidden >Select From List</option>  
                                
                                @foreach ($dept as $dept)
                                <option>{{ $dept -> name }}</option>
                                @endforeach
                                  

                                </select>
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Office</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="office">
                                <option hidden >Select From List</option>      
                                @foreach ($office as $office)
                                <option value="{{ $office -> id }}">{{ $office -> name }}</option>
                                @endforeach
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Unit Office</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="unit_office">
                                <option hidden >Select From List</option> 
                                @foreach ($unitoffice as $unitoffice)
                                    <option value="{{ $unitoffice -> id }}">{{ $unitoffice -> name }}</option>
                                @endforeach    
                                  

                                </select>
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Unit Office To</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="unit_office_to">
                                  <option hidden >Select From List</option>       
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>      
                            
                          <div class="form-group col-md-12">
                                        <div class="block">
                                        <div class="form-group col-12">
                                            <label for="Name" style="display: block;">{{__('Sub Form ID')}} </label>
                                            <input type="text" class="form-control form_unique_id" value="" name="unique_form_id" id="unique_form_id">

                                        </div>
                                    </div>
                                    </div>
                        

                              <button type="button" id="form_show_id" class="btn btn-primary">Go</button>
                              <button type="button" id="form_clear" class="btn btn-danger">Clear</button>
                        </form>
                           
                      </div>

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

//$('div#founded_form').hide();
    $(document).on('click','button#form_clear',function(event){
        event.preventDefault();
        $('form#form_parameter')[0].reset();
        location.reload();
        $('div#founded_form').hide();
    });

$('#exampleYear').change(function(){
   var value = $('#exampleYear :selected').val();
   var txt = $('#exampleYear :selected').text();
   $('span#yearText').html(txt);
   $('input#yearTextInput').val(value);
   
    let uniqueFormId = 'Form-'+Math.floor(Math.random() * 900000) + Math.floor(1000 + Math.random() * 9000);
 $('.form_unique_id').val(uniqueFormId);
  $("#loader").hide();
 
});


$('#exampleQuarter').change(function(){
   var value = $('#exampleQuarter :selected').val();
   var txt = $('#exampleQuarter :selected').text();
   $('span#quartText').html(txt);
   $('input#quartTextInput').val(value);
     $("#loader").hide();

 
});

    $('button#form_show_id').on('click',function(event){
        event.preventDefault();
        $('#loader').show();

        let data = $('#form_parameter').serializeArray();
         var examYear = $("#exampleYear");
         var examQuarter = $("#exampleQuarter");
            if (examYear.val() == "" || examQuarter.val() == "") {
                alert("Please Select A Year");
                alert("Please Select A Quarter");
           
                 $("#loader").hide();
               
            }else{
 $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{url("get-form-to-create-unique-form")}}",
             data:data,         
            success: function (data, textStatus, jqXHR) {
           $("#loader").hide();
            }
        }).done(function (data) {
            $('div#founded_form').html(data);
            $('#loader').hide();       
        }).fail(function (data, textStatus, jqXHR) {
            $("#loader").hide();
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function (key, value) {
//                console.log(key);
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });
            }

  
              

   
         









            


    });

</script>


{{-- <script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var ddlFruits = $("#ddlFruits");
            if (ddlFruits.val() == "") {
                alert("Please select an option!");
                return false;
            }
            return true;
        });
    });
</script> --}}
@endsection    
