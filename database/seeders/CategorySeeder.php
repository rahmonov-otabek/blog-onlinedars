<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['name' => 'Technology'],
            ['name' => 'Sports'],
            ['name' => 'Food'],
            ['name' => 'Auto'],
            ['name' => 'Travel'],
        ];

        DB::table('categories')->insert($categories);
    }
}
