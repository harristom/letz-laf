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
            // TODO: Add images
            [
                'name' => 'Morning Jog',
                'description' => 'Enjoy a refreshing morning run along the Pétrusse valley in Luxembourg City. Let\'s meet in the car park at the Grund end of the valley. See you there!',
                'date' => '2023-12-16 08:00:00',
                'distance' => 5.000,
                'latitude' => 49.606302,
                'longitude' => 6.136250,
                'image_path' => 'samples/peitruss.jpg'
            ],
            [
                'name' => 'Evening Run in Parc Merl',
                'description' => 'Experience a peaceful evening run in Parc Merl, Luxembourg City.',
                'date' => '2023-12-10 08:30:00',
                'distance' => 8.000,
                'latitude' => 49.6107,
                'longitude' => 6.1228,
                'image_path' => 'samples/runners.jpg'
            ],
            [
                'name' => 'Trail Run in Mullerthal',
                'description' => 'Discover the beautiful trails of Mullerthal, also known as Little Switzerland.',
                'date' => '2024-01-10 10:00:00',
                'distance' => 10.000,
                'latitude' => 49.7785,
                'longitude' => 6.3533,
                'image_path' => 'samples/mullerthal.jpg'
            ],
            [
                'name' => 'Afternoon Run in Parc Central',
                'description' => 'Take an afternoon run in Parc Central, Dudelange.',
                'date' => '2024-01-15 15:45:00',
                'distance' => 6.000,
                'latitude' => 49.4804,
                'longitude' => 6.0837,
            ],
            [
                'name' => 'Belval Night Run',
                'description' => 'Let\'s go for a late-night jog around Belval with its stunning mix of modern architecture and the old steelworks. Please make sure to wear reflecting clothin and dress warm!',
                'date' => '2024-02-01 21:00:00',
                'distance' => 7.000,
                'latitude' => 49.4971,
                'longitude' => 5.9829,
                'image_path' => 'samples/belval.jpg'
            ],
            [
                'name' => 'Stauséi Sprint',
                'description' => 'Ok, you don\'t actually have to sprint ;) Join us for meander round the beautiful Lac de la Haute-Sûre. We will meet at 10 at the dam.',
                'date' => '2024-02-05 10:00:00',
                'distance' => 7.500,
                'latitude' => 49.5545,
                'longitude' => 6.3742,
                'image_path' => 'samples/stausei.jpg'
            ],
            [
                'name' => 'Gruelling Grund Hill Sprints',
                'description' => 'Challenge yourself with a set of repeats up and down the big hill to the old city gate in Grund.',
                'date' => '2024-03-01 08:30:00',
                'distance' => 9.000,
                'latitude' => 49.9746,
                'longitude' => 6.4124,
                'image_path' => 'samples/grund.jpg'
            ],
            [
                'name' => 'Sunset Run in Mondorf-les-Bains',
                'description' => 'Experience a breathtaking sunset run in Mondorf-les-Bains.',
                'date' => '2024-03-05 18:45:00',
                'distance' => 8.500,
                'latitude' => 49.5072,
                'longitude' => 6.2635,
            ],
            [
                'name' => 'Riverside Run in Grevenmacher',
                'description' => 'Run along the riverside in Grevenmacher.',
                'date' => '2024-03-15 09:30:00',
                'distance' => 7.300,
                'latitude' => 49.6719,
                'longitude' => 6.4373,
            ],
            [
                'name' => 'Forest Trail in Oesling',
                'description' => 'Explore a forest trail in the Oesling region.',
                'date' => '2024-04-01 14:00:00',
                'distance' => 8.200,
                'latitude' => 50.1065,
                'longitude' => 6.0163,
            ],
        ];

        foreach ($runs as $run) {
            $run['organiser_id'] = 1;
            $event = Event::create($run);
            $event->participants()->attach(1);
        }
    }
}
