
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
                    <h3>২.২.৪ সেবা প্রদান প্রতিশ্রুতি বাস্তবায়ন কর্মপরিকল্পনা, {{$form_data['form_year']}}</h3> 
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
                              <td>total</td>
                          </tr>
                      </thead>
                      <tbody>
                          <div>
                            <tr class="row107">
                              <input type="hidden" name="row_id" value="1">
                                <td class="column0 style26 s"> <textarea name="activities_1" id="" cols="30" rows="10">
                                    [১.১] সেবা প্রদান প্রতিশ্রুতি পরিবীক্ষণ কমিটির সিদ্ধান্ত বাস্তবায়ন
                                  </textarea></td>
                                <td class="column1 style26 s"> <textarea name="performance_index_1" id="" cols="30" rows="10">
                                    [১.১.১] সিদ্ধান্ত বাস্তবায়িত
                                  </textarea></td>
                                <td class="column2 style27 s"> <textarea name="unit_1" id="" cols="30" rows="10">
                                    %
                                  </textarea></td>
                                <td class="column3 style28 n"> <textarea name="performance_index_values_1" id="" cols="30" rows="10">
                                  8
                                  </textarea></td>
                                <td class="column4 style37 n"> <textarea  name="annual_target_1" id="" cols="30" rows="10">
                                  $-5000445]0.2f%
                                  </textarea> </td>
                                <td class="column5 style25 n"> <textarea type="number" name="acquisition1_1" id="txtCal1" cols="30" rows="10">
                                  $-5000445]0.2f%
                                  </textarea></td>
                                <td class="column6 style25 n"> <textarea type="number" name="acquisition2_1" id="txtCal1" cols="30" rows="10">
                                  $-5000445]0.2f%
                                  </textarea></td>
                                <td class="column6 style25 n"> <textarea type="number" name="acquisition3_1" id="txtCal1" cols="30" rows="10">
                                  $-5000445]0.2f%
                                  </textarea> 
                                </td>
                                <td class="column6 style25 n"> <textarea type="number" name="acquisition4_1" id="txtCal1" cols="30" rows="10">
                                  $-5000445]0.2f%
                                  </textarea> </td>
                                <td class="column6 style25 n">
                                  <textarea name="total_sum_value_1" type="number" class="total_sum_value" id="total_sum_value_1" cols="30" rows="10">
                                    $-5000445]0.2f%
                                    </textarea> </td>

                                <td class="column7 style23 s">
                                  <div class="form-group">
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
                              <tr class="row108">
                              <input type="hidden" name="row_id" value="2">
                                <td class="column0 style26 s"> <textarea name="activities_2" id="" cols="30" rows="10">
                                  [১.২] সেবা প্রদান প্রতিশ্রুতি ত্রৈমাসিক ভিত্তিতে হালনাগাদকরণ
                                  </textarea>   </td>
                                <td class="column1 style26 s"> <textarea name="performance_index_2" id="" cols="30" rows="10">
                                  [১.২.১] ওয়েবসাইটে প্রতি ত্রৈমাসিকে হালনাগাদকৃত
                                  </textarea> </td>
                                <td class="column2 style26 s"> <textarea name="unit_2" id="" cols="30" rows="10">
                                  সংখ্যা
                                  </textarea> </td>
                                <td class="column3 style45 n"> <textarea name="performance_index_values_2" id="" cols="30" rows="10">
                                  5
                                  </textarea> </td>
                                <td class="column4 style28 n"> <textarea name="annual_target_2" id="" cols="30" rows="10">
                                  4
                                  </textarea> </td>
                                <td class="column5 style66 n"> <textarea type="number" name="acquisition1_2" id="txtCal2" cols="30" rows="10">
                                  1
                                  </textarea> </td>
                                <td class="column6 style66 n"> <textarea type="number" name="acquisition2_2" id="txtCal2" cols="30" rows="10">
                                  1
                                  </textarea> </td>
                                <td class="column6 style66 n"> <textarea type="number" name="acquisition3_2" id="txtCal2" cols="30" rows="10">
                                  1
                                  </textarea> </td>
                                <td class="column6 style66 n"> <textarea type="number" name="acquisition4_2" id="txtCal2" cols="30" rows="10">
                                  1
                                  </textarea> </td>
                                  <td class="column6 style25 n">
                                    <textarea name="total_sum_value_2" class="total_sum_value" type="number" id="total_sum_value_2" cols="30" rows="10">
                                      $-5000445]0.2f%
                                      </textarea>
                                    </td>
                                <td class="column7 style23 s">
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Division</label>
                                    <select class="form-control select2" id="" name="branch_responsible_implementation_2">
                                     <option selected >Select Division</option>
                                      @foreach ($testybro as $division)
                                          <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                      @endforeach
               
                                    </select>
                                  </div>
                                </td>
                              </tr>
                              <tr class="row109">
                              <input type="hidden" name="row_id" value="3">
                                <td class="column0 style26 s"> <textarea name="activities_3" id="" cols="30" rows="10">
                                  [২.১] সেবা প্রদান প্রতিশ্রুতি বিষয়ক  প্রশিক্ষণ আয়োজন
                                  </textarea>  </td>
                                <td class="column1 style26 s"> <textarea name="performance_index_3" id="" cols="30" rows="10">
                                  [১.১.১] প্রশিক্ষণ আয়োজিত
                                  </textarea> </td>
                                <td class="column2 style27 s"> <textarea name="unit_3" id="" cols="30" rows="10">
                                  সংখ্যা
                                  </textarea> </td>
                                <td class="column3 style28 n"> <textarea name="performance_index_values_3" id="" cols="30" rows="10">
                                  5
                                  </textarea> </td>
                                <td class="column4 style28 n"> <textarea name="annual_target_3" id="" cols="30" rows="10">
                                    4
                                  </textarea> </td>
                                <td class="column5 style23 s"> <textarea type="number" name="acquisition1_3" id="txtCal3" cols="30" rows="10">
                                  -
                                  </textarea></td>
                                <td class="column5 style23 s"> <textarea type="number" name="acquisition2_3" id="txtCal3" cols="30" rows="10">
                                  -
                                  </textarea></td>
                                <td class="column5 style23 s"> <textarea type="number" name="acquisition3_3" id="txtCal3" cols="30" rows="10">
                                  -
                                  </textarea></td>
                                <td class="column6 style23 s"> <textarea type="number" name="acquisition4_3" id="txtCal3" cols="30" rows="10">
                                  -
                                  </textarea> </td>
                                <td class="column6 style23 s"> <textarea type="number" class=" " name="total_sum_value_3" id="total_sum_value_3" cols="30" rows="10">
                                  -
                                  </textarea> </td>
                                <td class="column7 style23 s">
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Division</label>
                                    <select class="form-control select2" id="" name="branch_responsible_implementation_3">
                                     <option selected >Select Division</option>
                                      @foreach ($testybro as $division)
                                          <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                      @endforeach
               
                                    </select>
                                  </div>
                                </td>
                              </tr>
                              <tr class="row110">
                              <input type="hidden" name="row_id" value="4">
                                <td class="column0 style26 s"> <textarea name="activities_4" id="" cols="30" rows="10">
                                  [২.২]  সেবা প্রদান বিষয়ে স্টেকহোল্ডারগণের সমন্বয়ে অবহিতকরণ সভা আয়োজন
                                  </textarea> </td>
                                <td class="column1 style26 s"> <textarea name="performance_index_4" id="" cols="30" rows="10">
                                  [১.৩.১]  অবহিতকরণ সভা অনুষ্ঠিত
                                  </textarea> </td>
                                <td class="column2 style27 s"> <textarea name="unit_4" id="" cols="30" rows="10">
                                  সংখ্যা
                                  </textarea> </td>
                                <td class="column3 style28 n"> <textarea name="performance_index_values_4" id="" cols="30" rows="10">
                                  7
                                  </textarea> </td>
                                <td class="column4 style28 n"> <textarea name="annual_target_4" id="" cols="30" rows="10">
                                  2
                                  </textarea> </td>
                                <td class="column5 style23 s"> <textarea type="number" name="acquisition1_4" id="txtCal4" cols="30" rows="10">
                                  -
                                  </textarea> </td>
                                <td class="column5 style23 s"> <textarea type="number" name="acquisition2_4" id="txtCal4" cols="30" rows="10">
                                  -
                                  </textarea> </td>
                                <td class="column5 style23 s"> <textarea type="number" name="acquisition3_4" id="txtCal4" cols="30" rows="10">
                                  -
                                  </textarea> </td>
                                <td class="column5 style23 s"> <textarea type="number" name="acquisition4_4" id="txtCal4" cols="30" rows="10">
                                  -
                                  </textarea> </td>
                                  <td class="column6 style23 s"> <textarea type="number" class="total_sum_value" name="total_sum_value_4" id="total_sum_value_4" cols="30" rows="10">
                                    -
                                    </textarea> </td>
                                <td class="column7 style23 s">
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Division</label>
                                    <select class="form-control select2" id="" name="branch_responsible_implementation_4">
                                     <option selected >Select Division</option>
                                      @foreach ($testybro as $division)
                                          <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                                      @endforeach
               
                                    </select>
                                  </div>
                                </td>
                              </tr>
                              <tr class="row111">
                              <input type="hidden" name="" value="">
                                <td class="column0 style33 s style33" colspan="3"><input type="text" name="" id="" value="উপমোট= (৪টি সূচক)"></td>
                                <td class="column3 style28 n"><input type="text" name="" id="" value="25"></td>
                                <td class="column4 style23 null"></td>
                                <td class="column5 style23 null"></td>
                                <td class="column6 style23 null"></td>
                                <td class="column7 style23 null"> </td>
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

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{url("store-form-2.2.4")}}",
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

    // $("#myTable").on('textarea', '#txtCal1', function () {
    //    let calculated_total_sum = 0;
     
    //    $("#myTable #txtCal1").each(function () {
    //        let get_textbox_value = $(this).val();
    //        if ($.isNumeric(get_textbox_value)) {
    //           calculated_total_sum += parseFloat(get_textbox_value);
    //           }                  
    //         });
    //          $("textarea#total_sum_value_1").val(calculated_total_sum);
    //          console.log(calculated_total_sum);
	// });

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
