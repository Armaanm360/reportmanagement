<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnualPerformanceQuarterly extends Model
{
    protected $guarded = [];
    protected $table = 'annual_performance_agreement_quarterly';


    public function sub_rows()
    {
        return $this->hasMany(AnnualPerformanceQuarterlySub::class, 'row_id', 'id');
    }
}
