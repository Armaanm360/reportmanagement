<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeaveApplication extends Model
{
    protected $table = "leave_application";
    
    public function leave_application_permissions() {
       return $this->belongsToMany(LeaveApplication::class,'permission_holder_id');
    }
    public function leave_application_user() {
       return $this->belongsTo(User::class,'user_id','id');
    }
}
