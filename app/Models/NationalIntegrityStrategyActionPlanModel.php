<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class NationalIntegrityStrategyActionPlanModel extends Model
{
    protected $guarded = [];
    protected $table = 'national_integrity_trategy_action_plan';

    public function sub_rows()
    {
       return $this -> hasMany(NationalIntegrityStrategyActionPlanSub::class,'row_id','id');
    }
}
