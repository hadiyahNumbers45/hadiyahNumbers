<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\input;

use Illuminate\Http\Request;
use App\Observer ;
use DB;
class GUIObserverInfoController extends Controller
{

  public function index(){

     $observers = Observer::all();
     return view('GUIObserverInfo',compact('observers'));
 }

 public function create(){
     return view('observers.create');
 }
 public function searchid(){
    //$observers = Observer::all();
       $id = Input::get ( 'id' );
       $observers = Observer::where('id','LIKE','%'.$id.'%')
       ->orWhere('f_name','LIKE','%'.$id.'%')
       ->orWhere('service_id','LIKE','%'.$id.'%')
       ->orWhere('location','LIKE','%'.$id.'%')
       ->get();
       if(count($observers) > 0)
           return view('/GUIObserverInfo',compact('observers'))->withDetails($observers)->withQuery ( $id );
       else return view ('/GUIObserverInfo')->withMessage('No Details found. Try to search again !');
   }

/*
   public function show($id) {
 $observers = DB::select('select * from service_id AND where id =?',[$id]);
 return view('GUIObserverInfo',['observers'=>$observers]);
 }

  public function edit(Request $request, $id){
    $service_id = $request->input('service_id');
    $location = $request->input('location');

    DB::update('update observers set service_id=?,location=? where id=?',[$service_id,$location,$id]);
    echo "Record updated successfully.
    ";
    echo 'Click Here to go back.';
     }
*/
}
