<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExcludingAnnualDevelopmentPrograms extends Model
{
    protected $guarded = [];
    protected $table = 'excluding_annual_development_programs';

    public function sub_rows()
    {
        return $this->hasMany(ExcludingAnnualDevelopmentProgramsSub::class, 'row_id', 'id');
    }
}
