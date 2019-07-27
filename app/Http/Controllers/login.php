<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class login extends Controller
{
    public function signinusers(Request $req)
    {
      determineLogIn($req);
      $req->userpass=md5($req->userpass);
      $msg;
      $user_id = IT::where('id','LIKE',$req->userid)->get();
      $password_id = IT::where('password','LIKE',$req->userpass)->get();
      //echo $req->userpass;
          if(count($user_id) > 0 && count($password_id) > 0){

              return view('GUIit')->with(compact($user_id));

          }elseif(  substr ( $req->userid ,0,2 ) == 11 ){

                  $user_id = Admin::where('id','LIKE',$req->userid)->get();
                  $password_id = Admin::where('password','LIKE',$req->userpass)->get();
                  if(count($user_id) > 0 && count($password_id) > 0){
                      return view('GUIAdmin')->with(compact($user_id));

                  }else {
                    $msg='Not found. Try to signin again !';
                    return back()->with(compact('msg'));
                  }

          }elseif(  substr ( $req->userid ,0,2 ) == 12 ){
                    $user_id = Superviser::where('id','LIKE','%'.$req->userid.'%')->get();
                    $password_id = Superviser::where('password','LIKE','%'.$req->userpass.'%')->get();
                    if(count($user_id) > 0 && count($password_id) > 0){
                        return view('GUISupervisor')->with(compact($user_id));

                    }else {
                      $msg='Not found. Try to signin again !';
                        return back()->with(compact('msg'));
                    }


          }elseif(  substr ( $req-> userid ,0,2 ) == 13 ){
                    //$user_id = Observer::where('id','LIKE','%'.$req->userid.'%')->get();
                    //$password_id = Observer::where('password','LIKE','%'.$req->userpass.'%')->get();

                    $user=Observer::find($req->userid);


                    if($user->id==$req->userid && $user->password==$req->userpass){
                        return view('GUIObserver')->with(compact('user_id'));

                    }else {
                      $msg='Not found. Try to signin again !';
                        return "dfgsdfgdfgddhh";
                    }
          }else{
              $msg='account not  found. Try to signin again !';
              return back()->with(compact('msg'));
          }

      echo "does not work";
  }

public function index()
{
  return view ('login');
}

}
