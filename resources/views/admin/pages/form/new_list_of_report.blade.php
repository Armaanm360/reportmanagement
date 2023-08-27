@extends('admin.master')
@section('content')
    @inject('form_model', 'App\Models\Form')
    @inject('usessrname', 'App\Models\UserForm')

    <style>
        .glow-on-hover {
            width: 220px;
            height: 50px;
            border: none;
            outline: none;
            color: #fff;
            background: #1572e8 !important;
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
                <h4 class="page-title">{{ __('Reports') }}</h4>
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
                        <a href="#">{{ __('Reports') }}</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">{{ __('List of Reports') }}</a>
                    </li>
                </ul>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('List of Reports') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatable" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>

                                            <th>{{ __('Sl') }}</th>
                                            <th>{{ __('Form Name') }}</th>
                                            <th>{{ __('Form Creator') }}</th>
                                            <th>{{ __('Form Type') }}</th>
                                            <th>{{ __('Action') }}</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($forms as $forms)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $forms->form_name }}</td>
                                                <td><span
                                                        class="font-weight-bold text-danger">{{ $usessrname->getUserName($forms->form_creator) }}</span>
                                                </td>
                                                <td>
                                                    @if ($forms->saved_form_type == 'data_form')
                                                        <span class="badge badge-dark">Data Form</span>
                                                    @else
                                                        <span class="badge badge-secondary">Plain Form</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary glow-on-hover"><a
                                                            href="{{ url('report/list/') }}/{{ $forms->saved_form_id }}"
                                                            class="text-white ">View Report</a></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary"><a
                                                            href="{{ url('form-tracker/') }}/{{ $forms->saved_form_id }}"
                                                            class="text-white ">Form Tracker</a></button>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>{{ __('Sl') }}</th>
                                            <th>{{ __('Form Name') }}</th>
                                            <th>{{ __('Form Creator') }}</th>
                                            <th>{{ __('Form Type') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </tfoot>
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



        });
    </script>
@endsection
