<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $adminRole = Role::create(['name' => 'SuperAdmin']);
        $userRole = Role::create(['name' => 'User']);

        // Create an admin user
        $adminUser = User::factory()->create([
            'name' => 'Emin Sadekin Islam',
            'email' => 'sadekinislam6@gmail.com',
            'password' => bcrypt('32133213'), // একটি নিরাপদ পাসওয়ার্ড দিন
        ]);

        // Assign the 'Admin' role to the admin user
        $adminUser->assignRole($adminRole);
    }
}
