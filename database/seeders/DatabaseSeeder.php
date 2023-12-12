<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Result;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        /*---------------USER---------------*/
        //fake users
        User::factory(5)->create();

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
        //Post::factory(5)->create();
        //created manually post
        //create a new post manually
        Post::factory()->create(
            [
                'user_id' => $user->id,
                'title' => ' Lace Up for Luxury: Exclusive Running Events Unveiled on LëtzLaf',
                'content' => "Luxembourg, get ready to hit the ground running! LëtzLaf is proud to present a lineup of exclusive running events set against the picturesque backdrop of our beautiful country.Discover a calendar filled with meticulously curated running experiences that cater to every level of enthusiast. From scenic trail runs through Luxembourg's stunning landscapes to city marathons with a touch of grandeur, we've handpicked events that promise both fitness and luxury.
             Immerse yourself in the thrill of the run, surrounded by the rich cultural tapestry and natural beauty that Luxembourg has to offer. Whether you are a seasoned marathoner or a casual jogger, our events are designed to provide a unique and unforgettable experience.Stay ahead of the pack by checking our website for event details, registration information, and exclusive insights. Lace up your running shoes, Luxembourg a month of unparalleled running awaits you!",
                'image_path' => 'luxembourg.png',
            ]
        );
        Post::factory()->create(
            [
                'user_id' => $user->id,
                'title' => ' LëtzLaf Marathon Takes Luxembourg by Storm for its 1st Anniversary!',
                'content' => "Luxembourg City witnessed an exhilarating spectacle as thousands of enthusiastic runners congregated for the grand celebration of the 1st edition of the LëtzLaf Marathon. The city's streets were transformed into a vibrant tapestry of athleticism, determination, and community spirit on Sunday as participants from across the globe flocked to take part in this monumental event.
                The LëtzLaf Marathon, known for its scenic routes and spirited atmosphere, showcased the picturesque beauty of Luxembourg, drawing both seasoned athletes and amateur runners eager to challenge themselves against the backdrop of the city's stunning landscapes. Participants embraced the challenge with fervor, ranging from the 5K fun run to the grueling 42-kilometer marathon, showcasing the inclusivity of this sporting extravaganza.The winners of the various categories were celebrated amidst roaring applause, but the true spirit of the LëtzLaf Marathon was the camaraderie and personal triumphs achieved by every participant who crossed the finish line.",
                'image_path' => 'luxembourg.png',
            ]
        );
        Post::factory()->create(
            [
                'user_id' => $user->id,
                'title' => ' Trail Run Challenges Participants with Breathtaking Routes',
                'content' => "Luxembourg's natural beauty took center stage during the recent LëtzLaf Trail Run, an event that showcased the country's picturesque landscapes while pushing runners to their limits. The rugged trails, winding through dense forests and rolling hills, provided the perfect backdrop for this adrenaline-fueled adventure.
                 Participants embraced the challenge across various categories, from the moderate 10K to the demanding 30K trail run, showcasing their endurance and love for nature. The LëtzLaf Trail Run, organized by LëtzLaf Sports Association, aimed to promote both physical fitness and an appreciation for Luxembourg's stunning terrain.Runners navigated through challenging terrains, encountering steep ascents and thrilling descents, all while being surrounded by the breathtaking beauty of the Luxembourgish countryside. The event not only tested their physical prowess but also offered a unique opportunity to connect with nature.Participants emerged from the trails with a sense of accomplishment, having conquered the demanding course and experienced the thrill of trail running amidst such awe-inspiring scenery.
                 The success of the LëtzLaf Trail Run highlighted the growing popularity of trail running as a sport that allows athletes to challenge themselves while immersing in the serenity of nature.
                 Event coordinator Thomas Wagner expressed his delight at the overwhelming response to the trail run, emphasizing the importance of fostering a deeper connection between individuals and the environment through sporting events like these.",
                'image_path' => 'luxembourg.png',
            ]
        );

        /*---------------EVENT---------------*/
        //call EventSeeder.php
        $this->call([
            EventSeeder::class,
            ResultSeeder::class
        ]);

        /*---------------RESULTS---------------*/
        Result::create([
            'user_id' => 6,
            'event_id' => 1,
            'finish_time' => 2780
        ]);
        Result::create([
            'user_id' => 6,
            'event_id' => 2,
            'finish_time' => 4780
        ]);
        Result::create([
            'user_id' => 6,
            'event_id' => 3,
            'finish_time' => 3580
        ]);
        Result::create([
            'user_id' => 2,
            'event_id' => 3,
            'finish_time' => 1134
        ]);

        
    }
}
