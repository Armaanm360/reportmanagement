@extends('admin.master')
@section('content')
    <?php
    $user = Auth::user();
    //echo '<pre>';
    //print_r($user);die;
    ?>
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
        .form-6-new {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .user-information {
            display: flex;
            justify-content: space-between;
        }

        .block_1.addnew input {
            margin: 15px !important;
        }

        .block_1.addnew span.remove.btn.btn-danger {
            margin: 20px 0 !important;
            margin-bottom: 30px !important;
        }

        span.remove.btn.btn-danger {
            margin-bottom: 30px !important;
            margin-left: 20px !important;
        }

        .styling {
            margin-left: 30px;
            margin-bottom: 30px;
        }
    </style>

    <div class="content">
        <div class="page-inner">

            <div class="entryform">
                <h3>Menu>Report Form->Create</h3>
                <form id="idForm">

                    @csrf
                    <div class="form-group col-md-12">
                        <h3 for="Financial Year" style="text-align:center">Calculation Form Information* <span class="addTable"
                                style="color: green;cursor: pointer;"></span></h3>
                        <div class="col-sm-12 my-1">
                            <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Subject</div>
                                </div>
                                <input type="text" name="form_name" class="form-control" id="form_name"
                                    onblur="onChangeHandle()" placeholder="">
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-12 my-1">
                        <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Form Id</div>
                            </div>
                            <input type="text" name="form_id" class="form-control" id="form_id" placeholder="Form ID">
                            <br>
                            <input type="hidden" name="form_creator" class="form-control" readonly
                                value="{{ Auth::user()->id }}">
                        </div>
                    </div>



                    <hr>
                    <hr>
                    <div class="form-group">
                        <label for="html_form">Description</label>
                        <textarea class="ckeditor form-control" id="html_form" name="html_form"></textarea>
                    </div>
                    {{-- <div class="form-group col-md-12">
          
                        <h3 for="Financial Year" style="text-align:center">Table Headline</h3>
                        <input type="text" name="table_headline" class="form-control" id="table_headline"
                            placeholder="Enter Table Headline">
                    </div> --}}



                    <div class="form-row Tableblock" data-id="1">
                        <div class="form-group col-md-12" style="display: none">
                            {{-- <h3 for="Financial Year" style="text-align:center">Table Name <span class="addTable" style="color: green;cursor: pointer;">[Add New Table]</span></h3> --}}
                            <h3 for="Financial Year" style="text-align:center">Table Name</h3>
                            <input type="text" name="table_name[]" class="form-control" id="table_name"
                                placeholder="Enter Table Name">
                        </div>



                        <div class="form-group col-md-12">
                            <label for="Name">
                                {{ __('Column Name') }} <span class="add addBlock" data-id="1" data-table="1"
                                    style="color: rgb(1, 32, 1);cursor: pointer;"><button class="btn btn-danger"
                                        type="button"><span class="demo">+</span></button></span>
                            </label>
                            <div class="optionBox">
                                <div class="block_1 addnew">
                                    <input type="text" class="form-control" name="table_1_column_name[]" id="idforminput"
                                        placeholder="Column Name">
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
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });


        var n = 9999999;
        var random_numb = 'Form-' + Math.floor(Math.random() * n);
        var random_table = 'table_' + Math.floor(Math.random() * n);
        window.addEventListener('load', function() {
            $("input[type=text][id=form_id]").val(random_numb);
            $("input[type=text][id=table_name]").val(random_table);
            $("input[type=text][id=form_id]").attr("readonly", true);
            $("input[type=text][id=table_name]").attr("readonly", true);
        });

        for (let i = 1; i < 10; i += 2) {
            if (i === 7) {
                break;
            }
            var inputget = 'name.' + i;



        }


        // let table_col = $("input[type=text][id=idforminput]").val();
        // alert(table_col.length);
        const str = 'hello 123 !@#$%^WORLD?._';


        // const noSpecialCharacters = str.replace(/[^\w ]/g, '');
        //let noSpecialCharacters = "!@#$^&%*()+=-[]\/{}|:<>?,.";
        const outString = 'দেশের জাতীয় পরিসংখ্যান সংস্থা হিসাবে কাজ(2016-2017)';
        let outStringss = outString.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
        let outStringsoos = outStringss.replace(' ', '_');

        console.log(outStringsoos);

        $("#idForm").submit(function(e) {
            e.preventDefault();

            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }
            var data = new FormData($('#idForm')[0]);
            //alert(data);
            //var table_name = $("input[type=text][id=table_name]").val();
            var idforminput = $("input[type=text][id=idforminput]").val();

            console.log(idforminput.length);


            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "post",
                url: "{{ url('create-form-table-calculation') }}",
                data: data,
                contentType: false,
                cache: false,
                processData: false,
                success: function(data, textStatus, jqXHR) {
                    console.log(data);
                }
            }).done(function(data) {
                $("#success_msg").html("Data Save Successfully");
                $('#exampleModalLong').modal('toggle');
                $('#idForm')[0].reset();

                //            console.log(data);
                window.location.href = "{{ url('form-calc') }}/" + data;
                // location.reload();
            }).fail(function(data, textStatus, jqXHR) {
                $("#loader").hide();
                var json_data = JSON.parse(data.responseText);
                $.each(json_data.errors, function(key, value) {
                    $("#" + key).after(
                        "<span class='error_msg' style='color: red;font-weigh: 600'>" + value +
                        "</span>");
                    $("#" + key).addClass("error");
                });
            });


        });


        var tableId = 1;
        var blockId = 1;

        var bla = $('#idforminput').val();

        console.log(bla);
        $('.addTable').click(function() {
            tableId++;
            blockId++;
            //        alert(tableId);
            let outputHtml = '<div class="form-row Tableblock" data-id=' + tableId +
                '>\
                                                                                                                                                                                                                                                                                                  <div class="form-group col-md-12">\
                                                                                                                                                                                                                                                                                                      <h3 for="Financial Year" style="text-align:center">Table Name </h3>\
                                                                                                                                                                                                                                                                                                    <input type="text" name="table_name[]" class="form-control" id="table_name" placeholder="Enter Table Name">\
                                                                                                                                                                                                                                                                                                  </div>\
                                                                                                                                                                                                                                                                                                    <div class="form-group col-md-6">\
                                                                                                                                                                                                                                                                                                                        <label for="Name">\
                                                                                                                                                                                                                                                                                                                       <p> Column Name</p>\
                                                                                                                                                                                                                                                                                                                                        <span class="add" data-id=' +
                blockId +
                ' data-table=' +
                tableId +
                ' style="color: green;cursor: pointer;">[Add New Column]</span>\
                                                                                                                                                                                                                                                                                                                        </label>\
                                                                                                                                                                                                                                                                                                                        <div class="optionBox">\
                                                                                                                                                                                                                                                                                                                            <div class="block_' +
                blockId +
                ' addnew">\
                                                                                                                                                                                                                                                                                                                                <input type="text" class="form-control" name="table_' +
                tableId +
                '_column_name[]" id="name.0" placeholder="Column Name">\
                                                                                                                                                                                                                                                                                                                            </div>\
                                                                                                                                                                                                                                                                                                                        </div>\
                                                                                                                                                                                                                                                                                                                    </div>\   </div>';


            $('.Tableblock:last').after(outputHtml);

        });


        var id = 1;
        $(document).on("click", "span.add", function() {
            //           alert($(this).data("table"));
            let tableID = $(this).data("table");
            $('.block_' + $(this).data("id") + ':last').after('<div class="block_' + blockId +
                '" style="text-align: left;">\
                                                                                                                                                                                                                                                                                                                    <div class="row"><input type="text" class="form-control styling" name="table_' +
                tableID +
                '_column_name[]" id="name.' + id +
                '" placeholder="Column Name" style="width: 91%;float: left;">\
                                                                                                                                                                                                                                                                                                                    <span class="remove btn btn-danger" style="margin: 0px 0;">-</span>\
                                                                                                                                                                                                                                                                                                               </div> </div>'
            );
            id++;
        });

        //    $('.optionBox').on('click', '.remove', function () {
        $(document).on("click", "span.remove", function() {
            $(this).parent().remove();
        });
    </script>
@endsection
