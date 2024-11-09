<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class StudentsList extends Component
{
    public $students;

    public function mount()
    {
        // Fetch students with their related section
        $this->students = Student::with('section')->get();
    }

    public function render()
    {
        return view('livewire.students-list');
    }
}

