<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ArrayOfColors = [
            'черный',
            'красный',
            'синий',
            'бирюзовый',
            'серый',
        ];

        foreach($ArrayOfColors as $item) {
            Color::create([
                'title' => $item
            ]);
        }
    }
}
