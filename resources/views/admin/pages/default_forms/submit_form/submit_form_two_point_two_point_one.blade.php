@inject('divisioninfo', 'App\Models\Division')
        <style>
  
input{
                  border: none;
              }
    </style>
<div class="content">

    <div class="page-inner">
         
     
              
        <form id="submitForm" method="POST">
            @csrf

          
            <div class="rel-26">
                 <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">
                <h3>২.২.১ মন্ত্রণালয়/বিভাগ/রাষ্ট্রীয় প্রতিষ্ঠানের জাতীয় শুদ্ধাচার কৌশল কর্মপরিকল্পনা, <input type="hidden" name="years" id="yearTextInput" value="">  <span id="yearText"> @foreach ($years as $years) {{ $years -> years }}@endforeach</span></h3>   
                <table border="1" width="100%" id="myTable">
                      <thead>
                         
                          <tr style="border:5px">
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
                              <td>Total</td>
                          </tr>
                      </thead>
                      <tbody>
                           @foreach($all_columuns as $row)
                           @if ($row ->branch_responsible_implementation == Auth::user()->division)    
                             <?php $sub_rows = count($row->sub_rows) + 1?>
                        <tr class="row1">
                             <input type="hidden" name="row_id[]" value="{{$row->id}}">
                              <input type="hidden" name="unique_form_id" value="{{$row->unique_form_id}}">
                             <td class="column0 style7 s" @if($sub_rows != 0) rowspan="{{$sub_rows}}" @endif><textarea type="text"  name="activities_{{$row->id}}" id="" cols="30" rows="10" >{{$row->activities}}</textarea></td>
                            <td class="column1 style7 s"><textarea type="text" name="performance_index_{{$row->id}}" id=""  cols="30" rows="10">{{$row->performance_index}}</textarea></td>
                            <td class="column2 style7 s"><textarea type="text" name="unit_{{$row->id}}" id="" value=""  cols="30" rows="10">{{$row->unit}}</textarea></td>
                            <td class="column3 style56 n"><textarea type="text" name="performance_index_values_{{$row->id}}" id=""cols="30" rows="10">{{$row->performance_index_values}}</textarea></td>
                            <td class="column4 style6 s"><textarea cols="30" rows="10" type="text" name="annual_target_{{$row->id}}" id="">
                            {{$row->annual_target}}</textarea></td>
                             <td class="column5 style7 s"><textarea type="number" name="acquisition1_{{$row->id}}" id="" cols="30" rows="10">{{$row->acquisition1}}</textarea></td>
                         <td class="column6 style7 s"><textarea type="number" name="acquisition2_{{$row->id}}" id="" cols="30" rows="10">{{$row->acquisition2}}</textarea></td>
                         <td class="column6 style7 s"><textarea type="number" name="acquisition3_{{$row->id}}" id="" cols="30" rows="10">{{$row->acquisition3}}</textarea></td>
                         <td class="column6 style7 s"><textarea type="number" name="acquisition4_{{$row->id}}" id="" cols="30" rows="10">{{$row->acquisition4}}</textarea></td>
                         <td class="column6 style7 s"><textarea type="number" class="total_sum_value" name="total_sum_value_{{$row->id}}" id="" cols="30" rows="10">{{$row->total_sum_value}}</textarea></td>
                            <td class="column7 style6 s"><input type="text" readonly   id="" value="{{$divisioninfo->divisionName($row -> branch_responsible_implementation)[0]['name']}}">
                                <input type="hidden" name="branch_responsible_implementation_{{$row->id}}" value="{{$divisioninfo->divisionName($row -> branch_responsible_implementation)[0]['id']}}">
                            </td>
                          </tr>
                          @endif
                       @if(count($row->sub_rows) != 0)                        
                          @foreach($row->sub_rows as $subRow)
                           @if ($subRow ->branch_responsible_implementation == Auth::user()->division )
                               <tr class="row1">
                             <!--<input type="hidden" name="sub_row_{{$row->id}}_{{$subRow->id}}" value="1">-->
                             <input type="hidden" name="sub_row_id[]" value="{{$subRow->id}}">
                              <input type="hidden" name="unique_form_id" value="{{$subRow->unique_form_id}}">
                         
                            <!--<td class="column1 style7 s" rowspan="{{$sub_rows}}" ><input type="text" name="performance_index_1" id="" value=""></td>-->
                            <td class="column1 style7 s" ><textarea type="text" name="sub_row_performance_index_{{$subRow->id}}" id="" cols="30" rows="10">{{$subRow->performance_index}}</textarea></td>
                            <td class="column2 style7 s"><textarea type="text" name="sub_row_unit_{{$subRow->id}}" id="" cols="30" rows="10">{{$subRow->unit}}</textarea></td>
                            <td class="column3 style56 n"><textarea type="text" name="sub_row_performance_index_values_{{$subRow->id}}" id="" cols="30" rows="10">{{$subRow->performance_index_values}}</textarea></td>
                            <td class="column4 style6 s"><textarea type="text" name="sub_row_annual_target_{{$subRow->id}}" id="" value="{{$subRow->annual_target}}" cols="30" rows="10"></textarea></td>
                            <td class="column5 style7 s"><textarea type="number" name="sub_row_acquisition1_{{$subRow->id}}" id="" cols="30" rows="10">{{$subRow->acquisition1}}</textarea></td>
                         <td class="column6 style7 s"><textarea type="number" name="sub_row_acquisition2_{{$subRow->id}}" id="" cols="30" rows="10">{{$subRow->acquisition2}}</textarea></td>
                         <td class="column6 style7 s"><textarea type="number" name="sub_row_acquisition3_{{$subRow->id}}" id="" cols="30" rows="10">{{$subRow->acquisition3}}</textarea></td>
                         <td class="column6 style7 s"><textarea type="number" name="sub_row_acquisition4_{{$subRow->id}}" id="" cols="30" rows="10">{{$subRow->acquisition4}}</textarea></td>
                         <td class="column6 style7 s"><textarea type="number" class="total_sum_value" name="sub_row_total_sum_value_{{$subRow->id}}" id="" cols="30" rows="10">{{$subRow->total_sum_value}}</textarea></td>

                        <td class="column7 style6 s"><input type="text" readonly  id="" value="{{$divisioninfo->divisionName($row -> branch_responsible_implementation)[0]['name']}}">
                            <input type="hidden" name="branch_responsible_implementation_{{$subRow->id}}" value="{{$divisioninfo->divisionName($row -> branch_responsible_implementation)[0]['id']}}">
                            </td>
                          </tr>
                                 @endif
                          @endforeach
                          @endif
                          @endforeach
                  
                   
                      </tbody>
                </table>
            </div>
              <div id="loader" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
 @foreach ($userforms as $userforms)
         @if ($userforms->duration > date('Y-m-d'))
             <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
              <button type="submit" class="btn btn-danger">সংশোধন</button>
         @endif
                 @endforeach
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
            url: "{{url("update-form-2.2.1")}}",
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
