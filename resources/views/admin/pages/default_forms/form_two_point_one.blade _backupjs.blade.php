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
                    <a href="#">{{__('Form 2.1')}}</a>
                </li>
            </ul>
        </div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#annualmodal_triquatral">
    নতুন সারি যোগ করুন 
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="annualmodal_triquatral" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="annual_quarterly_form" action="{{ url('form-2.1') }}" method="POST">
                @csrf
                <div class="rel-26">
                    <h3>২.১ বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) ২০২১-২২ এর ১ম ত্রৈমাসিক (জুলাই-সেপ্টেম্বর ২০২১) অর্জন (সেকশন-৩):</h3>   
                    <table border="1" width="100%">
                          <thead>
                              <tr>


                                  <td rowspan="2">কার্যক্রম</td>
                                  <td rowspan="2">কর্মসম্পাদন সূচক</td>
                                  <td rowspan="2">একক</td>
                                  <td rowspan="2">কর্মসম্পাদন সূচকের মান</td>
                                  <td rowspan="2">বাৎসরিক লক্ষ্যমাত্রা ২০২১-২২</td>
                                  <td colspan="2">অর্জন</td>
                                  <td rowspan="2">বাস্তবায়নের জন্য দায়িত্বপ্রাপ্ত শাখা</td>
                              </tr>
                              <tr>
                                  <td>(জুলাই-সেপ্টেম্বর ২০২১)</td>
                                  <td>(জুলাই ২০২১- জুন ২০২২)</td>
                              </tr>
                          </thead>
                          <tbody>
                            <div class="alert alert-warning alert-dismissible fade show" id="alert_error_field" role="alert">
                                <strong id="error_field"></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                        <tr> 

    

                                <td>                            
                                    
                            <div class="activities">
                                    <div>
                                        <input type="text" multiple name="activities[]" value=""/>
                                        <a href="javascript:void(0);" id="activities">Add</a>
                                    </div>
                                </div>
                            </td>
                                

           

                        <td>                                    
                            <div class="performance_index">
                                <div>
                                    <input type="text" multiple name="performance_index[]" value=""/>
                                    <a href="javascript:void(0);" id="performance_index">Add</a>
                                </div>
                            </div>
                        </td>

                        <td>                                    
                            <div class="unit">
                                <div>
                                    <input type="text" multiple name="unit[]" value=""/>
                                    <a href="javascript:void(0);" id="unit">Add</a>
                                </div>
                            </div>
                        </td>


                        <td>                                    
                            <div class="performance_index_values">
                                <div>
                                    <input type="text" multiple name="performance_index_values[]" value=""/>
                                    <a href="javascript:void(0);" id="performance_index_values">Add</a>
                                </div>
                            </div>
                        </td>


                        <td>                                    
                            <div class="annual_target">
                                <div>
                                    <input type="text" multiple name="annual_target[]" value=""/>
                                    <a href="javascript:void(0);" id="annual_target">Add</a>
                                </div>
                            </div>
                        </td>
                        


                        
                               
                            
                        <td>                                    
                            <div class="acquisition1">
                                <div>
                                    <input type="text" multiple name="acquisition1[]" value=""/>
                                    <a href="javascript:void(0);" id="acquisition1">Add</a>
                                </div>
                            </div>
                        </td>

                        <td>                                    
                            <div class="acquisition2">
                                <div>
                                    <input type="text" multiple name="acquisition2[]" value=""/>
                                    <a href="javascript:void(0);" id="acquisition2">Add</a>
                                </div>
                            </div>
                        </td>

        
        

                            <td>                                    
                                <div class="branch_responsible_implementation">
                                    <div>
                                        <input type="text" multiple name="branch_responsible_implementation[]" value=""/>
                                        <a href="javascript:void(0);" id="branch_responsible_implementation">Add</a>
                                    </div>
                                </div>
                            </td>
                            
 
                        </tr>
    
                      
                          </tbody>
                    </table>
                </div>
                
                <div class="modal-footer">
                    <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="save_btn" class="btn btn-primary">Save changes</button>
                  </div>
              </form>
        </div>

      </div>
    </div>
  </div>




            <div class="rel-26">
                <h3>২.১ বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) ২০২১-২২ এর ১ম ত্রৈমাসিক (জুলাই-সেপ্টেম্বর ২০২১) অর্জন (সেকশন-৩):</h3>   
                <table border="1" width="100%">
                      <thead>
                          <tr>
                              <td rowspan="2">কার্যক্রম</td>
                              <td rowspan="2">কর্মসম্পাদন সূচক</td>
                              <td rowspan="2">একক</td>
                              <td rowspan="2">কর্মসম্পাদন সূচকের মান</td>
                              <td rowspan="2">বাৎসরিক লক্ষ্যমাত্রা ২০২১-২২</td>
                              <td colspan="2">অর্জন</td>
                              <td rowspan="2">বাস্তবায়নের জন্য দায়িত্বপ্রাপ্ত শাখা</td>
                              <td rowspan="2">প্রক্রিয়া</td>
                          </tr>
                          <tr>
                              <td>(জুলাই-সেপ্টেম্বর ২০২১)</td>
                              <td>(জুলাই ২০২১- জুন ২০২২)</td>
                          </tr>

                      </thead>
                      <tbody id="annual_quatral_tbody">



                  
                      </tbody>
                </table>
            </div>
            
        {{-- <button type="submit"  class="btn btn-success">সংরক্ষণ করুন</button>
        <button id="test_alert" class="btn btn-danger">সংশোধন</button>
          </form> --}}
    </div>
