<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\CategoriesModel as CategoriesModel;
use Gloudemans\Shoppingcart\Facades\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categoriesModel = new CategoriesModel();
        $itemcategories = $categoriesModel -> getListItems(null,['task' => 'frontend-list-items']);
        $listItemCategories = $categoriesModel -> getListItems(null,['task' => 'admin-list-items']);
        ;
        View::share('categoriesItems', $itemcategories);
        View::share('categoriesListItems', $listItemCategories);

    }
}
