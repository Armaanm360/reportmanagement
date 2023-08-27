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



       <form action="{{ url('appendix_nine') }}" method="post">
        @csrf
              <div class="mt-4 item">
                  <div class="header-item">
                    <div style="text-align: right;">
                      <h4>পরিশিষ্ট-৯</h4>
                    </div>
                    <div>
                      <h6>বিষয়</h6>
                    </div>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li><input type="text" name="budget_sub[]" id="" value="৪। আর্থিক প্রতিষ্ঠান বিভাগের শাখা/অধিশাখা সংশ্লিষ্ট ২০১৯-২০ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর অর্জন পরিবীক্ষণ সংক্রান্ত মূল্যায়ন প্রতিবেদন প্রেরণ। (ত্রৈমাসিক/ষান্মাষিক/বাৎসরিক)"></li>
                      <li><input type="text" name="budget_sub[]" id="" value="৫। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন রেগুলেটরি অথরিটি সংশ্লিষ্ট ২০১৯-২০ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর অর্জন পরিবীক্ষণ সংক্রান্ত মূল্যায়ন প্রতিবেদন প্রেরণ। (ত্রৈমাসিক/ষান্মাষিক/বাৎসরিক)"></li>
                      <li><input type="text" name="budget_sub[]" id="" value="৬। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর-সংস্থাসমূহের ২০১৯-২০ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর অর্জন পরিবীক্ষণ সংক্রান্ত মূল্যায়ন প্রতিবেদন প্রেরণ। (ত্রৈমাসিক/ষান্মাষিক/বাৎসরিক)"></li>
                    </ul>
                  </div>
                  <div class="header-item">
                    <div style="text-align: center;">
                      <h4>সেকশন ২</h4>
                      <h4>মন্ত্রণালয়/বিভাগের বিভিন্ন কার্যক্রমের চূড়ান্ত<br> ফলাফল/প্রভাব (Outcome/Impact)</h4>
                    </div>
                  </div>
                  <div class="listed-content">
                    <table border="1" width="100%">
                      <thead>
                          <tr>
                              <td>চূড়ান্তফলাফল/প্রভাব (Outcome/Impact)</td>
                              <td>চুড়ান্ত ফলাফল সূচক</td>
                              <td>একক
                                  (Unit)
                                  </td>
                              <td>প্রকৃত অর্জন*
                                  ২০১৮-১৯
                                  </td>
                              <td>লক্ষ্যমাত্রা
                                  ২০১৯-২০
                                  </td>
                              <td>অর্জন</td>
                              <td>মন্তব্য</td>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>2</td>
                              <td>3</td>
                              <td>4</td>
                              <td>5</td>
                              <td>6</td>
                              <td>7</td>
                          </tr>
                          <tr>
                            <input type="hidden" name="outcome_id" id="" value="41">
                              <td><input type="text" name="impact_41" id="" value="ব্যাংকিং খাতে অন্তর্ভুক্তি বৃদ্ধি"></td>
                              <td><input type="text" name="indicator_41" id="" value="প্রাপ্ত বয়স্ক জনগণের অংশগ্রহণের হার (ক্রমপুঞ্জিভুত)"></td>
                              <td><input type="text" name="unit_41" id="" value="%"> </td>
                              <td><input type="text" name="achivement_star_41" id="" value="৮১"></td>
                              <td><input type="text" name="target_41" id="" value="৮২"> </td>
                              <td><input type="text" name="achivement_41" id="" value="২০%"></td>
                              <td><input type="text" name="comments_41" id="" value="বাংলাদেশ ব্যাংক"></td>
                          </tr>
                          <tr>
                             <input type="hidden" name="outcome_id" id="" value="42">
                              <td><input type="text" name="impact_42" id="" value=""></td>
                              <td><input type="text" name="indicator_42" id="" value=""></td>
                              <td><input type="text" name="unit_42" id="" value=""></td>
                              <td><input type="text" name="achivement_star_42" id="" value=""></td>
                              <td><input type="text" name="target_42" id="" value=""></td>
                              <td><input type="text" name="achivement_42" id="" value=""></td>
                              <td><input type="text" name="comments_42" id="" value=""></td>
                          </tr>
                          <tr>
                             <input type="hidden" name="outcome_id" id="" value="43">
                              <td><input type="text" name="impact_43" id="" value=""></td>
                              <td><input type="text" name="indicator_43" id="" value=""></td>
                              <td><input type="text" name="unit_43" id="" value=""></td>
                              <td><input type="text" name="achivement_star_43" id="" value=""></td>
                              <td><input type="text" name="target_43" id="" value=""></td>
                              <td><input type="text" name="achivement_43" id="" value=""></td>
                              <td><input type="text" name="comments_43" id="" value=""></td>
                          </tr>
                          <tr>
                            <input type="hidden" name="outcome_id" id="" value="44">
                              <td><input type="text" name="impact_44" id="" value=""></td>
                              <td><input type="text" name="indicator_44" id="" value=""></td>
                              <td><input type="text" name="unit_44" id="" value=""></td>
                              <td><input type="text" name="achivement_star_44" id="" value=""></td>
                              <td><input type="text" name="target_44" id="" value=""></td>
                              <td><input type="text" name="achivement_44" id="" value=""></td>
                              <td><input type="text" name="comments_44" id="" value=""></td>
                          </tr>
                          <tr>
                            <input type="hidden" name="outcome_id" id="" value="45">
                              <td><input type="text" name="impact_45" id="" value=""></td>
                              <td><input type="text" name="indicator_45" id="" value=""></td>
                              <td><input type="text" name="unit_45" id="" value=""></td>
                              <td><input type="text" name="achivement_star_45" id="" value=""></td>
                              <td><input type="text" name="target_45" id="" value=""></td>
                              <td><input type="text" name="achivement_45" id="" value=""></td>
                              <td><input type="text" name="comments_45" id="" value=""></td>
                          </tr>
                      </tbody>
                  </table>
                  </div>
                  <div class="header-item">
                    <div style="text-align: center;">
                      <h4>সেকশন ৩</h4>
                      <h4>কৌশলগত উদ্দেশ্য, অগ্রাধিকার, কার্যক্রম, কর্মসম্পাদন সূচক এবং <br> লক্ষ্যমাত্রাসমূহ</h4>
                    </div>
                  </div>
                  <div class="listed-content">
                    <table border="1" width="100%">
                      <thead>
                          <tr>
                              <td rowspan="3">কৌশলগত উদ্দেশ্য</td>
                              <td class="column1 style445 s style447" rowspan="3">কৌশলগত উদ্দেশ্যের মান</td>
                              <td class="column2 style445 s style447" rowspan="3">কার্যক্রম</td>
                              <td class="column3 style445 s style447" rowspan="3">কর্মসম্পাদন সূচক</td>
                              <td class="column4 style445 s style447" rowspan="3">একক</td>
                              <td class="column5 style445 s style447" rowspan="3">কর্মসম্পাদন সূচকের মান</td>
                              <td class="column6 style445 s style447" rowspan="3">প্রকৃত অর্জন ২০১৭-১৮</td>
                              <td class="column7 style445 s style447" rowspan="3">প্রকৃত অর্জন* ২০১৮-১৯</td>
                              <td class="column8 style449 s style450" colspan="5">লক্ষ্যমাত্রা/নির্ণায়ক ২০১৯-২০</td>
                              <td class="column13 style430 s" rowspan="3">অর্জন ২০১৯-২০ (১ম প্রান্তিক)</td>
                              <td class="column14 style445 s style447" rowspan="3">বাস্তবায়নের জন্য দায়িত্বপ্রাপ্ত</td>
                          </tr>
                          <tr class="row757">
                            <td class="column8 style433 s">অসাধারণ</td>
                            <td class="column9 style433 s">অতি উত্তম</td>
                            <td class="column10 style433 s">উত্তম</td>
                            <td class="column11 style433 s">চলতি মান</td>
                            <td class="column12 style433 s">চলতি মানের নিম্নে</td>
                          </tr>
                          <tr class="row758">
                            <td class="column8 style434 n">১০০%</td>
                            <td class="column9 style434 n">৯০%</td>
                            <td class="column10 style434 n">৮০%</td>
                            <td class="column11 style434 n">৭০%</td>
                            <td class="column12 style434 n">৬০%</td>
                          </tr>
                          <tr class="row759">
                            <td class="column0 style388 s style390" colspan="15">মন্ত্রণালয়/বিভাগের কৌশলগত উদ্দেশ্যসমুহ</td>
                          </tr>
                      </thead>
                      <tbody>
                        <tr class="row760">
                             <input type="hidden" name="row_id" value="1">
                          <td class="column0 style452 s style453" rowspan="10"><input type="text" name="purpose_1" id="" value="[১] প্রাতিষ্ঠানিক কাঠামো শক্তিশালীকরণ;"></td>
                          <td class="column1 style454 n style456" rowspan="10"><input type="text" name="purpose_value_1" id="" value="17"></td>
                          <td class="column2 style452 s style453" rowspan="2"><input type="text" name="activity_1" id="" value="[১.১] হাউজ বিল্ডিং ফাইন্যান্স কর্পোরেশন আইন প্রণয়ন"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_1" id="" value="[১.১.১] মন্ত্রিসভায় নীতিগত অনুমোদনের জন্য প্রেরিত"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_1" id="" value="তারিখ"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_1" id="" value="2"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_1" id="" value=""></td>
                          <td class="column7 style185 null"><input type="text" name="achivement_star_1" id="" value=""></td>
                          <td class="column8 style436 n"><input type="text" name="target_extraordinary_1" id="" value="05/02/2020"></td>
                          <td class="column9 style437 s"><input type="text" name="target_excellent_1" id="" value="২০-০২-২০২০"></td>
                          <td class="column10 style436 n"><input type="text" name="target_fine_1" id="" value="05/03/2020"></td>
                          <td class="column11 style437 s"><input type="text" name="target_value_1" id="" value="২০-০৩-২০২০"></td>
                          <td class="column12 style436 n"><input type="text" name="target_below_1" id="" value="05/04/2020"></td>
                          <td class="column13 style185 null"><input type="text" name="margin_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_1" id="" value="বিশেষায়িত ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row761">
                             <input type="hidden" name="row_id_1_1" value="1">
                          <td class="column3 style372 s"><input type="text" name="indicator_1_1" id="" value="[১.১.২] ভেটিং এর জন্য আইন মন্ত্রণালয়ে প্রেরিত"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_1_1" id="" value="তারিখ"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_1_1" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_1_1" id="" value=""></td>
                          <td class="column7 style185 null"><input type="text" name="achivement_star_1_1" id="" value=""></td>
                          <td class="column8 style436 n"><input type="text" name="target_extraordinary_1_1" id="" value="10/05/2020"></td>
                          <td class="column9 style437 s"><input type="text" name="target_excellent_1_1" id="" value="২৫-০৫-২০২০"></td>
                          <td class="column10 style436 n"><input type="text" name="target_fine_1_1" id="" value="09/05/2020"></td>
                          <td class="column11 style437 s"><input type="text" name="target_value_1_1" id="" value="২৮-০৬-২০২০"></td>
                          <td class="column12 style437 s"><input type="text" name="target_below_1_1" id="" value="৩০-০৬-২০২০"></td>
                          <td class="column13 style185 null"><input type="text" name="margin_1_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_1_1" id="" value="বিশেষায়িত ব্যাংক শাখা"></td>
                        </tr>


                        <tr class="row762">
                             <input type="hidden" name="row_id" value="2">
                          <td class="column2 style452 s style453" rowspan="3"><input type="text" name="activity_2" id="" value="[১.২] কর্মসংস্থান ব্যাংক কর্মচারি চাকরি প্রবিধানমালা, ২০১৯ প্রণয়ন।"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_2" id="" value="[১.২.১] জনপ্রশাসন মন্ত্রণালয়ের নিয়োগ বিধি পরীক্ষণ সংক্রান্ত উপকমিটির নিকট প্রেরিত"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_2" id="" value="তারিখ"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_2" id="" value="2"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_2" id="" value=""></td>
                          <td class="column7 style185 null"><input type="text" name="achivement_star_2" id="" value=""></td>
                          <td class="column8 style436 n"><input type="text" name="target_extraordinary_2" id="" value="01/03/2020"></td>
                          <td class="column9 style436 n"><input type="text" name="target_excellent_2" id="" value="10/03/2020"></td>
                          <td class="column10 style437 s"><input type="text" name="target_fine_2" id="" value="২০-০৩-২০২০"></td>
                          <td class="column11 style437 s"><input type="text" name="target_value_2" id="" value="৩১-০৩-২০২০"></td>
                          <td class="column12 style436 n"><input type="text" name="target_below_2" id="" value="10/04/2020"></td>
                          <td class="column13 style185 null"><input type="text" name="margin_2" id="" value=""></td>
                          <td class="column13 style185 null"><input type="text" name="responsible_2" id="" value="বিশেষায়িত ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row763">
                             <input type="hidden" name="row_id_2_1" value="2">
                          <td class="column3 style372 s"><input type="text" name="indicator_2_1" id="" value="[১.২.২] প্রশাসনিক উন্নয়ন সংক্রান্ত সচিব কমিটিতে প্রেরিত"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_2_1" id="" value="তারিখ"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_2_1" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_2_1" id="" value=""></td>
                          <td class="column7 style185 null"><input type="text" name="achivement_star_2_1" id="" value=""></td>
                          <td class="column8 style437 s"><input type="text" name="target_extraordinary_2_1" id="" value="১৫-০৪-২০২০"></td>
                          <td class="column9 style437 s"><input type="text" name="target_excellent_2_1" id="" value="২৫-০৪-২০২০"></td>
                          <td class="column10 style436 n"><input type="text" name="target_fine_2_1" id="" value="05/05/2020"></td>
                          <td class="column11 style437 s"><input type="text" name="target_value_2_1" id="" value="১৫-০৫-২০২০"></td>
                          <td class="column12 style437 s"><input type="text" name="target_below_2_1" id="" value="৩১-০৫-২০২০"></td>
                          <td class="column13 style185 null"><input type="text" name="margin_2_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_2_1" id="" value="বিশেষায়িত ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row764">
                             <input type="hidden" name="row_id_2_1_1" value="2">
                          <td class="column3 style372 s"><input type="text" name="indicator_2_1_1" id="" value="[১.২.৩] লেজিসলেটিভ ও সংসদ বিষয়ক বিভাগে প্রেরিত"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_2_1_1" id="" value="তারিখ"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_2_1_1" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_2_1_1" id="" value=""></td>
                          <td class="column7 style185 null"><input type="text" name="achivement_star_2_1_1" id="" value=""></td>
                          <td class="column8 style436 n"><input type="text" name="target_extraordinary_2_1_1" id="" value="11/06/2020"></td>
                          <td class="column9 style437 s"><input type="text" name="target_excellent_2_1_1" id="" value="১৬-০৬-২০২০"></td>
                          <td class="column10 style437 s"><input type="text" name="target_fine_2_1_1" id="" value="২১-০৬-২০২০"></td>
                          <td class="column11 style437 s"><input type="text" name="target_value_2_1_1" id="" value="২৫-০৬-২০২০"></td>
                          <td class="column12 style437 s"><input type="text" name="target_below_2_1_1" id="" value="৩০-০৬-২০২০"></td>
                          <td class="column13 style185 null"><input type="text" name="margin_2_1_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_2_1_1
                            " id="" value="বিশেষায়িত ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row765">
                             <input type="hidden" name="row_id" value="3">
                          <td class="column2 style452 s style453" rowspan="3"><input type="text" name="activity_3" id="" value="[১.৩] ফাইন্যান্স কোম্পানি আইনের খসড়া ভেটিং এর জন্য আইন মন্ত্রণালয়ে প্রেরণ"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_3" id="" value="[১.৩.১] প্রস্তাব মন্ত্রিপরিষদ বিভাগের আন্ত:মন্ত্রণালয় কমিটিতে প্রেরিত"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_3" id="" value="তারিখ"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_3" id="" value="2"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_3" id="" value=""></td>
                          <td class="column7 style185 null"><input type="text" name="achivement_star_3" id="" value=""></td>
                          <td class="column8 style437 s"><input type="text" name="target_extraordinary_3" id="" value="১৫-০১-২০২০"></td>
                          <td class="column9 style437 s"><input type="text" name="target_excellent_3" id="" value="৩১-০১-২০২০"></td>
                          <td class="column10 style437 s"><input type="text" name="target_fine_3" id="" value="১৫-০২-২০২০"></td>
                          <td class="column11 style437 s"><input type="text" name="target_value_3" id="" value="২৮-০২-২০২০"></td>
                          <td class="column12 style437 s"><input type="text" name="target_below_3" id="" value="১৫-০৩-২০২০"></td>
                          <td class="column13 style185 null"><input type="text" name="margin_3" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_3" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row766">
                             <input type="hidden" name="row_id_3_1" value="3">
                          <td class="column3 style372 s"><input type="text" name="indicator_3_1" id="" value="[১.৩.২] মন্ত্রিসভায় নীতিগত অনুমোদনের জন্য প্রেরিত"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_3_1" id="" value="তারিখ"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_3_1" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_3_1" id="" value=""></td>
                          <td class="column7 style185 null"><input type="text" name="achivement_star_3_1" id="" value=""></td>
                          <td class="column8 style436 n"><input type="text" name="target_extraordinary_3_1" id="" value="10/04/2020"></td>
                          <td class="column9 style437 s"><input type="text" name="target_excellent_3_1" id="" value="২৫-০৪-২০২০"></td>
                          <td class="column10 style436 n"><input type="text" name="target_fine_3_1" id="" value="10/05/2020"></td>
                          <td class="column11 style437 s"><input type="text" name="target_value_3_1" id="" value="২৫-০৫-২০২০"></td>
                          <td class="column12 style437 s"><input type="text" name="target_below_3_1" id="" value="৩১০-০৬-২০২০"></td>
                          <td class="column13 style185 null"><input type="text" name="margin_3_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_3_1" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row767">
                             <input type="hidden" name="row_id_3_1_1" value="3">
                          <td class="column3 style372 s"><input type="text" name="indicator_3_1_1" id="" value="[১.৩.৩] ভেটিং এর জন্য আইন মন্ত্রণালয়ে প্রেরিত"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_3_1_1" id="" value="তারিখ"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_3_1_1" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_3_1_1" id="" value=""></td>
                          <td class="column7 style185 null"><input type="text" name="achivement_star_3_1_1" id="" value=""></td>
                          <td class="column8 style437 s"><input type="text" name="target_extraordinary_3_1_1" id="" value="২০-০৫-২০২০"></td>
                          <td class="column9 style436 n"><input type="text" name="target_excellent_3_1_1" id="" value="01/06/2020"></td>
                          <td class="column10 style436 n"><input type="text" name="target_fine_3_1_1" id="" value="10/06/2020"></td>
                          <td class="column11 style437 s"><input type="text" name="target_value_3_1_1" id="" value="২০-০৬-২০২০"></td>
                          <td class="column12 style437 s"><input type="text" name="target_below_3_1_1" id="" value="৩০-০৬-২০২০"></td>
                          <td class="column13 style185 null"><input type="text" name="margin_3_1_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_3_1_1" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row768">
                             <input type="hidden" name="row_id" value="4">
                          <td class="column2 style452 s style453" rowspan="2"><input type="text" name="activity_4" id="" value="[১.৪] বীমা বিষয়ক বিধিমালা/ প্রবিধানমালা জারি"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_4" id="" value="[১.৪.১] ভেটিং এর জন্য আইন মন্ত্রণালয়ে প্রেরিত"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_4" id="" value="সংখ্যা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_4" id="" value="3"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_4" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_4" id="" value="5"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_4" id="" value="5"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_4" id="" value="4"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_4" id="" value="3"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_4" id="" value="2"></td>
                          <td class="column12 style185 null"><input type="text" name="target_below_4" id="" value=""></td>
                          <td class="column13 style438 null"><input type="text" name="margin_4" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_4" id="" value="বীমা শাখা"></td>
                        </tr>
                        <tr class="row769">
                             <input type="hidden" name="row_id_4_1" value="4">
                          <td class="column3 style372 s"><input type="text" name="indicator_4_1" id="" value="[১.৪.২] গেজেটে প্রকাশিত"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_4_1" id="" value="সংখ্যা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_4_1" id="" value="3"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_4_1" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_4_1" id="" value="5"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_4_1" id="" value="4"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_4_1" id="" value="3"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_4_1" id="" value="2"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_4_1" id="" value="1"></td>
                          <td class="column12 style185 null"><input type="text" name="target_below_4_1" id="" value=""></td>
                          <td class="column13 style437 null"><input type="text" name="margin_4_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_4_1" id="" value="বীমা শাখা"></td>
                        </tr>
                        <tr class="row770">
                      <input type="hidden" name="row_id" value="5">
                      <td class="column0 style452 s style453" rowspan="12"><input type="text" name="purpose_5" id="" value="[২] ব্যাংক ও নন-ব্যাংক আর্থিক প্রতিষ্ঠানসমুহে পেশাদারিত্ব এবং আর্থিক অন্তর্ভুক্তি শক্তিশালীকরণ;"></td>
                      <td class="column1 style454 n style456" rowspan="12"><input type="text" name="purpose_value_5" id="" value="16"></td>
                      <td class="column2 style452 s style453" rowspan="2"><input type="text" name="activity_5" id="" value="[২.১] রাষ্ট্র মালিকানাধীন বাণিজ্যিক ব্যাংকসমূহের শ্রেণিকৃত ঋণ হ্রাসকরণ"></td>
                      <td class="column3 style372 s"><input type="text" name="indicator_5" id="" value="[২.১.১] শেণিকৃত ঋণ হতে নগদ আদায়"></td>
                      <td class="column4 style372 s"><input type="text" name="unit_5" id="" value="হাজার কোটি টাকা"></td>
                      <td class="column5 style435 n"><input type="text" name="indicator_value_5" id="" value="1"></td>
                      <td class="column6 style185 null"><input type="text" name="achivement_5" id="" value=""></td>
                      <td class="column7 style435 n"><input type="text" name="achivement_star_5" id="" value="2707"></td>
                      <td class="column8 style435 n"><input type="text" name="target_extraordinary_5" id="" value="2750"></td>
                      <td class="column9 style435 n"><input type="text" name="target_excellent_5" id="" value="2740"></td>
                      <td class="column10 style435 n"><input type="text" name="target_fine_5" id="" value="2730"></td>
                      <td class="column11 style435 n"><input type="text" name="target_value_5" id="" value="2720"></td>
                      <td class="column12 style435 n"><input type="text" name="target_below_5" id="" value="2710"></td>
                      <td class="column13 style437 null"><input type="text" name="margin_5" id="" value=""></td>
                      <td class="column14 style420 s"><input type="text" name="responsible_5" id="" value="বাণিজ্যিক ব্যাংক শাখা"></td>
                    </tr>
                        <tr class="row771">
                          <input type="hidden" name="row_id" value="5">
                          <td class="column3 style372 s"><input type="text" name="indicator_5_1" id="" value="[২.১.২] শ্রেণিকৃত ঋণের পরিমাণ"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_5_1" id="" value="কোটি টাকা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_5_1" id="" value="1"></td>
                          <td class="column6 style435 n"><input type="text" name="achivement_5_1" id="" value="40317"></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_5_1" id="" value="51359"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_5_1" id="" value="50000"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_5_1" id="" value="50250"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_5_1" id="" value="50500"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_5_1" id="" value="50750"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_5_1" id="" value="50850"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_5_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_5_1" id="" value="বাণিজ্যিক ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row772">
                          <input type="hidden" name="row_id" value="6">
                          <td class="column2 style372 s"><input type="text" name="activity_6" id="" value="[২.২] শ্রেণিকৃত ঋণ আদায় কার্যক্রম মনিটরিং করা"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_6" id="" value="[২.২.১] আয়োজিত সভার সংখ্যা"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_6" id="" value="সংখ্যা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_6" id="" value="2"></td>
                          <td class="column6 style435 n"><input type="text" name="achivement_6" id="" value="4"></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_6" id="" value="3"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_6" id="" value="4"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_6" id="" value="3"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_6" id="" value="2"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_6" id="" value="1"></td>
                          <td class="column12 style185 null"><input type="text" name="target_below_6" id="" value=""></td>
                          <td class="column13 style437 null"><input type="text" name="margin_6" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_6" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row773">
                          <input type="hidden" name="row_id" value="7">
                          <td class="column2 style372 s"><input type="text" name="activity_7" id="" value="[২.৩] কৃষিঋণ বিতরণ"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_7" id="" value="[২.৩.১] বিতরণকৃত কৃষিঋণ"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_7" id="" value="হাজার কোটি টাকা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_7" id="" value="2"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_7" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_7" id="" value="21"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_7" id="" value="30"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_7" id="" value="28"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_7" id="" value="26"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_7" id="" value="24"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_7" id="" value="22"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_7" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_7" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row774">
                          <input type="hidden" name="row_id" value="8">
                          <td class="column2 style452 s style453" rowspan="2"><input type="text" name="activity_8" id="" value="[২.৪] এসএমই ঋণ বিতরণ ও আদায়"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_8" id="" value="[২.৪.১] বিতরণকৃত এসএমই ঋণ"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_8" id="" value="হাজার কোটি টাকা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_8" id="" value="2"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_8" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_8" id="" value="163"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_8" id="" value="170"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_8" id="" value="168"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_8" id="" value="166"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_8" id="" value="164"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_8" id="" value="162"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_8" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_8" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row775">
                          <input type="hidden" name="row_id_8_1" value="8">
                          <td class="column3 style372 s"><input type="text" name="indicator_8_1" id="" value="[২.৪.২] আদায়কৃত এসএমই ঋণ"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_8_1" id="" value="হাজার কোটি টাকা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_8_1" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_8_1" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_8_1" id="" value="111"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_8_1" id="" value="175"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_8_1" id="" value="170"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_8_1" id="" value="165"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_8_1" id="" value="160"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_8_1" id="" value="155"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_8_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_8_1" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row776">
                          <input type="hidden" name="row_id" value="9">
                          <td class="column2 style372 s"><input type="text" name="activity_9" id="" value="[২.৫] মোবাইল ব্যাংকিং কার্যক্রম সম্প্রসারণ"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_9" id="" value="[২.৫.১] বার্ষিক লেনদেনের পরিমাণ"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_9" id="" value="হাজার কোটি টাকা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_9" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_9" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_9" id="" value="300"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_9" id="" value="435"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_9" id="" value="430"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_9" id="" value="425"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_9" id="" value="420"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_9" id="" value="415"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_9" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_9" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row777">
                          <input type="hidden" name="row_id" value="10">
                          <td class="column2 style452 s style453" rowspan="2"><input type="text" name="activity_10" id="" value="[২.৬] এজেন্ট ব্যাংকিং কার্যক্রমের মাধ্যমে ব্যাংকিং সেবা সম্প্রসারণ"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_10" id="" value="[২.৬.১] নতুন এজন্টের সংখ্যা"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_10" id="" value="সংখ্যা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_10" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_10" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_10" id="" value="1278"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_10" id="" value="1800"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_10" id="" value="1750"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_10" id="" value="1700"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_10" id="" value="1650"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_10" id="" value="1600"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_10" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_10" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row778">
                          <input type="hidden" name="row_id_10_1" value="10">
                          <td class="column3 style372 s"><input type="text" name="indicator_10_1" id="" value="[২.৬.২] এজেন্ট ব্যাংকিং এর গ্রাহক সংখ্যা"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_10_1" id="" value="সংখ্যা (হাজার)"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_10_1" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_10_1" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_10_1" id="" value="2906"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_10_1" id="" value="4000"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_10_1" id="" value="3800"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_10_1" id="" value="3700"></td>
                          <td class="column11 style435 n">3<input type="text" name="target_value_10_1" id="" value="600"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_10_1" id="" value="3500"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_10_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_10_1" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row779">
                          <input type="hidden" name="row_id" value="11">
                          <td class="column2 style372 s"><input type="text" name="activity_11" id="" value="[২.৭] স্কুল ব্যাংকিং কার্যক্রম সম্প্রসারণ"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_11" id="" value="[২.৭.১] স্কুল ব্যাংকিং এর নতুন হিসাব সংখ্যা"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_11" id="" value="সংখ্যা (হাজার)"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_11" id="" value="2"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_11" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_11" id="" value="417"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_11" id="" value="600"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_11" id="" value="550"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_11" id="" value="500"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_11" id="" value="450"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_11" id="" value="400"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_11" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_11" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row780">
                          <input type="hidden" name="row_id" value="12">
                          <td class="column2 style452 s style453" rowspan="2"><input type="text" name="activity_12" id="" value="[২.৮] ব্যাংকের মাধ্যমে সামাজিক নিরাপত্তার সুবিধা প্রদান"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_12" id="" value="[২.৮.১] ব্যাংকের মাধ্যমে সুবিধা গ্রহণকারীর সংখ্যা"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_12" id="" value="সংখ্যা (হাজার)"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_12" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_12" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_12" id="" value="10124"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_12" id="" value="10600"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_12" id="" value="10500"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_12" id="" value="10400"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_12" id="" value="10300"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_12" id="" value="10200"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_12" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_12" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row781">
                          <input type="hidden" name="row_id_12_1" value="12">
                          <td class="column3 style372 s"><input type="text" name="indicator_12_1" id="" value="[২.৮.২] বিতরণকৃত অর্থ"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_12_1" id="" value="কোটি টাকা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_12_1" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_12_1" id="" value=""></td>
                          <td class="column7 style185 null"><input type="text" name="achivement_star_12_1" id="" value=""></td>
                          <td class="column8 style185 null"><input type="text" name="target_extraordinary_12_1" id="" value=""></td>
                          <td class="column9 style185 null"><input type="text" name="target_excellent_12_1" id="" value=""></td>
                          <td class="column10 style185 null"><input type="text" name="target_fine_12_1" id="" value=""></td>
                          <td class="column11 style185 null"><input type="text" name="target_value_12_1" id="" value=""></td>
                          <td class="column12 style185 null"><input type="text" name="target_below_12_1" id="" value=""></td>
                          <td class="column13 style438 null"><input type="text" name="margin_12_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_12_1" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row782">
                          <input type="hidden" name="row_id" value="13">
                          <td class="column0 style452 s style453" rowspan="6"><input type="text" name="purpose_13" id="" value="[৩] পুঁজিবাজারের কার্যকারিতা বৃদ্ধিকরণ;"></td>
                          <td class="column1 style454 n style456" rowspan="6"><input type="text" name="purpose_value_13" id="" value="10"></td>
                          <td class="column2 style372 s"><input type="text" name="activity_13" id="" value="[৩.১] দেশব্যাপী ফাইন্যান্সিয়াল লিটারেসি কার্যক্রম বাস্তবায়ন"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_13" id="" value="[৩.১.১] কার্যক্রমে অংশগ্রহণকারী"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_13" id="" value="সংখ্যা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_13" id="" value="2"></td>
                          <td class="column6 style435 n"><input type="text" name="achivement_13" id="" value="17083"></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_13" id="" value="9656"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_13" id="" value="12000"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_13" id="" value="11500"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_13" id="" value="11000"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_13" id="" value="10500"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_13" id="" value="10000"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_13" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_13" id="" value="বিএসইসি শাখা"></td>
                        </tr>
                        <tr class="row783">
                          <input type="hidden" name="row_id" value="14">
                          <td class="column2 style372 s"><input type="text" name="activity_14" id="" value="[৩.২] মূলধন উত্তোলনের লক্ষে আইপিও/ আরপিও/রাইট/ ডেট সিকিউরিটিজ ইস্যুকরণ"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_14" id="" value="[৩.২.১] আইপিও/ আরপিও/ রাইট/ডেট সিকিউরিটিজ ইস্যুকৃত"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_14" id="" value="সংখ্যা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_14" id="" value="2"></td>
                          <td class="column6 style435 n"><input type="text" name="achivement_14" id="" value="26"></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_14" id="" value="17"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_14" id="" value="21"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_14" id="" value="20"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_14" id="" value="19"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_14" id="" value="18"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_14" id="" value="17"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_14" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_14" id="" value="বিএসইসি শাখা"></td>
                        </tr>
                        <tr class="row784">
                          <input type="hidden" name="row_id" value="15">
                          <td class="column2 style372 s"><input type="text" name="activity_15" id="" value="[৩.৩] বন্ডসহ অন্যান্য অতালিকাভূক্ত সিকিউরিটিজ হস্তান্তরের সুবিধার্থে Alternative Trading Board (ATB) চালুকরণ"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_15" id="" value="[৩.৩.১] প্লাটফরম চালুকৃত"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_15" id="" value="তারিখ"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_15" id="" value="2"></td>
                          <td class="column6 style185 null"><input type="text" name="achivement_15" id="" value=""></td>
                          <td class="column7 style185 null"><input type="text" name="achivement_star_15" id="" value=""></td>
                          <td class="column8 style437 s"><input type="text" name="target_extraordinary_15" id="" value="৩১-০৫-২০২০"></td>
                          <td class="column9 style436 n"><input type="text" name="target_excellent_15" id="" value="07/06/2020"></td>
                          <td class="column10 style437 s"><input type="text" name="target_fine_15" id="" value="১৫-০৬-২০২০"></td>
                          <td class="column11 style437 s"><input type="text" name="target_value_15" id="" value="২১-০৬-২০১৯"></td>
                          <td class="column12 style437 s"><input type="text" name="target_below_15" id="" value="২৫-০৬-২০২০"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_15" id="" value=""></td>
                          <td class="column13 style437 null"><input type="text" name="responsible_15" id="" value="বিএসইসি শাখা"></td>
                        </tr>
                        <tr class="row785">
                          <input type="hidden" name="row_id" value="16">
                          <td class="column2 style372 s"><input type="text" name="activity_16" id="" value="[৩.৪] পুঁজিবাজারে বিনিয়োগকারীদের জন্য সচেতনতামূলক প্রশিক্ষণ"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_16" id="" value="[৩.৪.১] প্রশিক্ষিত বিনিয়োগকারী"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_16" id="" value="সংখ্যা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_16" id="" value="2"></td>
                          <td class="column6 style435 n"><input type="text" name="achivement_16" id="" value="1635"></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_16" id="" value="1125"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_16" id="" value="1600"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_16" id="" value="1550"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_16" id="" value="1500"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_16" id="" value="1450"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_16" id="" value="1400"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_16" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_16" id="" value="বিএসইসি শাখা"></td>
                        </tr>
                        <tr class="row786">
                          <input type="hidden" name="row_id" value="17">
                          <td class="column2 style372 s"><input type="text" name="activity_17" id="" value="[৩.৫] পোস্ট গ্র্যাজুয়েট ডিপ্লোমা ইন ক্যাপিটাল মার্কেট বিষয়ক প্রশিক্ষণ"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_17" id="" value="[৩.৫.১] আয়োজিত প্রোগ্রাম"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_17" id="" value="সংখ্যা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_17" id="" value="1"></td>
                          <td class="column6 style435 n"><input type="text" name="achivement_17" id="" value="2"></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_17" id="" value="3"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_17" id="" value="3"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_17" id="" value="2"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_17" id="" value="1"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_17" id="" value="2"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_17" id="" value="2"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_17" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_17" id="" value="বিএসইসি শাখা"></td>
                        </tr>
                        <tr class="row787">
                          <input type="hidden" name="row_id" value="18">
                          <td class="column2 style372 s"><input type="text" name="activity_18" id="" value="[৩.৬] সার্টিফিকেট কোর্স অন ক্যাপিটাল মার্কেট"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_18" id="" value="[৩.৬.১] আয়োজিত প্রোগ্রাম"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_18" id="" value="সংখ্যা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_18" id="" value="1"></td>
                          <td class="column6 style435 n"><input type="text" name="achivement_18" id="" value="14"></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_18" id="" value="16"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_18" id="" value="20"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_18" id="" value="19"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_18" id="" value="18"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_18" id="" value="17"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_18" id="" value="16"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_18" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_18" id="" value="বিএসইসি শাখা"></td>
                        </tr>

                        <tr class="row788">
                          <input type="hidden" name="row_id" value="19">
                          <td class="column0 style452 s style453" rowspan="3"><input type="text" name="purpose_19" id="" value="[৪] সুনিয়ন্ত্রিত ক্ষুদ্রঋণ কার্যক্রম সম্প্রসারণ ও পরিচালনায় সহায়তা জোরদারকরণ;"></td>
                          <td class="column1 style454 n style456" rowspan="3"><input type="text" name="purpose_value_19" id="" value="9"></td>
                          <td class="column2 style452 s style453" rowspan="2"><input type="text" name="activity_19" id="" value="[৪.১] ক্ষুদ্রঋণ বিতরণ ও আদায়"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_19" id="" value="[৪.১.১] বিতরণকৃত ক্ষুদ্রঋণ"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_19" id="" value="হাজার কোটি টাকা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_19" id="" value="3"></td>
                          <td class="column6 style435 n"><input type="text" name="achivement_19" id="" value="134"></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_19" id="" value="140"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_19" id="" value="167"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_19" id="" value="160"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_19" id="" value="150"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_19" id="" value="145"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_19" id="" value="140"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_19" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_19" id="" value="এমআরএ শাখা"></td>
                        </tr>
                        <tr class="row789">
                          <input type="hidden" name="row_id_19_1" value="19">
                          <td class="column3 style372 s"><input type="text" name="indicator_19_1" id="" value="[৪.১.২] আদায়যোগ্য ঋণ হতে আদায়ের হার"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_19_1" id="" value="হাজার কোটি টাকা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_19_1" id="" value="3"></td>
                          <td class="column6 style435 n"><input type="text" name="achivement_19_1" id="" value="127"></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_19_1" id="" value="133"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_19_1" id="" value="160"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_19_1" id="" value="155"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_19_1" id="" value="150"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_19_1" id="" value="145"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_19_1" id="" value="140"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_19_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_19_1" id="" value="এমআরএ শাখা"></td>
                        </tr>
                        <tr class="row790">
                          <input type="hidden" name="row_id" value="21">
                          <td class="column2 style372 s"><input type="text" name="activity_21" id="" value="[৪.২] এমএফআই সুবিধাভোগীদের সংখ্যা বৃদ্ধি"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_21" id="" value="[৪.২.১] সুবিধাভোগীর সংখ্যা"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_21" id="" value="সংখ্যা (লক্ষ জন)"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_21" id="" value="3"></td>
                          <td class="column6 style435 n"><input type="text" name="achievement_21" id="" value="305"></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_21" id="" value="307"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_21" id="" value="315"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_21" id="" value="313"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_21" id="" value="311"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_21" id="" value="307"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_21" id="" value="305"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_21" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_21" id="" value="এমআরএ শাখা"></td>
                        </tr>
                        

                         <tr class="row791">
                          <input type="hidden" name="row_id" value="22">
                          <td class="column0 style452 s style453" rowspan="9"><input type="text" name="purpose_22" id="" value="[৫] ডিজিটাল বাংলাদেশ বিনির্মাণে ক্যাশ-লেস এবং ডিজিটাল ব্যাংকিং কার্যক্রম সম্প্রসারণ;"></td>
                          <td class="column1 style454 n style456" rowspan="9"><input type="text" name="purpose_value_22" id="" value="9"></td>
                          <td class="column2 style452 s style453" rowspan="2"><input type="text" name="activity_22" id="" value="[৫.১] ক্যাশলেস ট্রানজেকশনে উৎসাহ প্রদান;"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_22" id="" value="[৫.১.১] ডেবিট ও ক্রেডিট কার্ডের নতুন গ্রাহক সংখ্যা"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_22" id="" value="সংখ্যা (হাজার)"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value5" id="" value="1"></td>
                          <td class="column6 style18_22 null"><input type="text" name="achievement_22" id="" value=""></td>
                          <td class="column7 style43_22 n"><input type="text" name="achivement_star_22" id="" value="2498"></td>
                          <td class="column8 style43_22 n"><input type="text" name="target_extraordinary_22" id="" value="2900"></td>
                          <td class="column9 style43_22 n"><input type="text" name="target_excellent_22" id="" value="2800"></td>
                          <td class="column10 style43_22 n"><input type="text" name="target_fine_22" id="" value="2700"></td>
                          <td class="column11 style43_22 n"><input type="text" name="target_value_22" id="" value="2600"></td>
                          <td class="column12 style43_22 n"><input type="text" name="target_below_22" id="" value="2_2200"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_22" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_22" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row792">
                          <input type="hidden" name="row_id_22_1" value="22">
                          <td class="column3 style372 s"><input type="text" name="indicator_22_1" id="" value="[৫.১.২] নতুন ATM বুথের সংখ্যা"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_22_1" id="" value="সংখ্যা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_22_1" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achievement_22_1" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_22_1" id="" value="888"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_22_1" id="" value="1050"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_22_1" id="" value="1000"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_22_1" id="" value="950"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_22_1" id="" value="900"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_22_1" id="" value="850"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_22_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_22_1" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row793">
                          <input type="hidden" name="row_id" value="23">
                          <td class="column2 style452 s style453" rowspan="7"><input type="text" name="activity_23" id="" value="[৫.২] ডিজিটাল ব্যাংকিং কার্যক্রম সম্প্রসারণ;"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_23" id="" value="[৫.২.১] নতুন POS মেশিনের সংখ্যা"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_23" id="" value="সংখ্যা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_23" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achievement_23" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_23" id="" value="8924"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_23" id="" value="12000"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_23" id="" value="11900"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_23" id="" value="11800"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_23" id="" value="11700"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_23" id="" value="11600"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_23" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_23" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row794">
                          <input type="hidden" name="row_id_23_1" value="23">
                          <td class="column3 style372 s"><input type="text" name="indicator_23_1" id="" value="[৫.২.২] ইন্টারনেট ব্যাংকিং ব্যবহারকারী গ্রাহকের সংখ্যা"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_23_1" id="" value="সংখ্যা (হাজার)"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_23_1" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achievement_23_1" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_23_1" id="" value="2222"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_23_1" id="" value="3700"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_23_1" id="" value="3600"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_23_1" id="" value="3500"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_23_1" id="" value="3400"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_23_1" id="" value="3300"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_23_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_23_1" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row795">
                          <input type="hidden" name="row_id_23_1_1" value="23">
                          <td class="column3 style372 s"><input type="text" name="indicator_23_1_1" id="" value="[৫.২.৩] ইন্টারনেট ব্যাংকিং লেনদেনের পরিমাণ"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_23_1_1" id="" value="কোটি টাকা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_23_1_1" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achievement_23_1_1" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_23_1_1" id="" value="34880"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_23_1_1" id="" value="45500"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_23_1_1" id="" value="45400"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_23_1_1" id="" value="45300"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_23_1_1" id="" value="45200"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_23_1_1" id="" value="45100"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_23_1_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_23_1_1" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row796">
                          <input type="hidden" name="row_id_23_1_2" value="23">
                          <td class="column3 style372 s"><input type="text" name="indicator_23_1_2" id="" value="[৫.২.৪] RTGS এ লেনদেনের সংখ্যা"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_23_1_2" id="" value="সংখ্যা (হাজার)"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_23_1_2" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achievement_23_1_2" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_23_1_2" id="" value="1000"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_23_1_2" id="" value="1700"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_23_1_2" id="" value="1600"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_23_1_2" id="" value="1500"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_23_1_2" id="" value="1400"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_23_1_2" id="" value="1300"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_23_1_2" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_23_1_2" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row797">
                          <input type="hidden" name="row_id_23_1_3" value="23">
                          <td class="column3 style372 s"><input type="text" name="indicator_23_1_3" id="" value="[৫.২.৫] RTGS এ লেনদেনের পরিমাণ"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_23_1_3" id="" value="হাজার কোটি টাকা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_23_1_3" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achievement_23_1_3" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_23_1_3" id="" value="900"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_23_1_3" id="" value="1200"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_23_1_3" id="" value="1150"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_23_1_3" id="" value="1100"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_23_1_3" id="" value="1050"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_23_1_3" id="" value="1000"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_23_1_3" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_23_1_3" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row798">
                          <input type="hidden" name="row_id_23_1_4" value="23">
                          <td class="column3 style372 s"><input type="text" name="indicator_23_1_4" id="" value="[৫.২.৬] BEFTN এ লেনদেনের সংখ্যা"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_23_1_4" id="" value="সংখ্যা (হাজার)"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_23_1_4" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achievement_23_1_4" id="" value=""></td>
                          <td class="column7 style435 n">2<input type="text" name="achivement_star_23_1_4" id="" value="0582"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_23_1_4" id="" value="27700"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_23_1_4" id="" value="27600"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_23_1_4" id="" value="27500"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_23_1_4" id="" value="27400"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_23_1_4" id="" value="27300"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_23_1_4" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_23_1_4" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row799">
                          <input type="hidden" name="row_id_23_1_5" value="23">
                          <td class="column3 style372 s"><input type="text" name="indicator_23_1_5" id="" value="[৫.২.৭] BEFTN এ লেনদেনের পরিমাণ"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_23_1_5" id="" value="হাজার কোটি টাকা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_23_1_5" id="" value="1"></td>
                          <td class="column6 style185 null"><input type="text" name="achievement_23_1_5" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_23_1_5" id="" value="136"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_23_1_5" id="" value="190"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_23_1_5" id="" value="185"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_23_1_5" id="" value="180"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_23_1_5" id="" value="175"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_23_1_5" id="" value="170"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_23_1_5" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_23_1_5" id="" value="কেন্দ্রীয় ব্যাংক শাখা"></td>
                        </tr>

                        <tr class="row800">
                          <input type="hidden" name="row_id" value="24">
                          <td class="column0 style452 s style453" rowspan="3"><input type="text" name="purpose_24" id="" value="[৬] বীমা খাতে প্রশিক্ষিত জনবল এবং বীমা সম্পর্কে জনসচেতনতা সৃষ্টি;"></td>
                          <td class="column1 style454 n style4524" rowspan="3"><input type="text" name="purpose_value_24" id="" value="6"></td>
                          <td class="column2 style372 s"><input type="text" name="activity_24" id="" value="[৬.১] বীমা বিষয়ে প্রশিক্ষণ প্রদান"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_24" id="" value="[৬.১.১] প্রশিক্ষিত জনবল"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_24" id="" value="সংখ্যা (জন)"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_24" id="" value="2"></td>
                          <td class="column6 style185 null"><input type="text" name="achievement_24" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_24" id="" value="894"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_24" id="" value="1200"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_24" id="" value="1150"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_24" id="" value="1100"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_24" id="" value="1000"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_24" id="" value="950"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_24" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_24" id="" value="বীমা শাখা"></td>
                        </tr>
                        <tr class="row801">
                          <input type="hidden" name="row_id" value="25">
                          <td class="column2 style372 s"><input type="text" name="activity_25" id="" value="[৬.২] বীমা বিষয়ে জনসচেতনতা বৃদ্ধি"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_25" id="" value="[৬.২.১] আয়োজিত ওয়ার্কশপ/ সেমিনার"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_25" id="" value="সংখ্যা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_25" id="" value="2"></td>
                          <td class="column6 style185 null"><input type="text" name="achievement_25" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_25" id="" value="7"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_25" id="" value="10"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_25" id="" value="9"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_25" id="" value="8"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_25" id="" value="7"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_25" id="" value="6"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_25" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_25" id="" value="বীমা শাখা"></td>
                        </tr>
                        <tr class="row802">
                          <input type="hidden" name="row_id" value="26">
                          <td class="column2 style372 s"><input type="text" name="activity_26" id="" value="[৬.৩] বীমা দাবী নিষ্পত্তির হার বৃদ্ধি"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_26" id="" value="[৬.৩.১] নিষ্পত্তিকৃত দাবির হার"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_26" id="" value="%"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_26" id="" value="2"></td>
                          <td class="column6 style439 n"><input type="text" name="achievement_26" id="" value="2.21"></td>
                          <td class="column7 style439 n"><input type="text" name="achivement_star_26" id="" value="3.25"></td>
                          <td class="column8 style439 n"><input type="text" name="target_extraordinary_26" id="" value="4.50"></td>
                          <td class="column9 style439 n"><input type="text" name="target_excellent_26" id="" value="4.25"></td>
                          <td class="column10 style439 n"><input type="text" name="target_fine_26" id="" value="4.00"></td>
                          <td class="column11 style439 n"><input type="text" name="target_value_26" id="" value="3.75"></td>
                          <td class="column12 style439 n"><input type="text" name="target_below_26" id="" value="3.50"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_26" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_26" id="" value="বীমা শাখা"></td>
                        </tr>
                        <tr class="row803">
                          <input type="hidden" name="row_id" value="27">
                          <td class="column0 style452 s style453" rowspan="3"><input type="text" name="purpose_27" id="" value="[৭] নারী উদ্যোক্তাদেরকে ঋণ সুবিধা বৃদ্ধির মাধ্যমে নারীর ক্ষমতায়ন;"></td>
                          <td class="column1 style454 n style456" rowspan="3"><input type="text" name="purpose_value_27" id="" value="6"></td>
                          <td class="column2 style452 s style453" rowspan="2"><input type="text" name="activity_27" id="" value="[৭.১] নারী উদ্যোক্তাদের মধ্যে এসএমই ঋণ বিতরণ"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_27" id="" value="[৭.১.১] নতুন নারী উদ্যোক্তার সংখ্যা"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_27" id="" value="সংখ্যা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_27" id="" value="2"></td>
                          <td class="column6 style185 null"><input type="text" name="achievement_27" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_27" id="" value="8018"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_27" id="" value="8300"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_27" id="" value="8250"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_27" id="" value="8200"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_27" id="" value="8150"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_27" id="" value="8100"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_27" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_27" id="" value="বাণিজ্যিক ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row804">
                          <input type="hidden" name="row_id_27_1" value="27">
                          <td class="column3 style372 s"><input type="text" name="indicator_27_1" id="" value="[৭.১.২] নারী উদ্যোক্তাদের মধ্যে বিতরণকৃত এসএমই ঋণের পরিমান"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_27_1" id="" value="কোটি টাকা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_27_1" id="" value="2"></td>
                          <td class="column6 style185 null"><input type="text" name="achievement_27_1" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_27_1" id="" value="801"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_27_1" id="" value="850"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_27_1" id="" value="840"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_27_1" id="" value="830"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_27_1" id="" value="820"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_27_1" id="" value="810"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_27_1" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_27_1" id="" value="বাণিজ্যিক ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row805">
                          <input type="hidden" name="row_id" value="28">
                          <td class="column2 style372 s"><input type="text" name="activity_28" id="" value="[৭.২] নারী উদ্যোক্তাদের মধ্যে ক্ষুদ্রঋণ বিতরণ"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_28" id="" value="[৭.২.১] ক্ষুদ্র ঋণ গ্রহণকারী নারী উদ্যোক্তার সংখ্যা"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_28" id="" value="সংখ্যা (লক্ষ জন)"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_28" id="" value="2"></td>
                          <td class="column6 style185 null"><input type="text" name="achievement_28" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_28" id="" value="231"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_28" id="" value="234"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_28" id="" value="233"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_28" id="" value="232"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_28" id="" value="231"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_28" id="" value="230"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_28" id="" value=""></td>
                          <td class="column14 style437 s"><input type="text" name="responsible_28" id="" value="এমআরএ শাখা"></td>
                        </tr>
                        <tr class="row806">
                          <input type="hidden" name="row_id" value="29">
                          <td class="column0 style452 s style453" rowspan="2"><input type="text" name="purpose_29" id="" value="[৮] গৃহনির্মাণ ঋণ সম্পসারণের মাধ্যমে মানসম্মত বাসস্থানের সংস্থান করা;"></td>
                          <td class="column1 style454 n style456" rowspan="2"><input type="text" name="purpose_value_29" id="" value="2"></td>
                          <td class="column2 style372 s"><input type="text" name="activity_29" id="" value="[৮.১] গৃহ নির্মাণের জন্য গৃহ ঋণ বিতরণ"></td>
                          <td class="column3 style372 s"><input type="text" name="indicator_29" id="" value="[৮.১.১] বিতরণকৃত গৃহ নির্মাণ ঋণ"></td>
                          <td class="column4 style372 s"><input type="text" name="unit_29" id="" value="কোটি টাকা"></td>
                          <td class="column5 style435 n"><input type="text" name="indicator_value_29" id="" value="2"></td>
                          <td class="column6 style185 null"><input type="text" name="achievement_29" id="" value=""></td>
                          <td class="column7 style435 n"><input type="text" name="achivement_star_29" id="" value="38"></td>
                          <td class="column8 style435 n"><input type="text" name="target_extraordinary_29" id="" value="80"></td>
                          <td class="column9 style435 n"><input type="text" name="target_excellent_29" id="" value="70"></td>
                          <td class="column10 style435 n"><input type="text" name="target_fine_29" id="" value="60"></td>
                          <td class="column11 style435 n"><input type="text" name="target_value_29" id="" value="50"></td>
                          <td class="column12 style435 n"><input type="text" name="target_below_29" id="" value="40"></td>
                          <td class="column13 style437 null"><input type="text" name="margin_29" id="" value=""></td>
                          <td class="column14 style420 s"><input type="text" name="responsible_29" id="" value="বিশেষায়িত ব্যাংক শাখা"></td>
                        </tr>
                        <tr class="row807">
                          <input type="hidden" name="row_id" value="30">
                          <td class="column2 style440 s"><input type="text" name="activity_30" id="" value="[৮.২] সরকারি কর্মচারীদের জন্য ব্যাংকের মাধ্যমে গৃহ নির্মাণ ঋণ বিতরণ"></td>
                          <td class="column3 style440 s"><input type="text" name="indicator_30" id="" value="[৮.২.১] সরকারি কর্মচারীদের মধ্যে বিতরণকৃত ঋণের পরিমাণ"></td>
                          <td class="column4 style440 s"><input type="text" name="unit_30" id="" value="কোটি টাকা"></td>
                          <td class="column5 style441 n"><input type="text" name="indicator_value_30" id="" value="2"></td>
                          <td class="column6 style442 null"><input type="text" name="achievement_30" id="" value=""></td>
                          <td class="column7 style442 null"><input type="text" name="achivement_star_30" id="" value=""></td>
                          <td class="column8 style442 null"><input type="text" name="target_extraordinary_30" id="" value=""></td>
                          <td class="column9 style442 null"><input type="text" name="target_excellent_30" id="" value=""></td>
                          <td class="column10 style443 null"><input type="text" name="target_fine_30" id="" value=""></td>
                          <td class="column11 style11 null"><input type="text" name="target_value_30" id="" value=""></td>
                          <td class="column12 style11 null"><input type="text" name="target_below_30" id="" value=""></td>
                          <td class="column13 style443 null"><input type="text" name="margin_30" id="" value=""></td>
                          <td class="column14 style444 s"><input type="text" name="responsible_30" id="" value="বিশেষায়িত ব্যাংক শাখা"></td>
                        </tr>

                      </tbody>
                  </table>
                  </div>
                  <div class="header-item">
                    <div style="text-align: center;">
                      <h4>সেকশন ৩</h4>
                      <h4>কৌশলগত উদ্দেশ্য, অগ্রাধিকার, কার্যক্রম, কর্মসম্পাদন সূচক এবং <br> লক্ষ্যমাত্রাসমূহ</h4>
                      <h4 align="left">আবশ্যিক কৌশলগত উদ্দেশ্য ২০১৯-২০</h4>
                    </div>
                  </div>
                  <div class="listed-content">
                    <table border="1" width="100%">
                      <thead>
                          <tr>
                              <td rowspan="3">কৌশলগত উদ্দেশ্য</td>
                              <td class="column1 style445 s style447" rowspan="3">কৌশলগত উদ্দেশ্যের মান</td>
                              <td class="column2 style445 s style447" rowspan="3">কার্যক্রম</td>
                              <td class="column3 style445 s style447" rowspan="3">কর্মসম্পাদন সূচক</td>
                              <td class="column4 style445 s style447" rowspan="3">একক</td>
                              <td class="column5 style445 s style447" rowspan="3">কর্মসম্পাদন সূচকের মান</td>
                              <td class="column8 style449 s style450" colspan="5">লক্ষ্যমাত্রা/নির্ণায়ক ২০১৯-২০</td>
                              <td class="column13 style430 s" rowspan="3">অর্জন ২০১৯-২০ (১ম প্রান্তিক)</td>
                              <td class="column14 style445 s style447" rowspan="3">বাস্তবায়নের জন্য দায়িত্বপ্রাপ্ত</td>
                          </tr>
                          <tr class="row757">
                            <td class="column8 style433 s">অসাধারণ</td>
                            <td class="column9 style433 s">অতি উত্তম</td>
                            <td class="column10 style433 s">উত্তম</td>
                            <td class="column11 style433 s">চলতি মান</td>
                            <td class="column12 style433 s">চলতি মানের নিম্নে</td>
                          </tr>
                          <tr class="row758">
                            <td class="column8 style434 n">১০০%</td>
                            <td class="column9 style434 n">৯০%</td>
                            <td class="column10 style434 n">৮০%</td>
                            <td class="column11 style434 n">৭০%</td>
                            <td class="column12 style434 n">৬০%</td>
                          </tr>
                      </thead>
                   


                    <tbody>
                        <tr class="row819">
                          <input type="hidden" name="strategic_row_id" value="61">
                          <td class="column0 style489 s style490" rowspan="15"><input type="text" name="strategic_purpose_61" id="" value="[এম.১] কর্মসম্পাদনে গতিশীলতা আনয়ন ও সেবার মান বৃদ্ধি"></td>
                          <td class="column1 style491 n style493" rowspan="15"><input type="text" name="strategic_purpose_value_61" id="" value="11"></td>
                          <td class="column2 style489 s style490" rowspan="3"><input type="text" name="strategic_activity_61" id="" value="[এম.১.১] মন্ত্রণালয়/বিভাগে ই-ফাইলিং পদ্ধতি বাস্তবায়ন"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_61" id="" value="[এম.১.১.১] সকল শাখায় ই-নথি ব্যবহার"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_61" id="" value="%"></td>
                          <td class="column5 style472 n"><input type="text" name="strategic_indicator_value_61" id="" value="1"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_61_1" id="" value="100"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_61" id="" value="90"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_61" id="" value="80"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_61" id="" value="70"></td>
                          <td class="column10 style472 n"><input type="text" name="strategic_target_below_61" id="" value="60"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_61" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_61" id="" value="আইসিটি সেল"></td>
                        </tr>
                        <tr class="row820">
                          <input type="hidden" name="strategic_row_id_61_1" value="61">
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_61_1" id="" value="[এম.১.১.২] ই-ফাইলে নথি নিষ্পত্তিকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_61_1" id="" value="%"></td>
                          <td class="column5 style472 n"><input type="text" name="strategic_indicator_value_61_1" id="" value="1"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_61_1" id="" value="70"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_61_1" id="" value="65"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_61_1" id="" value="60"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_61_1" id="" value="55"></td>
                          <td class="column10 style472 n"><input type="text" name="strategic_target_below_61_1" id="" value="50"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_61_1" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_61_1" id="" value="আইসিটি সেল"></td>
                        </tr>
                        <tr class="row821">
                          <input type="hidden" name="strategic_row_id_61_1_1" value="61">
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_61_1_1" id="" value="[এম.১.১.৩] ই-ফাইলে পত্র জারীকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_61_1_1" id="" value="%"></td>
                          <td class="column5 style472 n"><input type="text" name="strategic_indicator_value_61_1_1" id="" value="1"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_61_1_1" id="" value="60"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_61_1_1" id="" value="55"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_61_1_1" id="" value="50"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_61_1_1" id="" value="45"></td>
                          <td class="column10 style472 n"><input type="text" name="strategic_target_below_61_1_1" id="" value="40"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_61_1_1" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_61_1_1" id="" value="আইসিটি সেল"></td>
                        </tr>
                        <tr class="row822">
                          <input type="hidden" name="strategic_row_id" value="62">
                          <td class="column2 style471 s"><input type="text" name="strategic_activity_62" id="" value="[এম.১.২] মন্ত্রণালয়/বিভাগ কর্তৃকডিজিটাল সেবা চালু করা"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_62" id="" value="[এম.১.২.১] ন্যূনতম একটি নতুন ডিজিটাল সেবা চালুকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_62" id="" value="তারিখ"></td>
                          <td class="column5 style472 n"><input type="text" name="strategic_indicator_value_62" id="" value="1"></td>
                          <td class="column6 style471 s"><input type="text" name="strategic_target_extraordinary_62" id="" value="১৫-০২-২০২০"></td>
                          <td class="column7 style471 s"><input type="text" name="strategic_target_excellent_62" id="" value="১৫-০৩-২০২০"></td>
                          <td class="column8 style471 s"><input type="text" name="strategic_target_fine_62" id="" value="৩১-০৩-২০২০"></td>
                          <td class="column9 style471 s"><input type="text" name="strategic_target_value_62" id="" value="৩০-০৪-২০২০"></td>
                          <td class="column10 style471 s"><input type="text" name="strategic_target_below_62" id="" value="৩০-০৫-২০২০"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_62" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_62" id="" value="আইসিটি সেল"></td>
                        </tr>
                        <tr class="row823">
                          <input type="hidden" name="strategic_row_id" value="63">
                          <td class="column2 style471 s"><input type="text" name="strategic_activity_63" id="" value="[এম.১.৩] মন্ত্রণালয়/বিভাগ কর্তৃক উদ্ভাবনী উদ্যোগ/ক্ষুদ্র উন্নয়ন প্রকল্প বাস্তবায়ন"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_63" id="" value="[এম.১.৩.১] ন্যূনতম একটি নতুন উদ্ভাবনী উদ্যোগ/ক্ষুদ্র উন্নয়ন প্রকল্প চালুকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_63" id="" value="তারিখ"></td>
                          <td class="column5 style472 n"><input type="text" name="strategic_indicator_value_63" id="" value="1"></td>
                          <td class="column6 style474 n"><input type="text" name="strategic_target_extraordinary_63" id="" value="11/03/2020"></td>
                          <td class="column7 style471 s"><input type="text" name="strategic_target_excellent_63" id="" value="১৮-০৩-২০২০"></td>
                          <td class="column8 style471 s"><input type="text" name="strategic_target_fine_63" id="" value="২৫-০৩-২০২০"></td>
                          <td class="column9 style474 n"><input type="text" name="strategic_target_value_63" id="" value="01/04/2020"></td>
                          <td class="column10 style474 n"><input type="text" name="strategic_target_below_63" id="" value="08/04/2020"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_63" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_63" id="" value="আইসিটি সেল"></td>
                        </tr>
                        <tr class="row824">
                          <input type="hidden" name="strategic_row_id" value="64">
                          <td class="column2 style489 s style490" rowspan="2"><input type="text" name="strategic_activity_64" id="" value="[এম.১.৪] প্রতিটি শাখায় বিনষ্টযোগ্য নথির তালিকা প্রণয়ন ও বিনষ্ট করা"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_64" id="" value="[এম.১.৪.১] বিনষ্টযোগ্য নথির তালিকা প্রণীত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_64" id="" value="তারিখ"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_64" id="" value="0.5"></td>
                          <td class="column6 style474 n"><input type="text" name="strategic_target_extraordinary_64" id="" value="10/01/2020"></td>
                          <td class="column7 style471 s"><input type="text" name="strategic_target_excellent_64" id="" value="১৭-০১-২০২০"></td>
                          <td class="column8 style471 s"><input type="text" name="strategic_target_fine_64" id="" value="২৪-০১-২০২০"></td>
                          <td class="column9 style471 s"><input type="text" name="strategic_target_value_64" id="" value="২৮-০১-২০২০"></td>
                          <td class="column10 style471 s"><input type="text" name="strategic_target_below_64" id="" value="৩১-০১-২০২০"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_64" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_64" id="" value="প্রশাসন শাখা"></td>
                        </tr>
                        <tr class="row825">
                          <input type="hidden" name="strategic_row_id_64_1" value="64">
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_64_1" id="" value="[এম.১.৪.২] প্রণীত তালিকা অনুযায়ী বিনষ্টকৃত নথি"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_64_1" id="" value="%"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_64_1" id="" value="0.5"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_64_1" id="" value="100"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_64_1" id="" value="90"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_64_1" id="" value="80"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_64_1" id="" value="70"></td>
                          <td class="column10 style472 n"><input type="text" name="strategic_target_below_64_1" id="" value="60"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_64_1" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_64_1" id="" value="প্রশাসন শাখা"></td>
                        </tr>
                        <tr class="row826">
                          <input type="hidden" name="strategic_row_id" value="65">
                          <td class="column2 style489 s style490" rowspan="2"><input type="text" name="strategic_activity_65" id="" value="[এম.১.৫] সেবা সহজিকরণ"></td>
                          <td class="column3 style476 s"><input type="text" name="strategic_indicator_65" id="" value="[এম.১.৫.১] ন্যূনতম একটি সেবা সহজিকরণ প্রসেস ম্যাপসহ সরকারি আদেশ জারিকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_65" id="" value="তারিখ"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_65" id="" value="0.5"></td>
                          <td class="column6 style471 s"><input type="text" name="strategic_target_extraordinary_65" id="" value="১৫-১০-২০১৯"></td>
                          <td class="column7 style471 s"><input type="text" name="strategic_target_excellent_65" id="" value="২০-১০-২০১৯"></td>
                          <td class="column8 style471 s"><input type="text" name="strategic_target_fine_65" id="" value="২৪-১০-২০১৯"></td>
                          <td class="column9 style471 s"><input type="text" name="strategic_target_value_65" id="" value="২৮-১০-২০১৯"></td>
                          <td class="column10 style471 s"><input type="text" name="strategic_target_below_65" id="" value="৩০-১০-২০১৯"></td>
                          <td class="column11 style471 null"></td><input type="text" name="strategic_margin_65" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_65" id="" value="প্রশাসন শাখা"></td>
                        </tr>
                        <tr class="row827">
                          <input type="hidden" name="strategic_row_id_65_1" value="65">
                          <td class="column3 style477 s"><input type="text" name="strategic_indicator_65_1" id="" value="[এম.১.৫.২] সেবা সহজিকরণ অধিক্ষেত্রে বাস্তবায়িত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_65_1" id="" value="তারিখ"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_65_1" id="" value="0.5"></td>
                          <td class="column6 style471 s"><input type="text" name="strategic_target_extraordinary_65_1" id="" value="১৫-০৪-২০২০"></td>
                          <td class="column7 style471 s"><input type="text" name="strategic_target_excellent_65_1" id="" value="৩০-০৪-২০২০"></td>
                          <td class="column8 style471 s"><input type="text" name="strategic_target_fine_65_1" id="" value="১৫-০৫-২০২০"></td>
                          <td class="column9 style471 s"><input type="text" name="strategic_target_value_65_1" id="" value="৩০-০৫-২০২০"></td>
                          <td class="column10 style471 s"><input type="text" name="strategic_target_below_65_1" id="" value="১৫-০৬-২০২০"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_65_1" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_65_1" id="" value="প্রশাসন শাখা"></td>
                        </tr>
                        <tr class="row828">
                          <input type="hidden" name="strategic_row_id" value="66">
                          <td class="column2 style489 s style490" rowspan="2"><input type="text" name="strategic_activity_66" id="" value="[এম.১.৬] পিআরএল শুরুর ২ মাস পূর্বে সংশ্লিষ্ট কর্মচারীর পিআরএল ও ছুটি নগদায়নপত্র জারী করা"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_66" id="" value="[এম.১.৬.১] পি আর এল আদেশ জারিকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_66" id="" value="%"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_66" id="" value="0.5"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_66" id="" value="100"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_66" id="" value="90"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_66" id="" value="80"></td>
                          <td class="column9 style470 null"><input type="text" name="strategic_target_value_66" id="" value=""></td>
                          <td class="column10 style470 null"><input type="text" name="strategic_target_below_66" id="" value=""></td>
                          <td class="column11 style478 null"><input type="text" name="strategic_margin_66" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_66" id="" value="প্রশাসন শাখা"></td>
                        </tr>
                        <tr class="row829">
                          <input type="hidden" name="strategic_row_id_66_1" value="66">
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_66_1" id="" value="[এম.১.৬.২] ছুটি নগদায়ন পত্র জারিকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_66_1" id="" value="%"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_66_1" id="" value="0.5"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_66_1" id="" value="100"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_66_1" id="" value="90"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_66_1" id="" value="80"></td>
                          <td class="column9 style470 null"><input type="text" name="strategic_target_value_66_1" id="" value=""></td>
                          <td class="column10 style470 null"><input type="text" name="strategic_target_below_66_1" id="" value=""></td>
                          <td class="column11 style478 null"><input type="text" name="strategic_margin_66_1" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_66_1" id="" value="প্রশাসন শাখা"></td>
                        </tr>
                        <tr class="row830">
                          <input type="hidden" name="strategic_row_id" value="67">
                          <td class="column2 style489 s style490" rowspan="2"><input type="text" name="strategic_activity_67" id="" value="[এম.১.৭] শূন্য পদের বিপরীতে নিয়োগ প্রদান"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_67" id="" value="[এম.১.৭.১] নিয়োগ প্রদানের জন্য বিজ্ঞপ্তি জারিকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_67" id="" value="%"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_67" id="" value="0.5"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_67" id="" value="80"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_67" id="" value="70"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_67" id="" value="60"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_67" id="" value="50"></td>
                          <td class="column10 style470 null"><input type="text" name="strategic_target_below_67" id="" value=""></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_67" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_67" id="" value="প্রশাসন শাখা"></td>
                        </tr>
                        <tr class="row831">
                          <input type="hidden" name="strategic_row_id_67_1" value="67">
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_67_1" id="" value="[এম.১.৭.২] নিয়োগ প্রদানকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_67_1" id="" value="%"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_67_1" id="" value="0.5"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_67_1" id="" value="80"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_67_1" id="" value="70"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_67_1" id="" value="60"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_67_1" id="" value="50"></td>
                          <td class="column10 style470 null"><input type="text" name="strategic_target_below_67_1" id="" value=""></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_67_1" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_67_1" id="" value="প্রশাসন শাখা"></td>
                        </tr>
                        <tr class="row832">
                          <input type="hidden" name="strategic_row_id" value="68">
                          <td class="column2 style471 s"><input type="text" name="strategic_activity_68" id="" value="[এম.১.৮] বিভাগীয় মামলা নিষ্পত্তি"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_68" id="" value="[এম.১.৮.১] বিভাগীয় মামলা নিষ্পত্তিকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_68" id="" value="%"></td>
                          <td class="column5 style472 n"><input type="text" name="strategic_indicator_value_68" id="" value="1"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_68" id="" value="100"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_68" id="" value="90"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_68" id="" value="80"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_68" id="" value="70"></td>
                          <td class="column10 style470 null"><input type="text" name="strategic_target_below_68" id="" value=""></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_68" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_" id="responsible_68" value="শৃঙ্খলা শাখা"></td>
                        </tr>
                        <tr class="row833">
                          <input type="hidden" name="strategic_row_id" value="69">
                          <td class="column2 style471 s"><input type="text" name="strategic_activity_69" id="" value="[এম.১.৯] তথ্যবাতায়ন হালনাগাদকরণ"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_69" id="" value="[এম.১.৯.১] মন্ত্রণালয়/বিভাগের সকল তথ্যহালনাগাদকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_69" id="" value="%"></td>
                          <td class="column5 style472 n"><input type="text" name="strategic_indicator_value_69" id="" value="1"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_69" id="" value="100"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_69" id="" value="90"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_69" id="" value="80"></td>
                          <td class="column9 style470 null"><input type="text" name="strategic_target_value_69" id="" value=""></td>
                          <td class="column10 style470 null"><input type="text" name="strategic_target_below_69" id="" value=""></td>
                          <td class="column11 style478 null"><input type="text" name="strategic_margin_69" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_69" id="" value="আইসিটি সেল"></td>
                        </tr>
                        <tr class="row834">
                          <input type="hidden" name="strategic_row_id" value="70">
                          <td class="column0 style489 s style490" rowspan="11"><input type="text" name="strategic_purpose_70" id="" value="[এম.২] দাপ্তরিক কর্মকান্ডে স্বচ্ছতা বৃদ্ধি ও জবাবদিহি নিশ্চিতকরণ"></td>
                          <td class="column1 style491 n style493" rowspan="11"><input type="text" name="strategic_purpose_value_70" id="" value="8"></td>
                          <td class="column2 style489 s style490" rowspan="4"><input type="text" name="strategic_activity_70" id="" value="[এম.২.১] বার্ষিক কর্মসম্পাদন চুক্তি বাস্তবায়ন"></td>
                          <td class="column3 style476 s"><input type="text" name="strategic_indicator_70" id="" value="[এম.২.১.১] সরকারি কর্মসম্পাদন ব্যবস্থাপনা সংক্রান্ত প্রশিক্ষণসহ অন্যান্য বিষয়ে প্রশিক্ষণ আয়োজিত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_70" id="" value="জনঘন্টা"></td>
                          <td class="column5 style472 n"><input type="text" name="strategic_indicator_value_70" id="" value="1"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_70" id="" value="60"></td>
                          <td class="column7 style470 null"><input type="text" name="strategic_target_excellent_70" id="" value=""></td>
                          <td class="column8 style470 null"><input type="text" name="strategic_target_fine_70" id="" value=""></td>
                          <td class="column9 style470 null"><input type="text" name="strategic_target_value_70" id="" value=""></td>
                          <td class="column10 style470 null"><input type="text" name="strategic_target_below_70" id="" value=""></td>
                          <td class="column11 style478 null"><input type="text" name="strategic_margin_70" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_70" id="" value="প্রশিক্ষণ শাখা"></td>
                        </tr>
                        <tr class="row835">
                          <input type="hidden" name="strategic_row_id_70_1" value="70">
                          <td class="column3 style477 s"><input type="text" name="strategic_indicator_70_1" id="" value="[এম.২.১.২] বার্ষিক কর্মসম্পাদন চুক্তির সকল প্রতিবেদন নির্ধারিত সময়ে অনলাইনে দাখিলকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_70_1" id="" value="সংখ্যা"></td>
                          <td class="column5 style472 n"><input type="text" name="strategic_indicator_value_70_1" id="" value="1"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_70_1" id="" value="4"></td>
                          <td class="column7 style470 null"><input type="text" name="strategic_target_excellent_70_1" id="" value=""></td>
                          <td class="column8 style470 null"><input type="text" name="strategic_target_fine_70_1" id="" value=""></td>
                          <td class="column9 style470 null"><input type="text" name="strategic_target_value_70_1" id="" value=""></td>
                          <td class="column10 style470 null"><input type="text" name="strategic_target_below_70_1" id="" value=""></td>
                          <td class="column11 style478 null"><input type="text" name="strategic_margin_70_1" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_70_1" id="" value="বাজেট শাখা"></td>
                        </tr>
                        <tr class="row836">
                          <input type="hidden" name="strategic_row_id_70_1_1" value="70">
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_70_1_1" id="" value="[এম.২.১.৩] এপিএ টিমের মাসিক সভার সিদ্ধান্ত বাস্তবায়িত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_70_1_1" id="" value="%"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_70_1_1" id="" value="0.5"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_70_1_1" id="" value="100"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_70_1_1" id="" value="90"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_70_1_1" id="" value="80"></td>
                          <td class="column9 style470 null"><input type="text" name="strategic_target_value_70_1_1" id="" value=""></td>
                          <td class="column10 style470 null"><input type="text" name="strategic_target_below_70_1_1" id="" value=""></td>
                          <td class="column11 style478 null"><input type="text" name="strategic_margin_70_1_1" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_70_1_1" id="" value="বাজেট শাখা"></td>
                        </tr>
                        <tr class="row837">
                          <input type="hidden" name="strategic_row_id__70_1_2" value="70">
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_70_1_2" id="" value="[এম.২.১.৪] দপ্তর/সংস্থার ২০১৯-২০ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তির অর্ধবার্ষিক মূল্যায়ন প্রতিবেদন পর্যালোচনান্তে ফলাবর্তক (feedback) প্রদত্ত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_70_1_2" id="" value="তারিখ"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_70_1_2" id="" value="0.5"></td>
                          <td class="column6 style471 s"><input type="text" name="strategic_target_extraordinary_70_1_2" id="" value="৩১-০১-২০২০"></td>
                          <td class="column7 style474 n"><input type="text" name="strategic_target_excellent_70_1_2" id="" value="07/02/2020"></td>
                          <td class="column8 style474 n"><input type="text" name="strategic_target_fine_70_1_2" id="" value="10/02/2020"></td>
                          <td class="column9 style474 n"><input type="text" name="strategic_target_value_70_1_2" id="" value="11/02/2020"></td>
                          <td class="column10 style471 s"><input type="text" name="strategic_target_below_70_1_2" id="" value="১৪-০২-২০২০"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_70_1_2" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_70_1_2" id="" value="বাজেট শাখা"></td>
                        </tr>
                        <tr class="row838">
                          <input type="hidden" name="strategic_row_id" value="71">
                          <td class="column2 style489 s style490" rowspan="2"><input type="text" name="strategic_activity_71" id="" value="[এম.২.২] জাতীয় শুদ্ধাচার কৌশল ও তথ্য অধিকার বাস্তবায়ন"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_71" id="" value="[এম.২.২.১] জাতীয় শুদ্ধাচার কর্মপরিকল্পনা বাস্তবায়িত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_71" id="" value="%"></td>
                          <td class="column5 style472 n"><input type="text" name="strategic_indicator_value_71" id="" value="1"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_71" id="" value="100"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_71" id="" value="95"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_71" id="" value="90"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_71" id="" value="85"></td>
                          <td class="column10 style470 null"><input type="text" name="strategic_target_below_71" id="" value=""></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_71" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_71" id="" value="অডিট শাখা"></td>
                        </tr>
                        <tr class="row839">
                          <input type="hidden" name="strategic_row_id_71_1" value="71">
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_71_1" id="" value="[এম.২.২.২] ২০১৮-১৯ অর্থ বছরের বার্ষিক প্রতিবেদন ওয়েবসাইটে প্রকাশিত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_71_1" id="" value="তারিখ"></td>
                          <td class="column5 style472 n"><input type="text" name="strategic_indicator_value_71_1" id="" value="1"></td>
                          <td class="column6 style471 s"><input type="text" name="strategic_target_extraordinary_71_1" id="" value="১৫-১০-২০১৯"></td>
                          <td class="column7 style471 s"><input type="text" name="strategic_target_excellent_71_1" id="" value="১৫-১১-২০১৯"></td>
                          <td class="column8 style471 s"><input type="text" name="strategic_target_fine_71_1" id="" value="১৫-১২-২০১৯"></td>
                          <td class="column9 style471 s"><input type="text" name="strategic_target_value_71_1" id="" value="১৫-০১-২০২০"></td>
                          <td class="column10 style471 s"><input type="text" name="strategic_target_below_71_1" id="" value="৩১-০১-২০২০"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_71_1" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_71_1" id="" value="প্রশাসন শাখা"></td>
                        </tr>
                        <tr class="row840">
                          <input type="hidden" name="strategic_row_id" value="72">
                          <td class="column2 style489 s style490" rowspan="2"><input type="text" name="strategic_activity_72" id="" value="[এম.২.৩] অভিযোগ প্রতিকার ব্যবস্থা বাস্তবায়ন"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_72" id="" value="[এম.২.৩.১] নির্দিষ্ট সময়ের মধ্যে অভিযোগ নিষ্পত্তিকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_72" id="" value="%"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_72" id="" value="0.5"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_72" id="" value="100"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_72" id="" value="90"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_72" id="" value="80"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_72" id="" value="70"></td>
                          <td class="column10 style470 null"><input type="text" name="strategic_target_below_72" id="" value=""></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_72" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_72" id="" value="অভিযোগ শাখা"></td>
                        </tr>
                        <tr class="row841">
                          <input type="hidden" name="strategic_row_id_72_1" value="72">
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_72_1" id="" value="[এম.২.৩.২] অভিযোগ নিষ্পত্তি সংক্রান্ত মাসিক প্রতিবেদন মন্ত্রিপরিষদ বিভাগে দাখিলকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_72_1" id="" value="সংখ্যা"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_72_1" id="" value="0.5"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_72_1" id="" value="12"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_72_1" id="" value="11"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_72_1" id="" value="10"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_72_1" id="" value="9"></td>
                          <td class="column10 style470 null"><input type="text" name="strategic_target_below_72_1" id="" value=""></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_72_1" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_72_1" id="" value="অভিযোগ শাখা"></td>
                        </tr>
                        <tr class="row842">
                          <input type="hidden" name="strategic_row_id" value="73">
                          <td class="column2 style489 s style490" rowspan="3"><input type="text" name="strategic_activity_73" id="" value="[এম.২.৪] সেবা প্রদান প্রতিশ্রুতি হালনাগাদকরণ ও বাস্তবায়ন"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_73" id="" value="[এম.২.৪.১] সেবা প্রদান প্রতিশ্রুতি হালনাগাদকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_73" id="" value="%"></td>
                          <td class="column5 style472 n"><input type="text" name="strategic_indicator_value_73" id="" value="1"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_73" id="" value="90"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_73" id="" value="80"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_73" id="" value="70"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_73" id="" value="60"></td>
                          <td class="column10 style470 null"><input type="text" name="strategic_target_below_73" id="" value=""></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_73" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_73" id="" value="প্রশাসন শাখা"></td>
                        </tr>
                        <tr class="row843">
                          <input type="hidden" name="strategic_row_id_73_1" value="73">
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_73_1" id="" value="[এম.২.৪.২] নির্ধারিত সময়ে ত্রৈমাসিক বাস্তবায়ন প্রতিবেদন মন্ত্রিপরিষদ বিভাগে দাখিলকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_73_1" id="" value="সংখ্যা"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_73_1" id="" value="0.5"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_73_1" id="" value="4"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_73_1" id="" value="3"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_73_1" id="" value="2"></td>
                          <td class="column9 style470 null"><input type="text" name="strategic_target_value_73_1" id="" value=""></td>
                          <td class="column10 style470 null"><input type="text" name="strategic_target_below_73_1" id="" value=""></td>
                          <td class="column11 style478 null"><input type="text" name="strategic_margin_73_1" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_73_1" id="" value="প্রশাসন শাখা"></td>
                        </tr>
                        <tr class="row844">
                          <input type="hidden" name="strategic_row_id_73_1_1" value="73">
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_73_1_1" id="" value="[এম.২.৪.৩] সেবাগ্রহীতাদের মতামত পরিবীক্ষণ ব্যবস্থা চালুকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_73_1_1" id="" value="তারিখ"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_73_1_1" id="" value="0.5"></td>
                          <td class="column6 style471 s"><input type="text" name="strategic_target_extraordinary_73_1_1" id="" value="৩১-১২-২০১৯"></td>
                          <td class="column7 style471 s"><input type="text" name="strategic_target_excellent_73_1_1" id="" value="১৫-০১-২০২০"></td>
                          <td class="column8 style474 n"><input type="text" name="strategic_target_fine_73_1_1" id="" value="07/02/202">0</td>
                          <td class="column9 style471 s"><input type="text" name="strategic_target_value_73_1_1" id="" value="১৭-০২-২০২০"></td>
                          <td class="column10 style471 s"><input type="text" name="strategic_target_below_73_1_1" id="" value="২৮-০২-২০২০"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_73_1_1" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_73_1_1" id="" value="প্রশাসন শাখা"></td>
                        </tr>
                        <tr class="row845">
                          <input type="hidden" name="strategic_row_id" value="74">
                          <td class="column0 style489 s style490" rowspan="8"><input type="text" name="strategic_purpose_74" id="" value="[এম.৩] আর্থিক ও সম্পদ ব্যবস্থাপনার উন্নয়ন"></td>
                          <td class="column1 style491 n style493" rowspan="8"><input type="text" name="strategic_purpose_value_74" id="" value="6"></td>
                          <td class="column2 style489 s style490" rowspan="2"><input type="text" name="strategic_activity_74" id="" value="[এম.৩.১] বাজেট বাস্তবায়নে উন্নয়ন"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_74" id="" value="[এম.৩.১.১] বাজেট বাস্তবায়ন পরিকল্পনা প্রণীত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_74" id="" value="তারিখ"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_74" id="" value="0.5"></td>
                          <td class="column6 style471 s"><input type="text" name="strategic_target_extraordinary_74" id="" value="১৬-০৮-২০১৯"></td>
                          <td class="column7 style471 s"><input type="text" name="strategic_target_excellent_74" id="" value="২০-০৮-২০১৯"></td>
                          <td class="column8 style471 s"><input type="text" name="strategic_target_fine_74" id="" value="২৪-০৮-২০১৯"></td>
                          <td class="column9 style471 s"><input type="text" name="strategic_target_value_74" id="" value="২৮-০৮-২০১৯"></td>
                          <td class="column10 style471 s"><input type="text" name="strategic_target_below_74" id="" value="৩০-০৮-২০১৯"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_74" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_74" id="" value="বাজেট শাখা"></td>
                        </tr>
                        <tr class="row846">
                          <input type="hidden" name="strategic_row_id_74_1" value="74">
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_74_1" id="" value="[এম.৩.১.২] ত্রৈমাসিক বাজেট বাস্তবায়ন প্রতিবেদন দাখিলকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_74_1" id="" value="সংখ্যা"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_74_1" id="" value="0.5"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_74_1" id="" value="4"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_74_1" id="" value="3"></td>
                          <td class="column8 style470 null"><input type="text" name="strategic_target_fine_74_1" id="" value=""></td>
                          <td class="column9 style470 null"><input type="text" name="strategic_target_value_74_1" id="" value=""></td>
                          <td class="column10 style470 null"><input type="text" name="strategic_target_below_74_1" id="" value=""></td>
                          <td class="column11 style478 null"><input type="text" name="strategic_margin_74_1" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_74_1" id="" value="বাজেট শাখা"></td>
                        </tr>
                        <tr class="row847">
                          <input type="hidden" name="strategic_row_id" value="75">
                          <td class="column2 style471 s"><input type="text" name="strategic_activity_75" id="" value="[এম.৩.২] বার্ষিক উন্নয়ন কর্মসূচি (এডিপি) বাস্তবায়ন"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_75" id="" value="[এম.৩.২.১] বার্ষিক উন্নয়ন কর্মসূচি (এডিপি) বাস্তবায়িত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_75" id="" value="%"></td>
                          <td class="column5 style472 n"><input type="text" name="strategic_indicator_value_75" id="" value="2"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_75" id="" value="100"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_75" id="" value="95"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_75" id="" value="90"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_75" id="" value="85"></td>
                          <td class="column10 style472 n"><input type="text" name="strategic_target_below_75" id="" value="80"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_75" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_75" id="" value="প্রকল্প শাখা"></td>
                        </tr>
                        <tr class="row848">
                          <input type="hidden" name="strategic_row_id" value="76">
                          <td class="column2 style471 s"><input type="text" name="strategic_activity_76" id="" value="[এম.৩.৩] বার্ষিক ক্রয় পরিকল্পনা বাস্তবায়ন"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_76" id="" value="[এম.৩.৩.১] ক্রয় পরিকল্পনা বাস্তবায়িত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_76" id="" value="%"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_76" id="" value="0.5"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_76" id="" value="100"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_76" id="" value="95"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_76" id="" value="90"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_76" id="" value="85"></td>
                          <td class="column10 style472 n"><input type="text" name="strategic_target_below_76" id="" value="80"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_76" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_76" id="" value="গ্রহণ, বিতরণ ও সেবা শাখা"></td>
                        </tr>
                        <tr class="row849">
                          <input type="hidden" name="strategic_row_id" value="77">
                          <td class="column2 style489 s style490" rowspan="2"><input type="text" name="strategic_activity_77" id="" value="[এম.৩.৪] অডিট আপত্তি নিষ্পত্তি কার্যক্রমের উন্নয়ন"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_77" id="" value="[এম.৩.৪.১] ত্রিপক্ষীয় সভায় নিষ্পত্তির জন্য উপস্থাপিত অডিট আপত্তি"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_77" id="" value="%"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_77" id="" value="0.5"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_77" id="" value="60"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_77" id="" value="55"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_77" id="" value="50"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_77" id="" value="45"></td>
                          <td class="column10 style472 n"><input type="text" name="strategic_target_below_77" id="" value="40"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_77" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_77" id="" value="অডিট শাখা"></td>
                        </tr>
                        <tr class="row850">
                          <input type="hidden" name="strategic_row_id_77_1" value="77">
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_77_2" id="" value="[এম.৩.৪.২] অডিট আপত্তি নিষ্পত্তিকৃত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_77_2" id="" value="%"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_77_2" id="" value="0.5"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_77_2" id="" value="50"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_77_2" id="" value="45"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_77_2" id="" value="40"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_77_2" id="" value="35"></td>
                          <td class="column10 style472 n"><input type="text" name="strategic_target_below_77_2" id="" value="30"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_77_2" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_77_2" id="" value="অডিট শাখা"></td>
                        </tr>
                        <tr class="row851">
                          <input type="hidden" name="strategic_row_id" value="78">
                          <td class="column2 style471 s"><input type="text" name="strategic_activity_78" id="" value="[এম.৩.৫] টেলিফোন বিল পরিশোধ"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_78" id="" value="[এম.৩.৫.১] টেলিফোন বিল পরিশোধিত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_78" id="" value="%"></td>
                          <td class="column5 style475 n"><input type="text" name="strategic_indicator_value_78" id="" value="0.5"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_78" id="" value="100"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_78" id="" value="95"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_78" id="" value="90"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_78" id="" value="85"></td>
                          <td class="column10 style472 n"><input type="text" name="strategic_target_below_78" id="" value="80"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_78" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_78" id="" value="গ্রহণ, বিতরণ ও সেবা শাখা"></td>
                        </tr>
                        <tr class="row852">
                          <input type="hidden" name="strategic_row_id" value="79">
                          <td class="column2 style471 s"><input type="text" name="strategic_activity_79" id="" value="[এম.৩.৬] বিসিসি/বিটিসিএল-এর ইন্টারনেট বিল পরিশোধ"></td>
                          <td class="column3 style471 s"><input type="text" name="strategic_indicator_79" id="" value="[এম.৩.৬.১] ইন্টারনেট বিল পরিশোধিত"></td>
                          <td class="column4 style471 s"><input type="text" name="strategic_unit_79" id="" value="%"></td>
                          <td class="column5 style472 n"><input type="text" name="strategic_indicator_value_79" id="" value="1"></td>
                          <td class="column6 style472 n"><input type="text" name="strategic_target_extraordinary_79" id="" value="100"></td>
                          <td class="column7 style472 n"><input type="text" name="strategic_target_excellent_79" id="" value="95"></td>
                          <td class="column8 style472 n"><input type="text" name="strategic_target_fine_79" id="" value="90"></td>
                          <td class="column9 style472 n"><input type="text" name="strategic_target_value_79" id="" value="85"></td>
                          <td class="column10 style472 n"><input type="text" name="strategic_target_below_79" id="" value="80"></td>
                          <td class="column11 style471 null"><input type="text" name="strategic_margin_79" id="" value=""></td>
                          <td class="column12 style473 s"><input type="text" name="strategic_responsible_79" id="" value="গ্রহণ, বিতরণ ও সেবা শাখা"></td>
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
