<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soul_Food_Forms_Material extends Model
{
    //
    protected $fillable={'form_id','material_id','count'};
    protected  $primarykey=['form_id','material_id'];
      public $incrementing=false;
}
