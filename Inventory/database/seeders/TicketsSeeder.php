<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Tickets')->insert(array(
            'id' => 1,
            'salesId' => 1,
            'total' => 1500,
            'created_at' => now()
        ));
    }
}
