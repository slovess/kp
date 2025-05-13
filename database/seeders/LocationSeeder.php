<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ArrayOfLocation = [
            'москва',
            'санкт-Петербург',
            'иркутск',
            'нижний Новгород'
        ];

        foreach($ArrayOfLocation as $item) {
            Location::create([
                'title' => $item
            ]);
        }
    }
}
