@extends('admin.master')
@section('content')


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
                    <a href="#">{{__('Form 2.1')}}</a>
                </li>
            </ul>
        </div>

        <form action="{{ url('form-2.1') }}" method="POST">
            @csrf
            <div class="rel-26">
                <h3>২.১ বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ) ২০২১-২২ এর ১ম ত্রৈমাসিক (জুলাই-সেপ্টেম্বর ২০২১) অর্জন (সেকশন-৩):</h3>
                <table border="1" width="100%" id="myTable">
                    <thead>
                        <tr>
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
                            <td>Total(জুলাই ২০২১- জুন ২০২২)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="row1">
                            <input type="hidden" name="row_id" value="1">
                            <td class="column0 style7 s"><input type="text" name="activities_1" id="" value="[১.১] হাউস বিল্ডিং ফাইনান্স কর্পোরেশন আইন, ২০২০ (সংশোধন) প্রণয়ন"></td>
                            <td class="column1 style7 s"><input type="text" name="performance_index_1" id="" value="[১.১.১] গেজেটে প্রকাশিত"></td>
                            <td class="column2 style7 s"><input type="text" name="unit_1" id="" value="তারিখ"></td>
                            <td class="column3 style56 n"><input type="text" name="performance_index_values_1" id="" value="2"></td>
                            <td class="column4 style6 s"><input type="text" name="annual_target_1" id="faaf" value="ffaaf"></td>
                            <td class="column5 style7 s"><input type="number" name="acquisition1_1" id="txtCal1" value="">-</td>
                            <td class="column5 style7 s"><input type="number" name="acquisition1_1" id="txtCal1" value="">-</td>
                            <td class="column6 style7 s"><input type="number" name="acquisition2_1" id="txtCal1" value="">-</td>
                            <td class="column6 style7 s"><input type="number" name="acquisition2_1" id="txtCal1" value="">-</td>
                            <td class="column6 style7 s"><input type="number" name="" id="total_sum_value1" value="">-</td>
                            <td class="column7 style6 s"><input type="text" name="branch_responsible_implementation_1" id="" value="বিশেষায়িত ব্যাংক-২ শাখা"></td>
                        </tr>
                        <tr class="row2">
                            <input type="hidden" name="row_id" value="2">
                            <td class="column0 style7 s"><input type="text" name="activities_2" id="" value="[১.২] পল্লী সঞ্চয় ব্যাংক কর্মচারি চাকরি প্রবিধানমালা প্রণয়ন"></td>
                            <td class="column1 style7 s"><input type="text" name="performance_index_2" id="" value="[১.২.১] প্রশাসনিক উন্নয়ন সংক্রান্ত সচিব কমিটিতে প্রেরিত"></td>
                            <td class="column2 style7 s"><input type="text" name="unit_2" id="" value="তারিখ"></td>
                            <td class="column3 style56 n"><input type="text" name="performance_index_values_2" id="" value="2"></td>
                            <td class="column4 style6 s"><input type="text" name="annual_target_2" id="" value="৩১-০৫-২০২২"></td>
                            <td class="column4 style6 s"><input type="number" name="acquisition1_1" id="txtCal2" value=""></td>
                            <td class="column5 style7 s"><input type="number" name="acquisition1_1" id="txtCal2" value="">-</td>
                            <td class="column6 style7 s"><input type="number" name="acquisition2_1" id="txtCal2" value="">-</td>
                            <td class="column6 style7 s"><input type="number" name="acquisition2_1" id="txtCal2" value="">-</td>
                            <td class="column6 style7 s"><input type="number" name="" id="total_sum_value2" value="">-</td>
                            <td class="column7 style6 s"><input type="text" name="branch_responsible_implementation_2" id="" value="বিশেষায়িত ব্যাংক-২ শাখা"></td>
                        </tr>
                        <tr class="row3">
                            <input type="hidden" name="row_id" value="3">
                            <td class="column0 style7 s"><input type="text" name="activities_3" id="" value="[১.৩] কর্মসংস্থান ব্যাংক কর্মচারি চাকরি প্রবিধানমালা প্রণয়ন"></td>
                            <td class="column1 style7 s"><input type="text" name="performance_index_3" id="" value="[১.৩.১] ভেটিং এর জন্য লেজিসলেটিভ ও সংসদ বিষয়ক বিভাগে প্রেরিত"></td>
                            <td class="column2 style7 s"><input type="text" name="unit_3" id="" value="তারিখ"></td>
                            <td class="column3 style56 n"><input type="text" name="performance_index_values_3" id="" value="2"></td>
                            <td class="column4 style6 s"><input type="text" name="annual_target_3" id="" value="৩০-০৫-২০২"></td>
                            <td class="column4 style6 s"><input type="number" name="acquisition1_1" id="txtCal3" value=""></td>
                            <td class="column5 style7 s"><input type="number" name="acquisition1_1" id="txtCal3" value="">-</td>
                            <td class="column6 style7 s"><input type="number" name="acquisition2_1" id="txtCal3" value="">-</td>
                            <td class="column6 style7 s"><input type="number" name="acquisition2_1" id="txtCal3" value="">-</td>
                            <td class="column6 style7 s"><input type="number" name="" id="total_sum_value3" value="">-</td>
                            <td class="column7 style6 s"><input type="text" name="branch_responsible_implementation_3" id="" value="বিশেষায়িত ব্যাংক-১ শাখা"></td>
                        </tr>

                        {{-- <tr class="row31">
                          <input type="hidden" name="row_id" value="31">
                            <td class="column0 style14 s style14" colspan="2"><input type="text" name="activities_31" id="" value="কৌশলগত উদ্দেশ্য মোট= (৩৯টি সূচক)"> </td>
                            <td class="column2 style15 null"></td>
                            <td class="column3 style16 n"><input type="text" name="performance_index_values_31" id="" value="70"> </td>
                            <td class="column4 style17 null"></td>
                            <td class="column5 style17 null"></td>
                            <td class="column6 style17 null"></td>
                            <td class="column7 style17 null"></td>
                          </tr> --}}
                    </tbody>
                </table>
            </div>

            <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
            <button type="" class="btn btn-danger">সংশোধন</button>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {

        $("#myTable").on('input', '#txtCal1', function() {
            let calculated_total_sum = 0;

            $("#myTable #txtCal1").each(function() {
                let get_textbox_value = $(this).val();
                if ($.isNumeric(get_textbox_value)) {
                    calculated_total_sum += parseFloat(get_textbox_value);
                }
            });
            $("input#total_sum_value1").val(calculated_total_sum);
            console.log(calculated_total_sum);
        });
    });
</script>
@endsection