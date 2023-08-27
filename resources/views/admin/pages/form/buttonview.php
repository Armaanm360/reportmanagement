@php
    $limb = $form_tables[0]->table_name;
    $damn = DB::table($limb)->count();
    if ($damn == 1) { ?>
        <button type="button" class="btn btn-danger"><a href="<?php echo url('generate-pdf/'.$form[0]->id)?>">Generate
                        Pdf</a></button>
                        <button type="button" id="print_table" class="btn btn-danger" onClick="printTable()">Print Pdf</button>
    <?php }else{ ?>
        <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
    <?php }
@endphp  