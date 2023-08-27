@extends('admin.master')
@section('content')
<style>
    input{
        border: none;
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
                    <a href="#">{{__('Form 1.1.1')}}</a>
                </li>
            </ul>
        </div>

        <form action="{{ url('update-form-1.2.1') }}" id="submitForm" method="POST">
            @csrf
            <div class="rel-26">
                <h3>২০২১-২২ অর্থবছরের বাজেট বাস্তবায়ন অগ্রগতি</h3>
                 <h5>১.১.১. সচিবালয়:</h5>
                <div>
                            </div>   
                <table border="1" width="100%">
                      <thead>
                        <tr>
                            <td rowspan="2">প্রতিষ্ঠানের নাম</td>
                            <td>বাজেট</td>
                            <td>লক্ষ্যমাত্রা/</td>
                            <td>১ম কোয়ার্টার</td>
                            <td>২য় কোয়ার্টার</td>
                            <td>৩য় কোয়ার্টার</td>
                            <td>৪র্থ কোয়ার্টার</td>
                            <td>(১ম-৪র্থ)  কোয়ার্টার</td>
                        </tr>
                        <tr>
                            <td>২০২১-২২</td>
                            <td>প্রকৃত ব্যয়</td>
                            <td>(জুলাই-সেপ্টেম্বর ২১)</td>
                            <td>(অক্টোবর-ডিসেম্বর ২১)</td>
                            <td>(জানুয়ারি-মার্চ ২২)</td>
                            <td>(এপ্রিল-জুন ২২)</td>
                            <td>(জুলাই ২১- জুন ২২)</td>
                        </tr>
                    </thead>
                      <tbody>
                           @foreach($all_columuns as $row)
                             <?php $sub_rows = count($row->sub_rows) + 1?>
                        <tr class="row1">
                             <input type="hidden" name="row_id[]" value="{{$row->id}}">
                             <td class="column0 style7 s" @if($sub_rows != 0) rowspan="{{$sub_rows}}" @endif><input type="text"  name="activities_{{$row->id}}" id="" value="{{$row->activities}}"></td>
                            <td class="column1 style7 s" @if($sub_rows != 0) rowspan="{{$sub_rows}}" @endif><input type="text" name="budget_{{$row->id}}" id="" value="{{$row->budget}}"></td>
                            <td class="column2 style7 s"><input type="text" name="target_expense_{{$row->id}}" id="" value="{{$row->target_expense}}"></td>
                            <td class="column3 style56 n"><input type="text" name="first_quarter_{{$row->id}}" id="" value="{{$row->first_quarter}}"></td>
                            <td class="column4 style6 s"><input type="text" name="second_quarter_{{$row->id}}" id="" value="{{$row->second_quarter}}"></td>
                            <td class="column5 style7 s"><input type="text" name="third_quarter_{{$row->id}}" id="" value="{{$row->third_quarter}}">-</td>
                            <td class="column6 style7 s"><input type="text" name="fourth_quarter_{{$row->id}}" id="" value="{{$row->fourth_quarter}}">-</td>
                            <td class="column7 style6 s"><input type="text" name="first_to_fourth_quarter_{{$row->id}}" id="" value="{{$row->first_to_fourth_quarter}}"></td>
                          </tr>
                          @if(count($row->sub_rows) != 0)                        
                          @foreach($row->sub_rows as $subRow)
                               <tr class="row1">
                          <input type="hidden" name="sub_row_id[]" value="{{$subRow->id}}">
                            <td class="column3 style56 n"><input type="text" name="sub_row_target_expense_{{$subRow->id}}" id="" value="{{$subRow->target_expense}}"></td>
                            <td class="column4 style6 s"><input type="text" name="sub_row_first_quarter_{{$subRow->id}}" id="" value="{{$subRow->first_quarter}}"></td>
                            <td class="column5 style7 s"><input type="text" name="sub_row_second_quarter_{{$subRow->id}}" id="" value="{{$subRow->second_quarter}}">-</td>
                            <td class="column6 style7 s"><input type="text" name="sub_row_third_quarter_{{$subRow->id}}" id="" value="{{$subRow->third_quarter}}">-</td>
                            <td class="column6 style7 s"><input type="text" name="sub_row_fourth_quarter_{{$subRow->id}}" id="" value="{{$subRow->fourth_quarter}}">-</td>
                            <td class="column6 style7 s"><input type="text" name="sub_row_first_to_fourth_quarter_{{$subRow->id}}" id="" value="{{$subRow->first_to_fourth_quarter}}">-</td>
                          </tr>
                          @endforeach
                          @endif
                          @endforeach
                   
                      </tbody>
                </table>
            </div>
              <div id="loader" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
        <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
        <button type="" class="btn btn-danger">সংশোধন</button>
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
            url: "{{url("update-form-1.2.1")}}",
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
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });
    });
</script>
@endsection    
