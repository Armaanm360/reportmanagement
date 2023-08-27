<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionThreeFirstPart extends Model
{
    protected $guarded = [];
    protected $table = 'section_three_first_part';


    public function sub_rows()
    {
        return $this->hasMany(SectionThreeFirstPartSub::class, 'row_id', 'id');
    }
}
