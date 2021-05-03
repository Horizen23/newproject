<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
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
        $userlogin = $request->session()->get('user');
        if($userlogin){
            if($userlogin['roles']=='admin'){
                return $next($request);
            }else{
                
                return  redirect('user');
            }
        }else{
            return  redirect('login');
        } 
    }
}
