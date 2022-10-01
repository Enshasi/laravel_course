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
    {{--
    @if ($errors->any())

    <ul>
        @foreach ($errors->all() as $error )
            <li class='alert alert-danger'> {{ $error }}</li>
        @endforeach
    </ul>
    @endif
    --}}


    <div class="container mt-5">
        <h1>Form Basic</h1>
        <form action="{{ route('form3_data') }}" method="POST" autocomplete="off">
            @csrf
            <div class="my-3">
                <label for="">
                    Name
                </label>

                <input type="text" class="form-control w-75 my-3 @error('userName')

                is-invalid
                @enderror" name='userName' value="{{ old('userName') }}">
                @error('userName')
                        <small class='invalid-feedback'>{{ $message }}</small>
                @enderror
            </div>

            <div class="my-3">
                <label for="">
                    Email
                </label>

                <input type="text" class="form-control w-75 my-3
                    @error('email')
                            is-invalid
                    @enderror

                " name='email' value="{{ old('email') }}">
                @error('email')

                <small class='invalid-feedback'> {{ $message }}</small>

                @enderror
            </div>
            <div class="my-3">
                <label for="">
                    password
                </label>

                <input type="password" class="form-control w-75 my-3
                @error('password')

                is-invalid
                @enderror" name='password'>
                @error('password')

                <small class='invalid-feedback'> {{ $message }}</small>

                @enderror </div>
            </div>
            <div class="my-3">
                <label for="">
                    Confirm password
                </label>

                <input type="password" class="form-control w-75 my-3
                @error('password_confirmation')

                is-invalid
                @enderror
                " name='password_confirmation'>

                @error('password_confirmation')

                <small class='invalid-feedback'> {{ $message }}</small>

                @enderror
                </div>

            <div class="text-center">
                <button class='btn btn-success mt-4'>Send</button>
            </div>
        </form>
    </div>
</body>
</html>
