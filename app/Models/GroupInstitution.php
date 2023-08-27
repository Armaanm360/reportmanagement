<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupInstitution extends Model
{

protected $table = 'group_institution';

     public $timestamps = false;
    // turn off only updated_at
const UPDATED_AT = false;

}
