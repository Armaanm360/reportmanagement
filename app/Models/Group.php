<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    protected $table = 'group';
    public $timestamps = false;

    // turn off only updated_at
    const UPDATED_AT = false;

    public function group_user()
    {
        return $this->hasMany(GroupUser::class);
    }
}
