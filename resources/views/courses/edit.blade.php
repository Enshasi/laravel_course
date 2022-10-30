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
        <div class="d-flex justify-content-between align-items-center">
            <h1 class='mb-5'>Edit Data</h1>
            <a href="{{ route('courses.index') }}" class='btn btn-success mb-5    '>
                All Posts
            </a>
        </div>
        <form action="{{ route('courses.update',$courses->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" placeholder="Name.." class='form-control' name='name' value='{{ $courses->name }}'>
                </div>

                <div class="mb-3">
                    <textarea name="content" id="mytextarea" cols="30" rows="10" >{{ $courses->content }}</textarea>
                </div>
                <button class="btn btn-success" >
                    Update
                </button>
        </form>

    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.2.0/tinymce.min.js" integrity="sha512-tofxIFo8lTkPN/ggZgV89daDZkgh1DunsMYBq41usfs3HbxMRVHWFAjSi/MXrT+Vw5XElng9vAfMmOWdLg0YbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
</body>
</html>
