<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observer extends Model
{
    //
    public $incrementing=false;
    protected $fillable=['id','f_name','s_name','l_name','email','location','program_id'];
    protected $hidden = ['password'];
    $timestam=false;

    public function program(){
      return $this ->belongsTo('App\Program');
    }
    public function superviser(){
      return $this ->hasOne('App\Superviser');
    }

    public function service(){
      return $this ->hasMany('App\Service');
    }
    public function atonement_and_zakaat_form(){
      return $this ->belongsToMany('App\Atonement_And_Zakaat_Form');
    }
    public function body_food_form(){
      return $this ->belongsToMany('App\Body_Food_Form');
    }

    public function care_form (){
      return $this ->belongsToMany('App\Care_Form ');
    }
    public function hospitable_form (){
      return $this ->belongsToMany('App\Hospitable_Form ');
    }
    public function reception_Of_delegations_form (){
      return $this ->belongsToMany('App\Reception_Of_Delegations_Form ');
    }
    public function soul_food_form(){
      return $this ->belongsToMany('App\Soul_Food_Form');
    }

    public function atonement_and_zakaat_form(){
      return $this ->belongsToMany('App\Atonement_And_Zakaat_Form');
    }
    public function blood_of_algebrat_form(){
      return $this ->belongsToMany('App\Blood_Of_Algebrat_Form');
    }

}
