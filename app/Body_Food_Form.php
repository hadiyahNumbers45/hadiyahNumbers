<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Body_Food_Form extends Model
{
    //
<<<<<<< HEAD
=======
    protected $fillable={'form_id','city','date','day','location','evaluation','nu_service_providers','number_of_deneficiaries','observe_id','service_id','observation'};
    protected  $primarykey='form_id';


    public function observe(){
      return $this ->hasOne('App\Observer');
    }

    public function service(){
      return $this ->hasOne('App\Service');
    }

    public function material(){
      return $this ->belongsToMany('App\Material');
    }

>>>>>>> 5aa4a72d31e12bc9ac43d605046d9c9ab5ec9639
}
