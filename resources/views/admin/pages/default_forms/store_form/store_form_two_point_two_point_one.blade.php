
        <style>
  
input{
                  border: none;
              }
    </style>
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
                      <div class="rel-26">
                          <h3>২.২.১ মন্ত্রণালয়/বিভাগ/রাষ্ট্রীয় প্রতিষ্ঠানের জাতীয় শুদ্ধাচার কৌশল কর্মপরিকল্পনা, {{$form_data['form_year']}}</h3>
                          <table border="1" width="100%" id="myTable">
                            <thead>
                                <tr>
                                    <td rowspan="2"><input type="text" name="" id="" value="কার্যক্রম"> </td>
                                    <td rowspan="2"><input type="text" name="" id="" value="কর্মসম্পাদন সূচক"> </td>
                                    <td rowspan="2"><input type="text" name="" id="" value="একক"> </td>
                                    <td rowspan="2"><input type="text" name="" id="" value="কর্মসম্পাদন সূচকের মান"> </td>
                                    <td rowspan="2"><input type="text" name="" id="" value="বাৎসরিক লক্ষ্যমাত্রা ২০২১-২২"> </td>
                                    <td colspan="5"><input type="text" name="" id="" value="অর্জন"> </td>
                                    <td rowspan="2"><input type="text" name="" id="" value="বাস্তবায়নের জন্য দায়িত্বপ্রাপ্ত ব্যাক্তি/পদ"> </td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="" id="" value="(জুলাই-সেপ্টেম্বর ২০২১)"> </td>
                                    <td><input type="text" name="" id="" value="(জুলাই ২০২১- জুন ২০২২)"> </td>
                                    <td><input type="text" name="" id="" value="(জুলাই ২০২১- জুন ২০২২)"> </td>
                                    <td><input type="text" name="" id="" value="(জুলাই ২০২১- জুন ২০২২)"> </td>
                                    <td><input type="text" name="" id="" value="total"> </td>
                                </tr>
                            </thead>
                            <tbody>
                              <div>
                                  <tr class="row49">
                                  <input type="hidden" name="row_id" value="1">
                                    <td class="column0 style22 s"><textarea name="activities_1" id="" cols="30" rows="10">১.১ নৈতিকতা কমিটির সভা আয়োজন</textarea>  </td>
                                    <td class="column1 style22 s"><textarea name="performance_index_1" id="" cols="30" rows="10">সভা আয়োজিত</textarea> </td>
                                    <td class="column2 style23 s"><textarea name="unit_1" id="" cols="30" rows="10">সংখ্যা</textarea> </td>
                                    <td class="column3 style24 n"><textarea name="performance_index_values_1" id="" cols="30" rows="10">4</textarea> </td>
                                    <td class="column4 style24 n"><textarea name="annual_target_1" id="" cols="30" rows="10">4</textarea> </td>
                                    <td class="column5 style24 n"><textarea type="number" name="acquisition1_1" cols="30" rows="10">1</textarea> </td>
                                    <td class="column6 style24 n"><textarea type="number" name="acquisition2_1" cols="30" rows="10">1</textarea> </td>
                                    <td class="column6 style24 n"><textarea type="number" name="acquisition3_1" cols="30" rows="10">1</textarea> </td>
                                    <td class="column6 style24 n"><textarea type="number" name="acquisition4_1" cols="30" rows="10">1</textarea> </td>
                                    <td class="column6 style24 n"><textarea class="total_sum_value" type="number" name="total_sum_value_1"  cols="30" rows="10">1</textarea> </td>
                                    <td class="column7 style23 s"> <div class="form-group">
                                                  <label for="exampleFormControlSelect1">Select Division</label>
                                                  <select class="form-control select2" id="" name="branch_responsible_implementation_1">
                                                    <option selected >Select Division</option>
                                                    @foreach ($testybro as $division)
                                                        <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                                    @endforeach
                             
                                                  </select>
                                                </div>
                                      </td>
                                  </tr>
                                  <tr class="row50">
                                  <input type="hidden" name="row_id" value="2">    
                                    <td class="column0 style22 s"><textarea name="activities_2" id="" cols="30" rows="10">১.২ নৈতিকতা কমিটির সভার সিদ্ধান্ত বাস্তবায়ন</textarea> </td>
                                    <td class="column1 style22 s"><textarea name="performance_index_2" id="" cols="30" rows="10">বাস্তবায়িত সিদ্ধান্ত</textarea> </td>
                                    <td class="column2 style23 s"><textarea name="unit_2" id="" cols="30" rows="10">%</textarea></td>
                                    <td class="column3 style24 n"><textarea name="performance_index_values_2" id="" cols="30" rows="10">6</textarea> </td>
                                    <td class="column4 style25 n"><textarea name="annual_target_2" id="" cols="30" rows="10">$-5000445]0.2f%</textarea> </td>
                                    <td class="column5 style25 n"><textarea type="number" name="acquisition1_2"  cols="30" rows="10">$-5000445]0.2f%</textarea> </td>
                                    <td class="column6 style25 n"><textarea type="number" name="acquisition2_2"  cols="30" rows="10">$-5000445]0.2f%</textarea> </td>
                                    <td class="column6 style25 n"><textarea type="number" name="acquisition3_2"  cols="30" rows="10">$-5000445]0.2f%</textarea> </td>
                                    <td class="column6 style25 n"><textarea type="number" name="acquisition4_2"  cols="30" rows="10">$-5000445]0.2f%</textarea> </td>
                                    <td class="column6 style25 n"><textarea  class="total_sum_value" name="total_sum_value_2" id="_2" cols="30" rows="10">$-5000445]0.2f%</textarea> </td>
                                    <td class="column7 style23 s"> <div class="form-group">
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
                                  <tr class="row51">
                                      <input type="hidden" name="row_id" value="3">
                                    <td class="column0 style22 s"><textarea name="activities_3" id="" cols="30" rows="10">১.৩ সুশাসন প্রতিষ্ঠার নিমিত্ত অংশীজনের (stakeholders) অংশগ্রহণে  সভা</textarea></td>
                                    <td class="column1 style22 s"><textarea name="performance_index_3" id="" cols="30" rows="10">অনুষ্ঠিত সভা</textarea> </td>
                                    <td class="column2 style23 s"><textarea name="unit_3" id="" cols="30" rows="10">সংখ্যা</textarea> </td>
                                    <td class="column3 style24 n"><textarea name="performance_index_values_3" id="" cols="30" rows="10">2</textarea> </td>
                                    <td class="column4 style24 n"><textarea name="annual_target_3" id="" cols="30" rows="10">4</textarea> </td>
                                    <td class="column5 style24 n"><textarea type="number" name="acquisition1_3" id="" cols="30" rows="10">1</textarea> </td>
                                    <td class="column6 style24 n"><textarea type="number" name="acquisition2_3" id="" cols="30" rows="10">1</textarea> </td>
                                    <td class="column6 style24 n"><textarea type="number" name="acquisition3_3" id="" cols="30" rows="10">1</textarea> </td>
                                    <td class="column6 style24 n"><textarea type="number" name="acquisition4_3" id="" cols="30" rows="10">1</textarea> </td>
                                    <td class="column6 style24 n"><textarea class="total_sum_value" type="number" name="total_sum_value_3" id="" cols="30" rows="10">1</textarea> </td>
                                    <td class="column7 style23 s"> <div class="form-group">
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
                                  <tr class="row52">
                                  <input type="hidden" name="row_id" value="4">  
                                    <td class="column0 style26 s"><textarea name="activities_4" id="" cols="30" rows="10">১.৪ শুদ্ধাচার সংক্রান্ত প্রশিক্ষণ আয়োজন</textarea> </td>
                                    <td class="column1 style26 s"><textarea name="performance_index_1" id="" cols="30" rows="10">প্রশিক্ষণ আয়োজিত</textarea> </td>
                                    <td class="column2 style27 s"><textarea name="unit_4" id="" cols="30" rows="10">সংখ্যা</textarea> </td>
                                    <td class="column3 style28 n"><textarea name="performance_index_values_4" id="" cols="30" rows="10">2</textarea> </td>
                                    <td class="column4 style24 n"><textarea name="annual_target_4" id="" cols="30" rows="10">2</textarea> </td>
                                    <td class="column5 style24 n"><textarea type="number" name="acquisition1_4" id="" cols="30" rows="10">1</textarea> </td>
                                    <td class="column6 style24 n"><textarea type="number" name="acquisition2_4" id="" cols="30" rows="10">1</textarea> </td>
                                    <td class="column6 style24 n"><textarea type="number" name="acquisition3_4" id="" cols="30" rows="10">1</textarea> </td>
                                    <td class="column6 style24 n"><textarea type="number" name="acquisition4_4" id="" cols="30" rows="10">1</textarea> </td>
                                    <td class="column6 style24 n"><textarea class="total_sum_value" type="number" name="total_sum_value_4" id="" cols="30" rows="10">1</textarea> </td>
                                    <td class="column7 style23 s"> <div class="form-group">
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
                                  <tr class="row53">
                                  <input type="hidden" name="row_id" value="5">   
                                    <td class="column0 style29 s style29" rowspan="3"><textarea name="activities_5" id="" cols="30" rows="10">১.৫ কর্ম-পরিবেশ উন্নয়ন (স্বাস্থ্যবিধি অনুসরণ/ টিওএন্ডইভুক্ত অকেজো মালামাল বিনষ্টকরণ/ পরিষ্কার-পরিচ্ছন্নতা বৃদ্ধি ইত্যাদি</textarea>  </td>
                                    <td class="column1 style29 s style29" rowspan="3"><textarea name="performance_index_5" id="" cols="30" rows="10">উন্নত কর্ম-পরিবেশ</textarea> </td>
                                    <td class="column2 style63 s style65" rowspan="3"><textarea name="unit_5" id="" cols="30" rows="10">সংখ্যা ও তারিখ</textarea> </td>
                                    <td class="column3 style30 n style30" rowspan="3"><textarea name="performance_index_values_5" id="" cols="30" rows="10">2</textarea> </td>
                                    <td class="column4 style23 s"><textarea name="annual_target_5" id="" cols="30" rows="10">২ টি</textarea> </td>
                                    <td class="column5 style22 s"><textarea type="number" name="acquisition1_5" id="" cols="30" rows="10"></textarea> </td>
                                    <td class="column6 style22 s"><textarea type="number" name="acquisition1_5" id="" cols="30" rows="10"></textarea> </td>
                                    <td class="column6 style22 s"><textarea type="number" name="acquisition1_5" id="" cols="30" rows="10"></textarea> </td>
                                    <td class="column6 style22 s"><textarea type="number" name="acquisition1_5" id="" cols="30" rows="10"></textarea> </td>
                                    <td class="column6 style22 s"><textarea class="total_sum_value" type="number" name="total_sum_value_5" id="" cols="30" rows="10"></textarea> </td>
                                    <td class="column7 style63 s style65" rowspan="3"> <div class="form-group">
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
                                  <tr class="row54">
                                  <input type="hidden" name="row_id_5_1" value="5">  
                                    <td class="column4 style23 s"><textarea name="annual_target_5_1" id="" cols="30" rows="10">৩১-১২-২০২১</textarea></td>
                                    <td class="column5 style22 null"><textarea type="number" name="acquisition1_5_1" id="txtCal5_1" cols="30" rows="10"></textarea></td>
                                    <td class="column5 style22 null"><textarea type="number" name="acquisition1_5_1" id="txtCal5_1" cols="30" rows="10"></textarea></td>
                                    <td class="column5 style22 null"><textarea type="number" name="acquisition1_5_1" id="txtCal5_1" cols="30" rows="10"></textarea></td>
                                    <td class="column5 style22 null"><textarea type="number" name="acquisition1_5_1" id="txtCal5_1" cols="30" rows="10"></textarea></td>
                                    <td class="column5 style22 null"><textarea class="total_sum_value" type="number" name="total_sum_value_5_1" id="_5_1" cols="30" rows="10"></textarea></td>
                                    
                                  </tr>
                                  <tr class="row54">
                                  <input type="hidden" name="row_id_5_2" value="5">  
                                    <td class="column4 style23 s"><textarea name="annual_target_5_2" id="" cols="30" rows="10">৩১-১২-২০২১</textarea></td>
                                    <td class="column5 style22 null"><textarea type="number" name="acquisition1_5_2" id="txtCal5_2" cols="30" rows="10"></textarea></td>
                                    <td class="column5 style22 null"><textarea type="number" name="acquisition1_5_2" id="txtCal5_2" cols="30" rows="10"></textarea></td>
                                    <td class="column5 style22 null"><textarea type="number" name="acquisition1_5_2" id="txtCal5_2" cols="30" rows="10"></textarea></td>
                                    <td class="column5 style22 null"><textarea type="number" name="acquisition1_5_2" id="txtCal5_2" cols="30" rows="10"></textarea></td>
                                    <td class="column5 style22 null"><textarea class="total_sum_value" type="number" name="total_sum_value_5_2" id="_5_2" cols="30" rows="10"></textarea></td>
                                    
                                  </tr>
                                  
                                  <tr class="row56">
                                      <input type="hidden" name="row_id" value="6">   
                                    <td class="column0 style29 s style29" rowspan="3"><textarea name="activities_6" id="" cols="30" rows="10">১.৬ জাতীয় শুদ্ধাচার কৌশল কর্মপরিকল্পনা, ২০২১-২২ ও ত্রৈমাসিক পরিবীক্ষণ প্রতিবেদন মন্ত্রিপরিষদ বিভাগে দাখিল ও স্ব স্ব ওয়েবসাইটে আপলোডকরণ</textarea></td>
                                    <td class="column1 style29 s style29" rowspan="3"><textarea name="performance_index_6" id="" cols="30" rows="10">কর্মপরিকল্পনা ও ত্রৈমাসিক প্রতিবেদন দাখিলকৃত ও আপলোডকৃত</textarea></td>
                                    <td class="column2 style31 s style31" rowspan="3"><textarea name="unit_6" id="" cols="30" rows="10">তারিখ</textarea></td>
                                    <td class="column3 style30 n style30" rowspan="3"><textarea name="performance_index_values_6" id="" cols="30" rows="10">1</textarea></td>
                                    <td class="column4 style23 s"><textarea name="annual_target_6" id="" cols="30" rows="10">১৫-১০-২০২১</textarea></td>
                                    <td class="column5 style22 s"><textarea type="number" name="acquisition1_6" id="txtCal6" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style22 s"><textarea type="number" name="acquisition2_6" id="txtCal6" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style22 s"><textarea type="number" name="acquisition3_6" id="txtCal6" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style22 s"><textarea type="number" name="acquisition4_6" id="txtCal6" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style22 s"><textarea class="total_sum_value" type="number" name="total_sum_value_6" id="_6" cols="30" rows="10"></textarea></td>
                                    <td class="column7 style31 s style31" rowspan="3"> <div class="form-group">
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
                                  <tr class="row54">
                                    <input type="hidden" name="row_id_6_1" value="6">  
                                      <td class="column4 style23 s"><textarea name="annual_target_6_1" id="" cols="30" rows="10">৩১-১২-২০২১</textarea></td>
                                      <td class="column5 style22 null"><textarea type="number" name="acquisition1_6_1" id="txtCal6_1" cols="30" rows="10"></textarea></td>
                                      <td class="column5 style22 null"><textarea type="number" name="acquisition2_6_1" id="txtCal6_1" cols="30" rows="10"></textarea></td>
                                      <td class="column5 style22 null"><textarea type="number" name="acquisition3_6_1" id="txtCal6_1" cols="30" rows="10"></textarea></td>
                                      <td class="column5 style22 null"><textarea type="number" name="acquisition4_6_1" id="txtCal6_1" cols="30" rows="10"></textarea></td>
                                      <td class="column5 style22 null"><textarea class="total_sum_value" type="number" name="total_sum_value_6_1" id="_6_1" cols="30" rows="10"></textarea></td>
                                      
                                    </tr>
                                    <tr class="row54">
                                      <input type="hidden" name="row_id_6_2" value="6">  
                                        <td class="column4 style23 s"><textarea name="annual_target_6_2" id="" cols="30" rows="10">৩১-১২-২০২১</textarea></td>
                                        <td class="column5 style22 null"><textarea type="number" name="acquisition1_6_2" id="txtCal6_2" cols="30" rows="10"></textarea></td>
                                        <td class="column5 style22 null"><textarea type="number" name="acquisition2_6_2" id="txtCal6_2" cols="30" rows="10"></textarea></td>
                                        <td class="column5 style22 null"><textarea type="number" name="acquisition3_6_2" id="txtCal6_2" cols="30" rows="10"></textarea></td>
                                        <td class="column5 style22 null"><textarea type="number" name="acquisition4_6_2" id="txtCal6_2" cols="30" rows="10"></textarea></td>
                                        <td class="column5 style22 null"><textarea class="total_sum_value" type="number" name="total_sum_value_6_2" id="_6_2" cols="30" rows="10"></textarea></td>
                                        
                                      </tr>
                                  <tr class="row59">
                                      <input type="hidden" name="row_id" value="7">
                                    <td class="column0 style29 s style29" rowspan="3"><textarea name="activities_7" id="" cols="30" rows="10">১.৭ আওতাধীন দপ্তর/সংস্হা (প্রযোজ্য ক্ষেত্রে) কর্তৃক দাখিলকৃত জাতীয় শুদ্ধাচার কৌশল কর্মপরিকল্পনা ও পরিবীক্ষণ  প্রতিবেদনের ওপর ফিডব্যাক প্রদান</textarea> </td>
                                    <td class="column1 style29 s style29" rowspan="3"><textarea name="performance_index_7" id="" cols="30" rows="10">ফিডব্যাক সভা/কর্মশালা অনুষ্ঠিত</textarea></td>
                                    <td class="column2 style31 s style31" rowspan="3"><textarea name="unit_7" id="" cols="30" rows="10">তারিখ</textarea></td>
                                    <td class="column3 style30 n style30" rowspan="3"><textarea name="performance_index_values_7" id="" cols="30" rows="10">4</textarea></td>
                                    <td class="column4 style23 s"><textarea name="annual_target_7" id="" cols="30" rows="10">৩১-১০-২০২১</textarea></td>
                                    <td class="column5 style22 s"><textarea type="number" name="acquisition1_7" id="txtCal7" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style22 s"><textarea type="number" name="acquisition2_7" id="txtCal7" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style22 s"><textarea type="number" name="acquisition3_7" id="txtCal7" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style22 s"><textarea type="number" name="acquisition4_7" id="txtCal7" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style22 s"><textarea class="total_sum_value" type="number" name="total_sum_value_7" id="_7" cols="30" rows="10"></textarea></td>
                                    <td class="column7 style31 s style31" rowspan="3"> <div class="form-group">
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
                                  <tr class="row54">
                                    <input type="hidden" name="row_id_7_1" value="7">  
                                      <td class="column4 style23 s"><textarea name="annual_target_7_1" id="" cols="30" rows="10">৩১-১২-২০২১</textarea></td>
                                      <td class="column5 style22 null"><textarea type="number" name="acquisition1_7_1" id="txtCal7_1" cols="30" rows="10"></textarea></td>
                                      <td class="column5 style22 null"><textarea type="number" name="acquisition2_7_1" id="txtCal7_1" cols="30" rows="10"></textarea></td>
                                      <td class="column5 style22 null"><textarea type="number" name="acquisition3_7_1" id="txtCal7_1" cols="30" rows="10"></textarea></td>
                                      <td class="column5 style22 null"><textarea type="number" name="acquisition4_7_1" id="txtCal7_1" cols="30" rows="10"></textarea></td>
                                      <td class="column5 style22 null"><textarea class="total_sum_value" type="number" name="total_sum_value_7_1" id="_7_1" cols="30" rows="10"></textarea></td>
                                      
                                    </tr>
                                    <tr class="row54">
                                      <input type="hidden" name="row_id_7_2" value="7">  
                                        <td class="column4 style23 s"><textarea name="annual_target_7_2" id="" cols="30" rows="10">৩১-১২-২০২১</textarea></td>
                                        <td class="column5 style22 null"><textarea type="number" name="acquisition1_7_2" id="txtCal7_2" cols="30" rows="10"></textarea></td>
                                        <td class="column5 style22 null"><textarea type="number" name="acquisition2_7_2" id="txtCal7_2" cols="30" rows="10"></textarea></td>
                                        <td class="column5 style22 null"><textarea type="number" name="acquisition3_7_2" id="txtCal7_2" cols="30" rows="10"></textarea></td>
                                        <td class="column5 style22 null"><textarea type="number" name="acquisition4_7_2" id="txtCal7_2" cols="30" rows="10"></textarea></td>
                                        <td class="column5 style22 null"><textarea class="total_sum_value" type="number" name="total_sum_value_7_2" id="_7_2" cols="30" rows="10"></textarea></td>
                                        
                                      </tr>
                                  <tr class="row62">
                                      <input type="hidden" name="row_id" value="8">  
                                    <td class="column0 style22 s"><textarea name="activities_8" id="" cols="30" rows="10">১.৮ শুদ্ধাচার পুরস্কার প্রদান এবং পুরস্কারপ্রাপ্তদের তালিকা ওয়েবসাইটে প্রকাশ</textarea></td>
                                    <td class="column1 style22 s"><textarea name="performance_index_8" id="" cols="30" rows="10">প্রদত্ত পুরস্কার</textarea></td>
                                    <td class="column2 style23 s"><textarea name="unit_8" id="" cols="30" rows="10">তারিখ</textarea></td>
                                    <td class="column3 style24 n"><textarea name="performance_index_values_8" id="" cols="30" rows="10">1</textarea></td>
                                    <td class="column4 style23 s"><textarea name="annual_target_8" id="" cols="30" rows="10">৩০-০৬-২০২২</textarea></td>
                                    <td class="column5 style23 s"><textarea type="number" name="acquisition1_8" id="txtCal8" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition2_8" id="txtCal8" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition3_8" id="txtCal8" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition4_8" id="txtCal8" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea class="total_sum_value" type="number" name="total_sum_value_8" id="_8" cols="30" rows="10"></textarea></td>
                                    <td class="column7 style23 s"> <div class="form-group">
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
                                  <tr class="row63">
                                      <input type="hidden" name="row_id" value="9">  
                                    <td class="column0 style22 s"><textarea name="activities_9" id="" cols="30" rows="10">২.১ ২০২১-২২ অর্থ বছরের ক্রয়-পরিকল্পনা (প্রকল্পের অনুমোদিত বার্ষিক ক্রয় পরিকল্পনাসহ) ওয়েবসাইটে প্রকাশ</textarea> </td>
                                    <td class="column1 style22 s"><textarea name="performance_index_9" id="" cols="30" rows="10">ক্রয়-পরিকল্পনা ওয়েবসাইটে প্রকাশিত</textarea></td>
                                    <td class="column2 style22 s"><textarea name="unit_9" id="" cols="30" rows="10">তারিখ</textarea></td>
                                    <td class="column3 style66 n"><textarea name="performance_index_values_9" id="" cols="30" rows="10">2</textarea></td>
                                    <td class="column4 style23 s"><textarea name="annual_target_9" id="" cols="30" rows="10">৩১-১০-২০২১</textarea></td>
                                    <td class="column5 style23 s"><textarea type="number" name="acquisition1_9" id="txtCal9" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition2_9" id="txtCal9" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition3_9" id="txtCal9" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition4_9" id="txtCal9" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea class="total_sum_value" type="number" name="total_sum_value_9" id="_9" cols="30" rows="10"></textarea></td>
                                    <td class="column7 style23 s"> <div class="form-group">
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
                                  <tr class="row64">
                                      <input type="hidden" name="row_id" value="10">
                                    <td class="column0 style26 s"><textarea name="activities_10" id="" cols="30" rows="10">২.২ প্রকল্পের PSC ও PIC সভা আয়োজন</textarea> </td>
                                    <td class="column1 style26 s"><textarea name="performance_index_10" id="" cols="30" rows="10">সভা আয়োজিত</textarea></td>
                                    <td class="column2 style26 s"><textarea name="unit_10" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                                    <td class="column3 style45 n"><textarea name="performance_index_values_10" id="" cols="30" rows="10">2</textarea></td>
                                    <td class="column4 style24 n"><textarea name="annual_target_10" id="" cols="30" rows="10"></textarea><input type="text" name="" id="" value="16"></td>
                                    <td class="column5 style23 s"><textarea type="number" name="acquisition1_10" id="txtCal10" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition2_10" id="txtCal10" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition3_10" id="txtCal10" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition4_10" id="txtCal10" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea class="total_sum_value" type="number" name="total_sum_value_10" id="_10" cols="30" rows="10"></textarea></td>
                                    <td class="column7 style23 s"> <div class="form-group">
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
                                  <tr class="row65">
                                      <input type="hidden" name="row_id" value="11">
                                    <td class="column0 style26 s"><textarea name="activities_11" id="" cols="30" rows="10">২.৩ বার্ষিক উন্নয়ন কর্মসূচি বাস্তবায়ন</textarea></td>
                                    <td class="column1 style26 s"><textarea name="performance_index_11" id="" cols="30" rows="10">বার্ষিক উন্নয়ন কর্মসূচি বাস্তবায়িত</textarea></td>
                                    <td class="column2 style26 s"><textarea name="unit_11" id="" cols="30" rows="10">%</textarea></td>
                                    <td class="column3 style45 n"><textarea name="performance_index_values_11" id="" cols="30" rows="10">2</textarea></td>
                                    <td class="column4 style24 n"><textarea name="annual_target_11" id="" cols="30" rows="10">100</textarea></td>
                                    <td class="column5 style23 s"><textarea type="number" name="acquisition1_11" id="txtCal11" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition2_11" id="txtCal11" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition3_11" id="txtCal11" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition4_11" id="txtCal11" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea class="total_sum_value" type="number" name="total_sum_value_11" id="_11" cols="30" rows="10"></textarea></td>
                                    <td class="column7 style23 s"> <div class="form-group">
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
                                  <tr class="row66">
                                      <input type="hidden" name="row_id" value="12">
                                    <td class="column0 style22 s"><textarea name="activities_12" id="" cols="30" rows="10">২.৪ প্রকল্প সমাপ্তি শেষে প্রকল্পের সম্পদ (যানবাহন, কম্পিউটার, আসবাবপত্র ইত্যাদি) বিধি মোতাবেক হস্তান্তর করা</textarea></td>
                                    <td class="column1 style22 s"><textarea name="performance_index_12" id="" cols="30" rows="10">প্রকল্পের সম্পদ বিধি মোতাবেক হস্তান্তরিত</textarea></td>
                                    <td class="column2 style22 s"><textarea name="unit_12" id="" cols="30" rows="10">তারিখ</textarea></td>
                                    <td class="column3 style66 n"><textarea name="performance_index_values_12" id="" cols="30" rows="10">2</textarea></td>
                                    <td class="column4 style23 s"><textarea name="annual_target_12" id="" cols="30" rows="10">৩০-০৬-২০২২</textarea></td>
                                    <td class="column5 style23 s"><textarea type="number" name="acquisition1_12" id="txtCal12" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition2_12" id="txtCal12" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition3_12" id="txtCal12" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition4_12" id="txtCal12" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea class="total_sum_value" type="number" name="total_sum_value_12" id="_12" cols="30" rows="10"></textarea></td>
                                    <td class="column7 style23 s"> <div class="form-group">
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
                                  <tr class="row67">
                                      <input type="hidden" name="row_id" value="13">
                                    <td class="column0 style22 s"><textarea name="activities_13" id="" cols="30" rows="10">৩.১ MRA কর্তৃক MFI সমূহে পরিচালিত পরিদর্শনসমূহের অন্যুন ৫ টি প্রতিবেদনের Follow up পর্যালোচনা।</textarea></td>
                                    <td class="column1 style22 s"><textarea name="performance_index_13" id="" cols="30" rows="10">অন্যুন ৫ টি প্রতিবেদনের Follow up পর্যালোচনাকরণ</textarea></td>
                                    <td class="column2 style23 s"><textarea name="unit_13" id="" cols="30" rows="10">তারিখ</textarea></td>
                                    <td class="column3 style24 n"><textarea name="performance_index_values_13" id="" cols="30" rows="10">4</textarea></td>
                                    <td class="column4 style23 s"><textarea name="annual_target_13" id="" cols="30" rows="10">৩০-০৬-২০২২</textarea></td>
                                    <td class="column5 style23 s"><textarea type="number" name="acquisition1_13" id="txtCal13" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition2_13" id="txtCal13" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition3_13" id="txtCal13" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition4_13" id="txtCal13" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea class="total_sum_value" type="number" name="total_sum_value_13" id="_13" cols="30" rows="10"></textarea></td>
                                    <td class="column7 style23 s"> <div class="form-group">
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
                                  <tr class="row68">
                                      <input type="hidden" name="row_id" value="14">
                                    <td class="column0 style22 s"><textarea name="activities_14" id="" cols="30" rows="10">৩.২ আবাসন খাতে বাংলাদেশ হাউজ বিল্ডিং ফাইনান্স কর্পোরেশনের গ্রাহক সেবা মান যাচাইয়ে ৫ টি ঋণ কার্যক্রম পর্যালোচনা করা।</textarea></td>
                                    <td class="column1 style22 s"><textarea name="performance_index_14" id="" cols="30" rows="10">৫ টি ঋণ কার্যক্রম পর্যালোচনাকরণ</textarea> </td>
                                    <td class="column2 style22 s"><textarea name="unit_14" id="" cols="30" rows="10">তারিখ</textarea></td>
                                    <td class="column3 style66 n"><textarea name="performance_index_values_14" id="" cols="30" rows="10">4</textarea></td>
                                    <td class="column4 style23 s"><textarea name="annual_target_14" id="" cols="30" rows="10">৩০-০৬-২০২২</textarea></td>
                                    <td class="column5 style23 s"><textarea type="number" name="acquisition1_14" id="txtCal14" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition2_14" id="txtCal14" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition3_14" id="txtCal14" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition3_14" id="txtCal14" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea class="total_sum_value" type="number" name="total_sum_value_14" id="_14" cols="30" rows="10"></textarea></td>
                                    <td class="column7 style23 s"> <div class="form-group">
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
                                  <tr class="row69">
                                      <input type="hidden" name="row_id" value="15">
                                    <td class="column0 style22 s"><textarea name="activities_15" id="" cols="30" rows="10">৩.৩ পরিপত্রের আলোকে ৪ (চার) টি বঙ্গবন্ধু যুবঋণ বিতরণ কার্যক্রম পরিবীক্ষণ করা।</textarea></td>
                                    <td class="column1 style22 s"><textarea name="performance_index_15" id="" cols="30" rows="10">যুবঋণ বিতরণ কার্যক্রম পরিবীক্ষণ</textarea></td>
                                    <td class="column2 style23 s"><textarea name="unit_15" id="" cols="30" rows="10">তারিখ</textarea></td>
                                    <td class="column3 style24 n"><textarea name="performance_index_values_15" id="" cols="30" rows="10">4</textarea></td>
                                    <td class="column4 style23 s"><textarea name="annual_target_15" id="" cols="30" rows="10">৩০-০৬-২০২২</textarea></td>
                                    <td class="column5 style23 s"><textarea type="number" name="acquisition1_15" id="txtCal15" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition2_15" id="txtCal15" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition3_15" id="txtCal15" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition4_15" id="txtCal15" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea class="total_sum_value" type="number" name="total_sum_value_15" id="_15" cols="30" rows="10"></textarea></td>
                                    <td class="column7 style23 s"> <div class="form-group">
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
                                  <tr class="row70">
                                      <input type="hidden" name="row_id" value="16">
                                    <td class="column0 style22 s"><textarea name="activities_16" id="" cols="30" rows="10">৩.৪ ঋণ খেলাপীর হার বৃদ্ধির কারণ চিহ্নিতকরণের লক্ষ্যে কর্মশালার আয়োজন।</textarea></td>
                                    <td class="column1 style22 s"><textarea name="performance_index_16" id="" cols="30" rows="10">কর্মশালার আয়োজন</textarea></td>
                                    <td class="column2 style23 s"><textarea name="unit_16" id="" cols="30" rows="10">তারিখ</textarea></td>
                                    <td class="column3 style24 n"><textarea name="performance_index_values_16" id="" cols="30" rows="10">4</textarea></td>
                                    <td class="column4 style23 s"><textarea name="annual_target_16" id="" cols="30" rows="10">৩০-০৬-২০২২</textarea></td>
                                    <td class="column5 style23 s"><textarea type="number" name="acquisition1_16" id="txtCal16" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition2_16" id="txtCal16" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition3_16" id="txtCal16" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition4_16" id="txtCal16" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea class="total_sum_value" type="number" name="total_sum_value_16" id="_16" cols="30" rows="10"></textarea></td>
                                    <td class="column7 style23 s"> <div class="form-group">
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
                                  <tr class="row71">
                                      <input type="hidden" name="row_id" value="17">
                                    <td class="column0 style22 s"><textarea name="activities_17" id="" cols="30" rows="10">৩.৫ লাইফ বীমাকারীর সম্পদ বিনিয়োগ প্রবিধানমালা, ২০১৯ মোতাবেক ০৩টি বীমা কোম্পানীর বিনিয়োগ পর্যালোচনা।</textarea></td>
                                    <td class="column1 style22 s"><textarea name="performance_index_17" id="" cols="30" rows="10">০৩টি বীমা কোম্পানীর বিনিয়োগ পর্যালোচনাকরণ</textarea></td>
                                    <td class="column2 style23 s"><textarea name="unit_17" id="" cols="30" rows="10">তারিখ</textarea></td>
                                    <td class="column3 style24 n"><textarea name="performance_index_values_17" id="" cols="30" rows="10">4</textarea></td>
                                    <td class="column4 style23 s"><textarea name="annual_target_17" id="" cols="30" rows="10">৩০-০৬-২০২২</textarea></td>
                                    <td class="column5 style23 s"><textarea type="number" name="acquisition1_17" id="txtCal17" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition2_17" id="txtCal17" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition3_17" id="txtCal17" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea type="number" name="acquisition4_17" id="txtCal17" cols="30" rows="10"></textarea></td>
                                    <td class="column6 style23 s"><textarea class="total_sum_value" type="number" name="total_sum_value_17" id="_17" cols="30" rows="10"></textarea></td>
                                    <td class="column7 style23 s"> <div class="form-group">
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
                                  <tr class="row72">
                                      <input type="hidden" name="row_id" value="18">
                                    <td class="column0 style33 s style33" colspan="2"><input type="text" name="" id="" value="উপমোট= (১৭টি সূচক)"></td>
                                    <td class="column2 style21 null"></td>
                                    <td class="column3 style34 n"><input type="text" name="" id="" value="50"></td>
                                    <td class="column4 style21 null"></td>
                                    <td class="column5 style21 null"></td>
                                    <td class="column6 style21 null"></td>
                                    <td class="column7 style21 null"></td>
                                  </tr>
                                </div>
                            </tbody>
                      </table>
                      </div>
                      
                  <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                  <button type="submit" class="btn btn-danger">সংশোধন</button>
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

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{url("store-form-2.2.1")}}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {
            alert('Form Submitted Successfully!');
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
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });
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
