<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soul_Food_Form extends Model
{
    //
    protected $fillable=['date','day','evaluation','nu_service_providers','number_of_deneficiaries','observe_id','service_id','observation','location_id'];
    protected  $primarykey='form_id';
    public $timestamps=false;

    public function observe(){
      return $this ->hasOne('App\Observer');
    }

    public function service(){
      return $this ->hasOne('App\Service');
    }

    public function material(){
      return $this ->belongsToMany('App\Material');
    }
}
