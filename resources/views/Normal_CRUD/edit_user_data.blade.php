<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User Data using Eloquent</title>
</head>

<body>
    <h1>Edit User Data using Eloquent</h1>
    <form action="{{ url('/normal/update/' . $user->id) }}" method="POST">
        @csrf
        <label for="">Name</label><input type="text" name="username" value={{ $user->username }}>
        <label for="">Age</label><input type="text" name="age" value={{ $user->age }}>
        <label for="">Phone</label><input type="text" name="phone" value={{ $user->phone }}>
        <button>Edit DATA</button>
    </form>

</body>

</html>
