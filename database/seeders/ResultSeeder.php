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
        $users = User::all();

        foreach ($users as $user) {
            // Retrieve events associated with the user 
            $events = $user->eventsRegistered()->get();

            foreach ($events as $event) {
                // Create a Result instance using the factory
                $result = Result::factory()->create([
                    'user_id' => $user->id,
                    'event_id' => $event->id,
                    'finish_time' => rand(60, 3600) // Random finish time
                ]);
            }
        }
    }
}
