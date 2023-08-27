<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiscalYearBudgetImplementationProgress extends Model
{
    protected $guarded = [];
    protected $table = 'fiscal_year_budget_implementation_progress';

    public function sub_rows()
    {
        return $this->hasMany(FiscalYearBudgetImplementationProgressSub::class, 'row_id', 'id');
    }
}
