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
                    <a href="#">{{__('Form 1.2.2')}}</a>
                </li>
            </ul>
        </div>
       <form action="form-1.2.2" method="POST">
           @csrf
            <div class="rel-26">
                <h5>১.২.২  উন্নয়ন প্রকল্প (বার্ষিক উন্নয়ন কর্মসূচি-২২):</h5>
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
                        <tr>
                            <input name="row_id" value="1" type="hidden">
                            <td rowspan="3"><input type="text" name="activities_1" id="" value="পুঁজিবাজার উন্নয়ন কর্মসূচি-৩"></td>
                            <td rowspan="3"><input type="text" name="budget_1" id="" value="১০০"></td>
                            <td><input type="text" name="target_expense_1" id="" value="লক্ষ্যমাত্রা"></td>
                            <td><input type="text" name="first_quarter_1" id="" value="২৫"></td>
                            <td><input type="text" name="second_quarter_1" id="" value="২৫"></td>
                            <td><input type="text" name="third_quarter_1" id="" value="২৫"></td>
                            <td><input type="text" name="fourth_quarter_1" id="" value="২৫"></td>
                            <td><input type="text" name="first_to_fourth_quarter_1" id="" value="১০০"></td>
                        </tr>
                        <tr>
                            <input name="row_id_1_1" value="1" type="hidden">
                            <td><input type="text" name="target_expense_1_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td><input type="text" name="first_quarter_1_1" id="" value="৪৫৭"></td>
                            <td><input type="text" name="second_quarter_1_1" id="" value=""></td>
                            <td><input type="text" name="third_quarter_1_1" id="" value=""></td>
                            <td><input type="text" name="fourth_quarter_1_1" id="" value=""></td>
                            <td><input type="text" name="first_to_fourth_quarter_1_1" id="" value="৪৫৭"></td>
                        </tr>
                        <tr>
                            <input name="row_id_1_2" value="1" type="hidden">
                            <td><input type="text" name="target_expense_1_2" id="" value="শতকরা হার"></td>
                            <td><input type="text" name="first_quarter_1_2" id="" value="১৮২৮%"></td>
                            <td><input type="text" name="second_quarter_1_2" id="" value="০.০০%"></td>
                            <td><input type="text" name="third_quarter_1_2" id="" value="০%"></td>
                            <td><input type="text" name="fourth_quarter_1_2" id="" value="০%"></td>
                            <td><input type="text" name="first_to_fourth_quarter_1_2" id="" value="৪৫৭%"></td>
                        </tr>
                        <tr>
                            <input name="row_id" value="2" type="hidden">
                            <td rowspan="3"><input type="text" name="activities_2" id="" value="বাংলাদেশে তৈরি পোশাক খাতের নিরাপত্তাজনিত সংস্কার ও পরিবেশগত উন্নয়ন প্রকল্প"></td>
                            <td rowspan="3"><input type="text" name="budget_2" id="" value="১১৪৯০০"></td>
                            <td><input type="text" name="target_expense_2" id="" value="লক্ষ্যমাত্রা"></td>
                            <td><input type="text" name="first_quarter_2" id="" value="১০০৪"></td>
                            <td><input type="text" name="second_quarter_2" id="" value="১৪৯৯৪"></td>
                            <td><input type="text" name="third_quarter_2" id="" value="১৬১৯৯"></td>
                            <td><input type="text" name="fourth_quarter_2" id="" value="৮২৭০৩"></td>
                            <td><input type="text" name="first_to_fourth_quarter_2" id="" value="১১৪৯০০"></td>
                        </tr>
                        <tr>
                            <input name="row_id_2_1" value="2" type="hidden">
                            <td><input type="text" name="target_expense_2_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td><input type="text" name="first_quarter_2_1" id="" value=""></td>
                            <td><input type="text" name="second_quarter_2_1" id="" value=""></td>
                            <td><input type="text" name="third_quarter_2_1" id="" value=""></td>
                            <td><input type="text" name="fourth_quarter_2_1" id="" value=""></td>
                            <td><input type="text" name="first_to_fourth_quarter_2_1" id="" value="০"></td>
                        </tr>
                        <tr>
                            <input name="row_id_2_2" value="2" type="hidden">
                            <td><input type="text" name="target_expense_2_2" id="" value="শতকরা হার"></td>
                            <td><input type="text" name="first_quarter_2_2" id="" value="০%"></td>
                            <td><input type="text" name="second_quarter_2_2" id="" value="০%"></td>
                            <td><input type="text" name="third_quarter_2_2" id="" value="০%"></td>
                            <td><input type="text" name="fourth_quarter_2_2" id="" value="০%"></td>
                            <td><input type="text" name="first_to_fourth_quarter_2_2" id="" value="০%"></td>
                        </tr>
                        <tr>
                            <input name="row_id" value="3" type="hidden">
                            <td rowspan="3"><input type="text" name="activities_3" id="" value="বাংলাদেশ বীমা খাত উন্নয়ন প্রকল্প"></td>
                            <td rowspan="3"><input type="text" name="budget_3" id="" value="১০৪৫০০০"></td>
                            <td><input type="text" name="target_expense_3" id="" value="লক্ষ্যমাত্রা"></td>
                            <td><input type="text" name="first_quarter_3" id="" value="৫২২৫০.০"></td>
                            <td><input type="text" name="second_quarter_3" id="" value="২৬১২৫০.০"></td>
                            <td><input type="text" name="third_quarter_3" id="" value="৩১৩৫০০.০"></td>
                            <td><input type="text" name="fourth_quarter_3" id="" value="৪১৮০০০.০"></td>
                            <td><input type="text" name="first_to_fourth_quarter_3" id="" value="১০৪৫০০০"></td>
                        </tr>
                        <tr>
                            
                            <input name="row_id_3_1" value="3" type="hidden">
                            <td><input type="text" name="target_expense_3_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td><input type="text" name="first_quarter_3_1" id="" value="৫৩২৫০.৩৬"></td>
                            <td><input type="text" name="second_quarter_3_1" id="" value="০.০০"></td>
                            <td><input type="text" name="third_quarter_3_1" id="" value="০.০০"></td>
                            <td><input type="text" name="fourth_quarter_3_1" id="" value="০.০০"></td>
                            <td><input type="text" name="first_to_fourth_quarter_3_1" id="" value="৫৩২৫০.৩৬"></td>
                        </tr>
                        <tr>
                           <input name="row_id_3_1" value="3" type="hidden">
                            <td><input type="text" name="target_expense_3_2" id="" value="শতকরা হার"></td>
                            <td><input type="text" name="first_quarter_3_2" id="" value="১০১.৯১%"></td>
                            <td><input type="text" name="second_quarter_3_2" id="" value="০.০০%"></td>
                            <td><input type="text" name="third_quarter_3_2" id="" value="০%"></td>
                            <td><input type="text" name="fourth_quarter_3_2" id="" value="০%"></td>
                            <td><input type="text" name="first_to_fourth_quarter_3_2" id="" value="৫.১০%"></td>
                        </tr>
                        <tr>
                            <input name="row_id" value="4" type="hidden">
                            <td rowspan="3"><input type="text" name="activities_4" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের অননুোদিত প্রকল্পের জন্য সংরক্ষিত (থোক)"></td>
                            <td rowspan="3"><input type="text" name="budget_4" id="" value="৩৪০০"></td>
                            <td><input type="text" name="target_expense_4" id="" value="লক্ষ্যমাত্রা"></td>
                            <td><input type="text" name="first_quarter_4" id="" value="০"></td>
                            <td><input type="text" name="second_quarter_4" id="" value="০"></td>
                            <td><input type="text" name="third_quarter_4" id="" value="০"></td>
                            <td><input type="text" name="fourth_quarter_4" id="" value="৩৪০০"></td>
                            <td><input type="text" name="first_to_fourth_quarter_4" id="" value="৩৪০০"></td>
                        </tr>
                        <tr>
                            
                           <input name="row_id_4_1" value="4" type="hidden">
                            <td><input type="text" name="target_expense_4_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td><input type="text" name="first_quarter_4_1" id="" value=""></td>
                            <td><input type="text" name="second_quarter_4_1" id="" value=""></td>
                            <td><input type="text" name="third_quarter_4_1" id="" value=""></td>
                            <td><input type="text" name="fourth_quarter_4_1" id="" value=""></td>
                            <td><input type="text" name="first_to_fourth_quarter_4_1" id="" value="০"></td>
                        </tr>
                        <tr>
                           <input name="row_id_4_2" value="4" type="hidden">
                            <td><input type="text" name="target_expense_4_2" id="" value="শতকরা হার"></td>
                            <td><input type="text" name="first_quarter_4_2" id="" value="০%"></td>
                            <td><input type="text" name="second_quarter_4_2" id="" value="০%"></td>
                            <td><input type="text" name="third_quarter_4_2" id="" value="০%"></td>
                            <td><input type="text" name="fourth_quarter_4_2" id="" value="০%"></td>
                            <td><input type="text" name="first_to_fourth_quarter_4_2" id="" value="০%"></td>
                        </tr>
                        <tr>
                            <input name="row_id" value="5" type="hidden">
                            <td rowspan="3"><input type="text" name="activities_5" id="" value="মোট উন্নয়ন প্রকল্প(বার্ষিক উন্নয়ন কর্মসূচি)"></td>
                            <td rowspan="3"><input type="text" name="budget_5" id="" value="১১৬৩৪০০"></td>
                            <td><input type="text" name="target_expense_5" id="" value="লক্ষ্যমাত্রা"></td>
                            <td><input type="text" name="first_quarter_5" id="" value="৫৩২৭৯"></td>
                            <td><input type="text" name="second_quarter_5" id="" value="২৭৬২৬৯"></td>
                            <td><input type="text" name="third_quarter_5" id="" value="৩২৯৭২৪"></td>
                            <td><input type="text" name="fourth_quarter_5" id="" value="৫০৪১২৮"></td>
                            <td><input type="text" name="first_to_fourth_quarter_5" id="" value="১১৬৩৪০০"></td>
                        </tr>
                        <tr>
                            
                           <input name="row_id_5_1" value="5" type="hidden">
                            <td><input type="text" name="target_expense_5_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td><input type="text" name="first_quarter_5_1" id="" value="৫৩৭০৭"></td>
                            <td><input type="text" name="second_quarter_5_1" id="" value="০"></td>
                            <td><input type="text" name="third_quarter_5_1" id="" value="০"></td>
                            <td><input type="text" name="fourth_quarter_5_1" id="" value="০"></td>
                            <td><input type="text" name="first_to_fourth_quarter_5_1" id="" value="৫৩৭০৭"></td>
                        </tr>
                        <tr>
                           <input name="row_id_5_2" value="5" type="hidden">
                            <td><input type="text" name="target_expense_5_2" id="" value="শতকরা হার"></td>
                            <td><input type="text" name="first_quarter_5_2" id="" value="১০১%"></td>
                            <td><input type="text" name="second_quarter_5_2" id="" value="০%"></td>
                            <td><input type="text" name="third_quarter_5_2" id="" value="০%"></td>
                            <td><input type="text" name="fourth_quarter_5_2" id="" value="০%"></td>
                            <td><input type="text" name="first_to_fourth_quarter_5_2" id="" value="৪.৬২%"></td>
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
