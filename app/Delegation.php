<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delegation extends Model
{
    //

  protected $fillable={'nationality','address_in_mecca','address_in_madinah','arrival_time','date_of_arrival','date_of_Visit','visit_time','coordinator ','contact_number','number_of_women','number_of_children','number_of_men'};
    public function reception_of_delegations_form(){
      return $this ->hasOne('App\Reception_Of_Delegations_Form');
    }
    public function reception_of_delegations_form(){
      return $this ->hasOne('App\Reception_Of_Delegations_Form');
    }


}
