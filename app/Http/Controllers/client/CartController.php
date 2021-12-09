<?php

namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Arr;
use Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests\client\orders\CheckoutRequest;
use Mail;

use App\Models\OrdersModel as MainModel;
use App\Models\CartsModel as CartsModel;
class CartController extends Controller
{
    private $pathViewController = 'client.pages.';
    private $controllerName = 'cart';
    
    function __construct() {
        View::share('controllerName',  $this->controllerName);
        $this -> cartsModel = new CartsModel();


    }

    function cart() {

       return view($this -> pathViewController.'cart');
    }
    function add($id,Request $request) {
        $qty = (int) $request -> input('soLuong');
        $productId = (int) $id;
        $tenSP = $request -> input('tenSP');
        $gia = $request -> input('gia');
        $hinhanh = [$request -> input('hinhanh')];
        Cart::add($productId, $tenSP, $qty, $gia,1,$hinhanh);

        return  redirect('/cart') -> with('success','Thêm thành công');

    }
  
    function remove($id) {
        Cart::remove($id);
        return  redirect() -> back() -> with('success','Xóa thành công');
    }
    function update(Request $request) {
        foreach ($request -> all() as $key => $value) {
            Cart::update($key,$value);
        
        }
        return  redirect() -> back() -> with('success','Cập nhật số lượng thành công');

    }
//idUser billName diachi ngayDatHang  email billTel pttt 
    function checkout(Request $request) {
        return view($this -> pathViewController.'checkout');

    }
    function checkoutprocess(CheckoutRequest $request) {
        if(session()->get('infouser') != null) {
            if(Cart::count()) {
                $mainModel = new MainModel();
                $dataBill = [
                    "idUser" => session()->get('infouser') ->idUser, // chua co ty sua lai cho nay
                    "billName" => $request -> input('billName'),
                    "diachi" => $request -> input('diachi'),
                    "tongTien" => explode(".",str_replace(',','',Cart::total()) )[0],
                    "email" => $request -> input('email'),
                    "billTel" => $request -> input('billTel'),
                    "pttt" => $request -> input('pttt'),
                ];
                $billreturn = $mainModel -> insertItem($dataBill,['task' => 'client-list-items']);
                foreach (Cart::content() as $item) {
                    $data = [
                        "idUser" => session()->get('infouser') ->idUser,
                        "idSP" => $item -> id,
                        "idBill" => $billreturn['id'],
                        "soLuong" => $item -> qty,
                        "tongtien" => $item -> qty * $item -> price,
                        "img" => $item -> options[0],
                        "name" => $item -> name,
                        "price" => $item -> price,
                    ];
                 $this -> cartsModel -> insertItem($data,['task' => 'client-list-items']);
        
                }
                $request->session()->forget('cart');
                $request->session()->put('email',$billreturn);
                return  redirect('/bill/'.$billreturn['id']) -> with('success','đặt hàng thành công');
            }
            else {
                return  redirect() -> back() -> withErrors('Giỏ hàng của bạn đang trống hãy chọn cho mình 1 sản phảm');
                
            }

        }
        else {
            return  redirect() -> back() -> withErrors('đăng nhập để mua hàng');

        }


    
      

      
        
    }
 

    function billprocess($id,Request $request) {
        

        $bill = $this -> cartsModel -> getItem($id,['task' => 'client-get-items']);


        $to_name = "Đơn hàng mới";
        $to_email = $request->session()->get('email')->email;//send to this email

        $data = array("data"=>$bill); //body of mail.blade.php
    
        Mail::send('client.sendmail',$data,function($message) use ($to_name,$to_email){
            $message->to($to_email)->subject('Đơn hàng mới');//send this mail with subject
            $message->from($to_email,$to_name);//send from this mail
        });



    
        return view($this -> pathViewController.'bill',
        ['bill' => $bill,
        'total' => 0
        
        ]
    
    );

    }

   
}
