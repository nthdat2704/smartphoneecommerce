<?php

namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\UsersModel as MainModel;
use App\Models\OrdersModel as OrdersModel;
use App\Http\Requests\client\auth\checkRegisterRequest;
use App\Http\Requests\client\auth\checkLoginRequest;
use App\Http\Requests\client\auth\checkUpdateRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    private $pathViewController = 'client.pages.';
    private $controllerName = 'user';

    function __construct() {
        View::share('controllerName',  $this->controllerName);
        $this -> mainModel = new MainModel();
    }

    function login(checkLoginRequest $request) {
        $arr = [
            'email' => $request-> input('singin-email'),
            'password' => $request-> input('singin-password'),
        ];
        if (Auth::attempt($arr)) {
            if(Auth::user()-> kickHoat == 1) {
                $request->session()->put('infouser', Auth::user());
                return redirect('/');

            }
            else {
            return redirect('/') ->withErrors('Tài khoản của bạn đã bị vô hiệu hóa');
                
            }
        }
        else {
            return redirect('/') ->withErrors('Tên đăng nhập và mật khẩu không đúng');
        }


  
    }
    function register(checkRegisterRequest $request) {
        $result = $this-> mainModel -> getItem($request->input('register-email'), ['task' => "client-detail-items"]);

        if($result) {
            return redirect('/') ->withErrors('Tài khoản đã tồn tại');
        }
        else {

            $data = [
                "password" => bcrypt($request->input('register-password')),
                "hoTen" => $request->input('register-name'),
                "sdt" => $request->input('register-numberphone'),
                "email" => $request->input('register-email'),
            ];
              $this-> mainModel -> insertItem($data, ['task' => "client-list-items"]);
              return  redirect('/') -> with('success','Đăng ký thành công');


        }

    }
    function profile() {
        $orderModel = new OrdersModel();
        $listOrders = $orderModel -> getListItems(session()->get('infouser') -> idUser,['task' => 'frontend-list-order-items']);
        return view(
            $this -> pathViewController.'profile',
            ["listorders" => $listOrders]
        );
    }

    function update(checkUpdateRequest $request) {
       $result =  $this-> mainModel -> updateItem(null,$request, ['task' => "client-update-items"]);
       $info = $this-> mainModel -> getItem($request->input('email'), ['task' => "client-detail-items"]);
       $request->session()->put('infouser', $info);
       return  redirect() ->back() -> with('success','Cập nhật thành công');

    }
 
    function logout(Request $request) {
        $request->session()->forget('infouser');
        return redirect('/');

    }
}
