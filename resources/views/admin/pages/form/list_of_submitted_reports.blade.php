@extends('admin.master')
@section('content')

<div class="content">

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">{{__('Form')}}</h4>
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
                    <a href="#">{{__('Form')}}</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">{{__('List of Submitted Reports')}}</a>
                </li>
            </ul>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{__('List of Submitted Reports')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="display table table-striped table-hover" >
                                          <thead>
                    <tr>
                        <th>{{__('Sl')}}</th>
                        <th>{{__('Name')}}</th>
                        <th>{{__('ID')}}</th>
                        <th>{{__('Action')}}</th>
                    </tr>
                </thead>
                <tbody>

           
            

          
                    @foreach($userforms as $userforms)


                    
                
                        
                 
            
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                {{ $userforms->sub_form_id_unique_id}}
                            </td>

                            <td>
                                {{ $userforms->id }}
                            </td>
                            {{-- {{url('form')}}/{{ $row->id }} --}}
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ url('submit-form',$userforms -> sub_form_id) }}">
                                {{__('View')}}
                                </a>

  
                                @if ($userforms->duration > date('Y-m-d'))
                                    
                          
                                <a class="btn btn-success btn-sm" href="{{ url('submit-form',$userforms -> sub_form_id) }}">
                                {{__('Edit')}}
                                </a>
                                      @endif

                                      @if (Auth::user()->hasRole('super-admin'))
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
                                        <th>{{__('ID')}}</th>
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
