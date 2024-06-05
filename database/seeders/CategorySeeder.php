<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Fruits'],
            ['name' => 'Vegetables'],
            ['name' => 'Meats'],
            ['name' => 'Eggs'],
            ['name' => 'Fish and Seafood'],
            ['name' => 'Beverages'],
            ['name' => 'Snacks'],
            ['name' => 'Dairy'],
            ['name' => 'Cereals'],
            ['name' => 'Bread and Bakery'],
        ];

        DB::table('categories')->insert($categories);
    }
}
