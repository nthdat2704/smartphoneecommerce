<?php

namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\ProductsModel as MainModel;
class ProductController extends Controller
{
    private $pathViewController = 'client.pages.';
    private $controllerName = 'product';

    
    function __construct() {
        View::share('controllerName',  $this->controllerName);
        $this -> mainModel = new MainModel();
    }

    function detail($params) {
        $item = $this-> mainModel -> getItem($params,['task' => 'frontend-detail-items']);
        return view($this -> pathViewController.'detail',
        ['item' => $item]
        
    );
    }
    function category($params) {
        $item = $this-> mainModel -> getListItems($params,['task' => 'frontend-list-items-by-id']);
        return view($this -> pathViewController.'category',
        ['item' => $item,
        ]
  
    
    );
    }
}
