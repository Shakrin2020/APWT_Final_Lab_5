<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

        public function handle(Request $request, Closure $next)
        {
            if ( $request-> session()->get('user') )
            {
                return $next($request);
            }
    
            return redirect()->route('login');
       }
}
