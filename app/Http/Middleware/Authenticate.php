<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
    protected function determineLogIn($id)
    {
      if ($id==11) {
        // code...
      }
      elseif ($id==12) {
        // code...
      }
      elseif ($id==13){
        // code...
      }
      else {
        // code...
      }
    }
}
