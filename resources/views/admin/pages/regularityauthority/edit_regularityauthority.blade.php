

<div class="card">

    <div class="card-body">

        <div class="col-md-12 col-lg-12">
            <div class="row">
                <div class="form-group col-12">
                    <label for="Name" style="display: block;">{{__('Select Head Institution')}}</label>
                    <select class="form-control select2" id="parent_id_update" name="parent_id" style="width: 100%">
                        <option value="">{{__('Select Head Institution')}}</option>
           
                    </select>
                </div> 
                <div class="form-group col-12">
                    <label for="name">{{__('Regularity Authority')}} </label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$regauthority->name}}" placeholder="Enter Name">
                    <input type="hidden" class="form-control" name="id" id="id" value="{{$regauthority->id}}" placeholder="Enter Name">

                </div> 
                <div class="form-group col-12">
                    <label for="comment">{{__('Description')}}</label>
                    <textarea class="form-control" id="description" value="" name="description" rows="5">
                          {{$regauthority->description}}
                    </textarea>
                </div>

            </div>
        </div>

    </div>
</div>
<div id="loader1" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
{{-- <script>
    $('document').ready(function()
{
    $('textarea').each(function(){
            $(this).val($(this).val().trim());
        }
    );
});
</script> --}}