<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DevelopmentProjectAnnualProgram extends Model
{
    protected $guarded = [];
    protected $table = 'development_project_annual_program';

    public function sub_rows()
    {
        return $this->hasMany(DevelopmentProjectAnnualProgramSub::class, 'row_id', 'id');
    }
}
