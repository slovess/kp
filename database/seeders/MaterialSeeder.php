<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ArrayOfMaterials = [
            'хлопок',
            'лён',
            'дэним',
            'шёлк',
            'искусственная кожа',
            'натуральная кожа',
            'замша',
            'материал8',
            'материал9',
            'материал10',
               'материал11',
                  'материал11',
        ];

        foreach($ArrayOfMaterials as $item) {
            Material::create([
                'title' => $item
            ]);
        }
    }
}
