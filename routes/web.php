<?php

use App\Models\Classes;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\StudentsList;

// Use the Livewire component for the students page
Route::get('/students', StudentsList::class);


// Fetch classes with sections and students, and pass them to the 'home' view
Route::get('/', function () {
    $classes = Classes::with('sections.students')->get();
    return view('home', compact('classes'));
});

// Additional routes for about and contact pages
Route::get('/about', function () {
    return view("about");
});

Route::get('/contact', function () {
    return view("contact");
});

