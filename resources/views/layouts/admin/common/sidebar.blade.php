<?php
$user = Auth::user();
// @inject('getrole', 'App\Models\UserForm');
//echo '<pre>';
//print_r($user);die;
?>
@inject('department', 'App\Models\UserForm')
<style>
    .rel-26 {
        margin-top: 50px;
        margin-bottom: 50px;
    }
</style>
<!-- Sidebar -->
<div id="sidebar" class="sidebar sidebar-style-2 @if (CurrSessionMode() == 'dark') dark-mode-modal @endif">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    @if ($user->image)
                        <img src="{{ asset('public/user_images/') . '/' . $user->image }}" alt="..."
                            class="avatar-img rounded-circle">
                    @else
                        <img src="{{ asset('public/admin_asset') }}/img/profile.png" alt="..."
                            class="avatar-img rounded-circle">
                    @endif
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>

                            {{-- <span class="user-level"> @isset(userData()->designation_info->name)
                                    {{ userData()->designation_info->name }}
                                @endisset </span> --}}

                            <span>আর্থিক প্রতিষ্ঠান বিভাগ</span>
                            <span class="text-warning">{{ $department->getDepartmentName(Auth::user()->id) }}</span>

                            {{-- {{ $user->name }} --}}
                            @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                                <span class="user-level">
                                    {{ userData()->roles[0]->name }}
                                </span>
                            @else
                                <span class="user-level">
                                    {{ Auth::user()->user_type }}
                                </span>
                            @endif

                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="{{ url('users/' . $user->id) }}">
                                    <span class="link-collapse">{{ __('My Profile') }}</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item @if (menu_class($url) == '' || menu_class($url) === 'dashboard') active @endif" style="padding: 7px">
                    <a href="{{ url('/') }}" class="collapsed">
                        <i class="fas fa-home" style="font-size: 26px"></i>
                        <p>{{ __('Dashboard') }}</p>
                        <!--<span class="caret"></span>-->
                    </a>

                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">{{ __('Components') }}</h4>
                </li>
                {{-- @if ($user->can('view-user'))
                    @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                        <li class="nav-item @if (menu_class($url) === '/users' || menu_class($url) === 'users') active @endif" style="padding: 7px">
                            <a data-toggle="collapse" href="#forms">
                                <i class="fas fa-user" style="font-size: 26px"></i>
                                <p>{{ __('User') }}</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="forms">
                                <ul class="nav nav-collapse">
                                    @if ($user->can('add-user'))
                                        <li>
                                            <a href="{{ url('users/create') }}">
                                                <span class="sub-item">{{ __('Add User') }}</span>
                                            </a>
                                        </li>
                                    @endif
                                    @if ($user->can('view-user'))
                                        <li>
                                            <a href="{{ url('users') }}">
                                                <span class="sub-item">{{ __('List of User') }}</span>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </li>
                    @endif
                @endif --}}

                @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                    <li class="nav-item @if (menu_class($url) === '/users' || menu_class($url) === 'users') active @endif" style="padding: 7px">
                        <a data-toggle="collapse" href="#forms">
                            <i class="fas fa-user" style="font-size: 26px"></i>
                            <p>{{ __('User') }}</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="forms">
                            <ul class="nav nav-collapse">

                                <li>
                                    <a href="{{ url('users/create') }}">
                                        <span class="sub-item">{{ __('Add User') }}</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="{{ url('users') }}">
                                        <span class="sub-item">{{ __('List of User') }}</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                @endif


                @if (Auth::user()->hasRole('super-admin') && Auth::user()->user_type == 'AUTHORIZE_USER')

                    <li class="nav-item @if (menu_class($url) === '/roles' || menu_class($url) === 'roles') active @endif" style="padding: 7px">
                        <a data-toggle="collapse" href="#role-user">
                            <i class="fas fa-user-secret fa-7x" style="font-size: 26px"></i>
                            <p>{{ __('Role') }}</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="role-user">
                            <ul class="nav nav-collapse">
                                @if ($user->can('add-role'))
                                    <li>
                                        <a href="{{ url('roles/create') }}">
                                            <span class="sub-item">{{ __('Add Role') }}</span>
                                        </a>
                                    </li>
                                @endif
                                @if ($user->can('view-role'))
                                    <li>

                                        <a href="{{ url('roles') }}">
                                            <span class="sub-item">{{ __('List of Role') }}</span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                @endif


                @if (Auth::user()->hasRole('super-admin') && Auth::user()->user_type == 'AUTHORIZE_USER')
                    <li class="nav-item @if (menu_class($url) === '/permissions' || menu_class($url) === 'permissions') active @endif" style="padding: 7px">
                        <a data-toggle="collapse" href="#permission">
                            <i class="fas fa-key" style="font-size: 26px"></i>
                            <p>{{ __('Permission') }}</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="permission">
                            <ul class="nav nav-collapse">
                                @if ($user->can('add-permission'))
                                    <li>
                                        <a href="{{ url('permissions/create') }}">
                                            <span class="sub-item">{{ __('Add Permission') }}</span>
                                        </a>
                                    </li>
                                @endif
                                @if ($user->can('view-permission'))
                                    <li>
                                        <a href="{{ url('permissions') }}">
                                            <span class="sub-item">{{ __('List of Permission') }}</span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                @endif






                @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                    <li class="nav-item @if (menu_class($url) === '/forms' || menu_class($url) === 'forms') active @endif">
                        <a data-toggle="collapse" href="#report">
                            <i class="fas fa-chart-bar"></i>
                            <p>{{ __('Forms') }}</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="report">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ url('select-form-format') }}">
                                        <span class="sub-item">{{ __('Create') }}</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('forms/list') }}">
                                        <span class="sub-item">{{ __('List of forms') }}</span>
                                    </a>
                                </li>

                                @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                                    {{-- <li>
                                        <a href="{{ url('send-form') }}">
                                            <span class="sub-item">{{ __('Send form') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('send-form-entry-user') }}">
                                            <span class="sub-item">{{ __('Send form (ENTRY USER)') }}</span>
                                        </a>
                                    </li> --}}
                                    {{-- <li>
                                        <a href="{{ url('/list-of-send-form') }}">
                                            <span class="sub-item">{{ __('List of send forms') }}</span>
                                        </a>
                                    </li> --}}
                                    <li>
                                        <a href="{{ url('/list-of-already-sent') }}">
                                            <span class="sub-item">{{ __('Sent forms') }}</span>
                                        </a>
                                    </li>
                                @endif
                                @if (Auth::user()->user_type == 'ENTRY_USER')
                                    <li>
                                        <a href="{{ url('send-form-entry-user') }}">
                                            <span class="sub-item">{{ __('Send form (AUTHORISE USER)') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/') }}">
                                            <span class="sub-item">{{ __('List of send forms') }}</span>
                                        </a>
                                    </li>
                                @endif





                            </ul>
                        </div>
                    </li>
                @endif

                @if (reportRequest())
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#report-requests">
                            <i class="fas fa-bars"></i>
                            <p>Report Requests</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="report-requests">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a data-toggle="collapse" href="#subnav3">
                                        <span class="sub-item">Report Forms</span>
                                        <span class="caret"></span>
                                    </a>

                                    @if (Auth::user()->user_type == 'ENTRY_USER')
                                        <div class="collapse" id="subnav3">
                                            <ul class="nav nav-collapse subnav">
                                                @foreach (reportRequest() as $rowForms)
                                                    @if ($rowForms)
                                                        <li>

                                                            <a href="{{ url('created-submit-form/' . $rowForms) }}">
                                                                @php
                                                                    
                                                                @endphp
                                                                <span
                                                                    class="sub-item">{{ getSubForm($rowForms)[0]->form_name }}</span>
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach

                                            </ul>
                                        </div>
                                    @elseif (Auth::user()->user_type == 'AUTHORIZE_USER')
                                        <div class="collapse" id="subnav3">
                                            <ul class="nav nav-collapse subnav">
                                                @foreach (reportRequest() as $rowForms)
                                                    @if ($rowForms)
                                                        <li>

                                                            <a href="{{ url('form/' . $rowForms) }}">

                                                                <span
                                                                    class="sub-item">{{ getSubForm($rowForms)[0]->form_name }}</span>
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach

                                            </ul>
                                        </div>
                                    @endif

                                </li>

                            </ul>
                        </div>
                    </li>

                @endif


                @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                    <li class="nav-item @if (menu_class($url) === '/forms' || menu_class($url) === 'forms') active @endif">
                        <a data-toggle="collapse" href="#submitted-reports">
                            <i class="fas fa-chart-bar"></i>
                            <p>{{ __('Reports') }}</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="submitted-reports">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ url('list-of-reports') }}">
                                        <span class="sub-item">{{ __('List of Reports') }}</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('submitted-reports') }}">
                                        <span class="sub-item">{{ __('List of Submitted Reports') }}</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="{{ url('pending-reports') }}">
                                        <span class="sub-item">{{ __('List of Pending Reports') }}</span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>
                @endif


                @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#submenu2">
                            <i class="fas fa-bars"></i>
                            <p>Default Forms</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="submenu2">
                            <ul class="nav nav-collapse">
                                {{-- @foreach (defaultForms() as $rowForms)
                                    <li>
                                        <a data-toggle="collapse" href="#subnav{{ $rowForms->form_name }}">
                                            <span class="sub-item">{{ $rowForms->form_name }}</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="subnav{{ $rowForms->form_name }}">
                                            <ul class="nav nav-collapse subnav">
                                                @foreach (defaultSubForms($rowForms->id) as $rowSubForms)
                                                    <li>
                                                        <a href="{{ url('create-unique-form/' . $rowSubForms->id) }}">
                                                            <span
                                                                class="sub-item">{{ $rowSubForms->sub_form_name }}</span>
                                                        </a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </li>
                                @endforeach --}}
                                @foreach (defaultForms() as $rowForms)
                                    <li>
                                        <a data-toggle="collapse" href="#subnav{{ $rowForms->form_name }}">
                                            <i class="fas fa-bars"></i>
                                            {{ $rowForms->form_name }}
                                        </a>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </li>
                @endif


                {{-- test purpose --}}

                {{-- @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#teststored">
                            <i class="fas fa-bars"></i>
                            <p>Default Stored Forms</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="teststored">
                            <ul class="nav nav-collapse">
                                @foreach (defaultForms() as $rowForms)
                                    <li>
                                        <a data-toggle="collapse" href="#subnav{{ $rowForms->form_name }}">
                                            <span class="sub-item">{{ $rowForms->form_name }}</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="subnav{{ $rowForms->form_name }}">
                                            <ul class="nav nav-collapse subnav">
                                                @foreach (defaultSubForms($rowForms->id) as $rowSubForms)
                                                    <li>
                                                        <a
                                                            href="{{ url('indiv-stored-forms/' . $rowSubForms->id) }}">
                                                            <span
                                                                class="sub-item">{{ $rowSubForms->sub_form_name }}</span>
                                                        </a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </li>

                @endif --}}

                {{-- end of it --}}


                {{-- <li class="nav-item @if (menu_class($url) === '/forms' || menu_class($url) === 'forms') active @endif">
                    <a data-toggle="collapse" href="#sendForm">
                        <i class="fas fa-book"></i>
                        <p>{{ __('Send Form') }}</p>
                        <span class="caret"></span>
                    </a>

                    <div class="collapse" id="sendForm">
                        <ul class="nav nav-collapse">
                            {{-- @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                                <li>
                                    <a href="{{ url('send-form') }}">
                                        <span class="sub-item">{{ __('Send form') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('send-form-entry-user') }}">
                                        <span class="sub-item">{{ __('Send form (ENTRY USER)') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}">
                                        <span class="sub-item">{{ __('List of send forms') }}</span>
                                    </a>
                                </li>
                            @endif --}}
                {{-- @if (Auth::user()->user_type == 'ENTRY_USER')
                                <li>
                                    <a href="{{ url('send-form-entry-user') }}">
                                        <span class="sub-item">{{ __('Send form (AUTHORISE USER)') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}">
                                        <span class="sub-item">{{ __('List of send forms') }}</span>
                                    </a>
                                </li>
                            @endif --}}
                {{-- </ul>
                    </div>
                </li> --}}


                @if (Auth::user()->user_type == 'AUTHORISE_USER')
                    <li class="nav-item @if (menu_class($url) === '/forms' || menu_class($url) === 'forms') active @endif">
                        <a data-toggle="collapse" href="#group">
                            <i class="fas fa-boxes"></i>
                            <p>{{ __('Group') }}</p>
                            <span class="caret"></span>
                        </a>

                        <div class="collapse" id="group">
                            <ul class="nav nav-collapse">
                                @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                                    <li>
                                        <a href="{{ url('create-group') }}">
                                            <span class="sub-item">{{ __('Create Group') }}</span>
                                        </a>
                                    </li>
                                @endif
                                @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                                    <li>
                                        <a href="{{ url('groups') }}">
                                            <span class="sub-item">{{ __('List of Group') }}</span>
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </li>
                @endif

                {{-- @if (Auth::user()->user_type == 'AUTHORISE_USER') --}}

                @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                    <li class="nav-item @if (menu_class($url) === '/user' || menu_class($url) === 'user') active @endif">
                        <a data-toggle="collapse" href="#settings">
                            <i class="la flaticon-settings"></i>
                            <p>{{ __('Settings') }}</p>
                            <span class="caret"></span>
                        </a>
                        @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                            <div class="collapse" id="settings">
                                <ul class="nav nav-collapse">
                                    {{-- @if ($user->can('view-ministry'))
                                <li>
                                    <a href="{{ url('ministry') }}">
                                        <span class="sub-item">{{ __('Ministry Department') }}</span>
                                    </a>
                                </li>
                            @endif
                            @if ($user->can('view-regularity-authority'))

                            @endif
                            @if ($user->can('view-institution'))
                                <li>
                                    <a href="{{ url('institutions') }}">
                                        <span class="sub-item">{{ __('Institutions') }}</span>
                                    </a>
                                </li>
                            @endif
                            @if ($user->can('view-office'))
                                <li>
                                    <a href="{{ url('office') }}">
                                        <span class="sub-item">{{ __('Organization User') }}</span>
                                    </a>
                                </li>
                            @endif
                            @if ($user->can('view-division'))
                               
                            @endif
                            @if ($user->can('view-unit-office'))
                                <li>
                                    <a href="{{ url('unitoffice') }}">
                                        <span class="sub-item">{{ __('Branch') }}</span>
                                    </a>
                                </li>
                            @endif
                            @if ($user->can('view-designations'))
                                <li>
                                    <a href="{{ url('designations') }}">
                                        <span class="sub-item">{{ __('Designation') }}</span>
                                    </a>
                                </li>
                            @endif
                            @if (Auth::user()->user_type == 'AUTHORIZE_USER')
                                <li>
                                    <a href="{{ url('departments') }}">
                                        <span class="sub-item">{{ __('Department') }}</span>
                                    </a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ url('ministry') }}">
                                    <span class="sub-item">{{ __('Ministry Department') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('regularityauthority') }}">
                                    <span class="sub-item">{{ __('Regularity Authority') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('institutions') }}">
                                    <span class="sub-item">{{ __('Institutions') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('office') }}">
                                    <span class="sub-item">{{ __('Organization User') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('division') }}">
                                    <span class="sub-item">{{ __('Division') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('unitoffice') }}">
                                    <span class="sub-item">{{ __('Branch') }}</span>
                                </a>
                            </li> --}}
                                    <li>
                                        <a href="{{ url('designations') }}">
                                            <span class="sub-item">{{ __('Designation') }}</span>
                                        </a>
                                    </li>
                                    @if (Auth::user()->user_category == 1)
                                        <li>
                                            <a href="{{ url('division') }}">
                                                <span class="sub-item">{{ __('Division') }}</span>
                                            </a>
                                        </li>
                                    @endif
                                    @if (Auth::user()->user_category == 1 or Auth::user()->user_category == 2)
                                        <li>
                                            <a href="{{ url('ministry') }}">
                                                <span class="sub-item">{{ __('Ministry Department') }}</span>
                                            </a>
                                        </li>
                                    @endif
                                    @if (Auth::user()->user_category == 1 or Auth::user()->user_category == 2 or Auth::user()->user_category == 3)
                                        <li>
                                            <a href="{{ url('regularityauthority') }}">
                                                <span class="sub-item">{{ __('Regularity Authority') }}</span>
                                            </a>
                                        </li>
                                    @endif
                                    @if (Auth::user()->user_category == 1 or
                                        Auth::user()->user_category == 2 or
                                        Auth::user()->user_category == 3 or
                                        Auth::user()->user_category == 4)
                                        <li>
                                            <a href="{{ url('institutions') }}">
                                                <span class="sub-item">{{ __('Institutions') }}</span>
                                            </a>
                                        </li>
                                    @endif
                                    @if (Auth::user()->user_category == 1 or
                                        Auth::user()->user_category == 2 or
                                        Auth::user()->user_category == 3 or
                                        Auth::user()->user_category == 4 or
                                        Auth::user()->user_category == 5)
                                        <li>
                                            <a href="{{ url('office') }}">
                                                <span class="sub-item">{{ __('Organization User') }}</span>
                                            </a>
                                        </li>
                                    @endif
                                    @if (Auth::user()->user_category == 1 or
                                        Auth::user()->user_category == 2 or
                                        Auth::user()->user_category == 3 or
                                        Auth::user()->user_category == 4 or
                                        Auth::user()->user_category == 5 or
                                        Auth::user()->user_category == 6)
                                        <li>
                                            <a href="{{ url('unitoffice') }}">
                                                <span class="sub-item">{{ __('Branch') }}</span>
                                            </a>
                                        </li>
                                    @endif

                                </ul>
                            </div>
                        @endif
                    </li>
                @endif
                {{-- @endif --}}
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            {{ __('Logout') }}
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
