<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Pays')->insert(array(
            'id' => 1,
            'salesId' => 1,
            'layawayId' => 1,
            'previousDebt' => 1500,
            'currentDebt' => 1350,
            'created_at' => now()
        ));
    }
}
