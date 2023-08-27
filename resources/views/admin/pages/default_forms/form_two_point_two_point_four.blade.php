@extends('admin.master')
@section('content')

<style>
  input{
    border:none;
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
                    <a href="#">{{__('Form 2.2.4')}}</a>
                </li>
            </ul>
        </div>

        
  

        <div class="container-fluid" id="founded_form">
            <div class="row">
   
            <div class="col-md-12">
              <form action="{{ url('form-2.2.4') }}" method="POST">
                @csrf
                <div class="rel-26">
                    <h3>২.২.৪ সেবা প্রদান প্রতিশ্রুতি বাস্তবায়ন কর্মপরিকল্পনা, ২০২১-২২</h3> 
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
                            <tr class="row107">
                              <input type="hidden" name="row_id" value="1">
                                <td class="column0 style26 s"><input type="text" name="activities_1" id="" value="[১.১] সেবা প্রদান প্রতিশ্রুতি পরিবীক্ষণ কমিটির সিদ্ধান্ত বাস্তবায়ন"> </td>
                                <td class="column1 style26 s"><input type="text" name="performance_index_1" id="" value="[১.১.১] সিদ্ধান্ত বাস্তবায়িত"></td>
                                <td class="column2 style27 s"><input type="text" name="unit_1" id="" value="%"></td>
                                <td class="column3 style28 n"><input type="text" name="performance_index_values_1" id="" value="8"></td>
                                <td class="column4 style37 n"><input type="text" name="annual_target_1" id="" value="$-5000445]0.2f%"></td>
                                <td class="column5 style25 n"><input type="text" name="acquisition1_1" id="" value="$-5000445]0.2f%"></td>
                                <td class="column6 style25 n"><input type="text" name="acquisition2_1" id="" value="$-5000445]0.2f%"></td>
                                <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_1" id="" value="সিটিজেন চার্টার কমিটি"></td>
                              </tr>
                              <tr class="row108">
                              <input type="hidden" name="row_id" value="2">
                                <td class="column0 style26 s"><input type="text" name="activities_2" id="" value="[১.২] সেবা প্রদান প্রতিশ্রুতি ত্রৈমাসিক ভিত্তিতে হালনাগাদকরণ">  </td>
                                <td class="column1 style26 s"><input type="text" name="performance_index_2" id="" value="[১.২.১] ওয়েবসাইটে প্রতি ত্রৈমাসিকে হালনাগাদকৃত"></td>
                                <td class="column2 style26 s"><input type="text" name="unit_2" id="" value="সংখ্যা"></td>
                                <td class="column3 style45 n"><input type="text" name="performance_index_values_2" id="" value="5"></td>
                                <td class="column4 style28 n"><input type="text" name="annual_target_2" id="" value="4"></td>
                                <td class="column5 style66 n"><input type="text" name="acquisition1_2" id="" value="1"></td>
                                <td class="column6 style66 n"><input type="text" name="acquisition2_2" id="" value="1"></td>
                                <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_2" id="" value="সিটিজেন চার্টার কমিটি"></td>
                              </tr>
                              <tr class="row109">
                              <input type="hidden" name="row_id" value="3">
                                <td class="column0 style26 s"><input type="text" name="activities_3" id="" value="[২.১] সেবা প্রদান প্রতিশ্রুতি বিষয়ক  প্রশিক্ষণ আয়োজন"> </td>
                                <td class="column1 style26 s"><input type="text" name="performance_index_3" id="" value="[১.১.১] প্রশিক্ষণ আয়োজিত"></td>
                                <td class="column2 style27 s"><input type="text" name="unit_3" id="" value="সংখ্যা"></td>
                                <td class="column3 style28 n"><input type="text" name="performance_index_values_3" id="" value="5"></td>
                                <td class="column4 style28 n"><input type="text" name="annual_target_3" id="" value="4"></td>
                                <td class="column5 style23 s"><input type="text" name="acquisition1_3" id="" value="-"></td>
                                <td class="column6 style23 s"><input type="text" name="acquisition2_3" id="" value="-"></td>
                                <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_3" id="" value="সিটিজেন চার্টার কমিটি"></td>
                              </tr>
                              <tr class="row110">
                              <input type="hidden" name="row_id" value="4">
                                <td class="column0 style26 s"><input type="text" name="activities_4" id="" value="[২.২]  সেবা প্রদান বিষয়ে স্টেকহোল্ডারগণের সমন্বয়ে অবহিতকরণ সভা আয়োজন"></td>
                                <td class="column1 style26 s"><input type="text" name="performance_index_4" id="" value="[১.৩.১]  অবহিতকরণ সভা অনুষ্ঠিত"></td>
                                <td class="column2 style27 s"><input type="text" name="unit_4" id="" value="সংখ্যা"></td>
                                <td class="column3 style28 n"><input type="text" name="performance_index_values_4" id="" value="7"></td>
                                <td class="column4 style28 n"><input type="text" name="annual_target_4" id="" value="2"></td>
                                <td class="column5 style23 s"><input type="text" name="acquisition1_4" id="" value="-"></td>
                                <td class="column6 style23 s"><input type="text" name="acquisition2_4" id="" value="-"></td>
                                <td class="column7 style23 s"><input type="text" name="branch_responsible_implementation_4" id="" value="সিটিজেন চার্টার কমিটি"></td>
                              </tr>
                              <tr class="row111">
                              <input type="hidden" name="" value="">
                                <td class="column0 style33 s style33" colspan="3"><input type="text" name="" id="" value="উপমোট= (৪টি সূচক)"></td>
                                <td class="column3 style28 n"><input type="text" name="" id="" value="25"></td>
                                <td class="column4 style23 null"></td>
                                <td class="column5 style23 null"></td>
                                <td class="column6 style23 null"></td>
                                <td class="column7 style23 null"></td>
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
        </div>
    
    </div>
</div>


@endsection    
