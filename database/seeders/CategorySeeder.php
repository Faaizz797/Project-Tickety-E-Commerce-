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
                'name' => 'Music',
                'icons' => null
            ],
            [
                'name' => 'Movies',
                'icons' => null   
            ],
            [
                'name' => 'Business',
                'icons' => null
            ],
            [
                'name' => 'Learning',
                'icons' => null   
            ],
            [
                'name' => 'Game',
                'icons' => null   
            ],
            [
                'name' => 'E-Sport',
                'icons' => null   
            ],
        ];
        // insert data to table categories
        foreach ($categories as $category) {
            Category::create([
                'name'=>$category['name'],
                'icons'=>$category['icons']
            ]);
        }
    }
}
