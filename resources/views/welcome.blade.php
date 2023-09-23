<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body class="antialiased">
    <h1>Sample</h1>
    {{-- Delete Images Starts --}}
    <h2>Delete Image From Public</h2>
    <p><a href="{{ url('deletefile/public') }}">Delete Image from Public</a></p>
    <p><a href="{{ url('deletefile/storage') }}">Delete Image from Storage</a></p>
    {{-- Delete Images Ends --}}
</body>
</html>
