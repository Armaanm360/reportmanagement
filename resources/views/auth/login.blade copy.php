{{-- @extends('layouts.app')

@section('content')

<header>
    <style>
      #intro {
        background-image: url("{{asset('public')}}/Business-reports.jpg");
        height: 100vh;
      }
      .btn-block.ripple-surface i {
        margin-left: 7px;
      }
    </style>

    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center h-100"style="background-color: rgba(0, 0, 0, 0.8)">

                <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-8">
                        <form method="POST" action="{{ route('login') }}" class="bg-white rounded shadow-5-strong p-5">
                            @csrf
                        <div class="header-img text-center mb-4">
                            <img class="img-fluid" src="{{asset('public')}}/fid.jpg" alt="" />
                        </div>
                        <!-- User ID input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="emauser_idil" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" required autocomplete="email" autofocus/>
                            <label class="form-label" for="emauser_idil">ইউজার আইডি</label>
                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                            <label class="form-label" for="password">পাসওয়ার্ড</label>
                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                            @enderror
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" name="remember" type="checkbox" value="" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                <label class="form-check-label" for="remember">{{__('আমাকে মনে কর')}}</label>
                            </div>
                            </div>

                            <div class="col text-center">
                                @if (Route::has('password.request'))
                                <!-- Simple link --> <a href="{{ route('password.request') }}">পাসওয়ার্ড রিসেট ?</a>
                                @endif
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block"style="font-size: 16px">
                            প্রবেশ <i class="fa fa-sign-in" aria-hidden="true"></i>
                        </button>
                        </form>
                        <p class="text-center p-3 text-white">
                        কারিগরি সহায়তায়
                        <a href="https://m360ict.com/">M360 ICT</a>
                        </p>
                    </div>
                    </div>
                </div>
        </div>
    </div>

</header>
    
@endsection --}}

