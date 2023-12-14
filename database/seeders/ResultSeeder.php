<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use App\Models\Result;
use Illuminate\Database\Seeder;

class ResultSeeder extends Seeder
{
    public function run()
    {
        // $users = User::all();

        // foreach ($users as $user) {
        //     // Retrieve events associated with the user 
        //     $events = $user->eventsRegistered()->get();
            $events = Event::all();
            foreach ($events as $event) {
                if ($event->date > now()) continue;
                // Create a Result instance using the factory
                Result::factory()->create([
                    'user_id' => 1,
                    'event_id' => $event->id,
                    'finish_time' => rand(60, 3600) // Random finish time
                ]);
            }
        // }
    }
}
