<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Form</title>
</head>

<body>
    <form action="/create" method="post">
        @csrf
        <input type="text" name="student_name" />
        <button type="submit">Add Student</button>
    </form>
</body>

</html>
