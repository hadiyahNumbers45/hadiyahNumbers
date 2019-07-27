<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GUIadminProgramInfoController extends Controller
{
    //
    public function __construct()
{
    $this->middleware('auth:admin');
}
}
