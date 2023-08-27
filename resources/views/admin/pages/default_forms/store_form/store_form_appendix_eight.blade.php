
        <style>
{
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


      <form id="submitForm" method="post">
            @csrf
            <input type="hidden" name="form_unique_id" class="form_unique_id" value="{{$form_data['unique_form_id']}}">
            <input type="hidden" name="unit_office_to" value="{{$form_data['unit_office_to']}}">
            <input type="hidden" name="unit_office" value="{{$form_data['unit_office']}}">
            <input type="hidden" name="office" value="{{$form_data['office']}}">
            <input type="hidden" name="department" value="{{$form_data['department']}}">
            <input type="hidden" name="ministry" value="{{$form_data['ministry']}}">
            <input type="hidden" name="form_id" value="{{$form_data['form_id']}}">
            <input type="hidden" name="form_year" value="{{$form_data['form_year']}}">
            <div class="mt-4 item">
                <div class="header-item">
                    <div style="text-align: center;">
                      <h4>বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ)</h4>
                    </div>
                    <div style="text-align: right;">
                      <h4>পরিশিষ্ট-৮</h4>
                    </div>
                    <div>
                      <h6>বিষয়</h6>
                    </div>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li><input type="text" name="budget_sub[]" id="" value="১। আর্থিক প্রতিষ্ঠান বিভাগের শাখা/অধিশাখা সংশ্লিষ্ট ২০২০-২১ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর প্রণয়ন সংক্রান্ত প্রতিবেদন প্রেরণ। (বাৎসরিক)"></li>
                      <li><input type="text" name="budget_sub[]" id="" value="২। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন রেগুলেটরি অথরিটি সংশ্লিষ্ট ২০২০-২১ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর প্রণয়ন সংক্রান্ত প্রতিবেদন প্রেরণ। (বাৎসরিক)"></li>
                      <li><input type="text" name="budget_sub[]" id="" value="৩। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর-সংস্থা সংশ্লিষ্ট ২০২০-২১ অর্থবছরের বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) এর প্রণয়ন সংক্রান্ত প্রতিবেদন প্রেরণ। (বাৎসরিক)">
                      </li>
                    </ul>
                  </div>
                  <div class="header-item">
                    <div style="text-align: center;">
                      <h4>সেকশন ২</h4>
                      <h4>মন্ত্রণালয়/বিভাগের বিভিন্ন কার্যক্রমের চূড়ান্ত <br>
                        ফলাফল/প্রভাব (Outcome/Impact)</h4>
                    </div>
                  </div>
                  <div class="listed-content">
                    <table border="1" width="100%">
                      <thead>
                          <tr>
                              <td rowspan="2">চূড়ান্ত ফলাফল/প্রভাব</td>
                              <td rowspan="2">চূড়ান্ত ফলাফল সূচক</td>
                              <td rowspan="2">একক</td>
                              <td rowspan="2">প্রকৃত অর্জন 
                                  ২০১৭-১৮
                                  </td>
                              <td rowspan="2">প্রকৃত অর্জন*
                                  ২০১৮-১৯
                                  </td>
                              <td rowspan="2">লক্ষ্যমাত্রা 
                                  ২০১৯-২০
                                  </td>
                              <td colspan="2">প্রক্ষেপণ</td>
                              <td rowspan="2">নির্ধারিত লক্ষ্যমাত্রা অর্জনের 
                                  ক্ষেত্রে যৌথভাবে দায়িত্বপ্রাপ্ত 
                                  মন্ত্রণালয়/বিভাগ/ সংস্হাসমূহের নাম
                                  </td>
                          </tr>
                          <tr>
                              <td>২০২০-২১</td>
                              <td>২০২১-২২</td>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <input type="hidden" name="out_eight[]" value="1">
                          <td><input type="text" name="out_effect_3" id="" value=""></td>
                          <td><input type="text" name="out_indicator_3" id="" value=""></td>
                          <td><input type="text" name="out_unit_3" id="" value=""></td>
                          <td><input type="text" name="out_achivement_3" id="" value=""></td>
                          <td><input type="text" name="out_achivement_star_3" id="" value=""></td>
                          <td><input type="text" name="out_target_3" id="" value=""></td>
                          <td><input type="text" name="out_projection_one_3" id="" value=""></td>
                          <td><input type="text" name="out_projection_two_3" id="" value=""></td>
                          <td><input type="text" name="out_names_3" id="" value=""></td>
                      </tr>
                      </tbody>
                  </table>
                  </div>
                  <div class="header-item">
                    <div style="text-align: center;">
                      <h4>সেকশন ৩</h4>
                      <h4>কৌশলগত উদ্দেশ্য, অগ্রাধিকার, কার্যক্রম, কর্মসম্পাদন সূচক এবং<br> লক্ষ্যমাত্রাসমূহ</h4>
                    </div>
                  </div>
                  <div class="listed-content">
                    <table border="1" width="100%">
                      <thead>
                          <tr>
                              <td rowspan="3">কৌশলগত 
                                  উদ্দেশ্য
                                  </td>
                              <td rowspan="3">কৌশলগত উদ্দেশ্যের মান</td>
                              <td rowspan="3">কার্যক্রম</td>
                              <td rowspan="3">কর্মসম্পাদন সূচক</td>
                              <td rowspan="3">একক</td>
                              <td rowspan="3">কর্মসম্পাদন সূচকের মান</td>
                              <td rowspan="3">প্রকৃত অর্জন 
                                  ২০১৭-১৮
                                  </td>
                              <td rowspan="3">প্রকৃত অর্জন*
                                  ২০১৮-১৯
                                  </td>
                              <td colspan="5">লক্ষ্যমাত্রা/নির্ণায়ক ২০১৯-২০
                                  </td>
                              <td rowspan="3">প্রক্ষেপণ 2020-21</td>
                              <td rowspan="3">প্রক্ষেপণ 2021-22</td>
                          </tr>
                          <tr>
                              <td>অসাধারণ</td>
                              <td>অতি উত্তম</td>
                              <td>উত্তম</td>
                              <td>চলতি মান</td>
                              <td>চলতি মানের নিম্নে</td>
                          </tr>
                          <tr>
                              <td>১০০%</td>
                              <td>৯০%</td>
                              <td>৮০%</td>
                              <td>৭০%</td>
                              <td>৬০%</td>
                          </tr>
                          <tr>
                              <td colspan="15"><input type="text" name="objective_1" id="" value="মন্ত্রণালয়/বিভাগের কৌশলগত উদ্দেশ্যসমূহ "></td>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <input type="hidden" name="row_id_first[]" id="" value="1">
                              <td><input type="text" name="purpose_1" id="" value=""></td>
                              <td><input type="text" name="purpose_value_1" id="" value=""></td>
                              <td><input type="text" name="activity_1" id="" value=""></td>
                              <td><input type="text" name="indicator_1" id="" value=""></td>
                              <td><input type="text" name="unit_1" id="" value=""></td>
                              <td><input type="text" name="indicator_value_1" id="" value=""></td>
                              <td><input type="text" name="achivement_1" id="" value=""></td>
                              <td><input type="text" name="achivement_star_1" id="" value=""></td>
                              <td><input type="text" name="target_extraordinary_1" id="" value=""></td>
                              <td><input type="text" name="target_excellent_1" id="" value=""></td>
                              <td><input type="text" name="target_fine_1" id="" value=""></td>
                              <td><input type="text" name="target_value_1" id="" value=""></td>
                              <td><input type="text" name="target_below_1" id="" value=""></td>
                              <td><input type="text" name="projection_first_1" id="" value=""></td>
                              <td><input type="text" name="projection_second_1" id="" value=""></td>
                          </tr>
                      </tbody>
                  </table>
                  </div>
                  <div class="header-item">
                    <div style="text-align: center;">
                      <h4>সেকশন ৩</h4>
                      <h4>কৌশলগত উদ্দেশ্য, অগ্রাধিকার, কার্যক্রম, কর্মসম্পাদন সূচক এবং<br> লক্ষ্যমাত্রাসমূহ</h4>
                      <h4 align="left">আবশ্যিক কৌশলগত উদ্দেশ্য ২০১৯-২০</h4>
                    </div>
                  </div>
                  <div class="listed-content">
                    <table border="1" width="100%">
                      <thead>
                          <tr>
                              <td rowspan="3">কৌশলগত 
                                  উদ্দেশ্য
                                  </td>
                              <td rowspan="3">কৌশলগত উদ্দেশ্যের মান</td>
                              <td rowspan="3">কার্যক্রম</td>
                              <td rowspan="3">কর্মসম্পাদন সূচক</td>
                              <td rowspan="3">একক</td>
                              <td rowspan="3">কর্মসম্পাদন সূচকের মান</td>
                              <td colspan="5">লক্ষ্যমাত্রা/নির্ণায়ক ২০১৯-২০
                                  </td>
                              <td rowspan="3">প্রক্ষেপণ 2020-21</td>
                              <td rowspan="3">প্রক্ষেপণ 2021-22</td>
                          </tr>
                          <tr>
                              <td>অসাধারণ</td>
                              <td>অতি উত্তম</td>
                              <td>উত্তম</td>
                              <td>চলতি মান</td>
                              <td>চলতি মানের নিম্নে</td>
                          </tr>
                          <tr>
                              <td>১০০%</td>
                              <td>৯০%</td>
                              <td>৮০%</td>
                              <td>৭০%</td>
                              <td>৬০%</td>
                          </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <input type="hidden" name="row_id_second[]" id="" value="2">
                              <td><input type="text" name="strategic_purpose_2" id="" value=""></td>
                              <td><input type="text" name="strategic_purpose_value_2" id="" value=""></td>
                              <td><input type="text" name="strategic_activity_2" id="" value=""></td>
                              <td><input type="text" name="strategic_indicator_2" id="" value=""></td>
                              <td><input type="text" name="strategic_unit_2" id="" value=""></td>
                              <td><input type="text" name="strategic_indicator_value_2" id="" value=""></td>
                              <td><input type="text" name="strategic_target_extraordinary_2" id="" value=""></td>
                              <td><input type="text" name="strategic_target_excellent_2" id="" value=""></td>
                              <td><input type="text" name="strategic_target_fine_2" id="" value=""></td>
                              <td><input type="text" name="strategic_target_value_2" id="" value=""></td>
                              <td><input type="text" name="strategic_target_below_2" id="" value=""></td>
                              <td><input type="text" name="strategic_projection_first_2" id="" value=""></td>
                              <td><input type="text" name="strategic_projection_second_2" id="" value=""></td>
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
            url: "{{url("store-appendix_eight")}}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {
            alert('Form Submitted Successfully!');
            $('#loader').hide();
//            location.reload();
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
</script>
