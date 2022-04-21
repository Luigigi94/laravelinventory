<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesSeeder::class,
            LayawaysSeeder::class,
            StatesSeeder::class,
            CategoriesSeeder::class,
            SubcategoriesSeeder::class,
            UsersSeeder::class,
            ProductsSeeder::class,
            assignmentsSeeder::class,
            Image_ProductsSeeder::class,
            OrdersSeeder::class,
            SalesSeeder::class,
            PaysSeeder::class,
            TicketsSeeder::class,
        ]);
    }
}
