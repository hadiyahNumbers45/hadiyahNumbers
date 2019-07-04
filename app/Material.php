<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
      protected $fillable={'Name'};


      public function fBodyFood(){
        return $this ->belongsToMany('App\FBodyFood');
      }

      public function fSoulFood (){
        return $this ->belongsToMany('App\FSoulFood ');
      }
      public function fCare (){
        return $this ->belongsToMany('App\FCare ');
      }
      public function fHospitable(){
        return $this ->belongsToMany('App\FHospitable');
      }
      
}
