<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->username }}</td>
                <td><a href="edit/{{ $student->id }}">Edit</a></td>
                <td><a href="delete/{{ $student->id }}">Delete</a></td>
            </tr>
        @endforeach

    </table>
    <button><a href="delete_all">Delete All the data</a></button>
</body>

</html>
