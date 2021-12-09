<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests\admin\product\CreateRequest;
use App\Http\Requests\admin\product\UpdateRequest;


use App\Models\ProductsModel as MainModel; 
use App\Models\CategoriesModel as CategoriesModel; 

class ProductsController extends Controller
{
    private $pathViewController = 'admin.pages.products.';
    private $controllerName = 'products';
    function __construct() {
        View::share('controllerName',  $this->controllerName);
        $this -> mainModel = new MainModel();
        $this-> categoriesModel = new CategoriesModel();
    }

    function index() {
        $items = $this-> mainModel -> getListItems(null,['task' => 'admin-list-items']);
        return view($this -> pathViewController.'index',
        ['items' => $items,]
    
    );
    }
    function add() {
        return view($this -> pathViewController.'add',
    );
    }
    function create(CreateRequest $request) {
        $this -> mainModel -> insertItem($request,['task' => 'admin-list-items']);
        return redirect('/admin/products')  -> with('success','Thêm sản phẩm thành công');
    }
    function edit($params) {
        $item = $this -> mainModel -> getItem($params,['task' => 'admin-detail-items']);
        return view($this -> pathViewController.'edit',
        ['item' => $item,]
    );
    }
    function update(UpdateRequest $request,$id) {
        $request->except($request->input('_token'));
        $this -> mainModel -> updateItem($id,$request,['task' => 'admin-update-items']);
        return  redirect('/admin/products') -> with('success','Cập nhật sản phẩm thành công');
    
    }
    function delete($id) {
        $this -> mainModel -> deleteItem($id,['task' => 'admin-delete-item']);
        return redirect() -> back() -> with('success','Đã xóa thành công');

    }
  
}
