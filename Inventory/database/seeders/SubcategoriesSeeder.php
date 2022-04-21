<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Subcategories')->insert(array(
            'id' => 1,
            'description' => 'Subcategoría Nula',
            'long_description' => 'Subcategoría nula solo para pruebas',
            'created_at' => now()
        ));
    }
}
