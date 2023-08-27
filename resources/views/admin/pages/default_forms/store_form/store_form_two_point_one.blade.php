
        <style>
/*        .rel-26{
            margin-top: 50px;
            margin-bottom: 50px;
        }*/
/*       input[type="text"] {
                  border: none;
              }*/
    </style>
<?php
 
?>


<div class="content">

    <div class="page-inner">
      
        
    

        <form id="submitForm" method="POST">
            @csrf
            <input type="hidden" name="form_unique_id" class="form_unique_id" value="{{$form_data['unique_form_id']}}">
            <input type="hidden" name="unit_office_to" value="{{$form_data['unit_office_to']}}">
            <input type="hidden" name="unit_office" value="{{$form_data['unit_office']}}">
            <input type="hidden" name="office" value="{{$form_data['office']}}">
            <input type="hidden" name="department" value="{{$form_data['department']}}">
            <input type="hidden" name="ministry" value="{{$form_data['ministry']}}">
            <input type="hidden" name="form_id" value="{{$form_data['form_id']}}">
            <input type="hidden" name="form_year" value="{{$form_data['form_year']}}">
            <input type="hidden" name="quarter" value="{{$form_data['quarter']}}">
            <div class="rel-26">
                <h3>২.১ বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ){{$form_data['form_year']}} এর {{$form_data['quarter']}} অর্জন (সেকশন-৩):</h3>   
                <table border="1" width="100%" id="myTable">
                     <thead>
                          <tr>
                              <td rowspan="2">কার্যক্রম</td>
                              <td rowspan="2">কর্মসম্পাদন সূচক</td>
                              <td rowspan="2">একক</td>
                              <td rowspan="2">কর্মসম্পাদন সূচকের মান</td>
                              <td rowspan="2">বাৎসরিক লক্ষ্যমাত্রা ২০২১-২২</td>
                              <td colspan="5">অর্জন</td>
                              <td rowspan="2">বাস্তবায়নের জন্য দায়িত্বপ্রাপ্ত শাখা</td>
                          </tr>
                          <tr>
                              <td>(জানুয়ারি ২০২১-মার্চ ২০২২)Q1</td>
                              <td>(এপ্রিল   ২০২১-জুন ২০২২)Q2</td>
                              <td>(জুলাই   ২০২১-সেপ্টেম্বর ২০২২)Q3</td>
                              <td>(অক্টোবর   ২০২১-সেপ্টেম্বর ২০২২)Q3</td>
                              <td>total</td>
                              
                          </tr>
                      </thead>
                      <tbody>
                        <tr class="row1">
                             {{-- <input type="hidden" name="row_id" value="1"> --}}

                             <td><textarea name="activities_1" id="" cols="30" rows="10">
                               [১.১] হাউস বিল্ডিং ফাইনান্স কর্পোরেশন আইন, ২০২০ (সংশোধন) প্রণয়ন
                             </textarea></td>


                             <td><textarea name="performance_index_1" id="" cols="30" rows="10">
                               [১.১.১] গেজেটে প্রকাশিত
                             </textarea></td>
                             
                           
                            
                            <td class="column2 style7 s"><textarea name="unit_1" id="" cols="30" rows="10">তারিখ</textarea></td>
                            <td class="column3 style56 n"><textarea name="performance_index_values_1" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style6 s"><textarea name="annual_target_1" id="" cols="30" rows="10">৩০-০৪-২০২২</textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition1_1" id="txtCal1" cols="30" rows="10">-</textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_1" id="txtCal1" cols="30" rows="10">-</textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_1" id="txtCal1" cols="30" rows="10">-</textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_1" id="txtCal1" cols="30" rows="10">-</textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_1" id="total_sum_value_1" cols="30" rows="10"></textarea></td>
                            <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control" id="" name="branch_responsible_implementation_1">
                                          <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row2">
                          <input type="hidden" name="row_id" value="2">
                            <td class="column0 style7 s">
                              <textarea name="activities_2" id="" cols="30" rows="10">
                                    [১.২] পল্লী সঞ্চয় ব্যাংক কর্মচারি চাকরি প্রবিধানমালা প্রণয়ন
                              </textarea>
                              
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_2" id="" cols="30" rows="10">
                                "[১.২.১] প্রশাসনিক উন্নয়ন সংক্রান্ত সচিব কমিটিতে প্রেরিত"
                              </textarea>
                              
                            </td>
                            <td class="column2 style7 s"><textarea name="unit_2" id="" cols="30" rows="10">তারিখ</textarea></td>
                            <td class="column3 style56 n"><textarea name="performance_index_values_2" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style6 s"><textarea name="annual_target_2" id="" cols="30" rows="10">৩১-০৫-২০২২</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_2" id="txtCal2" cols="30" rows="10">-</textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_2" id="txtCal2" cols="30" rows="10">-</textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_2" id="txtCal2" cols="30" rows="10">-</textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_2" id="txtCal2" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_2" id="total_sum_value_2" cols="30" rows="10"></textarea></td>
                               <td class="column7 style6 s">
                                         <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_2">
                                        <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row3">
                          <input type="hidden" name="row_id" value="3">
                            <td class="column0 style7 s">
                              <textarea name="activities_3" id="" cols="30" rows="10">
                                [১.৩] কর্মসংস্থান ব্যাংক কর্মচারি চাকরি প্রবিধানমালা প্রণয়ন
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_3" id="" cols="30" rows="10">
                                [১.৩.১] ভেটিং এর জন্য লেজিসলেটিভ ও সংসদ বিষয়ক বিভাগে প্রেরিত
                              </textarea>

                              
                            </td>
                            <td class="column2 style7 s"><textarea name="unit_3" id="" cols="30" rows="10">তারিখ</textarea></td>
                            <td class="column3 style56 n"><textarea name="performance_index_values_3" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style6 s"><textarea name="annual_target_3" id="" cols="30" rows="10">৩০-০৫-২০২</textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition1_3" id="txtCal3" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_3" id="txtCal3" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_3" id="txtCal3" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_3" id="txtCal3" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_3" id="total_sum_value_3" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                         <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_3">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row4">
                          <input type="hidden" name="row_id" value="4">
                            <td class="column0 style7 s">
                              <textarea name="activities_4" id="" cols="30" rows="10">
                                [১.৪] ফাইন্যান্স কোম্পানি আইন প্রণয়ন
                              </textarea>

                              
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_4" id="" cols="30" rows="10">
                                [১.৪.১] ভেটিং এর জন্য লেজিসলেটিভ ও সংসদ বিষয়ক বিভাগে প্রেরিত
                              </textarea>

                            </td>
                            <td class="column2 style6 s"><textarea name="unit_4" id="" cols="30" rows="10">তারিখ</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_4" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style6 s"><textarea name="annual_target_4" id="" cols="30" rows="10">৩০-০৫-২০২২</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_4" id="txtCal4" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_4" id="txtCal4" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_4" id="txtCal4" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_4" id="txtCal4" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_4" id="total_sum_value_4" cols="30" rows="10"></textarea></td>
                            <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_4">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row5">
                          <input type="hidden" name="row_id" value="5">
                            <td class="column0 style7 s">
                              <textarea name="activities_5" id="" cols="30" rows="10">
                                [১.৫] এ্যাসেট ম্যানেজমেন্ট কর্পোরেশন আইন প্রণয়ন
                              </textarea>

                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_5" id="" cols="30" rows="10">
                                [১.৫.১] মন্ত্রিসভায় নীতিগত অনুমোদনের জন্য প্রেরিত
                              </textarea>

                            </td>
                            <td class="column2 style6 s"><textarea name="unit_5" id="" cols="30" rows="10">তারিখ</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_5" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style6 s"><textarea name="annual_target_5" id="" cols="30" rows="10">৩০-০৪-২০২২</textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition1_5" id="txtCal5" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_5" id="txtCal5" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_5" id="txtCal5" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_5" id="txtCal5" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_5" id="total_sum_value_5" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_5">
                                        <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row6">
                          <input type="hidden" name="row_id" value="6">
                            <td class="column0 style7 s">
                              <textarea name="activities_6" id="" cols="30" rows="10">
                                [১.৬] ব্যাংক কোম্পানি আইন সংশোধন
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_6" id="" cols="30" rows="10">
                                [১.৬.১] ভেটিং এর জন্য লেজিসলেটিভ ও সংসদ বিষয়ক বিভাগে প্রেরিত
                              </textarea>

                            </td>
                            <td class="column2 style6 s"><textarea name="unit_6" id="" cols="30" rows="10">তারিখ</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_6" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style6 s"><textarea name="annual_target_6" id="" cols="30" rows="10">৩০-০৪-২০২২</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_6" id="txtCal6" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_6" id="txtCal6" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_6" id="txtCal6" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_6" id="txtCal6" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_6" id="total_sum_value_6" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_6">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row7">
                          <input type="hidden" name="row_id" value="7">
                            <td class="column0 style7 s">
                              <textarea name="activities_7" id="" cols="30" rows="10">
                                [১.৭] ব্যাংক আমানত বীমা (সংশোধন) আইন, ২০২১ প্রণয়ন
                              </textarea>

                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_7" id="" cols="30" rows="10">
                                [১.৭.১] ভেটিং এর জন্য লেজিসলেটিভ ও সংসদ বিষয়ক বিভাগে প্রেরিত
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_7" id="" cols="30" rows="10">তারিখ</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_7" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style6 s"><textarea name="annual_target_7" id="" cols="30" rows="10">৩১-০৫-২০২২</textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition1_7" id="txtCal7" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_7" id="txtCal7" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_7" id="txtCal7" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_7" id="txtCal7" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_7" id="total_sum_value_7" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_7">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row8">
                          <input type="hidden" name="row_id" value="8">
                            <td class="column0 style5 s style5" rowspan="2">
                              <textarea name="activities_8" id="" cols="30" rows="10">
                                [১.৮] বীমা বিষয়ক বিধিমালা/ প্রবিধানমালা প্রণয়ন
                              </textarea>

                     
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_8" id="" cols="30" rows="10">
                                [১.৮.১] ভেটিং এর জন্য লেজিসলেটিভ ও সংসদ বিষয়ক বিভাগে প্রেরিত
                              </textarea>

                            </td>
                            <td class="column2 style6 s"><textarea name="unit_8" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_8" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_8" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition1_8" id="txtCal8" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_8" id="txtCal8" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_8" id="txtCal8" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_8" id="txtCal8" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_8" id="total_sum_value_8" cols="30" rows="10"></textarea></td>
                            <td class="column7 style6 s">
                                         <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_8">
                                          <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row8">
                          <input type="hidden" name="row_id_8_1" value="8">
                            <td class="column1 style7 s">
                              <textarea name="performance_index_8_1" id="" cols="30" rows="10">
                                [১.৮.২] গেজেটে প্রকাশিত
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_8_1" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_8_1" id="" cols="30" rows="10">1</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_8_1" id="" cols="30" rows="10">2</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_8_1" id="txtCal8_1" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_8_1" id="txtCal8_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_8_1" id="txtCal8_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_8_1" id="txtCal8_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_8_1" id="total_sum_value_8_1" cols="30" rows="10"></textarea></td>
                            <td class="column7 style6 s">
                                         <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_8_1">
                                        <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row9">
                          <input type="hidden" name="row_id" value="9">
                            <td class="column0 style7 s">
                              <textarea name="activities_9" id="" cols="30" rows="10">
                                [১.৯] বিভাগের কর্মচারীদের সক্ষমতার উন্নয়নে সমসাময়িক বিষয়ে লার্নিং সেশন আয়োজন
                              </textarea>

                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_9" id="" cols="30" rows="10">
                                [১.৯.১] লার্নিং সেশন আয়োজিত
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_9" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_9" id="" cols="30" rows="10">1</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_9" id="" cols="30" rows="10">6</textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition1_9" id="txtCal9" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_9" id="txtCal9" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_9" id="txtCal9" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_9" id="txtCal9" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_9" id="total_sum_value_9" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_9">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row10">
                          <input type="hidden" name="row_id" value="10">
                            <td class="column0 style7 s">
                              <textarea name="activities_10" id="" cols="30" rows="10">
                                [২.১] রাষ্ট্র মালিকানাধীন বাণিজ্যিক ব্যাংকসমূহের শ্রেণিকৃত ঋণের পরিমাণ হ্রাসকরণ
                              </textarea>

                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_10" id="" cols="30" rows="10">
                                [২.১.১] শ্রেণিকৃত ঋণের পরিমাণ
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_10" id="" cols="30" rows="10">হাজার কোটি টাকা</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_10" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style9 n"><textarea name="annual_target_10" id="" cols="30" rows="10">40.50</textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition1_10" id="txtCal10" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_10" id="txtCal10" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_10" id="txtCal10" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_10" id="txtCal10" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_10" id="total_sum_value_10" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_10">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row11">
                          <input type="hidden" name="row_id" value="11">
                            <td class="column0 style59 s style61" rowspan="3">
                              <textarea name="activities_11" id="" cols="30" rows="10">
                                [২.২] ব্যাংকের মাধ্যমে ঋণ বিতরণ ও আদায় কার্যক্রম তত্ত্বাবধান
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_11" id="" cols="30" rows="10">
                                [২.২.১] বিতরণকৃত কৃষিঋণ
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_11" id="" cols="30" rows="10">হাজার কোটি টাকা</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_11" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_11" id="" cols="30" rows="10">24</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_11" id="txtCal11" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_11" id="txtCal11" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_11" id="txtCal11" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_11" id="txtCal11" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_11" id="total_sum_value_11" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_11">
                                          <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row11">
                          <input type="hidden" name="row_id_11_1" value="11">
                            <td class="column1 style7 s">
                              <textarea name="performance_index_11_1" id="" cols="30" rows="10">
                                [২.২.২] বিতরণকৃত বঙ্গবন্ধু যুবঋণ
                              </textarea>
                              </td>
                            <td class="column2 style7 s"><textarea name="unit_11_1" id="সংখ্যা (হাজার)" cols="30" rows="10"></textarea></td>
                            <td class="column3 style56 n"><textarea name="performance_index_values_11_1" id="" cols="30" rows="10"></textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_11_1" id="" cols="30" rows="10">25</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_11_1" id="txtCal11_1" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_11_1" id="txtCal11_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_11_1" id="txtCal11_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_11_1" id="txtCal11_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_11_1" id="total_sum_value_11_1" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_11_1">
                                        <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row11">
                          <input type="hidden" name="row_id_11_2" value="11">
                            <td class="column1 style7 s">
                              <textarea name="performance_index_11_2" id="" cols="30" rows="10">
                                [২.২.৩] বিতরণকৃত এসএমই ঋণ
                              </textarea>
                            <td class="column2 style6 s"><textarea name="unit_11_2" id="" cols="30" rows="10">হাজার কোটি টাকা</textarea></td>
                            <td class="column3 style6 s"><textarea name="performance_index_values_11_2" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style6 s"><textarea name="annual_target_11_2" id="" cols="30" rows="10">165</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_11_2" id="txtCal11_2" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_11_2" id="txtCal11_2" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_11_2" id="txtCal11_2" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_11_2" id="txtCal11_2" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_11_2" id="total_sum_value_11_2" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_11_2">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row12">
                          <input type="hidden" name="row_id" value="12">
                            <td class="column0 style5 s style5" rowspan="2">
                              <textarea name="activities_12" id="" cols="30" rows="10">
                                [২.৩] নারী উদ্যোক্তাদের মধ্যে এসএমই ঋণ বিতরণ কার্যক্রম তত্ত্বাবধান
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_12" id="" cols="30" rows="10">
                                [২.৩.১] বিতরণকৃত ঋণের পরিমাণ
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_12" id="" cols="30" rows="10">কোটি টাকা</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_12" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_12" id="" cols="30" rows="10">745</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_12" id="txtCal12" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_12" id="txtCal12" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_12" id="txtCal12" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_12" id="txtCal12" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_12" id="total_sum_value_12" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_12">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row12">
                          <input type="hidden" name="row_id_12_1" value="12">
                            <td class="column1 style7 s">
                              <textarea name="performance_index_12_1" id="" cols="30" rows="10">
                                [২.৩.২] নতুন উদ্যোক্তার সংখ্যা
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_12_1" id="" cols="30" rows="10">সংখ্যা (হাজার)</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_12_1" id="" cols="30" rows="10">1</textarea></td>
                            <td class="column4 style9 n"><textarea name="annual_target_12_1" id="" cols="30" rows="10">11.50</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_12_1" id="txtCal12_1" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_12_1" id="txtCal12_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_12_1" id="txtCal12_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_12_1" id="txtCal12_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_12_1" id="total_sum_value_12_1" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_12_1">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row13">
                          <input type="hidden" name="row_id" value="13">
                            <td class="column0 style7 s">
                              <textarea name="activities_13" id="" cols="30" rows="10">
                                [২.৪] এজেন্ট ব্যাংকিং কার্যক্রম সম্প্রসারণ
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_13" id="" cols="30" rows="10">
                                [২.৪.১] নতুন গ্রাহক সংখ্যা
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_13" id="" cols="30" rows="10">সংখ্যা (লক্ষ)</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_13" id="" cols="30" rows="10">1</textarea></td>
                            <td class="column4 style9 n"><textarea name="annual_target_13" id="" cols="30" rows="10">23.50</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_13" id="txtCal13" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_13" id="txtCal13" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_13" id="txtCal13" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_13" id="txtCal13" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_13" id="total_sum_value_13" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_13">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row14">
                          <input type="hidden" name="row_id" value="14">
                            <td class="column0 style7 s">
                              <textarea name="activities_14" id="" cols="30" rows="10">
                                [২.৫] ব্যাংকের মাধ্যমে সামাজিক নিরাপত্তার সুবিধা প্রদান
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_14" id="" cols="30" rows="10">
                                [২.৫.১] সুবিধা গ্রহণকারীর সংখ্যা
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_14" id="" cols="30" rows="10">সংখ্যা (লক্ষ)</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_14" id="" cols="30" rows="10">1</textarea></td>
                            <td class="column4 style9 n"><textarea name="annual_target_14" id="" cols="30" rows="10">25.10</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_14" id="txtCal14" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_14" id="txtCal14" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_14" id="txtCal14" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_14" id="txtCal14" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_14" id="total_sum_value_14" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_14">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row15">
                          <input type="hidden" name="row_id" value="15">
                            <td class="column0 style5 s style5" rowspan="2">
                              <textarea name="activities_15" id="" cols="30" rows="10">
                                [২.৬] বিভাগ কর্তৃক ব্যাংকিং কার্যক্রম তত্ত্বাবধান ও গৃহীত সিদ্ধান্ত বাস্তবায়ন
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_15" id="" cols="30" rows="10">
                                [২.৬.১] শ্রেণিকৃত ঋণের হার হ্রাসকরণের উদ্দেশ্যে বিভাগে আয়োজিত সভার সংখ্যা
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_15" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_15" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_15" id="" cols="30" rows="10">4</textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition1_15" id="txtCal15" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_15" id="txtCal15" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_15" id="txtCal15" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_15" id="txtCal15" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_15" id="total_sum_value_15" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_15">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row15">
                          <input type="hidden" name="row_id_15_1" value="15">
                            <td class="column1 style7 s">
                              <textarea name="performance_index_15_1" id="" cols="30" rows="10">
                                [২.৬.২] সভায় গৃহীত সিদ্ধান্ত বাস্তবায়ন
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_15_1" id="" cols="30" rows="10">%</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_15_1" id="" cols="30" rows="10">1</textarea></td>
                            <td class="column4 style12 n"><textarea name="annual_target_15_1" id="" cols="30" rows="10">$-5000445]0.2f%</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_15_1" id="txtCal15_1" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_15_1" id="txtCal15_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_15_1" id="txtCal15_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_15_1" id="txtCal15_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_15_1" id="total_sum_value_15_1" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_15_1">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row16">
                          <input type="hidden" name="row_id" value="16">
                            <td class="column0 style7 s">
                              <textarea name="activities_16" id="" cols="30" rows="10">
                                [৩.১] দেশব্যাপী ফাইন্যান্সিয়াল লিটারেসি ও বিনিয়োগকারীগণের প্রশিক্ষণ প্রদান
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_16" id="" cols="30" rows="10">
                                [৩.১.১] কার্যক্রমে অংশগ্রহণকারী
                              </textarea>
                             </td>
                            <td class="column2 style6 s"><textarea name="unit_16" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_16" id="" cols="30" rows="10">3</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_16" id="" cols="30" rows="10">7000</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_16" id="txtCal16" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_16" id="txtCal16" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_16" id="txtCal16" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_16" id="txtCal16" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_16" id="total_sum_value_16" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_16">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row17">
                          <input type="hidden" name="row_id" value="17">
                            <td class="column0 style7 s">
                              <textarea name="activities_17" id="" cols="30" rows="10">
                                [৩.২] মূলধন উত্তোলনের লক্ষ্যে আইপিও/ আরপিও/রাইট/ ডেট সিকিউরিটিজ ইস্যুকরণ
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_17" id="" cols="30" rows="10">
                                [৩.২.১] আইপিও/ আরপিও/ রাইট/ডেট সিকিউরিটিজ ইস্যুকৃত
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_17" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_17" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_17" id="" cols="30" rows="10">20</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_17" id="txtCal17" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_17" id="txtCal17" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_17" id="txtCal17" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_17" id="txtCal17" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_17" id="total_sum_value_17" cols="30" rows="10"></textarea></td>
                            <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_17">
                                          <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row18">
                          <input type="hidden" name="row_id" value="18">
                            <td class="column0 style7 s">
                              <textarea name="activities_18" id="" cols="30" rows="10">
                                [৩.৩] CMDP-III প্রকল্পের আওতায় BSEC অটোমেশন বাস্তবায়ন
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_18" id="" cols="30" rows="10">
                                [৩.৩.১] বাস্তবায়নের হার
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_18" id="" cols="30" rows="10">%</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_18" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_18" id="" cols="30" rows="10">80</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_18" id="txtCal18" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_18" id="txtCal18" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_18" id="txtCal18" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_18" id="txtCal18" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_18" id="total_sum_value_18" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_18">
                                        <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row19">
                          <input type="hidden" name="row_id" value="19">
                            <td class="column0 style7 s">
                              <textarea name="activities_19" id="" cols="30" rows="10">
                                [৩.৪] পোস্ট গ্র্যাজুয়েট ডিপ্লোমা ইন ক্যাপিটাল মার্কেট বিষয়ক প্রশিক্ষণ
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_19" id="" cols="30" rows="10">
                                [৩.৪.১] অংশগ্রহণকারী উপকারভোগী
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_19" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                            <td class="column3 style8 n"><textarea name="" id="performance_index_values_19" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_19" id="" cols="30" rows="10">30</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_19" id="txtCal19" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_19" id="txtCal19" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_19" id="txtCal19" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_19" id="txtCal19" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_19" id="total_sum_value_19" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_19">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row20">
                          <input type="hidden" name="row_id" value="20">
                            <td class="column0 style7 s">
                              <textarea name="activities_20" id="" cols="30" rows="10">
                                [৩.৫] সার্টিফিকেট কোর্স অন ক্যাপিটাল মার্কেট
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_20" id="" cols="30" rows="10">
                                [৩.৫.১] আয়োজিত প্রোগ্রাম
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_20" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_20" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_20" id="" cols="30" rows="10">22</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_20" id="txtCal20" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_20" id="txtCal20" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_20" id="txtCal20" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_20" id="txtCal20" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_20" id="total_sum_value_20" cols="30" rows="10"></textarea></td>
                            <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_20">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row21">
                          <input type="hidden" name="row_id" value="21">
                            <td class="column0 style5 s style5" rowspan="2">
                              <textarea name="activities_21" id="" cols="30" rows="10">
                                [৩.৬] বিভাগ কর্তৃক পুঁজিবাজার কার্যক্রম তত্ত্বাবধান ও গৃহীত সিদ্ধান্ত বাস্তবায়ন
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_21" id="" cols="30" rows="10">
                                [৩.৬.১] পুঁজিবাজারের বিনিয়োগ বৃদ্ধির উদ্দেশ্যে বিভাগে আয়োজিত সভার সংখ্যা
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_21" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_21" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_21" id="" cols="30" rows="10">4</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_21" id="txtCal21" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_21" id="txtCal21" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_21" id="txtCal21" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_21" id="txtCal21" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_21" id="total_sum_value_21" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_21">
                                       <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row21">
                          <input type="hidden" name="row_id_21_1" value="21">
                            <td class="column1 style7 s">
                              <textarea name="performance_index_21_1" id="" cols="30" rows="10">
                                [৩.৬.২] সভায় গৃহীত সিদ্ধান্ত বাস্তবায়ন
                              </textarea>
                            </td>
                            <td class="column2 style6 s">
                              <textarea name="unit_21_1" id="" cols="30" rows="10">%</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_21_1" id="" cols="30" rows="10">1</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_21_1" id="" cols="30" rows="10">100</textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition1_21_1" id="txtCal21_1" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_21_1" id="txtCal21_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_21_1" id="txtCal21_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_21_1" id="txtCal21_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_21_1" id="total_sum_value_21_1" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_21_1">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row22">
                          <input type="hidden" name="row_id" value="22">
                            <td class="column0 style7 s">
                              <textarea name="activities_22" id="" cols="30" rows="10">
                                [৪.১] 'বঙ্গবন্ধু শিক্ষা বীমা' বাস্তবায়ন
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_22" id="" cols="30" rows="10">
                                [৪.১.১] ‘বঙ্গবন্ধু শিক্ষা বীমা’ নতুন গ্রাহক সংখ্যা
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_22" id="" cols="30" rows="10">সংখ্যা (হাজার)</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_22" id="" cols="30" rows="10">3</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_22" id="" cols="30" rows="10">50</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_22" id="txtCal22" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_22" id="txtCal22" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_22" id="txtCal22" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_22" id="txtCal22" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_22" id="total_sum_value_22" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_22">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row23">
                          <input type="hidden" name="row_id" value="23">
                            <td class="column0 style7 s">
                              <textarea name="activities_23" id="" cols="30" rows="10">
                                [৪.২] 'বঙ্গবন্ধু সুরক্ষা বীমা' বাস্তবায়ন
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_23" id="" cols="30" rows="10">
                                [৪.২.১] 'বঙ্গবন্ধু সুরক্ষা বীমা' নতুন গ্রাহক সংখ্যা
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_23" id="" cols="30" rows="10">সংখ্যা (হাজার)</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_23" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style13 n"><textarea name="annual_target_23" id="" cols="30" rows="10">2.5</textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition1_23" id="txtCal23" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_23" id="txtCal23" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_23" id="txtCal23" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_23" id="txtCal23" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_23" id="total_sum_value_23" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_23">
                                        <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row24">
                          <input type="hidden" name="row_id" value="24">
                            <td class="column0 style7 s">
                              <textarea name="activities_24" id="" cols="30" rows="10">
                                [৪.৩] বীমা বিষয়ে প্রশিক্ষণ প্রদান
                              </textarea>
                      
                            <td class="column1 style7 s">
                              <textarea name="performance_index_24" id="" cols="30" rows="10">
                                [৪.৩.১] প্রশিক্ষিত জনবল
                              </textarea>
                         
                            <td class="column2 style6 s"><textarea name="unit_24" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_24" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_24" id="" cols="30" rows="10">800</textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition1_24" id="txtCal24" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_24" id="txtCal24" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_24" id="txtCal24" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_24" id="txtCal24" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_24" id="total_sum_value_24" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_24">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row25">
                          <input type="hidden" name="row_id" value="25">
                            <td class="column0 style7 s">
                              <textarea name="activities_25" id="" cols="30" rows="10">
                                [৪.৪] বীমা বিষয়ে জনসচেতনতা বৃদ্ধি
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_25" id="" cols="30" rows="10">
                                [৪.৪.১] আয়োজিত ওয়ার্কশপ/সেমিনার
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_25" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_25" id="" cols="30" rows="10">1</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_25" id="" cols="30" rows="10">8</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_25" id="txtCal25" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_25" id="txtCal25" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_25" id="txtCal25" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_25" id="txtCal25" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_25" id="total_sum_value_25" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_25">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row26">
                          <input type="hidden" name="row_id" value="26">
                            <td class="column0 style7 s">
                              <textarea name="activities_26" id="" cols="30" rows="10">
                                [৪.৫] বীমা দাবী নিষ্পত্তির হার বৃদ্ধি
                              </textarea>
                              
                            <td class="column1 style7 s">
                              <textarea name="performance_index_26" id="" cols="30" rows="10">
                                [৪.৫.১] নিষ্পত্তিকৃত দাবির হার
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_26" id="" cols="30" rows="10">%</textarea></td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_26" id="" cols="30" rows="10">1</textarea></td>
                            <td class="column4 style13 n"><textarea name="annual_target_26" id="" cols="30" rows="10">70.5</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_26" id="txtCal26" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_26" id="txtCal26" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_26" id="txtCal26" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_26" id="txtCal26" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_26" id="total_sum_value_26" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_26">
                                       <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row27">
                          <input type="hidden" name="row_id" value="27">
                            <td class="column0 style5 s style5" rowspan="2">
                              <textarea name="activities_27" id="" cols="30" rows="10">
                                [৪.৬] বিভাগ কর্তৃক বীমা কার্যক্রম তত্ত্বাবধান ও গৃহীত সিদ্ধান্ত বাস্তবায়ন
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_27" id="" cols="30" rows="10">
                                [৪.৬.১] বীমা দাবী নিস্পত্তির হার বৃদ্ধির উদ্দেশ্যে বিভাগে আয়োজিত সভার সংখ্যা
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_27" id="" cols="30" rows="10">সংখ্যা</textarea> </td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_27" id="" cols="30" rows="10">2</textarea></td>
                            <td class="column4 style8 n"><textarea name="annual_target_27" id="" cols="30" rows="10">4</textarea> </td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_27" id="txtCal27" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_27" id="txtCal27" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_27" id="txtCal27" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_27" id="txtCal27" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_27" id="total_sum_value_27" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_27">
                                          <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row27">
                          <input type="hidden" name="row_id_27_1" value="27">
                            <td class="column1 style7 s">
                              <textarea name="performance_index_27_1" id="" cols="30" rows="10">
                                [৪.৬.২] সভায় গৃহীত সিদ্ধান্ত বাস্তবায়ন
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_27_1" id="" cols="30" rows="10">%</textarea> </td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_27_1" id="" cols="30" rows="10">1</textarea> </td>
                            <td class="column4 style8 n"><textarea name="annual_target_27_1" id="" cols="30" rows="10">100</textarea> </td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_27_1" id="txtCal27_1" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_27_1" id="txtCal27_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_27_1" id="txtCal27_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_27_1" id="txtCal27_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_27_1" id="total_sum_value_27_1" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_27_1">
                                          <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row28">
                          <input type="hidden" name="row_id" value="28">
                            <td class="column0 style5 s style5" rowspan="2">
                              <textarea name="activities_28" id="" cols="30" rows="10">
                                [৫.১] ক্ষুদ্রঋণ বিতরণ ও আদায় কার্যক্রম তত্ত্বাবধান
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_28" id="" cols="30" rows="10">
                                [৫.১.১] বিতরণকৃত ক্ষুদ্রঋণ
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_28" id="" cols="30" rows="10">হাজার কোটি টাকা</textarea> </td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_28" id="" cols="30" rows="10">3</textarea> </td>
                            <td class="column4 style8 n"><textarea name="annual_target_28" id="" cols="30" rows="10">170</textarea> </td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_28" id="txtCal28" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_28" id="txtCal28" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_28" id="txtCal28" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_28" id="txtCal28" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_28" id="total_sum_value_28" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_28">
                                          <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row28">
                          <input type="hidden" name="row_id_28_1" value="28">
                            <td class="column1 style7 s">
                              <textarea name="performance_index_28_1" id="" cols="30" rows="10">
                                [৫.১.২] আদায়কৃত ক্ষুদ্রঋণ
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_28_1" id="" cols="30" rows="10">হাজার কোটি টাকা</textarea> </td>
                            <td class="column3 style8 n"><textarea name="performance_index_values_28_1" id="" cols="30" rows="10">3</textarea> </td>
                            <td class="column4 style9 n"><textarea name="annual_target_28_1" id="" cols="30" rows="10">152.50</textarea> </td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition1_28_1" id="txtCal28_1" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_28_1" id="txtCal28_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_28_1" id="txtCal28_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_28_1" id="txtCal28_1" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_28_1" id="total_sum_value_28_1" cols="30" rows="10"></textarea></td>
                            <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_28_1">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row29">
                          <input type="hidden" name="row_id" value="29">
                            <td class="column0 style7 s">
                              <textarea name="activities_29" id="" cols="30" rows="10">
                                [৫.২] এমএফআই সুবিধাভোগীদের সংখ্যা বৃদ্ধি
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_29" id="" cols="30" rows="10">
                                [৫.২.১] সুবিধাভোগীর সংখ্যা
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_29" id="" cols="30" rows="10">সংখ্যা (লক্ষ) [ক্রমপুঞ্জিভুত]</textarea> </td>
                            <td class="column3 style56 n"><textarea name="performance_index_values_29" id="" cols="30" rows="10">2</textarea> </td>
                            <td class="column4 style8 n"><textarea name="annual_target_29" id="" cols="30" rows="10">335</textarea> </td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition1_29" id="txtCal29" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_29" id="txtCal29" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_29" id="txtCal29" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_29" id="txtCal29" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_29" id="total_sum_value_29" cols="30" rows="10"></textarea></td>
                            <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_29">
                                         <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row30">
                          <input type="hidden" name="row_id" value="30">
                            <td class="column0 style7 s">
                              <textarea name="activities_30" id="" cols="30" rows="10">
                                [৫.৩] নারীদের মধ্যে ক্ষুদ্রঋণ বিতরণ কার্যক্রম তত্ত্বাবধান
                              </textarea>
                            </td>
                            <td class="column1 style7 s">
                              <textarea name="performance_index_30" id="" cols="30" rows="10">
                                [৫.৩.১] ক্ষুদ্রঋণ গ্রহণকারী নারীর সংখ্যা
                              </textarea>
                            </td>
                            <td class="column2 style6 s"><textarea name="unit_30" id="" cols="30" rows="10">সংখ্যা (লক্ষ) [ক্রমপুঞ্জিভুত]</textarea> </td>
                            <td class="column3 style56 n"><textarea name="performance_index_values_30" id="" cols="30" rows="10">2</textarea> </td>
                            <td class="column4 style8 n"><textarea name="annual_target_30" id="" cols="30" rows="10">240</textarea> </td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition1_30" id="txtCal30" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="acquisition2_30" id="txtCal30" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition3_30" id="txtCal30" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition4_30" id="txtCal30" cols="30" rows="10"></textarea></td>
                            <td class="column6 style7 s"><textarea class="total_sum_value" type="number" name="total_sum_value_30" id="total_sum_value_30" cols="30" rows="10"></textarea></td>
                             <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_30">
                                       <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                          </tr>
                          <tr class="row31">
                          <input type="hidden" name="row_id" value="31">
                            <td class="column0 style14 s style14" colspan="2"><input type="text" name="activities_31" id="" value="কৌশলগত উদ্দেশ্য মোট= (৩৯টি সূচক)"> </td>
                            <td class="column2 style15 null"></td>
                            <td class="column3 style16 n"><input type="text" name="performance_index_values_31" id="" value="70"> </td>
                            <td class="column4 style17 null"></td>
                            <td class="column5 style17 null"></td>
                            <td class="column6 style17 null"></td>
                            <td class="column7 style17 null"></td>
                          </tr>
                      </tbody>
                </table>
            </div>
            
        <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
        <button type="" class="btn btn-danger">সংশোধন</button>
          </form>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#basic-datatable').DataTable({
        });
    });
    $("#submitForm").submit(function (e) {
        e.preventDefault();
        $('#loader').show();
        $(".error_msg").html('');
        var data = new FormData($('#submitForm')[0]);

        if (confirm("Do you want store this form??") == true) {
           
               $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{url("store-form-2.1")}}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {
            alert('Form Submitted Successfully!');
            $('#loader').hide();
           location.reload();
            }
        }).done(function () {
            $("#success_msg").html("Data Save Successfully");
          //  window.location.href = "{{url("store-form-2.1")}}";
            location.reload();
        }).fail(function (data, textStatus, jqXHR) {
            $('#loader').hide();
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function (key, value) {
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });

} else {
          text = "You canceled!";
}

       
    });


    $(function () {
        let tbl = $('#myTable');
        tbl.find('tr').each(function () {
            // $this = this;
            $(this).find('textarea[type=number]').bind("keyup", function () {
                calculateSum();
            });
        });

        function calculateSum() {
            let tbl = $('#myTable');
            tbl.find('tr').each(function () {
                let sum = 0;
                $(this).find('textarea[type=number]').not('.total_sum_value').each(function () {
                    if (!isNaN(this.value) && this.value.length != 0) {
                        sum += parseFloat(this.value);
                    }
                });

                $(this).find('.total_sum_value').val(sum.toFixed(2));
            });
        }
    });  
</script>
