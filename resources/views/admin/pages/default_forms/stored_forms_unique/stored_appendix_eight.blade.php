<style>
    input {
        border: none;
        width: 100%;
    }

    ,
    .rel-26 {
        margin_top: 50px;
        margin-bottom: 50px;
    }

    

</style>
<div class="content">

    <div class="page-inner">

  <form action="{{ url('update-form-appendix_eight_update') }}" method="post" id="submitForm">
        @csrf
         <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">
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
                      @foreach ($budget_sub as $budget_sub)
                      <input type="hidden" name="budget_sub_id" value="{{ $budget_sub-> id }}">
                      <input type="hidden" name="unique_form_id" value="{{$budget_sub->unique_form_id}}">
                          <li><input type="text" name="budget_sub_{{ $budget_sub -> id }}" id="" value="{{ $budget_sub -> budget_sub }}"></li>
                      @endforeach
                      
                      
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
                        @foreach ($outcomes as $outcomes)
                              <tr>
                                <input type="hidden" name="unique_form_id" value="{{$outcomes->unique_form_id}}">
                          <input type="hidden" name="out_eight_id[]" value="{{ $outcomes -> id }}">
                          <td><input type="text" name="out_effect_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> out_effect }}"></td>
                          <td><input type="text" name="out_indicator_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> out_indicator }}"></td>
                          <td><input type="text" name="out_unit_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> out_unit }}"></td>
                          <td><input type="text" name="out_achivement_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> out_achivement }}"></td>
                          <td><input type="text" name="out_achivement_star_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> out_achivement_star }}"></td>
                          <td><input type="text" name="out_target_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> out_target }}"></td>
                          <td><input type="text" name="out_projection_one_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> out_projection_one }}"></td>
                          <td><input type="text" name="out_projection_two_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> out_projection_two }}"></td>
                          <td><input type="text" name="out_names_{{ $outcomes -> id }}" id="" value="{{ $outcomes -> out_names }}"></td>
                      </tr>
                        @endforeach
                      
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
                        @foreach ($first_part as $first_part)
                            <tr>
                              <input type="hidden" name="unique_form_id" value="{{$first_part->unique_form_id}}">
                            <input type="hidden" name="first_part_id[]" id="" value="{{ $first_part-> id }}">
                              <td><input type="text" name="purpose_{{ $first_part-> id }}" id="" value="{{ $first_part-> purpose }}"></td>
                              <td><input type="text" name="purpose_value_{{ $first_part-> id }}" id="" value="{{ $first_part-> purpose_value }}"></td>
                              <td><input type="text" name="activity_{{ $first_part-> id }}" id="" value="{{ $first_part-> activity }}"></td>
                              <td><input type="text" name="indicator_{{ $first_part-> id }}" id="" value="{{ $first_part-> indicator }}"></td>
                              <td><input type="text" name="unit_{{ $first_part-> id }}" id="" value="{{ $first_part-> unit }}"></td>
                              <td><input type="text" name="indicator_value_{{ $first_part-> id }}" id="" value="{{ $first_part-> indicator_value }}"></td>
                              <td><input type="text" name="achivement_{{ $first_part-> id }}" id="" value="{{ $first_part-> achivement }}"></td>
                              <td><input type="text" name="achivement_star_{{ $first_part-> id }}" id="" value="{{ $first_part-> achivement_star }}"></td>
                              <td><input type="text" name="target_extraordinary_{{ $first_part-> id }}" id="" value="{{ $first_part-> target_extraordinary }}"></td>
                              <td><input type="text" name="target_excellent_{{ $first_part-> id }}" id="" value="{{ $first_part-> target_excellent }}"></td>
                              <td><input type="text" name="target_fine_{{ $first_part-> id }}" id="" value="{{ $first_part-> target_fine }}"></td>
                              <td><input type="text" name="target_value_{{ $first_part-> id }}" id="" value="{{ $first_part-> target_value }}"></td>
                              <td><input type="text" name="target_below_{{ $first_part-> id }}" id="" value="{{ $first_part-> target_below }}"></td>
                              <td><input type="text" name="projection_first_{{ $first_part-> id }}" id="" value="{{ $first_part-> projection_first }}"></td>
                              <td><input type="text" name="projection_second_{{ $first_part-> id }}" id="" value="{{ $first_part-> projection_second }}"></td>
                          </tr>
                        @endforeach
                          
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
                         @foreach ($second_part as $second_part)
                             <tr>
                                <input type="hidden" name="unique_form_id" value="{{$second_part->unique_form_id}}">
                            <input type="hidden" name="second_part_id[]" id="" value="{{ $second_part-> id}}">
                              <td><input type="text" name="strategic_purpose_{{ $second_part-> id}}" id="" value="{{ $second_part-> strategic_purpose}}"></td>
                              <td><input type="text" name="strategic_purpose_value_{{ $second_part-> id}}" id="" value="{{ $second_part-> strategic_purpose_value}}"></td>
                              <td><input type="text" name="strategic_activity_{{ $second_part-> id}}" id="" value="{{ $second_part-> strategic_activity}}"></td>
                              <td><input type="text" name="strategic_indicator_{{ $second_part-> id}}" id="" value="{{ $second_part-> strategic_indicator}}"></td>
                              <td><input type="text" name="strategic_unit_{{ $second_part-> id}}" id="" value="{{ $second_part-> strategic_unit}}"></td>
                              <td><input type="text" name="strategic_indicator_value_{{ $second_part-> id}}" id="" value="{{ $second_part-> strategic_indicator_value}}"></td>
                              <td><input type="text" name="strategic_target_extraordinary_{{ $second_part-> id}}" id="" value="{{ $second_part-> strategic_target_extraordinary}}"></td>
                              <td><input type="text" name="strategic_target_excellent_{{ $second_part-> id}}" id="" value="{{ $second_part-> strategic_target_excellent}}"></td>
                              <td><input type="text" name="strategic_target_fine_{{ $second_part-> id}}" id="" value="{{ $second_part-> strategic_target_fine}}"></td>
                              <td><input type="text" name="strategic_target_value_{{ $second_part-> id}}" id="" value="{{ $second_part-> strategic_target_value}}"></td>
                              <td><input type="text" name="strategic_target_below_{{ $second_part-> id}}" id="" value="{{ $second_part-> strategic_target_below}}"></td>
                              <td><input type="text" name="strategic_projection_first_{{ $second_part-> id}}" id="" value="{{ $second_part-> strategic_projection_first}}"></td>
                              <td><input type="text" name="strategic_projection_second_{{ $second_part-> id}}" id="" value="{{ $second_part-> strategic_projection_second}}"></td>
                          </tr>
                         @endforeach
                      </tbody>
                  </table>
                  </div>
                 
              </div>
              <div id="loader" class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
              <div class="mt-4 mb-4 input-final">
               @foreach ($userforms as $userforms)
         @if ($userforms->duration > date('Y-m-d'))
             <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
              <button type="submit" class="btn btn-danger">সংশোধন</button>
         @endif
                 @endforeach
              </div>
          </form>


            <script type="text/javascript">
                $(document).ready(function () {
                    $('#basic-datatable').DataTable({});
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
                        url: "{{url("update-form-appendix_eight_update")}}",
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (data, textStatus, jqXHR) {
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
                            $("#" + key).after(
                                "<span class='error_msg' style='color: red;font-weigh: 600'>" +
                                value + "</span>");
                        });
                    });
                });

            </script>
