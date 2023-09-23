<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Form</title>
</head>

<body>
    <h2>Edit Form</h2>
    <form action="/edit/{{ $student[0]->id }}" method="post">
        @csrf
        <input type="text" name="student_name" value="{{ $student[0]->username }}" />
        <button type="submit">Edit Student</button>
    </form>
</body>

</html>
