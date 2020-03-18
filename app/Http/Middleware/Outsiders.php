<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Outsiders
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

      if (Auth::user()->role_id == 0) {
        return redirect(route('outsider.index'));
      }

        return $next($request);
    }
}
