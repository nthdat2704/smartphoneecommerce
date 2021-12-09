<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    protected $table = 'categories';
    public $timestamps = false;
    protected $fillable = [
        "tenLoai",
        "image",
        "anHien",
      
    ];

    public function getListItems($params,$options) {
        $result = null;
        if($options['task'] == "admin-list-items") {
            $result = CategoriesModel::all();
            
        }
        if($options['task'] == "frontend-list-items") {
            
            $result = CategoriesModel::all();

        }
        return $result;

    }
    public function getItem($params,$options) {
        $result = null;
        if($options['task'] == "admin-get-items") {
            $result = CategoriesModel::where('idLoai',$params) ->first();
        }
        return $result;

    }
    public function insertItem($params,$options) {
        $result = false;
        if($options['task'] == "admin-list-items") {
            CategoriesModel::create($params->all());
        }
    
        return $result;
    }


    public function updateItem($id,$params,$options) {
        $result = false;
        if($options['task'] == "admin-update-items") {

            // dd($params -> all());
            CategoriesModel::where('idLoai',$id )
            ->update($params -> all());
        }
        return $result;
    }
    public function deleteItem($params,$options) {
        $result = false;
        if($options['task'] == "admin-delete-item") {
            CategoriesModel::where('idLoai',$params )
            ->delete();
        }
        return $result;
    }

}
