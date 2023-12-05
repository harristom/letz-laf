<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $runs = [
            [
                'name' => 'Morning Jog in Parc de la Pétrusse',
                'description' => 'Enjoy a refreshing morning jog in Parc de la Pétrusse in Luxembourg City.',
                'date' => '2023-12-15 08:00:00',
                'distance_metres' => 5000,
                'latitude' => 49.6116,
                'longitude' => 6.1314,
            ],
            [
                'name' => 'Evening Run in Parc Merl',
                'description' => 'Experience a peaceful evening run in Parc Merl, Luxembourg City.',
                'date' => '2023-12-20 18:30:00',
                'distance_metres' => 8000,
                'latitude' => 49.6107,
                'longitude' => 6.1228,
            ],
            [
                'name' => 'Trail Run in Mullerthal',
                'description' => 'Discover the beautiful trails of Mullerthal, also known as Little Switzerland.',
                'date' => '2024-01-10 10:00:00',
                'distance_metres' => 10000,
                'latitude' => 49.7785,
                'longitude' => 6.3533,
            ],
            [
                'name' => 'Afternoon Run in Parc Central',
                'description' => 'Take an afternoon run in Parc Central, Dudelange.',
                'date' => '2024-01-15 15:45:00',
                'distance_metres' => 6000,
                'latitude' => 49.4804,
                'longitude' => 6.0837,
            ],
            [
                'name' => 'City Run in Esch-sur-Alzette',
                'description' => 'Run through the city streets of Esch-sur-Alzette.',
                'date' => '2024-02-01 17:00:00',
                'distance_metres' => 7000,
                'latitude' => 49.4971,
                'longitude' => 5.9829,
            ],
            [
                'name' => 'Lakeview Run in Remerschen',
                'description' => 'Enjoy a scenic run with a view of the lake in Remerschen.',
                'date' => '2024-02-05 19:15:00',
                'distance_metres' => 7500,
                'latitude' => 49.5545,
                'longitude' => 6.3742,
            ],
            [
                'name' => 'Hilly Run in Echternach',
                'description' => 'Challenge yourself with a hilly run in Echternach.',
                'date' => '2024-03-01 12:30:00',
                'distance_metres' => 9000,
                'latitude' => 49.9746,
                'longitude' => 6.4124,
            ],
            [
                'name' => 'Sunset Run in Mondorf-les-Bains',
                'description' => 'Experience a breathtaking sunset run in Mondorf-les-Bains.',
                'date' => '2024-03-05 18:45:00',
                'distance_metres' => 8500,
                'latitude' => 49.5072,
                'longitude' => 6.2635,
            ],
            [
                'name' => 'Riverside Run in Grevenmacher',
                'description' => 'Run along the riverside in Grevenmacher.',
                'date' => '2024-03-15 09:30:00',
                'distance_metres' => 7300,
                'latitude' => 49.6719,
                'longitude' => 6.4373,
            ],
            [
                'name' => 'Forest Trail in Oesling',
                'description' => 'Explore a forest trail in the Oesling region.',
                'date' => '2024-04-01 14:00:00',
                'distance_metres' => 8200,
                'latitude' => 50.1065,
                'longitude' => 6.0163,
            ],
        ];

        foreach ($runs as $run) {
            Event::create($run);
        }
    }
}
