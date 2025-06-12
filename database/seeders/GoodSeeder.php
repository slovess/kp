<?php

namespace Database\Seeders;

use App\Models\Good;
use Illuminate\Database\Seeder;

class GoodSeeder extends Seeder
{
    public function run(): void
    {
        // КАТЕГОРИЯ 1: Футболки (5 товаров)
        Good::create([
            'name'        => 'Enfants Riches Déprimés Tee',
            'description' => 'Эксклюзивная футболка с провокационным принтом и рваными краями. Материал данного изделия - 100% хлопок.',
            'price'       => 48000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'L',
            'image'       => 'goods/shirt.jpg',
            'brand_id'    => 12,
            'category_id' => 1,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Julias T-Shirt',
            'description' => 'Черный/белый, серый, графичный принт спереди, круглый вырез, короткие рукава и прямой подол. Свободный крой по всей длине.',
            'price'       => 15000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'M',
            'image'       => 'goods/jultshirt.png',
            'brand_id'    => 9,
            'category_id' => 1,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Vetements Total Darkness',
            'description' => 'Футболка оверсайз с графическим принтом на груди. Выполнена из 100% хлопка премиального качества.',
            'price'       => 32000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'XL',
            'image'       => 'goods/vetmo.png',
            'brand_id'    => 7,
            'category_id' => 1,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Chrome Hearts Cross Tee',
            'description' => 'Футболка с фирменным принтом Chrome Hearts. Высококачественный хлопок, свободный крой.',
            'price'       => 42000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'L',
            'image'       => 'goods/tshirt3.jpg',
            'brand_id'    => 5,
            'category_id' => 1,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Balenciaga Logo Tee',
            'description' => 'Классическая футболка с логотипом Balenciaga на груди. Прямой крой, круглый вырез.',
            'price'       => 28500,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'M',
            'image'       => 'goods/tshirt2.jpg',
            'brand_id'    => 4,
            'category_id' => 1,
            'location_id' => 2,
            'material_id' => 1,
            'color_id'    => 5,
        ]);

        // КАТЕГОРИЯ 2: Украшения (5 товаров)
        Good::create([
            'name'        => 'Chrome Hearts Forever Ring',
            'description' => 'Серебряное кольцо с гравировкой и фирменными крестами Chrome Hearts.',
            'price'       => 65000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => '18',
            'image'       => 'goods/jewelry1.png',
            'brand_id'    => 5,
            'category_id' => 2,
            'location_id' => 1,
            'material_id' => 6,
            'color_id'    => 5,
        ]);

        Good::create([
            'name'        => 'Chrome Hearts Dagger Pendant',
            'description' => 'Серебряный кулон в форме кинжала с фирменными элементами Chrome Hearts.',
            'price'       => 78000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'OS',
            'image'       => 'goods/jew.png',
            'brand_id'    => 5,
            'category_id' => 2,
            'location_id' => 1,
            'material_id' => 6,
            'color_id'    => 5,
        ]);

        Good::create([
            'name'        => 'Valentino Rockstud Bracelet',
            'description' => 'Кожаный браслет с фирменными шипами Valentino Rockstud.',
            'price'       => 32000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'M',
            'image'       => 'goods/jewerly2.png',
            'brand_id'    => 6,
            'category_id' => 2,
            'location_id' => 2,
            'material_id' => 6,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Chrome Hearts Cross Earrings',
            'description' => 'Серебряные серьги с крестами и черными камнями.',
            'price'       => 55000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'OS',
            'image'       => 'goods/jewerly4.png',
            'brand_id'    => 5,
            'category_id' => 2,
            'location_id' => 1,
            'material_id' => 6,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Balenciaga Chain Necklace',
            'description' => 'Массивная цепь с логотипом Balenciaga из нержавеющей стали.',
            'price'       => 38000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'OS',
            'image'       => 'goods/jewerly5.png',
            'brand_id'    => 4,
            'category_id' => 2,
            'location_id' => 2,
            'material_id' => 6,
            'color_id'    => 5,
        ]);

        // КАТЕГОРИЯ 3: Верхняя одежда (5 товаров)
        Good::create([
            'name'        => 'Raf Simons Embroidery Sweater',
            'description' => 'Гениален в каждой детали. Свитер с вышивкой и уникальным дизайном.',
            'price'       => 35000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'L',
            'image'       => 'goods/rubsvit.png',
            'brand_id'    => 10,
            'category_id' => 3,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 6,
        ]);

        Good::create([
            'name'        => 'Balenciaga Puffer Jacket',
            'description' => 'Объемная пуховая куртка с логотипом Balenciaga. Водоотталкивающий материал, теплый наполнитель.',
            'price'       => 185000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'L',
            'image'       => 'goods/outerwear1.jpg',
            'brand_id'    => 4,
            'category_id' => 3,
            'location_id' => 2,
            'material_id' => 1,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Yoji Yamamoto Asymmetric Coat',
            'description' => 'Асимметричное пальто с авангардным кроем. Шерстяная ткань высшего качества.',
            'price'       => 210000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'M',
            'image'       => 'goods/outerwear2.jpg',
            'brand_id'    => 8,
            'category_id' => 3,
            'location_id' => 1,
            'material_id' => 2,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Raf Simons Bomber',
            'description' => 'Культовый бомбер с патчами и вышивкой. Лимитированная коллекция.',
            'price'       => 175000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'L',
            'image'       => 'goods/outerwear3.png',
            'brand_id'    => 10,
            'category_id' => 3,
            'location_id' => 3,
            'material_id' => 1,
            'color_id'    => 3,
        ]);

        Good::create([
            'name'        => 'Vetements Oversized Hoodie',
            'description' => 'Культовая толстовка с капюшоном и вышитым логотипом оверсайз.',
            'price'       => 62000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'XL',
            'image'       => 'goods/outerwear4.jpg',
            'brand_id'    => 7,
            'category_id' => 3,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 1,
        ]);

        // КАТЕГОРИЯ 4: Обувь (5 товаров)
        Good::create([
            'name'        => 'Balenciaga Triple S',
            'description' => 'Культовые кроссовки с массивной подошвой. Комбинация кожи и текстиля.',
            'price'       => 89000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => '42',
            'image'       => 'goods/raf.png',
            'brand_id'    => 4,
            'category_id' => 4,
            'location_id' => 2,
            'material_id' => 6,
            'color_id'    => 5,
        ]);

        Good::create([
            'name'        => 'Nike x Raf Simons Ozweego',
            'description' => 'Коллаборационные кроссовки с футуристичным дизайном.',
            'price'       => 65000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => '43',
            'image'       => 'goods/shoes2.jpg',
            'brand_id'    => 1,
            'category_id' => 4,
            'location_id' => 1,
            'material_id' => 5,
            'color_id'    => 2,
        ]);

        Good::create([
            'name'        => 'Adidas Y-3 Qasa',
            'description' => 'Инновационные кроссовки с уникальной подошвой и минималистичным дизайном.',
            'price'       => 42000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => '44',
            'image'       => 'goods/shoes3.jpeg',
            'brand_id'    => 2,
            'category_id' => 4,
            'location_id' => 4,
            'material_id' => 5,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Valentino Rockstud Sneakers',
            'description' => 'Кожаные кроссовки с фирменными шипами Rockstud по бокам.',
            'price'       => 78000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => '41',
            'image'       => 'goods/shoes8.jpg',
            'brand_id'    => 6,
            'category_id' => 4,
            'location_id' => 2,
            'material_id' => 6,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Chrome Hearts Leather Boots',
            'description' => 'Кожаные ботинки с металлическими элементами и крестами.',
            'price'       => 125000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => '42',
            'image'       => 'goods/shoes9.jpg',
            'brand_id'    => 5,
            'category_id' => 4,
            'location_id' => 1,
            'material_id' => 6,
            'color_id'    => 1,
        ]);

        // КАТЕГОРИЯ 5: Аксессуары (5 товаров)
        Good::create([
            'name'        => 'Chrome Hearts Wallet Chain',
            'description' => 'Серебрянная цепь для кошелька с фирменными крестами.',
            'price'       => 85000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'OS',
            'image'       => 'goods/accessory2.jpg',
            'brand_id'    => 5,
            'category_id' => 5,
            'location_id' => 2,
            'material_id' => 6,
            'color_id'    => 5,
        ]);

        Good::create([
            'name'        => 'Balenciaga Logo Cap',
            'description' => 'Кепка с вышитым логотипом и регулируемым ремешком.',
            'price'       => 32000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'OS',
            'image'       => 'goods/accessory5.png',
            'brand_id'    => 4,
            'category_id' => 5,
            'location_id' => 2,
            'material_id' => 1,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Valentino Rockstud Belt',
            'description' => 'Кожаный ремень с фирменными шипами Valentino.',
            'price'       => 45000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'M',
            'image'       => 'goods/accessory3.jpg',
            'brand_id'    => 6,
            'category_id' => 5,
            'location_id' => 2,
            'material_id' => 6,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Raf Simons Archive Scarf',
            'description' => 'Шарф с принтом из архивной коллекции Raf Simons.',
            'price'       => 28000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'OS',
            'image'       => 'goods/accessory4.jpg',
            'brand_id'    => 10,
            'category_id' => 5,
            'location_id' => 3,
            'material_id' => 4,
            'color_id'    => 2,
        ]);

        Good::create([
            'name'        => 'Chrome Hearts Sunglasses',
            'description' => 'Солнцезащитные очки с серебряными крестами на дужках.',
            'price'       => 95000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'OS',
            'image'       => 'goods/accessory6.jpg',
            'brand_id'    => 5,
            'category_id' => 5,
            'location_id' => 1,
            'material_id' => 6,
            'color_id'    => 1,
        ]);

        // КАТЕГОРИЯ 6: Брюки (5 товаров)
        Good::create([
            'name'        => 'Yoji Yamamoto Wide Pants',
            'description' => 'Широкие брюки с высокой посадкой и асимметричным кроем.',
            'price'       => 68000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'M',
            'image'       => 'goods/bruki.png',
            'brand_id'    => 8,
            'category_id' => 6,
            'location_id' => 1,
            'material_id' => 2,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Balenciaga Cargo Pants',
            'description' => 'Брюки-карго с множеством карманов и фирменным логотипом.',
            'price'       => 75000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'L',
            'image'       => 'goods/paints2.jpg',
            'brand_id'    => 4,
            'category_id' => 6,
            'location_id' => 2,
            'material_id' => 1,
            'color_id'    => 5,
        ]);

        Good::create([
            'name'        => 'Raf Simons Tailored Trousers',
            'description' => 'Классические брюки с зауженным кроем и декоративными элементами.',
            'price'       => 52000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'M',
            'image'       => 'goods/bruki.png',
            'brand_id'    => 10,
            'category_id' => 6,
            'location_id' => 3,
            'material_id' => 2,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Vetements Track Pants',
            'description' => 'Спортивные брюки оверсайз с лампасами и логотипом.',
            'price'       => 38000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'L',
            'image'       => 'goods/pants4.jpg',
            'brand_id'    => 7,
            'category_id' => 6,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 3,
        ]);

        Good::create([
            'name'        => 'Chrome Hearts Leather Pants',
            'description' => 'Кожаные брюки с металлическими элементами и крестами.',
            'price'       => 185000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'M',
            'image'       => 'goods/pants5.jpg',
            'brand_id'    => 5,
            'category_id' => 6,
            'location_id' => 1,
            'material_id' => 6,
            'color_id'    => 1,
        ]);

        // КАТЕГОРИЯ 7: Свитеры, джемперы (5 товаров)
        Good::create([
            'name'        => 'Raf Simons Oversized Sweater',
            'description' => 'Объемный свитер с графическим принтом и спущенным плечом.',
            'price'       => 58000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'XL',
            'image'       => 'goods/sweater1.jpg',
            'brand_id'    => 10,
            'category_id' => 7,
            'location_id' => 3,
            'material_id' => 1,
            'color_id'    => 3,
        ]);

        Good::create([
            'name'        => 'Vetements Logo Hoodie',
            'description' => 'Культовая толстовка с капюшоном и вышитым логотипом.',
            'price'       => 62000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'L',
            'image'       => 'goods/sweater2.jpg',
            'brand_id'    => 7,
            'category_id' => 7,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Balenciaga Knit Sweater',
            'description' => 'Вязаный свитер с логотипом и объемным кроем.',
            'price'       => 85000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'M',
            'image'       => 'goods/sweater3.jpg',
            'brand_id'    => 4,
            'category_id' => 7,
            'location_id' => 2,
            'material_id' => 1,
            'color_id'    => 5,
        ]);

        Good::create([
            'name'        => 'Yoji Yamamoto Deconstructed Cardigan',
            'description' => 'Деконструированный кардиган с асимметричными деталями.',
            'price'       => 125000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'L',
            'image'       => 'goods/sweater4.jpg',
            'brand_id'    => 8,
            'category_id' => 7,
            'location_id' => 1,
            'material_id' => 2,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Chrome Hearts Cross Hoodie',
            'description' => 'Толстовка с вышитыми крестами и металлическими элементами.',
            'price'       => 95000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'L',
            'image'       => 'goods/sweater5.jpg',
            'brand_id'    => 5,
            'category_id' => 7,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 1,
        ]);

        // КАТЕГОРИЯ 8: Джинсы (5 товаров)
        Good::create([
            'name'        => 'Chrome Hearts Denim Jeans',
            'description' => 'Джинсы с крестом крутые. Джинсы с вышивкой крестов и фирменными элементами.',
            'price'       => 157000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'L',
            'image'       => 'goods/jeans.png',
            'brand_id'    => 5,
            'category_id' => 8,
            'location_id' => 1,
            'material_id' => 3,
            'color_id'    => 6,
        ]);

        Good::create([
            'name'        => 'Valentino Rockstud Jeans',
            'description' => 'Джинсы с декоративными шипами и потертостями.',
            'price'       => 85000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => '30',
            'image'       => 'goods/denim2.jpg',
            'brand_id'    => 6,
            'category_id' => 8,
            'location_id' => 2,
            'material_id' => 3,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Raf Simons Destroyed Denim',
            'description' => 'Джинсы с эффектом разрушения и патчами.',
            'price'       => 68000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => '32',
            'image'       => 'goods/denim3.jpg',
            'brand_id'    => 10,
            'category_id' => 8,
            'location_id' => 3,
            'material_id' => 3,
            'color_id'    => 3,
        ]);

        Good::create([
            'name'        => 'Vetements Oversized Jeans',
            'description' => 'Джинсы оверсайз с широким кроем и логотипом.',
            'price'       => 45000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'XL',
            'image'       => 'goods/denim4.jpg',
            'brand_id'    => 7,
            'category_id' => 8,
            'location_id' => 1,
            'material_id' => 3,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Balenciaga Distressed Jeans',
            'description' => 'Джинсы с потертостями и фирменным логотипом.',
            'price'       => 75000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => '31',
            'image'       => 'goods/denim5.jpg',
            'brand_id'    => 4,
            'category_id' => 8,
            'location_id' => 2,
            'material_id' => 3,
            'color_id'    => 3,
        ]);

        // КАТЕГОРИЯ 9: Рубашки (5 товаров)
        Good::create([
            'name'        => 'Vetements Oversized Shirt',
            'description' => 'Рубашка оверсайз с асимметричным кроем и принтом на спине.',
            'price'       => 48000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'XL',
            'image'       => 'goods/vetmo.png',
            'brand_id'    => 7,
            'category_id' => 9,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 5,
        ]);

        Good::create([
            'name'        => 'Raf Simons Denim Shirt',
            'description' => 'Джинсовая рубашка с патчами и декоративными элементами.',
            'price'       => 52000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'M',
            'image'       => 'goods/shirt2.jpg',
            'brand_id'    => 10,
            'category_id' => 9,
            'location_id' => 3,
            'material_id' => 3,
            'color_id'    => 3,
        ]);

        Good::create([
            'name'        => 'Yoji Yamamoto Asymmetric Shirt',
            'description' => 'Авангардная рубашка с асимметричным кроем и необычными деталями.',
            'price'       => 58000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'L',
            'image'       => 'goods/shirt3.jpg',
            'brand_id'    => 8,
            'category_id' => 9,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Chrome Hearts Cross Shirt',
            'description' => 'Рубашка с вышитыми крестами и металлическими пуговицами.',
            'price'       => 85000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'L',
            'image'       => 'goods/shirt5.jpg',
            'brand_id'    => 5,
            'category_id' => 9,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Balenciaga Logo Shirt',
            'description' => 'Классическая рубашка с логотипом Balenciaga на груди.',
            'price'       => 42000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'M',
            'image'       => 'goods/shirt6.jpg',
            'brand_id'    => 4,
            'category_id' => 9,
            'location_id' => 2,
            'material_id' => 1,
            'color_id'    => 5,
        ]);

        // КАТЕГОРИЯ 10: Сумки (5 товаров)
        Good::create([
            'name'        => 'Chrome Hearts Duffle Bag',
            'description' => 'Дорожная сумка из кожи с фирменными крестами и металлическими элементами.',
            'price'       => 195000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'OS',
            'image'       => 'goods/bag1.jpg',
            'brand_id'    => 5,
            'category_id' => 10,
            'location_id' => 1,
            'material_id' => 6,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Balenciaga Hourglass Bag',
            'description' => 'Культовая сумка с узнаваемым силуэтом и логотипом.',
            'price'       => 165000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'OS',
            'image'       => 'goods/bag2.jpg',
            'brand_id'    => 4,
            'category_id' => 10,
            'location_id' => 2,
            'material_id' => 6,
            'color_id'    => 2,
        ]);

        Good::create([
            'name'        => 'Raf Simons Archive Tote',
            'description' => 'Тканевая сумка-тоут с принтом из архивной коллекции.',
            'price'       => 35000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'OS',
            'image'       => 'goods/bag3.jpg',
            'brand_id'    => 10,
            'category_id' => 10,
            'location_id' => 3,
            'material_id' => 1,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Vetements Messenger Bag',
            'description' => 'Сумка-мессенджер с логотипом и регулируемым ремнем.',
            'price'       => 48000,
            'isPresence'  => 1,
            'isPopular'   => 0,
            'size'        => 'OS',
            'image'       => 'goods/bag4.jpg',
            'brand_id'    => 7,
            'category_id' => 10,
            'location_id' => 1,
            'material_id' => 1,
            'color_id'    => 1,
        ]);

        Good::create([
            'name'        => 'Yoji Yamamoto Leather Backpack',
            'description' => 'Кожаный рюкзак с минималистичным дизайном и асимметричными деталями.',
            'price'       => 125000,
            'isPresence'  => 1,
            'isPopular'   => 1,
            'size'        => 'OS',
            'image'       => 'goods/bag5.jpg',
            'brand_id'    => 8,
            'category_id' => 10,
            'location_id' => 1,
            'material_id' => 6,
            'color_id'    => 1,
        ]);
    }
}

