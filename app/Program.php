<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    protected $fillable==['name','description'];
    $timestam=false;

    public function superviser(){
      return $this ->hasOne('App\Superviser');
    }
    public function observer(){
      return $this ->hasMany('App\Observer');
    }

    public function service(){
      return $this ->hasMany('App\Service');
    }
    public function form(){
      return $this ->hasMany('App\Form');
    }

}
