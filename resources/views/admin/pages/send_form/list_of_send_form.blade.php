@extends('admin.master')
@section('content')
    @inject('form_model', 'App\Models\Form')
    @inject('usessrname', 'App\Models\UserForm')
    @inject('userform', 'App\Models\UserForm')

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
                        <a href="#">{{ __('List of Form') }}</a>
                    </li>
                </ul>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('List of Form') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatable" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Sl') }}</th>
                                            <th>{{ __('Form Name') }}</th>
                                            <th>{{ __('Form Unique ID') }}</th>
                                            {{-- <th>{{ __('Sender') }}</th>
                                            <th>{{ __('Reciver') }}</th> --}}
                                            {{-- <th>{{ __('Last Date') }}</th> --}}
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($forms as $row)
                                            {{-- <pre>
                                                {{ $row->id }} --}}
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>

                                                    {{ $userform->getUserFormById($row->id) }}
                                                    {{-- {{ $row->sub_form_id }} --}}
                                                </td>
                                                <td>




                                                </td>



                                                {{-- <td>

                                                    {{ $userform->getUserName($row->sender_user_id) }}


                                                </td>

                                                <td>

                                                    {{ $userform->getUserName($row->reciever_user_id) }}


                                                </td> --}}
                                                {{-- <td>{{ $row->send_date }}</td> --}}
                                                <td>

                                                    @if (Auth::user()->user_type == 'ENTRY_USER')
                                                                 <a class="btn btn-success btn-sm"
                                                        href="{{ url('created-submit-form') }}/{{ $row->id }}">
                                                        {{ __('View') }}
                                                    </a>
                                                    @else
                                                     <a class="btn btn-success btn-sm"
                                                        href="{{ url('form') }}/{{ $row->id }}">
                                                        {{ __('View') }}
                                                    </a>

                                                    @endif
                                           
                                                    <a class="btn btn-danger btn-sm text-white">
                                                        {{ __('Delete') }}
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>{{ __('Sl') }}</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('ID') }}</th>
                                            <th>{{ __('Action') }}</th>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable').DataTable({

            });

            function nimbaLambi() {
                $('#btn_change').text("Reminder Sent");
                $('#btn_change').addClass("btn btn-light");
                $('#btn_change').addClass("disabled");
            }



            $('form#remind_form').submit(function(e) {
                e.preventDefault();
                let data = $('#remind_form').serializeArray();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: "POST",
                    url: "{{ url('reminder-notification') }}",
                    data: data,
                    success: function(data, textStatus, jqXHR) {
                        $('#btn_change').text("Sending");
                        $('#btn_change').addClass("btn btn-info");
                        $('#btn_change').addClass("disabled");

                        setTimeout(nimbaLambi, 4000);
                    }
                })

            });











            // 	$("form#remind_form").submit(function(e){
            // 		e.preventDefault();
            // 					// let rem_oid = $('input#rem_form_id').val();

            // 					alert();

            // // 			$.ajax({
            // //         url:{{ url('reminder-notification') }},
            // //         method:"POST",
            // //         data: new FormData(this),
            // //         contentType:false,
            // //         processData:false,
            // //         success:function(response){

            // //                alert(response)


            // //         }

            // // });






            // 		// $("#btn_change").click(function () {


            //     //    $('#btn_change').text("Reminder Sent");
            //     //    $('#btn_change').addClass("btn btn-light");
            //     //    $('#btn_change').attr("checked");
            //     // });	

        });


        (document).on();
    </script>
@endsection
