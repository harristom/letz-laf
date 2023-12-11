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
                'latitude' => 49.606267,
                'longitude' => 6.112567,
                'image_path' => 'samples/runners.jpg'
            ],
            [
                'name' => 'Trail Run in Mullerthal',
                'description' => 'Discover the beautiful trails of Mullerthal, also known as Little Switzerland.',
                'date' => '2024-01-10 10:00:00',
                'distance' => 10.000,
                'latitude' => 49.784918,
                'longitude' => 6.299592,
                'image_path' => 'samples/mullerthal.jpg'
            ],
            [
                'name' => 'Belval Night Run',
                'description' => 'Let\'s go for a late-night jog around Belval with its stunning mix of modern architecture and the old steelworks. Please make sure to wear reflective clothing and dress warm!',
                'date' => '2024-02-01 21:00:00',
                'distance' => 7.000,
                'latitude' => 49.500639,
                'longitude' => 5.947101,
                'image_path' => 'samples/belval.jpg'
            ],
            [
                'name' => 'Stauséi Sprint',
                'description' => 'Ok, you don\'t actually have to sprint ;) Join us for a meander round the beautiful Lac de la Haute-Sûre. We will meet at 10 at the dam.',
                'date' => '2024-02-05 10:00:00',
                'distance' => 7.500,
                'latitude' => 49.910445,
                'longitude' => 5.921223,
                'image_path' => 'samples/stausei.jpg'
            ],
            [
                'name' => 'Gruelling Grund Hill Sprints',
                'description' => 'Challenge yourself with a set of repeats up and down the big hill to the old city gate in Grund.',
                'date' => '2024-03-01 08:30:00',
                'distance' => 9.000,
                'latitude' => 49.608353,
                'longitude' => 6.135140,
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
            // The ones below are fresh from ChatGPT and may not have correct co-ordinates as I haven't checked them all
            [
                'name' => 'City Center Run',
                'description' => 'Enjoy a scenic run through the heart of Luxembourg City.',
                'date' => '2023-11-10 09:15:00',
                'distance' => 6.500,
                'latitude' => 49.6116,
                'longitude' => 6.1319,
            ],
            [
                'name' => 'Parkour in Park Beggen',
                'description' => 'Challenge yourself with an obstacle-filled run in Park Beggen.',
                'date' => '2023-11-12 08:45:00',
                'distance' => 7.800,
                'latitude' => 49.6284,
                'longitude' => 6.1802,
            ],
            [
                'name' => 'Limpertsberg Loop',
                'description' => 'Join us for a loop around the charming neighborhood of Limpertsberg.',
                'date' => '2023-11-15 09:00:00',
                'distance' => 5.700,
                'latitude' => 49.6252,
                'longitude' => 6.1372,
            ],
            [
                'name' => 'Kirchberg Challenge',
                'description' => 'Take on the Kirchberg Challenge with a run through the modern district of Kirchberg.',
                'date' => '2023-11-18 08:30:00',
                'distance' => 9.200,
                'latitude' => 49.6270,
                'longitude' => 6.1516,
            ],
            [
                'name' => 'Echternach Exploration',
                'description' => 'Explore the picturesque town of Echternach with a scenic run.',
                'date' => '2023-11-20 10:30:00',
                'distance' => 6.000,
                'latitude' => 49.8094,
                'longitude' => 6.4293,
            ],
            [
                'name' => 'Luxembourg Gardens Run',
                'description' => 'Discover the beauty of Luxembourg Gardens with a refreshing run.',
                'date' => '2023-12-23 08:00:00',
                'distance' => 8.100,
                'latitude' => 49.6138,
                'longitude' => 6.1338,
            ],
            [
                'name' => 'Rolling Hills in Redange',
                'description' => 'Experience a run through the rolling hills of Redange.',
                'date' => '2023-12-25 11:15:00',
                'distance' => 7.500,
                'latitude' => 49.7402,
                'longitude' => 5.8834,
            ],
            [
                'name' => 'Wiltz Winter Wonderland Run',
                'description' => 'Embrace the winter wonderland in Wiltz with a festive run.',
                'date' => '2023-12-28 14:45:00',
                'distance' => 10.000,
                'latitude' => 49.9686,
                'longitude' => 5.9267,
            ],
            [
                'name' => 'Esch-sur-Alzette Evening Jog',
                'description' => 'Wind down your day with an evening jog in Esch-sur-Alzette.',
                'date' => '2023-11-30 19:00:00',
                'distance' => 6.800,
                'latitude' => 49.4944,
                'longitude' => 5.9803,
            ],
            [
                'name' => 'New Year\'s Day Run in Niederanven',
                'description' => 'Start the new year with a rejuvenating run in Niederanven.',
                'date' => '2024-01-01 10:30:00',
                'distance' => 5.500,
                'latitude' => 49.6511,
                'longitude' => 6.2358,
            ],
        ];


        foreach ($runs as $run) {
            $run['organiser_id'] = 1;
            $event = Event::create($run);
            $event->participants()->attach(1);
        }
    }
}
