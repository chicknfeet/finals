<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'username' => 'admin',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Staff',
            'username' => 'staff',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Clerk',
            'username' => 'clerk',
        ]);
    }
}
