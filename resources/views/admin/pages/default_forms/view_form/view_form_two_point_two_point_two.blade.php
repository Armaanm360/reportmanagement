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
                    <a href="#">{{__('Form 2.2.2')}}</a>
                </li>
            </ul>
        </div>

        <form action="{{ url('update-form-2.2.2') }}" id="submitForm" method="POST">
            @csrf
            <div class="rel-26">
                <h3>২.২.২ ই-গভর্ন্যান্স ও উদ্ভাবন কর্মপরিকল্পনা ২০২১-২২</h3>   
                <table border="1" width="100%">
                      <thead>
                         
                          <tr style="border:5px">
                              <td rowspan="2">কার্যক্রম</td>
                              <td rowspan="2">কর্মসম্পাদন সূচক</td>
                              <td rowspan="2">একক</td>
                              <td rowspan="2">কর্মসম্পাদন সূচকের মান</td>
                              <td rowspan="2">বাৎসরিক লক্ষ্যমাত্রা ২০২১-২২</td>
                              <td colspan="2">অর্জন</td>
                              <td rowspan="2">বাস্তবায়নের জন্য দায়িত্বপ্রাপ্ত শাখা</td>
                          </tr>
                          
                          <tr>
                              <td>(জুলাই-সেপ্টেম্বর ২০২১)</td>
                              <td>(জুলাই ২০২১- জুন ২০২২)</td>
                          </tr>
                      </thead>
                      <tbody>
                           @foreach($all_columuns as $row)
                             <?php $sub_rows = count($row->sub_rows) + 1?>
                        <tr class="row1">
                             <input type="hidden" name="row_id[]" value="{{$row->id}}">
                             <td class="column0 style7 s" @if($sub_rows != 0) rowspan="{{$sub_rows}}" @endif><input type="text"  name="activities_{{$row->id}}" id="" value="{{$row->activities}}"></td>
                            <td class="column1 style7 s"><input type="text" name="performance_index_{{$row->id}}" id="" value="{{$row->performance_index}}"></td>
                            <td class="column2 style7 s"><input type="text" name="unit_{{$row->id}}" id="" value="{{$row->unit}}"></td>
                            <td class="column3 style56 n"><input type="text" name="performance_index_values_{{$row->id}}" id="" value="{{$row->performance_index_values}}"></td>
                            <td class="column4 style6 s"><input type="text" name="annual_target_{{$row->id}}" id="" value="{{$row->annual_target}}"></td>
                            <td class="column5 style7 s"><input type="text" name="acquisition1_{{$row->id}}" id="" value="{{$row->acquisition1}}">-</td>
                            <td class="column6 style7 s"><input type="text" name="acquisition2_{{$row->id}}" id="" value="{{$row->acquisition2}}">-</td>
                            <td class="column7 style6 s"><input type="text" name="branch_responsible_implementation_{{$row->id}}" id="" value="{{$row->branch_responsible_implementation}}"></td>
                          </tr>
                          @if(count($row->sub_rows) != 0)                        
                          @foreach($row->sub_rows as $subRow)
                               <tr class="row1">
                             <!--<input type="hidden" name="sub_row_{{$row->id}}_{{$subRow->id}}" value="1">-->
                             <input type="hidden" name="sub_row_id[]" value="{{$subRow->id}}">
                         
                            <!--<td class="column1 style7 s" rowspan="{{$sub_rows}}" ><input type="text" name="performance_index_1" id="" value=""></td>-->
                            <td class="column1 style7 s" ><input type="text" name="sub_row_performance_index_{{$subRow->id}}" id="" value="{{$subRow->performance_index}}"></td>
                            <td class="column2 style7 s"><input type="text" name="sub_row_unit_{{$subRow->id}}" id="" value="{{$subRow->unit}}"></td>
                            <td class="column3 style56 n"><input type="text" name="sub_row_performance_index_values_{{$subRow->id}}" id="" value="{{$subRow->performance_index_values}}"></td>
                            <td class="column4 style6 s"><input type="text" name="sub_row_annual_target_{{$subRow->id}}" id="" value="{{$subRow->annual_target}}"></td>
                            <td class="column5 style7 s"><input type="text" name="sub_row_acquisition1_{{$subRow->id}}" id="" value="{{$subRow->acquisition1}}">-</td>
                            <td class="column6 style7 s"><input type="text" name="sub_row_acquisition2_{{$subRow->id}}" id="" value="{{$subRow->acquisition2}}">-</td>
                            <td class="column7 style6 s"><input type="text" name="sub_row_branch_responsible_implementation_{{$subRow->id}}" id="" value="{{$row->branch_responsible_implementation}}"></td>
                          </tr>
                          @endforeach
                          @endif
                          @endforeach

                          <tr class="row90">
                            {{-- <input type="hidden" name="row_id" value="9">  --}}
                            <td class="column0 style33 s style33" colspan="3"><input type="text" name="" id="" value="উপমোট= (১৩টি সূচক)"></td>
                            <td class="column3 style34 n"><input type="text" name="" id="" value="50"></td>
                            <td class="column4 style27 null"></td>
                            <td class="column5 style27 null"></td>
                            <td class="column6 style27 null"></td>
                            <td class="column7 style27 null"></td>
                          </tr>
                   
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
            url: "{{url("update-form-2.2.2")}}",
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
