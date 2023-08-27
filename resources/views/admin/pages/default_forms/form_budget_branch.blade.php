@extends('admin.master')
@section('content')
<style>
    input{
        border:none;
        width: 100%;
    },
     .rel-26{
            margin_top: 50px;
            margin-bottom: 50px;
        },

   
     
        
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
       
 
          <form action="{{ url('budget_branch') }}" method="post">
            @csrf
              <div class="item">
                <div class="header-item">
                    <h3>বিষয়: <input type="text" name="susbject-1[]" id="" value="বাজেট শাখা সংশ্লিষ্ট বাজেট ও এপিএ প্রতিবেদনের ফরমেট"> </h3>
                    <h4><input type="text" name="topic-1[]" id="" value="বাজেট:"></h4>
                  </div>
                  <div class="listed-content">
                    <ul class="list-group">
                        <li>১।<input type="text" name="budget[]" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের ২০২০-২১ অর্থবছরের মধ্যমেয়াদি বাজেট কাঠামো সংশোধন ও হালনাগাদকরণ সংক্রান্ত তথ্য প্রেরণ। (বিসি-১) (বাৎসরিক)"> </li>
                        <li>২। <input type="text" name="budget[]" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থা/প্রকল্পসমুহের ২০২০-২১ অর্থবছরের মধ্যমেয়াদি বাজেট কাঠামো সংশোধন ও হালনাগাদকরণ সংক্রান্ত তথ্য প্রেরণ। (বিসি-১) (বাৎসরিক)"></li>
                        <li>৩।<input type="text" name="budget[]" id="" value="মধ্যমেয়াদি বাজেট কাঠামো পদ্ধতির আওতাভুক্ত আর্থিক প্রতিষ্ঠান বিভাগের ২০১৯-২০ অর্থবছরের সংশোধন (পরিচালন এবং উন্নয়ন), ২০২০-২১ অর্থবছরের প্রাক্কলন এবং ২০২১-২২ ও ২০২২-২৩ অর্থবছরের প্রক্ষেপণ প্রণয়ন। (বাৎসরিক)"> </li>
                        <li>৪।<input type="text" name="budget[]" id="" value="মধ্যমেয়াদি বাজেট কাঠামো পদ্ধতির আওতাভুক্ত আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থা/ প্রকল্পসমুহের ২০১৯-২০ অর্থবছরের সংশোধন (পরিচালন এবং উন্নয়ন), ২০২০-২১ অর্থবছরের প্রাক্কলন এবং ২০২১-২২ ও ২০২২-২৩ অর্থবছরের প্রক্ষেপণ প্রণয়ন। (বাৎসরিক)"> </li>
                        <li>৫।<input type="text" name="budget[]" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের ২০২০-২১ অর্থবছরের বাজেট বাস্তবায়ন পরিকল্পনা প্রণয়ন। (বাৎসরিক)"> </li>
                        <li>৬।<input type="text" name="budget[]" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থা/প্রকল্পসমুহের ২০২০-২১ অর্থবছরের বাজেট বাস্তবায়ন পরিকল্পনা প্রণয়ন। (বাৎসরিক)"> </li>
                        <li>৭।<input type="text" name="budget[]" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের চলমান ২০১৯-২০ অর্থবছরের বাজেট বাস্তবায়ন অগ্রগতি পরিবীক্ষণ। (ত্রৈমাসিক/ষান্মাষিক/বাৎসরিক)"> </li>
                        <li>৮।<input type="text" name="budget[]" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থা/প্রকল্পসমুহের চলমান ২০১৯-২০ অর্থবছরের বাজেট বাস্তবায়ন অগ্রগতি পরিবীক্ষণ। (ত্রৈমাসিক/ষান্মাষিক/বাৎসরিক)"> </li>
                        <li>৯।<input type="text" name="budget[]" id="" value="বাজেট বাস্তবায়ন অগ্রগতি বিষয়ক প্রতিবেদন প্রণয়নের জন্য বাজেটে ঘোষিত গুরুত্বপূর্ণ কার্যক্রম/কর্মসূচির বাস্তবায়ন অগ্রগতি প্রতিবেদন। (ত্রৈমাসিক/ষান্মাষিক/বাৎসরিক)"> </li>
                        <li>১০।<input type="text" name="budget[]" id="" value="জাতীয় সংসদের অধিবেশনে মহামান্য রাষ্ট্রপতি কর্তৃক প্রদেয় ভাষণে অন্তর্ভুক্তির জন্য তথ্য প্রেরণ। (বাৎসরিক)"> </li>
                        <li>১১।<input type="text" name="budget[]" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের ২০২০-২১ অর্থবছরের বাজেট বক্তৃতায় অন্তর্ভুক্তির জন্য মন্ত্রণালয়/বিভাগ/দপ্তর/সংস্থার মৌলিক ও গুরুত্বপুর্ণ কার্যাবলি সম্পর্কে সুনির্দিষ্ট, সংক্ষিপ্ত ও পরিসংখ্যানভিত্তিক প্রতিবেদন প্রেরণ। (বাৎসরিক)"> </li>
                        <li>১২।<input type="text" name="budget[]" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের ২০২০-২১ অর্থবছরের মধ্যমেয়াদি বাজেট কাঠামো (MTBF) (বাংলা ও ইংরেজি) সংশোধন ও হালনাগাদকরণ। (বাৎসরিক)"> </li>
                        <li> ১৩।<input type="text" name="budget[]" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থার ২০২০-২১ অর্থবছরের মধ্যমেয়াদি বাজেট কাঠামো (MTBF) (বাংলা ও ইংরেজি) সংশোধন ও হালনাগাদকরণ। (বাৎসরিক)"> </li>
                    </ul>
                  </div>
              </div>

              <div class="item">
                <div class="header-item">
                    <h3>বিষয়: <input type="text" name="susbject-2[]" id="" value="বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ)"> </h3>
                  </div>
                  <div class="listed-content">
                    <ul>
                        <li>১। <input type="text" name="apa[]" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের শাখা/অধিশাখা সংশ্লিষ্ট ২০২০-২১ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর প্রণয়ন সংক্রান্ত প্রতিবেদন প্রেরণ। (বাৎসরিক)"></li>
                        <li>২। <input type="text" name="apa[]" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন রেগুলেটরি অথরিটি সংশ্লিষ্ট ২০২০-২১ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর প্রণয়ন সংক্রান্ত প্রতিবেদন প্রেরণ। (বাৎসরিক)"></li>
                        <li>৩। <input type="text" name="apa[]" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর-সংস্থা সংশ্লিষ্ট ২০২০-২১ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর প্রণয়ন সংক্রান্ত প্রতিবেদন প্রেরণ। (বাৎসরিক)"></li>
                        <li>৪। <input type="text" name="apa[]" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের শাখা/অধিশাখা সংশ্লিষ্ট ২০১৯-২০ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর অর্জন পরিবীক্ষণ সংক্রান্ত মূল্যায়ন প্রতিবেদন প্রেরণ। (ত্রৈমাসিক/ষান্মাষিক/বাৎসরিক)"></li>
                        <li>৫। <input type="text" name="apa[]" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন রেগুলেটরি অথরিটি সংশ্লিষ্ট ২০১৯-২০ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর অর্জন পরিবীক্ষণ সংক্রান্ত মূল্যায়ন প্রতিবেদন প্রেরণ। (ত্রৈমাসিক/ষান্মাষিক/বাৎসরিক)"></li>
                        <li>৬। <input type="text" name="apa[]" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর-সংস্থাসমূহের ২০১৯-২০ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর অর্জন পরিবীক্ষণ সংক্রান্ত মূল্যায়ন প্রতিবেদন প্রেরণ। (ত্রৈমাসিক/ষান্মাষিক/বাৎসরিক)"></li>
                    </ul>
                  </div>
              </div>
           

          <div class="item">
                <div class="header-item">
                    <h3>বিষয়: <input type="text" name="" id="" value="বাজেট শাখা সংশ্লিষ্ট বাজেট ও এপিএ প্রতিবেদনের ফরমেট"> </h3>
                    <h4><input type="text" name="" id="" value="বাজেট:"></h4>
                  </div>
                  <div class="listed-content">
                    <table border="1">
                      <thead>
                        <tr class="row27">
                          <td class="column0 style17 s style18" rowspan="2">ক্রমিক</td>
                          <td class="column1 style19 s style20" rowspan="2">বিষয়</td>
                          <td class="column2 style17 s style18" rowspan="2">প্রেরক</td>
                          <td class="column3 style22 s style23" colspan="5">প্রতিবেদন/বিবরণী ফরমেট</td>
                          <td class="column8 style19 s style20" rowspan="2">পরিশিষ্ট</td>
                        </tr>
                        <tr class="row28">
                          <td class="column3 style8 s">মাসিক</td>
                          <td class="column4 style8 s">ত্রৈমাসিক</td>
                          <td class="column5 style9 s">ষান্মাষিক</td>
                          <td class="column6 style8 s">বাৎসিরক</td>
                          <td class="column7 style8 s">তাৎক্ষনিক</td>
                        </tr>
                      </thead>
                      <tbody>
                         <!-- <input type="text" name="" id="" value=""> -->
                        <tr class="row29">
                          <input type="hidden" name="row_id" value="1">
                          <td class="column0 style10 s"><input type="text" name="serial_1" id="" value="1."> </td>
                          <td class="column1 style12 s">১।<input type="text" name="subject_1" id="" value="১। আর্থিক প্রতিষ্ঠান বিভাগের ২০২০_২১ অর্থবছরের মধ্যমেয়াদি বাজেট কাঠামো সংশোধন ও হালনাগাদকরণ সংক্রান্ত তথ্য প্রেরণ। (বিসি_১) "></td>
                          <td class="column2 style12 s"><input type="text" name="sender_1" id="" value="সকল শাখা/ অধিশাখা, আ.প্র.বি"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_1" id="" value=""></td>
                          <td class="column4 style8 null"><input type="text" name="report_quarterly_1" id="" value=""></td>
                          <td class="column5 style8 null"><input type="text" name="report_half_yearly_1" id="" value=""></td>
                          <td class="column6 style8 s"><input type="text" name="report_yearly_1" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_1" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_1" id="" value="1"></td>
                        </tr>
                        <tr class="row30">
                           <input type="hidden" name="row_id" value="2">
                          <td class="column0 style10 s"><input type="text" name="serial_2" id="" value="2."></td>
                          <td class="column1 style14 s"><input type="text" name="subject_2" id="" value="২। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থা/প্রকল্পসমুহের ২০২০_২১ অর্থবছরের মধ্যমেয়াদি বাজেট কাঠামো সংশোধন ও হালনাগাদকরণ সংক্রান্ত তথ্য প্রেরণ। (বিসি_১)"></span></td>
                          <td class="column2 style15 s"><input type="text" name="sender_2" id="" value="দপ্তর/সংস্থা/ প্রকল্প"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_2" id="" value=""></td>
                          <td class="column4 style8 null"><input type="text" name="report_quarterly_2" id="" value=""></td>
                          <td class="column5 style8 null"><input type="text" name="report_half_yearly_2" id="" value=""></td>
                          <td class="column6 style9 s"><input type="text" name="report_instant_2" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_2" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_2" id="" value="1"></td>
                        </tr>
                        <tr class="row31">
                           <input type="hidden" name="row_id" value="3">
                          <td class="column0 style10 s">3.<input type="text" name="serial_3" id="" value=""></td>
                          <td class="column1 style14 s"><input type="text" name="subject_3" id="" value="
