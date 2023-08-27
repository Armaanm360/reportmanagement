@extends('admin.master')
@section('content')
<?php
$user = Auth::user();
//echo '<pre>';
//print_r($user);die;
?>
<div class="content">

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">{{__('Role')}}</h4>
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
                    <a href="#">{{__('Role')}}</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">{{__('List of Role')}}</a>
                </li>
            </ul>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{__('List of Roles')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="display table table-striped table-hover" >
                                          <thead>
                    <tr>
                        <th>{{__('Sl')}}</th>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Slug')}}</th>
                        <th>{{__('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_roles as $row)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                {{ $row->name }} 
                            </td>

                            <td>
                                {{ $row->slug }}
                            </td>
                            
                            <td>
                                @if ($user->can('edit-role'))
                                    <a class="btn btn-success btn-sm" href="{{url('roles')}}/{{ $row->id }}/edit">
                                    {{__('Edit')}}
                                    </a>
                                @endif
                                @if ($user->can('delete-role'))
                                    <a class="btn btn-danger btn-sm text-white">
                                    {{__('Delete')}}
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>{{__('Sl')}}</th>
                                        <th>{{__('Name')}}</th>
                                        <th>{{__('Slug')}}</th>
                                        <th>{{__('Action')}}</th>
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
    $(document).ready(function () {
        $('#basic-datatable').DataTable({
        });

    });
</script>
@endsection    
