@extends('admin.master')
@section('content')
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
.form-6-new{
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

        <div class="entryform">
            <h3>Menu>Form generator</h3>
            <form id="idForm">
                
           
                   <div class="form-group col-md-12">
                      <h3 for="Financial Year" style="text-align:center">Form Information* <span class="addTable" style="color: green;cursor: pointer;"></span></h3>
                    <input type="text" name="form_name" class="form-control" id="form_name" placeholder="Enter Form Name"><br>
                    <input type="text" name="form_id" class="form-control" id="form_id" placeholder="Form ID">
                  </div>
                
                <hr>
                <hr>
                         <div class="form-group">
                        <textarea class="ckeditor form-control" id="html_form" name="html_form"></textarea>
                        </div>
                
                <div class="form-row Tableblock" data-id="1">
                  <div class="form-group col-md-12">
                      <h3 for="Financial Year" style="text-align:center">Table Name <span class="addTable" style="color: green;cursor: pointer;">[Add New Table]</span></h3>
                    <input type="text" name="table_name[]" class="form-control" id="table_name" placeholder="Enter Table Name">
                  </div>
                    
                    
                    <div class="form-group col-md-3">
                                        <label for="Name">
                                        {{__('Column Name')}}  <span class="add addBlock" data-id="1" data-table="1" style="color: rgb(1, 32, 1);cursor: pointer;">[Add New Column]</span>
                                        </label>
                                        <div class="optionBox">
                                            <div class="block_1">
                                                <input type="text" class="form-control" name="table_1_column_name[]" id="idforminput" placeholder="Column Name">
                                            </div>
                                        </div>
                                    </div>
        
                </div>
                
                
                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                <button type="submit" class="btn btn-danger">সংশোধন</button>
              </form>
        </div>

      </div>
      </div>
  <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
 <script>
   $("#idForm").submit(function (e) {
    e.preventDefault();

    for ( instance in CKEDITOR.instances ) {
        CKEDITOR.instances[instance].updateElement();
    }
         var data = new FormData($('#idForm')[0]);
        //alert(data);
        $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            method: "post",
            url: "{{url("create-form-table")}}",
            data: data,
            contentType:false,
            cache: false,
             processData:false,
            success: function (data, textStatus, jqXHR) {
            console.log(data);
            }
    }).done(function (data) {
    $("#success_msg").html("Data Save Successfully");
    $('#exampleModalLong').modal('toggle');
    $('#idForm')[0].reset();
   
//            console.log(data);
            window.location.href = "{{ url('form')}}/"+data;
    // location.reload();
    }).fail(function (data, textStatus, jqXHR) {
    $("#loader").hide();
    var json_data = JSON.parse(data.responseText);
    $.each(json_data.errors, function (key, value) {
    $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
    $("#" + key).addClass("error");
    });
    });
    });
    
        var tableId = 1;
        var blockId = 1;

				var bla = $('#idforminput').val();

				console.log(bla);
    $('.addTable').click(function () {
        tableId++;
        blockId++;
//        alert(tableId);
let outputHtml = '<div class="form-row Tableblock" data-id='+tableId+'>\
                  <div class="form-group col-md-12">\
                      <h3 for="Financial Year" style="text-align:center">Table Name </h3>\
                    <input type="text" name="table_name[]" class="form-control" id="table_name" placeholder="Enter Table Name">\
                  </div>\
                    <div class="form-group col-md-6">\
                                        <label for="Name">\
                                       <p> Column Name</p>\
                                                        <span class="add" data-id='+blockId+' data-table='+tableId+' style="color: green;cursor: pointer;">[Add New Column]</span>\
                                        </label>\
                                        <div class="optionBox">\
                                            <div class="block_'+blockId+'">\
                                                <input type="text" class="form-control" name="table_'+tableId+'_column_name[]" id="name.0" placeholder="Column Name">\
                                            </div>\
                                        </div>\
                                    </div>\   </div>';
                                                    
                                                
        $('.Tableblock:last').after(outputHtml);
    
    });

    
       var id = 1;     
       $(document).on("click", "span.add" , function() {
//           alert($(this).data("table"));
             let tableID = $(this).data("table");
              $('.block_'+$(this).data("id")+':last').after('<div class="block_'+blockId+'" style="text-align: left;">\
                                    <div class="row"><input type="text" class="form-control" name="table_'+tableID+'_column_name[]" id="name.'+id+'" placeholder="Column Name" style="width: 91%;float: left;margin: 0px 0px 0 auto;">\
                                    <span class="remove btn btn-danger" style="margin: 0px 0;">X</span>\
                               </div> </div>');
                                          id++;
});
      
//    $('.optionBox').on('click', '.remove', function () {
        $(document).on("click", "span.remove" , function() {
        $(this).parent().remove();
    });
 </script>
@endsection