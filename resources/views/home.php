<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and Students</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Classes and Students</h1>

    @foreach ($classes as $class)
        <h2>{{ $class->name }}</h2>
        
        @if($class->sections->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>Section Name</th>
                        <th>Student Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($class->sections as $section)
                        @foreach ($section->students as $student)
                            <tr>
                                @if($loop->first)
                                    <td rowspan="{{ $section->students->count() }}">{{ $section->name }}</td>
                                @endif
                                <td>{{ $student->name }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No sections available for this class.</p>
        @endif
    @endforeach

</body>
</html>
