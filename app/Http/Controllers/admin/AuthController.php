<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\admin\auth\checkLoginRequest;



class AuthController extends Controller
{
    private $pathViewController = 'admin.pages.';
    function __construct() {
    }

  
    function login() {
        return view($this -> pathViewController.'login');
    }
    function checklogin(checkLoginRequest $request) {
        $arr = [
            'email' => $request-> input('email'),
            'password' => $request-> input('password'),
        ];
        if (Auth::attempt($arr)) {
            $request->session()->put('info', Auth::user());
            return redirect() ->route('index');
        }
        else {
            return redirect() -> route('login') ->withErrors('Tên đăng nhập và mật khẩu không đúng');
        }
    }
    function logout(Request $request) {
        $request->session()->forget('info');
        return redirect() -> route('login');

    }
  
}
