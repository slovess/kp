<?php

namespace Database\Seeders;

use App\Models\Delivery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ArrayOfDelivery = [
            'пэк',
            'сдэк',
            'boxberry',
            'деловые линии',
            'dpd',
        ];

        foreach($ArrayOfDelivery as $item) {
            Delivery::create([
                'title' => $item
            ]);
        }
    }
}