৩।মধ্যমেয়াদি বাজেট কাঠামো পদ্ধতির আওতাভুক্ত আর্থিক প্রতিষ্ঠান বিভাগের ২০১৯_২০ অর্থবছরের সংশোধন (পরিচালন এবং উন্নয়ন), ২০২০_২১ অর্থবছরের প্রাক্কলন এবং ২০২১_২২ ও ২০২২_২৩ অর্থবছরের প্রক্ষেপণ প্রণয়ন।"> </span></td>
                          <td class="column2 style12 s"><input type="text" name="sender_3" id="" value="সকল শাখা/ অধিশাখা, আ.প্র.বি"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_3" id="" value=""></td>
                          <td class="column4 style8 null"><input type="text" name="report_quarterly_3" id="" value=""></td>
                          <td class="column5 style8 null"><input type="text" name="report_half_yearly_3" id="" value=""></td>
                          <td class="column6 style9 s"><input type="text" name="report_instant_3" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_3" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_2" id="" value="2"></td>
                        </tr>
                        <tr class="row32">
                           <input type="hidden" name="row_id" value="4">
                          <td class="column0 style10 s">4.<input type="text" name="serial_4" id="" value=""></td>
                          <td class="column1 style14 s"><input type="text" name="subject_4" id="" value="৪। মধ্যমেয়াদি বাজেট কাঠামো পদ্ধতির আওতাভুক্ত আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থা/ প্রকল্পসমুহের ২০১৯_২০ অর্থবছরের সংশোধন (পরিচালন এবং উন্নয়ন), ২০২০_২১ অর্থবছরের প্রাক্কলন এবং ২০২১_২২ ও ২০২২_২৩ অর্থবছরের প্রক্ষেপণ প্রণয়ন।"> </span></td>
                          <td class="column2 style15 s"><input type="text" name="sender_4" id="" value="দপ্তর/সংস্থা/ প্রকল্প"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_4" id="" value=""></td>
                          <td class="column4 style8 null"><input type="text" name="report_quarterly_4" id="" value=""></td>
                          <td class="column5 style8 null"><input type="text" name="report_half_yearly_4" id="" value=""></td>
                          <td class="column6 style9 s"><input type="text" name="report_instant_4" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_4" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_4" id="" value="2"></td>
                        </tr>
                        <tr class="row33">
                           <input type="hidden" name="row_id" value="5">
                          <td class="column0 style10 s">5.<input type="text" name="serial_5" id="" value=""></td>
                          <td class="column1 style14 s"><input type="text" name="subject_5" id="" value="৫। আর্থিক প্রতিষ্ঠান বিভাগের ২০২০_২১ অর্থবছরের বাজেট বাস্তবায়ন পরিকল্পনা প্রণয়ন।">  </td>
                          <td class="column2 style12 s"><input type="text" name="sender_5" id="" value="সকল শাখা/ অধিশাখা, আ.প্র.বি"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_5" id="" value=""></td>
                          <td class="column4 style8 null"><input type="text" name="report_quarterly_5" id="" value=""></td>
                          <td class="column5 style8 null"><input type="text" name="report_half_yearly_5" id="" value=""></td>
                          <td class="column6 style9 s"><input type="text" name="report_instant_5" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_5" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_5" id="" value="3"></td>
                        </tr>
                        <tr class="row34">
                           <input type="hidden" name="row_id" value="6">
                          <td class="column0 style10 s">6.<input type="text" name="serial_6" id="" value=""></td>
                          <td class="column1 style14 s"><input type="text" name="subject_6" id="" value="৬। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থা/প্রকল্পসমুহের ২০২০_২১ অর্থবছরের বাজেট বাস্তবায়ন পরিকল্পনা প্রণয়ন।">  </td>
                          <td class="column2 style15 s"><input type="text" name="sender_6" id="" value="দপ্তর/সংস্থা/ প্রকল্প"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_6" id="" value=""></td>
                          <td class="column4 style8 null"><input type="text" name="report_quarterly_6" id="" value=""></td>
                          <td class="column5 style8 null"><input type="text" name="report_half_yearly_6" id="" value=""></td>
                          <td class="column6 style9 s"><input type="text" name="report_instant_6" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_6" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_5" id="" value="3"></td>
                        </tr>
                        <tr class="row35">
                           <input type="hidden" name="row_id" value="7">
                          <td class="column0 style10 s">7.<input type="text" name="serial_7" id="" value=""></td>
                          <td class="column1 style14 s"><input type="text" name="subject_7" id="" value="৭। আর্থিক প্রতিষ্ঠান বিভাগের চলমান ২০১৯_২০ অর্থবছরের বাজেট বাস্তবায়ন অগ্রগতি পরিবীক্ষণ।"></td>
                          <td class="column2 style12 s"><input type="text" name="sender_7" id="" value="সকল শাখা/ অধিশাখা, আ.প্র.বি"></td>
                          <td class="column3 style9 null"><input type="text" name="report_monthly_7" id="" value=""></td>
                          <td class="column4 style9 s"><input type="text" name="report_quarterly_7" id="" value="ত্রৈমাসিক"></td>
                          <td class="column5 style9 s"><input type="text" name="report_half_yearly_7" id="" value="ষান্মাষিক"></td>
                          <td class="column6 style9 s"><input type="text" name="report_instant_7" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_7" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_7" id="" value="4"></td>
                        </tr>
                        <tr class="row36">
                           <input type="hidden" name="row_id" value="8">
                          <td class="column0 style10 s">8.<input type="text" name="serial_8" id="" value=""></td>
                          <td class="column1 style14 s"><input type="text" name="subject_8" id="" value="৮। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থা/প্রকল্পসমুহের চলমান ২০১৯_২০ অর্থবছরের বাজেট বাস্তবায়ন অগ্রগতি পরিবীক্ষণ।"></td>
                          <td class="column2 style15 s"><input type="text" name="sender_8" id="" value="দপ্তর/সংস্থা/ প্রকল্প"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_8" id="" value=""></td>
                          <td class="column4 style9 s"><input type="text" name="report_quarterly_8" id="" value="ত্রৈমাসিক"></td>
                          <td class="column5 style9 s"><input type="text" name="report_half_yearly_8" id="" value="ষান্মাষিক"></td>
                          <td class="column6 style9 s"><input type="text" name="report_instant_8" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_8" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_7" id="" value="4"></td>
                        </tr>
                        <tr class="row37">
                           <input type="hidden" name="row_id" value="9">
                          <td class="column0 style10 s">9.<input type="text" name="serial_9" id="" value=""></td>
                          <td class="column1 style14 s"><input type="text" name="subject_9" id="" value="৯। বাজেট বাস্তবায়ন অগ্রগতি বিষয়ক প্রতিবেদন প্রণয়নের জন্য বাজেটে ঘোষিত গুরুত্বপূর্ণ কার্যক্রম/কর্মসূচির বাস্তবায়ন অগ্রগতি প্রতিবেদন।"> </td>
                          <td class="column2 style12 s"><input type="text" name="sender_9" id="" value="সকল শাখা/ অধিশাখা, আ.প্র.বি এবং রেগুলেটরি অথরিটি"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_9" id="" value=""></td>
                          <td class="column4 style9 s"><input type="text" name="report_quarterly_9" id="" value="ত্রৈমাসিক"></td>
                          <td class="column5 style9 s"><input type="text" name="report_half_yearly_9" id="" value="ষান্মাষিক"></td>
                          <td class="column6 style9 s"><input type="text" name="report_instant_9" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_9" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_9" id="" value="5"></td>
                        </tr>
                        <tr class="row38">
                           <input type="hidden" name="row_id" value="10">
                          <td class="column0 style10 s">10.<input type="text" name="serial_10" id="" value=""></span></td>
                          <td class="column1 style14 s"><input type="text" name="subject_10" id="" value="১০। জাতীয় সংসদের অধিবেশনে মহামান্য রাষ্ট্রপতি কর্তৃক প্রদেয় ভাষণে অন্তর্ভুক্তির জন্য তথ্য প্রেরণ।"> </td>
                          <td class="column2 style12 s"><input type="text" name="sender_10" id="" value="সকল শাখা/ অধিশাখা, আ.প্র.বি"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_10" id="" value=""></td>
                          <td class="column4 style8 null"><input type="text" name="report_quarterly_10" id="" value=""></td>
                          <td class="column5 style8 null"><input type="text" name="report_half_yearly_10" id="" value=""></td>
                          <td class="column6 style9 s"><input type="text" name="report_instant_10" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_10" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_10" id="" value="6"></td>
                        </tr>
                        <tr class="row39">
                           <input type="hidden" name="row_id" value="11">
                          <td class="column0 style10 s">11.<input type="text" name="serial_11" id="" value=""></span></td>
                          <td class="column1 style16 s"><input type="text" name="subject_11" id="" value="১১।  আর্থিক প্রতিষ্ঠান বিভাগের ২০২০_২১ অর্থবছরের বাজেট বক্তৃতায় অন্তর্ভুক্তির জন্য মন্ত্রণালয়/ বিভাগ/ দপ্তর/সংস্থার মৌলিক ও গুরুত্বপুর্ণ কার্যাবলি সম্পর্কে সুনির্দিষ্ট, সংক্ষিপ্ত ও পরিসংখ্যানভিত্তিক প্রতিবেদন প্রেরণ।"> </td>
                          <td class="column2 style12 s"><input type="text" name="sender_11" id="" value="সকল শাখা/ অধিশাখা, আ.প্র.বি"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_11" id="" value=""></td>
                          <td class="column4 style8 null"><input type="text" name="report_quarterly_11" id="" value=""></td>
                          <td class="column5 style8 null"><input type="text" name="report_half_yearly_11" id="" value=""></td>
                          <td class="column6 style8 s"><input type="text" name="report_instant_11" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_11" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_11" id="" value="6"></td>
                        </tr>
                        <tr class="row40">
                           <input type="hidden" name="row_id" value="12">
                          <td class="column0 style10 s">12.<input type="text" name="serial_12" id="" value=""> </span></td>
                          <td class="column1 style14 s"><input type="text" name="subject_12" id="" value="১২।  আর্থিক প্রতিষ্ঠান বিভাগের ২০২০_২১ অর্থবছরের মধ্যমেয়াদি বাজেট কাঠামো (MTBF) (বাংলা ও ইংরেজি) সংশোধন ও হালনাগাদকরণ।"> </td>
                          <td class="column2 style12 s"><input type="text" name="sender_11" id="" value="সকল শাখা/ অধিশাখা, আ.প্র.বি"> </td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_12" id="" value=""></td>
                          <td class="column4 style8 null"><input type="text" name="report_quarterly_12" id="" value=""></td>
                          <td class="column5 style8 null"><input type="text" name="report_half_yearly_12" id="" value=""></td>
                          <td class="column6 style8 s"><input type="text" name="report_instant_12" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_12" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_12" id="" value="7"></td>
                        </tr>
                        <tr class="row41">
                           <input type="hidden" name="row_id" value="13">
                          <td class="column0 style10 s">13.<input type="text" name="serial_13" id="" value=""> </span></td>
                          <td class="column1 style14 s"><input type="text" name="subject_13" id="" value="১৩। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থার ২০২০_২১ অর্থবছরের মধ্যমেয়াদি বাজেট কাঠামো (MTBF) (বাংলা ও ইংরেজি) সংশোধন ও হালনাগাদকরণ। (বাৎসরিক)"> </td>
                          <td class="column2 style12 s"><input type="text" name="sender_13" id="" value="রেগুলেটরি অথরিটি এবং দপ্তর/সংস্থা"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_13" id="" value=""></td>
                          <td class="column4 style8 null"><input type="text" name="report_quarterly_13" id="" value=""></td>
                          <td class="column5 style8 null"><input type="text" name="report_half_yearly_13" id="" value=""></td>
                          <td class="column6 style8 s"><input type="text" name="report_instant_13" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_13" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_13" id="" value="7"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>

