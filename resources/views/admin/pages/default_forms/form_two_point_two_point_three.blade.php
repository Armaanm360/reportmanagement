@extends('admin.master')
<style>
   input{
     border: none;
   }
</style>

@section('content')

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
                    <a href="#">{{__('Form 2.2.3')}}</a>
                </li>
            </ul>
        </div>

     

       
           <form action="{{ url('form-2.2.3') }}" method="POST">
            @csrf
            <div class="rel-26">
                <h3>২.২.৩ অভিযোগ প্রতিকার ব্যবস্থা সংক্রান্ত কর্মপরিকল্পনা, ২০২১-২২</h3> 
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
                        <tr class="row96">
                          <input type="hidden" name="row_id" value="1">
                          <td class="column0 style26 s">
                          <textarea name="activities_1" id="" cols="30" rows="10">
                              [১.১] অভিযোগ নিষ্পত্তি কর্মকর্তা (অনিক) ও আপিল কর্মকর্তার তথ্য ওয়েবসাইটে ত্রৈমাসিক ভিত্তিতে হালনাগাদকরণ
                          </textarea>
                          </td>
                          <td class="column1 style26 s">
                          <textarea name="performance_index_1" id="" cols="30" rows="10">
                          [১.১.১]  অনিক ও আপিল কর্মকর্তার তথ্য হালনাগাদকৃত এবং ওয়েবসাইটে আপলোডকৃত
                          </textarea>
                        </td>
                          <td class="column2 style26 s"><input type="text" name="unit_1" id="" value="সংখ্যা"></td>
                          <td class="column3 style45 n"><input type="text" name="performance_index_values_1" id="" value="5"></td>
                          <td class="column4 style28 n"><input type="text" name="annual_target_1" id="" value="4"></td>
                          <td class="column5 style45 n"><input type="text" name="acquisition1_1" id="" value="1"></td>
                          <td class="column6 style45 n"><input type="text" name="acquisition2_1" id="" value="1"></td>
                          <td class="column7 style27 s">
                                      
                          </td>
                        </tr>
                        <tr class="row97">
                          <input type="hidden" name="row_id" value="2">
                          <td class="column0 style26 s"><textarea name="activities_2" id="" cols="30" rows="10">
                          [২.১] নির্দিষ্ট সময়ে অনলাইন/ অফলাইনে প্রাপ্ত অভিযোগ নিষ্পত্তি এবং নিষ্পত্তি সংক্রান্ত মাসিক প্রতিবেদন উর্ধ্বতন কর্তৃপক্ষ বরাবর প্রেরণ
                          </textarea></td>
                          <td class="column1 style26 s"><textarea name="performance_index_2" id="" cols="30" rows="10">
                          [২.১.১] অভিযোগ নিষ্পত্তিকৃত
                          </textarea>
                        </td>
                          <td class="column2 style27 s"><input type="text" name="unit_2" id="" value="%"></td>
                          <td class="column3 style28 n"><input type="text" name="performance_index_values_2" id="" value="8"></td>
                          <td class="column4 style28 n"><input type="text" name="annual_target_2" id="" value="90"></td>
                          <td class="column5 style37 n"><input type="text" name="acquisition1_2" id="" value="$-5000445]0.2f%"></td>
                          <td class="column6 style37 n"><input type="text" name="acquisition2_2" id="" value="$-5000445]0.2f%"></td>
                          <td class="column7 style27 s">
                                    
                          </td>
                        </tr>
                        <tr class="row98">
                          <input type="hidden" name="row_id" value="3">
                          <td class="column0 style26 s"><textarea name="activities_3" id="" cols="30" rows="10">
                          [২.২] কর্মকর্তা/কর্মচারীদের অভিযোগ প্রতিকার ব্যবস্থা এবং জিআরএস সফটওয়্যার বিষয়ক প্রশিক্ষণ আয়োজন
                          </textarea><input type="text" name="activities_3" id="" value=""></td>
                          <td class="column1 style26 s"><textarea name="performance_index_3" id="" cols="30" rows="10">
                          [২.২.১] প্রশিক্ষণ আয়োজিত
                          </textarea></td>
                          <td class="column2 style27 s"><input type="text" name="unit_3" id="" value="সংখ্যা"></td>
                          <td class="column3 style28 n"><input type="text" name="performance_index_values_3" id="" value="5"></td>
                          <td class="column4 style28 n"><input type="text" name="annual_target_3" id="" value="4"></td>
                          <td class="column5 style27 s"><input type="text" name="acquisition1_3" id="" value="-"></td>
                          <td class="column6 style27 s"><input type="text" name="acquisition2_3" id="" value="-"></td>
                          <td class="column7 style27 s">
                                     
                          </td>
                        </tr>
                        <tr class="row99">
                          <input type="hidden" name="row_id" value="4">
                          <td class="column0 style26 s"><textarea name="activities_4" id="" cols="30" rows="10">
                          [২.৩] ত্রৈমাসিক ভিত্তিতে পরিবীক্ষণ এবং ত্রৈমাসিক পরিবীক্ষণ প্রতিবেদন উর্ধ্বতন কর্তৃপক্ষের নিকট প্রেরণ
                          </textarea></td>
                          <td class="column1 style26 s"><textarea name="performance_index_4" id="" cols="30" rows="10">
                          [২.৩.১] ত্রৈমাসিক প্রতিবেদন প্রেরিত
                          </textarea></td>
                          <td class="column2 style27 s"><input type="text" name="unit_4" id="" value="সংখ্যা"></td>
                          <td class="column3 style28 n"><input type="text" name="performance_index_values_4" id="" value="3"></td>
                          <td class="column4 style28 n"><input type="text" name="annual_target_4" id="" value="4"></td>
                          <td class="column5 style28 n"><input type="text" name="acquisition1_4" id="" value="1"></td>
                          <td class="column6 style28 n"><input type="text" name="acquisition2_4" id="" value="1"></td>
                          <td class="column7 style27 s">
                                   
                          </td>
                        </tr>
                        <tr class="row100">
                          <input type="hidden" name="row_id" value="5">
                          <td class="column0 style26 s"><textarea name="activities_5" id="" cols="30" rows="10">
                          [২.৪] অভিযোগ প্রতিকার ব্যবস্থাপনা বিষয়ে স্টেকহোল্ডারগণের সমন্বয়ে অবহিতকরণ সভা
                          </textarea> </td>
                          <td class="column1 style26 s"><textarea name="performance_index_5" id="" cols="30" rows="10">
                          [২.৪.১] সভা অনুষ্ঠিত
                          </textarea>
                        </td>
                          <td class="column2 style27 s"><input type="text" name="unit_5" id="" value="সংখ্যা"></td>
                          <td class="column3 style28 n"><input type="text" name="performance_index_values_5" id="" value="4"></td>
                          <td class="column4 style28 n"><input type="text" name="annual_target_5" id="" value="2"></td>
                          <td class="column5 style28 n"><input type="text" name="acquisition1_5" id="" value="1"></td>
                          <td class="column6 style28 n"><input type="text" name="acquisition2_5" id="" value="1"></td>
                          <td class="column7 style27 s">
                                     
                          </td>
                        </tr>
                        <tr class="row101">
                          <input type="hidden" name="row_id" value="5">
                          <td class="column0 style33 s style33" colspan="3"><input type="text" name="" id="" value="উপমোট= (৫টি সূচক)"> </td>
                          <td class="column3 style28 n"><input type="text" name="" id="" value="25"> </td>
                          <td class="column4 style39 null"></td>
                          <td class="column5 style39 null"></td>
                          <td class="column6 style39 null"></td>
                          <td class="column7 style39 null"></td>
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

<script>
  
</script>

@endsection
