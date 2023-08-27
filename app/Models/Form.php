<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Form extends Model
{
    public function table_columns($table) {
//        $query = "select * from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME='$table'";
//        $abc = DB::statement($query);
//        print_r($abc);die;
      $columns  = \Schema::getColumnListing($table);

  return $columns;
    }
}
