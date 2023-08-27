@extends('admin.master')
@section('content')
@inject('divisioninfo', 'App\Models\Division')
        <style>
     .rel-26{
            margin-top: 50px;
            margin-bottom: 50px;
        }      input{
                  border: none;
              }
    </style>
<div class="content">

    <div class="page-inner">


        <form id="submitForm" method="POST">
            @csrf

         
             <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">
            <div class="rel-26">
                <h3>২.১ বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) <input type="hidden" name="years" id="yearTextInput" value="">  <span id="yearText"> @foreach ($years as $years) {{ $years -> years }}@endforeach</span> এর ১ম ত্রৈমাসিক (জুলাই-সেপ্টেম্বর ২০২১) অর্জন (সেকশন-৩):</h3>   
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
                              <td>(জুলাই ২০২১- জুন ২০২২)</td>
                              <td>(জুলাই ২০২১- জুন ২০২২)</td>
                              <td>total</td>
                          </tr>
                      </thead>
                      <tbody>                      
                          @foreach($all_columuns as $row) 

                             <?php $sub_rows = count($row->sub_rows) + 1?>       
                        <tr class="row1">
                             <input type="hidden" name="row_id[]" value="{{$row->id}}">
                             <input type="hidden" name="unique_form_id" value="{{$row->unique_form_id}}">
                             <td class="column0 style7 s" @if($sub_rows != 0) rowspan="{{$sub_rows}}" @endif><input type=""   name="activities_{{$row->id}}" id="" value="{{$row->activities}}"></td>
                            <td class="column1 style7 s"><input type=""   name="performance_index_{{$row->id}}" id="" value="{{$row->performance_index}}"></td>
                            <td class="column2 style7 s"><input type=""   name="unit_{{$row->id}}" id="" value="{{$row->unit}}"></td>
                            <td class="column3 style56 n"><input type=""   name="performance_index_values_{{$row->id}}" id="" value="{{$row->performance_index_values}}"></td>
                            <td class="column4 style6 s"><input type=""   name="annual_target_{{$row->id}}" value="{{$row->annual_target}}"></td>
                            <td class="column5 style7 s"><input type="text"   class="sing"   id=""    name="acquisition1_{{$row->id}}"  value="{{$row->acquisition1}}">-</td>
                            <td class="column6 style7 s"><input type="text"    class="sing"    id=""   name="acquisition2_{{$row->id}}"  value="{{$row->acquisition2}}">-</td>
                            <td class="column5 style7 s"><input type="text"     class="sing"   id=""   name="acquisition3_{{$row->id}}"  value="{{$row->acquisition3}}">-</td>
                            <td class="column6 style7 s jaura"><input type="text" id="" class="sing"    name="acquisition4_{{$row->id}}"  value="{{$row->acquisition4}}">-</td>
                            <td class="column6 style7 s"><input type="text" class="total_sum_value"  id=""   name="total_sum_value_{{$row->id}}" value="{{$row->total_sum_value}}">-</td>
                            <td class="column7 style6 s">
                                         <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_{{$row->id}}">
                                         <option selected >Select Division</option>
                                          @foreach ($divisionss as $division)
                                              {{-- <option value="{{ $division -> id }}">{{ $division -> name }}</option> --}}
                                              <option value="{{ $division -> id }}" {{ ( $division -> id == $row-> branch_responsible_implementation) ? 'selected' : '' }}> 
                                                {{ $division -> name }}
                                          @endforeach
                                        </select>
                                      </div>
                            </td>
                        </tr>
                         
                          @if(count($row->sub_rows) != 0)                        
                          @foreach($row->sub_rows as $subRow)
                        
                               <tr class="row1">
                                        <input type="hidden" name="sub_row_id[]" value="{{$subRow->id}}">
                              <input type="hidden" name="unique_form_id" value="{{$subRow->unique_form_id}}">
                         <input type="hidden" name="unique_form_id" value="{{$subRow->unique_form_id}}">
                            <td class="column1 style7 s" ><input type=""  name="sub_row_performance_index_{{$subRow->id}}" id="" value="{{$subRow->performance_index}}"></td>
                            <td class="column2 style7 s"><input type=""  name="sub_row_unit_{{$subRow->id}}" id="" value="{{$subRow->unit}}"></td>
                            <td class="column3 style56 n"><input type=""  name="sub_row_performance_index_values_{{$subRow->id}}" id="" value="{{$subRow->performance_index_values}}"></td>
                            <td class="column4 style6 s"><input type="" name="sub_row_annual_target_{{$subRow->id}}" id="" value="{{$subRow->annual_target}}"></td>
                            <td class="column5 style7 s"><input type="text"  name="sub_row_acquisition1_{{$subRow->id}}" id="" value="{{$subRow->acquisition1}}">-</td>
                            <td class="column6 style7 s "><input type="text" name="sub_row_acquisition2_{{$subRow->id}}" id="" value="{{$subRow->acquisition2}}">-</td>
                            <td class="column5 style7 s"><input type="text" name="sub_row_acquisition3_{{$subRow->id}}" id="" value="{{$subRow->acquisition3}}">-</td>
                            <td class="column6 style7 s"><input type="text" name="sub_row_acquisition4_{{$subRow->id}}" id="" value="{{$subRow->acquisition4}}">-</td>
                            <td class="column6 style7 s"><input type="text" class="total_sum_value"  name="sub_row_total_sum_value_{{$subRow->id}}" id="" value="{{$subRow->total_sum_value}}">-</td>
                            <td class="column7 style6 s">
                                         <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Division</label>
                                        <select class="form-control select2" id="" name="branch_responsible_implementation_{{$subRow->id}}">
                                         <option selected >Select Division</option>
                                           @foreach ($divisionss as $division)
                                              {{-- <option value="{{ $division -> id }}">{{ $division -> name }}</option> --}}
                                              <option value="{{ $division -> id }}" {{ ( $division -> id == $row-> branch_responsible_implementation) ? 'selected' : '' }}> 
                                                {{ $division -> name }}
                                          @endforeach
                                        </select>
                                      </div>
                            </td>
                           
                        </tr>
                          
                          @endforeach
                          @endif
                          @endforeach
                  
                      </tbody>
                </table>
            </div>
              <div id="loader" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
     
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
            url: "{{url("update-form-2.1")}}",
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


