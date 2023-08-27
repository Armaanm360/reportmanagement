<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionThreeSecondPart extends Model
{
    protected $guarded = [];
    protected $table = 'section_three_second_part';


    public function sub_rows()
    {
        return $this->hasMany(SectionThreeSecondPartSub::class, 'strategic_row_id', 'id');
    }
}
