<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact-Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" />
    </head>
<body>
    @include('Forms.error_global')
    <div class="container mt-5">
        <h1>Contact Us</h1>
            <form action="{{ route('contact') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name='name' placeholder="Name" class='form-control'>
                </div>

                <div class="mb-3">
                    <label for="">Email</label>

                    <input type="email" name='email' placeholder="email" class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="">Phone</label>

                    <input type="text" name='phone' placeholder="phone" class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="">Message</label>

                        <textarea name="message" cols="30" rows="10" class='form-control'></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Uplode Image </label>
                        <input type="file" name="cv" >
                </div>
                <button class="btn btn-primary w-25 mb-5 ">
                    Send
                </button>
            </form>
    </div>
</body>
</html>
