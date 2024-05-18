<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Test user
        $user_test = new User;
        $user_test->name = 'Test';
        $user_test->email = 'test@test.com';
        $user_test->password = 'testpass';
        $user_test->picture = 'default_profile.png';
        $user_test->access_level = 0;
        $user_test->save();

        // Admin user
        $user_admin = new User;
        $user_admin->name = 'Admin';
        $user_admin->email = 'admin@admin.com';
        $user_admin->password = 'adminpass';
        $user_admin->picture = 'default_profile.png';
        $user_admin->access_level = 1;
        $user_admin->save();

        User::factory()->count(5)->create();
    }
}
