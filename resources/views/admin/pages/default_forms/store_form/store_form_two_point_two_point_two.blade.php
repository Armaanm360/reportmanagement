
        <style>
  
input{
                  border: none;
              }
    </style>
<div class="content">

    <div class="page-inner">


 

        <form id="submitForm" method="POST">
            @csrf
           <input type="hidden" name="form_unique_id" class="form_unique_id" value="{{$form_data['unique_form_id']}}">
            <input type="hidden" name="unit_office_to" value="{{$form_data['unit_office_to']}}">
            <input type="hidden" name="unit_office" value="{{$form_data['unit_office']}}">
            <input type="hidden" name="office" value="{{$form_data['office']}}">
            <input type="hidden" name="department" value="{{$form_data['department']}}">
            <input type="hidden" name="ministry" value="{{$form_data['ministry']}}">
            <input type="hidden" name="form_id" value="{{$form_data['form_id']}}">
            <input type="hidden" name="form_year" value="{{$form_data['form_year']}}">  
          <div class="rel-26">
            <h3>২.২.২ ই-গভর্ন্যান্স ও উদ্ভাবন কর্মপরিকল্পনা {{$form_data['form_year']}}</h3>
              <table border="1" width="100%" id="myTable">
                  <thead>
                      <tr>
                          <td rowspan="2">কার্যক্রম</td>
                          <td rowspan="2">কর্মসম্পাদন সূচক</td>
                          <td rowspan="2">একক</td>
                          <td rowspan="2">কর্মসম্পাদন সূচকের মান</td>
                          <td rowspan="2">বাৎসরিক লক্ষ্যমাত্রা ২০২১-২২</td>
                          <td colspan="5">অর্জন</td>
                          <td rowspan="2">বাস্তবায়নের জন্য দায়িত্বপ্রাপ্ত শাখা</td>
                      </tr>
                      <tr>
                          <td>(জুলাই-সেপ্টেম্বর ২০২১)</td>
                          <td>(জুলাই ২০২১- জুন ২০২২)</td>
                          <td>(জুলাই-সেপ্টেম্বর ২০২১)</td>
                          <td>(জুলাই ২০২১- জুন ২০২২)</td>
                          <td>Total</td>
                      </tr>
                  </thead>
                  <tbody>
                      <div>
                          <tr class="row77">
                            <input type="hidden" name="row_id" value="1">
                            <td class="column0 style26 s"><input type="text" name="activities_1" id="" value="[১.১] উদ্ভাবনী ধারণা বাস্তবায়ন">  </td>
                            <td class="column1 style26 s"><input type="text" name="performance_index_1" id="" value="[১.১.১] একটি নতুন উদ্ভাবনী ধারণা বাস্তবায়িত"></td>
                            <td class="column2 style27 s"><input type="text" name="unit_1" id="" value="তারিখ"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_1" id="" value="5"></td>
                            <td class="column4 style27 s"><input type="text" name="annual_target_1" id="" value="১৬-০৩-২০২২"></td>
                            <td class="column5 style27 s"><input type="number" name="acquisition1_1" id="" value="-"></td>
                            <td class="column6 style27 s"><input type="number" name="acquisition2_1" id="" value="-"></td>
                            <td class="column6 style27 s"><input type="number" name="acquisition3_1" id="" value="-"></td>
                            <td class="column6 style27 s"><input type="number" name="acquisition2_1" id="" value="-"></td>
                            <td class="column6 style27 s"><input type="number" class="total_sum_value" name="total_sum_value_1" id="" value="-"></td>
                           <td class="column7 style23 s"> <div class="form-group">
                                                  <label for="exampleFormControlSelect1">Select Division</label>
                                                  <select class="form-control select2" id="" name="branch_responsible_implementation_1">
                                                    <option selected >Select Division</option>
                                                    @foreach ($testybro as $division)
                                                        <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                                    @endforeach
                             
                                                  </select>
                                                </div>
                                      </td>
                          </tr>
                          <tr class="row78">
                            <input type="hidden" name="row_id" value="2">
                            <td class="column0 style26 s"><input type="text" name="activities_2" id="" value="[১.২] সেবা সহজিকরণ"></td>
                            <td class="column1 style26 s"><input type="text" name="performance_index_2" id="" value="[১.২.১] একটি সেবা সহজিকৃত "></td>
                            <td class="column2 style27 s"><input type="text" name="unit_2" id="" value="তারিখ"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_2" id="" value="5"></td>
                            <td class="column4 style27 s"><input type="text" name="annual_target_2" id="" value="২৫-০২-২০২২"></td>
                            <td class="column5 style27 s"><input type="text" name="acquisition1_2" id="" value="-"></td>
                            <td class="column6 style27 s"><input type="text" name="acquisition2_2" id="" value="-"></td>
                            <td class="column7 style27 s"><input type="text" name="branch_responsible_implementation_2" id="" value="চিফ ইনোভেশন অফিসারের দপ্তর"></td>
                          </tr>
                          <tr class="row79">
                            <input type="hidden" name="row_id" value="3">
                            <td class="column0 style26 s"><input type="text" name="activities_3" id="" value="[১.৩]  সেবা ডিজিটাইজেশন"></td>
                            <td class="column1 style26 s"><input type="text" name="performance_index_3" id="" value="[১.৩.১] ন্যূনতম একটি সেবা ডিজিটাইজকৃত"></td>
                            <td class="column2 style27 s"><input type="text" name="unit_3" id="" value="তারিখ"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_3" id="" value="5"></td>
                            <td class="column4 style27 s"><input type="text" name="annual_target_3" id="" value="৩০-১২-২০২১"></td>
                            <td class="column5 style27 s"><input type="text" name="acquisition1_3" id="" value="-"></td>
                            <td class="column6 style27 s"><input type="text" name="acquisition2_3" id="" value="-"></td>
                            <td class="column7 style27 s"><input type="text" name="branch_responsible_implementation_3" id="" value="চিফ ইনোভেশন অফিসারের দপ্তর"></td>
                          </tr>
                          <tr class="row80">
                            <input type="hidden" name="row_id" value="4">
                            <td class="column0 style26 s"><input type="text" name="activities_4" id="" value="[১.৪] ইতঃপূর্বে বাস্তবায়িত উদ্ভাবনী ধারণা, সহজিকৃত ও ডিজিটাইজকৃত সেবা সংক্রান্ত পর্যালোচনা সভা  "></td>
                            <td class="column1 style26 s"><input type="text" name="performance_index_4" id="" value="[১.৪.১] সভা আয়োজিত"> </td>
                            <td class="column2 style27 s"><input type="text" name="unit_4" id="" value="তারিখ"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_4" id="" value="4"></td>
                            <td class="column4 style27 s"><input type="text" name="annual_target_4" id="" value="৩০-০৮-২০২১"></td>
                            <td class="column5 style27 s"><input type="text" name="acquisition1_4" id="" value="২৫-০৮-২০২১"></td>
                            <td class="column6 style27 s"><input type="text" name="acquisition2_4" id="" value="২৫-০৮-২০২১"></td>
                            <td class="column7 style27 s"><input type="text" name="branch_responsible_implementation_4" id="" value="চিফ ইনোভেশন অফিসারের দপ্তর"></td>
                          </tr>
                          <tr class="row81">
                            <input type="hidden" name="row_id" value="5">
                            <td class="column0 style26 s"><input type="text" name="activities_5" id="" value="[১.৫] ই-নথির ব্যবহার বৃদ্ধি"></td>
                            <td class="column1 style26 s"><input type="text" name="performance_index_5" id="" value="[১.৫.১] ই-ফাইলে নোট নিস্পত্তিকৃত "> </td>
                            <td class="column2 style27 s"><input type="text" name="unit_5" id="" value="%"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_5" id="" value="6"></td>
                            <td class="column4 style37 n"><input type="text" name="annual_target_5" id="" value="$-5000445]0.2f%"></td>
                            <td class="column5 style37 n"><input type="text" name="acquisition1_5" id="" value="$-5000445]0.2f%"></td>
                            <td class="column6 style37 n"><input type="text" name="acquisition2_5" id="" value="$-5000445]0.2f%"></td>
                            <td class="column7 style27 s"><input type="text" name="branch_responsible_implementation_5" id="" value="সকল শাখা"></td>
                          </tr>
                          <tr class="row82">
                            <input type="hidden" name="row_id" value="6">
                            <td class="column0 style26 s"><input type="text" name="activities_6" id="" value="[১.৬] ৪র্থ শিল্প বিপ্লবের চ্যালেঞ্জ মোকাবেলায় করণীয় বিষয়ে অবহিতকরণ সভা/কর্মশালা আয়োজন"></td>
                            <td class="column1 style26 s"><input type="text" name="performance_index_6" id="" value="[১.৬.১] সভা/কর্মশালা আয়োজিত"></td>
                            <td class="column2 style27 s"><input type="text" name="unit_6" id="" value="সংখ্যা"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_6" id="" value="4"></td>
                            <td class="column4 style28 n"><input type="text" name="annual_target_6" id="" value="4"></td>
                            <td class="column5 style27 s"><input type="text" name="acquisition1_6" id="" value="-"></td>
                            <td class="column6 style27 s"><input type="text" name="acquisition2_6" id="" value="-"></td>
                            <td class="column7 style27 s"><input type="text" name="branch_responsible_implementation_6" id="" value="চিফ ইনোভেশন অফিসারের দপ্তর"></td>
                          </tr>
                          <tr class="row83">
                            <input type="hidden" name="row_id" value="7">
                            <td class="column0 style32 s style32" rowspan="2"><input type="text" name="activities_7" id="" value="[২.১] তথ্য বাতায়ন হালনাগাদকরণ"></td>
                            <td class="column1 style26 s"><input type="text" name="performance_index_7" id="" value="[২.১.১] তথ্য বাতায়নে সকল সেবা বক্স হালনাগাদকৃত"></td>
                            <td class="column2 style27 s"><input type="text" name="unit_7" id="" value="সংখ্যা"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_7" id="" value="4"></td>
                            <td class="column4 style28 n"><input type="text" name="annual_target_7" id="" value="4"></td>
                            <td class="column5 style28 n"><input type="text" name="acquisition1_7" id="" value="1"></td>
                            <td class="column6 style28 n"><input type="text" name="acquisition2_7" id="" value="1"></td>
                            <td class="column7 style27 s"><input type="text" name="branch_responsible_implementation_7" id="" value="আইসিটি সেল"></td>
                          </tr>
                          <tr class="row84">
                            <input type="hidden" name="row_id_7_1" value="7"> 
                            <td class="column1 style26 s"><input type="text" name="performance_index_7_1" id="" value="[২.১.২] বিভিন্ন প্রকাশনা ও তথ্যাদি তথ্য বাতায়নে প্রকাশিত"></td>
                            <td class="column2 style27 s"><input type="text" name="unit_7_1" id="" value="সংখ্যা"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_7_1" id="" value="2"></td>
                            <td class="column4 style28 n"><input type="text" name="annual_target_7_1" id="" value="4"></td>
                            <td class="column5 style28 n"><input type="text" name="acquisition1_7_1" id="" value="1"></td>
                            <td class="column6 style28 n"><input type="text" name="acquisition2_7_2" id="" value="1"></td>
                            <td class="column7 style27 s"><input type="text" name="branch_responsible_implementation_7_1" id="" value="আইসিটি সেল"></td>
                          </tr>
                          <tr class="row85">
                            <input type="hidden" name="row_id" value="8">
                            <td class="column0 style32 s style32" rowspan="5"><input type="text" name="activities_8" id="" value="[২.২] ই-গভর্ন্যান্স ও উদ্ভাবন কর্মপরিকল্পনা বাস্তবায়ন "></td>
                            <td class="column1 style26 s"><input type="text" name="performance_index_8" id="" value="[২.২.১] কর্মপরিকল্পনা বাস্তবায়ন সংক্রান্ত প্রশিক্ষণ আয়োজিত "></td>
                            <td class="column2 style27 null"><input type="text" name="unit_8" id="" value=""></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_8" id="" value="3"></td>
                            <td class="column4 style28 n"><input type="text" name="annual_target_8" id="" value="4"></td>
                            <td class="column5 style27 s"><input type="text" name="acquisition1_8" id="" value="-"></td>
                            <td class="column6 style27 s"><input type="text" name="acquisition2_8" id="" value="-"></td>
                            <td class="column7 style27 s"><input type="text" name="branch_responsible_implementation_8" id="" value="চিফ ইনোভেশন অফিসারের দপ্তর"></td>
                          </tr>
                          <tr class="row86">
                            <input type="hidden" name="row_id_8_1" value="8"> 
                            <td class="column1 style26 s"><input type="text" name="performance_index_8_1" id="" value="[২.২.২] ই-গভর্ন্যান্স কর্মপরিকল্পনা বাস্তবায়নের জন্য বরাদ্দকৃত অর্থ ব্যয়িত"></td>
                            <td class="column2 style27 s"><input type="text" name="unit_8_1" id="" value="%"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_8_1" id="" value="3"></td>
                            <td class="column4 style37 n"><input type="text" name="annual_target_8_1" id="" value="$-5000445]0.2f%"></td>
                            <td class="column5 style27 s"><input type="text" name="acquisition1_8_1" id="" value="-"></td>
                            <td class="column6 style27 s"><input type="text" name="acquisition2_8_1" id="" value="-"></td>
                            <td class="column7 style27 s"><input type="text" name="branch_responsible_implementation_8_1" id="" value="চিফ ইনোভেশন অফিসারের দপ্তর"></td>
                          </tr>
                          <tr class="row87">
                            <input type="hidden" name="row_id_8_2" value="8"> 
                            <td class="column1 style26 s"><input type="text" name="performance_index_8_2" id="" value="[২.২.৩] কর্মপরিকল্পনার বাস্তবায়ন অগ্রগতি পর্যালোচনা সংক্রান্ত সভা আয়োজিত"></td>
                            <td class="column2 style27 s"><input type="text" name="unit_8_2" id="" value="সংখ্যা"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_8_2" id="" value="3"></td>
                            <td class="column4 style28 n"><input type="text" name="annual_target_8_2" id="" value="4"></td>
                            <td class="column5 style28 n"><input type="text" name="acquisition1_8_2" id="" value="1"></td>
                            <td class="column6 style28 n"><input type="text" name="acquisition2_8_2" id="" value="1"></td>
                            <td class="column7 style27 s"><input type="text" name="branch_responsible_implementation_8_2" id="" value="চিফ ইনোভেশন অফিসারের দপ্তর"></td>
                          </tr>
                          <tr class="row88">
                            <input type="hidden" name="row_id_8_3" value="8"> 
                            <td class="column1 style26 s"><input type="text" name="performance_index_8_3" id="" value="[২.২.৪] কর্মপরিকল্পনার অর্ধবার্ষিক স্ব-মূল্যায়ন প্রতিবেদন মন্ত্রিপরিষদ বিভাগে/ ঊ্র্র্ধ্বতন কর্তৃপক্ষের নিকট প্রেরিত"></td>
                            <td class="column2 style27 s"><input type="text" name="unit_8_3" id="" value="তারিখ"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_8_3" id="" value="3"></td>
                            <td class="column4 style27 s"><input type="text" name="annual_target_8_3" id="" value="১৩-০১-২০২২"></td>
                            <td class="column5 style27 s"><input type="text" name="acquisition1_8_3" id="" value="-"></td>
                            <td class="column6 style27 s"><input type="text" name="acquisition2_8_3" id="" value="-"></td>
                            <td class="column7 style27 s"><input type="text" name="branch_responsible_implementation_8_3" id="" value="চিফ ইনোভেশন অফিসারের দপ্তর"></td>
                          </tr>
                          <tr class="row89">
                            <input type="hidden" name="row_id_8_4" value="8"> 
                            <td class="column1 style26 s"><input type="text" name="performance_index_8_4" id="" value="[২.২.৫] দেশে/বিদেশে বাস্তবায়িত ন্যূনতম একটি উদ্যোগ পরিদর্শনকৃত"></td>
                            <td class="column2 style27 s"><input type="text" name="unit_8_4" id="" value="সংখ্যা"></td>
                            <td class="column3 style28 n"><input type="text" name="performance_index_values_8_4" id="" value="3"></td>
                            <td class="column4 style27 s"><input type="text" name="annual_target_8_4" id="" value="৩০-০৫-২০২২"></td>
                            <td class="column5 style27 s"><input type="text" name="acquisition1_8_4" id="" value="-"></td>
                            <td class="column6 style27 s"><input type="text" name="acquisition2_8_4" id="" value="-"></td>
                            <td class="column7 style27 s"><input type="text" name="branch_responsible_implementation_8_4" id="" value="চিফ ইনোভেশন অফিসারের দপ্তর"></td>
                          </tr>
                          <tr class="row90">
                            <input type="hidden" name="" value="9"> 
                            <td class="column0 style33 s style33" colspan="3"><input type="text" name="" id="" value="উপমোট= (১৩টি সূচক)"></td>
                            <td class="column3 style34 n"><input type="text" name="" id="" value="50"></td>
                            <td class="column4 style27 null"></td>
                            <td class="column5 style27 null"></td>
                            <td class="column6 style27 null"></td>
                            <td class="column7 style27 null"></td>
                          </tr>
                        </div>
                  </tbody>
          </table>  
          
          
      <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
      <button type="submit" class="btn btn-danger">সংশোধন</button>
        
      </div>
    </form>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#basic-datatable').DataTable({
        });
    });
    $("#submitForm").submit(function (e) {
        e.preventDefault();
        $('#loader').show();
        $(".error_msg").html('');
        var data = new FormData($('#submitForm')[0]);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{url("store-form-2.2.2")}}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {
            alert('Form Submitted Successfully!');
            location.reload();
            }
        }).done(function () {
            $("#success_msg").html("Data Save Successfully");
//            window.location.href = "{{ url('departments')}}";
            // location.reload();
        }).fail(function (data, textStatus, jqXHR) {
            $('#loader').hide();
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function (key, value) {
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });
    });


     $(function () {
        let tbl = $('#myTable');
        tbl.find('tr').each(function () {
            // $this = this;
            $(this).find('input[type=number]').bind("keyup", function () {
                calculateSum();
            });
        });

        function calculateSum() {
            let tbl = $('#myTable');
            tbl.find('tr').each(function () {
                let sum = 0;
                $(this).find('input[type=number]').not('.total_sum_value').each(function () {
                    if (!isNaN(this.value) && this.value.length != 0) {
                        sum += parseFloat(this.value);
                    }
                });

                $(this).find('.total_sum_value').val(sum.toFixed(2));
            });
        }
    });
</script>
