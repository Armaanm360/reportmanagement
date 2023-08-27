@extends('admin.master')
@section('content')
    @inject('form_model', 'App\Models\Form')
    @inject('usessrname', 'App\Models\UserForm')
    @inject('durartion', 'App\Models\UserForm')

    <style>
        .glow-on-hover {
            width: 220px;
            height: 50px;
            border: none;
            outline: none;
            color: #fff;
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
        }

        .glow-on-hover:before {
            content: '';
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 10px;
        }

        .glow-on-hover:active {
            color: #000
        }

        .glow-on-hover:active:after {
            background: transparent;
        }

        .glow-on-hover:hover:before {
            opacity: 1;
        }

        .glow-on-hover:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: #111;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        @keyframes glowing {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        }
    </style>
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
                            <h4 class="card-title">{{ __('List of Reports') }}</h4>
                            <span class="float-right"><button class="btn btn-lg glow-on-hover"><a class="text-white"
                                        href="{{ url('compiled-report/') }}/{{ $form[0]->id }}">Compiled
                                        Report</a></button></span>
                            <h3>{{ $data_count }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatable" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>

                                            <th>{{ __('Sl') }}</th>
                                            <th>{{ __('Branch') }}</th>
                                            <th>{{ __('Last Date of Submission') }}</th>
                                            {{-- <th>{{ __('Remaining Time') }}</th> --}}
                                            <th>{{ __('Status') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                            echo '<tr>';
                                            foreach ($data_value as $key => $value) {
                                                $counting = $data_count + 1;
                                            
                                                foreach ($value as $key_col => $col) {
                                                    $checkread = strlen($col);
                                                    $present_form_id = $form[0]->id;
                                                    $url_link = URL::to('/individual-report-show/');
                                                    $dur = $durartion->getDuration($present_form_id, $col);
                                                    echo '<td>' . $i++ . '</td>';
                                            
                                                    $username = $usessrname->getDeptNameUserWise($col);
                                            
                                                    echo "<td><a href='$url_link/$col/$present_form_id'>$username</a></td>";
                                            
                                                    echo "<td>$dur</td>";
                                            
                                                    echo '<td><span class="badge badge-pill badge-primary">Approved</span></td>';
                                                    echo '<td id="serial"><button class="btn btn-warning text-white" get_user='.$col.' get_form_id='.$present_form_id.' id="reminder_btn">Send Reminder</button></td>';
                                                }
                                            
                                                // echo '<td><span class="badge badge-pill badge-primary"></span></td>';
                                            
                                                echo '</tr>';
                                            }
                                            
                                        @endphp
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>{{ __('Sl') }}</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('ID') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable').DataTable({});

            let id = $(this).attr('delattr');

            $('.dynamic').each(function(idx, elem) {
                $(elem).text(idx + 1);
            });



            $('button#reminder_btn').click(function(event) {
                event.preventDefault();

                let get_user = $(this).attr('get_user');
                let get_form_id = $(this).attr('get_form_id');

                $.ajax({
                    url: "{{ url('reminder-notification') }}/" + get_user + '/' + get_form_id,
                    success: function(response) {
                        location.reload();


                    }
                });


            });




            $('#delbtn').click(function(event) {
                //   var form =  $(this).closest("form");
                let id = $(this).attr('delattr');

                //  alert(id);
                //   let id = $(this).attr('delattr');
                //   event.preventDefault();

                //   alert(id);
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this imaginary file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {

                            $.ajax({
                                url: 'list/' + id,
                                success: function(dataResult) {
                                    location.reload(true);


                                }
                            });





                            swal("Poof! Your imaginary file has been deleted!", {
                                icon: "success",
                            });
                        } else {
                            swal("Your imaginary file is safe!");
                        }
                    });
            });



            //     $("#delete_form").click(function()
            //     {
            //         var del_id = $(this).attr('id');

            //      $.ajax({
            //     type: "GET",
            //     url: "/forms/list/" + del_id,
            //     success: function (data) {
            //         console.log('deleted');
            //     }
            // });
            //     });


            let deadline = $('span#deadline').text();
            // alert(deadline);

            // Set the date we're counting down to
            var countDownDate = new Date(deadline).getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                    minutes + "m " + seconds + "s ";

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);



        });
    </script>
@endsection
