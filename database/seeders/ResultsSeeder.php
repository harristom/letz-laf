<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\Result;
use Illuminate\Database\Seeder;

class ResultsSeeder extends Seeder
{
    public function run()
    {
        Result::factory(10)->create();
    }
}
