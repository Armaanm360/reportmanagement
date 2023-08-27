@extends('admin.master')
@section('content')
<style>
    i {  vertical-align: middle; }
.table-users tbody tr:hover {
	cursor: pointer;
	background-color: #eee;
}
.nav-user-photo {
     vertical-align: middle;
}
.user_panel {
    width: 50%;
}
</style>
<div class="content">

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">{{__('Department')}}</h4>
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
                    <a href="#">{{__('Department')}}</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">{{__('List of Department')}}</a>
                </li>
            </ul>
        </div>
    
    </div>
<div class="container">
	<div class="row">
        <div class="panel panel-default user_panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Employee List')}}</h3>
            </div>
            <div class="panel-body">
				<div class="table-container">
                    <table class="table-users table" border="0">
                        <tbody>
                            @foreach($all_user as $row)
                           
                            <tr>
                                  <form action="{{url('messenger')}}" method="post">
                                    @csrf
              @method('POST')
                                <td width="10" align="center">
                                    <i class="fa fa-2x fa-user fw"></i>
                                </td>
                                 
                                <td>
                                  
                                    <input type="hidden" name="to_user_id" value="{{$row->id}}">
                                     {{$row->name}}<br><i class="fa fa-envelope"></i>
                                   
                                    
                                </td>
                                
                                <td>
                                    {{$row->user_id}}
                                </td>
                                <td align="center">
                                    Last Login:  6/14/2017<br><small class="text-muted">{{__('2 days ago')}}</small>
                                </td>
                                <td align="center">
                                     <button type="submit">{{__('Go')}}</button>
                                </td>
                                    
                             </form>
                            </tr>
                        
                            @endforeach
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

	</div>
</div>
</div>

@endsection    
