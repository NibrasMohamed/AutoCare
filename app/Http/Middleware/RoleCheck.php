<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleCheck
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
        if (Auth::check()) {
            if (auth()->user()->hasRole('customer')) {
                return redirect('/make-appointment');
            }else if(auth()->user()->hasRole('manager') || auth()->user()->hasRole('admin')){
                return $next($request);
            }else if(auth()->user()->hasRole('employee')){
                return redirect('/appointments/index');
            }
        }else{
            return redirect('/customer-login');
        }
        return $next($request);
    }
}
