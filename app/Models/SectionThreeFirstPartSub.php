<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionThreeFirstPartSub extends Model
{
    protected $guarded = [];
    protected $table = "section_three_first_part_sub";

    public function sub_rows()
    {
        return $this->hasMany(SectionThreeFirstPartSubTwo::class, 'row_id', 'id');
    }
}
