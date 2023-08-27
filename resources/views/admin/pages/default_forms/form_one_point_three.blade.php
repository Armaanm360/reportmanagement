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
                    <a href="#">{{__('Form 1.3')}}</a>
                </li>
            </ul>
        </div>
      <form action="{{ url('form-1.3') }}" method="POST">
          @csrf
            <div class="rel-26">
                <h5>১.৩.  মোট পরিচালন ও উন্নয়ন ব্যয়:</h5>
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <td rowspan="2">মন্ত্রণালয়/বিভাগ</td>
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
                            <td rowspan="3"><input type="text" name="activities_1" id="" value="আর্থিক প্রতিষ্ঠান বিভাগ"></td>
                            <td rowspan="3"><input type="text" name="budget_1" id="" value="২৫৫৯৪৭০০"></td>
                            <td><input type="text" name="target_expense_1" id="" value="লক্ষ্যমাত্রা"></td>
                            <td><input type="text" name="first_quarter_1" id="" value="৩৪৫২৬৯৯"></td>
                            <td><input type="text" name="second_quarter_1" id="" value="৬৪৪৭৬৩৪"></td>
                            <td><input type="text" name="third_quarter_1" id="" value="৭৭৬০৭৫৫"></td>
                            <td><input type="text" name="fourth_quarter_1" id="" value="৭৯৩৩৬১২"></td>
                            <td><input type="text" name="first_to_fourth_quarter_1" id="" value="২৫৫৯৪৭০০"></td>
                        </tr>
                        <tr>
                            <input type="hidden" name="row_id_1_1" value="1"> 
                            <td><input type="text" name="target_expense_1_1" id="" value="প্রকৃত ব্যয়"></td>
                            <td><input type="text" name="first_quarter_1_1" id="" value="২০১৭১৯৭"></td>
                            <td><input type="text" name="second_quarter_1_1" id="" value="০"></td>
                            <td><input type="text" name="third_quarter_1_1" id="" value="০"></td>
                            <td><input type="text" name="fourth_quarter_1_1" id="" value="০"></td>
                            <td><input type="text" name="first_to_fourth_quarter_1_1" id="" value="২০১৭১৯৭"></td>
                        </tr>
                        <tr>
                            <input type="hidden" name="row_id_1_2" value="1"> 
                            <td><input type="text" name="target_expense_1_2" id="" value="শতকরা হার"></td>
                            <td><input type="text" name="first_quarter_1_2" id="" value="৫৮%"></td>
                            <td><input type="text" name="second_quarter_1_2" id="" value="০%"></td>
                            <td><input type="text" name="third_quarter_1_2" id="" value="০%"></td>
                            <td><input type="text" name="fourth_quarter_1_2" id="" value="০%"></td>
                            <td><input type="text" name="first_to_fourth_quarter_1_2" id="" value="৮%"></td>
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
