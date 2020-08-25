<?php

namespace App\Http\Middleware;

use Closure;

class DomainChecking
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
        if(request()->getHttpHost() === 'admin.wleong.com.my' || request()->getHttpHost() === 'www.admin.wleong.com.my') {
            return abort(404);
        }
        return $next($request);
    }
}
