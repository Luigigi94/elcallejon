<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        if (!auth()->check()){
            return redirect('/login');
        }
        if ((auth()->user()->admin) == 2){
            return redirect('http://localhost:8000/products/2');
        }
        return $next($request);

    }
}
