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
        <div class="container">
            <h2>Uploade Files</h2>
            <form action="{{ route('form4_data') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class=" mb-4 mt-5">
                        <label for="">Name</label>
                        <input type="text" name='name' class='form-control' placeholder='User Name'>
                </div>

                <div class=" mb-4 mt-5">
                    <label for="">Uploade File</label>
                    <input type="file" name='cv' class='form-control' >
            </div>
            <button class='btn btn-success w-75'>Send </button>
            </form>
        </div>
</body>
</html>
