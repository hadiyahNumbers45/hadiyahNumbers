<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    //
    protected $fillable={'Name'};


    public function fAtonementAndZakaatInstitution(){
      return $this ->belongsToMany('App\FAtonementAndZakaatInstitution_Institution');
    }

    public function fBloodOfAlgebratInstitution (){
      return $this ->belongsToMany('App\FBloodOfAlgebratInstitution_Institution' ');
    }
}
