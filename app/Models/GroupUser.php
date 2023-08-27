<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    protected $table = 'group_user';

    public $timestamps = false;
    // turn off only updated_at
    const UPDATED_AT = false;

    public function userCont()
    {
        return $this->belongsTo('UserForm');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }
}
