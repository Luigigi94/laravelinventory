<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class assignmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assignments')->insert(array(
           'id' => 1,
            'categoryId' => 1,
            'subCategoryId' => 1,
            'productId' => 1,
            'created_at' => now()
        ));
    }
}
