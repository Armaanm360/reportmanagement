<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function divisionName($id)
    {
        return   Division::where('id', $id)->get();
    }
}
