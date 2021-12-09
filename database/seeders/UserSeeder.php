<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash; // <-- import it at the top
use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'userName' => "admin",
            'password' => Hash::make("123456"),
            'hoTen' => "bacsdsa",
            'sdt' => "432432432",
            'email' => "admin@gmail.com",
            'role' => 1,
            'kickHoat' => 1,
        ];
        DB::table('users') -> insert($data);
    }
}
