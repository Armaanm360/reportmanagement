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
      <form action="{{ url('update-form-1.1.2') }}" id="submitForm" method="POST">
         @csrf
         <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">
         <div class="rel-26">
            <h3><input type="hidden" name="years" id="yearTextInput" value="">  <span id="yearText"> @foreach ($years as $years) {{ $years -> years }}@endforeach</span> অর্থবছরের বাজেট বাস্তবায়ন অগ্রগতি</h3>
            <h5>১.১.২. স্বায়ত্তশাসিত ও অন্যান্য প্রতিষ্ঠান</h5>
            <div>
            </div>
            <table border="1" width="100%" id="myTable">
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
                     <td>(বাস্তবায়নের জন্য দায়িত্বপ্রাপ্ত শাখা</td>
                  </tr>
                  <tr>
                     <td><span id="yearText"></span></td>
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
                     <input type="hidden" name="unique_form_id" value="{{$row->unique_form_id}}">
                     <td class="column0 style7 s" @if($sub_rows != 0) rowspan="{{$sub_rows}}" @endif>
                     <textarea type="text"  name="activities_{{$row->id}}" id=""cols="30" rows="10">{{$row->activities}}</textarea>
                     </td>
                     <td class="column1 style7 s" @if($sub_rows != 0) rowspan="{{$sub_rows}}" @endif>
                     <textarea type="text" name="budget_{{$row->id}}" id="" cols="30" rows="10">{{$row->budget}}</textarea>
                     </td>
                     <td class="column2 style7 s"><textarea type="text" name="target_expense_{{$row->id}}" id=""  cols="30" rows="10">{{$row->target_expense}}</textarea></td>
                     <td class="column3 style56 n"><textarea type="number" name="acquisition1_{{$row->id}}" id=""  cols="30" rows="10">{{$row->acquisition1}}</textarea></td>
                     <td class="column4 style6 s"><textarea type="number" name="acquisition2_{{$row->id}}" id=""  cols="30" rows="10">{{$row->acquisition2}}</textarea></td>
                     <td class="column5 style7 s"><textarea type="number" name="acquisition3_{{$row->id}}" id=""  cols="30" rows="10">{{$row->acquisition3}}</textarea></td>
                     <td class="column6 style7 s"><textarea type="number" name="acquisition4_{{$row->id}}" id=""  cols="30" rows="10">{{$row->acquisition4}}</textarea></td>
                     <td class="column6 style7 s"><textarea type="number" class="total_sum_value"  name="total_sum_value_{{$row->id}}" id="" cols="30" rows="10">{{$row->total_sum_value}}</textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control select2" id="" name="branch_responsible_implementation_{{$row->id}}">
                              <option selected >Select Division</option>
                              @foreach ($divisionss as $division)
                              {{-- 
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              --}}
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
                     <td class="column3 style56 n"><textarea type="text" name="sub_row_target_expense_{{$subRow->id}}" id=""  cols="30" rows="10">
                        {{$subRow->target_expense}}</textarea>
                     </td>
                     <td class="column4 style6 s"><textarea type="number" name="sub_row_acquisition1_{{$subRow->id}}" id=""  cols="30" rows="10">
                        {{$subRow->acquisition1}}</textarea>
                     </td>
                     <td class="column5 style7 s"><textarea type="number" name="sub_row_acquisition2_{{$subRow->id}}" id=""  cols="30" rows="10">{{$subRow->acquisition2}}</textarea></td>
                     <td class="column6 style7 s"><textarea type="number" name="sub_row_acquisition3_{{$subRow->id}}" id=""  cols="30" rows="10">{{$subRow->acquisition3}}</textarea></td>
                     <td class="column6 style7 s"><textarea type="number" name="sub_row_acquisition4_{{$subRow->id}}" id=""  cols="30" rows="10">{{$subRow->acquisition4}}</textarea></td>
                     <td class="column6 style7 s"><textarea type="number" class="total_sum_value"  name="sub_row_total_sum_value_{{$subRow->id}}" id="" value="" cols="30" rows="10">{{$subRow->total_sum_value}}</textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control select2" id="" name="sub_row_branch_responsible_implementation_{{$subRow->id}}">
                              <option selected >Select Division</option>
                              @foreach ($divisionss as $division)
                              {{-- 
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              --}}
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
         {{-- 
         <div id="loader" class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
         </div>
         --}}
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
           url: "{{url("update-form-1.1.2")}}",
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