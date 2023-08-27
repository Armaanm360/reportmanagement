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
                    <a href="#">{{__('')}}</a>
                </li>
            </ul>
        </div>

      <form action="{{ url('update-form-appendix_six_update') }}" method="post" id="submitForm">
        @csrf
              <div class="mt-4 item">
                <div class="header-item">
                    <div style="text-align: right;">
                      <h4>পরিশিষ্ট-৬</h4>
                    </div>
                    <div>
                      <h6>বিষয়</h6>
                    </div>
                  </div>
                  <div class="listed-content">
                    <ul>

                        @foreach ($budget_sub as $budget_sub)
                           <input type="hidden" name="budget_sub_id" value="{{ $budget_sub -> id }}">
                        <li><input type="text" name="budget_sub_{{ $budget_sub -> id }}" id="" value="{{ $budget_sub -> budget_sub }}"></li>
                        @endforeach
                     
                    </ul>
                  </div>
                  <div class="header-item">
                    <div style="text-align: center;">
                      <h4>মঞ্জুরী ও বরাদ্দ দাবীসমূহ ২০১৯-২০ প্রক্ষেপণ</h4>
                    </div>
                  </div>
                  <div class="listed-content">
                    <ul>
                        @foreach ($head1 as $head1)
                             <li><input type="text" name="claim_1_head[]" id="" value="{{ $head1 ->claim_1_head  }}">
                                <input type="hidden" name="head_id_1" id="" value="{{ $head1 ->id  }}">
                        @endforeach
                     
                        <ul>
                            @foreach ($claim_1 as $claim_1)
                                 <li><input type="text" name="claim_1_{{ $claim_1->id }}" id="" value="{{ $claim_1 ->claim_1 }}"></li>
                                 <input type="hidden" name="claim_1_id" id="" value="{{ $claim_1->id  }}">
                            @endforeach
                           
                           

                        </ul>
                    </li>
                    @foreach ($head2 as $head2)
                             <li><input type="text" name="claim_2_head[]" id="" value="{{ $head2 -> claim_2_head  }}">
                                 <input type="hidden" name="head_id_2" id="" value="{{ $head2 -> id  }}">
                        @endforeach
                       
                        
                            <table width="100%" border="1">
                                <thead>
                                    <tr>
                                        <td colspan="2">অর্থবছর</td>
                                        <td>পরিচালন</td>
                                        <td>উন্নয়ন</td>
                                        <td>মোট</td>
                                        <td>আবর্তক</td>
                                        <td>মূলধন</td>
                                        <td>আর্থিক সম্পদ</td>
                                        <td>দায়</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($table_six as $table_six)
                                     <tr class="row170">
                                    <input type="hidden" name="row_id[]" value="{{ $table_six ->id }}">
                                    <td class="column0 style110 s"><input type="text" name="fiscal_year_{{ $table_six -> id }}" id="" value="{{ $table_six -> fiscal_year }}"></td>
                                    <td class="column1 style111 s"><input type="text" name="topic_{{ $table_six -> id }}" id="" value="{{ $table_six -> topic }}"></td>
                                    <td class="column2 style112 s"><input type="text" name="operating_{{ $table_six -> id }}" id="" value="{{ $table_six -> operating }}"></td>
                                    <td class="column3 style112 s"><input type="text" name="development_{{ $table_six -> id }}" id="" value="{{ $table_six -> development }}"></td>
                                    <td class="column4 style112 s"><input type="text" name="total_{{ $table_six -> id }}" id="" value="{{ $table_six -> total }}"></td>
                                    <td class="column5 style112 s"><input type="text" name="recurring_{{ $table_six -> id }}" id="" value="{{ $table_six -> recurring }}"></td>
                                    <td class="column6 style112 s"><input type="text" name="capital_{{ $table_six -> id }}" id="" value="{{ $table_six -> capital }}"></td>
                                    <td class="column7 style112 s"><input type="text" name="asset_{{ $table_six -> id }}" id="" value="{{ $table_six -> asset }}"></td>
                                    <td class="column8 style112 n"><input type="text" name="liability_{{ $table_six -> id }}" id="" value="{{ $table_six -> liability }}"></td>
                                  </tr>
                                    @endforeach
                                  
                                
                                </tbody>

                            </table>
                       
                    </li>
                 
                    <li>   @foreach ($head3 as $head3)
                            <input type="text" name="claim_3_head[]" id="" value="{{ $head3 -> claim_3_head  }}">
                            <input type="hidden" name="head_id_3" id="" value="{{ $head3 -> id  }}">
                        @endforeach
                        <ul>
                            @foreach ($claim_3 as $claim_3)
                                 <li><input type="text" name="claim_3_{{ $claim_3->id }}" id="" value="{{ $claim_3 -> claim_3 }}"></li>
                                  <input type="hidden" name="claim_3_id" id="" value="{{ $claim_3 -> id  }}">
                            @endforeach
                            <li>
                               
                                <ul>
                                  
                                  @foreach ($claim_3_1 as $claim_3_1)
                                 <li><input type="text" name="claim_3_1_{{ $claim_3_1->id }}" id="" value="{{ $claim_3_1 -> claim_3_1 }}"></li>
                                  <input type="hidden" name="claim_3_1_id" id="" value="{{ $claim_3_1 ->id  }}">
                            @endforeach
                                </ul>
                            </li>

                        </ul>
                    </li>
                  </ul>
                  </div>
                  <div class="header-item">
                    <div style="text-align: center;">
                      <h4>Demands for Grants and Appropriations 2019-20</h4>
                    </div>
                  </div>
                  <div class="listed-content">
                    {{-- <ul>
                      <li><input type="text" name="claim_eng[]" id="" value="1.	The main functions of Financial Institutions Division:">
                        <ul>
                            <li><input type="text" name="claim_eng[]" id="" value="a)	Enactment/formulation of policies, laws, rules and regulations related to Bank, Insurance, Capital market and others financial institutions and related services; "></li>
                            <li><input type="text" name="claim_eng[]" id="" value="b)	Development of financial markets and institutions;">
                                
                                </li>
                            <li>
                                <input type="text" name="claim_eng[]" id="" value="c)	Co-ordination of the activities of regulatory authorities of financial sector;"></li>
                            <li>
                                <input type="text" name="claim_eng[]" id="" value="d)	The overall Monitoring and Evaluation of the activities of state-owned banks and financial institutions;"></li>
                            <li>
                                <input type="text" name="claim_eng[]" id="" value="e)	Expansion of Capital Market through introduction of new products and supply of securities having good fundamentals;">
                                </li>
                            <li>
                                <input type="text" name="claim_eng[]" id="" value="f)	Building confidence of the people on insurance sector through implementing reform programs and expanding the coverage of insurance through creating mass awareness;"></li>
                            <li>
                                <input type="text" name="claim_eng[]" id="" value="g)	Creating self-employment and reducing poverty through expansion of microcredit activities.">
                            </li>

                        </ul>
                    </li> --}}
                    <li><input type="text" name="claim_eng[]" id="" value="2.  	The revised budget allocation (Non-Development and Development) from FY 2016-17 to FY 2018-19 and the proposed allocation (Non-Development and Development) for FY 2019-20 of Financial Institutions Division are shown below: ">
                        
                            {{-- <table width="100%" border="1">
                                <thead>
                                    <tr>
                                        <td colspan="2">Financial Year</td>
                                        <td>Operating</td>
                                        <td>Development</td>
                                        <td>Total</td>
                                        <td>Recurring</td>
                                        <td>Capital</td>
                                        <td>Asset</td>
                                        <td>Liability</td>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr class="row205">
                                    <td class="column0 style128 s"><input type="text" name="fiscal_year_5" id="" value="2016-17"></td>
                                    <td class="column1 style129 s"><input type="text" name="topic_5" id="" value="Revised Budget"></td>
                                    <td class="column2 style129 s"><input type="text" name="operating_5" id="" value="158,24,80"></td>
                                    <td class="column3 style129 s"><input type="text" name="development_5" id="" value="1950,30,50"></td>
                                    <td class="column4 style129 s"><input type="text" name="total_5" id="" value="2108,55,30"></td>
                                    <td class="column5 style129 s"><input type="text" name="recurring_5" id="" value="253,47,30"></td>
                                    <td class="column6 style129 s"><input type="text" name="capital_5" id="" value="41,00"></td>
                                    <td class="column7 style129 s"><input type="text" name="asset_5" id="" value="1854,67,00"></td>
                                    <td class="column8 style129 n"><input type="text" name="liability_5" id="" value="0"></td>
                                  </tr>
                                  <tr class="row206">
                                    <td class="column0 style128 s"><input type="text" name="fiscal_year_6" id="" value="2017-18"></td>
                                    <td class="column1 style129 s"><input type="text" name="topic_6" id="" value="Revised Budget"></td>
                                    <td class="column2 style129 s"><input type="text" name="operating_6" id="" value="358,93,66"></td>
                                    <td class="column3 style129 s"><input type="text" name="development_6" id="" value="1985,56,00"></td>
                                    <td class="column4 style129 s"><input type="text" name="total_6" id="" value="2344,49,66"></td>
                                    <td class="column5 style129 s"><input type="text" name="recurring_6" id="" value="373,37,66"></td>
                                    <td class="column6 style129 s"><input type="text" name="capital_6" id="" value="12,65,50"></td>
                                    <td class="column7 style129 s"><input type="text" name="asset_6" id="" value="1958,46,50"></td>
                                    <td class="column8 style129 n"><input type="text" name="liability_6" id="" value="0"></td>
                                  </tr>
                                  <tr class="row207">
                                    <td class="column0 style128 s"><input type="text" name="fiscal_year_7" id="" value="2018-19"></td>
                                    <td class="column1 style130 s"><input type="text" name="topic_7" id="" value="Revised Budget"></td>
                                    <td class="column2 style129 s"><input type="text" name="operating_7" id="" value="439,04,00"></td>
                                    <td class="column3 style129 s"><input type="text" name="development_7" id="" value="2183,05,00"></td>
                                    <td class="column4 style129 s"><input type="text" name="total_7" id="" value="2622,09,00"></td>
                                    <td class="column5 style129 s"><input type="text" name="recurring_7" id="" value="341,39,60"></td>
                                    <td class="column6 style129 s"><input type="text" name="capital_7" id="" value="126,02,00"></td>
                                    <td class="column7 style129 s"><input type="text" name="asset_7" id="" value="2154,67,40"></td>
                                    <td class="column8 style129 n"><input type="text" name="liability_7" id="" value="0"></td>
                                  </tr>
                                  <tr class="row208">
                                    <td class="column0 style128 s"><input type="text" name="fiscal_year_8" id="" value="2019-20"></td>
                                    <td class="column1 style130 null"><input type="text" name="topic_8" id="" value=""></td>
                                    <td class="column2 style129 null"><input type="text" name="operating_8" id="" value=""></td>
                                    <td class="column3 style129 null"><input type="text" name="development_8" id="" value=""></td>
                                    <td class="column4 style129 null"><input type="text" name="total_8" id="" value=""></td>
                                    <td class="column5 style129 null"><input type="text" name="recurring_8" id="" value=""></td>
                                    <td class="column6 style129 null"><input type="text" name="capital_8" id="" value=""></td>
                                    <td class="column7 style129 null"><input type="text" name="asset_8" id="" value=""></td>
                                    <td class="column8 style129 null"><input type="text" name="liability_8" id="" value=""></td>
                                  </tr>
                                </tbody>

                            </table> --}}
                       
                    </li>
                    {{-- <li><input type="text" name="claim_eng[]" id="" value="3.   In FY 2019-20 the following important activities/projects/programs are scheduled to be implemented:">
                        <ul>
                            <li><input type="text" name="claim_eng[]" id="" value="a)	Framing rules and regulation and effective monitoring of the activities under the Insurance Development and Regulatory Authority Act, 2010 and Insurance Act, 2010;">
                                
                            </li><li>
                                
                                <input type="text" name="claim_eng[]" id="" value="b)	Implementation of time bound action plan for the National Insurance policy 2014;">
                            </li>
                            <li>
                                
                                <input type="text" name="claim_eng[]" id="" value="c)	Continuation of the reform programs to ensure transparency and efficiency and to infuse dynamism in the capital markets for safeguarding the interests of general investors;">

                            </li>
                            <li>
                                
                                <input type="text" name="claim_eng[]" id="" value="d)	Monitoring the activities of the state-owned commercial banks, specialized banks and financial institutions as well as making amendment of the related laws;">
                            </li>
                            <li>
                                
                                <input type="text" name="claim_eng[]" id="" value="e)	Monitoring and evaluation of the activities of Microcredit Regulatory Authority (MRA), Bangladesh Institute of Capital Market (BICM) and Bangladesh Insurance Academy (BIA);">
                            </li>
                            <li>
                               
                                <input type="text" name="claim_eng[]" id="" value="f)	Monitoring of Equity Entrepreneurship Fund (Agriculture/IT) managed by Bangladesh Bank and Investment Corporation of Bangladesh (ICB);">
                            </li>
                            <li>
                                <input type="text" name="claim_eng[]" id="" value="g)	Coordination and supervision of activities relating to receive foreign loan/grant, loan agreement, authorization of programs implemented by Palli Karma-Shahayak Foundation (PKSF), Social Development Foundation (SDF), Bangladesh NGO Foundation (BNF) and Bangladesh Municipal Development Fund (BMDF) including functions relating to financial inclusion and social safety nets;"></li>
                            <li>
                                
                               <input type="text" name="claim_eng[]" id="" value=" h)	Non-ADP projects being implemented by Bangladesh Bank: Financing Brick Klin Efficiency Improvement project (BKEIP); Foreign Direct Investment Promotion Project (FDIPP); Urban Building Safety Project; Financial Sector Support Project (FSSP); Second Small &amp; Medium Enterprise Development project (SMEDP-2); Small Medium sized Farmers Agricultural productivity Improvement &amp; Diversification Financing and Credit Facility Program to Finance-RMG Project and Rural &amp; Perry Urban Housing Finance Project being implemented by Bangladesh House Building Finance Corporation."> </li>
                            <li>
                               <input type="text" name="claim_eng[]" id="" value="i)	Monitoring, allocation, authorization and co-ordination of the following ADP development projects implemented by the Bangladesh Bank, Bangladesh Securities and Exchange Commission and Insurance Development and Regulatory Authority:">
                                <ul>
                                    <li>
                                       
                                       <input type="text" name="claim_eng[]" id="" value="i.	Financial Sector Support Project (FSSP) being implemented by Bangladesh Bank (BB);"> 

                                    </li>
                                    <li>
                                        
                                       <input type="text" name="claim_eng[]" id="" value="ii.	Capital Market Development Project-III being implemented by Bangladesh Securities and Exchange Commission (BSEC);"> 
                                    </li>
                                    <li>
                                        
                                       <input type="text" name="claim_eng[]" id="" value="iii.	Credit Facility Program to Finance-RMG being implemented by BB;"> 
                                    </li>
                                    <li>
                                        
                                        <input type="text" name="claim_eng[]" id="" value="iv.	Second Small &amp; Medium Enterprise Development project (SMEDP-2) being implemented by BB.">
                                    </li>
                                    <li>
                                        
                                        <input type="text" name="claim_eng[]" id="" value="v.	Bangladesh Insurance Sector Development Project being implemented by Insurance Development Regulatory Authority (IDRA);">
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li> --}}
                  </ul>
                  </div>
                  
              </div>
              <div class="mt-4 mb-4 input-final">
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
                        url: "{{url("update-form-appendix_six_update")}}",
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
