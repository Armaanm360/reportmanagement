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
                    <a href="#">{{__('List of Form')}}</a>
                </li>
            </ul>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{__('List of Form')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="display table table-striped table-hover" >
                                          <thead>
                    <tr>
                        <th>{{__('Sl')}}</th>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Stored Time/Date')}}</th>
                        <th>{{__('ID')}}</th>
                        <th>{{__('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($alluniques as $row)
                        <input type="text" name="damn" value="{{ $row->form_id }}">
                    @endforeach --}}
                    @foreach($parameter as $parameter)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                              {{ $parameter-> form_name }}
                            </td>

                            <td>
                              {{ $parameter-> created_at }}
                            </td>
                                  
                            <td>
                               <input type="text" value="{{ $parameter-> form_unique_id }}" name="form_id_get" style="border: none" readonly>
                            </td>
                        
                            <td>
                                 <a class="btn btn-success btn-sm" href="{{ url('stored-forms/'.$parameter->form_id.'/'.$parameter->form_unique_id	) }}">
                                   
                                {{__('Edit')}}

                                 <a class="btn btn-danger btn-sm" href="{{ url('stored-forms/'.$parameter->form_id.'/'.$parameter->form_unique_id	) }}">
                                   
                                {{__('Delete')}}
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
