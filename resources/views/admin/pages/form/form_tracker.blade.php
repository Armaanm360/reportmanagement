@extends('admin.master')
@section('content')
    @inject('usessrname', 'App\Models\UserForm')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@100;200;300;500;600;800;900&display=swap"
        rel="stylesheet">
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
                        <a href="#">{{ __('Form Tracker') }}</a>
                    </li>
                </ul>
            </div>
            <style>
                @import url('https://fonts.googleapis.com/css?family=Raleway:200');



                .progress {
                    padding: 0;
                    width: 90%;
                    height: 30px;
                    overflow: hidden;
                    background: #e5e5e5;
                    border-radius: 6px;

                }

                .bar {
                    position: relative;
                    float: left;
                    min-width: 1%;
                    height: 100%;
                    background: #cb3a06;
                }

                .percent {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    margin: 0;
                    font-family: tahoma, arial, helvetica;
                    font-size: 12px;
                    color: white;
                }


                .gradient-border {
                    --borderWidth: 3px;
                    background: #fff;
                    position: relative;
                    border-radius: var(--borderWidth);
                }

                * {
                    margin: 0;
                    paddding: 0;
                    box-sizing: border-box font-family: 'Lato', sans-serif;
                    font-family: 'Montserrat', sans-serif;
                }

                .specific {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background: #0000;
                }

                .upsale-button {
                    position: relative;
                    z-index: 0;
                    height: 40px;
                    overflow: hidden;
                    border: none !important;
                    padding: 0 !important;
                    background: #5D5DFF !important;
                    color: #656565;
                    background: white;
                    border-radius: 8px;
                    width: 150px;
                    text-align: center;
                    font-size: 14px;
                    font-weight: 400;
                    box-shadow: 0 4px 50px 0 rgb(0 0 0 / 7%);
                    transition: .2s all linear;
                    text-decoration: initial;
                }

                .upsale-button span {
                    position: relative;
                    z-index: 1;
                    height: calc(100% - 4px);
                    width: calc(100% - 4px);
                    top: 2px;
                    left: 2px;
                    align-items: center;
                    display: flex;
                    justify-content: center;
                    border-radius: 8px;
                    color: white;
                    background: #5D5DFF;
                }

                .upsale-button:after {
                    content: "";
                    position: absolute;
                    z-index: -2;
                    left: -50%;
                    top: -50%;
                    width: 200%;
                    height: 200%;
                    background-color: transparent;
                    background-repeat: no-repeat;
                    background-size: 50% 50%, 50% 50%;
                    background-position: 0 0, 100% 0, 100% 100%, 0 100%;
                    background-image: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 50%, rgba(255, 255, 255, 0) 100%);
                    -webkit-animation: rotate 2s linear infinite;
                    animation: rotate 2s linear infinite;
                }


                @-webkit-keyframes rotate {
                    100% {
                        transform: rotate(360deg);
                    }
                }

                @keyframes rotate {
                    100% {
                        transform: rotate(360deg);
                    }
                }


                /* start global style */
                @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css");

                * {
                    box-sizing: border-box;
                    margin: 0;
                    padding: 0;
                    /*   outline: 1px solid #999; */
                }

                /*.......... start timeline style ..........*/

                .timeline>h3 {
                    text-align: center;
                    text-transform: capitalize;
                    font-size: 2rem;
                    font-weight: bold;
                    padding: 1rem;
                }

                .timeline>.column {
                    display: flex;
                    flex-direction: column;
                    position: relative;
                    margin: 1rem;
                }

                .timeline>.column::before {
                    content: "";
                    display: block;
                    position: absolute;
                    left: 50%;
                    transform: translatex(-50%);
                    border: 1px solid rgba(49, 49, 49, 0.5);
                    height: calc(100% / 5 * 4);
                    z-index: -1;
                }

                .timeline>.column>.row {
                    display: flex;
                }

                /* row text */
                .timeline>.column>.row>.text {
                    flex: 1 1 calc(50% - 50px);
                    position: relative;
                    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175);
                }

                .timeline>.column>.row h3 {
                    color: #fff;
                    background-color: black;
                    padding: 1rem;
                    border-top-left-radius: 5px;
                    border-top-right-radius: 5px;
                }

                .timeline>.column>.row p {
                    padding: 1rem;
                    color: rgba(51, 51, 51, 0.5);
                    border-bottom-left-radius: 5px;
                    border-bottom-right-radius: 5px;
                }

                /* row icon */
                .timeline>.column>.row>.icon {
                    flex: 1 1 100px;
                }

                .timeline>.column>.row>.icon>div {
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    margin: auto;
                    background: #fff;
                    box-shadow: 0 1rem 3rem rgb(0 0 0 / 18%);
                    position: relative;
                }

                .timeline>.column>.row>div i {
                    display: block;
                    font-size: 1.5rem;
                    color: rgb(0, 85, 255);
                    text-align: center;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }

                /* row time */
                .timeline>.column>.row>.time {
                    flex: 1 1 calc(50% - 50px);
                    padding-top: 1rem;
                }

                .timeline>.column>.row:nth-child(even) {
                    flex-direction: row-reverse;
                }

                .timeline>.column>.row:nth-child(even)>div:last-child {
                    text-align: end;
                }

                .timeline>.column>.row:nth-child(even) h3::before {
                    content: "";
                    position: absolute;
                    left: -20px;
                    border: 10px solid rgba(0, 0, 0, 0);
                    border-right-color: black;
                }

                .timeline>.column>.row:nth-child(odd) h3::after {
                    content: "";
                    position: absolute;
                    right: -20px;
                    border: 10px solid rgba(0, 0, 0, 0);
                    border-left-color: black;
                }

                /* mobile version */
                @media screen and (max-width: 768px) {
                    .timeline>.column::before {
                        left: 50px;
                        height: calc(100% / 5 * 4);
                        top: 50px;
                    }

                    .timeline>.column>.row {
                        flex-flow: column wrap;
                        height: 250px;
                    }

                    .timeline>.column>.row:nth-child(even) {
                        flex-direction: column;
                    }

                    .timeline>.column>.row:nth-child(even)>.time:last-child {
                        text-align: start;
                    }

                    .timeline>.column>.row>.icon {
                        order: 1;
                        flex: 1 1 100%;
                        padding-top: 50px;
                        width: 100px;
                    }

                    .timeline>.column>.row>.time {
                        order: 2;
                        flex: 1 1 50px;
                        width: calc(100% - 100px);
                    }

                    .timeline>.column>.row>.text {
                        order: 3;
                        flex: 1 1 calc(100% - 50px);
                        width: calc(100% - 100px);
                    }

                    .timeline>.column>.row:nth-child(odd) h3::before {
                        content: "";
                        position: absolute;
                        left: -20px;
                        border: 10px solid rgba(0, 0, 0, 0);
                        border-right-color: black;
                    }

                    .timeline>.column>.row:nth-child(odd) h3::after {
                        border: none;
                    }
                }

                /*.......... end timeline style ..........*/
            </style>
            <div class="row">


            </div>
            <div class="row">
                <div class="col-md-12 text-center"> <span class="display-3"
                        style="font-family:'Noto Sans Bengali', sans-serif">ফর্ম
                        ট্র্যাকার</span> <i class="fa-regular fa-border-center-h" style="font-size: 50px"></i></div>

                <div class="col-3"></div>
                <div class="col-6">
                    <section class="timeline">
                        <div class="column">
                            <div class="row">
                                <div class="text">
                                    <h3>Lorem ipsum dolor sit amet </h3>
                                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna
                                        aliqua. </p>
                                </div>
                                <div class="icon">
                                    <div>
                                        <i class="fa-solid fa-1"></i>
                                    </div>
                                </div>
                                <div class="time">
                                    <h2>Super Admin</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="text">
                                    <h3>Lorem ipsum dolor sit amet </h3>
                                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna
                                        aliqua. </p>
                                </div>
                                <div class="icon">
                                    <div>
                                        <i class="fa-solid fa-2"></i>
                                    </div>
                                </div>
                                <div class="time">
                                    <h2>Admin</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="text">
                                    <h3>Lorem ipsum dolor sit amet </h3>
                                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna
                                        aliqua. </p>
                                </div>
                                <div class="icon">
                                    <div>
                                        <i class="fa-solid fa-3"></i>
                                    </div>
                                </div>
                                <div class="time">
                                    <h2>Sub Admin (All Regulatory)</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="text">
                                    <h3>Lorem ipsum dolor sit amet </h3>
                                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna
                                        aliqua. </p>
                                </div>
                                <div class="icon">
                                    <div>
                                        <i class="fa-solid fa-4"></i>
                                    </div>
                                </div>
                                <div class="time">
                                    <h2>Sub Admin (All Organization Head)</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="text">
                                    <h3>Lorem ipsum dolor sit amet </h3>
                                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna
                                        aliqua. </p>
                                </div>
                                <div class="icon">
                                    <div>
                                        <i class="fa-solid fa-5"></i>
                                    </div>
                                </div>
                                <div class="time">
                                    <h2>Sub Admin (Organization User)</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="text">
                                    <h3>Lorem ipsum dolor sit amet </h3>
                                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna
                                        aliqua. </p>
                                </div>
                                <div class="icon">
                                    <div>
                                        <i class="fa-solid fa-6"></i>
                                    </div>
                                </div>
                                <div class="time">
                                    <h2>Branch User</h2>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-3"></div>


            </div>
        </div>
    </div>
@endsection
