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
                    <a href="#">{{__('budget_branch')}}</a>
                </li>
            </ul>
        </div>

       <form action="{{ url('update-form-appendix_two_update') }}" method="post" id="submitForm">
        @csrf
              <div class="mt-4 item">
                <div class="header-item">
                    <h3> বিষয়:বাজেট</h3>
                    <div style="text-align: right;">
                      <h4>পরিশিষ্ট-২</h4>
                    </div>
                    <div>
                      <h6>বিষয়</h6>
                    </div>
                  </div>
                  <div class="listed-content">
                    <ul>
                        @foreach ($lines as $lines1)
                        <input type="hidden" name="row_id_l1[]" value="{{ $lines1 ->id }}">
                            <li><input type="text" name="appendix_one_subject_{{ $lines1 ->id }}" id="" value="{{ $lines1->appendix_one_subject  }}"></li>
                        @endforeach


                        @foreach ($lines as $lines1)
                        <input type="hidden" name="row_id_l2[]" value="{{ $lines1 ->id }}">
                            <li><input type="text" name="appendix_two_subject_{{ $lines1->id }}" id="" value="{{ $lines1->appendix_two_subject  }}"></li>
                        @endforeach
                       
                        
                    </ul>
                  </div>
                  <div class="mt-4 item-table">
                      <h4 align="center">ছক-ক (পরিচালন বাজেট)</h4>
                      <h6 align="center">@foreach ($lines as $lines1)
                          <input type="text" name="appendix_one_ka[]" id="" value="{{ $lines1->appendix_one_ka  }}">
                      @endforeach</h6>
                      <h6 align="right">(হাজার টাকায়)</h6>
                      <table border="1">
                        <thead>
                          <tr class="row72">
                            <td class="column0 style42 s style43" rowspan="2">মন্ত্রণালয়/বিভাগ/দপ্তর/সংস্থা/প্রকল্প</td>
                            <td class="column1 style37 s">বাজেট</td>
                            <td class="column2 style39 s">সংশোধিত</td>
                            <td class="column3 style42 s style43" rowspan="2">প্রস্তাবিত বাজেট ২০২০-২১</td>
                            <td class="column4 style44 s style45" colspan="2">প্রক্ষেপন</td>
                          </tr>
                          <tr class="row73">
                            <td class="column1 style38 s">২০১৯-২০</td>
                            <td class="column2 style38 s">২০১৯-২০</td>
                            <td class="column4 style38 s">২০২১-২২</td>
                            <td class="column5 style38 s">২০২২-২৩</td>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($table_ka as $table_ka)
                                
                           
                          <tr class="row74">
                              {{-- <td class="column0 style7 s"><input type="text" name="serial_{{$item->id}}" id=""
                                    value="{{$item->serial}}"></td> --}}
                                    <input type="hidden" name="row_id_ka[]" value="{{$table_ka->id}}">
                            <td class="column0 style40 null"><input type="text" name="ministry_{{$table_ka ->id}}" id="" value="{{ $table_ka ->ministry }}"></td>
                            <td class="column1 style41 null"><input type="text" name="budget_{{$table_ka ->id}}" id="" value="{{ $table_ka ->budget }}"></td>
                            <td class="column1 style41 null"><input type="text" name="revised_{{$table_ka ->id}}" id="" value="{{ $table_ka ->revised }}"></td>
                            <td class="column1 style41 null"><input type="text" name="proposed_budget_{{$table_ka ->id}}" id="" value="{{ $table_ka ->proposed_budget }}"></td>
                            <td class="column1 style41 null"><input type="text" name="projection_1_{{$table_ka ->id}}" id="" value="{{ $table_ka ->projection_1 }}"></td>
                            <td class="column1 style41 null"><input type="text" name="projection_2_{{$table_ka ->id}}" id="" value="{{ $table_ka ->projection_2 }}"></td>
                          </tr>

                            @endforeach
                        </tbody>
                      </table>
                  </div>
                  <div class="mt-4 item-table">
                      <h4 align="center"> ছক-খ (উন্নয়ন বাজেট)</h4>
                      <h6 align="center">@foreach ($lines as $lines1)
                          <input type="text" name="appendix_one_kha[]" id="" value="{{ $lines1->appendix_one_kha  }}">
                      @endforeach</h6>
                      <h6 align="right"> (হাজার টাকায়)</h6>
                      <table border="1">
                        <thead>
                          <tr class="row72">
                            <td class="column0 style54 s style55">মন্ত্রণালয়/বিভাগ/দপ্তর/সংস্থা/প্রকল্প</td>
                            <td class="column2 style50 s" rowspan="3">বাজেট ২০১৯-২০&nbsp;</td>
                            <td class="column2 style50 s" rowspan="3">সংশোধিত ২০১৯-২০&nbsp;</td>
                            <td class="column3 style57 s style58" colspan="6">প্রস্তাবিত বাজেট ২০২০-২১</td>
                            <td class="column9 style59 s style62" colspan="2" rowspan="2">প্রক্ষেপণ</td>
                          </tr>
                          <tr class="row73">
                            <td class="column0 style52 s" rowspan="2">উন্নয়ন&nbsp;প্রকল্পের নাম</td>
                            <td class="column3 style54 s style55" rowspan="2">ধরণ</td>
                            <td class="column4 style57 s style58" colspan="2">জিওবি</td>
                            <td class="column6 style57 s style58" colspan="2">পিএ</td>
                            <td class="column8 style63 s style64" rowspan="2">মোট</td>
                          </tr>
                          <tr class="row73">
                            <td class="column4 style49 s">GoB</td>
                            <td class="column5 style49 s">GoB (RPA)</td>
                            <td class="column6 style49 s">RPA (Others)</td>
                            <td class="column7 style49 s">DPA</td>
                            <td class="column9 style53 s">&nbsp;২০২১-২২</td>
                            <td class="column10 style53 s">&nbsp;২০২২-২৩</td>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($table_kha as $table_kha)
                        <tr class="row83">
                             <input type="hidden" name="row_id_kha[]" value="{{$table_kha->id}}">
                            <td class="column0 style65 null"><input type="text" name="ministryss_{{$table_kha->id}}" id="" value="{{$table_kha->ministryss}}"></td>
                            <td class="column1 style67 null"> <input type="text" name="budget_{{$table_kha->id}}" id="" value="{{$table_kha->budget}}"></td>
                            <td class="column2 style67 null"> <input type="text" name="revised_{{$table_kha->id}}" id="" value="{{$table_kha->revised}}"></td>
                            <td class="column3 style53 null"> <input type="text" name="revenue_{{$table_kha->id}}" id="" value="{{$table_kha->revenue}}"></td>
                            <td class="column4 style51 null"> <input type="text" name="gob_1_{{$table_kha->id}}" id="" value="{{$table_kha->gob_1}}"></td>
                            <td class="column5 style51 null"> <input type="text" name="gob_2_{{$table_kha->id}}" id="" value="{{$table_kha->gob_2}}"></td>
                            <td class="column6 style51 null"> <input type="text" name="rpa_1_{{$table_kha->id}}" id="" value="{{$table_kha->rpa_1}}"></td>
                            <td class="column7 style51 null"> <input type="text" name="dpa_1_{{$table_kha->id}}" id="" value="{{$table_kha->dpa_1}}"></td>
                            <td class="column8 style65 null"> <input type="text" name="total_{{$table_kha->id}}" id="" value="{{$table_kha->total}}"></td>
                            <td class="column9 style65 null"> <input type="text" name="projection_1_{{$table_kha->id}}" id="" value="{{$table_kha->projection_1}}"></td>
                            <td class="column10 style65 null"> <input type="text" name="projection_2_{{$table_kha->id}}" id="" value="{{$table_kha->projection_2}}"></td>
                          </tr>

        
                           @endforeach
                
                        </tbody>
                      </table>
                  </div>
              </div>
              <div class="mt-4 mb-4 input-final">
                   <div id="loader" class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
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
                        url: "{{url("update-form-appendix_two_update")}}",
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
