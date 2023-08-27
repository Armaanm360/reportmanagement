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
                    <a href="#">{{__('Form 2.1')}}</a>
                </li>
            </ul>
        </div>

        <form action="{{ url('form-2.2.1') }}" method="POST">
            @csrf
            <div class="rel-26">
                <h3>২.২.১ মন্ত্রণালয়/বিভাগ/রাষ্ট্রীয় প্রতিষ্ঠানের জাতীয় শুদ্ধাচার কৌশল কর্মপরিকল্পনা, ২০২১-২২</h3>
                <table border="1" width="100%" >
                  <thead>
                      <tr>
                          <td rowspan="2"><input type="text" name="" id="" value="কার্যক্রম"> </td>
                          <td rowspan="2"><input type="text" name="" id="" value="কর্মসম্পাদন সূচক"> </td>
                          <td rowspan="2"><input type="text" name="" id="" value="একক"> </td>
                          <td rowspan="2"><input type="text" name="" id="" value="কর্মসম্পাদন সূচকের মান"> </td>
                          <td rowspan="2"><input type="text" name="" id="" value="বাৎসরিক লক্ষ্যমাত্রা ২০২১-২২"> </td>
                          <td colspan="2"><input type="text" name="" id="" value="অর্জন"> </td>
                          <td rowspan="2"><input type="text" name="" id="" value="বাস্তবায়নের জন্য দায়িত্বপ্রাপ্ত ব্যাক্তি/পদ"> </td>
                      </tr>
                      <tr>
                          <td><input type="text" name="" id="" value="(জুলাই-সেপ্টেম্বর ২০২১)"> </td>
                          <td><input type="text" name="" id="" value="(জুলাই ২০২১- জুন ২০২২)"> </td>
                      </tr>
                  </thead>
                  <tbody>
                    <div>
                        <tr class="row49">
                        <input type="hidden" name="row_id" value="1">
                          <td class="column0 style22 s"><input type="text" name="activities_1" id="" value="১.১ নৈতিকতা কমিটির সভা আয়োজন">  </td>
                          <td class="column1 style22 s"><input type="text" name="performance_index_1" id="" value="সভা আয়োজিত"> </td>
                          <td class="column2 style23 s"><input type="text" name="unit_1" id="" value="সংখ্যা"> </td>
                          <td class="column3 style24 n"><input type="text" name="performance_index_values_1" id="" value="4"> </td>
                          <td class="column4 style24 n"><input type="text" name="annual_target_1" id="" value="4"> </td>
                          <td class="column5 style24 n"><input type="text" name="acquisition1_1" id="" value="1"> </td>
                          <td class="column6 style24 n"><input type="text" name="acquisition2_1" id="" value="1"> </td>
                          <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_1" id="" value="যুগ্মসচিব (শুদ্ধাচার)"> </td>
                        </tr>
                        <tr class="row50">
                        <input type="hidden" name="row_id" value="2">    
                          <td class="column0 style22 s"><input type="text" name="activities_2" id="" value="১.২ নৈতিকতা কমিটির সভার সিদ্ধান্ত বাস্তবায়ন"> </td>
                          <td class="column1 style22 s"><input type="text" name="performance_index_2" id="" value="বাস্তবায়িত সিদ্ধান্ত"> </td>
                          <td class="column2 style23 s"><input type="text" name="unit_2" id="" value=" %"></td>
                          <td class="column3 style24 n"><input type="text" name="performance_index_values_2" id="" value="6"> </td>
                          <td class="column4 style25 n"><input type="text" name="annual_target_2" id="" value="$-5000445]0.2f%"> </td>
                          <td class="column5 style25 n"><input type="text" name="acquisition1_2" id="" value="$-5000445]0.2f%"> </td>
                          <td class="column6 style25 n"><input type="text" name="acquisition2_2" id="" value="$-5000445]0.2f%"> </td>
                          <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_2" id="" value="যুগ্মসচিব (শুদ্ধাচার)"> </td>
                        </tr>
                        <tr class="row51">
                            <input type="hidden" name="row_id" value="3">
                          <td class="column0 style22 s"><input type="text" name="activities_3" id="" value="১.৩ সুশাসন প্রতিষ্ঠার নিমিত্ত অংশীজনের (stakeholders) অংশগ্রহণে  সভা"></td>
                          <td class="column1 style22 s"><input type="text" name="performance_index_3" id="" value="অনুষ্ঠিত সভা"> </td>
                          <td class="column2 style23 s"><input type="text" name="unit_3" id="" value="সংখ্যা"> </td>
                          <td class="column3 style24 n"><input type="text" name="performance_index_values_3" id="" value="2"> </td>
                          <td class="column4 style24 n"><input type="text" name="annual_target_3" id="" value="4"> </td>
                          <td class="column5 style24 n"><input type="text" name="acquisition1_3" id="" value="1"> </td>
                          <td class="column6 style24 n"><input type="text" name="acquisition1_3" id="" value="1"> </td>
                          <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_3" id="" value=""> যুগ্মসচিব (শুদ্ধাচার)</td>
                        </tr>
                        <tr class="row52">
                        <input type="hidden" name="row_id" value="4">  
                          <td class="column0 style26 s"><input type="text" name="activities_4" id="" value="১.৪ শুদ্ধাচার সংক্রান্ত প্রশিক্ষণ আয়োজন"> </td>
                          <td class="column1 style26 s"><input type="text" name="performance_index_1" id="" value="প্রশিক্ষণ আয়োজিত"> </td>
                          <td class="column2 style27 s"><input type="text" name="unit_4" id="" value="সংখ্যা"> </td>
                          <td class="column3 style28 n"><input type="text" name="performance_index_values_4" id="" value="2"> </td>
                          <td class="column4 style24 n"><input type="text" name="annual_target_4" id="" value="2"> </td>
                          <td class="column5 style24 n"><input type="text" name="acquisition1_4" id="" value="1"> </td>
                          <td class="column6 style24 n"><input type="text" name="acquisition2_4" id="" value="1"> </td>
                          <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_4" id="" value="যুগ্মসচিব (শুদ্ধাচার)"> </td>
                        </tr>
                        <tr class="row53">
                        <input type="hidden" name="row_id" value="5">   
                          <td class="column0 style29 s style29" rowspan="3"><input type="text" name="activities_5" id="" value="১.৫ কর্ম-পরিবেশ উন্নয়ন (স্বাস্থ্যবিধি অনুসরণ/ টিওএন্ডইভুক্ত অকেজো মালামাল বিনষ্টকরণ/ পরিষ্কার-পরিচ্ছন্নতা বৃদ্ধি ইত্যাদি">  </td>
                          <td class="column1 style29 s style29" rowspan="3"><input type="text" name="performance_index_5" id="" value="উন্নত কর্ম-পরিবেশ"> </td>
                          <td class="column2 style63 s style65" rowspan="3"><input type="text" name="unit_5" id="" value="সংখ্যা ও তারিখ"> </td>
                          <td class="column3 style30 n style30" rowspan="3"><input type="text" name="performance_index_values_5" id="" value="2"> </td>
                          <td class="column4 style23 s"><input type="text" name="annual_target_5" id="" value="২ টি"> </td>
                          <td class="column5 style22 s"><input type="text" name="" id="" value="-"> </td>
                          <td class="column6 style22 s"><input type="text" name="" id="" value="-"> </td>
                          <td class="column7 style63 s style65" rowspan="3"><input type="text" name="" id="" value="উপসচিব (গ্রহণ, বিতরণ ও সেবা)"> </td>
                        </tr>
                        <tr class="row54">
                        <input type="hidden" name="row_id_5_1" value="5">  
                          <td class="column4 style23 s"><input type="text" name="annual_target_5_1" id="" value="৩১-১২-২০২১"></td>
                          <td class="column5 style22 null"><input type="text" name="" id="" value=""></td>
                          <td class="column6 style22 null"><input type="text" name="" id="" value=""></td>
                        </tr>
                        <tr class="row55">
                            <input type="hidden" name="row_id_5_2" value="5">   
                          <td class="column4 style23 s"><input type="text" name="annual_target_5_2" id="" value="৩০-০৬-২০২২"></td>
                          <td class="column5 style22 null"><input type="text" name="" id="" value=""></td>
                          <td class="column6 style22 null"><input type="text" name="" id="" value=""></td>
                        </tr>
                        <tr class="row56">
                            <input type="hidden" name="row_id" value="6">   
                          <td class="column0 style29 s style29" rowspan="3"><input type="text" name="activities_6" id="" value="১.৬ জাতীয় শুদ্ধাচার কৌশল কর্মপরিকল্পনা, ২০২১-২২ ও ত্রৈমাসিক পরিবীক্ষণ প্রতিবেদন মন্ত্রিপরিষদ বিভাগে দাখিল ও স্ব স্ব ওয়েবসাইটে আপলোডকরণ"></td>
                          <td class="column1 style29 s style29" rowspan="3"><input type="text" name="performance_index_6" id="" value="কর্মপরিকল্পনা ও ত্রৈমাসিক প্রতিবেদন দাখিলকৃত ও আপলোডকৃত"></td>
                          <td class="column2 style31 s style31" rowspan="3"><input type="text" name="unit_6" id="" value="তারিখ"></td>
                          <td class="column3 style30 n style30" rowspan="3"><input type="text" name="performance_index_values_6" id="" value="1"></td>
                          <td class="column4 style23 s"><input type="text" name="annual_target_6" id="" value="১৫-১০-২০২১"></td>
                          <td class="column5 style22 s"><input type="text" name="acquisition1_6" id="" value="১৫-১০-২০২১"></td>
                          <td class="column6 style22 s"><input type="text" name="acquisition2_6" id="" value="১৫-১০-২০২১"></td>
                          <td class="column7 style31 s style31" rowspan="3"><input type="text" name="branch_responsible_implementation_6" id="" value="যুগ্মসচিব (শুদ্ধাচার)"></td>
                        </tr>
                        <tr class="row57">
                            <input type="hidden" name="row_id_6_1" value="6">     
                          <td class="column4 style23 s"><input type="text" name="annual_target_6_1" id="" value="১৫-০১-২০২২"></td>
                          <td class="column5 style22 null"><input type="text" name="" id="" value=""></td>
                          <td class="column6 style22 null"><input type="text" name="" id="" value=""></td>
                        </tr>
                        <tr class="row58">
                            <input type="hidden" name="row_id_6_2" value="6">   
                          <td class="column4 style23 s"><input type="text" name="annual_target_6_2" id="" value="১৫-০৪-২০২২"></td>
                          <td class="column5 style22 null"><input type="text" name="" id="" value=""></td>
                          <td class="column6 style22 null"><input type="text" name="" id="" value=""></td>
                        </tr>
                        <tr class="row59">
                            <input type="hidden" name="row_id" value="7">
                          <td class="column0 style29 s style29" rowspan="3"><input type="text" name="activities_7" id="" value="১.৭ আওতাধীন দপ্তর/সংস্হা (প্রযোজ্য ক্ষেত্রে) কর্তৃক দাখিলকৃত জাতীয় শুদ্ধাচার কৌশল কর্মপরিকল্পনা ও পরিবীক্ষণ  প্রতিবেদনের ওপর ফিডব্যাক প্রদান"> </td>
                          <td class="column1 style29 s style29" rowspan="3"><input type="text" name="performance_index_7" id="" value="ফিডব্যাক সভা/কর্মশালা অনুষ্ঠিত"></td>
                          <td class="column2 style31 s style31" rowspan="3"><input type="text" name="unit_7" id="" value="তারিখ"></td>
                          <td class="column3 style30 n style30" rowspan="3"><input type="text" name="performance_index_values_7" id="" value="4"></td>
                          <td class="column4 style23 s"><input type="text" name="annual_target_7" id="" value="৩১-১০-২০২১"></td>
                          <td class="column5 style22 s"><input type="text" name="acquisition1_7" id="" value="-"></td>
                          <td class="column6 style22 s"><input type="text" name="acquisition2_7" id="" value="-"></td>
                          <td class="column7 style31 s style31" rowspan="3"><input type="text" name="branch_responsible_implementation_7" id="" value="যুগ্মসচিব (শুদ্ধাচার)"></td>
                        </tr>
                        <tr class="row60">
                            <input type="hidden" name="row_id_7_1" value="7"> 
                          <td class="column4 style23 s"><input type="text" name="annual_target_7_1" id="" value="৩১-১২-২০২১"></td>
                          <td class="column5 style22 null"><input type="text" name="" id="" value=""></td>
                          <td class="column6 style22 null"><input type="text" name="" id="" value=""></td>
                        </tr>
                        <tr class="row61">
                            <input type="hidden" name="row_id_7_2" value="7">
                          <td class="column4 style23 s"><input type="text" name="annual_target_7_1" id="" value="৩১-০৩-২০২২"></td>
                          <td class="column5 style22 null"><input type="text" name="" id="" value=""></td>
                          <td class="column6 style22 null"><input type="text" name="" id="" value=""></td>
                        </tr>
                        <tr class="row62">
                            <input type="hidden" name="row_id" value="8">  
                          <td class="column0 style22 s"><input type="text" name="activities_8" id="" value="১.৮ শুদ্ধাচার পুরস্কার প্রদান এবং পুরস্কারপ্রাপ্তদের তালিকা ওয়েবসাইটে প্রকাশ"></td>
                          <td class="column1 style22 s"><input type="text" name="performance_index_8" id="" value="প্রদত্ত পুরস্কার"></td>
                          <td class="column2 style23 s"><input type="text" name="unit_8" id="" value="তারিখ"></td>
                          <td class="column3 style24 n"><input type="text" name="performance_index_values_8" id="" value="1"></td>
                          <td class="column4 style23 s"><input type="text" name="annual_target_8" id="" value="৩০-০৬-২০২২"></td>
                          <td class="column5 style23 s"><input type="text" name="acquisition1_8" id="" value="-"></td>
                          <td class="column6 style23 s"><input type="text" name="acquisition2_8" id="" value="-"></td>
                          <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_8" id="" value="যুগ্মসচিব (শুদ্ধাচার)"></td>
                        </tr>
                        <tr class="row63">
                            <input type="hidden" name="row_id" value="9">  
                          <td class="column0 style22 s"><input type="text" name="activities_9" id="" value="২.১ ২০২১-২২ অর্থ বছরের ক্রয়-পরিকল্পনা (প্রকল্পের অনুমোদিত বার্ষিক ক্রয় পরিকল্পনাসহ) ওয়েবসাইটে প্রকাশ"> </td>
                          <td class="column1 style22 s"><input type="text" name="performance_index_9" id="" value="ক্রয়-পরিকল্পনা ওয়েবসাইটে প্রকাশিত"></td>
                          <td class="column2 style22 s"><input type="text" name="unit_9" id="" value="তারিখ"></td>
                          <td class="column3 style66 n"><input type="text" name="performance_index_values_9" id="" value="2"></td>
                          <td class="column4 style23 s"><input type="text" name="annual_target_9" id="" value="৩১-১০-২০২১"></td>
                          <td class="column5 style22 s"><input type="text" name="acquisition1_9" id="" value="-"></td>
                          <td class="column6 style22 s"><input type="text" name="acquisition2_9" id="" value="-"></td>
                          <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_9" id="" value="উপসচিব (প্রকল্প ব্যবস্থাপনা)"></td>
                        </tr>
                        <tr class="row64">
                            <input type="hidden" name="row_id" value="10">
                          <td class="column0 style26 s"><input type="text" name="activities_10" id="" value="২.২ প্রকল্পের PSC ও PIC সভা আয়োজন"> </td>
                          <td class="column1 style26 s"><input type="text" name="performance_index_10" id="" value="সভা আয়োজিত"></td>
                          <td class="column2 style26 s"><input type="text" name="unit_10" id="" value="সংখ্যা"></td>
                          <td class="column3 style45 n"><input type="text" name="performance_index_values_10" id="" value="2"></td>
                          <td class="column4 style24 n"><input type="text" name="annual_target_10" id="" value="16"></td>
                          <td class="column5 style66 n"><input type="text" name="acquisition1_10" id="" value="5"></td>
                          <td class="column6 style66 n"><input type="text" name="acquisition2_10" id="" value="5"></td>
                          <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_10" id="" value="উপসচিব (প্রকল্প ব্যবস্থাপনা)"></td>
                        </tr>
                        <tr class="row65">
                            <input type="hidden" name="row_id" value="11">
                          <td class="column0 style26 s"><input type="text" name="activities_11" id="" value="২.৩ বার্ষিক উন্নয়ন কর্মসূচি বাস্তবায়ন"></td>
                          <td class="column1 style26 s"><input type="text" name="performance_index_11" id="" value="বার্ষিক উন্নয়ন কর্মসূচি বাস্তবায়িত"></td>
                          <td class="column2 style26 s"><input type="text" name="unit_11" id="" value="%"></td>
                          <td class="column3 style45 n"><input type="text" name="performance_index_values_11" id="" value="2"></td>
                          <td class="column4 style24 n"><input type="text" name="annual_target_11" id="" value="100"></td>
                          <td class="column5 style67 n"><input type="text" name="acquisition1_11" id="" value="$-5000445]0.2f%"></td>
                          <td class="column6 style67 n"><input type="text" name="acquisition2_11" id="" value="$-5000445]0.2f%"></td>
                          <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_11" id="" value="উপসচিব (প্রকল্প ব্যবস্থাপনা)"></td>
                        </tr>
                        <tr class="row66">
                            <input type="hidden" name="row_id" value="12">
                          <td class="column0 style22 s"><input type="text" name="activities_12" id="" value="২.৪ প্রকল্প সমাপ্তি শেষে প্রকল্পের সম্পদ (যানবাহন, কম্পিউটার, আসবাবপত্র ইত্যাদি) বিধি মোতাবেক হস্তান্তর করা"></td>
                          <td class="column1 style22 s"><input type="text" name="performance_index_12" id="" value="প্রকল্পের সম্পদ বিধি মোতাবেক হস্তান্তরিত"></td>
                          <td class="column2 style22 s"><input type="text" name="unit_12" id="" value="তারিখ"></td>
                          <td class="column3 style66 n"><input type="text" name="performance_index_values_12" id="" value="2"></td>
                          <td class="column4 style23 s"><input type="text" name="annual_target_12" id="" value="৩০-০৬-২০২২"></td>
                          <td class="column5 style22 s"><input type="text" name="acquisition1_12" id="" value="-"></td>
                          <td class="column6 style22 s"><input type="text" name="acquisition2_12" id="" value="-"></td>
                          <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_12" id="" value="উপসচিব (প্রকল্প ব্যবস্থাপনা)"></td>
                        </tr>
                        <tr class="row67">
                            <input type="hidden" name="row_id" value="13">
                          <td class="column0 style22 s"><input type="text" name="activities_13" id="" value="৩.১ MRA কর্তৃক MFI সমূহে পরিচালিত পরিদর্শনসমূহের অন্যুন ৫ টি প্রতিবেদনের Follow up পর্যালোচনা।"></td>
                          <td class="column1 style22 s"><input type="text" name="performance_index_13" id="" value="অন্যুন ৫ টি প্রতিবেদনের Follow up পর্যালোচনাকরণ"></td>
                          <td class="column2 style23 s"><input type="text" name="unit_13" id="" value="তারিখ"></td>
                          <td class="column3 style24 n"><input type="text" name="performance_index_values_13" id="" value="4"></td>
                          <td class="column4 style23 s"><input type="text" name="annual_target_13" id="" value="৩০-০৬-২০২২"></td>
                          <td class="column5 style23 s"><input type="text" name="acquisition1_13" id="" value="-"></td>
                          <td class="column6 style23 s"><input type="text" name="acquisition2_13" id="" value="-"></td>
                          <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_13" id="" value="উপসচিব (এমআরএ)"></td>
                        </tr>
                        <tr class="row68">
                            <input type="hidden" name="row_id" value="14">
                          <td class="column0 style22 s"><input type="text" name="activities_14" id="" value="৩.২ আবাসন খাতে বাংলাদেশ হাউজ বিল্ডিং ফাইনান্স কর্পোরেশনের গ্রাহক সেবা মান যাচাইয়ে ৫ টি ঋণ কার্যক্রম পর্যালোচনা করা।"></td>
                          <td class="column1 style22 s"><input type="text" name="performance_index_14" id="" value="৫ টি ঋণ কার্যক্রম পর্যালোচনাকরণ"> </td>
                          <td class="column2 style22 s"><input type="text" name="unit_14" id="" value="তারিখ"></td>
                          <td class="column3 style66 n"><input type="text" name="performance_index_values_14" id="" value="4"></td>
                          <td class="column4 style23 s"><input type="text" name="annual_target_14" id="" value="৩০-০৬-২০২২"></td>
                          <td class="column5 style22 s"><input type="text" name="acquisition1_14" id="" value="-"></td>
                          <td class="column6 style22 s"><input type="text" name="acquisition2_14" id="" value="-"></td>
                          <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_14" id="" value="উপসচিব (কেন্দ্রীয় ব্যাংক)"></td>
                        </tr>
                        <tr class="row69">
                            <input type="hidden" name="row_id" value="15">
                          <td class="column0 style22 s"><input type="text" name="activities_15" id="" value="৩.৩ পরিপত্রের আলোকে ৪ (চার) টি বঙ্গবন্ধু যুবঋণ বিতরণ কার্যক্রম পরিবীক্ষণ করা।"></td>
                          <td class="column1 style22 s"><input type="text" name="performance_index_15" id="" value="যুবঋণ বিতরণ কার্যক্রম পরিবীক্ষণ"></td>
                          <td class="column2 style23 s"><input type="text" name="unit_15" id="" value="তারিখ"></td>
                          <td class="column3 style24 n"><input type="text" name="performance_index_values_15" id="" value="4"></td>
                          <td class="column4 style23 s"><input type="text" name="annual_target_15" id="" value="৩০-০৬-২০২২"></td>
                          <td class="column5 style23 s"><input type="text" name="acquisition1_15" id="" value="-"></td>
                          <td class="column6 style23 s"><input type="text" name="acquisition2_15" id="" value="-"></td>
                          <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_15" id="" value="উপসচিব (বিশেষায়িত ব্যাংক)"></td>
                        </tr>
                        <tr class="row70">
                            <input type="hidden" name="row_id" value="16">
                          <td class="column0 style22 s"><input type="text" name="activities_16" id="" value="৩.৪ ঋণ খেলাপীর হার বৃদ্ধির কারণ চিহ্নিতকরণের লক্ষ্যে কর্মশালার আয়োজন।"></td>
                          <td class="column1 style22 s"><input type="text" name="performance_index_16" id="" value="কর্মশালার আয়োজন"></td>
                          <td class="column2 style23 s"><input type="text" name="unit_16" id="" value="তারিখ"></td>
                          <td class="column3 style24 n"><input type="text" name="performance_index_values_16" id="" value="4"></td>
                          <td class="column4 style23 s"><input type="text" name="annual_target_16" id="" value="৩০-০৬-২০২২"></td>
                          <td class="column5 style23 s"><input type="text" name="acquisition1_16" id="" value="-"></td>
                          <td class="column6 style23 s"><input type="text" name="acquisition2_16" id="" value="-"></td>
                          <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_16" id="" value="উপসচিব (কেন্দ্রীয় ব্যাংক)"></td>
                        </tr>
                        <tr class="row71">
                            <input type="hidden" name="row_id" value="17">
                          <td class="column0 style22 s"><input type="text" name="activities_17" id="" value="৩.৫ লাইফ বীমাকারীর সম্পদ বিনিয়োগ প্রবিধানমালা, ২০১৯ মোতাবেক ০৩টি বীমা কোম্পানীর বিনিয়োগ পর্যালোচনা।"></td>
                          <td class="column1 style22 s"><input type="text" name="performance_index_17" id="" value="০৩টি বীমা কোম্পানীর বিনিয়োগ পর্যালোচনাকরণ"></td>
                          <td class="column2 style23 s"><input type="text" name="unit_17" id="" value="তারিখ"></td>
                          <td class="column3 style24 n"><input type="text" name="performance_index_values_17" id="" value="4"></td>
                          <td class="column4 style23 s"><input type="text" name="annual_target_17" id="" value="৩০-০৬-২০২২"></td>
                          <td class="column5 style23 s"><input type="text" name="acquisition1_17" id="" value="-"></td>
                          <td class="column6 style23 s"><input type="text" name="acquisition2_17" id="" value="-"></td>
                          <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_17" id="" value="উপসচিব (বীমা)"></td>
                        </tr>
                        <tr class="row72">
                            <input type="hidden" name="row_id" value="18">
                          <td class="column0 style33 s style33" colspan="2"><input type="text" name="" id="" value="উপমোট= (১৭টি সূচক)"></td>
                          <td class="column2 style21 null"></td>
                          <td class="column3 style34 n"><input type="text" name="" id="" value="50"></td>
                          <td class="column4 style21 null"></td>
                          <td class="column5 style21 null"></td>
                          <td class="column6 style21 null"></td>
                          <td class="column7 style21 null"></td>
                        </tr>
                      </div>
                  </tbody>
            </table>
            </div>
            
        <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
        <button type="submit" class="btn btn-danger">সংশোধন</button>
          </form>
    </div>
</div>

@endsection    
