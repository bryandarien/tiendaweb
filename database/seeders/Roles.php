<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin=Role::create(['name'=>'Admin']);   
        $user=Role::create(['name'=>'User']);
        
        Permission::create(['name'=>'admin.home'])->assignRole($admin);


        Permission::create(['name'=>'admin.productos.index'])->assignRole($admin);
        Permission::create(['name'=>'admin.productos.create'])->assignRole($admin);
        Permission::create(['name'=>'admin.productos.edit'])->assignRole($admin);
        Permission::create(['name'=>'admin.productos.destroy'])->assignRole($admin);
    }
}
