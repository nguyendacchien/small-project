<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
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
        if (!session()->has('userLogin')){
            toastr()->Error('Vui lòng đăng nhập!','ERROR');
            return redirect()->route('admin.formlogin');
        }
        return $next($request);
    }
}
