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
                    <a href="#">{{__('Form 2.2.5')}}</a>
                </li>
            </ul>
        </div>




          <form action="{{ url('form-2.2.5') }}" method="POST">
            @csrf
            <div class="rel-26">
                <h3>২.২.৫ তথ্য অধিকার বিষয়ে ২০২১-২২ অর্থবছরের বার্ষিক কর্মপরিকল্পনা</h3> 
                 <table border="1" width="100%">
                  <thead>
                      <tr>
                          <td rowspan="2">কার্যক্রম</td>
                          <td rowspan="2">কর্মসম্পাদন সূচক</td>
                          <td rowspan="2">একক</td>
                          <td rowspan="2">কর্মসম্পাদন সূচকের মান</td>
                          <td rowspan="2">বাৎসরিক লক্ষ্যমাত্রা ২০২১-২২</td>
                          <td colspan="2">অর্জন</td>
                          <td rowspan="2">বাস্তবায়নের জন্য দায়িত্বপ্রাপ্ত শাখা</td>
                      </tr>
                      <tr>
                          <td>(জুলাই-সেপ্টেম্বর ২০২১)</td>
                          <td>(জুলাই ২০২১- জুন ২০২২)</td>
                      </tr>
                  </thead>
                  <tbody>
                      <div>
                        <tr class="row117">
                          <input type="hidden" name="row_id" value="1">
                            <td class="column0 style26 s"><input type="text" name="activities_1" id="" value="[১.১] তথ্য অধিকার আইন অনুযায়ী নির্ধারিত সময়ের মধ্যে তথ্য প্রদান"> </td>
                            <td class="column1 style26 s"><input type="text" name="performance_index_1" id="" value="[১.১.১] নির্ধারিত সময়ের মধ্যে তথ্য প্রদানকৃত"></td>
                            <td class="column2 style27 s"><input type="text" name="unit_1" id="" value="%"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_1" id="" value="10"></td>
                            <td class="column4 style37 n"><input type="text" name="annual_target_1" id="" value="$-5000445]0.2f%"></td>
                            <td class="column5 style25 n"><input type="text" name="acquisition1_1" id="" value="$-5000445]0.2f%"></td>
                            <td class="column6 style25 n"><input type="text" name="acquisition2_1" id="" value="$-5000445]0.2f%"></td>
                            <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_1" id="" value="আরটিআই কর্মকর্তা"></td>
                          </tr>
                          <tr class="row118">
                          <input type="hidden" name="row_id" value="2">
                            <td class="column0 style26 s"><input type="text" name="activities_2" id="" value="[১.২] স্ব প্রণোদিত ভাবে প্রকাশযোগ্য তথ্য হালনাগাদ করে ওয়েবসাইটে প্রকাশ"></td>
                            <td class="column1 style26 s"><input type="text" name="performance_index_2" id="" value="[১.2.১] হালনাগাদকৃত তথ্য ওয়েবসাইটে প্রকাশিত"></td>
                            <td class="column2 style26 s"><input type="text" name="unit_2" id="" value="তারিখ"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_2" id="" value="3"></td>
                            <td class="column4 style27 s"><input type="text" name="annual_target_2" id="" value="৩১-১২-২০২১"></td>
                            <td class="column5 style22 s"><input type="text" name="acquisition1_2" id="" value="-"></td>
                            <td class="column6 style22 s"><input type="text" name="acquisition2_2" id="" value="-"></td>
                            <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_2" id="" value="আরটিআই কর্মকর্তা"></td>
                          </tr>
                          <tr class="row119">
                          <input type="hidden" name="row_id" value="3">
                            <td class="column0 style26 s"><input type="text" name="activities_3" id="" value="[১.৩] বার্ষিক প্রতিবেদন প্রকাশ"> </td>
                            <td class="column1 style26 s"><input type="text" name="performance_index_3" id="" value="[১.3.১] বার্ষিক প্রতিবেদন প্রকাশিত"> </td>
                            <td class="column2 style27 s"><input type="text" name="unit_3" id="" value="তারিখ"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_3" id="" value="3"></td>
                            <td class="column4 style27 s"><input type="text" name="annual_target_3" id="" value="১৫-১০-২০২১"></td>
                            <td class="column5 style23 s"><input type="text" name="acquisition1_3" id="" value="৩০-০৬-২০২১"></td>
                            <td class="column6 style23 s"><input type="text" name="acquisition2_3" id="" value="৩০-০৬-২০২১"></td>
                            <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_3" id="" value="আরটিআই কর্মকর্তা"></td>
                          </tr>
                          <tr class="row120">
                          <input type="hidden" name="row_id" value="4">
                            <td class="column0 style26 s"><input type="text" name="activities_4" id="" value="[১.৪]  তথ্য অধিকার আইন, ২০০৯ এর ৫ ধারা অনুসারে যাবতীয় তথ্যের ক্যাটাগরি  ও ক্যাটালগ তৈরি/ হালনাগাদকরণ"></td>
                            <td class="column1 style26 s"><input type="text" name="performance_index_4" id="" value="[১.4.১]  তথ্যের ক্যাটাগরি  ও ক্যাটালগ প্রস্তুতকৃত/হালনাগাদকৃত"></td>
                            <td class="column2 style27 s"><input type="text" name="unit_4" id="" value="তারিখ"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_4" id="" value="3"></td>
                            <td class="column4 style27 s"><input type="text" name="annual_target_4" id="" value="৩১-১২-২০২১"></td>
                            <td class="column5 style23 s"><input type="text" name="acquisition1_4" id="" value="-"></td>
                            <td class="column6 style23 s"><input type="text" name="acquisition2_4" id="" value="-"></td>
                            <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_4" id="" value="আরটিআই কর্মকর্তা"></td>
                          </tr>
                          <tr class="row121">
                          <input type="hidden" name="row_id" value="5">
                            <td class="column0 style26 s"><input type="text" name="activities_5" id="" value="[১.৫] তথ্য অধিকার আইন ও বিধিবিধান সম্পর্কে জনসচেতনতা বৃদ্ধিকরণ"></td>
                            <td class="column1 style26 s"><input type="text" name="performance_index_5" id="" value="[১.5.১]  প্রচার কার্যক্রম সম্পন্ন"></td>
                            <td class="column2 style27 s"><input type="text" name="unit_5" id="" value="সংখ্যা"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_5" id="" value="3"></td>
                            <td class="column4 style28 n"><input type="text" name="annual_target_5" id="" value="3"></td>
                            <td class="column5 style23 s"><input type="text" name="acquisition1_5" id="" value="-"></td>
                            <td class="column6 style23 s"><input type="text" name="acquisition2_5" id="" value="-"></td>
                            <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_5" id="" value="আরটিআই কর্মকর্তা"></td>
                          </tr>
                          <tr class="row122">
                          <input type="hidden" name="row_id" value="6">
                            <td class="column0 style26 s"><input type="text" name="activities_6" id="" value="[১.৬] তথ্য অধিকার বিষয়ে কর্মকর্তাদের প্রশিক্ষণ আয়োজন">   </td>
                            <td class="column1 style26 s"><input type="text" name="performance_index_6" id="" value="[১.6.১] প্রশিক্ষণ আয়োজিত"></td>
                            <td class="column2 style27 s"><input type="text" name="unit_6" id="" value="সংখ্যা"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_6" id="" value="3"></td>
                            <td class="column4 style28 n"><input type="text" name="annual_target_6" id="" value="3"></td>
                            <td class="column5 style23 s"><input type="text" name="acquisition1_6" id="" value="-"></td>
                            <td class="column6 style23 s"><input type="text" name="acquisition2_6" id="" value="-"></td>
                            <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_6" id="" value="আরটিআই কর্মকর্তা"></td>
                          </tr>
                          <tr class="row123">
                          {{-- <input type="hidden" name="row_id" value="7"> --}}
                            <td class="column0 style33 s style33" colspan="3"><input type="text" name="" id="" value="উপমোট= (৬টি সূচক)"></td>
                            <td class="column3 style34 n"><input type="text" name="" id="" value="25"></td>
                            <td class="column4 style44 null"></td>
                            <td class="column5 style44 null"></td>
                            <td class="column6 style44 null"></td>
                            <td class="column7 style44 null"></td>
                          </tr>
                      </div>
                  </tbody>
          </table>
            </div>
            
        <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
        <button type="submit" class="btn btn-danger">সংশোধন</button>
          </form>
                  


                        
 

@endsection    
