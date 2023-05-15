<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Server Admin',
            'slug' => 'server',
        ]);

        Role::create([
            'name' => 'Super Admin',
            'slug' => 'super',
        ]);

        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
        ]);
    }
}
