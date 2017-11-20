<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\Business\UserModel;
use App\Http\Models\UsersCModel;
use App\User;

class SinhVien
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( $request, Closure $next)
    {
        //dd($request->id);
        if (!User::check_user_sinhvien($request->id)) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('sinh-vien');
            }
        }
        return $next($request);
    }
}
