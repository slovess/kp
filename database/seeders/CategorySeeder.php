<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['title' => 'футболки', 'image' => 'tshirt.png'],
            ['title' => 'украшения', 'image' => 'hearts.png'],
            ['title' => 'верхняя одежда', 'image' => 'yojibomber.png'],
            ['title' => 'обувь', 'image' => 'raf.png'],
            ['title' => 'аксессуары', 'image' => 'bag.png']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}