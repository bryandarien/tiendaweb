<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=>"Bryan Cordova Pujay",
            "email"=>"admin@admin.com",
            "password"=>bcrypt('961728933')
        ])->assignRole('Admin');
    }
}