</div>









<script>
    (function($) {
    $(document).ready(function() {

        
    /*** Add new input field ***/
    // activities
    let maxField = 20;
    let addButtonActivities = $('a#activities');
    let fieldWrapperAct = $('.activities');
    let fieldActivities = '<div><input type="text" name="activities[]" value=""/><a style="cursor:pointer;color:red" id="close_act">&times;</a></div>';
    let x = 1;

    $(addButtonActivities).click(function(){

        if(x < maxField){ 
            x++;
            $(fieldWrapperAct).append(fieldActivities);
        }
    });


    //Remove Field Activities
        $(fieldWrapperAct).on('click', 'a#close_act', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });

    //end of activities

     // performance index

    let addButtonPerformance = $('a#performance_index');
    let fieldWrapperPer = $('.performance_index');
    let fieldPerformance = '<div><input type="text" name="performance_index[]" value=""/><a style="cursor:pointer;color:red" id="close_pi">&times;</a></div>';


    $(addButtonPerformance).click(function(){
        if(x < maxField){ 
            x++;
            $(fieldWrapperPer).append(fieldPerformance);
        }
    });


    //Remove Field Activities
        $(fieldWrapperPer).on('click', 'a#close_pi', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });

     //end of performance index



   // unit

    let addButtonUnit = $('a#unit');
    let fieldWrapperUnit = $('.unit');
    let fieldUnit = '<div><input type="text" name="unit[]" value=""/><a style="cursor:pointer;color:red" id="close_uni">&times;</a></div>';


    $(addButtonUnit).click(function(){
        if(x < maxField){ 
            x++;
            $(fieldWrapperUnit).append(fieldUnit);
        }
    });

    //Remove Field unit
        $(fieldWrapperUnit).on('click', 'a#close_uni', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });


     //end of unit

   

    // performance_index_values

    let addButtonPerIndVal = $('a#performance_index_values');
    let fieldWrapperPerIndVal = $('.performance_index_values');
    let fieldPerIndVal = '<div><input type="text" name="performance_index_values[]" value=""/><a style="cursor:pointer;color:red" id="close_piv">&times;</a></div>';


    $(addButtonPerIndVal).click(function(){
        if(x < maxField){ 
            x++;
            $(fieldWrapperPerIndVal).append(fieldPerIndVal);
        }
    });


    //Remove Field performance_index_values
        $(fieldWrapperPerIndVal).on('click', 'a#close_piv', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });

     //end of performance_index_values


    // annual_target

    let addButtonAnnualTarget = $('a#annual_target');
    let fieldWrapperAnnualTarget = $('.annual_target');
    let fieldAnnualTarget = '<div><input type="text" name="annual_target[]" value=""/><a style="cursor:pointer;color:red" id="close_at">&times;</a></div>';


    $(addButtonAnnualTarget).click(function(){
        if(x < maxField){ 
            x++;
            $(fieldWrapperAnnualTarget).append(fieldAnnualTarget);
        }
    });


    //Remove Field annual_target
        $(fieldWrapperAnnualTarget).on('click', 'a#close_at', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });

     //end of annual_target



    // acquisition1

    let addButtonAccuse1 = $('a#acquisition1');
    let fieldWrapperAccuse1 = $('.acquisition1');
    let fieldAccuse1 = '<div><input type="text" name="acquisition1[]" value=""/><a style="cursor:pointer;color:red" id="close_ac1">&times;</a></div>';


    $(addButtonAccuse1).click(function(){
        if(x < maxField){ 
            x++;
            $(fieldWrapperAccuse1).append(fieldAccuse1);
        }
    });


    //Remove Field acquisition1
        $(fieldWrapperAccuse1).on('click', 'a#close_ac1', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });

     //end of acquisition1


         // acquisition2

    let addButtonAccuse2 = $('a#acquisition2');
    let fieldWrapperAccuse2 = $('.acquisition2');
    let fieldAccuse2 = '<div><input type="text" name="acquisition2[]" value=""/><a style="cursor:pointer;color:red" id="close_ac2">&times;</a></div>';


    $(addButtonAccuse2).click(function(){
        if(x < maxField){ 
            x++;
            $(fieldWrapperAccuse2).append(fieldAccuse2);
        }
    });


    //Remove Field acquisition2
        $(fieldWrapperAccuse2).on('click', 'a#close_ac2', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });

     //end of acquisition2


    // branch_responsible_implementation

    let addButtonBranchRespImp = $('a#branch_responsible_implementation');
    let fieldWrapperBranchRespImp = $('.branch_responsible_implementation');
    let fieldBranchRespImp = '<div><input type="text" name="branch_responsible_implementation[]" value=""/><a style="cursor:pointer;color:red" id="close_bri">&times;</a></div>';


    $(addButtonBranchRespImp).click(function(){
        if(x < maxField){ 
            x++;
            $(fieldWrapperBranchRespImp).append(fieldBranchRespImp);
        }
    });


    //Remove Field annual_target
        $(fieldWrapperBranchRespImp).on('click', 'a#close_bri', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });

     //end of annual_target




     

    









$('div#alert_error_field').hide();





    
$(document).on('submit','form#annual_quarterly_form',function(e){
    e.preventDefault();

    




 $.ajax({
        url:'form-2.1',
        method:'POST',
        data:new FormData(this),
        contentType:false,
        processData: false,
        success:function(response){
                    // $('body').removeClass('modal-open');
                    // $('.modal-backdrop').remove();
                    // $('#annualmodal_triquatral').hide();
                    // $('form#annual_quarterly_form')[0].reset();
                    // swal("Success !", "নতুন সারি যোগ হয়েছে!", "success");
                    // allAnnualTriqurter();
            

        },

        error:function(response){
            $('div#alert_error_field').show();
            $('div#alert_error_field strong#error_field').text(response.responseJSON.errors.activities);
       

        }
    });



});

 function allAnnualTriqurter(){
     $.ajax({
         url:'form-2.1-show',
         success:function(response){

            $('tbody#annual_quatral_tbody').html(response);


         }
     });
 }

 allAnnualTriqurter();

  


    });

})(jQuery)
</script>

@endsection    
