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
            'birthplace' => 'Juda',
            'birthday' => '2007-12-31',
            'deathplace' => 'Jerusalen',
            'deathdate' => '2007-12-31',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
            'tags' => 'tag1, tag2, tag3'
        ]);

        Listing::create([
            'name' => 'Maria', 
            'birthplace' => 'Santiago',
            'birthday' => '2007-12-31',
            'deathplace' => 'Grecia',
            'deathdate' => '2007-12-31',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
            'tags' => 'tag1, tag2, tag3'
        ]);

        Listing::create([
            'name' => 'Pepe', 
            'birthplace' => 'San cristobal',
            'birthday' => '2007-12-31',
            'deathplace' => 'Grecia',
            'deathdate' => '2007-12-31',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
            'tags' => 'tag1, tag2, tag3'
        ]);

        Listing::create([
            'name' => 'Carlos', 
            'birthplace' => 'Italia',
            'birthday' => '2007-12-31',
            'deathplace' => 'Grecia',
            'deathdate' => '2007-12-31',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
            'tags' => 'tag1, tag2, tag3'
        ]);
        
        Listing::create([
            'name' => 'Ruth', 
            'birthplace' => 'España',
            'birthday' => '2007-12-31',
            'deathplace' => 'Grecia',
            'deathdate' => '2007-12-31',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
            'tags' => 'tag1, tag2, tag3'
        ]);
    }
}
