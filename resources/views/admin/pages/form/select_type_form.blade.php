@extends('admin.master')
@section('content')
    <?php
    $user = Auth::user();
    //echo '<pre>';
    //print_r($user);die;
    ?>
    <!doctype html>

    <style>
        .form-1-new h3,
        .form-2-new h3,
        .form-3-new h3 {
            text-align: center;
        }

        .user-information,
        .twonddataform,
        .form-1-new,
        .form-2-new,
        .form-3-new,
        .form-4-new,
        .form-5-new,
        .form-6-new {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .user-information {
            display: flex;
            justify-content: space-between;
        }
    </style>

    <div class="content">
        <div class="page-inner">

            <div class="shadow-lg p-3 mb-5 bg-white rounded text-danger font-weight-bold"">Select Form Type</div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Text Form</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="{{ url('create-form') }}" class="btn btn-lg btn-outline-info">Create</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Data Form</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="{{ url('create-form-calculation') }}" class="btn btn-lg btn-outline-primary">Create</a>
                        </div>
                    </div>
                </div>
            </div>






        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript"></script>
@endsection
