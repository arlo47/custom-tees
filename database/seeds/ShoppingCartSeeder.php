<?php

use Illuminate\Database\Seeder;

class ShoppingCartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shopping_carts')->insert([
            'user_id'=>2,
            'product_id'=>10,
            'quantity'=>1,
        ]);
    }
}
