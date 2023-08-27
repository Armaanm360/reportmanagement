

<div class="card">

    <div class="card-body">

        <div class="col-md-12 col-lg-12">
            <div class="row">
                
                                   <?php 
                                    if(\Illuminate\Support\Facades\Auth::user()->hasRole('super-admin')){
                                    ?>
                                    <div class="form-group col-12">
                                        <label for="Name" style="display: block;">{{__('Select Institute')}}</label>
                                                        <select class="form-control select2" id="institution_id" name="institution_id" style="width: 100%">                                                          
                                                                @foreach($all_institutions as $row)
                                                            <option value="{{ $row->id }}" @if($row->id == $division->institution_id) selected @endif>{{ $row->name }}</option>
                                                            @endforeach                                                 
                                                        </select>

                                    </div>
                                    <?php } ?>
                
                <div class="form-group col-12">
                    <label for="Name" style="display: block;">{{__('Select Head division')}}</label>
                    <select class="form-control select2" id="parent_id_update" name="parent_id" style="width: 100%">
                        <option value="">{{__('Select Head Division')}}</option>
                        @foreach($all_division as $row)
                        <option value="{{ $row->id }}" @if($row->id == $division->parent_id) selected @endif>{{ $row->name }}</option>
                        @endforeach
                    </select>
                </div> 
                <div class="form-group col-12">
                    <label for="name">{{__('division')}} </label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$division->name}}" placeholder="Enter Name">
                    <input type="hidden" class="form-control" name="id" id="id" value="{{$division->id}}" placeholder="Enter Name">

                </div> 
                <div class="form-group col-12">
                    <label for="comment">{{__('Description')}}</label>
                    <textarea class="form-control" id="description" name="description" rows="5">
                       
                        {{$division->description}}

                    </textarea>
                </div>

            </div>
        </div>

    </div>
</div>
<div id="loader1" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
<script>
    $('document').ready(function()
{
    $('textarea').each(function(){
            $(this).val($(this).val().trim());
        }
    );
});
</script>