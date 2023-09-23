<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert ID</title>
</head>

<body>
    <form action="{{ route('insert_id') }}" method="POST">
        @csrf
        <input type="text" name="name" />
        <button type="submit">Add the name</button>
    </form>
    @if ($insert_id = Session::get('insert_id'))
        <p>Sucess! Last Inset Id is {{ $insert_id }}</p>
    @endif
</body>

</html>
