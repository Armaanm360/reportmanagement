@extends('admin.master')
@section('content')
@inject('divisioninfo', 'App\Models\Division')
        <style>
  
input{
                  border: none;
              }
    </style>
<div class="content">

    <div class="page-inner">


        {{-- <form id="submitForm" method="POST">
            @csrf
            <div class="rel-26">
                <h3>২.২.৩ অভিযোগ প্রতিকার ব্যবস্থা সংক্রান্ত কর্মপরিকল্পনা, <input type="hidden" name="years" id="yearTextInput" value="">  <span id="yearText"> @foreach ($years as $years) {{ $years -> years }}@endforeach</span></h3>   
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
                   
                      </tbody>
                </table>
            </div>
              <div id="loader" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
        <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
        <button type="" class="btn btn-danger">সংশোধন</button>
          </form> --}}

           <form action="{{ url('update-form-2.2.3') }}" id="submitForm" method="POST">
            @csrf
            <div class="rel-26">
                <h3>২.২.৩ অভিযোগ প্রতিকার ব্যবস্থা সংক্রান্ত কর্মপরিকল্পনা, <input type="hidden" name="years" id="yearTextInput" value="">  <span id="yearText"> @foreach ($years as $years) {{ $years -> years }}@endforeach</span></h3>   
                <table border="1" width="100%" id="myTable">
                      <thead>
                           <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">
                         
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
                              <td>total</td>
                          </tr>
                      </thead>
                      <tbody>
                           @foreach($all_columuns as $row)
                   
                        <tr class="row1">
                             <input type="hidden" name="row_id[]" value="{{$row->id}}">
                             <input type="hidden" name="unique_form_id" value="{{$row->unique_form_id}}">
                            <td class="column0 style7 s">
                           
                                <textarea name="activities_{{$row->id}}" id="" cols="30" rows="10">{{$row->activities}}</textarea>
                            
                            </td>
                            <td class="column1 style7 s">
                                <textarea type="text" name="performance_index_{{$row->id}}" cols="30" rows="10" id="">{{$row->performance_index}}</textarea>
                               </td>
                               
                            <td class="column2 style7 s"><textarea type="text" name="unit_{{$row->id}}" cols="30" rows="10" id="">{{$row->unit}}</textarea></td>
                            <td class="column3 style56 n">
                                <textarea type="text" name="performance_index_values_{{$row->id}}" id="">
                                    {{$row->performance_index_values}}
                                </textarea>
                            </td>
                            <td class="column4 style6 s">
                                <textarea type="text" name="annual_target_{{$row->id}}" id="">
                                    {{$row->annual_target}}
                                </textarea>
                                </td>

                            <td class="column4 style6 s">
                                <textarea type="number" name="acquisition1_{{$row->id}}" id="">
                                    {{$row->acquisition1}}
                                </textarea>
                                </td>
                            <td class="column4 style6 s">
                                <textarea type="number" name="acquisition2_{{$row->id}}" id="">
                                    {{$row->acquisition2}}
                                </textarea>
                                </td>
                            <td class="column4 style6 s">
                                <textarea type="number" name="acquisition3_{{$row->id}}" id="">
                                    {{$row->acquisition3}}
                                </textarea>
                                </td>
                            <td class="column4 style6 s">
                                <textarea type="number" name="acquisition1_{{$row->id}}" id="">
                                    {{$row->acquisition1}}
                                </textarea>
                                </td>


                            <td class="column4 style6 s">
                                <textarea type="number" class="total_sum_value" name="total_sum_value_{{$row->id}}" id="">
                                    {{$row->total_sum_value}}
                                </textarea>
                                </td>
                                
              
                            {{-- <td class="column5 style7 s"><input type="text"   class="sing"   id=""    name="acquisition1_{{$row->id}}"  value="{{$row->acquisition1}}">-</td>
                            <td class="column6 style7 s"><input type="text"    class="sing"    id=""   name="acquisition2_{{$row->id}}"  value="{{$row->acquisition2}}">-</td>
                            <td class="column5 style7 s"><input type="text"     class="sing"   id=""   name="acquisition3_{{$row->id}}"  value="{{$row->acquisition3}}">-</td>
                            <td class="column6 style7 s jaura"><input type="text" id="" class="sing"    name="acquisition4_{{$row->id}}"  value="{{$row->acquisition4}}">-</td>
                            <td class="column6 style7 s"><input type="text" class="total_sum_value"  id=""   name="total_sum_value_{{$row->id}}" value="{{$row->total_sum_value}}">-</td> --}}
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
                        
                          @endforeach

                          <tr class="row31">
                              <td class="column0 style14 s style14" colspan="3"><input type="text" name="" id="" value="কৌশলগত উদ্দেশ্য মোট= (৩৯টি সূচক)"> </td>
                              <td class="column2 style15 null"></td>
                              <td class="column3 style16 n"><input type="text" name="performance_index_values_31" id="" value="70"> </td>
                              <td class="column4 style17 null"></td>
                              <td class="column5 style17 null"></td>
                              <td class="column6 style17 null"></td>
                              <td class="column7 style17 null"></td>
                            </tr>
                        
                   
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
            url: "{{url("update-form-2.2.3")}}",
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
@endsection 