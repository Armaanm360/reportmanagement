
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
                    <div style="text-align: right;">
                      <h4>পরিশিষ্ট-৫</h4>
                    </div>
                    <div>
                      <h6>বিষয়</h6>
                    </div>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li><input type="text" name="budget_sub9[]" id="" value="৯। বাজেট বাস্তবায়ন অগ্রগতি বিষয়ক প্রতিবেদন প্রণয়নের জন্য বাজেটে ঘোষিত গুরুত্বপূর্ণ কার্যক্রম/কর্মসূচির বাস্তবায়ন অগ্রগতি প্রতিবেদন। (ত্রৈমাসিক/ষান্মাষিক/বাৎসরিক)"></li>
                    </ul>
                  </div>
                  <div class="mt-4 item-table">
                    <h6 align="center">
                        <input type="text" name="budget_sub2009[]" id="" value=" ২০০৯-১০ হতে ২০১৯-২০ অর্থবছরে বাজেট বক্তৃতায় ঘোষিত গুরুত্বপূর্ণ কার্যক্রমসমূহ বাস্তবায়ন অগ্রগতির  ১ম প্রান্তিক (জুলাই-সেপ্টেম্বর ২০১৯) প্রতিবেদন">
                       </h6>
                      <h6 align="center">
                          <input type="text" name="budget_sub8[]" id="" value="৮. আতর্ টক প্রতিষ্ঠান তবভাগ, অর্ ট মন্ত্রর্ালয়">
                       </h6>
                      <table border="1">
                        <thead>
                          <tr>
                              <td>অর্থবছর</td>
                              <td>বাজেটে ঘোষিত কার্যক্রম/পরিকল্পনা</td>
                              <td>বাস্তবায়ন অগ্রগতি ২০১৯-২০ (১ম প্রান্তিক)</td>
                              <td>বাস্তবায়নকারী</td>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <input type="hidden" name="row_id" value="1">
                              <td><input type="text" name="fiscal_year_1" id="" value=""></td>
                              <td><input type="text" name="activity_1" id="" value=""></td>
                              <td><input type="text" name="improvement_1" id="" value=""></td>
                              <td><input type="text" name="implemented_1" id="" value=""></td>
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
            url: "{{url("store-appendix_five")}}",
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
