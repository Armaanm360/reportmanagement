
        <style>
/*        .rel-26{
            margin-top: 50px;
            margin-bottom: 50px;
        }*/
/*       input[type="text"] {
                  border: none;
              }*/
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
                <h5>১.২.১  উন্নয়ন প্রকল্প (বার্ষিক উন্নয়ন কর্মসূচি বহির্ভূত-২১):</h5>
                <table border="1" width="100%" id="myTable">
                    <thead>
                        <tr>
                            <td rowspan="2">প্রকল্পের নাম</td>
                            <td>বাজেট</td>
                            <td>লক্ষ্যমাত্রা/</td>
                            <td>১ম কোয়ার্টার</td>
                            <td>২য় কোয়ার্টার</td>
                            <td>৩য় কোয়ার্টার</td>
                            <td>৪র্থ কোয়ার্টার</td>
                            <td>(১ম-৪র্থ)  কোয়ার্টার</td>
                        </tr>
                        <tr>
                            <td>২০২১-২২</td>
                            <td>প্রকৃত ব্যয়</td>
                            <td>(জুলাই-সেপ্টেম্বর ২১)</td>
                            <td>(অক্টোবর-ডিসেম্বর ২১)</td>
                            <td>(জানুয়ারি-মার্চ ২২)</td>
                            <td>(এপ্রিল-জুন ২২)</td>
                            <td>(জুলাই ২১- জুন ২২)</td>
                        </tr>
                    </thead>
                     <tbody>
                  <tr class="row4">
                     <input cols="30" rows="10" name="row_id" value="1" type="hidden">
                     <td class="column1 style60 s style60" rowspan="3"><textarea cols="30" rows="10" type="text" name="activities_1" id="">বাংলাদেশে তৈরি পোশাক খাতের নিরাপত্তাজনিত সংস্কার ও পরিবেশগত বিশেষ উন্নয়ন সহায়তা কর্মসূচী</textarea></td>
                     <td class="column2 style61 n style62" rowspan="3"><textarea cols="30" rows="10" type="text" name="budget_1" id="">14572</textarea></td>
                     <td class="column3 style42 s"><textarea cols="30" rows="10" type="text" name="target_expense_1" id="" >প্রকৃত ব্যয়</textarea></td>
                     <td class="column4 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition1_1" id="" ></textarea></td>
                     <td class="column5 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition2_1" id="" ></textarea></td>
                     <td class="column6 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition3_1" id="" ></textarea></td>
                     <td class="column7 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition4_1" id="" ></textarea></td>
                     <td class="column8 style36 f"><textarea  class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_1" id=""></textarea></td>
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
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row5">
                     <input cols="30" rows="10" type="hidden" name="row_id_1_1" value="1"> 
                     <td class="column3 style42 s"><textarea cols="30" rows="10" type="text" name="target_expense_1_1" id="">প্রকৃত ব্যয়</textarea></td>
                     <td class="column4 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition1_1_1" id="">14572</textarea></td>
                     <td class="column5 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition2_1_1" id="" value=""></textarea></td>
                     <td class="column6 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition3_1_1" id="" value=""></textarea></td>
                     <td class="column7 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition4_1_1" id="" value=""></textarea></td>
                     <td class="column8 style36 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_1_1" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_1_1">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row6">
                     <input cols="30" rows="10" type="hidden" name="row_id_1_2" value="1"> 
                     <td class="column3 style42 s"><textarea cols="30" rows="10" type="text" name="target_expense_1_2" id="" >শতকরা হার</textarea></td>
                     <td class="column4 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition1_1_2" id="">85%</textarea></td>
                     <td class="column5 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition2_1_2" id=""></textarea></td>
                     <td class="column6 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition3_1_2" id=""></textarea></td>
                     <td class="column7 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition4_1_2" id=""></textarea></td>
                     <td class="column8 style22 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_1_2" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_1_2">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row7">
                     <input cols="30" rows="10" name="row_id" value="2" type="hidden">
                     <td class="column1 style60 s style60" rowspan="3"><textarea cols="30" rows="10" type="text" name="activities_2" id="">ফরেন ডিরেক্ট ইনভেস্টমেন্ট প্রমোশন প্রজেক্ট</textarea></td>
                     <td class="column2 style61 n style62" rowspan="3"><textarea cols="30" rows="10" type="text" name="budget_2" id="">46040</textarea></td>
                     <td class="column3 style42 s"><textarea cols="30" rows="10" type="text" name="target_expense_2" id="">লক্ষ্যমাত্রা</textarea></td>
                     <td class="column4 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition1_2" id="" value="7630"></textarea></td>
                     <td class="column5 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition2_2" id="" value="10742"></textarea></td>
                     <td class="column6 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition3_2" id="" value="16864"></textarea></td>
                     <td class="column7 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition4_2" id="" value="10804"></textarea></td>
                     <td class="column8 style36 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_2" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_2">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row8">
                     <input cols="30" rows="10" type="hidden" name="row_id_2_1" value="2"> 
                     <td class="column3 style42 s"><textarea cols="30" rows="10" type="text" name="target_expense_2_1" id="">প্রকৃত ব্যয়</textarea></td>
                     <td class="column4 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition1_2_1" id=""></textarea></td>
                     <td class="column5 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition2_2_1" id=""></textarea></td>
                     <td class="column6 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition3_2_1" id=""></textarea></td>
                     <td class="column7 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition4_2_1" id=""></textarea></td>
                     <td class="column8 style36 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_2_1" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_2_1">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row9">
                     <input cols="30" rows="10" type="hidden" name="row_id_2_2" value="2"> 
                     <td class="column3 style42 s"><textarea cols="30" rows="10" type="text" name="target_expense_2_2" id="">শতকরা হার</textarea></td>
                     <td class="column4 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition1_2_2" id=""></textarea></td>
                     <td class="column5 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition2_2_2" id=""></textarea></td>
                     <td class="column6 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition3_2_2" id=""></textarea></td>
                     <td class="column7 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition4_2_2" id=""></textarea></td>
                     <td class="column8 style22 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_2_2" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_2_2">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row10">
                     <input cols="30" rows="10" name="row_id" value="3" type="hidden">
                     <td class="column1 style60 s style60" rowspan="3"><textarea cols="30" rows="10" type="text" name="activities_3" id="">আরবান বিল্ডিং সেফটি প্রজেক্ট</textarea></td>
                     <td class="column2 style61 n style62" rowspan="3"><textarea cols="30" rows="10" type="text" name="budget_3" id="">5060</textarea></td>
                     <td class="column3 style42 s"><textarea cols="30" rows="10" type="text" name="target_expense_3" id="">লক্ষ্যমাত্রা</textarea></td>
                     <td class="column4 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition1_3" id="" ></textarea></td>
                     <td class="column5 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition2_3" id="" ></textarea></td>
                     <td class="column6 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition3_3" id="" ></textarea></td>
                     <td class="column7 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition4_3" id="" ></textarea></td>
                     <td class="column8 style36 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_3" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_3">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row11">
                     <input cols="30" rows="10" type="hidden" name="row_id_3_1" value="3"> 
                     <td class="column3 style42 s"><textarea cols="30" rows="10" type="text" name="target_expense_3_1" id="" >প্রকৃত ব্যয়</textarea></td>
                     <td class="column4 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition1_3_1" id="" ></textarea></td>
                     <td class="column5 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition2_3_1" id="" ></textarea></td>
                     <td class="column6 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition3_3_1" id="" ></textarea></td>
                     <td class="column7 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition4_3_1" id="" ></textarea></td>
                     <td class="column8 style36 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_3_1" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_3_1">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row12">
                     <input cols="30" rows="10" type="hidden" name="row_id_3_2" value="3"> 
                     <td class="column3 style42 s"><textarea cols="30" rows="10" type="text" name="target_expense_3_2" id="" >শতকরা হার</textarea></td>
                     <td class="column4 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition1_3_2" id="" ></textarea></td>
                     <td class="column5 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition2_3_2" id="" ></textarea></td>
                     <td class="column6 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition3_3_2" id="" ></textarea></td>
                     <td class="column7 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition4_3_2" id="" ></textarea></td>
                     <td class="column8 style22 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_3_2" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_3_2">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row13">
                     <input cols="30" rows="10" name="row_id" value="4" type="hidden">
                     <td class="column1 style60 s style60" rowspan="3"><textarea cols="30" rows="10" type="text" name="activities_4" id="">সেকেন্ড স্মল এন্ড মিডিয়াম সাইজড এন্টারপ্রাইজ ডেভেলপমেন্ট প্রজেক্ট (এসএমইডিপি-২)</textarea></td>
                     <td class="column2 style61 n style62" rowspan="3"><textarea cols="30" rows="10" type="text" name="budget_4" id="">260</textarea></td>
                     <td class="column3 style42 s"><textarea cols="30" rows="10" type="text" name="target_expense_4" id="" >লক্ষ্যমাত্রা</textarea></td>
                     <td class="column4 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition1_4" id=""></textarea></td>
                     <td class="column5 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition2_4" id=""></textarea></td>
                     <td class="column6 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition3_4" id=""></textarea></td>
                     <td class="column7 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition4_4" id=""></textarea></td>
                     <td class="column8 style36 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_4" id=""></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_4">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row14">
                     <input cols="30" rows="10" type="hidden" name="row_id_4_1" value="4"> 
                     <td class="column3 style42 s"><textarea cols="30" rows="10" type="text" name="target_expense_4_1" id="">প্রকৃত ব্যয়</textarea></td>
                     <td class="column4 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition1_4_1" id=""></textarea></td>
                     <td class="column5 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition2_4_1" id=""></textarea></td>
                     <td class="column6 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition3_4_1" id=""></textarea></td>
                     <td class="column7 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition4_4_1" id=""></textarea></td>
                     <td class="column8 style36 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_4_1" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_4_1">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row15">
                     <input cols="30" rows="10" type="hidden" name="row_id_4_2" value="4"> 
                     <td class="column3 style42 s"><textarea cols="30" rows="10" type="text" name="target_expense_4_2" id="">শতকরা হার</textarea></td>
                     <td class="column4 style22 n"><textarea cols="30" rows="10" type="number" name="acquisition1_4_2" id=""></textarea></td>
                     <td class="column5 style22 n"><textarea cols="30" rows="10" type="number" name="acquisition2_4_2" id=""></textarea></td>
                     <td class="column6 style22 n"><textarea cols="30" rows="10" type="number" name="acquisition3_4_2" id=""></textarea></td>
                     <td class="column7 style22 n"><textarea cols="30" rows="10" type="number" name="acquisition4_4_2" id=""></textarea></td>
                     <td class="column8 style22 n"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_4_2" id="0%"></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_4_2">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row16">
                     <input cols="30" rows="10" name="row_id" value="5" type="hidden">
                     <td class="column1 style65 s style65" rowspan="3"><textarea cols="30" rows="10" type="text" name="activities_5" id="">পল্লী কর্ম সহায়ক ফাউন্ডেশন (পিকেএসএফ)</textarea></td>
                     <td class="column2 style66 f style67" rowspan="3"><textarea cols="30" rows="10" type="text" name="budget_5" id="">110360</textarea></td>
                     <td class="column3 style41 s"><textarea cols="30" rows="10" type="text" name="target_expense_5" id="">লক্ষ্যমাত্রা</textarea></td>
                     <td class="column4 style36 f"><textarea cols="30" rows="10" type="number" name="acquisition1_5" id=""></textarea></td>
                     <td class="column5 style36 f"><textarea cols="30" rows="10" type="number" name="acquisition2_5" id=""></textarea></td>
                     <td class="column6 style36 f"><textarea cols="30" rows="10" type="number" name="acquisition3_5" id=""></textarea></td>
                     <td class="column7 style36 f"><textarea cols="30" rows="10" type="number" name="acquisition4_5" id=""></textarea></td>
                     <td class="column8 style36 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_5" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_5">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row17">
                     <input cols="30" rows="10" type="hidden" name="row_id_5_1" value="5"> 
                     <td class="column3 style41 s"><textarea cols="30" rows="10" type="text" name="target_expense_5_1" id="">প্রকৃত ব্যয়</textarea></td>
                     <td class="column4 style36 f"><textarea cols="30" rows="10" type="number" name="acquisition1_5_1" id=""></textarea></td>
                     <td class="column5 style36 null"><textarea cols="30" rows="10" type="number" name="acquisition2_5_1" id=""></textarea></td>
                     <td class="column6 style36 null"><textarea cols="30" rows="10" type="number" name="acquisition3_5_1" id=""></textarea></td>
                     <td class="column7 style36 null"><textarea cols="30" rows="10" type="number" name="acquisition4_5_1" id=""></textarea></td>
                     <td class="column8 style36 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_5_1" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_5_1">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row18">
                     <input cols="30" rows="10" type="hidden" name="row_id_5_2" value="5"> 
                     <td class="column3 style41 s"><textarea cols="30" rows="10" type="text" name="target_expense_5_2" id="">শতকরা হার</textarea></td>
                     <td class="column4 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition1_5_2" id=""></textarea></td>
                     <td class="column5 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition2_5_2" id=""></textarea></td>
                     <td class="column6 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition3_5_2" id=""></textarea></td>
                     <td class="column7 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition4_5_2" id=""></textarea></td>
                     <td class="column8 style22 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_5_2" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_5_2">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row16">
                     <input cols="30" rows="10" name="row_id" value="6" type="hidden">
                     <td class="column1 style66 s style66" rowspan="3"><textarea cols="30" rows="10" type="text" name="activities_6" id="">সোস্যাল ডেভেলপমেন্ট ফাউন্ডেশন (এসডিএফ)</textarea></td>
                     <td class="column2 style66 f style67" rowspan="3"><textarea cols="30" rows="10" type="text" name="budget_6" id="">110360</textarea></td>
                     <td class="column3 style41 s"><textarea cols="30" rows="10" type="text" name="target_expense_6" id="">লক্ষ্যমাত্রা</textarea></td>
                     <td class="column4 style36 f"><textarea cols="30" rows="10" type="number" name="acquisition1_6" id=""></textarea></td>
                     <td class="column6 style36 f"><textarea cols="30" rows="10" type="number" name="acquisition2_6" id=""></textarea></td>
                     <td class="column6 style36 f"><textarea cols="30" rows="10" type="number" name="acquisition3_6" id=""></textarea></td>
                     <td class="column7 style36 f"><textarea cols="30" rows="10" type="number" name="acquisition4_6" id=""></textarea></td>
                     <td class="column8 style36 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_6" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_6">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row17">
                     <input cols="30" rows="10" type="hidden" name="row_id_6_1" value="6"> 
                     <td class="column3 style41 s"><textarea cols="30" rows="10" type="text" name="target_expense_6_1" id="">প্রকৃত ব্যয়</textarea></td>
                     <td class="column4 style36 f"><textarea cols="30" rows="10" type="number" name="acquisition1_6_1" id=""></textarea></td>
                     <td class="column6 style36 null"><textarea cols="30" rows="10" type="number" name="acquisition2_6_1" id=""></textarea></td>
                     <td class="column6 style36 null"><textarea cols="30" rows="10" type="number" name="acquisition3_6_1" id=""></textarea></td>
                     <td class="column7 style36 null"><textarea cols="30" rows="10" type="number" name="acquisition4_6_1" id=""></textarea></td>
                     <td class="column8 style36 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_6_1" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_6_1">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row18">
                     <input cols="30" rows="10" type="hidden" name="row_id_6_2" value="6"> 
                     <td class="column3 style41 s"><textarea cols="30" rows="10" type="text" name="target_expense_6_2" id="">শতকরা হার</textarea></td>
                     <td class="column4 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition1_6_2" id=""></textarea></td>
                     <td class="column6 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition2_6_2" id=""></textarea></td>
                     <td class="column6 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition3_6_2" id=""></textarea></td>
                     <td class="column7 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition4_6_2" id=""></textarea></td>
                     <td class="column8 style22 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_6_2" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_6_2">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row17">
                     <input cols="30" rows="10" name="row_id" value="7" type="hidden">
                     <td class="column1 style77 s style77" rowspan="3"><textarea cols="30" rows="10" type="text" name="activities_7" id="">রুরাল এন্ড পেরি-আরবান হাউজিং ফিন্যান্স প্রজেক্ট</textarea></td>
                     <td class="column2 style77 f style77" rowspan="3"><textarea cols="30" rows="10" type="text" name="budget_7" id="">110370</textarea></td>
                     <td class="column3 style41 s"><textarea cols="30" rows="10" type="text" name="target_expense_7" id="">লক্ষ্যমাত্রা</textarea></td>
                     <td class="column4 style37 f"><textarea cols="30" rows="10" type="number" name="acquisition1_7" id=""></textarea></td>
                     <td class="column7 style37 f"><textarea cols="30" rows="10" type="number" name="acquisition2_7" id=""></textarea></td>
                     <td class="column7 style37 f"><textarea cols="30" rows="10" type="number" name="acquisition3_7" id=""></textarea></td>
                     <td class="column7 style37 f"><textarea cols="30" rows="10" type="number" name="acquisition4_7" id=""></textarea></td>
                     <td class="column8 style37 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_7" id="" ></textarea></td>
                     <td class="column7 style7 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_7">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row17">
                     <input cols="30" rows="10" type="hidden" name="row_id_7_1" value="7"> 
                     <td class="column3 style41 s"><textarea cols="30" rows="10" type="text" name="target_expense_7_1" id="">66555</textarea></td>
                     <td class="column4 style37 f"><textarea cols="30" rows="10" type="number" name="acquisition1_7_1" id=""></textarea></td>
                     <td class="column7 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition2_7_1" id=""></textarea></td>
                     <td class="column7 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition3_7_1" id=""></textarea></td>
                     <td class="column7 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition4_7_1" id=""></textarea></td>
                     <td class="column8 style37 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_7_1" id="" ></textarea></td>
                     <td class="column7 style7 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_7_1">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row18">
                     <input cols="30" rows="10" type="hidden" name="row_id_7_2" value="7"> 
                     <td class="column3 style41 s"><textarea cols="30" rows="10" type="text" name="target_expense_7_2" id="">শতকরা হার</textarea></td>
                     <td class="column4 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition1_7_2" id=""></textarea></td>
                     <td class="column7 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition2_7_2" id=""></textarea></td>
                     <td class="column7 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition3_7_2" id=""></textarea></td>
                     <td class="column7 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition4_7_2" id=""></textarea></td>
                     <td class="column8 style22 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_7_2" id="" ></textarea></td>
                     <td class="column7 style7 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_7_2">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row18">
                     <input cols="30" rows="10" name="row_id" value="8" type="hidden">
                     <td class="column1 style88 s style88" rowspan="3"><textarea cols="30" rows="10" type="text" name="activities_8" id="">মোট উন্নয়ন প্রকল্প (বার্ষিক উন্নয়ন কর্মসূচি বহির্ভূত)</textarea></td>
                     <td class="column2 style88 f style88" rowspan="3"><textarea cols="30" rows="10" type="text" name="budget_8" id="">110380</textarea></td>
                     <td class="column3 style41 s"><textarea cols="30" rows="10" type="text" name="target_expense_8" id="">লক্ষ্যমাত্রা</textarea></td>
                     <td class="column4 style38 f"><textarea cols="30" rows="10" type="number" name="acquisition1_8" id=""></textarea></td>
                     <td class="column8 style38 f"><textarea cols="30" rows="10" type="number" name="acquisition2_8" id=""></textarea></td>
                     <td class="column8 style38 f"><textarea cols="30" rows="10" type="number" name="acquisition3_8" id=""></textarea></td>
                     <td class="column8 style38 f"><textarea cols="30" rows="10" type="number" name="acquisition4_8" id=""></textarea></td>
                     <td class="column8 style38 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_8" id="" ></textarea></td>
                     <td class="column8 style8 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_8">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row18">
                     <input cols="30" rows="10" type="hidden" name="row_id_8_1" value="8"> 
                     <td class="column3 style41 s"><textarea cols="30" rows="10" type="text" name="target_expense_8_1" id="">প্রকৃত ব্যয়</textarea></td>
                     <td class="column4 style38 f"><textarea cols="30" rows="10" type="number" name="acquisition1_8_1" id=""></textarea></td>
                     <td class="column8 style38 null"><textarea cols="30" rows="10" type="number" name="acquisition2_8_1" id=""></textarea></td>
                     <td class="column8 style38 null"><textarea cols="30" rows="10" type="number" name="acquisition3_8_1" id=""></textarea></td>
                     <td class="column8 style38 null"><textarea cols="30" rows="10" type="number" name="acquisition4_8_1" id=""></textarea></td>
                     <td class="column8 style38 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_8_1" id="" ></textarea></td>
                     <td class="column8 style8 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_8_1">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row18">
                     <input cols="30" rows="10" type="hidden" name="row_id_8_2" value="8"> 
                     <td class="column3 style41 s"><textarea cols="30" rows="10" type="text" name="target_expense_8_2" id="">শতকরা হার</textarea></td>
                     <td class="column4 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition1_8_2" id=""></textarea></td>
                     <td class="column8 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition2_8_2" id=""></textarea></td>
                     <td class="column8 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition3_8_2" id=""></textarea></td>
                     <td class="column8 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition4_8_2" id=""></textarea></td>
                     <td class="column8 style22 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_8_2" id="" ></textarea></td>
                     <td class="column8 style8 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_8_2">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
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
            url: "{{url("store-form-1.2.1")}}",
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
