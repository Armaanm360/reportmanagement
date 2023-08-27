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



        <form action="{{ url('appendix_two') }}" method="post">
            @csrf
            <div class="mt-4 item">
                <div class="header-item">
                    <h3> বিষয়:বাজেট</h3>
                    <div style="text-align: right;">
                        <h4>পরিশিষ্ট-১</h4>
                    </div>
                    <div>
                        <h6>বিষয়</h6>
                    </div>
                </div>
                <div class="listed-content">
                    <ul>
                        <li> <input type="text" name="appendix_one_subject[]" id=""
                                value="১।আর্থিক প্রতিষ্ঠান বিভাগের ২০২০-২১ অর্থবছরের মধ্যমেয়াদি বাজেট কাঠামো সংশোধন ও হালনাগাদকরণ সংক্রান্ত তথ্য প্রেরণ। (বিসি-১) (বাৎসরিক)">
                        </li>
                        <li><input type="text" name="appendix_two_subject[]" id=""
                                value="২। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থা/প্রকল্পসমুহের ২০২০-২১ অর্থবছরের মধ্যমেয়াদি বাজেট কাঠামো সংশোধন ও হালনাগাদকরণ সংক্রান্ত তথ্য প্রেরণ। (বিসি-১) (বাৎসরিক)">
                        </li>
                    </ul>
                </div>
                <div class="mt-4 item-table">
                    <h4 align="center">ছক-ক (পরিচালন বাজেট)</h4>
                    <h6 align="center"><input type="text" name="appendix_one_ka[]" id=""
                            value="সংশোধিত ২০১৯-২০, প্রস্তাবিত ২০২০-২১ এবং প্রক্ষেপন ২০২১-২২ ও ২০২২-২৩"> </h6>
                    <h6 align="right">(হাজার টাকায়)</h6>
                    <table border="1">
                        <thead>
                            <tr class="row72">
                                <td class="column0 style42 s style43" rowspan="2">মন্ত্রণালয়/বিভাগ/দপ্তর/সংস্থা/প্রকল্প
                                </td>
                                <td class="column1 style37 s">বাজেট</td>
                                <td class="column2 style39 s">সংশোধিত</td>
                                <td class="column3 style42 s style43" rowspan="2">প্রস্তাবিত বাজেট ২০২০-২১</td>
                                <td class="column4 style44 s style45" colspan="2">প্রক্ষেপন</td>
                            </tr>
                            <tr class="row73">
                                <td class="column1 style38 s">২০১৯-২০</td>
                                <td class="column2 style38 s">২০১৯-২০</td>
                                <td class="column4 style38 s">২০২১-২২</td>
                                <td class="column5 style38 s">২০২২-২৩</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="row74">
                                <input type="hidden" name="row_id" value="1">
                                <td class="column0 style40 null"><input type="text" name="ministry" id="" value=""></td>
                                <td class="column1 style41 null"><input type="text" name="budget" id="" value=""></td>
                                <td class="column2 style41 null"><input type="text" name="revised" id="" value=""></td>
                                <td class="column3 style41 null"><input type="text" name="proposed_budget" id=""
                                        value=""></td>
                                <td class="column4 style38 null"><input type="text" name="projection_1" id="" value="">
                                </td>
                                <td class="column5 style38 null"><input type="text" name="projection_2" id="" value="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 item-table">
                    <h4 align="center"> ছক-খ (উন্নয়ন বাজেট)</h4>
                    <h6 align="center"><input type="text" name="appendix_one_kha[]"
                            value="সংশোধিত ২০১৯-২০, প্রস্তাবিত ২০২০-২১ এবং প্রক্ষেপন ২০২১-২২ ও ২০২২-২৩"></h6>
                    <h6 align="right"> (হাজার টাকায়)</h6>
                    <table border="1">
                        <thead>
                            <tr class="row72">
                                <td class="column0 style54 s style55">মন্ত্রণালয়/বিভাগ/দপ্তর/সংস্থা/প্রকল্প</td>
                                <td class="column2 style50 s" rowspan="3">বাজেট ২০১৯-২০&nbsp;</td>
                                <td class="column2 style50 s" rowspan="3">সংশোধিত ২০১৯-২০&nbsp;</td>
                                <td class="column3 style57 s style58" colspan="6">প্রস্তাবিত বাজেট ২০২০-২১</td>
                                <td class="column9 style59 s style62" colspan="2" rowspan="2">প্রক্ষেপণ</td>
                            </tr>
                            <tr class="row73">
                                <td class="column0 style52 s" rowspan="2">উন্নয়ন&nbsp;প্রকল্পের নাম</td>
                                <td class="column3 style54 s style55" rowspan="2">ধরণ</td>
                                <td class="column4 style57 s style58" colspan="2">জিওবি</td>
                                <td class="column6 style57 s style58" colspan="2">পিএ</td>
                                <td class="column8 style63 s style64" rowspan="2">মোট</td>
                            </tr>
                            <tr class="row73">
                                <td class="column4 style49 s">GoB</td>
                                <td class="column5 style49 s">GoB (RPA)</td>
                                <td class="column6 style49 s">RPA (Others)</td>
                                <td class="column7 style49 s">DPA</td>
                                <td class="column9 style53 s">&nbsp;২০২১-২২</td>
                                <td class="column10 style53 s">&nbsp;২০২২-২৩</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="row83">
                                <input type="hidden" name="row_id" value="10">
                                <td class="column0 style65  style66" rowspan="2"><input type="text" name="ministry_10"
                                        id="" value=""></td>
                                <td class="column1 style67  style68" rowspan="2"> <input type="text" name="budget_10"
                                        id="" value=""></td>
                                <td class="column2 style67 style68" rowspan="2"> <input type="text" name="revised_10"
                                        id="" value=""></td>
                                <td class="column3 style53 s">

                                    <input type="text" name="revenue_10" id="" value="রাজস্ব"></td>
                                <td class="column4 style51 "> <input type="text" name="gob_1_10" id="" value=""></td>
                                <td class="column5 style51 "> <input type="text" name="gob_2_10" id="" value=""></td>
                                <td class="column6 style51 "> <input type="text" name="rpa_1_10" id="" value=""></td>
                                <td class="column7 style51 "> <input type="text" name="dpa_1_10" id="" value=""></td>
                                <td class="column8 style65  style66" rowspan="2"> <input type="text" name="total_10"
                                        id="" value=""></td>
                                <td class="column9 style65  style66" rowspan="2"> <input type="text"
                                        name="projection_1_10" id="" value=""></td>
                                <td class="column10 style65  style66" rowspan="2"> <input type="text"
                                        name="projection_2_10" id="" value=""></td>
                            </tr>
                            <tr class="row84">
                                <input type="hidden" name="row_id" value="11">
                                <td class="column3 style53 s">

                                    <input type="text" name="capital_11" id="" value="মূলধন"></td>
                                <td class="column4 style51 "> <input type="text" name="gob_1_11" id="" value=""></td>
                                <td class="column5 style51 "> <input type="text" name="gob_2_11" id="" value=""></td>
                                <td class="column6 style51 "> <input type="text" name="rpa_1_11" id="" value=""></td>
                                <td class="column7 style51 "> <input type="text" name="dpa_1_11" id="" value=""></td>
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
