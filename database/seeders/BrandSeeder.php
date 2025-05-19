<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ArrayOfBrands = [
            'nike',
            'adidas',
            'puma',
            'balenciaga',
            'chrome hearts',
            'valentino',
            'vetements',
            'yoji',
            'julias',
            'raf simons',
            'gap',
            'enfants riches derrpimes'
        ];

        foreach($ArrayOfBrands as $item) {
            Brand::create([
                'title' => $item
            ]);
        }
    }
}
