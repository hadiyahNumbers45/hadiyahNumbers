<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\input;

use Illuminate\Http\Request;
use App\Observer ;
use App\location ;
use App\service ;
use DB;

class GUIObserverInfoController extends Controller
{

  public function index(){

 //var $locations = array();
     $observers = Observer::all();
     $locations = location::all();
     $services = service::all();
     foreach($observers as $observer1 ){
       $locationid = $observer1->location_id;
       $servicename = $observer1->service_id;

  $locations[$observer1->id] = location::where('id','=',$locationid)->first();
    $services[$observer1->id] = service::where('id','=',$servicename)->first();
}

   return view('GUIObserverInfo',compact('observers','locations','services'));
}

 public function create(){
     return view('observers.create');
 }




 public function searchid(){
    $observers = Observer::all();
       $id = Input::get ( 'id' );
       foreach($observers as $observer1 ){
         $locationid = $observer1->location_id;
          $servicename = $observer1->service_id;
  $services[$observer1->id] = service::where('id','=',$servicename)->first();
         $locations[$observer1->id] = location::where('id','=',$locationid)->first();
       }
       $observers = Observer::where('id','LIKE','%'.$id.'%')
        ->orwhere('f_name','LIKE','%'.$id.'%')
        ->orwhere('service_id','LIKE','%'.$id.'%')
      //   ->orwhere('location_id','LIKE','%'.$id.'%')

       ->get();

       if(count($observers) > 0)
           return view('/GUIObserverInfo',compact('observers','locations','services'))->withDetails($observers)->withQuery ( $id );
       else return view ('/GUIObserverInfo')->withMessage('No Details found. Try to search again !');


   }


   public function show($id) {
 $observers = DB::select('select * from observers  where id =?',[$id]);
 $locations = DB::select('select * from location  where id =?',[$id]);
 return view('GUIObserverInfo',['observers'=>$observers],['location'=>$locations]);
 }

      public function edit(Request $request,$id){
         //$id = Input::get ( 'id' );
           $observers = Observer::find($id);
           //dd($id);

        //$service_id = $request->input('service_id');
        $service_id = $observers->service_id;

      //  $location_id = $request->input('location_id');
      $location_id =  $observers->location_id;
      //  dd($service_id);
        //$data=array('service_id'=>$service_id,"location"=>$location);
      //  DB::table('observers')->update($data);
      //  DB::table('observers')->whereIn('id', $id);
        DB::update('update observers set service_id=?,location_id=? where id=?',[$service_id,$location_id,$id]);

      return back();  }

}
