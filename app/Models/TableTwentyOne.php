<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TableTwentyOne extends Model
{
    protected $guarded = [];
    protected $table = 'appendix_seven_table_20';


    public function sub_rows()
    {
        return $this->hasMany(TableTwentyOneSub::class, 'twenty_one_row_id', 'id');
    }
}
