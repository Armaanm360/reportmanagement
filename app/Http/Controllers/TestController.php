<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class TestController extends Controller
{
    public function testFunction(){


        $accesibilityss = array("ministry", "regu", "inst", "division", "branch", "office");
        $rows      = 6;
        $input     = 5;
        $stand_arr = 2;
        $last = $rows - $input;
        $final_last = $last - 1; 
        $start = $input - $stand_arr;
        if($input == 6 || $input == 5 ){
            $accesibility = array_slice($accesibilityss, $start);
        }elseif($input == 1){
            $accesibility = array_slice($accesibilityss,0,2);
        }else{
            $accesibility = array_slice($accesibilityss, $start, -$final_last);

        }

        echo '<pre>';
        print_r($accesibility);

        die;        
    }
}
