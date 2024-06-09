<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSession
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
        if (! $request->session()->has('action_completed')) {
            return redirect()->route('standby')->with('message', 'Anda harus login dulu untuk mengaksesnya!!!');
        }

        return $next($request);
    }
}
