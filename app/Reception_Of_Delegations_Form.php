<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reception_Of_Delegations_Form extends Model
{
    //
    protected $fillable={'delegation_id','date','day','observe_id','service_id'};
    protected  $primarykey='form_id';

    public function observe(){
      return $this ->hasOne('App\Observer');
    }

    public function service(){
      return $this ->hasOne('App\Service');
    }
    public function delegation(){
      return $this ->hasOne('App\Delegation');
    }
    public function reception_of_delegations_form(){
      return $this ->hasOne('App\Reception_Of_Delegations_Form');
    }


}
