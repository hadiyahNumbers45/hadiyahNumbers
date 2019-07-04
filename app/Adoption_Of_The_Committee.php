<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adoption_Of_The_Committee extends Model
{
    //
<<<<<<< HEAD
=======
    protected $fillable={'form_id','name','observation'};
    public $incrementing=false;
    protected  $primarykey='form_id';

    public function blood_of_algebrat_form(){
      return $this ->hasOne('App\Blood_Of_Algebrat_Form');
    }
>>>>>>> 5aa4a72d31e12bc9ac43d605046d9c9ab5ec9639
}
