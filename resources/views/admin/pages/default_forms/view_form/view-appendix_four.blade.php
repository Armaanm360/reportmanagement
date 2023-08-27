@extends('admin.master')
@section('content')
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
                    <a href="#">{{__('')}}</a>
                </li>
            </ul>
        </div>

       <form action="{{ url('update-form-appendix_four_update') }}" method="post" id="submitForm">
        @csrf
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
                        @foreach ($lines as $lin)
                            <li><input type="text" name="budget_sub_{{ $lin->id }}" id="" value="{{ $lin->budget }}"></li>
                            <input type="hidden" name="budget_id" id="" value="{{ $lin->id }}">
                        @endforeach
                      
                      
                    </ul>
                  </div>
                  <div class="mt-4 item-table">
                      <h6 align="right">(হাজার টাকায়)</h6>
                      <table border="1">
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
                          @foreach ($table_three as $item)
                             <tr>
                              <input type="hidden" name="row_id[]" value="{{ $item ->id }}">
                              <td><input type="text" name="branch_{{ $item ->id }}" id="" value="{{ $item->branch }}"> </td>
                              <td><input type="text" name="budget_{{ $item ->id }}" value="{{ $item->budget }}"></td>
                              <td><input type="text" name="target_{{ $item->id }}" id="" value="{{ $item->target }}"></td>
                              <td><input type="text" name="first_quarter_{{ $item->id }}" value="{{ $item->first_quarter }}"></td>
                              <td><input type="text" name="second_quarter_{{ $item->id }}" value="{{ $item->second_quarter }}"></td>
                              <td><input type="text" name="third_quarter_{{ $item->id }}" value="{{ $item->third_quarter }}"></td>
                              <td><input type="text" name="fourth_quarter_{{ $item->id }}" value="{{ $item->fourth_quarter}}"></td>
                              <td><input type="text" name="first_fourth_quarter_{{ $item->id }}" value="{{ $item->first_fourth_quarter }}"></td>
                          </tr>
                          @endforeach
                        
                      </tbody>
                      </table>
                  </div>
              </div>

               <div id="loader" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
              <div class="mt-4 mb-4 input-final">
                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
              <button type="submit" class="btn btn-danger">সংশোধন</button>
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
                        url: "{{url("update-form-appendix_four_update")}}",
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
            @endsection
