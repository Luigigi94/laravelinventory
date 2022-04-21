<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Image_ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Image_Products')->insert(array(
           'id' => 1,
            'image' => 'No hay foto (por ahora)',
            'productId' => 1,
            'created_at' => now()
        ));
    }
}
