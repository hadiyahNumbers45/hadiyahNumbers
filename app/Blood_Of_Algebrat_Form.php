<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood_Of_Algebrat_Form extends Model
{
    //
<<<<<<< HEAD
=======
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
    public function adoption_Of_the_committee(){
      return $this ->hasMany('App\Adoption_Of_The_Committee');
    }
>>>>>>> 5aa4a72d31e12bc9ac43d605046d9c9ab5ec9639
}
