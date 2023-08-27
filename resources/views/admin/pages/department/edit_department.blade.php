<div class="card">

    <div class="card-body">

        <div class="col-md-12 col-lg-12">
            <div class="row">


                {{-- <div class="form-group col-12">
                                        <label for="Name" style="display: block;">{{__('Select Institute')}}</label>
                                                        <select class="form-control select2" id="institution_id" name="institution_id" style="width: 100%">                                                          
                                                                @foreach ($all_institutions as $row)
                                                            <option value="{{ $row->id }}" @if ($row->id == $department->institution_id) selected @endif>{{ $row->name }}</option>
                                                            @endforeach                                                 
                                                        </select>

                                    </div>
                            
                
                <div class="form-group col-12">
                    <label for="Name" style="display: block;">{{__('Select Head Department')}}</label>
                    <select class="form-control select2" id="parent_id_update" name="parent_id" style="width: 100%">
                        <option value="">{{__('Select Head Department')}}</option>
                        @foreach ($all_department as $row)
                        <option value="{{ $row->id }}" @if ($row->id == $department->parent_id) selected @endif>{{ $row->name }}</option>
                        @endforeach
                    </select>
                </div> --}}
                <div class="form-group col-12">
                    <label for="name">{{ __('Department') }} </label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $department->name }}"
                        placeholder="Enter Name">
                    <input type="hidden" class="form-control" name="id" id="id"
                        value="{{ $department->id }}" placeholder="Enter Name">

                </div>
                <div class="form-group col-12">
                    <label for="comment">{{ __('Description') }}</label>
                    <textarea class="form-control" id="description" value="{{ $department->description }}" name="description"
                        rows="5">

                    </textarea>
                </div>

            </div>
        </div>

    </div>
</div>
<div id="loader1" class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>
{{-- <script>
    $('document').ready(function()
{
    $('textarea').each(function(){
            $(this).val($(this).val().trim());
        }
    );
});
</script> --}}
