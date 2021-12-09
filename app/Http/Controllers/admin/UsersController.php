<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\UsersModel as MainModel;

class UsersController extends Controller
{
    private $pathViewController = 'admin.pages.users.';
    private $controllerName = 'users';
    function __construct() {
        View::share('controllerName',  $this->controllerName);
        $this -> mainModel = new MainModel();
    }

    function index() {
        $items = $this -> mainModel-> getListItems(null,['task' => 'admin-list-items']);
        return view($this -> pathViewController.'index',
        ['items' => $items,]
    
    );
    }

    function edit($params) {
        $item = $this -> mainModel -> getItem($params,['task' => 'admin-detail-items']);
        return view($this -> pathViewController.'edit',
        ['item' => $item,]
    );
    }

    function update(Request $request,$id) {
        $request->except($request->input('_token'));
        $this -> mainModel -> updateItem($id,$request,['task' => 'admin-update-items']);
        return  redirect('/admin/users') -> with('success','Cập nhật thành công');
    
    }

  
}
