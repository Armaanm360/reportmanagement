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
                    <a href="#">{{__('Form 1.1.2')}}</a>
                </li>
            </ul>
        </div>
        <form action="{{ url('form-1.1.2') }}" method="POST">
            @csrf
            <div class="rel-26">
                <h5>১.১.২. স্বায়ত্তশাসিত ও অন্যান্য প্রতিষ্ঠান:</h5>
               <table border="1" width="100%">
                    <thead>
                        <tr>
                            <td rowspan="2">প্রতিষ্ঠানের নাম</td>
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
                        <tr>
                            <input name="row_id" value="1" type="hidden">
                            <td rowspan="3"><input type="text" name="activities_1" id="" value="বাংলাদেশ ইনস্টিটিউট অব ক্যাপিটাল মার্কেট"></td>
                            <td rowspan="3"><input type="text" name="budget_1" id="" value="১০০০০০"></td>
                            <td><input type="text" name="target_expense_1" id="" value="লক্ষ্যমাত্রা"></td>
                            <td><input type="text" name="first_quarter_1" id="" value="২৫০০০"></td>
                            <td><input type="text" name="second_quarter_1" id="" value="২৫০০০"></td>
                            <td><input type="text" name="third_quarter_1" id="" value="২৫০০০"></td>
                            <td><input type="text" name="fourth_quarter_1" id="" value="২৫০০০"></td>
                            <td><input type="text" name="first_to_fourth_quarter_1" id="" value="১০০০০০"></td>
                        </tr>
                        <tr>
                            <input type="hidden" name="row_id_1_1" value="1"> 
                            <td><input type="text" name="target_expense_1_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td><input type="text" name="first_quarter_1_1" id="" value="২৯৮৭৫"></td>
                            <td><input type="text" name="second_quarter_1_1" id="" value=""></td>
                            <td><input type="text" name="third_quarter_1_1" id="" value=""></td>
                            <td><input type="text" name="fourth_quarter_1_1" id="" value=""></td>
                            <td><input type="text" name="first_to_fourth_quarter_1_1" id="" value="২৯৮৭৫"></td>
                        </tr>
                        <tr>
                            <input type="hidden" name="row_id_1_2" value="1"> 
                            <td><input type="text" name="target_expense_1_2" id="" value="শতকরা হার"></td>
                            <td><input type="text" name="first_quarter_1_2" id="" value="১২০%"></td>
                            <td><input type="text" name="second_quarter_1_2" id="" value="০%"></td>
                            <td><input type="text" name="third_quarter_1_2" id="" value="০%"></td>
                            <td><input type="text" name="fourth_quarter_1_2" id="" value="০%"></td>
                            <td><input type="text" name="first_to_fourth_quarter_1_2" id="" value="৩০%"></td>
                        </tr>
                        <tr>
                            <input name="row_id" value="2" type="hidden">
                            <td rowspan="3"><input type="text" name="activities_2" id="" value="বাংলাদেশ ইন্সুরেন্স একাডেমি"></td>
                            <td rowspan="3"><input type="text" name="budget_2" id="" value="১৮০০০"></td>
                            <td><input type="text" name="target_expense_2" id="" value="লক্ষ্যমাত্রা"></td>
                            <td><input type="text" name="first_quarter_2" id="" value="৪৯০০"></td>
                            <td><input type="text" name="second_quarter_2" id="" value="৪১০০"></td>
                            <td><input type="text" name="third_quarter_2" id="" value="৪১০০"></td>
                            <td><input type="text" name="fourth_quarter_2" id="" value="৪৯০০"></td>
                            <td><input type="text" name="first_to_fourth_quarter_2" id="" value="১৮০০০"></td>
                        </tr>
                        <tr>
                         <input type="hidden" name="row_id_2_1" value="1"> 
                            <td><input type="text" name="target_expense_2_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td><input type="text" name="first_quarter_2_1" id="" value="৪৬৩১.০৭"></td>
                            <td><input type="text" name="second_quarter_2_1" id="" value=""></td>
                            <td><input type="text" name="third_quarter_2_1" id="" value=""></td>
                            <td><input type="text" name="fourth_quarter_2_1" id="" value=""></td>
                            <td><input type="text" name="first_to_fourth_quarter_2_1" id="" value="৪৬৩১"></td>
                        </tr>
                        <tr>
                          <input type="hidden" name="row_id_2_2" value="1"> 
                            <td><input type="text" name="target_expense_2_2" id="" value="শতকরা হার"></td>
                            <td><input type="text" name="first_quarter_2_2" id="" value="৯৫%"></td>
                            <td><input type="text" name="second_quarter_2_2" id="" value="০%"></td>
                            <td><input type="text" name="third_quarter_2_2" id="" value="০%"></td>
                            <td><input type="text" name="fourth_quarter_2_2" id="" value="০%"></td>
                            <td><input type="text" name="first_to_fourth_quarter_2_2" id="" value="২৬%"></td>
                        </tr>
                        <tr>
                            <input name="row_id" value="3" type="hidden">
                            <td rowspan="3"><input type="text" name="activities_3" id="" value="বীমা উন্নয়ন ও নিয়ন্ত্রণ কর্তৃপক্ষ"></td>
                            <td rowspan="3"><input type="text" name="budget_3" id="" value="১০"></td>
                            <td><input type="text" name="target_expense_3" id="" value="লক্ষ্যমাত্রা"></td>
                            <td><input type="text" name="first_quarter_3" id="" value="০"></td>
                            <td><input type="text" name="second_quarter_3" id="" value="০"></td>
                            <td><input type="text" name="third_quarter_3" id="" value="০"></td>
                            <td><input type="text" name="fourth_quarter_3" id="" value="১০"></td>
                            <td><input type="text" name="first_to_fourth_quarter_3" id="" value="১০"></td>
                        </tr>
                        <tr>
                            
                           <input type="hidden" name="row_id_3_1" value="1"> 
                            <td><input type="text" name="target_expense_3_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td><input type="text" name="first_quarter_3_1" id="" value="০"></td>
                            <td><input type="text" name="second_quarter_3_1" id="" value=""></td>
                            <td><input type="text" name="third_quarter_3_1" id="" value=""></td>
                            <td><input type="text" name="fourth_quarter_3_1" id="" value=""></td>
                            <td><input type="text" name="first_to_fourth_quarter_3_1" id="" value="০"></td>
                        </tr>
                        <tr>
                           <input type="hidden" name="row_id_3_2" value="1"> 
                            <td><input type="text" name="target_expense_3_2" id="" value="শতকরা হার"></td>
                            <td><input type="text" name="first_quarter_3_2" id="" value="০%"></td>
                            <td><input type="text" name="second_quarter_3_2" id="" value="০%"></td>
                            <td><input type="text" name="third_quarter_3_2" id="" value="০%"></td>
                            <td><input type="text" name="fourth_quarter_3_2" id="" value="০%"></td>
                            <td><input type="text" name="first_to_fourth_quarter_3_2" id="" value="০%"></td>
                        </tr>
                        <input name="row_id" value="4" type="hidden">
                        <tr><td rowspan="3"><input type="text" name="activities_4" id="" value="বাংলাদেশ মিউনিসিপাল ডেভেলপমেন্ট ফান্ড (বিএমডিএফ)"></td>
                        <td rowspan="3"><input type="text" name="budget_4" id="" value="৩৫০০০"></td>
                        <td><input type="text" name="target_expense_4" id="" value="লক্ষ্যমাত্রা"></td>
                        <td><input type="text" name="first_quarter_4" id="" value="৮৭৫০"></td>
                        <td><input type="text" name="second_quarter_4" id="" value="৮৭৫০"></td>
                        <td><input type="text" name="third_quarter_4" id="" value="৮৭৫০"></td>
                        <td><input type="text" name="fourth_quarter_4" id="" value="৮৭৫০"></td>
                        <td><input type="text" name="first_to_fourth_quarter_4" id="" value="৩৫০০০"></td>
                    </tr>
                    <tr>
                        
                       <input type="hidden" name="row_id_4_1" value="1"> 
                        <td><input type="text" name="target_expense_4_1" id="" value="প্রকৃত ব্যয়"></td>
                        <td><input type="text" name="first_quarter_4_1" id="" value="৮৬৭৪"></td>
                        <td><input type="text" name="second_quarter_4_1" id="" value="০"></td>
                        <td><input type="text" name="third_quarter_4_1" id="" value="০"></td>
                        <td><input type="text" name="fourth_quarter_4_1" id="" value="০"></td>
                        <td><input type="text" name="first_to_fourth_quarter_4_1" id="" value="৮৬৭৪"></td>
                    </tr>
                    <tr>
                       <input type="hidden" name="row_id_4_2" value="1"> 
                        <td><input type="text" name="target_expense_4_2" id="" value="শতকরা হার"></td>
                        <td><input type="text" name="first_quarter_4_2" id="" value="৯৯.১৩%"></td>
                        <td><input type="text" name="second_quarter_4_2" id="" value="০.০০%"></td>
                        <td><input type="text" name="third_quarter_4_2" id="" value="০.০০%"></td>
                        <td><input type="text" name="fourth_quarter_4_2" id="" value="০.০০%"></td>
                        <td><input type="text" name="first_to_fourth_quarter_4_2" id="" value="২৫%"></td>
                    </tr>
                    <tr>
                        <input name="row_id" value="5" type="hidden">
                        <td rowspan="3"><input type="text" name="activities_5" id="" value="বাংলাদেশ ব্যাংক"></td>
                        <td rowspan="3"><input type="text" name="budget_5" id="" value="১০"></td>
                        <td><input type="text" name="target_expense_5" id="" value="লক্ষ্যমাত্রা"></td>
                        <td><input type="text" name="first_quarter_5" id="" value="০"></td>
                        <td><input type="text" name="second_quarter_5" id="" value="০"></td>
                        <td><input type="text" name="third_quarter_5" id="" value="০"></td>
                        <td><input type="text" name="fourth_quarter_5" id="" value="১০"></td>
                        <td><input type="text" name="first_to_fourth_quarter_5" id="" value="১০"></td>
                    </tr>
                    <tr>
                        
                       <input type="hidden" name="row_id_5_1" value="1"> 
                        <td><input type="text" name="target_expense_5_1" id="" value="প্রকৃত ব্যয়"></td>
                        <td><input type="text" name="first_quarter_5_1" id="" value="০"></td>
                        <td><input type="text" name="second_quarter_5_1" id="" value=""></td>
                        <td><input type="text" name="third_quarter_5_1" id="" value=""></td>
                        <td><input type="text" name="fourth_quarter_5_1" id="" value=""></td>
                        <td><input type="text" name="first_to_fourth_quarter_5_1" id="" value="০"></td>
                    </tr>
                    <tr>
                       <input type="hidden" name="row_id_5_2" value="1"> 
                        <td><input type="text" name="target_expense_5_2" id="" value="শতকরা হার"></td>
                        <td><input type="text" name="first_quarter_5_2" id="" value="০%"></td>
                        <td><input type="text" name="second_quarter_5_2" id="" value="০%"></td>
                        <td><input type="text" name="third_quarter_5_2" id="" value="০%"></td>
                        <td><input type="text" name="fourth_quarter_5_2" id="" value="০%"></td>
                        <td><input type="text" name="first_to_fourth_quarter_5_2" id="" value="০%"></td>
                    </tr>
                    <tr>
                        <input name="row_id" value="6" type="hidden">
                        <td rowspan="3"><input type="text" name="activities_6" id="" value="বাংলাদেশ সিকিউরিটিজ অ্যান্ড এক্সচেঞ্জ কমিশন"></td>
                        <td rowspan="3"><input type="text" name="budget_6" id="" value="১০"></td>
                        <td><input type="text" name="target_expense_6" id="" value="লক্ষ্যমাত্রা"></td>
                        <td><input type="text" name="first_quarter_6" id="" value="০"></td>
                        <td><input type="text" name="second_quarter_6" id="" value="০"></td>
                        <td><input type="text" name="third_quarter_6" id="" value="০"></td>
                        <td><input type="text" name="fourth_quarter_6" id="" value="১০"></td>
                        <td><input type="text" name="first_to_fourth_quarter_6" id="" value="১০"></td>
                    </tr>
                    <tr>
                        
                       <input type="hidden" name="row_id_6_1" value="1"> 
                        <td><input type="text" name="target_expense_6_1" id="" value="প্রকৃত ব্যয়"></td>
                        <td><input type="text" name="first_quarter_6_1" id="" value="০"></td>
                        <td><input type="text" name="second_quarter_6_1" id="" value=""></td>
                        <td><input type="text" name="third_quarter_6_1" id="" value=""></td>
                        <td><input type="text" name="fourth_quarter_6_1" id="" value=""></td>
                        <td><input type="text" name="first_to_fourth_quarter_6_1" id="" value="০"></td>
                    </tr>
                    <tr>
                       <input type="hidden" name="row_id_6_2" value="1"> 
                        <td><input type="text" name="target_expense_6_2" id="" value="শতকরা হার"></td>
                        <td><input type="text" name="first_quarter_6_2" id="" value="০%"></td>
                        <td><input type="text" name="second_quarter_6_2" id="" value="০%"></td>
                        <td><input type="text" name="third_quarter_6_2" id="" value="০%"></td>
                        <td><input type="text" name="fourth_quarter_6_2" id="" value="০%"></td>
                        <td><input type="text" name="first_to_fourth_quarter_6_2" id="" value="০%"></td>
                    </tr>
                    <tr>
                        <input name="row_id" value="7" type="hidden">
                        <td rowspan="3"><input type="text" name="activities_7" id="" value="সেকেন্ড স্মল এন্ড মিডিয়াম সাইজড এন্টারপ্রাইজ ডেভেলপমেন্ট প্রজেক্ট (এসএমইডিপি-২)"></td>
                        <td rowspan="3"><input type="text" name="budget_7" id="" value="৯৫৭৯০০"></td>
                        <td><input type="text" name="target_expense_7" id="" value="লক্ষ্যমাত্রা"></td>
                        <td><input type="text" name="first_quarter_7" id="" value="২৬০০০০"></td>
                        <td><input type="text" name="second_quarter_7" id="" value="২৬০০০০"></td>
                        <td><input type="text" name="third_quarter_7" id="" value="২৬০০০০"></td>
                        <td><input type="text" name="fourth_quarter_7" id="" value="১৭৭৯০০"></td>
                        <td><input type="text" name="first_to_fourth_quarter_7" id="" value="৯৫৭৯০০"></td>
                    </tr>
                    <tr>
                        
                       <input type="hidden" name="row_id_7_1" value="1"> 
                        <td><input type="text" name="target_expense_7_1" id="" value="প্রকৃত ব্যয়"></td>
                        <td><input type="text" name="first_quarter_7_1" id="" value="২৫৪১৪১"></td>
                        <td><input type="text" name="second_quarter_7_1" id="" value=""></td>
                        <td><input type="text" name="third_quarter_7_1" id="" value=""></td>
                        <td><input type="text" name="fourth_quarter_7_1" id="" value=""></td>
                        <td><input type="text" name="first_to_fourth_quarter_7_1" id="" value="২৫৪১৪১"></td>
                    </tr>
                    <tr>
                       <input type="hidden" name="row_id_7_2" value="1"> 
                        <td><input type="text" name="target_expense_7_2" id="" value="শতকরা হার"></td>
                        <td><input type="text" name="first_quarter_7_2" id="" value="৯৮%"></td>
                        <td><input type="text" name="second_quarter_7_2" id="" value="০%"></td>
                        <td><input type="text" name="third_quarter_7_2" id="" value="০%"></td>
                        <td><input type="text" name="fourth_quarter_7_2" id="" value="০%"></td>
                        <td><input type="text" name="first_to_fourth_quarter_7_2" id="" value="২৭%"></td>
                    </tr>
                    <tr>
                        <input name="row_id" value="8" type="hidden">
                        <td rowspan="3"><input type="text" name="activities_8" id="" value="মোট স্বায়ত্তশাসিত ও অন্যান্য প্রতিষ্ঠান"></td>
                        <td rowspan="3"><input type="text" name="budget_8" id="" value="১১১০৯৪০"></td>
                        <td><input type="text" name="target_expense_8" id="" value="লক্ষ্যমাত্রা"></td>
                        <td><input type="text" name="first_quarter_8" id="" value="২৯৮৬৫০"></td>
                        <td><input type="text" name="second_quarter_8" id="" value="২৯৭৮৫০"></td>
                        <td><input type="text" name="third_quarter_8" id="" value="২৯৭৮৫০"></td>
                        <td><input type="text" name="fourth_quarter_8" id="" value="২১৬৫৯০"></td>
                        <td><input type="text" name="first_to_fourth_quarter_8" id="" value="১১১০৯৪০"></td>
                    </tr>
                    <tr>
                        
                       <input type="hidden" name="row_id_8_1" value="1"> 
                        <td><input type="text" name="target_expense_8_1" id="" value="প্রকৃত ব্যয়"></td>
                        <td><input type="text" name="first_quarter_8_1" id="" value="২৯৭৩২১"></td>
                        <td><input type="text" name="second_quarter_8_1" id="" value="০"></td>
                        <td><input type="text" name="third_quarter_8_1" id="" value="০"></td>
                        <td><input type="text" name="fourth_quarter_8_1" id="" value="০"></td>
                        <td><input type="text" name="first_to_fourth_quarter_8_1" id="" value="২৯৭৩২১"></td>
                    </tr>
                    <tr>
                       <input type="hidden" name="row_id_8_2" value="1"> 
                        <td><input type="text" name="target_expense_8_2" id="" value="শতকরা হার"></td>
                        <td><input type="text" name="first_quarter_8_2" id="" value="৯৯.৫৬%"></td>
                        <td><input type="text" name="second_quarter_8_2" id="" value="০"></td>
                        <td><input type="text" name="third_quarter_8_2" id="" value="০"></td>
                        <td><input type="text" name="fourth_quarter_8_2" id="" value="০"></td>
                        <td><input type="text" name="first_to_fourth_quarter_8_2" id="" value="২৬.৭৬%"></td>
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
