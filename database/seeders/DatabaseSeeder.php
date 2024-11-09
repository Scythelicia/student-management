<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // This is important
use Database\Seeders\ClassesSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(ClassesSeeder::class);
    }
}

