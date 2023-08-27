@extends('admin.master')
@section('content')
    <div class="content">

        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">{{ __('Form') }}</h4>
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
                        <a href="#">{{ __('Form') }}</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">{{ __($form[0]->sub_form_name) }}</a>
                    </li>
                </ul>
            </div>
            <div class="container-fluid" id="search_parameter_card">
                <div class="row">

                    <div class="col-md-2"></div>
                    <div class="col-md-8">

                        <form method="POST" id="form_parameter">
                            @csrf
                            <input type="hidden" name="form_id" id="form_id" value="{{ $form[0]->id }}">

                            <input type="text" name="testuser" value="{{ Auth::user()->id }}">




                            @foreach ($userforms as $userforms)
                                <h1><input type="hidden" name="useridget"
                                        value="{{ $userforms->sub_form_id_unique_id }}"></h1>
                                <h1><input type="hidden" name="usersubform" value="{{ $userforms->sub_form_id }}"></h1>

                                {{-- <h1><input type="text" name="user_group" value="{{ $userforms -> group_id }}"></h1> --}}
                                <h1><input type="hidden" name="method" value="{{ $userforms->method }}"></h1>
                                <h1><input type="hidden" name="group_id" value="{{ $userforms->group_id }}"></h1>
                            @endforeach

                            {{-- @foreach ($userforms_get as $userforms_get)
                            <input type="text" name="check_group" value="{{ $userforms_get-> id }}">
                        @endforeach --}}

                        </form>






                    </div>

                    <div class="col-md-2"></div>

                    <div id="loader" class="lds-ellipsis">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>

            <div class="container-fluid" id="founded_form">

            </div>
        </div>
    </div>

    <script>
        //$('div#founded_form').hide();
        // $(document).on('click','button#form_clear',function(event){
        //     event.preventDefault();
        //     $('form#form_parameter')[0].reset();
        //     $('div#founded_form').hide();
        // });

        // $('#exampleYear').change(function(){
        //    var value = $('#exampleYear :selected').val();
        //    var txt = $('#exampleYear :selected').text();
        //    $('span#yearText').html(txt);
        //    $('input#yearTextInput').val(value);

        //     let uniqueFormId = 'Form-'+Math.floor(Math.random() * 900000) + Math.floor(1000 + Math.random() * 9000);
        //  $('#unique_form_id').val(uniqueFormId);
        //   $("#loader").hide();

        // });


        let data = $('#form_parameter').serializeArray();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{ url('get-form-for-submit') }}",
            data: data,
            success: function(data, textStatus, jqXHR) {

            }
        }).done(function(data) {
            $('div#founded_form').html(data);
            $('#loader').hide();
        }).fail(function(data, textStatus, jqXHR) {
            $("#loader").hide();
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function(key, value) {
                //                console.log(key);
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value +
                    "</span>");
            });
        });
    </script>
@endsection
