<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
           'name' => 'Luis',
           'email' => 'el.luige94@gmail.com',
            'rolesId' => 1,
            'password' => bcrypt('12345678'),
            'created_at' => now()
        ));
    }
}
