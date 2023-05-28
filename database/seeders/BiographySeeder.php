<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiographySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Listing::updateOrCreate([
            'id'            => 1,
            'user_id'       => 1,
            'name'          => 'Jose',
            'job'           => 'Agricultor',
            'birthplace'    => 'Juda',
            'birthday'      => '2007',
            'deathplace'    => 'Jerusalen',
            'deathdate'     => '2007',
            'tags'          => 'profeta, creyente, sumosacerdote',
        ]);
    }
}
