<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observer_Service extends Model
{
    //
    protected $primaryKey = ['user_id', 'stock_id'];
    public $incrementing = false;
}
