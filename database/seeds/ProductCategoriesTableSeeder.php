<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                'name' => 'Flowers',
                'description' => 'Flower related farm produce',
            ],
            [
                'name' => 'Tubers',
                'description' => 'Products that are either from plant stem or roots',
            ],
            [
                'name' => 'Cereals',
                'description' => 'Farm products that are in form of grains',
            ],
        ]);
    }
}
