
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


     <form  id="submitForm" method="post">
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
                    <div style="text-align: right;">
                      <h4>পরিশিষ্ট-৪</h4>
                    </div>
                    <div>
                      <h6>বিষয়</h6>
                    </div>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li><input type="text" name="budget_sub[]" id="" value="৭। আর্থিক প্রতিষ্ঠান বিভাগের চলমান ২০১৯-২০ অর্থবছরের বাজেট বাস্তবায়ন অগ্রগতি পরিবীক্ষণ। (ত্রৈমাসিক/ষান্মাষিক/বাৎসরিক)"></li>
                      <li><input type="text" name="budget_sub[]" id="" value="৮। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থা/প্রকল্পসমুহের চলমান ২০১৯-২০ অর্থবছরের বাজেট বাস্তবায়ন অগ্রগতি পরিবীক্ষণ। (ত্রৈমাসিক/ষান্মাষিক/বাৎসরিক)"></li>
                    </ul>
                  </div>
                  <div class="mt-4 item-table">
                      <h6 align="right">(হাজার টাকায়)</h6>
                      <table border="1" width="100%">
                        <thead>
                            <tr>
                                <td>শাখা/অধিশাখা/প্রতিষ্ঠান/প্রকল্পের নাম</td>
                                <td>বাজেট ২০১৯-২০</td>
                                <td>লক্ষ্যমাত্রা/ প্রকৃত ব্যয়</td>
                                <td>১ম কোয়ার্টার(জুলাই-সেপ্টেম্বর ১৯)</td>
                                <td>২য় কোয়ার্টার(অক্টোবর-ডিসেম্বর ১৯)</td>
                                <td>৩য় কোয়ার্টার(জানুয়ারি-মার্চ ২০)</td>
                                <td>৪র্থ কোয়ার্টার(এপ্রিল-জুন ২০)</td>
                                <td>(১ম-৪র্থ) কোয়ার্টার(জুলাই ১৯-জুন ২০)</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <input type="hidden" name="row_id" value="1">
                                <td rowspan="3"><input type="text" name="branch_1" id="" value="আর্থিক প্রতিষ্ঠান বিভাগ"></td>
                                <td rowspan="3"><input type="text" name="budget_1" id="" value=""></td>
                                <td><input type="text" name="target_1" id="" value="লক্ষ্যমাত্রা"></td>
                                <td><input type="text" name="first_quarter_1" id="" value=""></td>
                                <td><input type="text" name="second_quarter_1" id="" value=""></td>
                                <td><input type="text" name="third_quarter_1" id="" value=""></td>
                                <td><input type="text" name="fourth_quarter_1" id="" value=""></td>
                                <td><input type="text" name="first_fourth_quarter_1" id="" value=""></td>
                            </tr>
                            <tr>
                                 <input type="hidden" name="row_id" value="2">
                                <td><input type="text" name="target_2" id="" value="প্রকৃত ব্যয়"></td>
                                <td><input type="text" name="first_quarter_2" id="" value=""></td>
                                <td><input type="text" name="second_quarter_2" id="" value=""></td>
                                <td><input type="text" name="third_quarter_2" id="" value=""></td>
                                <td><input type="text" name="fourth_quarter_2" id="" value=""></td>
                                <td><input type="text" name="first_fourth_quarter_2" id="" value=""></td>
                            </tr>
                            <tr>
                                 <input type="hidden" name="row_id" value="3">
                                <td><input type="text" name="target_3" id="" value="শতকরা হার"></td>
                                <td><input type="text" name="first_quarter_3" id="" value=""></td>
                                <td><input type="text" name="second_quarter_3" id="" value=""></td>
                                <td><input type="text" name="third_quarter_3" id="" value=""></td>
                                <td><input type="text" name="fourth_quarter_3" id="" value=""></td>
                                <td><input type="text" name="first_fourth_quarter_3" id="" value=""></td>
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
            url: "{{url("store-appendix_four")}}",
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
