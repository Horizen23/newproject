<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
Use App\Models\Login;
class Checklogin 
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
        $var = $request->input('username');
  
        $usedb =   Login::where('username',$var)->first();
        if($usedb){
            if($usedb['password']== $request->input('password')){
                session(
                    ['user' => [
                        'id'=>$usedb['id'],
                        'username'=>$usedb['username'],
                        'roles'=>$usedb['roles']
                        ]
                    ]
                );
                return  redirect('/');
            }
            else{
                return  redirect('login');
            }
        }
        else{
            return  redirect('login');
        }
      

      
    }
}
