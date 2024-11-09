<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Student;

class ClassesSeeder extends Seeder
{
    public function run()
    {
        Classes::factory()
            ->count(10)
            ->has(
                Section::factory()
                    ->count(2)
                    ->state(new Sequence(
                        ['name' => 'Section A'],
                        ['name' => 'Section B']
                    ))
                    ->has(Student::factory()->count(5))
            )->create();
    }
}