@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />
{{-- <style>
    body {
        background-color: #fff;
        /* background-image: linear-gradient(148deg, rgba(51, 217, 215, 1) 6%, rgba(0, 35, 102, 1) 32%, rgba(78, 230, 216, 1) 44%, rgba(108, 78, 230, 1) 71%, rgba(28, 52, 155, 1) 96%); */
        background-size: cover !important;
        background-repeat: no-repeat !important;
        /* background: linear-gradient(-45deg, #bdc3c7, #2c3e50) !important; */
        background:#bdc3c7;
    }

    html,
    body {
        margin: 0;
        height: 100%;
    }

    .user_card {
        height: 400px;
        width: 80%;
        margin-top: auto;
        margin-bottom: auto;
        /* background: linear-gradient(148deg, rgba(0, 35, 102, 1) 0%, rgba(50, 139, 135, 1) 19%, rgba(155, 28, 49, 1) 50%, rgba(78, 86, 230, 1) 70%, rgba(230, 78, 114, 1) 89%); */
        position: relative;
        display: flex;
        justify-content: center;
        flex-direction: column;
        /*padding: 10px;*/
        /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
        border-radius: 5px;
    }

    .extra-class-1 {
        background-color: #8c9398;
    }

    .extra-class-text-1 {
        color: #fff;
    }

    .login_name_wrapper {
        height: 20% !important;
        min-height: 200px;
        margin-bottom: auto;
        margin-top: auto;
        position: relative;
        /*display: flex;*/
        justify-content: center;
        flex-direction: column;
        color: #000;
        font-size: 35px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .login_logo_container {
        position: absolute;
        height: 170px;
        width: 170px;
        top: -75px;
        border-radius: 50%;
        background: transparent;
        padding: 10px;
        text-align: center;
    }

    .login_logo {
        height: 170px;
        width: 170px;
        position: absolute;
        margin: -15px 0px 0px -100px;
        border-radius: 50%;
        /* box-shadow: 0 4px 8px 0 rgb(0 0 0 / 50%), 0 6px 20px 0 rgb(0 0 0 / 19%);
        -webkit-box-shadow: 0 4px 8px 0 rgb(0 0 0 / 50%), 0 6px 20px 0 rgb(0 0 0 / 19%);
        -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
    }

    .form_container {
        margin-top: 337px;
    }

    .login_btn {
        width: 100%;
        background: #233588 !important;
        color: white !important;
    }

    .login_btn:hover {
        background: #2c44b0 !important;
    }

    .login_container {
        padding: 0 2rem;
    }

    .input-group-text {
        background: #233588 !important;
        color: white !important;
        border: 0 !important;
        border-radius: 0.25rem 0 0 0.25rem !important;
    }

    .input_user,
    .input_pass:focus {
        box-shadow: none !important;
        outline: 0px !important;
    }

    .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
        background-color: #233588 !important;
    }

    .input-group-text {
        height: 38px;
    }

    .form {
        position: relative;
        background: fff;
        /* border: 1px solid #000; */
        width: 350px;
        padding: 40px 40px 60px;
        border-radius: 10px;
        text-align: center;
    }

    .form::before {
        content: '';
        position: absolute;
        top: -2px;
        right: -2px;
        bottom: -2px;
        left: -2px;
        background: linear-gradient(315deg, #9fb0ba, #9fb0ba);
        z-index: -1;
        transform: skew(2deg, 1deg);
        border-radius: 10px;
    }

    .form h2 {
        color: #fff;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 5px;
    }

    .form .input {
        margin-top: 40px;
        text-align: left;
    }

    .form .input .inputBox {
        margin-top: 10px;
    }

    .form .input .inputBox label {
        display: block;
        color: #fff;
        margin-bottom: 5px;
        font-size: 18px;
        letter-spacing: 1px;
    }

    .form .input .inputBox input {
        position: relative;
        width: 100%;
        height: 40px;
        border: none;
        outline: none;
        padding: 5px 15px;
        background: linear-gradient(315deg, #fff, #fff);
        color: black;
        font-size: 18px;
        border-radius: 10px;
    }

    .form .input .inputBox input[type="submit"] {
        cursor: pointer;
        margin-top: 20px;
        letter-spacing: 1px;
    }

    .form .input .inputBox input[type="submit"]:hover {
        background: linear-gradient(186deg, rgba(24, 17, 245, 1) 1%, rgba(24, 133, 191, 1) 59%, rgba(73, 117, 128, 1) 88%);
    }

    .form .input .inputBox input[type="submit"]:active {
        color: rgba(255, 255, 255, 0.521);
        background: linear-gradient(315deg, #e91e6271, #5f02ff8c);
        color: #fff !important;
    }

    .forgot {
        margin-top: 10px;
        color: fff;
        font-size: 14px;
        letter-spacing: 1px;
    }

    .forgot a {
        color: #ff0800;
    }

    @media only screen and (max-width: 1400px) {
        .user_card {
            width: 100%;
        }

        .header-1-new {
            font-size: 20px;
            margin-top: 25px;
            margin-bottom: 15px;
        }

        .header-1-new2 {
            margin-bottom: 60px;
            font-size: 15px;
        }
    }

    @media only screen and (max-width: 992px) {
        .user_card {
            width: 100%;
        }

        .header-1-new {
            font-size: 18px;
            margin-top: 25px;
            margin-bottom: 15px;
        }

        .header-1-new2 {
            margin-bottom: 60px;
            font-size: 15px;
        }
    }

    @media only screen and (max-width: 768px) {
        .user_card {
            width: 100%;
        }

        .header-1-new {
            font-size: 14px;
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .header-1-new2 {
            margin-bottom: 80px;
            font-size: 15px;
        }
    }

    @media only screen and (max-width: 515px) {
        .user_card {
            width: 100%;
        }

        .header-1-new {
            font-size: 8px;
            margin-top: 25px;
            margin-bottom: 15px;
        }

        .header-1-new2 {
            margin-bottom: 60px;
            font-size: 15px;
        }
    }

    @media only screen and (max-width: 460px) {
        .user_card {
            width: 100%;
        }

        .header-1-new {
            font-size: 8px;
            margin-top: 25px;
            margin-bottom: 15px;
        }

        .header-1-new2 {
            margin-bottom: 60px;
            font-size: 12px;
        }

    }

    .login-copyright,
    .login-copyright a {
        color: #000;
    }

</style>
<div class="container h-100">
    <div class="login_name_wrapper">
        <div class="d-flex justify-content-center header-1-new" style="font-style:italic">Report Management, Ministry of
            Finance, Bangladesh</div>
        <div class="d-flex justify-content-center header-1-new2" style="font-style:italic">Report Management Application
        </div>
    </div>
    <div class="d-flex justify-content-center h-50">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="login_logo_container"> <img src="{{asset('public')}}/logo.png"
                        class="image-responsive login_logo" alt="Logo"> </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form method="POST" action="{{ route('login') }}" style="width:100%;">
                    @csrf
                    <div id="msgcont" class="d-flex justify-content-center" style="display:none!important">
                        <div id="msg" class="alert alert-danger py-1 px-2" role="alert"></div>
                    </div>
                    <div class="form extra-class-1" style="width:100%">
                        <h2>Login</h2>
                        <div class="input">
                            <div class="inputBox">
                                <label for="">User Id</label>
                                <input id="emauser_idil" type="text" class="form-control @error('user_id') is-invalid @enderror"
                                    name="user_id" value="{{ old('user_id') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="inputBox">
                                <label for="">Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <br>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label extra-class-text-1" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                            <div class="inputBox">
                                <input type="submit" name="" value="Sign In">
                            </div>

                        </div>
                        <!--<p class="forgot">Forgot Password? <a href="#">Click Here</a></p>-->
                        @if (Route::has('password.request'))
                        <a class="btn btn-link forgot extra-class-text-1" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </form>

            </div>
            <div class="login-copyright d-flex justify-content-center mt-3">
                <?php echo date('Y')?> @ fid.gov.bd, Developed by &nbsp<a href="https://www.m360ict.com"> M360 ICT</a>
            </div>

        </div>

    </div>



</div> --}}

<header>
    <style>
      #intro {
        background-image: url("{{asset('public')}}/Business-reports.jpg");
        height: 100vh;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .btn-block.ripple-surface i {
        margin-left: 7px;
      }
      button.btn.btn-primary.btn-block {
        width: 100%;
      }
    </style>

    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center h-100"style="background-color: rgba(0, 0, 0, 0.8)">

                <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-8">
                        <form method="POST" action="{{ route('login') }}" class="bg-white rounded shadow-5-strong p-5">
                            @csrf
                        <div class="header-img text-center mb-4">
                            <img class="img-fluid" src="{{asset('public')}}/fid.jpg" alt="" />
                        </div>
                        <!-- User ID input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form1Example1" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" required autocomplete="email" autofocus/>
                            <label class="form-label" for="form1Example1">ইউজার আইডি</label>
                            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div>
                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                            @enderror
                        </div>
                        

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form1Example1" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                            <label class="form-label" for="form1Example1">পাসওয়ার্ড</label>
                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                            @enderror
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" name="remember" type="checkbox" value="" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                <label class="form-check-label" for="remember">{{__('আমাকে মনে কর')}}</label>
                            </div>
                            </div>

                            <div class="col text-center">
                                @if (Route::has('password.request'))
                                <!-- Simple link --> <a href="{{ route('password.request') }}">পাসওয়ার্ড রিসেট ?</a>
                                @endif
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block"style="font-size: 16px">
                            প্রবেশ <i class="fa fa-sign-in" aria-hidden="true"></i>
                        </button>
                        </form>
                        <p class="text-center p-3 text-white">
                        কারিগরি সহায়তায়
                        <a href="https://m360ict.com/">M360 ICT</a>
                        </p>
                    </div>
                    </div>
                </div>
        </div>
    </div>

</header>

    
@endsection

