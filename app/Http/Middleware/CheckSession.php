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
        // $request->session()->flush();
        // dd($request->session()->all());

        if (! $request->session()->has('action_completed')) {
            $request->session()->put('action_completed', false);
        }

        // Check if action_completed is false, then redirect to standby page
        if (! $request->session()->get('action_completed')) {
            return redirect()->route('standby')->with('message', 'Anda harus login dulu untuk mengaksesnya!!!');
        }

        return $next($request);
    }
}
