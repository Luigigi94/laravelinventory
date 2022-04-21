<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert(array(
                array(
                    'id' => '1',
                    'description' => 'Administrador',
                    'created_at' => now()
                ),
                array(
                    'id' => '2',
                    'description' => 'Dueño',
                    'created_at' => now()
                ),
                array(
                    'id' => '3',
                    'description' => 'Vendedor',
                    'created_at' => now()
                )
            )
        );
    }
}
