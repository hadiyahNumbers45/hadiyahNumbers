<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observer_Service extends Model
{
    //
    protected $primaryKey = ['observer_id', 'services_id'];
    public $incrementing = false;
    $timestam=false;
}
