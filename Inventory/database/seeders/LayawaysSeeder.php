<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayawaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layaways')->insert(array(

            'id' => 1,
            'name' => 'Prueba',
            'phone' => '7226799965',
            'totalDebt' => '1500',
            'created_at' => now()
        ));
    }
}
