<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Superviser;
use App\Program;


class GUIAdminController extends Controller
{
    //
    public function get_superviser(){
        $supervisers=Superviser::all();
        foreach ($supervisers as $superviser) {
        $programs[$superviser->id]=$superviser->sup_program;
        }
        return GUIAdminController::get_superviser_table($programs,$supervisers);
      }
      public function get_superviser_table($programs,$supervisers){
        return view('GUISuperviserInfo',compact('programs','supervisers'));

      }
   
}
