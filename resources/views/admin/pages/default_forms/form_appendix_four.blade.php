@extends('admin.master')
@section('content')
<style>
    * {
        list-style-type: none;
    }

    .item input {
        border: none;
        width: 100%;
        text-align: inherit;
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
                    <a href="#">{{__('')}}</a>
                </li>
            </ul>
        </div>


 <form action="{{ url('appendix_four') }}" method="post">
        @csrf
              <div class="mt-4 item">
                <div class="header-item">
                    <div style="text-align: right;">
                      <h4>পরিশিষ্ট-৪</h4>
                    </div>
                    <div>
                      <h6>বিষয়</h6>
                    </div>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li><input type="text" name="budget_sub_1[]" id="" value="৭। আর্থিক প্রতিষ্ঠান বিভাগের চলমান ২০১৯-২০ অর্থবছরের বাজেট বাস্তবায়ন অগ্রগতি পরিবীক্ষণ। (ত্রৈমাসিক/ষান্মাষিক/বাৎসরিক)"></li>
                      <li><input type="text" name="budget_sub_2[]" id="" value="৮। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থা/প্রকল্পসমুহের চলমান ২০১৯-২০ অর্থবছরের বাজেট বাস্তবায়ন অগ্রগতি পরিবীক্ষণ। (ত্রৈমাসিক/ষান্মাষিক/বাৎসরিক)"></li>
                    </ul>
                  </div>
                  <div class="mt-4 item-table">
                      <h6 align="right">(হাজার টাকায়)</h6>
                      <table border="1" width="100%">
                        <thead>
                            <tr>
                                <td>শাখা/অধিশাখা/প্রতিষ্ঠান/প্রকল্পের নাম</td>
                                <td>বাজেট ২০১৯-২০</td>
                                <td>লক্ষ্যমাত্রা/ প্রকৃত ব্যয়</td>
                                <td>১ম কোয়ার্টার(জুলাই-সেপ্টেম্বর ১৯)</td>
                                <td>২য় কোয়ার্টার(অক্টোবর-ডিসেম্বর ১৯)</td>
                                <td>৩য় কোয়ার্টার(জানুয়ারি-মার্চ ২০)</td>
                                <td>৪র্থ কোয়ার্টার(এপ্রিল-জুন ২০)</td>
                                <td>(১ম-৪র্থ) কোয়ার্টার(জুলাই ১৯-জুন ২০)</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="3"><input type="text" name="branch" id="" value="আর্থিক প্রতিষ্ঠান বিভাগ"></td>
                                <td rowspan="3"><input type="text" name="budget" id="" value=""></td>
                                <td><input type="text" name="target" id="" value="লক্ষ্যমাত্রা"></td>
                                <td><input type="text" name="first_quarter_1" id="" value=""></td>
                                <td><input type="text" name="second_quarter_1" id="" value=""></td>
                                <td><input type="text" name="third_quarter_1" id="" value=""></td>
                                <td><input type="text" name="fourth_quarter_1" id="" value=""></td>
                                <td><input type="text" name="first_fourth_quarter_1" id="" value=""></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="expense" id="" value="প্রকৃত ব্যয়"></td>
                                <td><input type="text" name="first_quarter_2" id="" value=""></td>
                                <td><input type="text" name="second_quarter_2" id="" value=""></td>
                                <td><input type="text" name="third_quarter_2" id="" value=""></td>
                                <td><input type="text" name="fourth_quarter_2" id="" value=""></td>
                                <td><input type="text" name="first_fourth_quarter_2" id="" value=""></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="ratio" id="" value="শতকরা হার"></td>
                                <td><input type="text" name="first_quarter_3" id="" value=""></td>
                                <td><input type="text" name="second_quarter_3" id="" value=""></td>
                                <td><input type="text" name="third_quarter_3" id="" value=""></td>
                                <td><input type="text" name="fourth_quarter_3" id="" value=""></td>
                                <td><input type="text" name="first_fourth_quarter_3" id="" value=""></td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
              </div>
              <div class="mt-4 mb-4 input-final">
                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
              <button type="submit" class="btn btn-danger">সংশোধন</button>
              </div>
          </form>
      


        @endsection
