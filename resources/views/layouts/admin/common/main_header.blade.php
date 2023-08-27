<?php $user = Auth::user(); ?>
@inject('department', 'App\Models\UserForm')
<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="blue">

        <div>
            <a href="{{ url('') }}" class="logo" style="color:white">
                <img style="background: white;border-radius: 50%;height: 58px" src="{{ asset('public') }}/logo.png"
                    class="login_logo navbar-brand" style="height: 60px;" alt="Logo">
        </div>
        <div>
            {{ __('Report Management') }}
            <!--<img src="{{ asset('public/admin_asset') }}/img/logo.svg" alt="navbar brand" class="navbar-brand">-->
        </div>




        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu fa fa-ellipsis-h"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu fa fa-ellipsis-h"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav id="navbar" class="navbar navbar-header navbar-expand-lg"
        style="background: linear-gradient(-45deg, #bdc3c7, #2c3e50) !important;">

        <div class="container-fluid">
            <div class="collapse" id="search-nav">
                <form class="navbar-left navbar-form nav-search mr-md-3">
                    <div id="searchNav" class="input-group">
                        <div class="input-group-prepend">
                            <button type="submit" class="btn btn-search pr-1">
                                <i class="fa fa-search search-icon"></i>
                            </button>
                        </div>
                        <input id="searchHeader" type="text" placeholder="Search ..." class="form-control">
                    </div>
                </form>
            </div>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav-item toggle-nav-search hidden-caret">
                    <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false"
                        aria-controls="search-nav">
                        <i class="fa fa-search"></i>
                    </a>

                </li>

                <li class="nav-item">
                    <div class="form-group">
                        <select class="form-control select2" id="switchLanguage" name="switchLanguage">
                            <option value="en">{{ __('Switch Language') }}</option>
                            <option value="bn" @if (Illuminate\Support\Facades\Session::get('language') == 'bn') selected @endif>
                                {{ __('Bangla') }}
                            </option>
                            <option value="en" @if (Illuminate\Support\Facades\Session::get('language') == 'en') selected @endif>
                                {{ __('English') }}
                            </option>
                        </select>
                    </div>
                </li>

                <li class="dropdown-notifications nav-item dropdown hidden-caret">
                    <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="data-counter fa fa-bell" data-count="0"></i>
                        <span class="notif-count notification">0</span>
                    </a>
                    <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                        <li>
                            <div class="dropdown-title">{{ __('You have') }} <strong class="notif-count"></strong>
                                {{ __('new notification') }}</div>
                        </li>
                        <li>
                            <div class="notif-scroll scrollbar-outer">
                                <div class="notif-center">

                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="see-all" href="javascript:void(0);">{{ __('See all notifications') }}<i
                                    class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                    </a>
                    <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                        <div class="quick-actions-header">
                            <span class="title mb-1">{{ __('Quick Actions') }}</span>
                            <span class="subtitle op-8">{{ __('Shortcuts') }}</span>
                        </div>
                        <div class="quick-actions-scroll scrollbar-outer">
                            <div class="quick-actions-items">
                                <div class="row m-0">
                                    <a class="col-6 col-md-4 p-0" href="{{ url('create-form') }}">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-file-1"></i>
                                            <span class="text">{{ __('Form Generator') }}</span>
                                        </div>
                                    </a>
                                    <!--                                    <a class="col-6 col-md-4 p-0" href="{{ url('leave-applications/create') }}">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-database"></i>
                                            <span class="text">{{ __('Create Leave Request') }}</span>
                                        </div>
                                    </a>-->
                                    <!--                                    <a class="col-6 col-md-4 p-0" href="{{ url('emergency-leave-applications') }}">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-pen"></i>
                                            <span class="text">{{ __('Manage Emergency Leave') }}</span>
                                        </div>
                                    </a>
                            
                                    <a class="col-6 col-md-4 p-0" href="{{ url('leave-requests/today-data') }}">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-list"></i>
                                            <span class="text">{{ __('Today Leaves') }}</span>
                                        </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="{{ url('pending-leave-applications') }}">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-list"></i>
                                            <span class="text">{{ __('Leave Pending Leave Application') }}</span>
                                        </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="{{ url('leave-requests/data') }}">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-list"></i>
                                            <span class="text">{{ __('Leave Request Report') }}</span>
                                        </div>
                                    </a>-->

                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="{{ url('profile-info') }}"
                        aria-expanded="false">
                        <div class="avatar-sm">
                            @if ($user->image)
                                <img src="{{ asset('public/user_images/') . '/' . $user->image }}" alt="..."
                                    class="avatar-img rounded-circle">
                            @else
                                <img src="{{ asset('public/admin_asset') }}/img/profile.png" alt="..."
                                    class="avatar-img rounded-circle">
                            @endif
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg">
                                        @if ($user->image)
                                            <img src="{{ asset('public/user_images/') . '/' . $user->image }}"
                                                alt="..." class="avatar-img rounded-circle">
                                        @else
                                            <img src="{{ asset('public/admin_asset') }}/img/profile.png"
                                                alt="..." class="avatar-img rounded-circle">
                                        @endif
                                    </div>
                                    <div class="u-text">
                                        <h4>{{ $user->name }}</h4>
                                        {{-- <p class="text-muted">{{ $user->email }}</p> --}}
                                        <p class="text-info"> @isset(userData()->designation_info->name)
                                                {{ userData()->designation_info->name }}
                                            @endisset </p>

                                        <a href="{{ url('users') . '/' . $user->id }}"
                                            class="btn btn-xs btn-secondary btn-sm">{{ __('View Profile') }}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                {{-- <div class="dropdown-divider"></div> --}}
                                {{-- <a class="dropdown-item" href="{{url('profile-info')}}">{{__('My Profile')}}</a>
                                <a class="dropdown-item" href="{{url('leave-rules')}}">{{__('Leave Rules')}}</a>
                                <a class="dropdown-item" target="__blank" href="{{url('profile/').'/'.Illuminate\Support\Facades\Auth::user()->slug}}">{{__('Public Profile')}}</a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"
                                    href="{{ url('users/') . '/' . Illuminate\Support\Facades\Auth::user()->id }}/edit"
                                    target="__blank">{{ __('Account Setting') }}</a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('logout') }}" class=dropdown-item" style="margin-left: 25px"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p style="margin-left: 25px">
                                        {{ __('Logout') }}
                                    </p>
                                </a>

                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
