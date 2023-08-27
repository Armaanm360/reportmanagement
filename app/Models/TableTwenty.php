<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TableTwenty extends Model
{
    protected $guarded = [];
    protected $table = 'appendix_seven_table_20';


    public function sub_rows()
    {
        return $this->hasMany(TableTwentySub::class, 'twenty_row_id', 'id');
    }
}
