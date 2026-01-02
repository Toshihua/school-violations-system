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
     */
    public function run(): void
    {
        // Default Admin User
        User::create([
            'first_name' => 'Admin',
            'last_name'  => 'Admin',
            'school_id'  => '2026-00001-MN-0',
            'email'      => 'admin@pup.edu.ph',
            'password'   => Hash::make('secret'),
            'role_id'    => DB::table('roles')->where('role_name', 'Faculty')->value('id'),
        ]);

        // Default Student User
        User::create([
            'first_name' => 'Student',
            'last_name'  => 'Student',
            'school_id'  => '2026-00001-MN-0',
            'email'      => 'student@iskolarngbayan.pup.edu.ph',
            'password'   => Hash::make('secret'),
            'role_id'    => DB::table('roles')->where('role_name', 'Student')->value('id'),
        ]);

        User::factory()->count(20)->create();
    }
}