<div class="item">
                <div class="header-item">
              
                    <h4> বিষয়:<input type="text" name="topic-1[]" id="" value="বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ):"></h4>
                  </div>
                  <div class="listed-content">
                    <table border="1">
                      <thead>
                        <tr class="row27">
                          <td class="column0 style17 s style18" rowspan="2">ক্রমিক</td>
                          <td class="column1 style19 s style20" rowspan="2">বিষয়</td>
                          <td class="column2 style17 s style18" rowspan="2">প্রেরক</td>
                          <td class="column3 style22 s style23" colspan="5">প্রতিবেদন/বিবরণী ফরমেট</td>
                          <td class="column8 style19 s style20" rowspan="2">পরিশিষ্ট</td>
                        </tr>
                        <tr class="row28">
                          <td class="column3 style8 s">মাসিক</td>
                          <td class="column4 style8 s">ত্রৈমাসিক</td>
                          <td class="column5 style9 s">ষান্মাষিক</td>
                          <td class="column6 style8 s">বাৎসিরক</td>
                          <td class="column7 style8 s">তাৎক্ষনিক</td>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- <input type="text" name="" id="" value=""> -->
                        <tr class="row47">
                          <input type="hidden" name="row_id" value="14">
                          <td class="column0 style26 s"><input type="text" name="serial_14" id="" value="1."></span></td>
                          <td class="column1 style14 s"><input type="text" name="subject_14" id="" value="১। আর্থিক প্রতিষ্ঠান বিভাগের শাখা/অধিশাখা সংশ্লিষ্ট ২০২০-২১ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর প্রণয়ন সংক্রান্ত প্রতিবেদন প্রেরণ।"></td>
                          <td class="column2 style12 s"><input type="text" name="sender_14" id="" value="সকল শাখা/ অধিশাখা, আ.প্র.বি"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_14" id="" value=""></td>
                          <td class="column4 style8 null"><input type="text" name="report_quarterly_14" id="" value=""></td>
                          <td class="column5 style8 null"><input type="text" name="report_half_yearly_14" id="" value=""></td>
                          <td class="column6 style8 s"><input type="text" name="report_yearly_14" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_14" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_14" id="" value="8"></td>
                        </tr>
                        <tr class="row48">
                          <input type="hidden" name="row_id" value="15">
                          <td class="column0 style27 s"><input type="text" name="serial_15" id="" value="2.">  </span></td>
                          <td class="column1 style14 s"><input type="text" name="subject_15" id="" value="২। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন রেগুলেটরি অথরিটি সংশ্লিষ্ট ২০২০-২১ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর প্রণয়ন সংক্রান্ত প্রতিবেদন প্রেরণ।"></td>
                          <td class="column2 style12 s"><input type="text" name="sender_15" id="" value="রেগুলেটরি অথরিটি"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_15" id="" value=""></td>
                          <td class="column4 style8 null"><input type="text" name="report_quarterly_15" id="" value=""></td>
                          <td class="column5 style8 null"><input type="text" name="report_half_yearly_15" id="" value=""></td>
                          <td class="column6 style8 s"><input type="text" name="report_yearly_15" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_15" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_15" id="" value="8"></td>
                        </tr>
                        <tr class="row49">
                          <input type="hidden" name="row_id" value="16">
                          <td class="column0 style27 s"><input type="text" name="serial_16" id="" value="3.">  </span></td>
                          <td class="column1 style14 s"><input type="text" name="subject_16" id="" value="৩। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর-সংস্থা সংশ্লিষ্ট ২০২০-২১ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর প্রণয়ন সংক্রান্ত প্রতিবেদন প্রেরণ।"></td>
                          <td class="column2 style12 s"><input type="text" name="sender_16" id="" value="দপ্তর/সংস্থা"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_16" id="" value=""></td>
                          <td class="column4 style8 null"><input type="text" name="report_quarterly_16" id="" value=""></td>
                          <td class="column5 style8 null"><input type="text" name="report_half_yearly_16" id="" value=""></td>
                          <td class="column6 style8 s"><input type="text" name="report_yearly_16" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_16" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_16" id="" value="8"></td>
                        </tr>
                        <tr class="row50">
                          <input type="hidden" name="row_id" value="17">
                          <td class="column0 style27 s"><input type="text" name="serial_17" id="" value="4.">  </span></td>
                          <td class="column1 style14 s"><input type="text" name="subject_17" id="" value="৪। আর্থিক প্রতিষ্ঠান বিভাগের শাখা/অধিশাখা সংশ্লিষ্ট ২০১৯-২০ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর অর্জন পরিবীক্ষণ সংক্রান্ত মূল্যায়ন প্রতিবেদন প্রেরণ।"></td>
                          <td class="column2 style12 s"><input type="text" name="sender_17" id="" value="সকল শাখা/ অধিশাখা, আ.প্র.বি"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_17" id="" value=""></td>
                          <td class="column4 style9 s"><input type="text" name="report_quarterly_17" id="" value="ত্রৈমাসিক"></td>
                          <td class="column5 style9 s"><input type="text" name="report_half_yearly_17" id="" value="ষান্মাষিক"></td>
                          <td class="column6 style9 s"><input type="text" name="report_yearly_17" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_17" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_17" id="" value="9"></td>
                        </tr>
                        <tr class="row51">
                          <input type="hidden" name="row_id" value="18">
                          <td class="column0 style27 s"><input type="text" name="serial_18" id="" value="5.">  </span></td>
                          <td class="column1 style14 s"><input type="text" name="subject_18" id="" value="৫। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন রেগুলেটরি অথরিটি সংশ্লিষ্ট ২০১৯-২০ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর অর্জন পরিবীক্ষণ সংক্রান্ত মূল্যায়ন প্রতিবেদন প্রেরণ।"></td>
                          <td class="column2 style12 s"><input type="text" name="sender_18" id="" value="রেগুলেটরি অথরিটি"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_18" id="" value=""></td>
                          <td class="column4 style9 s"><input type="text" name="report_quarterly_18" id="" value="ত্রৈমাসিক"></td>
                          <td class="column5 style9 s"><input type="text" name="report_half_yearly_18" id="" value="ষান্মাষিক"></td>
                          <td class="column6 style9 s"><input type="text" name="report_yearly_18" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_18" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_18" id="" value="9"></td>
                        </tr>
                        <tr class="row52">
                          <input type="hidden" name="row_id" value="19">
                          <td class="column0 style27 s"><input type="text" name="serial_19" id="" value="6.">  </span></td>
                          <td class="column1 style14 s"><input type="text" name="subject_19" id="" value="৬। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর-সংস্থাসমূহের ২০১৯-২০ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর অর্জন পরিবীক্ষণ সংক্রান্ত মূল্যায়ন প্রতিবেদন প্রেরণ।"></td>
                          <td class="column2 style12 s"><input type="text" name="sender_19" id="" value="দপ্তর/সংস্থা"></td>
                          <td class="column3 style8 null"><input type="text" name="report_monthly_19" id="" value=""></td>
                          <td class="column4 style9 s"><input type="text" name="report_quarterly_19" id="" value="ত্রৈমাসিক"></td>
                          <td class="column5 style9 s"><input type="text" name="report_half_yearly_19" id="" value="ষান্মাষিক"></td>
                          <td class="column6 style9 s"><input type="text" name="report_yearly_19" id="" value="বাৎসরিক"></td>
                          <td class="column7 style8 null"><input type="text" name="report_instant_19" id="" value=""></td>
                          <td class="column8 style13 n"><input type="text" name="appnedix_19" id="" value="9"></td>
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
      </div>



     
    </div>


@endsection    
