<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::create([
            'name' => 'Jose',
            'job' => 'Agricultor', 
            'birthplace' => 'Juda',
            'birthday' => '2007-12-31',
            'deathplace' => 'Jerusalen',
            'deathdate' => '2007-12-31',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
            'tags' => 'profeta, creyente, sumosacerdote'
        ]);

        Listing::create([
            'name' => 'Maria',
            'job' => 'Predicador', 
            'birthplace' => 'Santiago',
            'birthday' => '2007-12-31',
            'deathplace' => 'Grecia',
            'deathdate' => '2007-12-31',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
            'tags' => 'profeta, creyente, sumosacerdote'
        ]);

        Listing::create([
            'name' => 'Pepe', 
            'job' => 'Albañil', 
            'birthplace' => 'San cristobal',
            'birthday' => '2007-12-31',
            'deathplace' => 'Grecia',
            'deathdate' => '2007-12-31',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
            'tags' => 'creyente, sumosacerdote'
        ]);

        Listing::create([
            'name' => 'Carlos',
            'job' => 'Pescador', 
            'birthplace' => 'Italia',
            'birthday' => '2007-12-31',
            'deathplace' => 'Grecia',
            'deathdate' => '2007-12-31',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
            'tags' => 'profeta, creyente, sumosacerdote, mayordomo'
        ]);
        
        Listing::create([
            'name' => 'Ruth',
            'job' => 'Sacerdote',
            'birthplace' => 'España',
            'birthday' => '2007-12-31',
            'deathplace' => 'Grecia',
            'deathdate' => '2007-12-31',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
            'tags' => 'sumosacerdote'
        ]);
    }
}
