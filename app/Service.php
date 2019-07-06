<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable=['name','description'];
    $timestam=false;

    public function program(){
      return $this ->belongsTO('App\Program');
    }
    public function observer(){
      return $this ->belongsToMany('App\Observer');
    }


}
