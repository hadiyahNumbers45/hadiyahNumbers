<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Service;

class GUIProgramController extends Controller
{
    //
    public function index($id)
    {  
         $program =Program::query()->where('name',$id)->first();
         $ser=Service::query()->where('program_id',$program->id)->get();
         return  view('GUIProgram',compact('program','ser'));
    }
}
