@extends('admin.master')
@section('content')
@inject('dashboard', 'App\Models\Dashboard')
<?php $user = Auth::user(); ?>
<style>
  @media screen and (min-width: 700px) {
    .dashboard-colmn-4 {
      margin-top: 30px;
    }
  }
</style>
<div class="content @if(CurrSessionMode() == 'dark') dark-mode @endif">
  <div class="panel-header @if(CurrSessionMode() == 'dark') dark-mode @else bg-primary-gradient @endif">
    <div class="page-inner py-5">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
          <h2 class="text-white pb-2 fw-bold">{{__('Dashboard')}}</h2>
          <h5 class="text-white op-7 mb-2">{{__('Report Management')}}</h5>
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
    <div class="row row-card-no-pd mt--2">

      @if($user->can('view-user'))
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
                <a href="{{url('users')}}">
                  <div class="numbers">
                    <p class="card-category">{{__('Total User')}}</p>
                    <h4 class="card-title">{{$dashboard->total_employees()}}</h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif


      @if($user->can('view-user'))
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
                <a href="{{url('submitted-reports')}}">
                  <div class="numbers">
                    <p class="card-category">{{__('Submitted Reports')}}</p>
                    <h4 class="card-title">{{$dashboard->total_submitted_reports()}}</h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif


      @if($user->can('view-user'))
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
                <a href="{{url('pending-reports')}}">
                  <div class="numbers">
                    <p class="card-category">{{__('Pending Reports')}}</p>
                    <h4 class="card-title">{{$dashboard->total_pending_reports()}}</h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif


      @if($user->can('view-user'))
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
                <a href="{{url('pending-reports')}}">
                  <div class="numbers">
                    <p class="card-category">{{__('Reports Monthly')}}</p>
                    <h4 class="card-title">{{$dashboard->total_monthly_reports()}}</h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif


      {{-- <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la flaticon-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">                            
                                <div class="numbers">
                                    <p class="card-category">{{__("Today's report")}}</p>
      <h4 class="card-title">1</h4>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-md-3">
  <div class="card card-stats card-round">
    <div class="card-body">
      <div class="row">
        <div class="col-5">
          <div class="icon-big text-center">
            <i class="la flaticon-time"></i>
          </div>
        </div>
        <div class="col-7 col-stats">
          <div class="numbers">
            <p class="card-category">{{__('This month report')}}</p>
            <h4 class="card-title">31</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
</div>
<div class="row">
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <div class="card-title">{{__('Report Charts')}}</div>
      </div>
      <div class="card-body">
        <div class="card-sub">
          Diagram
        </div>
        <div class="chart-container">
          <canvas id="htmlLegendsChart"></canvas>
        </div>
        <div id="myChartLegend"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <div class="card-title">{{__('Sent Forms Today')}}</div>
      </div>
      <div class="card-body pb-0">


        @foreach ($param as $param)

        {{-- @php
                              echo '<pre>';
                              print_r($param);
                          @endphp --}}
        <div class="d-flex">
          <div class="avatar">
            <img src="http://www.fid.gov.bd/themes/responsive_npf/img/logo/logo.png" alt="..." class="avatar-img rounded-circle">
          </div>
          <div class="flex-1 pt-1 ml-2">


            <h5 class="fw-bold mb-1">{{ $dashboard->getUserFormById($param->sub_form_id)  }}</h5>



            <small class="text-muted">Reciver : {{$dashboard->getUserName($param->reciever_user_id)}}</small>


          </div>
          <div class="d-flex ml-auto align-items-center">
            <span class="badge bg-warning text-white">Unsent</span>
          </div>
        </div>
        <div class="separator-dashed"></div>
        @endforeach

      </div>
      <a href="{{url('/forms/list')}}"><span class="badge bg-warning text-white">All Created Forms</span></a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <div class="card-title">{{__('Sent Reports(Today)')}}</div>
      </div>
      <div class="card-body pb-0">

        <div class="d-flex">
          {{-- <div class="avatar">
                                <img src="http://localhost/leave-management/public/admin_asset/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
                            </div> --}}
          <div class="flex-1 pt-1 ml-2">
            <h5 class="fw-bold mb-1">
              দ্বিতীয় কোয়ার্টার (এপ্রিল-জুন)</h5>
            <small class="text-muted">২.২.৫ তথ্য অধিকার বিষয়ে কর্মপরিকল্পনা</small>
          </div>
          <div class="d-flex ml-auto align-items-center">
            <span class="badge bg-info text-white">Sent</span>
          </div>
        </div>
        <div class="separator-dashed"></div>


        <div class="d-flex">
          {{-- <div class="avatar">
                                <img src="http://localhost/leave-management/public/admin_asset/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
                            </div> --}}
          <div class="flex-1 pt-1 ml-2">
            <h5 class="fw-bold mb-1">

              চতুর্থ কোয়ার্টার (অক্টোবর-ডিসেম্বর)</h5>
            <small class="text-muted">২.২.৫ তথ্য অধিকার বিষয়ে কর্মপরিকল্পনা</small>
          </div>
          <div class="d-flex ml-auto align-items-center">
            <span class="badge bg-info text-white">Sent</span>
          </div>
        </div>
        <div class="separator-dashed"></div>
      </div>
    </div>
  </div>
</div>



<div class="row">
  <div class="col-md-8">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Generated Reports Charts</div>
        </div>
        <div class="card-body">
          <div class="chart-container">
            <canvas id="multipleLineChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 ">
    <!--                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="h1 fw-bold float-right text-warning">1</div>
                                        <h2 class="mb-2">2</h2>
                                        <p class="text-muted">{{__('Total Requests')}}</p>
                                        <div class="pull-in sparkline-fix">
                                            <div id="lineChart3"></div>
                                        </div>
                                    </div>
                                </div>            -->
    <!--
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="h1 fw-bold float-right text-warning">1</div>
                                        <h2 class="mb-2">2</h2>
                                        <p class="text-muted">{{__('Today Requests')}}</p>
                                        <div class="pull-in sparkline-fix">
                                            <div id="lineChart2"></div>
                                        </div>
                                    </div>
                                </div> -->
    <div class="card" style="height: 400px">
      <div class="card-header">
        <div class="card-title">Report</div>
      </div>
      <div class="card-body">
        <div class="chart-container">
          <canvas id="pieChart" style="width: 50%; height: 50%"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row" style=" margin-top: 15px;">



  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-head-row">
          <h4 class="card-title">{{__('This Month')}}</h4>
          <div class="card-tools">
            <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
            <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
            <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
          </div>
        </div>
        <p class="card-category">
          {{__('reports')}}
        </p>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive table-hover table-sales">
              <table id="multi-fil" class="table">
                <!--<table id="multi-filter-select" class="table">-->
                <thead>
                  <th>1</th>
                  <th>2</th>
                  <th>3</th>
                  <th>4</th>
                  <th>5</th>
                  <th>6</th>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <div class="card-title">{{__('Report Diagram')}}</div>
      </div>
      <div class="card-body">
        <div class="chart-container">
          <canvas id="multipleBarChart"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <div class="card-title">{{__('Today Report')}}</div>
      </div>
      <div class="card-body pb-0">

        <div class="d-flex">
          <div class="avatar">
            <img src="http://localhost/leave-management/public/admin_asset/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
          </div>
          <div class="flex-1 pt-1 ml-2">
            <h5 class="fw-bold mb-1">fdsggh</h5>
            <small class="text-muted">57867</small>
          </div>
          <div class="d-flex ml-auto align-items-center">
            <h3 class="text-info fw-bold">Type</h3>
          </div>
        </div>
        <div class="separator-dashed"></div>

      </div>
    </div>
  </div>

</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalTable" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalTable">{{__('Edit Leave Application')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="edit_form">
        @method('PUT')
        <div id="modal_body" class="modal-body">

        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
          <button type="button" class="btn btn-primary edit_button">{{__('Save')}}</button>
        </div>
      </form>
    </div>
  </div>
</div>
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
        url: "{{url("
        leave - applications / get - dashboard - list ")}}",
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
            $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
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
@endsection