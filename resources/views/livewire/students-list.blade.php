<div>
    <h1>Students List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Section</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->section->name ?? 'No Section' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
