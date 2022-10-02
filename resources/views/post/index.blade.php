<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
</head>
<body>
    <div class="container mt-5">
        <table class="table table-bordered table-hover">
            <tr class='table-dark'>
                <th>id</th>
                <th>Name</th>
                <th>Content</th>
                <th>Created At </th>
                <th>Updated At </th>
                <td>Action </td>
            </tr>
            @foreach ($posts as $post )

            <tr>
                <td>{{$loop->iteration }}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>
                    <a href="#" class='btn btn-success'>
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class='btn btn-danger'>
                        <i class="fas fa-archive"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
