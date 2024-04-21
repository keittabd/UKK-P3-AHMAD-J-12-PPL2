<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {

        $userdata = [
            [
                'name'=>'ahmad',
                'username'=>'keittabd',
                'email'=> 'ahmdjeongin@gmail.com',
                'password'=> bcrypt('ahmadjamaludin'),
                'password_confirmation'=> bcrypt('ahmadjamaludin')
            ],
        ];
       
        foreach($userdata as $key => $val){
            user::create($val);
        }
    }
}
