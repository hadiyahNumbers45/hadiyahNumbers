<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App/Superviser;
use App/Observer;
use App/Admin;


class itController extends Controller
{
  public function signup(Request $request)
  {

      if($request->jobName=="observer"){
        $observer=new Observer;

          $observer->f_name=$request->f_name;
          $observer->s_name=$request->s_name;
          $observer->l_name=$request->l_name;
          $observer->email=$request->email;
          $observer->location=$request->location;
          $observer->password=$request->Password;
          $observer->save();

      }elseif($request->jobName=="supervisor"){
          $Superviser=new Superviser;

          $Superviser->f_name=$request->f_name;
          $Superviser->s_name=$request->s_name;
          $Superviser->l_name=$request->l_name;
          $Superviser->email=$request->email;
          $Superviser->password=$request->Password;
          $Superviser->save():

        }elseif($request->jobName=="admin"){
            $Admin=new Admin;

            $Admin->f_name=$request->f_name;
            $Admin->s_name=$request->s_name;
            $Admin->l_name=$request->l_name;
            $Admin->email=$request->email;
            $Admin->password=$request->Password;
            $Admin->save();

        }else{
          اظهر له مسج لازم تختار وظيفة
        }




      return back();

  }
}
?>
