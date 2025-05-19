<?php
namespace Database\Seeders;

use App\Models\Good;
use Illuminate\Database\Seeder;

class GoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Good::create([
            'name'        => 'enfants riches',
            'description' => 'Просто и со вкусом',
            'price'       => 48000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'L',
            'image'       => 'goods/shirt.png',
            'brand_id'    => 11,
            'category_id' => 3,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'julias t shirt',
            'description' => ' Черный/белый, серый, графичный принт спереди, круглый вырез, короткие
        рукава и прямой подол.
        Свободный крой по всей длине. Неэластичная ткань средней плотности
        практически не тянется.
        Размер соответствует указанному на этикетке. Рекомендуем выбрать ваш
        привычный размер',
            'isPopular'   => 1,
            'price'       => 15000,
            'isPresence'  => 1,
            'size'        => 'M',
            'image'       => 'jultshirt.png',
            'brand_id'    => 9,
            'category_id' => 1,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 1,
        ]);
         Good::create([
            'name'        => 'raf simons emercodery',
            'description' => 'Гениален в каждой детали',
            'price'       => 35000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'L',
            'image'       => 'rubsvit.png',
            'brand_id'    => 10,
            'category_id' => 3,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 6,
        ]);
         Good::create([
            'name'        => 'vetements hi-speed',
            'description' => 'Гениален в каждой детали',
            'price'       => 35000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'L',
            'image'       => 'vetmo.png',
            'brand_id'    => 7,
            'category_id' => 1,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 1,
        ]);
         Good::create([
            'name'        => 'chrome hearts jeans',
            'description' => 'Французский флер',
            'price'       => 157000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'L',
            'image'       => 'jeans.png',
            'brand_id'    => 5,
            'category_id' => 1,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 6,
        ]);
    }
}