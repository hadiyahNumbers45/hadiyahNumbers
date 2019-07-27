<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\input;

use Illuminate\Http\Request;
use App\Observer ;
use App\location ;
use App\service ;
use App\ Superviser;
use DB;

class GUIObserverInfoController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:superviser');
  }
  public function index(){

 //var $locations = array();
     $observers = Observer::all();


     foreach($observers as $observer1 ){
       if( $observer1->location_id!==null){
              $locationid = $observer1->location_id;
              $locations[$observer1->id] = location::where('id','=',$locationid)->first();}
       if( $observer1->service_id!==null){
             $servicename = $observer1->service_id;
             $services[$observer1->id] = service::where('id','=',$servicename)->first();
       }


    }

   return view('GUIObserverInfo',compact('observers','locations','services'));
}

 public function create(){
     return view('observers.create');
 }




 public function searchid(){


       $id = Input::get ( 'id' );
       $observers = Observer::where('id','LIKE','%'.$id.'%')
        ->orwhere('f_name','LIKE','%'.$id.'%')
        ->orwhere('service_id','LIKE','%'.$id.'%')
      //   ->orwhere('location_id','LIKE','%'.$id.'%')
       ->get();


       foreach($observers as $observer1 ){
         $locationid = $observer1->location_id;
         $servicename = $observer1->service_id;

         $services[$observer1->id] = service::where('id','=',$servicename)->first();
         $locations[$observer1->id] = location::where('id','=',$locationid)->first();
       }
       if(count($observers) > 0)
           return view('/GUIObserverInfo',compact('observers','locations','services'));
       else return view ('/GUIObserverInfo')->withMessage('No Details found. Try to search again !');


   }


   public function show(Request $request) {
   $observer =Observer::find($request->observer_id);
   if($observer->service_id!==null){
      $service=service::find($observer->service_id);
      $services=service::where('program_id','=',$service->program_id)->get();
 }
   else{
       $superviser=$observer->superviser;
       $service=null;
       $services=service::where('program_id','=',$superviser->program_id)->get(); // تعديل لازم ناخذ بيانات مشرف البرنامج
    }
    if($observer->location_id!==null){
    $location=location::find($observer->location_id);
  }
    else{
        $location=null;
       }
       $locations=location::all();

 return view('GUEdit',compact('observer','location','service','locations','services'));
 }

    public function update(Request $request){
        $observer =Observer::find($request->observer_id);
        $observer->service_id=$request->servies;
        $observer->location_id=$request->location;
        $observer->save();

        return redirect('/GUIObserverInfo')->with('success', ' تم الحفظ');

        //view('/GUIObserverInfo',compact('observer'));

    }

}
