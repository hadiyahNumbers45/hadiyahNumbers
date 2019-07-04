<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observer extends Model
{
    //
    public $incrementing=false;
    protected $fillable={'id','fName','sName','lName','email','location'};
    protected $hidden = ['password'];

    public function program(){
      return $this ->belongsTo('App\Program');
    }
    public function superviser(){
      return $this ->hasOne('App\Superviser');
    }

    public function service(){
      return $this ->hasMany('App\Service');
    }
    public function service(){
      return $this ->belongsToMany('App\Service');
    }

}
