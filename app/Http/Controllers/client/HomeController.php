<?php

namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\ProductsModel as MainModel;
use Session;
use Gloudemans\Shoppingcart\Facades\Cart;
class HomeController extends Controller
{
    private $pathViewController = 'client.pages.';
    private $controllerName = 'home';
    
    function __construct() {
        View::share('controllerName',  $this->controllerName);
   

    }

    function index() {
        // dd(session()->get('infouser'));
        $mainModel = new MainModel();
        $items = $mainModel -> getListItems(null,['task' => 'frontend-list-items']);
        return view(
            $this -> pathViewController.'index',
            [
                'productItems' => $items,
            ]
        
        );
    }
}
