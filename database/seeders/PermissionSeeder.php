<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions for Users to Biography
        Permission::firstOrCreate([
            'name' => 'create-biography'
        ]);
        Permission::firstOrCreate([
            'name' => 'read-biography'
        ]);
        Permission::firstOrCreate([
            'name' => 'update-biography'
        ]);
        Permission::firstOrCreate([
            'name' => 'delete-biography'
        ]);

        //Assign permissions to author
        $author = Role::where('name', 'author')->first();
        $author->syncPermissions([
            'create-biography',
            'read-biography',
            'update-biography',
            'delete-biography',
        ]);
    }
}
