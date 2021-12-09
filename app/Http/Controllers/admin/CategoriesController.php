<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\CategoriesModel as MainModel;

use App\Http\Requests\admin\categories\UpdateRequest;
use App\Http\Requests\admin\categories\CreateRequest;


class CategoriesController extends Controller
{
    private $pathViewController = 'admin.pages.categories.';
    private $controllerName = 'categories';
    function __construct() {
        View::share('controllerName',  $this->controllerName);
        $this -> mainModel = new MainModel();
    }

    function index() {
        $items = $this-> mainModel -> getListItems(null,['task' => 'admin-list-items']);
        return view($this -> pathViewController.'index',
        ['items' => $items,]
    );
    }
    function add() {
        return view($this -> pathViewController.'add');
    }
    function create(CreateRequest $request) {
        $this -> mainModel -> insertItem($request,['task' => 'admin-list-items']);
        return redirect('/admin/categories')  -> with('success','Thêm danh mục thành công');
    }
    function edit($id) {
        $item = $this -> mainModel -> getItem($id,['task' => 'admin-get-items']);
        return view($this -> pathViewController.'edit',
        ['item' => $item]
    );
    }
    function update(UpdateRequest $request,$id) {
        $this -> mainModel -> updateItem($id,$request,['task' => 'admin-update-items']);
        return  redirect('/admin/categories') -> with('success','Cập nhật danh mục thành công');
    
    }
    function delete($id) {
        $this -> mainModel -> deleteItem($id,['task' => 'admin-delete-item']);
        return redirect() -> back() -> with('success','Đã xóa thành công');

    }
  
}
