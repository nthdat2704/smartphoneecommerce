<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\CategoriesModel as CategoriesModel;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $categoriesModel;
    function __construct() {
        $this->itemcategories = $this -> categoriesModel -> getListItems(null,['task' => 'frontend-list-items']);
        View::share('categoriesItems',  $this->itemcategories);
    }



}
