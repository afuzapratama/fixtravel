<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'category_name' => 'Long Trip'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Short Trip'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Day Trip'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Beach'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Park'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Island'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Temple'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Mountain'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Hiking'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Camping'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Snorkeling'
        ]);
    }
}
