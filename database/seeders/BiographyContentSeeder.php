<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiographyContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rich_texts')->insert([
            'id'                => 1,
            'record_type'       => 'App\Models\Listing',
            'record_id'         => 1,
            'field'             => 'content',
            'body'              => '<div>lorem ipsum dolor sit amet</div>',
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
    }
}
