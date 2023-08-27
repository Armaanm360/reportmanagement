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
                    <a href="#">{{__('Form 1.2.1')}}</a>
                </li>
            </ul>
        </div>
        <form action="{{ url('form-1.2.1') }}" method="POST">
            @csrf
            <div class="rel-26">
                <h5>১.২.১  উন্নয়ন প্রকল্প (বার্ষিক উন্নয়ন কর্মসূচি বহির্ভূত-২১):</h5>
                <table border="1" width="100%">
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
                        <tr class="row54">
                            <input name="row_id" value="1" type="hidden">
                            <td class="column1 style63 s style63" rowspan="3"><input type="text" name="activities_1" id="" value="বাংলাদেশে তৈরি পোশাক খাতের নিরাপত্তাজনিত সংস্কার ও পরিবেশগত বিশেষ উন্নয়ন সহায়তা কর্মসূচী"> </td>
                            <td class="column2 style68 n style69" rowspan="3"><input type="text" name="budget_1" id="" value="1860000"></td>
                            <td class="column3 style41 s"><input type="text" name="target_expense_1" id="" value="লক্ষ্যমাত্রা"></td>
                            <td class="column4 style18 n"><input type="text" name="first_quarter_1" id="" value="360000"></td>
                            <td class="column5 style18 n"><input type="text" name="second_quarter_1" id="" value="500000"></td>
                            <td class="column6 style18 n"><input type="text" name="third_quarter_1" id="" value="500000"></td>
                            <td class="column7 style18 n"><input type="text" name="fourth_quarter_1" id="" value="500000"></td>
                            <td class="column8 style18 f"><input type="text" name="first_to_fourth_quarter_1" id="" value="1860000"></td>
                          </tr>
                          <tr class="row55">
                            <input type="hidden" name="row_id_1_1" value="1"> 
                            <td class="column3 style41 s"><input type="text" name="target_expense_1_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td class="column4 style19 n"><input type="text" name="first_quarter_1_1" id="" value="0"></td>
                            <td class="column5 style19 null"><input type="text" name="second_quarter_1_1" id="" value=""></td>
                            <td class="column6 style19 null"><input type="text" name="third_quarter_1_1" id="" value=""></td>
                            <td class="column7 style19 null"><input type="text" name="fourth_quarter_1_1" id="" value=""></td>
                            <td class="column8 style19 f"><input type="text" name="first_to_fourth_quarter_1_1" id="" value="0"></td>
                          </tr>
                          <tr class="row56">
                            <input type="hidden" name="row_id_1_2" value="1"> 
                            <td class="column3 style41 s"><input type="text" name="target_expense_1_2" id="" value="শতকরা হার "></td>
                            <td class="column4 style20 f"><input type="text" name="first_quarter_1_2" id="" value="0%"></td>
                            <td class="column5 style23 n"><input type="text" name="second_quarter_1_2" id="" value="0%"></td>
                            <td class="column6 style20 f"><input type="text" name="third_quarter_1_2" id="" value="0%"></td>
                            <td class="column7 style20 f"><input type="text" name="first_to_fourth_quarter_1fourth_quarter_1_2" id="" value="0%"></td>
                            <td class="column8 style20 f"><input type="text" name="first_to_fourth_quarter_1_2" id="" value="0%"></td>
                          </tr>
                          <tr class="row57">
                            <input name="row_id" value="2" type="hidden">
                            <td class="column1 style63 s style63" rowspan="3"><input type="text" name="activities_2" id="" value="ফরেন ডিরেক্ট ইনভেস্টমেন্ট প্রমোশন প্রজেক্ট"></td>
                            <td class="column2 style68 n style69" rowspan="3"><input type="text" name="budget_2" id="" value="620000"></td>
                            <td class="column3 style41 s"><input type="text" name="target_expense_2" id="" value="লক্ষ্যমাত্রা"></td>
                            <td class="column4 style18 n"><input type="text" name="first_quarter_2" id="" value="155000"></td>
                            <td class="column5 style18 n"><input type="text" name="second_quarter_2" id="" value="155000"></td>
                            <td class="column6 style18 n"><input type="text" name="third_quarter_2" id="" value="155000"></td>
                            <td class="column7 style18 n"><input type="text" name="fourth_quarter_2" id="" value="155000"></td>
                            <td class="column8 style18 f"><input type="text" name="first_to_fourth_quarter_2" id="" value="620000"></td>
                          </tr>
                          <tr class="row58">
                            <input type="hidden" name="row_id_2_1" value="2"> 
                            <td class="column3 style41 s"><input type="text" name="target_expense_2_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td class="column4 style18 n"><input type="text" name="first_quarter_2_1" id="" value="69273"></td>
                            <td class="column5 style19 null"><input type="text" name="second_quarter_2_1" id="" value=""></td>
                            <td class="column6 style19 null"><input type="text" name="third_quarter_2_1" id="" value=""></td>
                            <td class="column7 style19 null"><input type="text" name="fourth_quarter_2_1" id="" value=""></td>
                            <td class="column8 style19 f"><input type="text" name="first_to_fourth_quarter_2_1" id="" value="69273"></td>
                          </tr>
                          <tr class="row59">
                            <input type="hidden" name="row_id_2_2" value="2"> 
                            <td class="column3 style41 s"><input type="text" name="target_expense_2_2" id="" value="শতকরা হার"></td>
                            <td class="column4 style24 f"><input type="text" name="first_quarter_2_2" id="" value="44.69%"></td>
                            <td class="column5 style20 f"><input type="text" name="second_quarter_2_2" id="" value="0%"></td>
                            <td class="column6 style20 f"><input type="text" name="third_quarter_2_2" id="" value="0%"></td>
                            <td class="column7 style20 f"><input type="text" name="fourth_quarter_2_2" id="" value="0%"></td>
                            <td class="column8 style20 f"><input type="text" name="first_to_fourth_quarter_2_2" id="" value="11%"></td>
                          </tr>
                          <tr class="row60">
                            <input name="row_id" value="3" type="hidden">
                            <td class="column1 style63 s style63" rowspan="3"><input type="text" name="activities_3" id="" value="আরবান বিল্ডিং সেফটি প্রজেক্ট"></td>
                            <td class="column2 style68 n style69" rowspan="3"><input type="text" name="budget_3" id="" value="1000000"></td>
                            <td class="column3 style41 s"><input type="text" name="target_expense_3" id="" value="লক্ষ্যমাত্রা"></td>
                            <td class="column4 style18 n"><input type="text" name="first_quarter_3" id="" value="200000"></td>
                            <td class="column5 style18 n"><input type="text" name="second_quarter_3" id="" value="400000"></td>
                            <td class="column6 style18 n"><input type="text" name="third_quarter_3" id="" value="400000"></td>
                            <td class="column7 style18 n"><input type="text" name="fourth_quarter_3" id="" value="0"></td>
                            <td class="column8 style18 f"><input type="text" name="first_to_fourth_quarter_3" id="" value="1000000"></td>
                          </tr>
                          <tr class="row61">
                            <input type="hidden" name="row_id_3_1" value="3"> 
                            <td class="column3 style41 s"><input type="text" name="target_expense_3_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td class="column4 style19 n"><input type="text" name="first_quarter_3_1" id="" value="0"></td>
                            <td class="column5 style19 null"><input type="text" name="second_quarter_3_1" id="" value=""></td>
                            <td class="column6 style19 null"><input type="text" name="third_quarter_3_1" id="" value=""></td>
                            <td class="column7 style19 null"><input type="text" name="fourth_quarter_3_1" id="" value=""></td>
                            <td class="column8 style19 f"><input type="text" name="first_to_fourth_quarter_3_1" id="" value="0"></td>
                          </tr>
                          <tr class="row62">
                            <input type="hidden" name="row_id_3_2" value="3"> 
                            <td class="column3 style41 s"><input type="text" name="target_expense_3_2" id="" value="শতকরা হার"></td>
                            <td class="column4 style25 f"><input type="text" name="first_quarter_3_2" id="" value="0.00%"></td>
                            <td class="column5 style25 f"><input type="text" name="second_quarter_3_2" id="" value="0.00%"></td>
                            <td class="column6 style20 f"><input type="text" name="third_quarter_3_2" id="" value="0%"></td>
                            <td class="column7 style20 n"><input type="text" name="fourth_quarter_3_2" id="" value="0%"></td>
                            <td class="column8 style21 f"><input type="text" name="first_to_fourth_quarter_3_2" id="" value="0%"></td>
                          </tr>
                          <tr class="row63">
                            <input name="row_id" value="4" type="hidden">
                            <td class="column1 style63 s style63" rowspan="3"><input type="text" name="activities_4" id="" value="সেকেন্ড স্মল এন্ড মিডিয়াম সাইজড এন্টারপ্রাইজ ডেভেলপমেন্ট প্রজেক্ট (এসএমইডিপি-২)"></td>
                            <td class="column2 style68 n style69" rowspan="3"><input type="text" name="budget_4" id="" value="5250000"></td>
                            <td class="column3 style41 s"><input type="text" name="target_expense_4" id="" value="শতকরা হার"></td>
                            <td class="column4 style40 n"><input type="text" name="first_quarter_4" id="" value="1300000"></td>
                            <td class="column5 style40 n"><input type="text" name="second_quarter_4" id="" value="1300000"></td>
                            <td class="column6 style40 n"><input type="text" name="third_quarter_4" id="" value="1300000"></td>
                            <td class="column7 style40 n"><input type="text" name="fourth_quarter_4" id="" value="1350000"></td>
                            <td class="column8 style40 f"><input type="text" name="first_to_fourth_quarter_4" id="" value="5250000"></td>
                          </tr>
                          <tr class="row64">
                            <input type="hidden" name="row_id_4_1" value="4"> 
                            <td class="column3 style41 s"><input type="text" name="target_expense_4_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td class="column4 style40 n"><input type="text" name="first_quarter_4_1" id="" value="1267665"></td>
                            <td class="column5 style40 null"><input type="text" name="second_quarter_4_1" id="" value=""></td>
                            <td class="column6 style40 null"><input type="text" name="third_quarter_4_1" id="" value=""></td>
                            <td class="column7 style40 null"><input type="text" name="fourth_quarter_4_1" id="" value=""></td>
                            <td class="column8 style40 f"><input type="text" name="first_to_fourth_quarter_4_1" id="" value="1267665"></td>
                          </tr>
                          <tr class="row65">
                            <input type="hidden" name="row_id_4_2" value="4"> 
                            <td class="column3 style41 s"><input type="text" name="target_expense_4_2" id="" value="শতকরা হার"> </td>
                            <td class="column4 style22 f"><input type="text" name="first_quarter_4_2" id="" value="98%"></td>
                            <td class="column5 style22 f"><input type="text" name="second_quarter_4_2" id="" value="0%"></td>
                            <td class="column6 style22 f"><input type="text" name="third_quarter_4_2" id="" value="0%"></td>
                            <td class="column7 style22 f"><input type="text" name="fourth_quarter_4_2" id="" value="0%"></td>
                            <td class="column8 style22 f"><input type="text" name="first_to_fourth_quarter_4_2" id="" value="24%"></td>
                          </tr>
                          <tr class="row66">
                            <input name="row_id" value="5" type="hidden">
                            <td class="column1 style63 s style63" rowspan="3"><input type="text" name="activities_5" id="" value="পল্লী কর্ম সহায়ক ফাউন্ডেশন (পিকেএসএফ)"></td>
                            <td class="column2 style68 n style69" rowspan="3"><input type="text" name="budget_5" id="" value="9000000"></td>
                            <td class="column3 style41 s"><input type="text" name="target_expense_5" id="" value="শতকরা হার"></td>
                            <td class="column4 style26 n"><input type="text" name="first_quarter_5" id="" value="360000"></td>
                            <td class="column5 style26 n"><input type="text" name="second_quarter_5" id="" value="2283783"></td>
                            <td class="column6 style26 n"><input type="text" name="third_quarter_5" id="" value="2987121"></td>
                            <td class="column7 style26 n"><input type="text" name="fourth_quarter_5" id="" value="3369096"></td>
                            <td class="column8 style26 f"><input type="text" name="first_to_fourth_quarter_5" id="" value="9000000"></td>
                          </tr>
                          <tr class="row67">
                            <input type="hidden" name="row_id_5_1" value="5"> 
                            <td class="column3 style41 s"><input type="text" name="target_expense_5_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td class="column4 style26 n"><input type="text" name="first_quarter_5_1" id="" value="311307"></td>
                            <td class="column5 style27 null"><input type="text" name="second_quarter_5_1" id="" value=""></td>
                            <td class="column6 style27 null"><input type="text" name="third_quarter_5_1" id="" value=""></td>
                            <td class="column7 style27 null"><input type="text" name="fourth_quarter_5_1" id="" value=""></td>
                            <td class="column8 style19 f"><input type="text" name="first_to_fourth_quarter_5_1" id="" value="311307"></td>
                          </tr>
                          <tr class="row68">
                            <input type="hidden" name="row_id_5_2" value="5"> 
                            <td class="column3 style41 s"><input type="text" name="target_expense_5_2" id="" value="শতকরা হার"> </td>
                            <td class="column4 style24 f"><input type="text" name="first_quarter_5_2" id="" value="86.47%"></td>
                            <td class="column5 style20 f"><input type="text" name="second_quarter_5_2" id="" value="0%"></td>
                            <td class="column6 style20 f"><input type="text" name="third_quarter_5_2" id="" value="0%"></td>
                            <td class="column7 style20 f"><input type="text" name="fourth_quarter_5_2" id="" value="0%"></td>
                            <td class="column8 style25 f"><input type="text" name="first_to_fourth_quarter_5_2" id="" value="3.46%"></td>
                          </tr>
                          <tr class="row69">
                            <input name="row_id" value="6" type="hidden">
                            <td class="column1 style63 s style63" rowspan="3"><input type="text" name="activities_6" id="" value="সোস্যাল ডেভেলপমেন্ট ফাউন্ডেশন (এসডিএফ)"></td>
                            <td class="column2 style68 n style69" rowspan="3"><input type="text" name="budget_6" id="" value="2100000"></td>
                            <td class="column3 style41 s"><input type="text" name="target_expense_6" id="" value="শতকরা হার"></td>
                            <td class="column4 style18 n"><input type="text" name="first_quarter_6" id="" value="50000"></td>
                            <td class="column5 style18 n"><input type="text" name="second_quarter_6" id="" value="250000"></td>
                            <td class="column6 style18 n"><input type="text" name="third_quarter_6" id="" value="800000"></td>
                            <td class="column7 style18 n"><input type="text" name="fourth_quarter_6" id="" value="1000000"></td>
                            <td class="column8 style18 f"><input type="text" name="first_to_fourth_quarter_6" id="" value="2100000"></td>
                          </tr>
                          <tr class="row70">
                            <input type="hidden" name="row_id_6_1" value="6"> 
                            <td class="column3 style41 s"><input type="text" name="target_expense_6_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td class="column4 style19 n"><input type="text" name="first_quarter_6_1" id="" value="0"></td>
                            <td class="column5 style19 null"><input type="text" name="second_quarter_6_1" id="" value=""></td>
                            <td class="column6 style19 null"><input type="text" name="third_quarter_6_1" id="" value=""></td>
                            <td class="column7 style19 null"><input type="text" name="fourth_quarter_6_1" id="" value=""></td>
                            <td class="column8 style19 f"><input type="text" name="first_to_fourth_quarter_6_1" id="" value="0"></td>
                          </tr>
                          <tr class="row71">
                            <input type="hidden" name="row_id_6_2" value="6"> 
                            <td class="column3 style41 s"><input type="text" name="target_expense_6_2" id="" value="শতকরা হার"> </td>
                            <td class="column4 style20 f"><input type="text" name="first_quarter_6_2" id="" value="0%"></td>
                            <td class="column5 style20 f"><input type="text" name="second_quarter_6_2" id="" value="0%"></td>
                            <td class="column6 style20 f"><input type="text" name="third_quarter_6_2" id="" value="0%"></td>
                            <td class="column7 style20 f"><input type="text" name="fourth_quarter_6_2" id="" value="0%"></td>
                            <td class="column8 style20 f"><input type="text" name="first_to_fourth_quarter_6_2" id="" value="0%"></td>
                          </tr>
                          <tr class="row72">
                            <input name="row_id" value="7" type="hidden">
                            <td class="column1 style63 s style63" rowspan="3"><input type="text" name="activities_7" id="" value="রুরাল এন্ড পেরি-আরবান হাউজিং ফিন্যান্স প্রজেক্ট"></td>
                            <td class="column2 style68 n style69" rowspan="3"><input type="text" name="budget_7" id="" value="3380000"></td>
                            <td class="column3 style41 s"><input type="text" name="target_expense_7" id="" value="লক্ষ্যমাত্রা"></td>
                            <td class="column4 style18 n"><input type="text" name="first_quarter_7" id="" value="650000"></td>
                            <td class="column5 style18 n"><input type="text" name="second_quarter_7" id="" value="960000"></td>
                            <td class="column6 style18 n"><input type="text" name="third_quarter_7" id="" value="960000"></td>
                            <td class="column7 style18 n"><input type="text" name="fourth_quarter_7" id="" value="810000"></td>
                            <td class="column8 style18 f"><input type="text" name="first_to_fourth_quarter_7" id="" value="3380000"></td>
                          </tr>
                          <tr class="row73">
                            <input type="hidden" name="row_id_7_1" value="7"> 
                            <td class="column3 style41 s"><input type="text" name="target_expense_7_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td class="column4 style19 n"><input type="text" name="first_quarter_7_1" id="" value="0"></td>
                            <td class="column5 style19 null"><input type="text" name="second_quarter_7_1" id="" value=""></td>
                            <td class="column6 style19 null"><input type="text" name="third_quarter_7_1" id="" value=""></td>
                            <td class="column7 style19 null"><input type="text" name="fourth_quarter_7_1" id="" value=""></td>
                            <td class="column8 style19 f"><input type="text" name="first_to_fourth_quarter_7_1" id="" value="0"></td>
                          </tr>
                          <tr class="row74">
                            <input type="hidden" name="row_id_7_2" value="7"> 
                            <td class="column3 style41 s"><input type="text" name="target_expense_7_2" id="" value="শতকরা হার"> </td>
                            <td class="column4 style20 f"><input type="text" name="first_quarter_7_2" id="" value="0%"></td>
                            <td class="column5 style20 f"><input type="text" name="second_quarter_7_2" id="" value="0%"></td>
                            <td class="column6 style20 f"><input type="text" name="third_quarter_7_2" id="" value="0%"></td>
                            <td class="column7 style20 f"><input type="text" name="fourth_quarter_7_2" id="" value="0%"></td>
                            <td class="column8 style20 f"><input type="text" name="first_to_fourth_quarter_7_2" id="" value="0%"></td>
                          </tr>
                          <tr class="row75">
                            <input name="row_id" value="8" type="hidden">
                            <td class="column1 style72 s style74" rowspan="3"><input type="text" name="activities_8" id="" value="মোট উন্নয়ন প্রকল্প (বার্ষিক উন্নয়ন কর্মসূচি বহির্ভূত)"></td>
                            <td class="column2 style66 f style67" rowspan="3"><input type="text" name="budget_8" id="" value="23210000"></td>
                            <td class="column3 style44 s"><input type="text" name="target_expense_8" id="" value="লক্ষ্যমাত্রা"></td>
                            <td class="column4 style43 f"><input type="text" name="first_quarter_8" id="" value="3075000"></td>
                            <td class="column5 style43 f"><input type="text" name="second_quarter_8" id="" value="5848783"></td>
                            <td class="column6 style43 f"><input type="text" name="third_quarter_8" id="" value="7102121"></td>
                            <td class="column7 style43 f"><input type="text" name="fourth_quarter_8" id="" value="7184096"></td>
                            <td class="column8 style43 f"><input type="text" name="first_to_fourth_quarter_8" id="" value="23210000"></td>
                          </tr>
                          <tr class="row76">
                            <input type="hidden" name="row_id_8_1" value="8"> 
                            <td class="column3 style44 s"><input type="text" name="target_expense_8_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td class="column4 style43 f"><input type="text" name="first_quarter_8_1" id="" value="1648245"></td>
                            <td class="column5 style43 f"><input type="text" name="second_quarter_8_1" id="" value="0"></td>
                            <td class="column6 style43 f"><input type="text" name="third_quarter_8_1" id="" value="0"></td>
                            <td class="column7 style43 f"><input type="text" name="fourth_quarter_8_1" id="" value="0"></td>
                            <td class="column8 style43 f"><input type="text" name="first_to_fourth_quarter_8_1" id="" value="1648245"></td>
                          </tr>
                          <tr class="row77">
                            <input type="hidden" name="row_id_8_2" value="8"> 
                            <td class="column3 style44 s"><input type="text" name="target_expense_8_2" id="" value="শতকরা হার"> </td>
                            <td class="column4 style55 s"><input type="text" name="first_quarter_8_2" id="" value="-"></td>
                            <td class="column5 style56 f"><input type="text" name="second_quarter_8_2" id="" value="0"></td>
                            <td class="column6 style56 f"><input type="text" name="third_quarter_8_2" id="" value="0"></td>
                            <td class="column7 style56 f"><input type="text" name="fourth_quarter_8_2" id="" value="0"></td>
                            <td class="column8 style55 f"><input type="text" name="first_to_fourth_quarter_8_2" id="" value="7%"></td>
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
