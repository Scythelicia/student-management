<?php

namespace App\Http\Livewire\Students;

use Livewire\Component;
use App\Models\Student;
use App\Models\Classroom; // Assuming you have a Classroom model
use App\Models\Section;  // Assuming you have a Section model

class Create extends Component
{
    public $form = [
        'name' => '',
        'email' => '',
        'class_id' => '',
        'section_id' => '',
    ];

    public $classes;
    public $sections;

    // Mount function to load classes and sections
    public function mount()
    {
        $this->classes = Classroom::all(); // Fetch all classrooms
        $this->sections = Section::all(); // Fetch all sections
    }

    // Method to handle student addition
    public function addStudent()
    {
        // Validate form data
        $validatedData = $this->validate([
            'form.name' => 'required|string|max:255',
            'form.email' => 'required|email|unique:students,email',
            'form.class_id' => 'required|exists:classes,id',
            'form.section_id' => 'required|exists:sections,id',
        ]);

        // Add the student to the database
        Student::create([
            'name' => $this->form['name'],
            'email' => $this->form['email'],
            'class_id' => $this->form['class_id'],
            'section_id' => $this->form['section_id'],
        ]);

        // Emit a success message
        $this->emit('studentAdded', 'Student has been added successfully!');
    }

    // Render the view
    public function render()
    {
        return view('livewire.students.create');
    }
    public function addStudent()
{
    $validatedData = $this->validate([
        'form.name' => 'required|string|max:255',
        'form.email' => 'required|email|unique:students,email',
        'form.class_id' => 'required|exists:classes,id',
        'form.section_id' => 'required|exists:sections,id',
    ]);

    // Add student to database
    Student::create([
        'name' => $this->form['name'],
        'email' => $this->form['email'],
        'class_id' => $this->form['class_id'],
        'section_id' => $this->form['section_id'],
    ]);

    // Emit the success message
    $this->emit('studentAdded', 'Student has been added successfully!');
}

}

