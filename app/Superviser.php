<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superviser extends Model
{
    //
    public $incrementing=false;
    protected $fillable={'id','fName','sName','lName','email'};
    protected $hidden = ['password'];

    public function program(){
      return $this ->hasOne('App\Program');
    }
    public function admin(){
      return $this ->hasOne('App\Admin');
    }

}
