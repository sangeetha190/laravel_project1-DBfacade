<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Image</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <h1>Upload the image</h1>
    <form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" />
        <button type="submit">Upload</button>

        @if (count($errors) > 0)
            <div class="alert alert-danger" role="alert">
                <strong>There are problems in uploading the image</strong>
                <ul>
                    @foreach ($errors->all as $error)
                        <li>
                            {{ $errors }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                <strong>{{ $message }}</strong>
            </div>
            <img src="images/{{ Session::get('image_name') }}" alt="upload_image" width="300" />
        @endif
    </form>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
