@extends('admin.master')
@section('content')
<style>
    input{
        border: none;
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
                    <a href="#">{{__('Form 1.1.1')}}</a>
                </li>
            </ul>
        </div>
              <form action="{{ url('form-1.1.1') }}" method="POST">
                @csrf
            <div class="rel-26">
                <h3 style="text-align: center;">২০২১-২২ অর্থবছরের বাজেট বাস্তবায়ন অগ্রগতি</h3>
                <h5>১.১.১. সচিবালয়:</h5>
                <div>
                            </div><table border="1" width="100%">
                    <thead>
                        <tr>
                            <td rowspan="2">কার্যক্রম</td>
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
                                <input name="row_id" value="1" type="hidden">
                                <td class="column1 style60 s style60" rowspan="3"><input type="text" name="activities_1" id="" value="কর্মচারীদের প্রতিদান"></td>
                                <td class="column2 style61 n style62" rowspan="3"><input type="text" name="budget_1" id="" value="59000"></td>
                                <td class="column3 style42 s"><input type="text" name="target_expense_1" id="" value="লক্ষ্যমাত্রা"></td>
                                <td class="column4 style17 n"><input type="text" name="first_quarter_1" id="" value="17063"></td>
                                <td class="column5 style17 n"><input type="text" name="second_quarter_1" id="" value="12913"></td>
                                <td class="column6 style17 n"><input type="text" name="third_quarter_1" id="" value="12613"></td>
                                <td class="column7 style17 n"><input type="text" name="fourth_quarter_1" id="" value="16411"></td>
                                <td class="column8 style36 f"><input type="text" name="first_to_fourth_quarter_1" id="" value="59000"></td>
                              </tr>
                              <tr class="row5">
                                <input type="hidden" name="row_id_1_1" value="1"> 
                                <td class="column3 style42 s"><input type="text" name="target_expense_1_1" id="" value="প্রকৃত ব্যয়"></td>
                                <td class="column4 style17 n"><input type="text" name="first_quarter_1_1" id="" value="14572"></td>
                                <td class="column5 style37 null"><input type="text" name="second_quarter_1_1" id="" value=""></td>
                                <td class="column6 style37 null"><input type="text" name="third_quarter_1_1" id="" value=""></td>
                                <td class="column7 style37 null"><input type="text" name="fourth_quarter_1_1" id="" value=""></td>
                                <td class="column8 style36 f"><input type="text" name="first_to_fourth_quarter_1_1" id="" value="14572"></td>
                              </tr>
                              <tr class="row6">
                                <input type="hidden" name="row_id_1_2" value="1"> 
                                <td class="column3 style42 s"><input type="text" name="target_expense_1_2" id="" value="শতকরা হার"></td>
                                <td class="column4 style22 f"><input type="text" name="first_quarter_1_2" id="" value="85%"></td>
                                <td class="column5 style22 f"><input type="text" name="second_quarter_1_2" id="" value="0%"></td>
                                <td class="column6 style22 f"><input type="text" name="third_quarter_1_2" id="" value="0%"></td>
                                <td class="column7 style22 f"><input type="text" name="fourth_quarter_1_2" id="" value="0%"></td>
                                <td class="column8 style22 f"><input type="text" name="first_to_fourth_quarter_1_2" id="" value="25%"></td>
                              </tr>
                              <tr class="row7">
                                <input name="row_id" value="2" type="hidden">
                                <td class="column1 style60 s style60" rowspan="3"><input type="text" name="activities_2" id="" value="পণ্য ও সেবার ব্যবহার"></td>
                                <td class="column2 style61 n style62" rowspan="3"><input type="text" name="budget_2" id="" value="46040"></td>
                                <td class="column3 style42 s"><input type="text" name="target_expense_2" id="" value="লক্ষ্যমাত্রা"></td>
                                <td class="column4 style17 n"><input type="text" name="first_quarter_2" id="" value="7630"></td>
                                <td class="column5 style17 n"><input type="text" name="second_quarter_2" id="" value="10742"></td>
                                <td class="column6 style17 n"><input type="text" name="third_quarter_2" id="" value="16864"></td>
                                <td class="column7 style17 n"><input type="text" name="fourth_quarter_2" id="" value="10804"></td>
                                <td class="column8 style36 f"><input type="text" name="first_to_fourth_quarter_2" id="" value="46040"></td>
                              </tr>
                              <tr class="row8">
                            <input type="hidden" name="row_id_2_1" value="2"> 
                                <td class="column3 style42 s"><input type="text" name="target_expense_2_1" id="" value="প্রকৃত ব্যয়"></td>
                                <td class="column4 style17 n"><input type="text" name="first_quarter_2_1" id="" value="3245"></td>
                                <td class="column5 style37 null"><input type="text" name="second_quarter_2_1" id="" value=""></td>
                                <td class="column6 style37 null"><input type="text" name="third_quarter_2_1" id="" value=""></td>
                                <td class="column7 style37 null"><input type="text" name="fourth_quarter_2_1" id="" value=""></td>
                                <td class="column8 style36 f"><input type="text" name="first_to_fourth_quarter_2_1" id="" value="3245"></td>
                              </tr>
                              <tr class="row9">
                            <input type="hidden" name="row_id_2_2" value="2"> 
                                <td class="column3 style42 s"><input type="text" name="target_expense_2_2" id="" value="শতকরা হার"></td>
                                <td class="column4 style22 f"><input type="text" name="first_quarter_2_2" id="" value="43%"></td>
                                <td class="column5 style22 f"><input type="text" name="second_quarter_2_2" id="" value="0%"></td>
                                <td class="column6 style22 f"><input type="text" name="third_quarter_2_2" id="" value="0%"></td>
                                <td class="column7 style22 f"><input type="text" name="fourth_quarter_2_2" id="" value="0%"></td>
                                <td class="column8 style22 f"><input type="text" name="first_to_fourth_quarter_2_2" id="" value="7%"></td>
                              </tr>
                              <tr class="row10">
                                <input name="row_id" value="3" type="hidden">
                                <td class="column1 style60 s style60" rowspan="3"><input type="text" name="activities_3" id="" value="অ-আর্থিক সম্পদ"></td>
                                <td class="column2 style61 n style62" rowspan="3"><input type="text" name="budget_3" id="" value="5060"></td>
                                <td class="column3 style42 s"><input type="text" name="target_expense_3" id="" value="লক্ষ্যমাত্রা"></td>
                                <td class="column4 style17 n"><input type="text" name="first_quarter_3" id="" value="1012"></td>
                                <td class="column5 style17 n"><input type="text" name="second_quarter_3" id="" value="1012"></td>
                                <td class="column6 style17 n"><input type="text" name="third_quarter_3" id="" value="1518"></td>
                                <td class="column7 style17 n"><input type="text" name="fourth_quarter_3" id="" value="1518"></td>
                                <td class="column8 style36 f"><input type="text" name="first_to_fourth_quarter_3" id="" value="5060"></td>
                              </tr>
                              <tr class="row11">
                            <input type="hidden" name="row_id_3_1" value="3"> 
                                <td class="column3 style42 s"><input type="text" name="target_expense_3_1" id="" value="প্রকৃত ব্যয়"></td>
                                <td class="column4 style17 n"><input type="text" name="first_quarter_3_1" id="" value="107"></td>
                                <td class="column5 style37 null"><input type="text" name="second_quarter_3_1" id="" value=""></td>
                                <td class="column6 style37 null"><input type="text" name="third_quarter_3_1" id="" value=""></td>
                                <td class="column7 style37 null"><input type="text" name="fourth_quarter_3_1" id="" value=""></td>
                                <td class="column8 style36 f"><input type="text" name="first_to_fourth_quarter_3_1" id="" value="107"></td>
                              </tr>
                              <tr class="row12">
                            <input type="hidden" name="row_id_3_2" value="3"> 
                                <td class="column3 style42 s"><input type="text" name="target_expense_3_2" id="" value="শতকরা হার"></td>
                                <td class="column4 style22 f"><input type="text" name="first_quarter_3_2" id="" value="11%"></td>
                                <td class="column5 style22 f"><input type="text" name="second_quarter_3_2" id="" value="0%"></td>
                                <td class="column6 style22 f"><input type="text" name="third_quarter_3_2" id="" value="0%"></td>
                                <td class="column7 style22 f"><input type="text" name="fourth_quarter_3_2" id="" value="0%"></td>
                                <td class="column8 style22 f"><input type="text" name="first_to_fourth_quarter_3_2" id="" value="2%"></td>
                              </tr>
                              <tr class="row13">
                                <input name="row_id" value="4" type="hidden">
                                <td class="column1 style60 s style60" rowspan="3"><input type="text" name="activities_4" id="" value="সাধারণ থোক বরাদ্দ *"></td>
                                <td class="column2 style61 n style62" rowspan="3"><input type="text" name="budget_4" id="" value="260"></td>
                                <td class="column3 style42 s"><input type="text" name="target_expense_4" id="" value="লক্ষ্যমাত্রা"></td>
                                <td class="column4 style17 n"><input type="text" name="first_quarter_4" id="" value="65"></td>
                                <td class="column5 style17 n"><input type="text" name="second_quarter_4" id="" value="65"></td>
                                <td class="column6 style17 n"><input type="text" name="third_quarter_4" id="" value="65"></td>
                                <td class="column7 style17 n"><input type="text" name="fourth_quarter_4" id="" value="65"></td>
                                <td class="column8 style36 f"><input type="text" name="first_to_fourth_quarter_4" id="" value="260"></td>
                              </tr>
                              <tr class="row14">
                            <input type="hidden" name="row_id_4_1" value="4"> 
                                <td class="column3 style42 s"><input type="text" name="target_expense_4_1" id="" value="প্রকৃত ব্যয়"></td>
                                <td class="column4 style17 n"><input type="text" name="first_quarter_4_1" id="" value="0"></td>
                                <td class="column5 style37 null"><input type="text" name="second_quarter_4_1" id="" value=""></td>
                                <td class="column6 style37 null"><input type="text" name="third_quarter_4_1" id="" value=""></td>
                                <td class="column7 style37 null"><input type="text" name="fourth_quarter_4_1" id="" value=""></td>
                                <td class="column8 style36 f"><input type="text" name="first_to_fourth_quarter_4_1" id="" value="0"></td>
                              </tr>
                              <tr class="row15">
                            <input type="hidden" name="row_id_4_2" value="4"> 
                                <td class="column3 style42 s"><input type="text" name="target_expense_4_2" id="" value="শতকরা হার"></td>
                                <td class="column4 style22 n"><input type="text" name="first_quarter_4_2" id="" value="0%"></td>
                                <td class="column5 style22 n"><input type="text" name="second_quarter_4_2" id="" value="0%"></td>
                                <td class="column6 style22 n"><input type="text" name="third_quarter_4_2" id="" value="0%"></td>
                                <td class="column7 style22 n"><input type="text" name="fourth_quarter_4_2" id="" value="0%"></td>
                                <td class="column8 style22 n"><input type="text" name="first_to_fourth_quarter_4_2" id="0%" value=""></td>
                              </tr>
                              <tr class="row16">
                                <input name="row_id" value="5" type="hidden">
                                <td class="column1 style65 s style65" rowspan="3"><input type="text" name="activities_5" id="" value="মোট সচিবালয়"></td>
                                <td class="column2 style66 f style67" rowspan="3"><input type="text" name="budget_5" id="" value="110360"></td>
                                <td class="column3 style41 s"><input type="text" name="target_expense_5" id="" value="লক্ষ্যমাত্রা"></td>
                                <td class="column4 style36 f"><input type="text" name="first_quarter_5" id="" value="25770"></td>
                                <td class="column5 style36 f"><input type="text" name="second_quarter_5" id="" value="24732"></td>
                                <td class="column6 style36 f"><input type="text" name="third_quarter_5" id="" value="31060"></td>
                                <td class="column7 style36 f"><input type="text" name="fourth_quarter_5" id="" value="28798"></td>
                                <td class="column8 style36 f"><input type="text" name="first_to_fourth_quarter_5" id="" value="110360"></td>
                              </tr>
                              <tr class="row17">
                            <input type="hidden" name="row_id_5_1" value="5"> 
                                <td class="column3 style41 s"><input type="text" name="target_expense_5_1" id="" value="প্রকৃত ব্যয়"></td>
                                <td class="column4 style36 f"><input type="text" name="first_quarter_5_1" id="" value="17924"></td>
                                <td class="column5 style36 null"><input type="text" name="second_quarter_5_1" id="" value=""></td>
                                <td class="column6 style36 null"><input type="text" name="third_quarter_5_1" id="" value=""></td>
                                <td class="column7 style36 null"><input type="text" name="fourth_quarter_5_1" id="" value=""></td>
                                <td class="column8 style36 f"><input type="text" name="first_to_fourth_quarter_5_1" id="" value="17924"></td>
                              </tr>
                              <tr class="row18">
                            <input type="hidden" name="row_id_5_2" value="5"> 
                                <td class="column3 style41 s"><input type="text" name="target_expense_5_2" id="" value="শতকরা হার"></td>
                                <td class="column4 style22 f"><input type="text" name="first_quarter_5_2" id="" value="70%"></td>
                                <td class="column5 style22 f"><input type="text" name="second_quarter_5_2" id="" value="0%"></td>
                                <td class="column6 style22 f"><input type="text" name="third_quarter_5_2" id="" value="0%"></td>
                                <td class="column7 style22 f"><input type="text" name="fourth_quarter_5_2" id="" value="0%"></td>
                                <td class="column8 style22 f"><input type="text" name="first_to_fourth_quarter_5_2" id="" value="16%"></td>
                              </tr>
                        
                    </tbody>
                </table>
            </div>
            
        <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
        <button type="submit" class="btn btn-danger">সংশোধন</button>
          </form>
    </div>
</div>

@endsection    
