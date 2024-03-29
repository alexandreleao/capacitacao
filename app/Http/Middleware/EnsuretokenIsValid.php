<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class EnsuretokenIsValid
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
        if($request->input('token')!== 'secret'){
            return redirect('home');
        }


        return $next($request);
    }
}
