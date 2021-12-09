<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminMiddleware
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
        $userInfo = $request->session()->get('info');
        if($userInfo) {
            if($userInfo -> role == 0 && $userInfo ->kickHoat == 1) {
                return $next($request);
            }
            else {
                if($userInfo -> role == 1 && $userInfo ->kickHoat == 0) {
                    return redirect() -> route('login') ->withErrors('Tài khoản đã bị vô hiệu hoá');

                }
                else {

                    return redirect() -> route('login') ->withErrors('Bạn không có quyền truy cập vào trang này');
                }

            }
        }
        else {
            return redirect() -> route('login');
        }
    }
}



