<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CommonModel extends Model
{
    public static function insertData($table, $data)
    {

        DB::table($table)->insert($data);
    }
        
}
