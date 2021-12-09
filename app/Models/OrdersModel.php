<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersModel extends Model
{
    protected $table = 'bills';
    public $timestamps = false;
    protected $fillable = [
        "idUser",
        "billName",
        "diachi",
        "ngayDatHang",
        "tongTien",
        "email",
        "billTel",
        "pttt",
    ];

    public function getListItems($params,$options) {
        $result = null;
        if($options['task'] == "admin-list-items") {
            $result = OrdersModel::all();
        }
        if($options['task'] == "client-list-items") {
            
            $result = OrdersModel::all();

        }
        if($options['task'] == "frontend-list-order-items") {
            $result = OrdersModel::where('idUser',$params) -> get();
        }
        return $result;

    }
    public function getItem($params,$options) {
        $result = null;
        if($options['task'] == "admin-get-items") {
            $result = OrdersModel::where('idBill',$params) ->first();
        }
        return $result;


    }

    public function updateItem($id,$params,$options) {
        $result = false;
        if($options['task'] == "admin-update-items") {
            OrdersModel::where('idBill',$id )
            ->update(["billstatus" => $params -> input("billstatus")]);
        }
        return $result;
    }

    public function insertItem($params,$options) {
        $result = false;
        if($options['task'] == "client-list-items") {
            $result = OrdersModel::create($params);
        }
        return $result;
    }
}
