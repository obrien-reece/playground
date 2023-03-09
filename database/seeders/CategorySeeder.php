<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'animation'
            ],[
                'id' => 2,
                'name' => 'anime'
            ],[
                'id' => 3,
                'name' => 'movie'
            ],[
                'id' => 4,
                'name' => 'series'
            ],[
                'id' => 5,
                'name' => 'cartoon'
            ],[
                'id' => 6,
                'name' => 'PPV'
            ],[
                'id' => 7,
                'name' => 'PG18'
            ],[
                'id' => 8,
                'name' => 'GE'
            ]
        ];
        Category::insert($categories);
    }
}
