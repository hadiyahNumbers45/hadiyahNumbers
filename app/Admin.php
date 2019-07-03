<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    public $incrementing=false;
    protected $fillable={'id','fName','sName','lName','email'};
    protected $hidden = ['password'];
}
