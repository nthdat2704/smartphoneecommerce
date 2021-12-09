<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = [
        "password",
        "hoTen",
        "sdt",
        "email",
     
    ];

    public function getListItems($params,$options) {
        $result = null;
        if($options['task'] == "admin-list-items") {
            $result = UsersModel::all();
            
        }
        if($options['task'] == "frontend-list-items") {
            $result = UsersModel::all();
        }
      
        return $result;

    }
    public function getItem($params,$options) {
        $result = null;
        if($options['task'] == "admin-detail-items") {
            $result = UsersModel::where('idUser',$params) ->first();
        }
        if($options['task'] == "client-detail-items") {
            $result = UsersModel::where('email',$params) ->first();
        }
     
        return $result;

    }
    public function insertItem($params,$options) {
        $result = false;
        if($options['task'] == "admin-list-items") {
            UsersModel::create($params->all());
        }
        if($options['task'] == "client-list-items") {
            UsersModel::create($params);
        }
      
    
        return $result;
    }

    public function updateItem($id,$params,$options) {
        $result = false;
        if($options['task'] == "admin-update-items") {
            UsersModel::where('idUser',$id )
            ->update(
                ["role" => $params -> input("role"),
                "kickHoat" => $params -> input("kickHoat"),
                ]
            );
        }
        if($options['task'] == "client-update-items") {
            $result = UsersModel::where('idUser',$params -> input("idUser"))
            ->update(
                ["password" => bcrypt($params -> input("password")),
                "hoTen" => $params -> input("hoTen"),
                "sdt" => $params -> input("sdt"),
                ]
            );
        }
        return $result;
    }
}
