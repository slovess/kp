<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['title' => 'футболки', 'image' => 'tshirt.png', 'isPopular'=>1],
            ['title' => 'украшения', 'image' => 'hearts.png', 'isPopular'=>1],
            ['title' => 'верхняя одежда', 'image' => 'yojibomber.png', 'isPopular'=>1],
            ['title' => 'обувь', 'image' => 'raf.png', 'isPopular'=>1],
            ['title' => 'аксессуары', 'image' => 'hearts.png', 'isPopular'=>1],
            ['title' => 'Брюки', 'image' => 'bruki.png', 'isPopular'=>0],
            ['title' => 'Свитеры, джемперы', 'image' => 'rubsvit.png', 'isPopular'=>0],
            ['title' => 'Джинсы', 'image' => 'jeans.png', 'isPopular'=>0],
            ['title' => 'Рубашки', 'image' => 'vetmo.png', 'isPopular'=>0],
            ['title' => 'Сумки', 'image' => 'bag.png', 'isPopular'=>0]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}