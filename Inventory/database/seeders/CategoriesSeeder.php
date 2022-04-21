<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Categories')->insert(array(
            'id' => 1,
            'description' => 'Categoría Nula',
            'long_description' => 'Categoría nula solo para pruebas',
            'created_at' => now()
        ));
    }
}
