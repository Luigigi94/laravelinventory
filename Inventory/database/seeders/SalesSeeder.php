<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Sales')->insert(array(
            'id' => 1,
            'userId' => 1,
            'stateId' => 1,
            'productId' => 1,
            'quantity' => 10,
            'subtotal' => 1500,
            'created_at' => now()
        ));
    }
}
