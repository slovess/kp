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
            ['title' => 'аксессуары', 'image' => 'bag.png', 'isPopular'=>1],
            ['title' => 'Брюки', 'image' => 'bag.png', 'isPopular'=>0],
            ['title' => 'Свитеры, джемперы', 'image' => 'bag.png', 'isPopular'=>0],
            ['title' => 'Джинсы', 'image' => 'bag.png', 'isPopular'=>0],
            ['title' => 'Рубашки', 'image' => 'bag.png', 'isPopular'=>0],
            ['title' => 'Сумки', 'image' => 'bag.png', 'isPopular'=>0]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}