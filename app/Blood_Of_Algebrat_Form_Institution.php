<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood_Of_Algebrat_Form_Institution extends Model
{
    //

    protected $fillable={'form_id','institution_id','number_of_carcasses','type','name_of_delegate'};
    protected  $primarykey=['form_id','institution_id'];
      public $incrementing=false;


}
