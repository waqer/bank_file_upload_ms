<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test(){
       
        // $user =DB::select('select * from TBL_EPAY_TEMP');
       //  $tes = DB::connection('oracle')->select('select * from TBL_EPAY_TEMP');
        //  dd($tes);
        // $tes = DB::select('select * from TBL_EPAY_TEMP');
        //  var_dump($tes);


         $tes = DB::select('select * from users');
         var_dump($tes);

     }
    //
}
