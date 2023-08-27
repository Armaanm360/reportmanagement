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
            <h4 class="page-title">{{__('Group')}}</h4>
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
                    <a href="#">{{__('Group')}}</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">{{__('List of Group')}}</a>
                </li>
            </ul>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{__('List of Group')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="display table table-striped table-hover" >
                                          <thead>
                    <tr>
                        <th>{{__('Sl')}}</th>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Total Institution')}}</th>
                        <th>{{__('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_group as $row)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                {{ $row->name }}
                            </td>

                            <td>
                                {{ count($row->group_user)}}
                            </td>
                            
                            <td>
                                @if ($user->can('edit-group'))
                                    <a class="btn btn-success btn-sm" href="{{route('groups.edit',[$row->id])}}">
                                    {{__('Edit')}}
                                    </a>
                                @endif
                                @if ($user->can('delete-form'))
                                <a class="btn btn-danger btn-sm text-white" href="{{url('groups')}}/{{ $row->id }}/delete" >
                                @endif 
                                    <form method="post" class="delete_form" action="{{route('groups.delete',[$row->id])}}" method="POST">
 @method('DELETE')
 @csrf
 <button type="submit" style="cursor: pointer">{{__('Delete')}}</button>        
 <!--<input type="hidden" name="_method" value="DELETE">-->
</form>
                                    
                                
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>{{__('Sl')}}</th>
                                        <th>{{__('Name')}}</th>
                                        <th>{{__('Total Institution')}}</th>
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
    
      $(document).ready(function(){
      $('.delete_form').on('submit', function(){
         if(confirm("Are you sure you want to delete it?"))
         {
             return true;
         }
         else
         {
             return false;
         }
      });
  });
</script>

@endsection    
