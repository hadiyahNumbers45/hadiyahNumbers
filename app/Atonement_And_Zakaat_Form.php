<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atonement_And_Zakaat_Form extends Model
{
    //
    protected $fillable={'form_id','count','date','day','observe_id','service_id'};
    protected  $primarykey='form_id';
  

    public function observe(){
      return $this ->hasOne('App\Observer');
    }

    public function service(){
      return $this ->hasOne('App\Service');
    }

    public function institution(){
      return $this ->belongsToMany('App\Institution');
    }
}
