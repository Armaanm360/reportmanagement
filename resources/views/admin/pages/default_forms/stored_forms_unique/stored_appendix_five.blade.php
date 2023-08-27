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

 <form action="{{ url('update-form-appendix_five_update') }}" method="post" id="submitForm">
        @csrf
         <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">
              <div class="mt-4 item">
                <div class="header-item">
                    <div style="text-align: right;">
                      <h4>পরিশিষ্ট-৫</h4>
                    </div>
                    <div>
                      <h6>বিষয়</h6>
                    </div>
                  </div>
                  <div class="listed-content">
                    <ul>
                            <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">

               
                    
               
                        @foreach ($mis8 as $mis8)
                             <input type="hidden" name="eight_id" value="{{ $mis8 -> id  }}">
                              <input type="hidden" name="unique_form_id" value="{{ $mis8 -> unique_form_id  }}">
                            <li><input type="text" name="budget_sub8_{{ $mis8 -> id  }}" id="" value="{{ $mis8 -> budget_sub8 }}" readonly></li>
                        @endforeach


                      
                    </ul>
                  </div>
                  <div class="mt-4 item-table">
                    <h6 align="center">
                        @foreach ($mis2009 as $mis2009)
                           <input type="hidden" name="unique_form_id" value="{{ $mis2009 -> unique_form_id  }}" readonly>
                         <input type="hidden" name="nine2009_id" value="{{ $mis2009 -> id  }}" readonly>
                            <input type="text" name="budget_sub2009_{{ $mis2009 -> id  }}" id="" value="{{ $mis2009 -> budget_sub2009  }}" readonly>
                        @endforeach
                        
                       </h6>
                      <h6 align="center">
                          @foreach ($mis9 as $mis9)
                           <input type="hidden" name="unique_form_id" value="{{ $mis9 -> unique_form_id  }}" readonly>
                           <input type="hidden" name="nine_id" value="{{ $mis9 -> id  }}" readonly>
                              <input type="text" name="budget_sub9_{{ $mis9 -> id  }}" id="" value="{{ $mis9 -> budget_sub9  }}" readonly>
                          @endforeach
                          
                       </h6>
                      <table border="1">
                        <thead>
                          <tr>
                              <td>অর্থবছর</td>
                              <td>বাজেটে ঘোষিত কার্যক্রম/পরিকল্পনা</td>
                              <td>বাস্তবায়ন অগ্রগতি ২০১৯-২০ (১ম প্রান্তিক)</td>
                              <td>বাস্তবায়নকারী</td>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($tab5 as $tab5)
                          <tr>
                                <input type="hidden" name="unique_form_id" value="{{ $tab5 -> unique_form_id  }}">
                              <input type="hidden" name="row_id[]" value="{{ $tab5 -> id }}">
                              <td><input type="text" name="fiscal_year_{{ $tab5 -> id }}" id="" value="{{ $tab5 -> fiscal_year }}"></td>
                              <td><input type="text" name="activity_{{ $tab5 -> id }}" id="" value="{{ $tab5 -> activity }}"></td>
                              <td><input type="text" name="improvement_{{ $tab5 -> id }}" id="" value="{{ $tab5 -> improvement }}"></td>
                              <td><input type="text" name="implemented_{{ $tab5 -> id }}" id="" value="{{ $tab5 -> implemented }}"></td>
                          </tr>

                             @endforeach
                      </tbody>
                      </table>

                      
                  </div>
              </div>

               <div id="loader" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
              <div class="mt-4 mb-4 input-final">


    
     @foreach ($userforms as $userforms)
         @if ($userforms->duration > date('Y-m-d'))
             <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
              <button type="submit" class="btn btn-danger">সংশোধন</button>

         @endif
  


                 @endforeach


       

 
     
        
              </div>
              
          </form>



            {{-- <script type="text/javascript">
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
                        url: "{{url("update-form-appendix_five_update")}}",
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

            </script> --}}
