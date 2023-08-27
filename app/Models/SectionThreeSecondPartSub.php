<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionThreeSecondPartSub extends Model
{
    protected $guarded = [];
    protected $table = 'section_three_second_part_sub';


    public function sub_rows()
    {
        return $this->hasMany(SectionThreeSecondPartSubTwo::class, 'strategic_row_id', 'id');
    }
}
