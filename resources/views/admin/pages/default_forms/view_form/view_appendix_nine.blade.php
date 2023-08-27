@extends('admin.master')
@section('content')
<style>
    input {
        border: none;
        width: 100%;
    }

    ,
    .rel-26 {
        margin_top: 50px;
        margin-bottom: 50px;
    }

    

</style>
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
                    <a href="#">{{__('budget_branch')}}</a>
                </li>
            </ul>
        </div>

     <form action="{{ url('update-form-appendix_nine_update') }}" method="post" id="submitForm">
        @csrf
              <div class="mt-4 item">
                
                  <div class="header-item">
                    <div style="text-align: right;">
                      <h4>পরিশিষ্ট-৯</h4>
                    </div>
                    <div>
                      <h6>বিষয়</h6>
                    </div>
                  </div>
                  <div class="listed-content">
                    <ul>
                      @foreach ($budget_sub as $budget_sub)
                     <input type="hidden" name="budget_sub_id" value="{{ $budget_sub -> id }}">    
                      <li><input type="text" name="budget_sub_{{ $budget_sub -> id }}" id="" value="{{ $budget_sub -> budget_sub }}"></li>
                      @endforeach
                      
                      
                    </ul>
                  </div>
                  <div class="header-item">
                    <div style="text-align: center;">
                      <h4>সেকশন ২</h4>
                      <h4>মন্ত্রণালয়/বিভাগের বিভিন্ন কার্যক্রমের চূড়ান্ত<br> ফলাফল/প্রভাব (Outcome/Impact)</h4>
                    </div>
                  </div>
                  <div class="listed-content">
                    <table border="1" width="100%">
                      <thead>
                          <tr>
                              <td>চূড়ান্তফলাফল/প্রভাব (Outcome/Impact)</td>
                              <td>চুড়ান্ত ফলাফল সূচক</td>
                              <td>একক
                                  (Unit)
                                  </td>
                              <td>প্রকৃত অর্জন*
                                  ২০১৮-১৯
                                  </td>
                              <td>লক্ষ্যমাত্রা
                                  ২০১৯-২০
                                  </td>
                              <td>অর্জন</td>
                              <td>মন্তব্য</td>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>2</td>
                              <td>3</td>
                              <td>4</td>
                              <td>5</td>
                              <td>6</td>
                              <td>7</td>
                          </tr>
                          @foreach ($outcomes as $outcomes)
                              
                        
                          <tr>
                            <input type="hidden" name="outcome_id[]" value="{{ $outcomes -> id }}">
                              <td><input type="text" name="impact_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> impact }}"></td>
                              <td><input type="text" name="indicator_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> indicator }}"></td>
                              <td><input type="text" name="unit_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> unit }}"> </td>
                              <td><input type="text" name="achivement_star_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> achivement_star }}"></td>
                              <td><input type="text" name="target_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> target }}"> </td>
                              <td><input type="text" name="achivement_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> achivement }}"></td>
                              <td><input type="text" name="comments_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> comments }}"></td>
                          </tr>

                           @endforeach
                          
                      </tbody>
                  </table>
                  </div>
                  <div class="header-item">
                    <div style="text-align: center;">
                      <h4>সেকশন ৩</h4>
                      <h4>কৌশলগত উদ্দেশ্য, অগ্রাধিকার, কার্যক্রম, কর্মসম্পাদন সূচক এবং <br> লক্ষ্যমাত্রাসমূহ</h4>
                    </div>
                  </div>
                  <div class="listed-content">
                    <table border="1" width="100%">
                      <thead>
                          <tr>
                              <td rowspan="3">কৌশলগত উদ্দেশ্য</td>
                              <td class="column1 style445 s style447" rowspan="3">কৌশলগত উদ্দেশ্যের মান</td>
                              <td class="column2 style445 s style447" rowspan="3">কার্যক্রম</td>
                              <td class="column3 style445 s style447" rowspan="3">কর্মসম্পাদন সূচক</td>
                              <td class="column4 style445 s style447" rowspan="3">একক</td>
                              <td class="column5 style445 s style447" rowspan="3">কর্মসম্পাদন সূচকের মান</td>
                              <td class="column6 style445 s style447" rowspan="3">প্রকৃত অর্জন ২০১৭-১৮</td>
                              <td class="column7 style445 s style447" rowspan="3">প্রকৃত অর্জন* ২০১৮-১৯</td>
                              <td class="column8 style449 s style450" colspan="5">লক্ষ্যমাত্রা/নির্ণায়ক ২০১৯-২০</td>
                              <td class="column13 style430 s" rowspan="3">অর্জন ২০১৯-২০ (১ম প্রান্তিক)</td>
                              <td class="column14 style445 s style447" rowspan="3">বাস্তবায়নের জন্য দায়িত্বপ্রাপ্ত</td>
                          </tr>
                          <tr class="row757">
                            <td class="column8 style433 s">অসাধারণ</td>
                            <td class="column9 style433 s">অতি উত্তম</td>
                            <td class="column10 style433 s">উত্তম</td>
                            <td class="column11 style433 s">চলতি মান</td>
                            <td class="column12 style433 s">চলতি মানের নিম্নে</td>
                          </tr>
                          <tr class="row758">
                            <td class="column8 style434 n">১০০%</td>
                            <td class="column9 style434 n">৯০%</td>
                            <td class="column10 style434 n">৮০%</td>
                            <td class="column11 style434 n">৭০%</td>
                            <td class="column12 style434 n">৬০%</td>
                          </tr>
                          <tr class="row759">
                            <td class="column0 style388 s style390" colspan="15">মন্ত্রণালয়/বিভাগের কৌশলগত উদ্দেশ্যসমুহ</td>
                          </tr>
                      </thead>
                      <tbody>

                        @foreach ($all_columuns as $row)
                          <?php $sub_rows = count($row->sub_rows) + 1?>
                            <tr class="row760">
                             <input type="hidden" name="row_id[]" value="{{ $row->id }}">                        
                             <td class="column0 style7 s"><input type="text" name="purpose_{{$row->id}}" id="" value="{{$row->purpose}}"></td>  
                             <td class="column0 style7 s"><input type="text"  name="purpose_value_{{$row->id}}" id="" value="{{$row->purpose_value}}"></td>  
                             <td class="column0 style7 s"><input type="text"  name="activity_{{$row->id}}" id="" value="{{$row->activity}}"></td>
                             <td class="column0 style7 s"><input type="text"  name="indicator_{{$row->id}}" id="" value="{{$row->indicator}}"></td> 
                             <td class="column0 style7 s"><input type="text"  name="unit_{{$row->id}}" id="" value="{{$row->unit}}"></td>
                             <td class="column0 style7 s"><input type="text"  name="indicator_value_{{$row->id}}" id="" value="{{$row->indicator_value}}"></td>  
                             <td class="column0 style7 s"><input type="text"  name="achivement_{{$row->id}}" id="" value="{{$row->achivement}}"></td>  
                             <td class="column0 style7 s"><input type="text"  name="achivement_star_{{$row->id}}" id="" value="{{$row->achivement_star}}"></td>
                             <td class="column0 style7 s"><input type="text"  name="target_extraordinary_{{$row->id}}" id="" value="{{$row->target_extraordinary}}"></td> 
                             <td class="column0 style7 s"><input type="text"  name="target_excellent_{{$row->id}}" id="" value="{{$row->target_excellent}}"></td> 
                             <td class="column0 style7 s"><input type="text"  name="target_fine_{{$row->id}}" id="" value="{{$row->target_fine}}"></td>
                             <td class="column0 style7 s"><input type="text"  name="target_value_{{$row->id}}" id="" value="{{$row->target_value}}"></td>
                             <td class="column0 style7 s"><input type="text"  name="target_below_{{$row->id}}" id="" value="{{$row->target_below}}"></td>
                             <td class="column0 style7 s"><input type="text"  name="margin_{{$row->id}}" id="" value="{{$row->margin}}"></td>
                             <td class="column0 style7 s"><input type="text"  name="responsible_{{$row->id}}" id="" value="{{$row->responsible}}"></td>  
                        </tr>
                        @if (count($row->sub_rows) != 0)
                    
                        @foreach ($row->sub_rows as $subRow)
                            <tr class="row763">
                             <input type="hidden" name="sub_row_id[]" value="{{$subRow->id}}">
                         <td class="column0 style7 s"><input type="text"  name="purpose_{{$subRow->id}}" id="" value="{{$subRow->purpose}}"></td>  
                             <td class="column0 style7 s"><input type="text"  name="purpose_value_{{$subRow->id}}" id="" value="{{$subRow->purpose_value}}"></td>  

                             <td class="column0 style7 s"><input type="text"  name="activity_{{$subRow->id}}" id="" value="{{$subRow->activity}}"></td>

                             <td class="column0 style7 s"><input type="text"  name="indicator_{{$subRow->id}}" id="" value="{{$subRow->indicator}}"></td> 

                             <td class="column0 style7 s"><input type="text"  name="unit_{{$subRow->id}}" id="" value="{{$subRow->unit}}"></td>

                             <td class="column0 style7 s"><input type="text"  name="indicator_value_{{$subRow->id}}" id="" value="{{$subRow->indicator_value}}"></td> 

                             <td class="column0 style7 s"><input type="text"  name="achivement_{{$subRow->id}}" id="" value="{{$subRow->achivement}}"></td>  

                             <td class="column0 style7 s"><input type="text"  name="achivement_star_{{$subRow->id}}" id="" value="{{$subRow->achivement_star}}"></td>

                             <td class="column0 style7 s"><input type="text"  name="target_extraordinary_{{$subRow->id}}" id="" value="{{$subRow->target_extraordinary}}"></td> 

                             <td class="column0 style7 s"><input type="text"  name="target_excellent_{{$subRow->id}}" id="" value="{{$subRow->target_excellent}}"></td> 

                             <td class="column0 style7 s"><input type="text"  name="target_fine_{{$subRow->id}}" id="" value="{{$subRow->target_fine}}"></td>

                             <td class="column0 style7 s"><input type="text"  name="target_value_{{$subRow->id}}" id="" value="{{$subRow->target_value}}"></td>

                             <td class="column0 style7 s"><input type="text"  name="target_below_{{$subRow->id}}" id="" value="{{$subRow->target_below}}"></td>

                             <td class="column0 style7 s"><input type="text"  name="margin_{{$subRow->id}}" id="" value="{{$subRow->margin}}"></td>

                             <td class="column0 style7 s"><input type="text"  name="responsible_{{$subRow->id}}" id="" value="{{$subRow->responsible}}"></td> 
                        </tr>
                         @if (count($subRow->sub_rows) != 0)
                       
                         @foreach ($subRow->sub_rows as $subRowTwo)
                            <input type="hidden" name="sub_row_2_id[]" value="{{$subRowTwo->id}}">
                            <tr>
                         <td class="column0 style7 s"><input type="text"  name="purpose_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->purpose}}"></td>  
                             <td class="column0 style7 s"><input type="text"  name="purpose_value_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->purpose_value}}"></td>  

                             <td class="column0 style7 s"><input type="text"  name="activity_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->activity}}"></td>

                             <td class="column0 style7 s"><input type="text"  name="indicator_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->indicator}}"></td> 

                             <td class="column0 style7 s"><input type="text"  name="unit_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->unit}}"></td>

                             <td class="column0 style7 s"><input type="text"  name="indicator_value_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->indicator_value}}"></td> 

                             <td class="column0 style7 s"><input type="text"  name="achivement_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->achivement}}"></td>  

                             <td class="column0 style7 s"><input type="text"  name="achivement_star_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->achivement_star}}"></td>

                             <td class="column0 style7 s"><input type="text"  name="target_extraordinary_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->target_extraordinary}}"></td> 

                             <td class="column0 style7 s"><input type="text"  name="target_excellent_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->target_excellent}}"></td> 

                             <td class="column0 style7 s"><input type="text"  name="target_fine_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->target_fine}}"></td>

                             <td class="column0 style7 s"><input type="text"  name="target_value_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->target_value}}"></td>

                             <td class="column0 style7 s"><input type="text"  name="target_below_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->target_below}}"></td>

                             <td class="column0 style7 s"><input type="text"  name="margin_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->margin}}"></td>

                             <td class="column0 style7 s"><input type="text"  name="responsible_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->responsible}}"></td> 
                             </tr>
                         @endforeach
                         @endif
                        @endforeach               
                        @endif
                        @endforeach
                       


                       
                      </tbody>
                  </table>
                  </div>
                  <div class="header-item">
                    <div style="text-align: center;">
                      <h4>সেকশন ৩</h4>
                      <h4>কৌশলগত উদ্দেশ্য, অগ্রাধিকার, কার্যক্রম, কর্মসম্পাদন সূচক এবং <br> লক্ষ্যমাত্রাসমূহ</h4>
                      <h4 align="left">আবশ্যিক কৌশলগত উদ্দেশ্য ২০১৯-২০</h4>
                    </div>
                  </div>
                  <div class="listed-content">
                    <table border="1" width="100%">
                      <thead>
                          <tr>
                              <td rowspan="3">কৌশলগত উদ্দেশ্য</td>
                              <td class="column1 style445 s style447" rowspan="3">কৌশলগত উদ্দেশ্যের মান</td>
                              <td class="column2 style445 s style447" rowspan="3">কার্যক্রম</td>
                              <td class="column3 style445 s style447" rowspan="3">কর্মসম্পাদন সূচক</td>
                              <td class="column4 style445 s style447" rowspan="3">একক</td>
                              <td class="column5 style445 s style447" rowspan="3">কর্মসম্পাদন সূচকের মান</td>
                              <td class="column8 style449 s style450" colspan="5">লক্ষ্যমাত্রা/নির্ণায়ক ২০১৯-২০</td>
                              <td class="column13 style430 s" rowspan="3">অর্জন ২০১৯-২০ (১ম প্রান্তিক)</td>
                              <td class="column14 style445 s style447" rowspan="3">বাস্তবায়নের জন্য দায়িত্বপ্রাপ্ত</td>
                          </tr>
                          <tr class="row757">
                            <td class="column8 style433 s">অসাধারণ</td>
                            <td class="column9 style433 s">অতি উত্তম</td>
                            <td class="column10 style433 s">উত্তম</td>
                            <td class="column11 style433 s">চলতি মান</td>
                            <td class="column12 style433 s">চলতি মানের নিম্নে</td>
                          </tr>
                          <tr class="row758">
                            <td class="column8 style434 n">১০০%</td>
                            <td class="column9 style434 n">৯০%</td>
                            <td class="column10 style434 n">৮০%</td>
                            <td class="column11 style434 n">৭০%</td>
                            <td class="column12 style434 n">৬০%</td>
                          </tr>
                      </thead>
                     <tbody>

     @foreach ($strategic as $row)
     <?php $sub_rows = count($row->sub_rows) + 1 ?>
     <tr class="row760">
         <input type="hidden" name="strategic_row_id[]" value="{{ $row->id }}">
         <td class="column0 style7 s"><input type="text" name="strategic_purpose_{{$row->id}}" id="" value="{{$row->strategic_purpose}}"></td>
         <td class="column0 style7 s"><input type="text" name="strategic_purpose_value_{{$row->id}}" id="" value="{{$row->strategic_purpose_value}}"></td>
         <td class="column0 style7 s"><input type="text" name="strategic_activity_{{$row->id}}" id="" value="{{$row->strategic_activity}}"></td>
         <td class="column0 style7 s"><input type="text" name="strategic_indicator_{{$row->id}}" id="" value="{{$row->strategic_indicator}}"></td>
         <td class="column0 style7 s"><input type="text" name="strategic_unit_{{$row->id}}" id="" value="{{$row->strategic_unit}}"></td>
         <td class="column0 style7 s"><input type="text" name="strategic_indicator_value_{{$row->id}}" id="" value="{{$row->strategic_indicator_value}}"></td>
         <td class="column0 style7 s"><input type="text" name="strategic_target_extraordinary_{{$row->id}}" id="" value="{{$row->strategic_target_extraordinary}}"></td>
         <td class="column0 style7 s"><input type="text" name="strategic_target_excellent_{{$row->id}}" id="" value="{{$row->strategic_target_excellent}}"></td>
         <td class="column0 style7 s"><input type="text" name="strategic_target_fine_{{$row->id}}" id="" value="{{$row->strategic_target_fine}}"></td>
         <td class="column0 style7 s"><input type="text" name="strategic_target_value_{{$row->id}}" id="" value="{{$row->strategic_target_value}}"></td>
         <td class="column0 style7 s"><input type="text" name="strategic_target_below_{{$row->id}}" id="" value="{{$row->strategic_target_below}}"></td>
         <td class="column0 style7 s"><input type="text" name="strategic_margin_{{$row->id}}" id="" value="{{$row->strategic_margin}}"></td>
         <td class="column0 style7 s"><input type="text" name="strategic_responsible_{{$row->id}}" id="" value="{{$row->strategic_responsible}}"></td>
     </tr>
     @if (count($row->sub_rows) != 0)

     @foreach ($row->sub_rows as $subRow)
     <tr class="row763">
         <input type="hidden" name="strategic_sub_row_id[]" value="{{$subRow->id}}">
         <td class="column0 style7 s"><input type="text" name="strategic_purpose_{{$subRow->id}}" id="" value="{{$subRow->strategic_purpose}}"></td>
         <td class="column0 style7 s"><input type="text" name="strategic_purpose_value_{{$subRow->id}}" id="" value="{{$subRow->strategic_purpose_value}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_activity_{{$subRow->id}}" id="" value="{{$subRow->strategic_activity}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_indicator_{{$subRow->id}}" id="" value="{{$subRow->strategic_indicator}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_unit_{{$subRow->id}}" id="" value="{{$subRow->strategic_unit}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_indicator_value_{{$subRow->id}}" id="" value="{{$subRow->strategic_indicator_value}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_target_extraordinary_{{$subRow->id}}" id="" value="{{$subRow->strategic_target_extraordinary}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_target_excellent_{{$subRow->id}}" id="" value="{{$subRow->strategic_target_excellent}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_target_fine_{{$subRow->id}}" id="" value="{{$subRow->strategic_target_fine}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_target_value_{{$subRow->id}}" id="" value="{{$subRow->strategic_target_value}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_target_below_{{$subRow->id}}" id="" value="{{$subRow->strategic_target_below}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_margin_{{$subRow->id}}" id="" value="{{$subRow->strategic_margin}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_responsible_{{$subRow->id}}" id="" value="{{$subRow->strategic_responsible}}"></td>
     </tr>
     @if (count($subRow->sub_rows) != 0)

     @foreach ($subRow->sub_rows as $subRowTwo)
     <input type="hidden" name="strategic_sub_row_2_id[]" value="{{$subRowTwo->id}}">

    
     <tr>
         <td class="column0 style7 s"><input type="text" name="strategic_purpose_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->strategic_purpose}}"></td>
         <td class="column0 style7 s"><input type="text" name="strategic_purpose_value_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->strategic_purpose_value}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_activity_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->strategic_activity}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_indicator_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->strategic_indicator}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_unit_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->strategic_unit}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_indicator_value_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->strategic_indicator_value}}"></td>

        

         <td class="column0 style7 s"><input type="text" name="strategic_target_extraordinary_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->strategic_target_extraordinary}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_target_excellent_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->strategic_target_excellent}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_target_fine_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->strategic_target_fine}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_target_value_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->strategic_target_value}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_target_below_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->strategic_target_below}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_margin_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->strategic_margin}}"></td>

         <td class="column0 style7 s"><input type="text" name="strategic_responsible_{{$subRowTwo->id}}" id="" value="{{$subRowTwo->strategic_responsible}}"></td>
     </tr>
     @endforeach
     @endif
     @endforeach
     @endif
     @endforeach




 </tbody>
                  </table>
                  </div>
              </div>
              <div class="mt-4 mb-4 input-final">
                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
              <button type="submit" class="btn btn-danger">সংশোধন</button>
              </div>
          </form>


            <script type="text/javascript">
                $(document).ready(function () {
                    $('#basic-datatable').DataTable({});
                });
                $("#submitForm").submit(function (e) {
                    e.preventDefault();
                    $('#loader').show();
                    $(".error_msg").html('');
                    var data = new FormData($('#submitForm')[0]);

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: "POST",
                        url: "{{url("update-form-appendix_nine_update")}}",
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (data, textStatus, jqXHR) {
                            location.reload();
                        }
                    }).done(function () {
                        $("#success_msg").html("Data Save Successfully");
                        //            window.location.href = "{{ url('departments')}}";
                        // location.reload();
                    }).fail(function (data, textStatus, jqXHR) {
                        $('#loader').hide();
                        var json_data = JSON.parse(data.responseText);
                        $.each(json_data.errors, function (key, value) {
                            $("#" + key).after(
                                "<span class='error_msg' style='color: red;font-weigh: 600'>" +
                                value + "</span>");
                        });
                    });
                });

            </script>
            @endsection
