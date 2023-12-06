<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{
        
    /*---------------USER---------------*/
        //fake users
        User::factory(2)->create();

        //vania
        $user = User::factory()->create([
            'first_name' => 'Vania',
            'last_name' => 'Barbosa',
            'birthdate' => '2001-04-24',
            'gender' => 'Female',
            'role' => 'Member',
            'email' => 'vania@example.com',
            'password' => bcrypt('vania'),
            
        ]);
        //Tom
        //Jaria
        //Marcia
        //Kam

    /*---------------POST---------------*/
        //fake posts
        Post::factory(5)->create();
        //created manually post
        //create a new post manually
        Post::factory()->create([
            'user_id' => $user->id,
            'title' => ' Lace Up for Luxury: Exclusive Running Events Unveiled on LëtzLaf',
            'content' => "Luxembourg, get ready to hit the ground running! LëtzLaf is proud to present a lineup of exclusive running events set against the picturesque backdrop of our beautiful country.
            Discover a calendar filled with meticulously curated running experiences that cater to every level of enthusiast. From scenic trail runs through Luxembourg's stunning landscapes to city marathons with a touch of grandeur, we've handpicked events that promise both fitness and luxury.
            Immerse yourself in the thrill of the run, surrounded by the rich cultural tapestry and natural beauty that Luxembourg has to offer. Whether you are a seasoned marathoner or a casual jogger, our events are designed to provide a unique and unforgettable experience.
            Stay ahead of the pack by checking our website for event details, registration information, and exclusive insights. Lace up your running shoes, Luxembourg a month of unparalleled running awaits you!",
            'image_path' => 'luxembourg.png',
        ]);

    /*---------------EVENT---------------*/
        //call EventSeeder.php
        $this->call([
            EventSeeder::class
        ]);
    }
}
