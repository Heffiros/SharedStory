<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class isAdmin
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
        if ($request->user()->role == 2)
            return $next($request);
        else {
            throw new \Exception(trans('error.admin'));
        }
    }
}
