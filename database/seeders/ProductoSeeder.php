<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            "nombreProducto"=>"Mando de xbox serie S",
            "descripcion"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consequatur voluptatum rem maiores. Eveniet doloremque nisi commodi mollitia esse nemo labore consequuntur quibusdam illum delectus nostrum ipsa, aliquid, quis tenetur!",
            "precio"=>256.00,
            "stock"=>20,
            "nombreImage"=>'img/prueba02.jpeg'
        ]);

        Producto::create([
            "nombreProducto"=>"Mando ps5",
            "descripcion"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consequatur voluptatum rem maiores. Eveniet doloremque nisi commodi mollitia esse nemo labore consequuntur quibusdam illum delectus nostrum ipsa, aliquid, quis tenetur!",
            "precio"=>270.08,
            "stock"=>20,
            "nombreImage"=>'img/prueba03.jpeg'
        ]);

        Producto::create([
            "nombreProducto"=>"Nintendo switch",
            "descripcion"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consequatur voluptatum rem maiores. Eveniet doloremque nisi commodi mollitia esse nemo labore consequuntur quibusdam illum delectus nostrum ipsa, aliquid, quis tenetur!",
            "precio"=>1340.22,
            "stock"=>20,
            "nombreImage"=>'img/prueba04.jpeg'
        ]);

        Producto::create([
            "nombreProducto"=>"Celular Samsung S20",
            "descripcion"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consequatur voluptatum rem maiores. Eveniet doloremque nisi commodi mollitia esse nemo labore consequuntur quibusdam illum delectus nostrum ipsa, aliquid, quis tenetur!",
            "precio"=>1500.50,
            "stock"=>20,
            "nombreImage"=>'img/product_prueba.jpeg'
        ]);
    }
}
