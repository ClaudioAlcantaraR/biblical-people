<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $superAdmin = User::firstOrCreate([
            'id'                => 1,
            'name'              => 'John Doe',
            'avatar'            => null,
            'email'             => 'super@admin.com',
            'email_verified_at' => null,
            'password'          => Hash::make('password'),
            'remember_token'    => null,
        ]);

        $superAdmin->assignRole('super-admin');
        $superAdmin->save();

        $admin = User::firstOrCreate([
            'id'                => 2,
            'name'              => 'Jane Doe',
            'avatar'            => null,
            'email'             => 'admin@admin.com',
            'email_verified_at' => null,
            'password'          => Hash::make('password'),
            'remember_token'    => null,
        ]);

        $admin->assignRole('author');
    }
}
