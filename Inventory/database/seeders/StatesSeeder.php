<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('States')->insert(array(
            array(
                'id' => 1,
                'state' => 'venta',
                'created_at' => now()
            ),
            array(
                'id' => 2,
                'state' => 'crédito apartado',
                'created_at' => now()
            ),
            array(
                'id' => 3,
                'state' => 'crédito pagando',
                'created_at' => now()
            ),
            array(
                'id' => 4,
                'state' => 'crédito pagado',
                'created_at' => now()
            ),
            array(
                'id' => 5,
                'state' => 'Pedido',
                'created_at' => now()
            )
        ));
    }
}
