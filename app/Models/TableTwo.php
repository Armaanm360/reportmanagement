<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TableTwo extends Model
{
    protected $guarded = [];
    protected $table = 'appendix_seven_table_2';


    public function sub_rows()
    {
        return $this->hasMany(TableTwoSub::class, 'two_row_id', 'id');
    }
}
