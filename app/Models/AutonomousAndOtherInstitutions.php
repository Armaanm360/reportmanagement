<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutonomousAndOtherInstitutions extends Model
{
    protected $guarded = [];
    protected $table = 'autonomous_and_other_institutions';

    public function sub_rows()
    {
        return $this->hasMany(AutonomousAndOtherInstitutionsSub::class, 'row_id', 'id');
    }
}
