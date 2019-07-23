<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

class homeController extends Controller
{
  public function __construct()
  {

  }
    //
    public function index()
    {
        $program=Program::all();
        return view('welcome',compact('program'));
    }
}
