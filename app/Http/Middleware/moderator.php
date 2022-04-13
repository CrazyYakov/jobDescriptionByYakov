<?php

namespace App\Http\Middleware;

use App\Role;
use Closure;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
class Moderator
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
        if(in_array(Auth::user()->role_id, [Role::MODERATOR, Role::ADMIN, Role::SUPER_ADMIN])) {
            return $next($request);
        }
        
        return redirect('errors.404');   
    }
}
