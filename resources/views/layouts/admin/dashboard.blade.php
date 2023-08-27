@extends('admin.master')
@section('content')
    @inject('dashboard', 'App\Models\Dashboard')
    @inject('form_creator', 'App\Models\UserForm')
    @inject('form_creator_one', 'App\Models\UserForm')
    <?php $user = Auth::user(); ?>
    <style>
        @media screen and (min-width: 700px) {
            .dashboard-colmn-4 {
                margin-top: 30px;
            }
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            border: none;
            position: relative;
            margin-bottom: 30px;
            box-shadow: 0 0.46875rem 2.1875rem rgba(90, 97, 105, 0.1), 0 0.9375rem 1.40625rem rgba(90, 97, 105, 0.1), 0 0.25rem 0.53125rem rgba(90, 97, 105, 0.12), 0 0.125rem 0.1875rem rgba(90, 97, 105, 0.1);
        }

        .l-bg-cherry {
            background: linear-gradient(to right, #493240, #f09) !important;
            color: #fff;
        }

        .l-bg-blue-dark {
            background: linear-gradient(to right, #373b44, #4286f4) !important;
            color: #fff;
        }

        .l-bg-green-dark {
            background: linear-gradient(to right, #0a504a, #38ef7d) !important;
            color: #fff;
        }

        .l-bg-orange-dark {
            background: linear-gradient(to right, #a86008, #ffba56) !important;
            color: #fff;
        }

        .card .card-statistic-3 .card-icon-large .fas,
        .card .card-statistic-3 .card-icon-large .far,
        .card .card-statistic-3 .card-icon-large .fab,
        .card .card-statistic-3 .card-icon-large .fal {
            font-size: 110px;
        }

        .card .card-statistic-3 .card-icon {
            text-align: center;
            line-height: 50px;
            margin-left: 15px;
            color: #000;
            position: absolute;
            right: -5px;
            top: 20px;
            opacity: 0.1;
        }

        .l-bg-cyan {
            background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
            color: #fff;
        }

        .l-bg-green {
            background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
            color: #fff;
        }

        .l-bg-orange {
            background: linear-gradient(to right, #f9900e, #ffba56) !important;
            color: #fff;
        }

        .l-bg-cyan {
            background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
            color: #fff;
        }
    </style>
    <div class="content @if (CurrSessionMode() == 'dark') dark-mode @endif">
        <div class="panel-header @if (CurrSessionMode() == 'dark') dark-mode @else bg-primary-gradient @endif">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">{{ __('Dashboard') }}</h2>
                        <h5 class="text-white op-7 mb-2">{{ __('Report Management') }}</h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        {{-- <a href="{{url('reports')}}" class="btn btn-white btn-border btn-round mr-2">{{__('Manage Report')}}</a>
                    <a href="{{url('reports/create')}}" class="btn btn-secondary btn-round">{{__('Form 1.1')}}</a>
                    <a href="{{url('create_report_one_point_two')}}" class="btn btn-secondary btn-round">{{__('Form 1.2')}}</a>
                    <!--<a href="{{url('report-1')}}" class="btn btn-secondary btn-round">{{__('Report 1')}}</a>-->
                    <a href="{{url('report-1')}}" class="btn btn-secondary btn-round">{{__('Report 1')}}</a>
                    <a href="{{url('report-2')}}" class="btn btn-secondary btn-round">{{__('Report 2')}}</a>
                    <a href="{{url('report-3')}}" class="btn btn-secondary btn-round">{{__('Report 3')}}</a> --}}

                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            @if (Auth::user()->user_category == 1)
                <div class="row row-card-no-pd mt--2">
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="la flaticon-users"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-stats">
                                        <a href="{{ url('users') }}">
                                            <div class="numbers">
                                                <p class="card-category">{{ __('Total User') }}</p>
                                                <h4 class="card-title">{{ $dashboard->total_employees() }}</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="la flaticon-users"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-stats">
                                        <a href="{{ url('submitted-reports') }}">
                                            <div class="numbers">
                                                <p class="card-category">{{ __('Submitted Reports') }}</p>
                                                <h4 class="card-title">{{ $dashboard->total_submitted_reports() }}</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="la flaticon-users"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-stats">
                                        <a href="{{ url('pending-reports') }}">
                                            <div class="numbers">
                                                <p class="card-category">{{ __('Pending Reports') }}</p>
                                                <h4 class="card-title">{{ $dashboard->total_pending_reports() }}</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="la flaticon-users"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-stats">
                                        <a href="{{ url('pending-reports') }}">
                                            <div class="numbers">
                                                <p class="card-category">{{ __('Reports Monthly') }}</p>
                                                <h4 class="card-title">{{ $dashboard->total_monthly_reports() }}</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            @endif
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-content">
                            <div class="card-body cleartfix">
                                <div class="media align-items-stretch">
                                    <div class="align-self-center">
                                        <i class="icon-pencil primary font-large-2 mr-2"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Total Forms</h4>
                                        <span>All</span>
                                    </div>
                                    <div class="align-self-center">
                                        <h1>{{ $total_forms_count }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body cleartfix">
                                <div class="media align-items-stretch">
                                    <div class="align-self-center">
                                        <i class="fas fa-users warning font-large-2 mr-2"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Total users</h4>
                                        <span>Monthly Users Counts</span>
                                    </div>
                                    <div class="align-self-center">
                                        <h1>{{ $total_users_count }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-10 ">
                    <div class="row ">
                        <div class="col-xl-3 col-lg-6">
                            <div class="card l-bg-cherry">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-pen"></i></div>
                                    <div class="mb-4">
                                        <h5 class="card-title mb-0 text-white">Completed Forms</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                {{ $total_completed_forms }}
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span>12.5% <i class="fa fa-arrow-up"></i></span>
                                        </div>
                                    </div>
                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card l-bg-blue-dark">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                    <div class="mb-4">
                                        <h5 class="card-title mb-0 text-white">Sent Forms</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                {{ $total_sent_forms }}
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span>9.23% <i class="fa fa-arrow-up"></i></span>
                                        </div>
                                    </div>
                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                        <div class="progress-bar l-bg-green" role="progressbar" data-width="25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 25%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card l-bg-green-dark">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-caret-square-right"></i></div>
                                    <div class="mb-4">
                                        <h5 class="card-title mb-0 text-white">Created Forms</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                {{ $total_created_forms }}
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span>10%<i class="fa fa-arrow-up"></i></span>
                                        </div>
                                    </div>
                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 25%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card l-bg-orange-dark">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-external-link-square-alt"></i>
                                    </div>
                                    <div class="mb-4">
                                        <h5 class="card-title mb-0 text-white">Default Forms</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                {{ $total_default_forms }}
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span>2.5% <i class="fas fa-external-link-square-alt"></i></span>
                                        </div>
                                    </div>
                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 25%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div class="align-self-center">
                                    <i class="fas fa-pencil-alt text-info fa-3x"></i>
                                </div>
                                <div class="text-end">
                                    <h3>{{ $total_new_forms_today }}</h3>
                                    <p class="mb-0">New Forms (Today)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div class="align-self-center">
                                    <i class="far fa-comment-alt text-warning fa-3x"></i>
                                </div>
                                <div class="text-end">
                                    <h3>{{ $total_new_forms_week }}</h3>
                                    <p class="mb-0">New Forms (This Week)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div class="align-self-center">
                                    <i class="fas fa-chart-line text-success fa-3x"></i>
                                </div>
                                <div class="text-end">
                                    <h3>{{ $total_new_forms_month }}</h3>
                                    <p class="mb-0">New Forms (This Month)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div class="align-self-center">
                                    <i class="fas fa-chalkboard-teacher text-danger fa-3x"></i>
                                </div>
                                <div class="text-end">
                                    <h3>{{ $total_users_count }}</h3>
                                    <p class="mb-0">Total Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-danger">{{ $total_data_forms }}</h3>
                                    <p class="mb-0">Data Form</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="far fa-file-excel text-danger fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-success">{{ $total_plain_forms }}</h3>
                                    <p class="mb-0">Plain Forms</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-file-powerpoint text-success fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-warning">{{ $total_default_forms }}</h3>
                                    <p class="mb-0">Default forms</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-sticky-note text-warning fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-info">{{ $new_users_today }}</h3>
                                    <p class="mb-0">New Users(Today)</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-users text-info fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-info">278</h3>
                                    <p class="mb-0">Pending Reports</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-book-open text-info fa-3x"></i>
                                </div>
                            </div>
                            <div class="px-md-1">
                                <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%;"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-warning">{{ $backed_forms }}</h3>
                                    <p class="mb-0">Backed Forms</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="far fa-comments text-warning fa-3x"></i>
                                </div>
                            </div>
                            <div class="px-md-1">
                                <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 35%;"
                                        aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-success">{{ $rejected_reports }}</h3>
                                    <p class="mb-0">Rejected Reports</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-redo text-success fa-3x"></i>
                                </div>
                            </div>
                            <div class="px-md-1">
                                <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%;"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-danger">{{ $total_completed_forms }}</h3>
                                    <p class="mb-0">Approved Reports</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-gem text-danger fa-3x"></i>
                                </div>
                            </div>
                            <div class="px-md-1">
                                <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%;"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-info">
                                    @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                                        {{ __('Sent Forms' . '(Entry User)') }}
                                    @endif

                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatable2" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>

                                                <th>{{ __('Form Name') }}</th>
                                                <th>{{ __('Sender') }}</th>
                                                <th>{{ __('Receiver') }}</th>
                                                <th>{{ __('Form Type') }}</th>
                                                <th>{{ __('Deadline') }}</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($only_sent_forms as $item)
                                                <tr>

                                                    <td>

                                                        {{ $item->form_name }}

                                                    </td>
                                                    <td>

                                                        @if ($item->ae_sender_id)
                                                            <span
                                                                class="text-dark">{{ $form_creator->getUserName($item->ae_sender_id) }}</span>,<span
                                                                class="text-primary">{{ $form_creator->getDeptNameUserWise($item->ae_sender_id) }}</span>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        @if ($item->ae_receiver_id)
                                                            <span
                                                                class="text-dark">{{ $form_creator->getUserName($item->ae_receiver_id) }}</span>,<span
                                                                class="text-primary">{{ $form_creator->getDeptNameUserWise($item->ae_receiver_id) }}</span>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if ($item->saved_form_type == 'plain_form')
                                                            <span class="text-info">Plain Form</span>
                                                        @endif
                                                        @if ($item->saved_form_type == 'data_form')
                                                            <span class="text-info">Plain Form</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <span class="text-danger">{{ $item->ae_deadline }}</span>
                                                    </td>
                                                    {{-- <td><span id="demo" class="badge badge-warning"></span></td>
                                                <input type="hidden" value="{{ $item->deadline }}" id="deadline"> --}}

                                                </tr>
                                            @endforeach

                                        </tbody>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-info">
                                    @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                                        {{ __('Sent Forms' . '(Authorize User)') }}
                                    @endif

                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatable30" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>

                                                <th>{{ __('Form Name') }}</th>
                                                <th>{{ __('Sender') }}</th>
                                                <th>{{ __('Receiver') }}</th>
                                                <th>{{ __('Form Type') }}</th>
                                                <th>{{ __('Deadline') }}</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($only_sent_forms_auth as $item)
                                                <tr>

                                                    <td>

                                                        {{ $item->form_name }}

                                                    </td>
                                                    <td>

                                                        @if ($item->aa_sender_id)
                                                            <span
                                                                class="text-dark">{{ $form_creator->getUserName($item->aa_sender_id) }}</span>,<span
                                                                class="text-primary">{{ $form_creator->getDeptNameUserWise($item->aa_sender_id) }}</span>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        @if ($item->aa_receiver_id)
                                                            <span
                                                                class="text-dark">{{ $form_creator->getUserName($item->aa_receiver_id) }}</span>,<span
                                                                class="text-primary">{{ $form_creator->getDeptNameUserWise($item->aa_receiver_id) }}</span>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if ($item->saved_form_type == 'plain_form')
                                                            <span class="text-info">Plain Form</span>
                                                        @endif
                                                        @if ($item->saved_form_type == 'data_form')
                                                            <span class="text-info">Plain Form</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <span class="text-danger"{{ $item->aa_deadline }}</span>
                                                    </td>
                                                    {{-- <td><span id="demo" class="badge badge-warning"></span></td>
                                                <input type="hidden" value="{{ $item->deadline }}" id="deadline"> --}}

                                                </tr>
                                            @endforeach

                                        </tbody>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                {{-- <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-info">{{ __('Report Status Table') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatable2" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>

                                            <th>{{ __('Form Name') }}</th>
                                            <th>{{ __('Form Creator') }}</th>
                                            <th>{{ __('Sender') }}</th>
                                            <th>{{ __('Receiver') }}</th>
                                            <th>{{ __('Form Status') }}</th>
                                            <th>{{ __('Report Status') }}</th>
                                            <th>{{ __('Deadline') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user_wise as $item)
                                            <tr>

                                                <td>{{ $item->form_name }}</td>
                                                <td>
                                                    @isset($item->form_creator)
                                                        {{ $form_creator->getUserName($item->form_creator) }}
                                                    @endisset
                                                </td>
                                                <td>
                                                    @isset($item->form_creator)
                                                        {{ $form_creator->getUserName($item->sender_id) }}
                                                    @endisset
                                                </td>
                                                <td>
                                                    @if ($item->receiver_id)
                                                        {{ $form_creator->getUserName($item->receiver_id) }}
                                                    @endif
                                                </td>

                                                <td>
                                                    @if ($item->report_status == 'RECIEVED')
                                                        <span class="badge badge-info">RECIEVED</span>
                                                    @else
                                                        <span class="badge badge-dark">CREATED</span>
                                                    @endif
                                                </td>
                                                <td>

                                                    @if ($item->final_status == 1)
                                                        <span class="badge badge-primary">Approved</span>
                                                    @else
                                                        <span class="badge badge-warning">Pending</span>
                                                    @endif
                                                </td>
                                                <td><span id="demo" class="badge badge-warning"></span></td>
                                                <input type="hidden" value="{{ $item->deadline }}" id="deadline">

                                            </tr>
                                        @endforeach

                                    </tbody>

                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>

            <div class="row">
                @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                {{-- @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                                <h4 class="card-title text-info">{{ __('Created Forms') }}</h4>
                            @elseif(Auth::user()->user_type == 'ENTRY_USER')
                                <h4 class="card-title text-info">{{ __('Recieved Forms') }}</h4>
                            @endif --}}
                                <h4 class="card-title text-info">{{ __('Created Forms') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatable7" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>

                                                <th>{{ __('Form Name') }}</th>
                                                <th>{{ __('Created By') }}</th>
                                                <th>{{ __('Form Type') }}</th>
                                                <th>{{ __('Created At') }}</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($created_forms as $item)
                                                <tr>
                                                    <td>
                                                        @if (Auth::user()->user_category == 1)
                                                            {{ $item->form_name }}
                                                        @else
                                                            @if ($item->saved_form_type == 'plain_form')
                                                                <a class="text-success"
                                                                    href="{{ url('form/') }}/{{ $item->id }}">
                                                                    {{ $item->form_name }}
                                                                </a>
                                                            @endif
                                                            @if ($item->saved_form_type == 'data_form')
                                                                <a class="text-warning"
                                                                    href="{{ url('form-calc/') }}/{{ $item->id }}">
                                                                    {{ $item->form_name }}
                                                                </a>
                                                            @endif
                                                        @endif
                                                    </td>

                                                    <td>


                                                        <span
                                                            class="text-dark">{{ $form_creator->getUserName($item->form_creator) }}</span>,<span
                                                            class="text-primary">{{ $form_creator->getDeptNameUserWise($item->form_creator) }}</span>

                                                    </td>
                                                    <td>
                                                        @if ($item->saved_form_type == 'plain_form')
                                                            <span class="text-warning">
                                                                Plain Form
                                                            </span>
                                                        @endif
                                                        @if ($item->saved_form_type == 'data_form')
                                                            <span class="text-info"
                                                                href="{{ url('form-calc/') }}/{{ $item->id }}">
                                                                Data Form
                                                            </span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{ Carbon::parse($item->created_at)->diffForHumans() }}
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (Auth::user()->user_type == 'AUTHORIZE_USER' or Auth::user()->user_category == 1)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-info">{{ __('Created Users') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatable69" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>

                                                <th>{{ __('User') }}</th>
                                                <th>{{ __('Department') }}</th>
                                                <th>{{ __('Designation') }}</th>
                                                <th>{{ __('Role') }}</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($created_users as $created_users)
                                                <tr>
                                                    <td>
                                                        <span class="text-secondary"><a
                                                                href="{{ url('users') }}/{{ $created_users->id }}">{{ $created_users->name }}</a></span>
                                                    </td>

                                                    <td>


                                                        {{ $form_creator->getDeptNameUserWise($created_users->id) }}

                                                    </td>
                                                    <td>
                                                        {{ $form_creator->getDesignation($created_users->designation) }}
                                                    </td>
                                                    <td>
                                                        {{ $form_creator->getRole($created_users->role) }}
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if (Auth::user()->user_type == 'ENTRY_USER')
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-info">
                                    {{ __('Received Forms') }}
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatable45" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>

                                                <th>{{ __('Form Name') }}</th>
                                                <th>{{ __('Sender') }}</th>
                                                <th>{{ __('Receiver') }}</th>
                                                <th>{{ __('Form Type') }}</th>
                                                <th>{{ __('Deadline') }}</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($received_forms as $item)
                                                <tr>

                                                    <td>

                                                        {{ $item->form_name }}

                                                    </td>
                                                    <td>

                                                        @if ($item->ae_sender_id)
                                                            <span
                                                                class="text-dark">{{ $form_creator->getUserName($item->ae_sender_id) }}</span>,<span
                                                                class="text-primary">{{ $form_creator->getDeptNameUserWise($item->ae_sender_id) }}</span>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        @if ($item->ae_receiver_id)
                                                            <span
                                                                class="text-dark">{{ $form_creator->getUserName($item->ae_receiver_id) }}</span>,<span
                                                                class="text-primary">{{ $form_creator->getDeptNameUserWise($item->ae_receiver_id) }}</span>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if ($item->saved_form_type == 'plain_form')
                                                            <span class="text-info">Plain Form</span>
                                                        @endif
                                                        @if ($item->saved_form_type == 'data_form')
                                                            <span class="text-info">Plain Form</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <span class="text-danger">{{ $item->ae_deadline }}</span>
                                                    </td>
                                                    {{-- <td><span id="demo" class="badge badge-warning"></span></td>
                                                <input type="hidden" value="{{ $item->deadline }}" id="deadline"> --}}

                                                </tr>
                                            @endforeach

                                        </tbody>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if (Auth::user()->user_type == 'AUTHORIZE_USER' and Auth::user()->user_category != 1)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-info">
                                    {{ __('Received Forms') }}
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatable52" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>

                                                <th>{{ __('Form Name') }}</th>
                                                <th>{{ __('Sender') }}</th>
                                                <th>{{ __('Receiver') }}</th>
                                                <th>{{ __('Form Type') }}</th>
                                                <th>{{ __('Deadline') }}</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($received_forms_auth as $item)
                                                <tr>

                                                    <td>

                                                        {{ $item->form_name }}

                                                    </td>
                                                    <td>

                                                        @if ($item->aa_sender_id)
                                                            <span
                                                                class="text-dark">{{ $form_creator->getUserName($item->aa_sender_id) }}</span>,<span
                                                                class="text-primary">{{ $form_creator->getDeptNameUserWise($item->aa_sender_id) }}</span>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        @if ($item->aa_receiver_id)
                                                            <span
                                                                class="text-dark">{{ $form_creator->getUserName($item->aa_receiver_id) }}</span>,<span
                                                                class="text-primary">{{ $form_creator->getDeptNameUserWise($item->aa_receiver_id) }}</span>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if ($item->saved_form_type == 'plain_form')
                                                            <span class="text-info">Plain Form</span>
                                                        @endif
                                                        @if ($item->saved_form_type == 'data_form')
                                                            <span class="text-info">Plain Form</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <span class="text-danger">{{ $item->aa_deadline }}</span>
                                                    </td>
                                                    {{-- <td><span id="demo" class="badge badge-warning"></span></td>
                                                <input type="hidden" value="{{ $item->deadline }}" id="deadline"> --}}

                                                </tr>
                                            @endforeach

                                        </tbody>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-info">
                                    {{ __('Default Forms') }}
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatable72" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>

                                                <th>{{ __('Form Name') }}</th>
                                                <th>{{ __('Creator') }}</th>
                                                <th>{{ __('Form Type') }}</th>
                                                <th>{{ __('Created At') }}</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($default_forms as $item)
                                                <tr>

                                                    <td>

                                                        {{ $item->form_name }}

                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-dark">{{ $form_creator->getUserName($item->default_created_by) }}</span>,<span
                                                            class="text-primary">{{ $form_creator->getDeptNameUserWise($item->default_created_by) }}</span>
                                                    </td>
                                                    <td>
                                                        {{ $item->saved_form_type }}
                                                    </td>

                                                    <td>
                                                        <span class="text-danger">{{ $item->default_created_at }}</span>
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
            @if (Auth::user()->hasRole('super-admin'))
                {{-- <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-info">{{ __('Report Logs') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatable6" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>

                                                <th>{{ __('Form Name') }}</th>
                                                <th>{{ __('Form Creator') }}</th>
                                                <th>{{ __('Sender') }}</th>
                                                <th>{{ __('Receiver') }}</th>
                                                <th>{{ __('Form Status') }}</th>
                                                <th>{{ __('Report Status') }}</th>
                                                <th>{{ __('Deadline') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allinfoLog as $item)
                                                <tr>

                                                    <td>{{ $item->form_name }}</td>
                                                    <td>
                                                        @isset($item->form_creator)
                                                            {{ $form_creator->getUserName($item->form_creator) }}
                                                        @endisset
                                                    </td>
                                                    <td>
                                                        @isset($item->form_creator)
                                                            {{ $form_creator->getUserName($item->sender_id) }}
                                                        @endisset
                                                    </td>
                                                    <td>
                                                        @if ($item->receiver_id)
                                                            {{ $form_creator->getUserName($item->receiver_id) }}
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if ($item->report_status == 'RECIEVED')
                                                            <span class="badge badge-info">RECIEVED</span>
                                                        @else
                                                            <span class="badge badge-dark">CREATED</span>
                                                        @endif
                                                    </td>
                                                    <td>

                                                        @if ($item->final_status == 1)
                                                            <span class="badge badge-primary">Approved</span>
                                                        @else
                                                            <span class="badge badge-warning">Pending</span>
                                                        @endif
                                                    </td>
                                                    <td id="demo">{{ $item->deadline }}</td>

                                                </tr>
                                            @endforeach

                                        </tbody>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            @endif

            @if (Auth::user()->user_type == 'ENTRY_USER' or Auth::user()->user_category == 1)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-info">{{ __('Report') }}</h4>
                                @if (Auth::user()->user_category == 1)
                                    <h4 class="card-title text-secondary">{{ __('(Authorize - Entry User)') }}</h4>
                                @endif
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatable4" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Report Name') }}</th>
                                                <th>{{ __('Report Type') }}</th>
                                                <th>{{ __('Created By') }}</th>
                                                <th>{{ __('Sender') }}</th>
                                                <th>{{ __('Receiver') }}</th>
                                                <th>{{ __('Deadline') }}</th>
                                                <th>{{ __('Report Status') }}</th>
                                                <th>{{ __('Approval') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($report as $report)
                                                <tr>
                                                    <td>{{ $report->form_name }}</td>
                                                    <td>
                                                        @if ($report->saved_form_type == 'plain_form')
                                                            <span class="badge badge-info">Plain Form</span>
                                                        @else
                                                            <span class="badge badge-success">Data Form</span>
                                                        @endif
                                                    </td>
                                                    <td><span
                                                            class="text-info">{{ $form_creator->getDeptNameUserWise($report->form_creator) }}</span>
                                                    </td>
                                                    <td><span
                                                            class="text-dark">{{ $form_creator->getUserName($report->ae_sender_id) }}</span>
                                                        <br>
                                                        <span
                                                            class="text-muted">({{ $form_creator->getDeptNameUserWise($report->ae_receiver_id) }})</span>
                                                    </td>
                                                    <td><span
                                                            class="text-dark">{{ $form_creator->getUserName($report->ae_receiver_id) }}</span>
                                                        <br>
                                                        <span
                                                            class="text-muted">({{ $form_creator->getDeptNameUserWise($report->ae_sender_id) }})</span>
                                                    </td>
                                                    <td><span class="text-danger">{{ $report->ae_deadline }}</span>
                                                    </td>
                                                    <td>
                                                        @if ($report->ae_status == 0)
                                                            <span class="text-danger">Didn't Receive Yet</span>
                                                        @else
                                                            <span class="badge badge-primary">Received</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($report->ae_approval == 0)
                                                            <span class="badge badge-warning">Pending</span>
                                                        @else
                                                            <span class="badge badge-danger">Approved</span>
                                                        @endif
                                                    </td>



                                                </tr>
                                            @endforeach



                                        </tbody>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endif

            @if (Auth::user()->user_type == 'AUTHORIZE_USER' or Auth::user()->user_category == 1)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-info">{{ __('Report') }}</h4>
                                @if (Auth::user()->user_category == 1)
                                    <h4 class="card-title text-secondary">{{ __('(Authorize - Authorize User)') }}</h4>
                                @endif
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatable4" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Report Name') }}</th>
                                                <th>{{ __('Report Type') }}</th>
                                                <th>{{ __('Created By') }}</th>
                                                <th>{{ __('Sender') }}</th>
                                                <th>{{ __('Receiver') }}</th>
                                                <th>{{ __('Deadline') }}</th>
                                                <th>{{ __('Report Status') }}</th>
                                                <th>{{ __('Approval') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($report_auth as $report)
                                                <tr>
                                                    <td>{{ $report->form_name }}</td>
                                                    <td>
                                                        @if ($report->saved_form_type == 'plain_form')
                                                            <span class="badge badge-success">Plain Form</span>
                                                        @elseif($report->saved_form_type == 'data_form')
                                                            <span class="badge badge-primary">Data Form</span>
                                                        @endif
                                                    </td>
                                                    <td><span
                                                            class="text-info">{{ $form_creator->getDeptNameUserWise($report->form_creator) }}</span>
                                                    </td>
                                                    <td><span
                                                            class="text-dark">{{ $form_creator->getUserName($report->aa_sender_id) }}</span>
                                                        <br>
                                                        <span
                                                            class="text-muted">({{ $form_creator->getDeptNameUserWise($report->aa_receiver_id) }})</span>
                                                    </td>
                                                    <td><span
                                                            class="text-dark">{{ $form_creator->getUserName($report->aa_receiver_id) }}</span>
                                                        <br>
                                                        <span
                                                            class="text-muted">({{ $form_creator->getDeptNameUserWise($report->aa_sender_id) }})</span>
                                                    </td>
                                                    <td><span class="text-danger">{{ $report->aa_deadline }}</span>
                                                    </td>
                                                    <td>
                                                        @if ($report->aa_status == 0)
                                                            <span class="text-danger">Didn't Receive Yet</span>
                                                        @else
                                                            <span class="badge badge-primary">Received</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($report->aa_approval == 0)
                                                            <span class="badge badge-warning">Pending</span>
                                                        @else
                                                            <span class="badge badge-danger">Approved</span>
                                                        @endif
                                                    </td>



                                                </tr>
                                            @endforeach



                                        </tbody>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endif


            <div>

            </div>















        </div>



    </div>


    <div class="row">
        <div class="col-md-4">

        </div>
    </div>
    <script>
        $(document).ready(function() {
            var tbl = $('#multi-filter-select').DataTable({
                "pageLength": 10,
                "processing": true,
                // DataTables server-side processing mode
                "serverSide": true,
                "order": [],
                // Initial no order.
                "ajax": {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ url('leave-applications/get-dashboard-list') }}",
                    type: 'POST',
                    'data': function(data) {}
                },
                columns: [{
                        data: 'name'
                    },
                    {
                        data: 'user_id'
                    },
                    {
                        data: 'designation'
                    },
                    {
                        data: 'phone'
                    },
                    {
                        data: 'leave_starting_from'
                    },
                    {
                        data: 'leave_ending_on'
                    }
                ]
            });
        });
        $(document).on('click', '.btn-edit', function() {
            var id = $(this).data("id");
            $.ajax({
                method: "GET",
                url: "leave-applications/" + id + "/edit",
                data: id,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data, textStatus, jqXHR) {
                    $("#modal_body").html(data.html);
                    //                console.log(data.permission_holders);
                    $(".select2").select2();
                    //                 $(".select2_multi").select2({closeOnSelect: false});
                    $("#editModal").modal("show");
                }
            });
        });
        $(document).on('click', '.edit_button', function() {
            $(".error_msg").html('');
            $('#loader1').show();
            var id = $('[name=id]').val();
            if ($('#check_password').val() !== '') {
                let passCheckk = checkPass($('#check_password').val());
                if (passCheckk == 1) {
                    var data = new FormData($('#edit_form')[0]);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: "POST",
                        url: "leave-applications/" + id,
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(data, textStatus, jqXHR) {
                            console.log(data);
                        }
                    }).done(function(data) {
                        $("#success_msg").html("Data Save Successfully");
                        $('#editModal').modal('toggle');
                        $('#edit_form')[0].reset();
                        $("#loader1").hide();
                        tbl.draw();
                    }).fail(function(data, textStatus, jqXHR) {
                        $("#loader1").hide();
                        var json_data = JSON.parse(data.responseText);
                        $.each(json_data.errors, function(key, value) {
                            $("#" + key).after(
                                "<span class='error_msg' style='color: red;font-weigh: 600'>" +
                                value + "</span>");
                            $("#" + key).addClass("error");
                        });
                    });
                } else {
                    notifiAlert('Alert!', 'Password is incorrect!');
                    $('#check_password').addClass("error");
                    $("#loader1").hide();
                }
            } else {
                $('#check_password').addClass("error");
                $("#loader1").hide();
                notifiAlert('Alert!', 'Please confirm your password to submit your application!');
            }
        });
        $(document).on('click', '.btn-delete', function() {
            var id = $(this).attr('data-id');
            if (confirm('Are you sure?', true)) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'Delete',
                    url: "leave-applications/" + id,
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    beforeSend: function() {},
                    success: function(data) {
                        notifiAlert('Alert!', 'Leave Application deleted successfully');
                        return false;
                    }
                });
                //                  alert('Hi');
                $(this).parent().parent().remove();
                notifiAlert('Alert!', 'Leave Application deleted successfully');
                return false;
            } else {
                return false;
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable').DataTable({});

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable1').DataTable({
                "pageLength": 3
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable2').DataTable({
                "pageLength": 3
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable45').DataTable({
                "pageLength": 3
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable69').DataTable({
                "pageLength": 3
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable72').DataTable({
                "pageLength": 3
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable3').DataTable({
                "pageLength": 3
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable30').DataTable({
                "pageLength": 3
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable52').DataTable({
                "pageLength": 3
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable4').DataTable({
                "pageLength": 3
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable5').DataTable({
                "pageLength": 5
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable7').DataTable({
                "pageLength": 3
            });

        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable6').DataTable({
                "pageLength": 5
            });

        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable11').DataTable({
                "pageLength": 3
            });

        });
    </script>

    <script>
        let deadline = $('input#deadline').val();
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
        // }, 1000);
    </script>
@endsection
