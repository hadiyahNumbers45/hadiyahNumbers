<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


/*delegation 8/7/2019*/
    function insert (Request $req){

/*المتغيرات*/
$name = $req->input('name');
$name = $req->input('name');
$name = $req->input('name');
$name = $req->input('name');
$name = $req->input('name');
$name = $req->input('name');
$name = $req->input('name');
$name = $req->input('name');
$name = $req->input('name');
$name = $req->input('name');
$name = $req->input('name');
$name = $req->input('name');
$name = $req->input('name');
$name = $req->input('name');
$name = $req->input('name');

/*array to save varible to save it*/
      $data = $arraydelegation = array('textfilde' =>$name ,'textfilde' =>$name ,'textfilde' =>$name ,'textfilde' =>$name ,'textfilde' =>$name ,
    'textfilde' =>$name ,'textfilde' =>$name ,'textfilde' =>$name ,'textfilde' =>$name ,'textfilde' =>$name ,
  'textfilde' =>$name ,'textfilde' =>$name ,'textfilde' =>$name ,'textfilde' =>$name ,'textfilde' =>$name );

/*pass it to DB*/
  DB::('delegation')->insert($data);

  echo "DONE!!";
    }
}
