<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IT extends Model
{
    //
    public $incrementing=false;
    protected $fillable={'id','fName','sName','lName','email'};
    protected $hidden = ['password'];

    
}
