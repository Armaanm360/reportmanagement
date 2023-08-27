<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FourteenTable extends Model
{
    protected $guarded = [];
    protected $table = 'appendix_seven_table_2';


    public function sub_rows()
    {
        return $this->hasMany(FourteenTableSubRow::class, 'fourteen_row_id', 'id');
    }
}
