<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\OrdersModel as MainModel;
use App\Models\CartsModel as CartsModel;
class OrdersController extends Controller
{
    private $pathViewController = 'admin.pages.orders.';
    private $controllerName = 'orders';
    function __construct() {
        View::share('controllerName',  $this->controllerName);
        $this -> mainModel = new MainModel();
        $this -> cartsModel = new CartsModel();
        
    }

    function index() {
        $items = $this -> mainModel -> getListItems(null,['task' => 'admin-list-items']);
        return view($this -> pathViewController.'index',
        ['items' => $items]
    
    );
    }

    function detail($id) {
        $cartsModel = new CartsModel();
        $items = $this -> cartsModel -> getItem($id,['task' => 'admin-get-items']);

        return view($this -> pathViewController.'detail',
        ['items' => $items,
         "tong" => 0
        ]
    );
    }

    function edit($id) {
        $item = $this -> mainModel -> getItem($id,['task' => 'admin-get-items']);
        return view($this -> pathViewController.'edit',
        ['item' => $item,
        
        ]
    
    );
    }
    function update(Request $request,$id) {
        $this -> mainModel -> updateItem($id,$request,['task' => 'admin-update-items']);
        return  redirect('/admin/orders') -> with('success','Cập nhật đơn hàng thành công');
    
    }
  
}
