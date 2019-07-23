<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
// يدخل له بيانات الدخول اي دي لحال او اري
function Session (LoginData $LoginData){

$idOfObserver=130;
$idOfOSupervisor=120;
$idOfAdmin=110;

$data = $LoginData->input();
$LoginData->Session()->put('id',$LoginData);
$Output3=$LoginData->Session()->all();
$Output=$LoginData->Session()->get('id');
$Output1=substr($Output, 0,3);
  if($Output1['id'] == $idOfAdmin){
    return view ('GuiAdmin');
  }
  elseif ($Output1['id'] == $idOfOSupervisor) {
    return view ('GuiSupervisor');
  }
  elseif ($Output1['id'] == $idOfObserver) {
    return view ('GuiObserver');
  }
  else {
    return view ('hadiyah');
    echo "EROR: the id is not matching, there is No session here!";
  }
    //
}}
