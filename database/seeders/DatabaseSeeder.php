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
        
    /*---------------IMAGE---------------*/


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            EventSeeder::class
        ]);
    }
}
