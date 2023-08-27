<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EGovernanceInnovationActionPlan extends Model
{
    protected $guarded = [];
    protected $table   = 'egovernance_innovation_action_plan';

    public function sub_rows()
    {
        return $this->hasMany(EGovernanceInnovationActionPlanSub::class, 'row_id', 'id');
    }
}
