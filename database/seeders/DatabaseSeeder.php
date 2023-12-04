<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory(5)->create();

        //vania
        User::factory()->create([
        'first_name' => 'Vania',
        'last_name' => 'Barbosa',
        'birthdate' => '2001-04-24',
        'gender' => 'Female',
        //'user_type' => 'admin',
        //'user_type' => 2,
        'email' => 'vania@example.com',
        'password' => bcrypt('vania'),
        ]);
        //Tom
        //Jaria
        //Marcia
        //Kam

    /*---------------title---------------*/
    }
}
