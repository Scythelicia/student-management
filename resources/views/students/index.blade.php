<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    @vite('resources/css/app.css') <!-- Assuming you're using Vite for styles -->
</head>
<body>
    <h1>Student List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Section</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $class)
                @foreach ($class->sections as $section)
                    @foreach ($section->students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $class->name }}</td>
                            <td>{{ $section->name }}</td>
                        </tr>
                    @endforeach
                @endforeach
            @endforeach
        </tbody>
    </table>
</body>
</html>
@extends('layouts.app')

@section('content')
    <livewire:students-list />
@endsection
