<?php

namespace App\Http\Middleware;

use Closure;

class superAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->role != 'superAdmin'){
            return redirect('errors.404');
        }
        return $next($request);    
    }

}
