<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(array(
            'id' => 1,
            'name' => 'productoPrueba',
            'stock' => 100,
            'long_description' => 'Producto de prueba para ver la db',
            'price_at_sell' => 150,
            'price_on_buy' => 130,
            'created_at' => now()
        ));
    }
}
