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
            <th>Age</th>
            <th>Phone</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tbody>
            @foreach ($users as $user_data)
                <tr>
                    <td>{{ $user_data->id }}</td>
                    <td>{{ $user_data->username }}</td>
                    <td>{{ $user_data->age }}</td>
                    <td>{{ $user_data->phone }}</td>
                    <td><a href="edit/{{ $user_data->id }}">Edit</a></td>
                    <td><a href="delete/{{ $user_data->id }}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
