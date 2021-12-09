<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartsModel extends Model
{
    protected $table = 'carts';
    public $timestamps = false;
    protected $fillable = [
        "idUser",
        "idSP",
        "idBill",
        "soLuong",
        "tongtien",
        "img",
        "name",
        "price",
    ];

    public function getItem($params,$options) {
        $result = null;
        if($options['task'] == "admin-get-items") {
            $result = CartsModel::where('idBill',$params) ->get();
        }
        if($options['task'] == "client-get-items") {
            $result = CartsModel::where('idBill',$params) ->get();
        }
        return $result;


    }
    
    public function insertItem($params,$options) {
        $result = false;
        if($options['task'] == "client-list-items") {
            CartsModel::create($params);
        }
        return $result;
    }
    public function getListItems($params,$options) {
      
        if($options['task'] == "frontend-list-order-items") {
            $result = CartsModel::all();
        }
        return $result;

    }



}
