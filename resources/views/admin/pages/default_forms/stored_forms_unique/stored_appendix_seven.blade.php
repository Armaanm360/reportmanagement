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

 <form action="{{ url('update-form-appendix_seven_update') }}" method="post" id="submitForm">
            @csrf
             <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">
              <div class="mt-4 item">
                <div class="header-item">
                    <div style="text-align: right;">
                      <h4>পরিশিষ্ট-৭</h4>
                    </div>
                    <div>
                      <h6>বিষয়</h6>
                    </div>
                  </div>
                  <div class="listed-content">
                    <ul>
                      @foreach ($budget_sub as $budget_sub)
                      <li><input type="text" name="budget_sub_{{ $budget_sub -> id }}" id="" value="{{ $budget_sub-> budget_sub}}" readonly></li>
                      <input type="hidden" name="budget_sub_id" value="{{ $budget_sub-> id }}">
                      <input type="hidden" name="unique_form_id" value="{{$budget_sub->unique_form_id}}">
                     @endforeach

                
                     
                       
                    </ul>
                  </div>
                  <div class="header-item">
                    <div style="text-align: center;">
                      <h4>@foreach ($heading_financial_1 as $heading_financial_1)
                     <input type="text" name="heading_financial_1_{{ $heading_financial_1 -> id }}" id="" value="{{ $heading_financial_1-> heading_financial_1}}" readonly>
                      <input type="hidden" name="heading_financial_1_id" value="{{ $heading_financial_1-> id }}">
                      <input type="hidden" name="unique_form_id" value="{{$heading_financial_1->unique_form_id}}">
                     @endforeach</h4>
                      <h4>@foreach ($heading_financial_2 as $heading_financial_2)
                     <input type="text" name="heading_financial_2_{{ $heading_financial_2 -> id }}" id="" value="{{ $heading_financial_2-> heading_financial_2}}" readonly>
                      <input type="hidden" name="heading_financial_2_id" value="{{ $heading_financial_2-> id }}">
                      <input type="hidden" name="unique_form_id" value="{{$heading_financial_2->unique_form_id}}">
                     @endforeach</h4>
                    </div>
                    <div style="text-align: right;">
                      <h4> @foreach ($amount as $amount)
                     <input type="text" name="amount_{{ $amount -> id }}" id="" value="{{ $amount-> amount}}" readonly>
                      <input type="hidden" name="amount_id" value="{{ $amount-> id }}">
                       <input type="hidden" name="unique_form_id" value="{{$amount->unique_form_id}}">
                     @endforeach</h4>
                    </div>
                  </div>
                  <div class="listed-content">
                    <table border="1" width="100%">
                      <thead>
                          <tr>
                              <td rowspan="2">বিবরণ</td>
                              <td rowspan="2">বাজেট ২০১৯-২০</td>
                              <td colspan="2">প্রক্ষেপণ</td>
                          </tr>
                          <tr>
                              <td>2020-21</td>
                              <td>2021-22</td>
                          </tr>
                      </thead>
                      <tbody>

                        @foreach ($one_row_id as $one_row_id)
                        <tr>
                          <input type="hidden"   name="one_row_id[]" id="" value="{{ $one_row_id -> id }}">
                          <input type="hidden" name="unique_form_id" value="{{$one_row_id->unique_form_id}}">
                          <td><input type="text" name="description_one_{{ $one_row_id -> id }}" id="" value="{{ $one_row_id -> description_one }}"></td>
                          <td><input type="text" name="budget_one_{{ $one_row_id -> id }}" id="" value="{{ $one_row_id -> budget_one }}"></td>
                          <td><input type="text" name="projection1_one_{{ $one_row_id -> id }}" id="" value="{{ $one_row_id -> projection1_one }}"></td>
                          <td><input type="text" name="projection2_one_{{ $one_row_id -> id }}" id="" value="{{ $one_row_id -> projection2_one }}"></td>
                        </tr>
                        @endforeach
                         
                         
                          
                      </tbody>
                  </table>
                  </div>
                  <div class="listed-content">
                    <ul>
                        @foreach ($point_1_0 as $point_1_0)
                        <input type="hidden" name="unique_form_id" value="{{$point_1_0->unique_form_id}}">
                      <li><input type="text" name="point_1_0_{{ $point_1_0 -> id }}" id="" value="{{ $point_1_0-> point_1_0}}"></li>
                      <input type="hidden" name="point_1_0_id" value="{{ $point_1_0-> id }}">
                     @endforeach
                      <li>
                      
                         @foreach ($point_1_1 as $point_1_1)
                         <input type="hidden" name="unique_form_id" value="{{$point_1_1->unique_form_id}}">
                      <li><input type="text" name="point_1_1_{{ $point_1_1 -> id }}" id="" value="{{ $point_1_1-> point_1_1}}"></li>
                      <input type="hidden" name="point_1_1_id" value="{{ $point_1_1-> id }}">
                     @endforeach

                     @foreach ($point_1_1_line as $point_1_1_line)
                     <input type="hidden" name="unique_form_id" value="{{$point_1_1_line->unique_form_id}}">
                      <li><input type="text" name="point_1_1_line_{{ $point_1_1_line -> id }}" id="" value="{{ $point_1_1_line-> point_1_1_line}}"></li>
                      <input type="hidden" name="point_1_1_line_id" value="{{ $point_1_1_line-> id }}">
                     @endforeach
                        
                      </li>
                     
                      <li>@foreach ($point_1_2 as $point_1_2)
                         <input type="hidden" name="unique_form_id" value="{{$point_1_2->unique_form_id}}">
                      <input type="text" name="point_1_2_{{ $point_1_2 -> id }}" id="" value="{{ $point_1_2-> point_1_2}}"></li>
                      <input type="hidden" name="point_1_2_id" value="{{ $point_1_2-> id }}">
                     @endforeach
                        <ul>
                           @foreach ($point_1_2_lines as $point_1_2_lines)
                            <input type="hidden" name="unique_form_id" value="{{$point_1_2_lines->unique_form_id}}">
                      <li><input type="text" name="point_1_2_lines_{{ $point_1_2_lines -> id }}" id="" value="{{ $point_1_2_lines-> point_1_2_lines}}"></li>
                      <input type="hidden" name="point_1_2_lines_id" value="{{ $point_1_2_lines-> id }}"></li>
                     @endforeach
                        </ul>
                      </li>
                      
                       @foreach ($point_2_0 as $point_2_0)
                        <input type="hidden" name="unique_form_id" value="{{$point_2_0->unique_form_id}}">
                      <li><input type="text" name="point_2_0_{{ $point_2_0 -> id }}" id="" value="{{ $point_2_0-> point_2_0}}"></li>
                      <input type="hidden" name="point_2_0_id" value="{{ $point_2_0-> id }}"></li>
                     @endforeach
                        <ul>
                          <table border="1" width="100%">
                            <thead>
                                <tr>
                                    <td>মধ্যমেয়াদি কৌশলগত উদ্দেশ্য</td>
                                    <td>কার্যক্রমসমূহ</td>
                                    <td>বাস্তবায়নকারী অধিদপ্তর/সংস্থা</td>
                                </tr>
                                <tr>
                                    <td>১</td>
                                    <td>২</td>
                                    <td>৩</td>
                                </tr>
                      @foreach($two_row_id as $two_row_id)
                             <?php $sub_rows = count($two_row_id->sub_rows) + 1?>
                        <tr class="row1">
                          <input type="hidden" name="unique_form_id" value="{{$sub_rows->unique_form_id}}">
                             <input type="hidden" name="two_row_id[]" value="{{$two_row_id->id}}">
                             <td class="column0 style7 s">
                               <textarea name="purpose_two_{{$two_row_id->id}}" id="" cols="30" rows="10">
                                {{$two_row_id->purpose_two}}
                              </textarea>
                            
                            </td>
                            <td class="column1 style7 s">
                                      <textarea name="activities_two_{{$two_row_id->id}}" id="" cols="30" rows="10">
                                {{$two_row_id->activities_two}}
                              </textarea>
                              
                              </td>
                            <td class="column2 style7 s">
                               <textarea name="agency_two_{{$two_row_id->id}}" id="" cols="30" rows="10">
                                {{$two_row_id->agency_two}}
                              </textarea>
                            </td>
                          </tr>
                          @if(count($two_row_id->sub_rows) != 0)                        
                          @foreach($two_row_id->sub_rows as $subRow)
                               <tr class="row1">
                                   <input type="hidden" name="sub_two_row_id[]" value="{{$subRow->id}}">
                               <td class="column0 style7 s">
                               <textarea name="sub_row_purpose_two_{{$subRow->id}}" id="" cols="30" rows="10">
                                {{$subRow->purpose_two}}
                              </textarea>
                            
                            </td>
                            <td class="column1 style7 s">
                                      <textarea name="sub_row_activities_two_{{ $subRow->id }}" id="" cols="30" rows="10">
                                {{$subRow->activities_two}}
                              </textarea>
                              
                              </td>
                            <td class="column2 style7 s">
                               <textarea name="sub_row_agency_two_{{ $subRow->id }}" id="" cols="30" rows="10">
                                {{$subRow->agency_two}}
                              </textarea>
                            </td>
                            </tr>
                          @endforeach
                          @endif
                          @endforeach



                                
                                
                            </thead>
                        </table>
                        </ul>
                      </li>
                        @foreach ($point_3_0 as $point_3_0)
                        <input type="hidden" name="unique_form_id" value="{{$point_3_0->unique_form_id}}">
                      <li><input type="text" name="point_3_0_{{ $point_3_0 -> id }}" id="" value="{{ $point_3_0-> point_3_0}}"></li>
                      <input type="hidden" name="point_3_0_id" value="{{ $point_3_0-> id }}"></li>
                     @endforeach
                      
                      <li>
                         @foreach ($point_3_1 as $point_3_1)
                          <input type="hidden" name="unique_form_id" value="{{$point_3_1->unique_form_id}}">
                      <input type="text" name="point_3_1_{{ $point_3_1 -> id }}" id="" value="{{ $point_3_1-> point_3_1}}">
                      <input type="hidden" name="point_3_1_id" value="{{ $point_3_1-> id }}">
                     @endforeach
                        <ul>
                          <li>@foreach ($point_3_1_1 as $point_3_1_1)
                             <input type="hidden" name="unique_form_id" value="{{$point_3_1_1->unique_form_id}}">
                     <input type="text" name="point_3_1_1_{{ $point_3_1_1 -> id }}" id="" value="{{ $point_3_1_1-> point_3_1_1}}">
                      <input type="hidden" name="point_3_1_1_id" value="{{ $point_3_1_1-> id }}">
                     @endforeach
                            <ul>
                              @foreach ($point_3_1_1_lines as $point_3_1_1_lines)
                               <input type="hidden" name="unique_form_id" value="{{$point_3_1_1_lines->unique_form_id}}">
                                  <li><input type="text" name="point_3_1_1_lines_{{ $point_3_1_1_lines -> id }}" id="" value="{{ $point_3_1_1_lines-> point_3_1_1_lines}}"></li>
                                  <input type="hidden" name="point_3_1_1_lines_id" value="{{ $point_3_1_1_lines-> id }}">
                              @endforeach
                              
                              
                            </ul>
                          </li>
                           <li>@foreach ($point_3_1_2 as $point_3_1_2)
                             <input type="hidden" name="unique_form_id" value="{{$point_3_1_2->unique_form_id}}">
                     <input type="text" name="point_3_1_2_{{ $point_3_1_2 -> id }}" id="" value="{{ $point_3_1_2-> point_3_1_2}}">
                      <input type="hidden" name="point_3_1_2_id" value="{{ $point_3_1_2-> id }}">
                     @endforeach
                            <ul>
                              @foreach ($point_3_1_2_lines as $point_3_1_2_lines)
                               <input type="hidden" name="unique_form_id" value="{{$point_3_1_2_lines->unique_form_id}}">
                                  <li><input type="text" name="point_3_1_2_lines_{{ $point_3_1_2_lines -> id }}" id="" value="{{ $point_3_1_2_lines-> point_3_1_2_lines}}"></li>
                                  <input type="hidden" name="point_3_1_2_lines_id" value="{{ $point_3_1_2_lines-> id }}">
                              @endforeach
                              
                              
                            </ul>
                          </li>
                         <li>@foreach ($point_3_1_3 as $point_3_1_3)
                           <input type="hidden" name="unique_form_id" value="{{$point_3_1_3->unique_form_id}}">
                     <input type="text" name="point_3_1_3_{{ $point_3_1_3 -> id }}" id="" value="{{ $point_3_1_3-> point_3_1_3}}">
                      <input type="hidden" name="point_3_1_3_id" value="{{ $point_3_1_3-> id }}">
                     @endforeach
                            <ul>
                              @foreach ($point_3_1_3_lines as $point_3_1_3_lines)
                              <input type="hidden" name="unique_form_id" value="{{$point_3_1_3_lines->unique_form_id}}">
                                  <li><input type="text" name="point_3_1_3_lines_{{ $point_3_1_3_lines -> id }}" id="" value="{{ $point_3_1_3_lines-> point_3_1_3_lines}}"></li>
                                  <input type="hidden" name="point_3_1_3_lines_id" value="{{ $point_3_1_3_lines-> id }}">
                              @endforeach
                              
                              
                            </ul>
                          </li>
                          <li>@foreach ($point_3_1_4 as $point_3_1_4)
                            <input type="hidden" name="unique_form_id" value="{{$point_3_1_4->unique_form_id}}">
                     <input type="text" name="point_3_1_4_{{ $point_3_1_4 -> id }}" id="" value="{{ $point_3_1_4-> point_3_1_4}}">
                      <input type="hidden" name="point_3_1_4_id" value="{{ $point_3_1_4-> id }}">
                     @endforeach
                            <ul>
                              @foreach ($point_3_1_4_lines as $point_3_1_4_lines)
                               <input type="hidden" name="unique_form_id" value="{{$point_3_1_4_lines->unique_form_id}}">
                                  <li><input type="text" name="point_3_1_4_lines_{{ $point_3_1_4_lines -> id }}" id="" value="{{ $point_3_1_4_lines-> point_3_1_4_lines}}"></li>
                                  <input type="hidden" name="point_3_1_4_lines_id" value="{{ $point_3_1_4_lines-> id }}">
                              @endforeach
                              
                              
                            </ul>
                          </li>
                           <li>@foreach ($point_3_1_5 as $point_3_1_5)
                             <input type="hidden" name="unique_form_id" value="{{$point_3_1_5->unique_form_id}}">
                     <input type="text" name="point_3_1_5_{{ $point_3_1_5 -> id }}" id="" value="{{ $point_3_1_5-> point_3_1_5}}">
                      <input type="hidden" name="point_3_1_5_id" value="{{ $point_3_1_5-> id }}">
                     @endforeach
                            <ul>
                              @foreach ($point_3_1_5_lines as $point_3_1_5_lines)
                              <input type="hidden" name="unique_form_id" value="{{$point_3_1_5_lines->unique_form_id}}">
                                  <li><input type="text" name="point_3_1_5_lines_{{ $point_3_1_5_lines -> id }}" id="" value="{{ $point_3_1_5_lines-> point_3_1_5_lines}}"></li>
                                  <input type="hidden" name="point_3_1_5_lines_id" value="{{ $point_3_1_5_lines-> id }}">
                              @endforeach
                              
                              
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li> @foreach ($point_3_2 as $point_3_2)
                        <input type="hidden" name="unique_form_id" value="{{$point_3_2->unique_form_id}}">
                                  <input type="text" name="point_3_2_{{ $point_3_2 -> id }}" id="" value="{{ $point_3_2-> point_3_2}}">
                                  <input type="hidden" name="point_3_2_id" value="{{ $point_3_2-> id }}">
                              @endforeach
                        <ul>
                          <table border="1" width="100%">
                            <thead>
                                <tr>
                                    <td rowspan="2">বিবরণ</td>
                                    <td rowspan="2">বাজেট <br>  ২০১9-20</td>
                                    <td colspan="2">প্রক্ষেপণ</td>
                                </tr>
                                <tr>
                                    <td>2020-2021</td>
                                    <td>২021-2022</td>
                                </tr>
                            </thead>
                            <tbody>
                          @foreach ($three_row_id as $three_row_id)
                              
                            
                              <tr>
                                  <input type="hidden" name="unique_form_id" value="{{$three_row_id->unique_form_id}}">
                                <input type="hidden" name="three_row_id[]" id="" value="{{ $three_row_id -> id }}">
                                <td><input type="text" name="description_three_{{ $three_row_id -> id }}" id="" value="{{ $three_row_id -> description_three }}"></td>
                                <td><input type="text" name="budget_three_{{ $three_row_id -> id }}" id="" value="{{ $three_row_id -> budget_three }}"></td>
                                <td><input type="text" name="projection1_three_{{ $three_row_id -> id }}" id="" value="{{ $three_row_id -> projection1_three }}"></td>
                                <td><input type="text" name="projection2_three_{{ $three_row_id -> id }}" id="" value="{{ $three_row_id -> projection2_three }}"></td>
                            </tr>

                             @endforeach 

                            </tbody>
                        </table>
                        </ul>
                      </li>
                      <li> @foreach ($point_4_1 as $point_4_1)
                        <input type="hidden" name="unique_form_id" value="{{$point_4_1->unique_form_id}}">
                                  <input type="text" name="point_4_1_{{ $point_4_1 -> id }}" id="" value="{{ $point_4_1-> point_4_1}}">
                                  <input type="hidden" name="point_4_1_id" value="{{ $point_4_1-> id }}">
                              @endforeach
                        <ul>
                          <table border="1" width="100%">
                            <thead>
                                <tr>
                                    <td>অগ্রাধিকার ব্যয় খাত/কর্মসূচিসমূহ</td>
                                    <td>সংশ্লিষ্ট মধ্যমেয়াদি কৌশলগত উদ্দেশ্য</td>
                                </tr>

                                @foreach ($four_row_id as $four_row_id)
                                     <tr>
                                        <input type="hidden" name="unique_form_id" value="{{$four_row_id->unique_form_id}}">
                                       <input type="hidden" name="four_row_id[]" value="{{ $four_row_id->id  }}">
                                    <td width="50%">
                                      <textarea name="priority_expenditure_{{ $four_row_id->id  }}" id="" cols="100" rows="12">
                                       {{ $four_row_id ->priority_expenditure}}
                                      </textarea>
                                        </td>
                                    <td width="50%"> <input type="text" name="corresponding_objectives_{{ $four_row_id->id  }}" id="" value="{{ $four_row_id -> corresponding_objectives}}"></td>
                                </tr>
                                @endforeach
                               
                               
                            </thead>
                        </table>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li>
                        @foreach ($point_4_2 as $point_4_2)
                         <input type="hidden" name="unique_form_id" value="{{$point_4_2->unique_form_id}}">
                                  <input type="text" name="point_4_2_{{ $point_4_2 -> id }}" id="" value="{{ $point_4_2-> point_4_2}}">
                                  <input type="hidden" name="point_4_2_id" value="{{ $point_4_2-> id }}">
                              @endforeach
                       
                        <ul>
                          <li> @foreach ($point_4_2_1 as $point_4_2_1)
                             <input type="hidden" name="unique_form_id" value="{{$point_4_2_1->unique_form_id}}">
                                  <input type="text" name="point_4_2_1_{{ $point_4_2_1 -> id }}" id="" value="{{ $point_4_2_1-> point_4_2_1}}">
                                  <input type="hidden" name="point_4_2_1_id" value="{{ $point_4_2_1-> id }}">
                              @endforeach
                            <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">বিবরণ</td>
                                        <td>বাজেট</td>
                                        <td>সংশোধিত বাজেট</td>
                                        <td rowspan="2">বাজেট ২০১9-20</td>
                                        <td colspan="2">প্রক্ষেপণ</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১8-19</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($five_row_id as $five_row_id)
                                      <tr>
                                        <input type="text" name="five_row_id[]" value="{{ $five_row_id -> id }}">
                                    <input type="hidden" name="unique_form_id" value="{{$five_row_id->unique_form_id}}">
                                    <td><input type="text" name="description_five_{{ $five_row_id -> id }}" id="" value="{{ $five_row_id -> description_five }}"></td>
                                    <td><input type="text" name="budget_five_{{ $five_row_id -> id }}" id="" value="{{ $five_row_id -> budget_five }}"></td>
                                    <td><input type="text" name="revised_budget_five_{{ $five_row_id -> id }}" id="" value="{{ $five_row_id -> revised_budget_five }}"></td>
                                    <td><input type="text" name="budget2_five_{{ $five_row_id -> id }}" id="" value="{{ $five_row_id -> budget2_five }}"></td>
                                    <td><input type="text" name="projection1_five_{{ $five_row_id -> id }}" id="" value="{{ $five_row_id -> projection1_five }}"></td>
                                    <td><input type="text" name="projection2_five_{{ $five_row_id -> id }}" id="" value="{{ $five_row_id -> projection2_five }}"></td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                            </ul>
                          </li>
                        </ul>
                        <ul>
                          <li>@foreach ($point_4_2_2 as $point_4_2_2)
                            <input type="hidden" name="unique_form_id" value="{{$point_4_2_2->unique_form_id}}">
                                  <input type="text" name="point_4_2_2_{{ $point_4_2_2 -> id }}" id="" value="{{ $point_4_2_2-> point_4_2_2}}">
                                  <input type="hidden" name="point_4_2_2_id" value="{{ $point_4_2_2-> id }}">
                              @endforeach
                            <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">অর্থনৈতিক গ্রুপ কোড</td>
                                        <td rowspan="2">বিবরণ</td>
                                        <td>বাজেট</td>
                                        <td>সংশোধিত বাজেট</td>
                                        <td rowspan="2">বাজেট ২০১9-20</td>
                                        <td colspan="2">প্রক্ষেপণ</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১8-19</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($six_row_id as $six_row_id)
                                   <input type="hidden" name="unique_form_id" value="{{$six_row_id->unique_form_id}}">
                                      <tr>
                                        <input type="text" name="six_row_id[]" value="{{ $six_row_id -> id }}">
                                    <td><input type="text" name="ecconomic_group_code_{{ $six_row_id -> id }}" id="" value="{{ $six_row_id -> ecconomic_group_code }}"></td>
                                    <td><input type="text" name="description_six_{{ $six_row_id -> id }}" id="" value="{{ $six_row_id -> description_six }}"></td>
                                    <td><input type="text" name="budget_six_{{ $six_row_id -> id }}" id="" value="{{ $six_row_id -> budget_six }}"></td>
                                    <td><input type="text" name="revised_budget_six_{{ $six_row_id -> id }}" id="" value="{{ $six_row_id -> revised_budget_six }}"></td>
                                    <td><input type="text" name="budget2_six_{{ $six_row_id -> id }}" id="" value="{{ $six_row_id -> budget2_six }}"></td>
                                    <td><input type="text" name="projection1_six_{{ $six_row_id -> id }}" id="" value="{{ $six_row_id -> projection1_six }}"></td>
                                    <td><input type="text" name="projection2_six_{{ $six_row_id -> id }}" id="" value="{{ $six_row_id -> projection2_six }}"></td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li>
                        @foreach ($point_5_0 as $point_5_0)
                        <input type="hidden" name="unique_form_id" value="{{$point_5_0->unique_form_id}}">
                                  <input type="text" name="point_5_0_{{ $point_5_0 -> id }}" id="" value="{{ $point_5_0-> point_5_0}}">
                                  <input type="hidden" name="point_5_0_id" value="{{ $point_5_0-> id }}">
                              @endforeach
                        <ul>
                          <table border="1" width="100%">
                            <thead>
                                <tr>
                                    <td rowspan="2">নির্দেশক</td>
                                    <td rowspan="2">সংশ্লিষ্ট
                                        কৌশলগত উদ্দেশ্য
                                        </td>
                                    <td rowspan="2">পরিমাপের একক
                                        </td>
                                    <td>সংশোধিত লক্ষ্যমাত্রা</td>
                                    <td>প্রকৃত
                                        অর্জন
                                        </td>
                                    <td>লক্ষ্যমাত্রা</td>
                                    <td>সংশোধিত লক্ষ্যমাত্রা
                                        </td>
                                    <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                                </tr>
                                <tr>
                                    <td colspan="2">২০১7-১8</td>
                                    <td colspan="2">২০১8-১9</td>
                                    <td>2019-2020</td>
                                    <td>2020-2021</td>
                                    <td>2021-2022</td>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($seven_row_id as $seven_row_id)
                                         <tr> 
                                            <input type="hidden" name="unique_form_id" value="{{$seven_row_id->unique_form_id}}">
                                           <input type="hidden" name="seven_row_id[]" value="{{ $seven_row_id->id }}">
                                  <td>
                                    <textarea name="indicative_{{ $seven_row_id->id }}" id="" cols="30" rows="10">
                                      {{ $seven_row_id->indicative }}
                                    </textarea>
                                  </td>
                                  <td><input type="text" name="related_strategic_objectives_{{ $seven_row_id->id }}" id="" value="{{ $seven_row_id->related_strategic_objectives }}"></td>
                                  <td><input type="text" name="unit_measurement_{{ $seven_row_id->id }}" id="" value="{{ $seven_row_id->unit_measurement }}"></td>
                                  <td><input type="text" name="revised_target_{{ $seven_row_id->id }}" id="" value="{{ $seven_row_id->revised_target }}"></td>
                                  <td><input type="text" name="actual_achievement_{{ $seven_row_id->id }}" id="" value="{{ $seven_row_id->actual_achievement }}"></td>
                                  <td><input type="text" name="goals_{{ $seven_row_id->id }}" id="" value="{{ $seven_row_id->goals }}"></td>
                                  <td><input type="text" name="revised_goals_{{ $seven_row_id->id }}" id="" value="{{ $seven_row_id->revised_goals }}"></td>
                                  <td><input type="text" name="medium_term_targets_{{ $seven_row_id->id }}" id="" value="{{ $seven_row_id->medium_term_targets }}"></td>
                                  <td><input type="text" name="medium_term_targets1_{{ $seven_row_id->id }}" id="" value="{{ $seven_row_id->medium_term_targets1 }}"></td>
                                  <td><input type="text" name="medium_term_targets2_{{ $seven_row_id->id }}" id="" value="{{ $seven_row_id->medium_term_targets2 }}"></td>
                                </tr>
                              @endforeach
                         

                            </tbody>
                        </table>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li>
                         @foreach ($point_6_0 as $point_6_0)
                          <input type="hidden" name="unique_form_id" value="{{$point_6_0->unique_form_id}}">
                                  <input type="text" name="point_6_0_{{ $point_6_0 -> id }}" id="" value="{{ $point_6_0-> point_6_0}}">
                                  <input type="hidden" name="point_6_0_id" value="{{ $point_6_0-> id }}">
                              @endforeach
                      </li>
                      <li>
                          @foreach ($point_6_1 as $point_6_1)
                           <input type="hidden" name="unique_form_id" value="{{$point_6_1->unique_form_id}}">
                                  <input type="text" name="point_6_1_{{ $point_6_1 -> id }}" id="" value="{{ $point_6_1-> point_6_1}}">
                                  <input type="hidden" name="point_6_1_id" value="{{ $point_6_1-> id }}">
                              @endforeach
                        <ul>
                          <li> @foreach ($point_6_1_1 as $point_6_1_1)
                              <input type="hidden" name="unique_form_id" value="{{$point_6_1_1->unique_form_id}}">
                                  <input type="text" name="point_6_1_1_{{ $point_6_1_1 -> id }}" id="" value="{{ $point_6_1_1-> point_6_1_1}}">
                                  <input type="hidden" name="point_6_1_1_id" value="{{ $point_6_1_1-> id }}">
                              @endforeach
                          <li>
                             @foreach ($point_6_1_2 as $point_6_1_2)
                             <input type="hidden" name="unique_form_id" value="{{$point_6_1_2->unique_form_id}}">
                                  <input type="text" name="point_6_1_2_{{ $point_6_1_2 -> id }}" id="" value="{{ $point_6_1_2-> point_6_1_2}}">
                                  <input type="hidden" name="point_6_1_2_id" value="{{ $point_6_1_2-> id }}">
                              @endforeach
                            <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">কার্যক্রম</td>
                                        <td rowspan="2">ফলাফল নির্দেশক
                                            </td>
                                        <td rowspan="2">সংশিষ্ট কৌশলগত উদ্দেশ্য
                                            এর ক্রমিক
                                            
                                            </td>
                                        <td rowspan="2">পরিমাপের একক
                                            </td>
                                        <td>সংশোধিত লক্ষ্যমাত্রা</td>
                                        <td>প্রকৃত
                                            অর্জন
                                            </td>
                                        <td>লক্ষ্যমাত্রা</td>
                                        <td>সংশোধিত লক্ষ্যমাত্রা
                                            </td>
                                        <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১7-১8</td>
                                        <td colspan="2">২০১8-১9</td>
                                        <td>2019-2020</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($eight_row_id as $eight_row_id)
                                      
                                  
                                    <tr>
                                      <input type="hidden" name="unique_form_id" value="{{$eight_row_id->unique_form_id}}">
                                      <input type="hidden" name="eight_row_id[]" value="{{ $eight_row_id -> id }}">

                                      <td>
                                        <textarea name="pursuit_{{ $eight_row_id -> id }}" id="" cols="30" rows="10">
                                          {{ $eight_row_id -> pursuit }}
                                        </textarea>
                                        
                                        </td>


                                      <td><input type="text" name="results_indicative_{{ $eight_row_id -> id }}" id="" value="{{ $eight_row_id -> results_indicative }}"></td>


                                      <td><input type="text" name="sequence_respective_strategic_{{ $eight_row_id -> id }}" id="" value="{{ $eight_row_id -> sequence_respective_strategic }}"></td>


                                      <td><input type="text" name="measurement_unit_{{ $eight_row_id -> id }}" id="" value="{{ $eight_row_id -> measurement_unit }}"></td>


                                      <td><input type="text" name="revised_targets_eight_{{ $eight_row_id -> id }}" id="" value="{{ $eight_row_id -> revised_targets_eight }}"></td>

                                      <td><input type="text" name="actual_achievement_eight_{{ $eight_row_id -> id }}" id="" value="{{ $eight_row_id -> actual_achievement_eight }}"></td>

                                      <td><input type="text" name="goals_eight_{{$eight_row_id-> id }}" id="" value="{{$eight_row_id-> goals_eight }}"></td>

                                      <td><input type="text" name="revised_targets_eight_two_{{ $eight_row_id -> id }}" id="" value="{{ $eight_row_id -> revised_targets_eight_two }}"></td>


                                      <td><input type="text" name="medium_term_targets_eight_{{ $eight_row_id -> id }}" id="" value="{{ $eight_row_id -> medium_term_targets_eight }}"></td>


                                      <td><input type="text" name="medium_term_targets_eight1_{{ $eight_row_id -> id }}" id="" value="{{ $eight_row_id -> medium_term_targets_eight1 }}"></td>


                                      <td><input type="text" name="medium_term_targets_eight2_{{ $eight_row_id -> id }}" id="" value="{{ $eight_row_id -> medium_term_targets_eight2 }}"></td>
                                    </tr>

                                    @endforeach
                                  
                                </tbody>
                            </table>
                            </ul>
                          </li>
                          <li>
                              @foreach ($point_6_1_3 as $point_6_1_3)
                              <input type="hidden" name="unique_form_id" value="{{$point_6_1_3->unique_form_id}}">
                                  <input type="text" name="point_6_1_3_{{ $point_6_1_3 -> id }}" id="" value="{{ $point_6_1_3-> point_6_1_3}}">
                                  <input type="hidden" name="point_6_1_3_id" value="{{ $point_6_1_3-> id }}">
                              @endforeach
                            <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">অপারেশন ইউনিট, স্কিম এবং প্রকল্পের নাম</td>
                                        <td rowspan="2">সংশ্লিষ্ট কার্যক্রম
                                            </td>
                                        <td rowspan="2">প্রকৃত
                                            ২০১৭-১৮
                                            </td>
                                        <td>বাজেট</td>
                                        <td>সংশোধিত
                                            বাজেট
                                            </td>
                                        <td colspan="3">মধ্যমেয়াদি ব্যয় প্রাক্কলন</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১8-১9</td>
                                        <td>2019-2020</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($nine_row_id as $nine_row_id)
                                      
                                      
                                    <tr>
                                       <input type="hidden" name="unique_form_id" value="{{$nine_row_id->unique_form_id}}">
                                      <input type="hidden" name="nine_row_id[]" value="{{ $nine_row_id -> id }}">
                                      <td><input type="text" name="operation_name_{{ $nine_row_id -> id }}" id="" value="{{ $nine_row_id -> operation_name }}"></td>
                                      <td><input type="text" name="related_activities_{{ $nine_row_id -> id }}" id="" value="{{ $nine_row_id -> related_activities }}"></td>
                                      <td><input type="text" name="authentic_{{ $nine_row_id -> id }}" id="" value="{{ $nine_row_id -> authentic }}"></td>
                                      <td><input type="text" name="budget_nine_{{ $nine_row_id -> id }}" id="" value="{{ $nine_row_id -> budget_nine }}"></td>
                                      <td><input type="text" name="revised_budget_nine_{{ $nine_row_id -> id }}" id="" value="{{ $nine_row_id -> revised_budget_nine }}"></td>
                                      <td><input type="text" name="estimate_nine_{{ $nine_row_id -> id }}" id="" value="{{ $nine_row_id -> estimate_nine }}"></td>
                                      <td><input type="text" name="estimate_nine_1_{{ $nine_row_id -> id }}" id="" value="{{ $nine_row_id -> estimate_nine_1 }}"></td>
                                      <td><input type="text" name="estimate_nine_2_{{ $nine_row_id -> id }}" id="" value="{{ $nine_row_id -> estimate_nine_2 }}"></td>
                                    </tr>

                                     @endforeach

                                </tbody>
                            </table> 
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li>
                         @foreach ($point_6_2 as $point_6_2)
                          <input type="hidden" name="unique_form_id" value="{{$point_6_2->unique_form_id}}">
                                  <input type="text" name="point_6_2_{{ $point_6_2 -> id }}" id="" value="{{ $point_6_2-> point_6_2}}">
                                  <input type="hidden" name="point_6_2_id" value="{{ $point_6_2-> id }}">
                              @endforeach
                       
                        <ul>
                          
                          <li>
                            @foreach ($point_6_2_1 as $point_6_2_1)
                             <input type="hidden" name="unique_form_id" value="{{$point_6_2_1->unique_form_id}}">
                                  <input type="text" name="point_6_2_1_{{ $point_6_2_1 -> id }}" id="" value="{{ $point_6_2_1-> point_6_2_1}}">
                                  <input type="hidden" name="point_6_2_1_id" value="{{ $point_6_2_1-> id }}">
                              @endforeach
                          <li>  @foreach ($point_6_2_2 as $point_6_2_2)
                            <input type="hidden" name="unique_form_id" value="{{$point_6_2_2->unique_form_id}}">
                                  <input type="text" name="point_6_2_2_{{ $point_6_2_2 -> id }}" id="" value="{{ $point_6_2_2-> point_6_2_2}}">
                                  <input type="hidden" name="point_6_2_2_id" value="{{ $point_6_2_2-> id }}">
                              @endforeach
                            <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">কার্যক্রম</td>
                                        <td rowspan="2">ফলাফল নির্দেশক
                                            </td>
                                        <td rowspan="2">সংশিষ্ট কৌশলগত উদ্দেশ্য
                                            এর ক্রমিক
                                            
                                            </td>
                                        <td rowspan="2">পরিমাপের একক
                                            </td>
                                        <td>সংশোধিত লক্ষ্যমাত্রা</td>
                                        <td>প্রকৃত
                                            অর্জন
                                            </td>
                                        <td>লক্ষ্যমাত্রা</td>
                                        <td>সংশোধিত লক্ষ্যমাত্রা
                                            </td>
                                        <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১7-১8</td>
                                        <td colspan="2">২০১8-১9</td>
                                        <td>2019-2020</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>

                                  @foreach ($ten_row_id as $ten_row_id)
                                      <tr>
                                        <input type="hidden" name="unique_form_id" value="{{$ten_row_id->unique_form_id}}">
                                        <input type="hidden" name="ten_row_id[]" value="{{ $ten_row_id -> id }}">
                                          <td><input type="text" name="activities_ten_{{ $ten_row_id -> id }}" id="" value="{{ $ten_row_id -> activities_ten }}"></td>
                                          <td><input type="text" name="results_indicative_ten_{{ $ten_row_id -> id }}" id="" value="{{ $ten_row_id -> results_indicative_ten }}"></td>
                                          <td><input type="text" name="respective_strategic_ten_{{ $ten_row_id -> id }}" id="" value="{{ $ten_row_id -> respective_strategic_ten }}"></td>
                                          <td><input type="text" name="unit_measurement_ten_{{ $ten_row_id -> id }}" id="" value="{{ $ten_row_id -> unit_measurement_ten }}"></td>
                                          <td><input type="text" name="revised_targets1_ten_{{ $ten_row_id -> id }}" id="" value="{{ $ten_row_id -> revised_targets1_ten }}"></td>
                                          <td><input type="text" name="actual_achievement_ten_{{ $ten_row_id -> id }}" id="" value="{{ $ten_row_id -> actual_achievement_ten }}"></td>
                                          <td><input type="text" name="goals_ten_{{ $ten_row_id -> id }}" id="" value="{{ $ten_row_id -> goals_ten }}"></td>
                                          <td><input type="text" name="revised_targets2_ten_{{ $ten_row_id -> id }}" id="" value="{{ $ten_row_id -> revised_targets2_ten}}"></td>
                                          <td><input type="text" name="medium_target_ten_{{ $ten_row_id -> id }}" id="" value="{{ $ten_row_id -> medium_target_ten }}"></td>
                                          <td><input type="text" name="medium_target1_ten_{{ $ten_row_id -> id }}" id="" value="{{ $ten_row_id -> medium_target1_ten }}"></td>
                                          <td><input type="text" name="medium_target2_ten_{{ $ten_row_id -> id }}" id="" value="{{ $ten_row_id -> medium_target2_ten }}"></td>
                                    </tr>
                                  @endforeach
    

                                </tbody>
                            </table> 
                            </ul>
                          </li>
                          <li>
                            @foreach ($point_6_2_3 as $point_6_2_3)
                            <input type="hidden" name="unique_form_id" value="{{$point_6_2_3->unique_form_id}}">
                                  <input type="text" name="point_6_2_3_{{ $point_6_2_3 -> id }}" id="" value="{{ $point_6_2_3-> point_6_2_3}}">
                                  <input type="hidden" name="point_6_2_3_id" value="{{ $point_6_2_3-> id }}">
                              @endforeach
                            <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">অপারেশন ইউনিট, স্কিম এবং প্রকল্পের নাম</td>
                                        <td rowspan="2">সংশ্লিষ্ট কার্যক্রম
                                            </td>
                                        <td rowspan="2">প্রকৃত
                                            ২০১৭-১৮
                                            </td>
                                        <td>বাজেট</td>
                                        <td>সংশোধিত
                                            বাজেট
                                            </td>
                                        <td colspan="3">মধ্যমেয়াদি ব্যয় প্রাক্কলন</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১8-১9</td>
                                        <td>2019-2020</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($eleven_row_id as $eleven_row_id)
 <tr>
   <input type="hidden" name="unique_form_id" value="{{$eleven_row_id->unique_form_id}}">
     <input type="hidden" name="eleven_row_id[]" value="{{ $eleven_row_id -> id }}">
     <td><input type="text" name="operation_eleven_{{ $eleven_row_id -> id }}" value="{{ $eleven_row_id -> operation_eleven }}"></td>
     <td><input type="text" name="activities_eleven_{{ $eleven_row_id -> id }}" value="{{ $eleven_row_id -> activities_eleven }}"></td>
     <td><input type="text" name="authentic_eleven_{{ $eleven_row_id -> id }}" value="{{ $eleven_row_id -> authentic_eleven }}"></td>
     <td><input type="text" name="budget_eleven_{{ $eleven_row_id -> id }}" value="{{ $eleven_row_id -> budget_eleven }}"></td>
     <td><input type="text" name="revised_budget_eleven_{{ $eleven_row_id -> id }}" value="{{ $eleven_row_id -> revised_budget_eleven }}"></td>
     <td><input type="text" name="estimate_eleven_{{ $eleven_row_id -> id }}" value="{{ $eleven_row_id -> estimate_eleven }}"></td>
     <td><input type="text" name="estimate_eleven_1_{{ $eleven_row_id -> id }}" value="{{ $eleven_row_id -> estimate_eleven_1 }}"></td>
     <td><input type="text" name="estimate_eleven_2_{{ $eleven_row_id -> id }}" value="{{ $eleven_row_id -> estimate_eleven_2 }}"></td>
 </tr>
 @endforeach
                                </tbody>
                            </table>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li>
                         @foreach ($point_6_3 as $point_6_3)
                          <input type="hidden" name="unique_form_id" value="{{$point_6_3->unique_form_id}}">
                                  <input type="text" name="point_6_3_{{ $point_6_3 -> id }}" id="" value="{{ $point_6_3-> point_6_3}}">
                                  <input type="hidden" name="point_6_3_id" value="{{ $point_6_3-> id }}">
                              @endforeach
                        
                        <ul>
                          <li> @foreach ($point_6_3_1 as $point_6_3_1)
                             <input type="hidden" name="unique_form_id" value="{{$point_6_3_1->unique_form_id}}">
                                  <input type="text" name="point_6_3_1_{{ $point_6_3_1 -> id }}" id="" value="{{ $point_6_3_1-> point_6_3_1}}">
                                  <input type="hidden" name="point_6_3_1_id" value="{{ $point_6_3_1-> id }}">
                              @endforeach</li>
                          <li>
                          <li> @foreach ($point_6_3_2 as $point_6_3_2)
                             <input type="hidden" name="unique_form_id" value="{{$point_6_3_2->unique_form_id}}">
                                  <input type="text" name="point_6_3_2_{{ $point_6_3_2 -> id }}" id="" value="{{ $point_6_3_2-> point_6_3_2}}">
                                  <input type="hidden" name="point_6_3_2_id" value="{{ $point_6_3_2-> id }}">
                              @endforeach</li>
                           <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">কার্যক্রম</td>
                                        <td rowspan="2">ফলাফল নির্দেশক
                                            </td>
                                        <td rowspan="2">সংশিষ্ট কৌশলগত উদ্দেশ্য
                                            এর ক্রমিক
                                            
                                            </td>
                                        <td rowspan="2">পরিমাপের একক
                                            </td>
                                        <td>সংশোধিত লক্ষ্যমাত্রা</td>
                                        <td>প্রকৃত
                                            অর্জন
                                            </td>
                                        <td>লক্ষ্যমাত্রা</td>
                                        <td>সংশোধিত লক্ষ্যমাত্রা
                                            </td>
                                        <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১7-১8</td>
                                        <td colspan="2">২০১8-১9</td>
                                        <td>2019-2020</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>
                              @foreach ($twel_row_id as $twel_row_id)
                                      <tr>
                                         <input type="hidden" name="unique_form_id" value="{{$twel_row_id->unique_form_id}}">
                                        <input type="hidden" name="twel_row_id[]" value="{{ $twel_row_id -> id }}">
                                          <td><input type="text" name="activities_twel_{{ $twel_row_id -> id }}" id="" value="{{ $twel_row_id -> activities_twel }}"></td>
                                          <td><input type="text" name="results_indicative_twel_{{ $twel_row_id -> id }}" id="" value="{{ $twel_row_id -> results_indicative_twel }}"></td>
                                          <td><input type="text" name="respective_strategic_twel_{{ $twel_row_id -> id }}" id="" value="{{ $twel_row_id -> respective_strategic_twel }}"></td>
                                          <td><input type="text" name="unit_measurement_twel_{{ $twel_row_id -> id }}" id="" value="{{ $twel_row_id -> unit_measurement_twel }}"></td>
                                          <td><input type="text" name="revised_targets1_twel_{{ $twel_row_id -> id }}" id="" value="{{ $twel_row_id -> revised_targets1_twel }}"></td>
                                          <td><input type="text" name="actual_achievement_twel_{{ $twel_row_id -> id }}" id="" value="{{ $twel_row_id -> actual_achievement_twel }}"></td>
                                          <td><input type="text" name="goals_twel_{{ $twel_row_id -> id }}" id="" value="{{ $twel_row_id -> goals_twel }}"></td>
                                          <td><input type="text" name="revised_targets2_twel_{{ $twel_row_id -> id }}" id="" value="{{ $twel_row_id -> revised_targets2_twel }}"></td>
                                          <td><input type="text" name="medium_target_twel_{{ $twel_row_id -> id }}" id="" value="{{ $twel_row_id -> medium_target_twel }}"></td>
                                          <td><input type="text" name="medium_target1_twel_{{ $twel_row_id -> id }}" id="" value="{{ $twel_row_id -> medium_target1_twel }}"></td>
                                          <td><input type="text" name="medium_target2_twel_{{ $twel_row_id -> id }}" id="" value="{{ $twel_row_id -> medium_target2_twel }}"></td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table> 
                            </ul>
                          </li>
                          <li>
                            @foreach ($point_6_3_3 as $point_6_3_3)
                            <input type="hidden" name="unique_form_id" value="{{$point_6_3_3->unique_form_id}}">
                                  <input type="text" name="point_6_3_3_{{ $point_6_3_3 -> id }}" id="" value="{{ $point_6_3_3-> point_6_3_3}}">
                                  <input type="hidden" name="point_6_3_3_id" value="{{ $point_6_3_3-> id }}">
                              @endforeach                        
                            <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">অপারেশন ইউনিট, স্কিম এবং প্রকল্পের নাম</td>
                                        <td rowspan="2">সংশ্লিষ্ট কার্যক্রম
                                            </td>
                                        <td rowspan="2">প্রকৃত
                                            ২০১৭-১৮
                                            </td>
                                        <td>বাজেট</td>
                                        <td>সংশোধিত
                                            বাজেট
                                            </td>
                                        <td colspan="3">মধ্যমেয়াদি ব্যয় প্রাক্কলন</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১8-১9</td>
                                        <td>2019-2020</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>
 @foreach ($thirteen_row_id as $thirteen_row_id)
 <tr>
    <input type="hidden" name="unique_form_id" value="{{$thirteen_row_id->unique_form_id}}">
     <input type="hidden" name="thirteen_row_id[]" value="{{ $thirteen_row_id -> id }}">
     <td><input type="text" name="operation_thirteen_{{ $thirteen_row_id -> id }}" value="{{ $thirteen_row_id -> operation_thirteen }}"></td>
     <td><input type="text" name="activities_thirteen_{{ $thirteen_row_id -> id }}" value="{{ $thirteen_row_id -> activities_thirteen }}"></td>
     <td><input type="text" name="authentic_thirteen_{{ $thirteen_row_id -> id }}" value="{{ $thirteen_row_id -> authentic_thirteen }}"></td>
     <td><input type="text" name="budget_thirteen_{{ $thirteen_row_id -> id }}" value="{{ $thirteen_row_id -> budget_thirteen }}"></td>
     <td><input type="text" name="revised_budget_thirteen_{{ $thirteen_row_id -> id }}" value="{{ $thirteen_row_id -> revised_budget_thirteen }}"></td>
     <td><input type="text" name="estimate_thirteen_{{ $thirteen_row_id -> id }}" value="{{ $thirteen_row_id -> estimate_thirteen }}"></td>
     <td><input type="text" name="estimate_thirteen_1_{{ $thirteen_row_id -> id }}" value="{{ $thirteen_row_id -> estimate_thirteen_1 }}"></td>
     <td><input type="text" name="estimate_thirteen_2_{{ $thirteen_row_id -> id }}" value="{{ $thirteen_row_id -> estimate_thirteen_2 }}"></td>
 </tr>
 @endforeach


                                   
                                </tbody>
                            </table>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li>
                        @foreach ($point_6_4 as $point_6_4)
                    <input type="hidden" name="unique_form_id" value="{{$point_6_4->unique_form_id}}">
                     <input type="text" name="point_6_4_{{ $point_6_4 -> id }}" id="" value="{{ $point_6_4-> point_6_4}}">
                      <input type="hidden" name="point_6_4_id" value="{{ $point_6_4-> id }}">
                     @endforeach
                       <ul>
                          <li> 
                        @foreach ($point_6_4_1 as $point_6_4_1)
                        <input type="hidden" name="unique_form_id" value="{{$point_6_4_1->unique_form_id}}">
                     <input type="text" name="point_6_4_1_{{ $point_6_4_1 -> id }}" id="" value="{{ $point_6_4_1-> point_6_4_1}}">
                      <input type="hidden" name="point_6_4_1_id" value="{{ $point_6_4_1-> id }}">
                     @endforeach
                    </li>
                          <li>
                            @foreach ($point_6_4_2 as $point_6_4_2)
                             <input type="hidden" name="unique_form_id" value="{{$point_6_4_2->unique_form_id}}">
                     <input type="text" name="point_6_4_2_{{ $point_6_4_2 -> id }}" id="" value="{{ $point_6_4_2-> point_6_4_2}}">
                      <input type="hidden" name="point_6_4_2_id" value="{{ $point_6_4_2-> id }}">
                     @endforeach                           
                             <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">কার্যক্রম</td>
                                        <td rowspan="2">ফলাফল নির্দেশক
                                            </td>
                                        <td rowspan="2">সংশিষ্ট কৌশলগত উদ্দেশ্য
                                            এর ক্রমিক
                                            
                                            </td>
                                        <td rowspan="2">পরিমাপের একক
                                            </td>
                                        <td>সংশোধিত লক্ষ্যমাত্রা</td>
                                        <td>প্রকৃত
                                            অর্জন
                                            </td>
                                        <td>লক্ষ্যমাত্রা</td>
                                        <td>সংশোধিত লক্ষ্যমাত্রা
                                            </td>
                                        <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১7-১8</td>
                                        <td colspan="2">২০১8-১9</td>
                                        <td>2019-2020</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>
                              




 @foreach($fourteen_row_id as $fourteen_row_id)
                             <?php $sub_rows = count($fourteen_row_id->sub_rows) + 1?>
                        <tr class="row1">
                          <input type="hidden" name="unique_form_id" value="{{$fourteen_row_id->unique_form_id}}">
                             <input type="hidden" name="fourteen_row_id[]" value="{{$fourteen_row_id->id}}">
                             <td class="column0 style7 s"><input type="text" name="activities_fourteen_{{$fourteen_row_id->id}}" id="" value="{{$fourteen_row_id->activities_fourteen}}"></td>
                            <td class="column1 style7 s"><input type="text"  name="results_indicative_fourteen_{{$fourteen_row_id->id}}" id="" value="{{$fourteen_row_id->results_indicative_fourteen}}"></td>
                            <td class="column2 style7 s"><input type="text"  name="respective_strategic_fourteen_{{$fourteen_row_id->id}}" id="" value="{{$fourteen_row_id->respective_strategic_fourteen}}"></td>
                            <td class="column3 style56 n"><input type="text" name="unit_measurement_fourteen_{{$fourteen_row_id->id}}" id="" value="{{$fourteen_row_id->unit_measurement_fourteen}}"></td>
                            <td class="column4 style6 s"><input type="text"  name="revised_targets1_fourteen_{{$fourteen_row_id->id}}" id="" value="{{$fourteen_row_id->revised_targets1_fourteen}}"></td>
                            <td class="column4 style6 s"><input type="text"  name="revised_targets2_fourteen_{{$fourteen_row_id->id}}" id="" value="{{$fourteen_row_id->revised_targets2_fourteen}}"></td>
                            <td class="column4 style6 s"><input type="text"  name="actual_achievement_fourteen_{{$fourteen_row_id->id}}" id="" value="{{$fourteen_row_id->actual_achievement_fourteen}}"></td>
                            <td class="column5 style7 s"><input type="text"  name="goals_fourteen_{{$fourteen_row_id->id}}" id="" value="{{$fourteen_row_id->goals_fourteen}}">-</td>
                            <td class="column6 style7 s"><input type="text"  name="medium_target_fourteen_{{$fourteen_row_id->id}}" id="" value="{{$fourteen_row_id->medium_target_fourteen}}">-</td>
                            <td class="column7 style6 s"><input type="text"  name="medium_target1_fourteen_{{$fourteen_row_id->id}}" id="" value="{{$fourteen_row_id->medium_target1_fourteen}}"></td>
                            <td class="column7 style6 s"><input type="text"  name="medium_target2_fourteen_{{$fourteen_row_id->id}}" id="" value="{{$fourteen_row_id->medium_target2_fourteen}}"></td>
                          </tr>
                          @if(count($fourteen_row_id->sub_rows) != 0)                        
                          @foreach($fourteen_row_id->sub_rows as $subRow)
                               <tr class="row1">
                                  <input type="hidden" name="unique_form_id" value="{{$subRow->unique_form_id}}">
                             <input type="hidden" name="sub_fourteen_row_id[]" value="{{$subRow->id}}">
                            <td class="column1 style7 s" ><input type="text" name="sub_row_activities_fourteen_{{$subRow->id}}" id="" value="{{$subRow->activities_fourteen}}"></td>
                            <td class="column2 style7 s"><input type="text"  name="sub_row_results_indicative_fourteen_{{$subRow->id}}" id="" value="{{$subRow->results_indicative_fourteen}}"></td>
                            <td class="column3 style56 n"><input type="text" name="sub_row_respective_strategic_fourteen_{{$subRow->id}}" id="" value="{{$subRow->respective_strategic_fourteen}}"></td>
                            <td class="column4 style6 s"><input type="text"  name="sub_row_unit_measurement_fourteen_{{$subRow->id}}" id="" value="{{$subRow->unit_measurement_fourteen}}"></td>
                            <td class="column5 style7 s"><input type="text"  name="sub_row_revised_targets1_fourteen_{{$subRow->id}}" id="" value="{{$subRow->revised_targets1_fourteen}}">-</td>
                            <td class="column6 style7 s"><input type="text"  name="sub_row_revised_targets2_fourteen_{{$subRow->id}}" id="" value="{{$subRow->revised_targets2_fourteen}}">-</td>
                            <td class="column7 style6 s"><input type="text"  name="sub_row_actual_achievement_fourteen_{{$subRow->id}}" id="" value="{{$subRow->actual_achievement_fourteen}}"></td>
                            <td class="column7 style6 s"><input type="text"  name="sub_row_goals_fourteen_{{$subRow->id}}" id="" value="{{$subRow->goals_fourteen}}"></td>
                            <td class="column7 style6 s"><input type="text"  name="sub_row_medium_target_fourteen_{{$subRow->id}}" id="" value="{{$subRow->medium_target_fourteen}}"></td>
                            <td class="column7 style6 s"><input type="text"  name="sub_row_medium_target1_fourteen_{{$subRow->id}}" id="" value="{{$subRow->medium_target1_fourteen}}"></td>
                            <td class="column7 style6 s"><input type="text"  name="sub_row_medium_target2_fourteen_{{$subRow->id}}" id="" value="{{$subRow->medium_target2_fourteen}}"></td>
                          </tr>
                          @endforeach
                          @endif
                          @endforeach
                                   
                                </tbody>
                            </table> 
                            </ul>
                             <li>
                                 @foreach ($point_6_4_3 as $point_6_4_3)
                                  <input type="hidden" name="unique_form_id" value="{{$point_6_4_3->unique_form_id}}">
                     <input type="text" name="point_6_4_3_{{ $point_6_4_3 -> id }}" id="" value="{{ $point_6_4_3-> point_6_4_3}}">
                      <input type="hidden" name="point_6_4_3_id" value="{{ $point_6_4_3-> id }}">
                     @endforeach 
                                                       
                            <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">প্রাতিষ্ঠানিক ইউনিট, স্কিম এবং প্রকল্পের নাম</td>
                                        <td rowspan="2">সংশ্লিষ্ট কার্যক্রম
                                            </td>
                                        <td rowspan="2">প্রকৃত
                                            ২০১৭-১৮
                                            </td>
                                        <td>বাজেট</td>
                                        <td>সংশোধিত
                                            বাজেট
                                            </td>
                                        <td colspan="3">মধ্যমেয়াদি ব্যয় প্রাক্কলন</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১8-১9</td>
                                        <td>2019-2020</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fifteen_row_id as $fifteen_row_id)
 <tr>
   <input type="hidden" name="unique_form_id" value="{{$fifteen_row_id->unique_form_id}}">
     <input type="hidden" name="fifteen_row_id[]" value="{{ $fifteen_row_id -> id }}">
     <td><input type="text" name="operation_fifteen_{{ $fifteen_row_id -> id }}" value="{{ $fifteen_row_id -> operation_fifteen }}"></td>
     <td><input type="text" name="activities_fifteen_{{ $fifteen_row_id -> id }}" value="{{ $fifteen_row_id -> activities_fifteen }}"></td>
     <td><input type="text" name="authentic_fifteen_{{ $fifteen_row_id -> id }}" value="{{ $fifteen_row_id -> authentic_fifteen }}"></td>
     <td><input type="text" name="budget_fifteen_{{ $fifteen_row_id -> id }}" value="{{ $fifteen_row_id -> budget_fifteen }}"></td>
     <td><input type="text" name="revised_budget_fifteen_{{ $fifteen_row_id -> id }}" value="{{ $fifteen_row_id -> revised_budget_fifteen }}"></td>
     <td><input type="text" name="estimate_fifteen_{{ $fifteen_row_id -> id }}" value="{{ $fifteen_row_id -> estimate_fifteen }}"></td>
     <td><input type="text" name="estimate_fifteen_1_{{ $fifteen_row_id -> id }}" value="{{ $fifteen_row_id -> estimate_fifteen_1 }}"></td>
     <td><input type="text" name="estimate_fifteen_2_{{ $fifteen_row_id -> id }}" value="{{ $fifteen_row_id -> estimate_fifteen_2 }}"></td>
 </tr>
 @endforeach
                                </tbody>
                            </table>
                            </ul>
                          </li>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li>
                        @foreach ($point_6_5 as $point_6_5)
                         <input type="hidden" name="unique_form_id" value="{{$point_6_5->unique_form_id}}">
                     <input type="text" name="point_6_5_{{ $point_6_5 -> id }}" id="" value="{{ $point_6_5-> point_6_5}}">
                      <input type="hidden" name="point_6_5_id" value="{{ $point_6_5-> id }}">
                     @endforeach
                       
                      <ul>

                        @foreach ($point_6_5_1 as $point_6_5_1)
                         <input type="hidden" name="unique_form_id" value="{{$point_6_5_1->unique_form_id}}">
                     <input type="text" name="point_6_5_1_{{ $point_6_5_1 -> id }}" id="" value="{{ $point_6_5_1-> point_6_5_1}}">
                      <input type="hidden" name="point_6_5_1_id" value="{{ $point_6_5_1-> id }}">
                     @endforeach
                          <li>
                        @foreach ($point_6_5_2 as $point_6_5_2)
                        <input type="hidden" name="unique_form_id" value="{{$point_6_5_2->unique_form_id}}">
                     <input type="text" name="point_6_5_2_{{ $point_6_5_2 -> id }}" id="" value="{{ $point_6_5_2-> point_6_5_2}}">
                      <input type="hidden" name="point_6_5_2_id" value="{{ $point_6_5_2-> id }}">
                     @endforeach     
                                                       
                            <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">কার্যক্রম</td>
                                        <td rowspan="2">ফলাফল নির্দেশক
                                            </td>
                                        <td rowspan="2">সংশিষ্ট কৌশলগত উদ্দেশ্য
                                            এর ক্রমিক
                                            
                                            </td>
                                        <td rowspan="2">পরিমাপের একক
                                            </td>
                                        <td>সংশোধিত লক্ষ্যমাত্রা</td>
                                        <td>প্রকৃত
                                            অর্জন
                                            </td>
                                        <td>লক্ষ্যমাত্রা</td>
                                        <td>সংশোধিত লক্ষ্যমাত্রা
                                            </td>
                                        <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১7-১8</td>
                                        <td colspan="2">২০১8-১9</td>
                                        <td>2019-2020</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>

                @foreach ($sixteen_row_id as $sixteen_row_id)
                      <tr>
                        <input type="hidden" name="unique_form_id" value="{{$sixteen_row_id->unique_form_id}}">
                 <input type="hidden" name="sixteen_row_id[]" value="{{ $sixteen_row_id -> id }}">
                  <td>
                      <textarea name="activities_sixteen_{{ $sixteen_row_id -> id }}" id="" cols="30" rows="5">
                                         {{ $sixteen_row_id -> activities_sixteen }}                            
                                        </textarea>
                  </td>
                  <td>
                      <textarea name="results_indicative_sixteen_{{ $sixteen_row_id -> id }}" id="" cols="30" rows="5">
                                   {{ $sixteen_row_id -> results_indicative_sixteen }}                              
                                        </textarea>
                  </td>
                  <td><input type="text" name="respective_strategic_sixteen_{{ $sixteen_row_id -> id }}" id="" value="{{ $sixteen_row_id -> respective_strategic_sixteen }}"></td>
                  <td><input type="text" name="unit_measurement_sixteen_{{ $sixteen_row_id -> id }}" id="" value="{{ $sixteen_row_id -> unit_measurement_sixteen }}"></td>
                  <td><input type="text" name="revised_targets1_sixteen_{{ $sixteen_row_id -> id }}" id="" value="{{ $sixteen_row_id -> revised_targets1_sixteen }}"></td>
                  <td><input type="text" name="actual_achievement_sixteen_{{ $sixteen_row_id -> id }}" id="" value="{{ $sixteen_row_id -> actual_achievement_sixteen }}"></td>
                  <td><input type="text" name="goals_sixteen_{{ $sixteen_row_id -> id }}" id="" value="{{ $sixteen_row_id -> goals_sixteen }}"></td>
                  <td><input type="text" name="revised_targets2_sixteen_{{ $sixteen_row_id -> id }}" id="" value="{{ $sixteen_row_id -> revised_targets2_sixteen }}"></td>
                  <td><input type="text" name="medium_target_sixteen_{{ $sixteen_row_id -> id }}" id="" value="{{ $sixteen_row_id -> medium_target_sixteen }}"></td>
                  <td><input type="text" name="medium_target1_sixteen_{{ $sixteen_row_id -> id }}" id="" value="{{ $sixteen_row_id -> medium_target1_sixteen }}"></td>
                  <td><input type="text" name="medium_target2_sixteen_{{ $sixteen_row_id -> id }}" id="" value="{{ $sixteen_row_id -> medium_target2_sixteen }}"></td>
              </tr>
                @endforeach                  
               
                                </tbody>
                            </table> 
                            </ul>
                          </li>
                          <li>
                            @foreach ($point_6_5_3 as $point_6_5_3)
                              <input type="hidden" name="unique_form_id" value="{{$point_6_5_3->unique_form_id}}">
                     <input type="text" name="point_6_5_3_{{ $point_6_5_3 -> id }}" id="" value="{{ $point_6_5_3-> point_6_5_3}}">
                      <input type="hidden" name="point_6_5_3_id" value="{{ $point_6_5_3-> id }}">
                     @endforeach
                                                     
                            <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">অপারেশন ইউনিট, স্কিম এবং প্রকল্পের নাম</td>
                                        <td rowspan="2">সংশ্লিষ্ট কার্যক্রম
                                            </td>
                                        <td rowspan="2">প্রকৃত
                                            ২০১৭-১৮
                                            </td>
                                        <td>বাজেট</td>
                                        <td>সংশোধিত
                                            বাজেট
                                            </td>
                                        <td colspan="3">মধ্যমেয়াদি ব্যয় প্রাক্কলন</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১8-১9</td>
                                        <td>2019-2020</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>
 @foreach ($seventeen_row_id as $seventeen_row_id)
 <tr>
     <input type="hidden" name="unique_form_id" value="{{$seventeen_row_id->unique_form_id}}">
     <input type="hidden" name="seventeen_row_id[]" value="{{ $seventeen_row_id -> id }}">
     <td><input type="text" name="operation_seventeen_{{ $seventeen_row_id -> id }}" value="{{ $seventeen_row_id -> operation_seventeen }}"></td>
     <td><input type="text" name="activities_seventeen_{{ $seventeen_row_id -> id }}" value="{{ $seventeen_row_id -> activities_seventeen }}"></td>
     <td><input type="text" name="authentic_seventeen_{{ $seventeen_row_id -> id }}" value="{{ $seventeen_row_id -> authentic_seventeen }}"></td>
     <td><input type="text" name="budget_seventeen_{{ $seventeen_row_id -> id }}" value="{{ $seventeen_row_id -> budget_seventeen }}"></td>
     <td><input type="text" name="revised_budget_seventeen_{{ $seventeen_row_id -> id }}" value="{{ $seventeen_row_id -> revised_budget_seventeen }}"></td>
     <td><input type="text" name="estimate_seventeen_{{ $seventeen_row_id -> id }}" value="{{ $seventeen_row_id -> estimate_seventeen }}"></td>
     <td><input type="text" name="estimate_seventeen_1_{{ $seventeen_row_id -> id }}" value="{{ $seventeen_row_id -> estimate_seventeen_1 }}"></td>
     <td><input type="text" name="estimate_seventeen_2_{{ $seventeen_row_id -> id }}" value="{{ $seventeen_row_id -> estimate_seventeen_2 }}"></td>
 </tr>
 @endforeach
                                </tbody>
                            </table>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li>
                         @foreach ($point_6_6 as $point_6_6)
                          <input type="hidden" name="unique_form_id" value="{{$point_6_6->unique_form_id}}">
                     <input type="text" name="point_6_6_{{ $point_6_6 -> id }}" id="" value="{{ $point_6_6-> point_6_6}}">
                      <input type="hidden" name="point_6_6_id" value="{{ $point_6_6-> id }}">
                     @endforeach 
                      <ul>
                          <li>
                            @foreach ($point_6_6_1 as $point_6_6_1)
                              <input type="hidden" name="unique_form_id" value="{{$point_6_6_1->unique_form_id}}">
                     <input type="text" name="point_6_6_1_{{ $point_6_6_1 -> id }}" id="" value="{{ $point_6_6_1-> point_6_6_1}}">
                      <input type="hidden" name="point_6_6_1_id" value="{{ $point_6_6_1-> id }}">
                     @endforeach
                            
                            </li>
                          <li>
                            @foreach ($point_6_6_2 as $point_6_6_2)
                            <input type="hidden" name="unique_form_id" value="{{$point_6_6_2->unique_form_id}}">
                     <input type="text" name="point_6_6_2_{{ $point_6_6_2 -> id }}" id="" value="{{ $point_6_6_2-> point_6_6_2}}">
                      <input type="hidden" name="point_6_6_2_id" value="{{ $point_6_6_2-> id }}">
                     @endforeach
                                                       
                            <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">কার্যক্রম</td>
                                        <td rowspan="2">ফলাফল নির্দেশক
                                            </td>
                                        <td rowspan="2">সংশিষ্ট কৌশলগত উদ্দেশ্য
                                            এর ক্রমিক
                                            
                                            </td>
                                        <td rowspan="2">পরিমাপের একক
                                            </td>
                                        <td>সংশোধিত লক্ষ্যমাত্রা</td>
                                        <td>প্রকৃত
                                            অর্জন
                                            </td>
                                        <td>লক্ষ্যমাত্রা</td>
                                        <td>সংশোধিত লক্ষ্যমাত্রা
                                            </td>
                                        <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১7-১8</td>
                                        <td colspan="2">২০১8-১9</td>
                                        <td>2019-2020</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($eighteen_row_id as $eighteen_row_id)
                                        <tr>
                                          <input type="hidden" name="unique_form_id" value="{{$eighteen_row_id->unique_form_id}}">
                                          <input type="hidden" name="unique_form_id" value="{{$point_6_6_2->unique_form_id}}">
                                          <input type="hidden" name="eighteen_row_id[]" value="{{ $eighteen_row_id -> id }}">
                                      <td>
                                        <textarea name="activities_eighteen_{{ $eighteen_row_id -> id  }}" id="" cols="30" rows="5">
                                          {{ $eighteen_row_id -> activities_eighteen  }}                                      
                                        </textarea>
                                      </td>
                                      <td>
                                        <textarea name="results_indicative_eighteen_{{ $eighteen_row_id -> id  }}" id="" cols="30" rows="5">
                                         {{ $eighteen_row_id -> results_indicative_eighteen  }}                                       
                                         </textarea>
                                      </td>
                                      <td><input type="text" name="respective_strategic_eighteen_{{ $eighteen_row_id -> id  }}" id="" value="{{ $eighteen_row_id -> respective_strategic_eighteen  }}"></td>
                                      <td><input type="text" name="unit_measurement_eighteen_{{ $eighteen_row_id -> id  }}" id="" value="{{ $eighteen_row_id -> unit_measurement_eighteen  }}"></td>
                                      <td><input type="text" name="revised_targets1_eighteen_{{ $eighteen_row_id -> id  }}" id="" value="{{ $eighteen_row_id -> revised_targets1_eighteen  }}"></td>
                                      <td><input type="text" name="revised_targets2_eighteen_{{ $eighteen_row_id -> id  }}" id="" value="{{ $eighteen_row_id -> revised_targets2_eighteen  }}"></td>
                                      <td><input type="text" name="actual_achievement_eighteen_{{ $eighteen_row_id -> id  }}" id="" value="{{ $eighteen_row_id -> actual_achievement_eighteen  }}"></td>
                                      <td><input type="text" name="goals_eighteen_{{ $eighteen_row_id -> id  }}" id="" value="{{ $eighteen_row_id -> goals_eighteen  }}"></td>
                                      <td><input type="text" name="medium_target_eighteen_{{ $eighteen_row_id -> id  }}" id="" value="{{ $eighteen_row_id -> medium_target_eighteen  }}"></td>
                                      <td><input type="text" name="medium_target1_eighteen_{{ $eighteen_row_id -> id  }}" id="" value="{{ $eighteen_row_id -> medium_target1_eighteen  }}"></td>
                                      <td><input type="text" name="medium_target2_eighteen_{{ $eighteen_row_id -> id  }}" id="" value="{{ $eighteen_row_id -> medium_target2_eighteen  }}"></td>
                                    </tr>
                                    @endforeach
                                    


                                </tbody>
                            </table> 
                            </ul>
                          </li>
                          <li>
                            @foreach ($point_6_6_3 as $point_6_6_3)
                             <input type="hidden" name="unique_form_id" value="{{$point_6_6_3->unique_form_id}}">
                     <input type="text" name="point_6_6_3_{{ $point_6_6_3 -> id }}" id="" value="{{ $point_6_6_3-> point_6_6_3}}">
                      <input type="hidden" name="point_6_6_3_id" value="{{ $point_6_6_3-> id }}">
                     @endforeach
                                                       
                            <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">অপারেশন ইউনিট, স্কিম এবং প্রকল্পের নাম</td>
                                        <td rowspan="2">সংশ্লিষ্ট কার্যক্রম
                                            </td>
                                        <td rowspan="2">প্রকৃত
                                            ২০১৭-১৮
                                            </td>
                                        <td>বাজেট</td>
                                        <td>সংশোধিত
                                            বাজেট
                                            </td>
                                        <td colspan="3">মধ্যমেয়াদি ব্যয় প্রাক্কলন</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১8-১9</td>
                                        <td>2019-2020</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>
                       @foreach ($nineteen_row_id as $nineteen_row_id)
     <tr>
         <input type="hidden" name="unique_form_id" value="{{$nineteen_row_id->unique_form_id}}">
         <input type="hidden" name="nineteen_row_id[]" value="{{ $nineteen_row_id -> id }}">
         <td><input type="text" name="operation_nineteen_{{ $nineteen_row_id -> id }}" value="{{ $nineteen_row_id -> operation_nineteen }}"></td>
         <td><input type="text" name="activities_nineteen_{{ $nineteen_row_id -> id }}" value="{{ $nineteen_row_id -> activities_nineteen }}"></td>
         <td><input type="text" name="authentic_nineteen_{{ $nineteen_row_id -> id }}" value="{{ $nineteen_row_id -> authentic_nineteen }}"></td>
         <td><input type="text" name="budget_nineteen_{{ $nineteen_row_id -> id }}" value="{{ $nineteen_row_id -> budget_nineteen }}"></td>
         <td><input type="text" name="revised_budget_nineteen_{{ $nineteen_row_id -> id }}" value="{{ $nineteen_row_id -> revised_budget_nineteen }}"></td>
         <td><input type="text" name="estimate_nineteen_{{ $nineteen_row_id -> id }}" value="{{ $nineteen_row_id -> estimate_nineteen }}"></td>
         <td><input type="text" name="estimate_nineteen_1_{{ $nineteen_row_id -> id }}" value="{{ $nineteen_row_id -> estimate_nineteen_1 }}"></td>
         <td><input type="text" name="estimate_nineteen_2_{{ $nineteen_row_id -> id }}" value="{{ $nineteen_row_id -> estimate_nineteen_2 }}"></td>
     </tr>
     @endforeach
                                </tbody>
                            </table>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li>
                         @foreach ($point_6_7 as $point_6_7)
                         <input type="hidden" name="unique_form_id" value="{{$point_6_7->unique_form_id}}">
                     <input type="text" name="point_6_7_{{ $point_6_7 -> id }}" id="" value="{{ $point_6_7-> point_6_7}}">
                      <input type="hidden" name="point_6_7_id" value="{{ $point_6_7-> id }}">
                     @endforeach
                     </li>
                                            
                        <ul>
                          <li>
                          @foreach ($point_6_7_1 as $point_6_7_1)
                           <input type="hidden" name="unique_form_id" value="{{$point_6_7_1->unique_form_id}}">
                     <input type="text" name="point_6_7_1_{{ $point_6_7_1 -> id }}" id="" value="{{ $point_6_7_1-> point_6_7_1}}">
                      <input type="hidden" name="point_6_7_1_id" value="{{ $point_6_7_1-> id }}">
                     @endforeach
                     </li>
                          
                          <li>
                            @foreach ($point_6_7_2 as $point_6_7_2)
                             <input type="hidden" name="unique_form_id" value="{{$point_6_7_2->unique_form_id}}">
                     <input type="text" name="point_6_7_2_{{ $point_6_7_2 -> id }}" id="" value="{{ $point_6_7_2-> point_6_7_2}}">
                      <input type="hidden" name="point_6_7_2_id" value="{{ $point_6_7_2-> id }}">
                     @endforeach
                     </li
                                                      
                            <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">কার্যক্রম</td>
                                        <td rowspan="2">ফলাফল নির্দেশক
                                            </td>
                                        <td rowspan="2">সংশিষ্ট কৌশলগত উদ্দেশ্য
                                            এর ক্রমিক
                                            
                                            </td>
                                        <td rowspan="2">পরিমাপের একক
                                            </td>
                                        <td>সংশোধিত লক্ষ্যমাত্রা</td>
                                        <td>প্রকৃত
                                            অর্জন
                                            </td>
                                        <td>লক্ষ্যমাত্রা</td>
                                        <td>সংশোধিত লক্ষ্যমাত্রা
                                            </td>
                                        <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১7-১8</td>
                                        <td colspan="2">২০১8-১9</td>
                                        <td>2019-2020</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>
                                  
  @foreach($twenty_row_id as $twenty_row_id)
   <input type="hidden" name="unique_form_id" value="{{$twenty_row_id->unique_form_id}}">
                             <?php $sub_rows = count($twenty_row_id->sub_rows) + 1?>
                        <tr class="row1">
                             <input type="hidden" name="twenty_row_id[]" value="{{$twenty_row_id->id}}">
                             <td class="column0 style7 s"><input type="text" name="activities_twenty_{{$twenty_row_id->id}}" id="" value="{{$twenty_row_id->activities_twenty}}"></td>
                            <td class="column1 style7 s"><input type="text"  name="results_indicative_twenty_{{$twenty_row_id->id}}" id="" value="{{$twenty_row_id->results_indicative_twenty}}"></td>
                            <td class="column2 style7 s"><input type="text"  name="respective_strategic_twenty_{{$twenty_row_id->id}}" id="" value="{{$twenty_row_id->respective_strategic_twenty}}"></td>
                            <td class="column3 style56 n"><input type="text" name="unit_measurement_twenty_{{$twenty_row_id->id}}" id="" value="{{$twenty_row_id->unit_measurement_twenty}}"></td>
                            <td class="column4 style6 s"><input type="text"  name="revised_targets1_twenty_{{$twenty_row_id->id}}" id="" value="{{$twenty_row_id->revised_targets1_twenty}}"></td>
                            <td class="column4 style6 s"><input type="text"  name="revised_targets2_twenty_{{$twenty_row_id->id}}" id="" value="{{$twenty_row_id->revised_targets2_twenty}}"></td>
                            <td class="column4 style6 s"><input type="text"  name="actual_achievement_twenty_{{$twenty_row_id->id}}" id="" value="{{$twenty_row_id->actual_achievement_twenty}}"></td>
                            <td class="column5 style7 s"><input type="text"  name="goals_twenty_{{$twenty_row_id->id}}" id="" value="{{$twenty_row_id->goals_twenty}}">-</td>
                            <td class="column6 style7 s"><input type="text"  name="medium_target_twenty_{{$twenty_row_id->id}}" id="" value="{{$twenty_row_id->medium_target_twenty}}">-</td>
                            <td class="column7 style6 s"><input type="text"  name="medium_target1_twenty_{{$twenty_row_id->id}}" id="" value="{{$twenty_row_id->medium_target1_twenty}}"></td>
                            <td class="column7 style6 s"><input type="text"  name="medium_target2_twenty_{{$twenty_row_id->id}}" id="" value="{{$twenty_row_id->medium_target2_twenty}}"></td>
                          </tr>
                          @if(count($twenty_row_id->sub_rows) != 0)                        
                          @foreach($twenty_row_id->sub_rows as $subRow)
                               <tr class="row1">
                                 <input type="hidden" name="unique_form_id" value="{{$subRow->unique_form_id}}">
                             <input type="hidden" name="sub_twenty_row_id[]" value="{{$subRow->id}}">
                            <td class="column1 style7 s" ><input type="text" name="sub_row_activities_twenty_{{$subRow->id}}" id="" value="{{$subRow->activities_twenty}}"></td>
                            <td class="column2 style7 s"><input type="text"  name="sub_row_results_indicative_twenty_{{$subRow->id}}" id="" value="{{$subRow->results_indicative_twenty}}"></td>
                            <td class="column3 style56 n"><input type="text" name="sub_row_respective_strategic_twenty_{{$subRow->id}}" id="" value="{{$subRow->respective_strategic_twenty}}"></td>
                            <td class="column4 style6 s"><input type="text"  name="sub_row_unit_measurement_twenty_{{$subRow->id}}" id="" value="{{$subRow->unit_measurement_twenty}}"></td>
                            <td class="column5 style7 s"><input type="text"  name="sub_row_revised_targets1_twenty_{{$subRow->id}}" id="" value="{{$subRow->revised_targets1_twenty}}">-</td>
                            <td class="column6 style7 s"><input type="text"  name="sub_row_revised_targets2_twenty_{{$subRow->id}}" id="" value="{{$subRow->revised_targets2_twenty}}">-</td>
                            <td class="column7 style6 s"><input type="text"  name="sub_row_actual_achievement_twenty_{{$subRow->id}}" id="" value="{{$subRow->actual_achievement_twenty}}"></td>
                            <td class="column7 style6 s"><input type="text"  name="sub_row_goals_twenty_{{$subRow->id}}" id="" value="{{$subRow->goals_twenty}}"></td>
                            <td class="column7 style6 s"><input type="text"  name="sub_row_medium_target_twenty_{{$subRow->id}}" id="" value="{{$subRow->medium_target_twenty}}"></td>
                            <td class="column7 style6 s"><input type="text"  name="sub_row_medium_target1_twenty_{{$subRow->id}}" id="" value="{{$subRow->medium_target1_twenty}}"></td>
                            <td class="column7 style6 s"><input type="text"  name="sub_row_medium_target2_twenty_{{$subRow->id}}" id="" value="{{$subRow->medium_target2_twenty}}"></td>
                          </tr>
                          @endforeach
                          @endif
                          @endforeach


                                
                                </tbody>
                            </table> 
                            </ul>
                          </li>
                          <li>
                            @foreach ($point_6_7_3 as $point_6_7_3)
                             <input type="hidden" name="unique_form_id" value="{{$point_6_7_3->unique_form_id}}">
                     <input type="text" name="point_6_7_3_{{ $point_6_7_3 -> id }}" id="" value="{{ $point_6_7_3-> point_6_7_3}}">
                      <input type="hidden" name="point_6_7_3_id" value="{{ $point_6_7_3-> id }}">
                     @endforeach
                                                       
                            <ul>
                              <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <td rowspan="2">অপারেশন ইউনিট, স্কিম এবং প্রকল্পের নাম</td>
                                        <td rowspan="2">সংশ্লিষ্ট কার্যক্রম
                                            </td>
                                        <td rowspan="2">প্রকৃত
                                            ২০১৭-১৮
                                            </td>
                                        <td>বাজেট</td>
                                        <td>সংশোধিত
                                            বাজেট
                                            </td>
                                        <td colspan="3">মধ্যমেয়াদি ব্যয় প্রাক্কলন</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">২০১8-১9</td>
                                        <td>2019-2020</td>
                                        <td>2020-2021</td>
                                        <td>2021-2022</td>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($twentyone_row_id as $twentyone_row_id)
                                        
                                 
                                    <tr>
                                      <input type="hidden" name="unique_form_id" value="{{$twentyone_row_id->unique_form_id}}">
                          <input type="hidden" name="twentyone_row_id[]" value="{{ $twentyone_row_id -> id }}">
                          <td><input type="text" name="operation_twentyone_{{ $twentyone_row_id -> id }}" value="{{ $twentyone_row_id -> operation_twentyone }}"></td>
                          <td><input type="text" name="activities_twentyone_{{ $twentyone_row_id -> id }}" value="{{ $twentyone_row_id -> activities_twentyone }}"></td>
                          <td><input type="text" name="authentic_twentyone_{{ $twentyone_row_id -> id }}" value="{{ $twentyone_row_id -> authentic_twentyone }}"></td>
                          <td><input type="text" name="budget_twentyone_{{ $twentyone_row_id -> id }}" value="{{ $twentyone_row_id -> budget_twentyone }}"></td>
                          <td><input type="text" name="revised_budget_twentyone_{{ $twentyone_row_id -> id }}" value="{{ $twentyone_row_id -> revised_budget_twentyone }}"></td>
                          <td><input type="text" name="estimate_twentyone_{{ $twentyone_row_id -> id }}" value="{{ $twentyone_row_id -> estimate_twentyone }}"></td>
                          <td><input type="text" name="estimate_twentyone_1_{{ $twentyone_row_id -> id }}" value="{{ $twentyone_row_id -> estimate_twentyone_1 }}"></td>
                          <td><input type="text" name="estimate_twentyone_2_{{ $twentyone_row_id -> id }}" value="{{ $twentyone_row_id -> estimate_twentyone_2 }}"></td>
                        </tr>

                         @endforeach
                                </tbody>
                            </table>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  
              </div>
              <div class="mt-4 mb-4 input-final">
               @foreach ($userforms as $userforms)
         @if ($userforms->duration > date('Y-m-d'))
             <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
              <button type="submit" class="btn btn-danger">সংশোধন</button>
         @endif
                 @endforeach
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
                        url: "{{url("update-form-appendix_seven_update")}}",
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
