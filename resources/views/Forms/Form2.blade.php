<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Form Basic</h1>
        <form action="{{ route('form2_data') }}" method="POST">
            @csrf
            <div class="my-3">
                <label for="">
                    Name
                </label>

                <input type="text" class="form-control w-75 my-3" name='userName'>
            </div>
            <div class="my-3">
                <label for="">
                    Email
                </label>

                <input type="email" class="form-control w-75 my-3" name='email'>
            </div>

            <div class="my-3">
                <label for="">
                    Age
                </label>
                @csrf
                <input type="text" class="form-control w-75 my-3" name='age'>
            </div>
            <div class="text-center">
                <button class='btn btn-success mt-4'>Send</button>
            </div>
        </form>
    </div>
</body>
</html>
