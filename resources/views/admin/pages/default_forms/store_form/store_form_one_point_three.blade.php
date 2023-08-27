
        <style>
/*        .rel-26{
            margin-top: 50px;
            margin-bottom: 50px;
        }*/
/*       input[type="text"] {
                  border: none;
              }*/
    </style>
<div class="content">

    <div class="page-inner">

@php
  echo path();    
@endphp
        <form id="submitForm" method="POST">
           @csrf
             <input type="hidden" name="form_unique_id" class="form_unique_id" value="{{$form_data['unique_form_id']}}">
            <input type="hidden" name="unit_office_to" value="{{$form_data['unit_office_to']}}">
            <input type="hidden" name="unit_office" value="{{$form_data['unit_office']}}">
            <input type="hidden" name="office" value="{{$form_data['office']}}">
            <input type="hidden" name="department" value="{{$form_data['department']}}">
            <input type="hidden" name="ministry" value="{{$form_data['ministry']}}">
            <input type="hidden" name="form_id" value="{{$form_data['form_id']}}">
            <input type="hidden" name="form_year" value="{{$form_data['form_year']}}">
            <div class="rel-26">
                <h5>১.২.২  উন্নয়ন প্রকল্প (বার্ষিক উন্নয়ন কর্মসূচি-২২):</h5>
                <table border="1" width="100%" id="myTable">
                    <thead>
                        <tr>
                            <td rowspan="2">প্রকল্পের নাম</td>
                            <td>বাজেট</td>
                            <td>লক্ষ্যমাত্রা/</td>
                            <td>১ম কোয়ার্টার</td>
                            <td>২য় কোয়ার্টার</td>
                            <td>৩য় কোয়ার্টার</td>
                            <td>৪র্থ কোয়ার্টার</td>
                            <td>(১ম-৪র্থ)  কোয়ার্টার</td>
                            <td>বাস্তবায়নের জন্য দায়িত্বপ্রাপ্ত শাখা</td>
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
                        <tr class="row4">
                     <input cols="30" rows="10" name="row_id" value="1" type="hidden">
                     <td class="column1 style60 s style60" rowspan="3"><textarea cols="30" rows="10" type="text" name="activities_1" id="">আর্থিক প্রতিষ্ঠান বিভাগ</textarea></td>
                     <td class="column2 style61 n style62" rowspan="3"><textarea cols="30" rows="10" type="text" name="budget_1" id="">14572</textarea></td>
                     <td class="column3 style42 s"><textarea cols="30" rows="10" type="text" name="target_expense_1" id="" >প্রকৃত ব্যয়</textarea></td>
                     <td class="column4 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition1_1" id="" ></textarea></td>
                     <td class="column5 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition2_1" id="" ></textarea></td>
                     <td class="column6 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition3_1" id="" ></textarea></td>
                     <td class="column7 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition4_1" id="" ></textarea></td>
                     <td class="column8 style36 f"><textarea  class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_1" id=""></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_1">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row5">
                     <input cols="30" rows="10" type="hidden" name="row_id_1_1" value="1"> 
                     <td class="column3 style42 s"><textarea cols="30" rows="10" type="text" name="target_expense_1_1" id="">প্রকৃত ব্যয়</textarea></td>
                     <td class="column4 style17 n"><textarea cols="30" rows="10" type="number" name="acquisition1_1_1" id="">14572</textarea></td>
                     <td class="column5 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition2_1_1" id="" value=""></textarea></td>
                     <td class="column6 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition3_1_1" id="" value=""></textarea></td>
                     <td class="column7 style37 null"><textarea cols="30" rows="10" type="number" name="acquisition4_1_1" id="" value=""></textarea></td>
                     <td class="column8 style36 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_1_1" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_1_1">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                  <tr class="row6">
                     <input cols="30" rows="10" type="hidden" name="row_id_1_2" value="1"> 
                     <td class="column3 style42 s"><textarea cols="30" rows="10" type="text" name="target_expense_1_2" id="" >শতকরা হার</textarea></td>
                     <td class="column4 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition1_1_2" id="">85%</textarea></td>
                     <td class="column5 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition2_1_2" id=""></textarea></td>
                     <td class="column6 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition3_1_2" id=""></textarea></td>
                     <td class="column7 style22 f"><textarea cols="30" rows="10" type="number" name="acquisition4_1_2" id=""></textarea></td>
                     <td class="column8 style22 f"><textarea class="total_sum_value" cols="30" rows="10" type="number" name="total_sum_value_1_2" id="" ></textarea></td>
                     <td class="column7 style6 s">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Select Division</label>
                           <select class="form-control" id="" name="branch_responsible_implementation_1_2">
                              <option selected >Select Division</option>
                              @foreach ($testybro as $division)
                              <option value="{{ $division -> id }}">{{ $division -> name }}</option>
                              @endforeach
                           </select>
                        </div>
                        </textarea>
                     </td>
                  </tr>
                    </tbody>
                </table>
            </div>
            
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
            url: "{{url("store-form-1.3")}}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {
            alert('Form Submitted Successfully!');
            $('#loader').hide();
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
