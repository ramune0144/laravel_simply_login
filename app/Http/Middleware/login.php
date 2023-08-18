<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->has('user_data')) {
            return $next($request);
        } else {
            session()->invalidate();
            session()->regenerateToken();
            // dd(__('auth.failed'));
            return redirect()->back()->with('message', __('auth.failed'));
        }
    }
}
