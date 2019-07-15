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
       ->orWhere('location_id','LIKE','%'.$id.'%')
       ->get();
       if(count($observers) > 0)
           return view('/GUIObserverInfo',compact('observers'))->withDetails($observers)->withQuery ( $id );
       else return view ('/GUIObserverInfo')->withMessage('No Details found. Try to search again !');
   }


   public function show($id) {
 $observers = DB::select('select * from observers  where id =?',[$id]);
 return view('GUIObserverInfo',['observers'=>$observers]);
 }

      public function edit(Request $request,$id){
         //$id = Input::get ( 'id' );
           $observers = Observer::find($id);
           //dd($id);

        $service_id = $request->input('service_id');
        $location_id = $request->input('location_id');
        //$data=array('service_id'=>$service_id,"location"=>$location);
      //  DB::table('observers')->update($data);
      //  DB::table('observers')->whereIn('id', $id);
        DB::update('update observers set service_id=?,location_id=? where id=?',[$service_id,$location_id,$id]);
        echo "Record updated successfully.
        ";
        echo 'Click Here to go back.';
         }


}
