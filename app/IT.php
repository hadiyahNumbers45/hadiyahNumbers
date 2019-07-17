<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IT extends Model
{
    //
    public $incrementing=false;
   public $timestamps=false;
    protected $fillable=['id','f_name','s_name','l_name','email'];
    protected $hidden = ['password'];


}
