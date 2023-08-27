
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
            <input type="hidden" name="quarter" value="{{$form_data['quarter']}}">
            <div class="rel-26">
                <h3>২.২.৩ অভিযোগ প্রতিকার ব্যবস্থা সংক্রান্ত কর্মপরিকল্পনা, {{$form_data['form_year']}} quarter - {{$form_data['quarter']}}</h3> 
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
                              <td>(জানুয়ারি ২০২১-মার্চ ২০২২)Q1</td>
                              <td>(এপ্রিল   ২০২১-জুন ২০২২)Q2</td>
                              <td>(জুলাই   ২০২১-সেপ্টেম্বর ২০২২)Q3</td>
                              <td>(জুলাই   ২০২১-সেপ্টেম্বর ২০২২)Q3</td>
                              <td>total</td>
                              
                          </tr>
                      </thead>
                  <tbody>
                    <div>
                        <tr class="row96">
                          <input type="hidden" name="row_id" value="1">
                          <td class="column0 style26 s"><textarea name="activities_1" id="" cols="30" rows="10">[১.১] অভিযোগ নিষ্পত্তি কর্মকর্তা (অনিক) ও আপিল কর্মকর্তার তথ্য ওয়েবসাইটে ত্রৈমাসিক ভিত্তিতে হালনাগাদকরণ</textarea></td>
                          <td class="column1 style26 s"><textarea name="performance_index_1" id="" cols="30" rows="10">[১.১.১]  অনিক ও আপিল কর্মকর্তার তথ্য হালনাগাদকৃত এবং ওয়েবসাইটে আপলোডকৃত</textarea></td>
                          <td class="column2 style26 s"><textarea name="unit_1" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                          <td class="column3 style45 n"><textarea name="performance_index_values_1" id="" cols="30" rows="10">5</textarea></td>
                          <td class="column4 style28 n"><textarea name="annual_target_1" id="" cols="30" rows="10">4</textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition1_1" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition2_1" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition3_1" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition4_1" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" class="total_sum_value" name="total_sum_value_1" id="" cols="30" rows="10"></textarea></td>
                          <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control" id="" name="branch_responsible_implementation_1">
                                          <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                        </tr>
                        <tr class="row97">
                          <input type="hidden" name="row_id" value="2">
                          <td class="column0 style26 s"><textarea name="activities_2" id="" cols="30" rows="10">[২.১] নির্দিষ্ট সময়ে অনলাইন/ অফলাইনে প্রাপ্ত অভিযোগ নিষ্পত্তি এবং নিষ্পত্তি সংক্রান্ত মাসিক প্রতিবেদন উর্ধ্বতন কর্তৃপক্ষ বরাবর প্রেরণ</textarea></td>
                          <td class="column1 style26 s"><textarea name="performance_index_2" id="" cols="30" rows="10">[২.১.১] অভিযোগ নিষ্পত্তিকৃত</textarea></td>
                          <td class="column2 style27 s"><textarea name="unit_2" id="" cols="30" rows="10">%</textarea></td>
                          <td class="column3 style28 n"><textarea name="performance_index_values_2" id="" cols="30" rows="10">8</textarea></td>
                          <td class="column4 style28 n"><textarea name="annual_target_2" id="" cols="30" rows="10">90</textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition1_2" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition2_2" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition3_2" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition4_2" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" class="total_sum_value" name="total_sum_value_2" id="" cols="30" rows="10"></textarea></td>
                          <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control" id="" name="branch_responsible_implementation_2">
                                          <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                        </tr>
                        <tr class="row98">
                          <input type="hidden" name="row_id" value="3">
                          <td class="column0 style26 s"><textarea name="activities_3" id="" cols="30" rows="10">[২.২] কর্মকর্তা/কর্মচারীদের অভিযোগ প্রতিকার ব্যবস্থা এবং জিআরএস সফটওয়্যার বিষয়ক প্রশিক্ষণ আয়োজন</textarea></td>
                          <td class="column1 style26 s"><textarea name="performance_index_3" id="" cols="30" rows="10">[২.২.১] প্রশিক্ষণ আয়োজিত</textarea></td>
                          <td class="column2 style27 s"><textarea name="unit_3" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                          <td class="column3 style28 n"><textarea name="performance_index_values_3" id="" cols="30" rows="10">5</textarea></td>
                          <td class="column4 style28 n"><textarea name="annual_target_3" id="" cols="30" rows="10">4</textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition1_3" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition2_3" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition3_3" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition4_3" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" class="total_sum_value" name="total_sum_value_3" id="" cols="30" rows="10"></textarea></td>
                          <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control" id="" name="branch_responsible_implementation_3">
                                          <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                        </tr>
                        <tr class="row99">
                          <input type="hidden" name="row_id" value="4">
                          <td class="column0 style26 s"><textarea name="activities_4" id="" cols="30" rows="10">[২.৩] ত্রৈমাসিক ভিত্তিতে পরিবীক্ষণ এবং ত্রৈমাসিক পরিবীক্ষণ প্রতিবেদন উর্ধ্বতন কর্তৃপক্ষের নিকট প্রেরণ</textarea></td>
                          <td class="column1 style26 s"><textarea name="performance_index_4" id="" cols="30" rows="10">[২.৩.১] ত্রৈমাসিক প্রতিবেদন প্রেরিত</textarea></td>
                          <td class="column2 style27 s"><textarea name="unit_4" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                          <td class="column3 style28 n"><textarea name="performance_index_values_4" id="" cols="30" rows="10">3</textarea></td>
                          <td class="column4 style28 n"><textarea name="annual_target_4" id="" cols="30" rows="10">4</textarea></td>
                            <td class="column6 style7 s"><textarea type="number" name="acquisition1_4" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition2_4" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition3_4" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition4_4" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" class="total_sum_value" name="total_sum_value_4" id="" cols="30" rows="10"></textarea></td>
                          <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control" id="" name="branch_responsible_implementation_4">
                                          <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                        </tr>
                        <tr class="row100">
                          <input type="hidden" name="row_id" value="5">
                          <td class="column0 style26 s"><textarea name="activities_5" id="" cols="30" rows="10">[২.৪] অভিযোগ প্রতিকার ব্যবস্থাপনা বিষয়ে স্টেকহোল্ডারগণের সমন্বয়ে অবহিতকরণ সভা</textarea> </td>
                          <td class="column1 style26 s"><textarea name="performance_index_5" id="" cols="30" rows="10">[২.৪.১] সভা অনুষ্ঠিত</textarea></td>
                          <td class="column2 style27 s"><textarea name="unit_5" id="" cols="30" rows="10">সংখ্যা</textarea></td>
                          <td class="column3 style28 n"><textarea name="performance_index_values_5" id="" cols="30" rows="10">4</textarea></td>
                          <td class="column4 style28 n"><textarea name="annual_target_5" id="" cols="30" rows="10">2</textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition1_5" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition2_5" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition3_5" id="" cols="30" rows="10"></textarea></td>
                          <td class="column6 style7 s"><textarea type="number" name="acquisition4_5" id="" cols="30" rows="10"></textarea></td>
                           <td class="column6 style7 s"><textarea type="number" class="total_sum_value" name="total_sum_value_5" id="" cols="30" rows="10"></textarea></td>
                          <td class="column7 style6 s">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control" id="" name="branch_responsible_implementation_5">
                                          <option selected >Select Division</option>
                                          @foreach ($testybro as $division)
                                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                          @endforeach
                   
                                        </select>
                                      </div>
                            </td>
                        </tr>
                        <tr class="row101">
                          <input type="hidden" name="row_id" value="5">
                          <td class="column0 style33 s style33" colspan="3"><textarea name="" id="" cols="30" rows="10">উপমোট= (৫টি সূচক)</textarea><input type="text" name="" id="" value=""> </td>
                          <td class="column3 style28 n"><textarea name="" id="" cols="30" rows="10">25</textarea><input type="text" name="" id="" value=""> </td>
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

        if (confirm("Do you want store this form??") == true) {
           
               $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{url("store-form-2.2.3")}}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {
            alert('Form Submitted Successfully!');
            $('#loader').hide();
           location.reload();
            }
        }).done(function () {
            $("#success_msg").html("Data Save Successfully");
          //  window.location.href = "{{url("store-form-2.1")}}";
            location.reload();
        }).fail(function (data, textStatus, jqXHR) {
            $('#loader').hide();
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function (key, value) {
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });

} else {
          text = "You canceled!";
}

       
    });


 $(function () {
       let tbl = $('#myTable');
       tbl.find('tr').each(function () {
           // $this = this;
           $(this).find('textarea[type=number]').bind("keyup", function () {
               calculateSum();
           });
       });
   
       function calculateSum() {
           let tbl = $('#myTable');
           tbl.find('tr').each(function () {
               let sum = 0;
               $(this).find('textarea[type=number]').not('.total_sum_value').each(function () {
                   if (!isNaN(this.value) && this.value.length != 0) {
                       sum += parseFloat(this.value);
                   }
               });
   
               $(this).find('.total_sum_value').val(sum.toFixed(2));
           });
       }
   });

</script>
