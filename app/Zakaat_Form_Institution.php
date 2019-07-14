<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zakaat_Form_Institution extends Model
{
    //
    protected $fillable=['form_id','institution_id','count','recipient'];
    protected  $primarykey=['form_id','institution_id'];
      public $incrementing=false;
      public $timestamps=false;
}
