<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash; // <-- import it at the top

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Session;
class HomeController extends Controller
{
    private $pathViewController = 'admin.pages.';
    private $controllerName = 'home';

    function __construct() {
        View::share('controllerName',  $this->controllerName);

    }

    function index(Request $request) {

        return view($this -> pathViewController.'index');

    }

   
    }

