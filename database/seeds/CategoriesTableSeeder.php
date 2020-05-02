<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Botany',
                'description' => 'The study of plants and its farming',
            ],
            [
                'name' => 'Zoology',
                'description' => 'The study of animls and keeping them',
            ],
            [
                'name' => 'Production',
                'description' => 'The production of any cash crop for subsistence or commrcial purposes',
            ],
        ]);
    }
}
