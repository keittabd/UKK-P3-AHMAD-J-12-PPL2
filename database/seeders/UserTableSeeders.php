<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        DB::table('user')->insert([
            'name' => 'jelle',
            'username' => 'jelle00',
            'email' => 'ahmadjdevernt4@gmail.com',
            'password' => 'ahmadjamaludin',
            'confirm password' => Hash::make('ahmadjamaludin'),  
        ]);
    }
}
