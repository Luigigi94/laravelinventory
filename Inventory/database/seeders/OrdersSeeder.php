<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Orders')->insert(array(
           'id' => 1,
           'productId' => 1,
           'quantity' => 50,
           'created_at' => now()
        ));
    }
}
