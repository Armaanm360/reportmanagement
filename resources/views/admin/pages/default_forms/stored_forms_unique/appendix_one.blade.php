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


       <form action="{{ url('update-form-budget_branch')}}" id="submitForm" method="POST">
            @csrf
            <div class="item">
                <div class="header-item">
                    <h3>বিষয়: <input type="text" name="" id=""
                            value="বাজেট শাখা সংশ্লিষ্ট বাজেট ও এপিএ প্রতিবেদনের ফরমেট"> </h3>
                    <h4><input type="text" name="topic-1[]" id="" value="বাজেট:"></h4>
                </div>
                <div class="listed-content">
                    <ul class="list-group">
                        @foreach ($budget as $item)
                        <li><input type="text" name="budget_{{ $item->id }}" id="" value="{{ $item -> budget }}">
                            <input type="hidden" name="budget_id" id="" value="{{ $item->id }}">
                        </li>

                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="item">
                <div class="header-item">
                    <h3>বিষয়: <input type="text" name="susbject-2[]" id="" value="বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ)">
                    </h3>
                </div>
                <div class="listed-content">
                    <ul>

                        @foreach ($apa as $item)
                        <li><input type="text" name="apa_{{ $item -> id }}" id="" value="{{ $item -> apa }}"></li>
                        <input type="hidden" name="apa_id" id="" value="{{ $item -> id }}">
                        @endforeach
                    </ul>
                </div>
            </div>


            <div class="item">
                <h3>
                    বিষয়:
                    বাজেট শাখা সংশ্লিষ্ট বাজেট ও এপিএ প্রতিবেদনের ফরমেট
                    বাজেট:

                </h3>
                <table border="1" width="100%">
                    <thead>
                        <tr class="row27">
                            <td class="column0 style17 s style18" rowspan="2">ক্রমিক</td>
                            <td class="column1 style19 s style20" rowspan="2">বিষয়</td>
                            <td class="column2 style17 s style18" rowspan="2">প্রেরক</td>
                            <td class="column3 style22 s style23" colspan="5">প্রতিবেদন/বিবরণী ফরমেট</td>
                            <td class="column8 style19 s style20" rowspan="2">পরিশিষ্ট</td>
                        </tr>
                        <tr class="row28">
                            <td class="column3 style8 s">মাসিক</td>
                            <td class="column4 style8 s">ত্রৈমাসিক</td>
                            <td class="column5 style9 s">ষান্মাষিক</td>
                            <td class="column6 style8 s">বাৎসিরক</td>
                            <td class="column7 style8 s">তাৎক্ষনিক</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($relapa as $item)

                        <tr class="row1">
                            <input type="hidden" name="row_id[]" value="{{$item->id}}">

                            <input type="hidden" name="getid_{{ $item->id }}" id="" value="{{ $item->id }}">
                            <td class="column0 style7 s"><input type="text" name="serial_{{$item->id}}" id=""
                                    value="{{$item->serial}}"></td>
                            <td class="column1 style7 s"><input type="text" name="subject_{{$item->id}}" id=""
                                    value="{{$item->subject}}"></td>
                            <td class="column1 style7 s"><input type="text" name="sender_{{$item->id}}" id=""
                                    value="{{$item->sender}}"></td>
                            <td class="column2 style7 s"><input type="text" name="report_monthly_{{$item->id}}" id=""
                                    value="{{$item->report_monthly}}"></td>
                            <td class="column3 style56 n"><input type="text" name="report_quarterly_{{$item->id}}" id=""
                                    value="{{$item->report_quarterly}}"></td>
                            <td class="column4 style6 s"><input type="text" name="report_half_yearly_{{$item->id}}"
                                    id="" value="{{$item->report_half_yearly}}"></td>
                            <td class="column5 style7 s"><input type="text" name="report_yearly_{{$item->id}}" id=""
                                    value="{{$item->report_yearly}}">-</td>
                            <td class="column6 style7 s"><input type="text" name="report_instant_{{$item->id}}" id=""
                                    value="{{$item->report_instant}}">-</td>
                            <td class="column7 style6 s"><input type="text" name="appnedix_{{$item->id}}" id=""
                                    value="{{$item->appnedix}}"></td>
                        </tr>

                        @endforeach






                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <br>

            <div class="item">
                <h3>
                    বিষয়:
                    বার্ষিক কর্মসম্পাদন চুক্তি (এপিএ):

                </h3>
                <table border="1" width="100%">
                    <thead>
                        <tr class="row27">
                            <td class="column0 style17 s style18" rowspan="2">ক্রমিক</td>
                            <td class="column1 style19 s style20" rowspan="2">বিষয়</td>
                            <td class="column2 style17 s style18" rowspan="2">প্রেরক</td>
                            <td class="column3 style22 s style23" colspan="5">প্রতিবেদন/বিবরণী ফরমেট</td>
                            <td class="column8 style19 s style20" rowspan="2">পরিশিষ্ট</td>
                        </tr>
                        <tr class="row28">
                            <td class="column3 style8 s">মাসিক</td>
                            <td class="column4 style8 s">ত্রৈমাসিক</td>
                            <td class="column5 style9 s">ষান্মাষিক</td>
                            <td class="column6 style8 s">বাৎসিরক</td>
                            <td class="column7 style8 s">তাৎক্ষনিক</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($apat as $item)

                        <tr class="row1">
                            <input type="hidden" name="row_id[]" value="{{$item->id}}">

                            <input type="hidden" name="getid_{{ $item->id }}" id="" value="{{ $item->id }}">
                            <td class="column0 style7 s"><input type="text" name="serial_{{$item->id}}" id=""
                                    value="{{$item->serial}}"></td>
                            <td class="column1 style7 s"><input type="text" name="subject_{{$item->id}}" id=""
                                    value="{{$item->subject}}"></td>
                            <td class="column1 style7 s"><input type="text" name="sender_{{$item->id}}" id=""
                                    value="{{$item->sender}}"></td>
                            <td class="column2 style7 s"><input type="text" name="report_monthly_{{$item->id}}" id=""
                                    value="{{$item->report_monthly}}"></td>
                            <td class="column3 style56 n"><input type="text" name="report_quarterly_{{$item->id}}" id=""
                                    value="{{$item->report_quarterly}}"></td>
                            <td class="column4 style6 s"><input type="text" name="report_half_yearly_{{$item->id}}"
                                    id="" value="{{$item->report_half_yearly}}"></td>
                            <td class="column5 style7 s"><input type="text" name="report_yearly_{{$item->id}}" id=""
                                    value="{{$item->report_yearly}}">-</td>
                            <td class="column6 style7 s"><input type="text" name="report_instant_{{$item->id}}" id=""
                                    value="{{$item->report_instant}}">-</td>
                            <td class="column7 style6 s"><input type="text" name="appnedix_{{$item->id}}" id=""
                                    value="{{$item->appnedix}}"></td>
                        </tr>

                        @endforeach






                    </tbody>
                </table>
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
            url: "{{url("update-form-budget_branch")}}",
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
</script>
