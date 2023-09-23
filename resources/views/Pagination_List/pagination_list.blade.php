<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>User List!</title>
</head>

<body>
    <h1>Pagination List!</h1>
    <div class="container">
        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $all_user_list)
                    <tr>
                        <td>{{ $all_user_list->id }}</td>
                        <td>{{ $all_user_list->username }}</td>
                        <td>{{ $all_user_list->age }}</td>
                        <td>{{ $all_user_list->phone }}</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $users->links() }}
        </div>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