// $(document).ready(function () {

//     $('#calculation').on("keyup", ".amount", function () {

//         var sum = 0;

//         $('.amount').each(function () {
//             sum += Number($(this).val());
//         });

//         $('#total').val(sum);

//     });
// });

// function addRow() {
//     var template = '';
//     template += '<tr>';
//     template += '<td><input class="underline-input" type="number" name="item" />';
//     template += '<td><input class="underline-input amount" type="number" id="amount" name="amount" /></td>';
//     template += '</tr>';

//     $("#calculation").append(template);
// }


    $(function () {
        let tbl = $('#myTable');
        tbl.find('tr').each(function () {
            // $this = this;
            $(this).find('input[type=text]').bind("keyup", function () {
                calculateSum();
            });
        });

        function calculateSum() {
            let tbl = $('#myTable');
            tbl.find('tr').each(function () {
                let sum = 0;
                $(this).find('input[type=text]').not('.total_sum_value').each(function () {
                    if (!isNaN(this.value) && this.value.length != 0) {
                        sum += parseFloat(this.value);
                    }
                });

                $(this).find('.total_sum_value').val(sum.toFixed(2));
            });
        }
    });

    // $("#myTable").on('input', input_name, function () {
    //    let calculated_total_sum = 0;
     
    //    $("#myTable #xs").each(function () {
    //        let get_textbox_value = $(this).val();
    //        if ($.isNumeric(get_textbox_value)) {
    //           calculated_total_sum += parseFloat(get_textbox_value);
    //           }                  
    //         });
    //          $("input#total_sum_value").val(calculated_total_sum);
    //          console.log(calculated_total_sum);
	// });
</script>

@endsection  
