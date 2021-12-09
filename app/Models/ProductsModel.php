<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = [
        "tenSP",
        "gia",
        "idLoai",
        "hinhanh",
        "moTa",
        "anHien",
    ];

    public function getListItems($params,$options) {
        $result = null;
        if($options['task'] == "admin-list-items") {
            $result = ProductsModel::all();
        }
        if($options['task'] == "frontend-list-items") {
            
            $result = ProductsModel::all();

        }
        if($options['task'] == "frontend-list-items-by-id") {
            $result = ProductsModel::where('idLoai',$params) ->get();
        }
        return $result;

    }
    public function getItem($params,$options) {
        $result = null;
        if($options['task'] == "admin-detail-items") {
            $result = ProductsModel::where('idSP',$params) ->first();
        }
        if($options['task'] == "frontend-detail-items") {
            
            $result = ProductsModel::where('idSP',$params)->first();

        }
        return $result;

    }
    public function insertItem($params,$options) {
        $result = false;
        if($options['task'] == "admin-list-items") {
            ProductsModel::create($params->all());
        }
      
    
        return $result;
    }
    public function updateItem($id,$params,$options) {
        $result = false;
        if($options['task'] == "admin-update-items") {

            // dd($params -> all());
            ProductsModel::where('idSP',$id )
            ->update($params -> all());
        }
        return $result;
    }
    public function deleteItem($params,$options) {
        $result = false;
        if($options['task'] == "admin-delete-item") {
            ProductsModel::where('idSP',$params )
            ->delete();
        }
        return $result;
    }
    
}
