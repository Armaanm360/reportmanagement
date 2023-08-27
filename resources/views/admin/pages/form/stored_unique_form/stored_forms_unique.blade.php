@extends('admin.master')
@section('content')

<div class="content">

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">{{__('Defult Stored Forms')}}</h4>
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
                    <a href="#">{{__('Defult Stored Forms')}}</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">{{__($form[0]->sub_form_name)}}</a>
                </li>
            </ul>
        </div>
           <div class="row">


<div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{__('List of Form')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="display table table-striped table-hover" >
                                          <thead>
                    <tr>
                        <th>{{__('Sl')}}</th>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Stored Time/Date')}}</th>
                        <th>{{__('ID')}}</th>
                        <th>{{__('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
             @foreach($parameter as $parameter)
                        <tr>
                            <td>
                       {{ $loop-> iteration }}
                            </td>

                            <td>
                       {{ $parameter-> form_name }}
                            </td>

                            <td>
                              
                                    @csrf
                           
                                <input type="text" name="landi2" value="{{ $parameter-> form_id }}"> 
                        {{ $parameter-> form_unique_id }}
                            </td>
                                  
                            <td>
                             4  <input type="text" name="landi" value="{{ $parameter-> form_unique_id }}"> {{-- <input type="text" value="{{ $parameter-> form_unique_id }}" name="form_id_get" style="border: none" readonly> --}}
                            </td>
                        
                            <td>
                                 <a class="btn btn-success btn-sm" href="{{ url('indiv-stored-forms/'.$parameter->form_id.'/'.$parameter->form_unique_id.'/') }}">
                                   
                                {{__('Edit')}}

                                 <a class="btn btn-danger btn-sm" href="">
                                   
                                {{__('Delete')}}
                            </td>
                               
                        </tr>

                        @endforeach

                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>{{__('Sl')}}</th>
                                        <th>{{__('Name')}}</th>
                                        <th>{{__('ID')}}</th>
                                        <th>{{__('Action')}}</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>

        </div>

           <div class="container-fluid" id="founded_form">

        </div>
    </div>
</div>

<script>


    $(document).ready(function () {
        $('#basic-datatable').DataTable({
        });

    });



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
            url: "{{url("storedforms")}}",
             data:data,         
            success: function (data, textStatus, jqXHR) {

            }
        }).done(function (data) {
            $('div#founded_form').html(data);
            $('#loader').hide();       
        }).fail(function (data, textStatus, jqXHR) {
            $("#loader").hide();
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function (key, value) {
//                console.log(key);
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });



</script>
@endsection    
