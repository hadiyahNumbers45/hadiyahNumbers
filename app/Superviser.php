<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superviser extends Model
{
    //
    public $incrementing=false;
    protected $fillable=['id','f_name','s_name','l_name','email'];
    protected $hidden = ['password'];
    $timestam=false;

    public function program(){
      return $this ->hasOne('App\Program');
    }
    public function admin(){
      return $this ->hasOne('App\Admin');
    }

}
