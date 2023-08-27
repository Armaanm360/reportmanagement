<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TotalManagementDevelopmentCosts extends Model
{
    protected $guarded = [];
    protected $table = 'total_management_development_costs';

    public function sub_rows()
    {
        return $this->hasMany(TotalManagementDevelopmentCostsSub::class, 'row_id', 'id');
    }
}
