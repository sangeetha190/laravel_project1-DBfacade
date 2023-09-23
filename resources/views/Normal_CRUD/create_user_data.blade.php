<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create User Data using</title>
</head>

<body>
    <form action="/normal/store" method="POST">
        @csrf
        <label for="">Name</label><input type="text" name="username">
        <label for="">Age</label><input type="text" name="age">
        <label for="">Phone</label><input type="text" name="phone">
        <button>ADD DATA</button>
    </form>

</body>

</html>
