<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
{
    /**
     * Handle an incoming request.
     *  middleware中间件 之CheckToken
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->input('token') != 'laravelvalet.test'){
            return redirect()->to('https://laravelvalet.test');
        }
        return $next($request);
    }
}
