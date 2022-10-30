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
    <div class="container mb-5 mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class='mb-5'>Basic Table Show </h1>
            <a href="{{ route('courses.create') }}" class='btn btn-success mb-5    '>
                Create Posts
            </a>
        </div>
        @if (session('msg'))
        <div class='alert alert-success'>
            {{session('msg') }}
    </div>
        @endif


        <form action="{{ route('courses.index') }}" method='get' >
            <div class="input-group mb-3">
                <input type="text"  value= '{{ request()->search }}' name='search' class="form-control" placeholder="Search ...." >

                <select name="count">
                    <option {{ request()->count == 10?'selected':'' }} value="10">10</option>
                    <option {{ request()->count == 15?'selected':'' }} value="15">15</option>
                    <option {{ request()->count == 20?'selected':'' }} value="20">20</option>
                    <option {{ request()->count == 25?'selected':'' }} value="25">25</option>
                    <option {{ request()->count == $courses->total()?'selected':'' }} value="{{ $courses->total() }}">All</option>
                </select>

                <button class="btn btn-dark" type="submit" id="button-addon2">Button</button>

            </div>

        </form>
        <table class="table table-bordered table-hover">
            <tr class='table-dark'>
                <th>id</th>
                <th>Name</th>

                <th>Content</th>
                <th>Created At </th>
                <th>Updated At </th>
                <td>Action </td>
            </tr>
            @foreach ($courses as $course )

            <tr>
                <td>{{$course->id }}</td>

                <td>{{$course->name}}</td>

                <td>{{!! $course->content !!}}</td>
                <td>{{$course->created_at}}</td>
                <td>{{$course->updated_at}}</td>
                <td>
                    <form action="{{ route('courses.edit', $course->id) }}" method='get' class='d-inline'>
                        @csrf

                    <button class='btn btn-success' >
                        <i class="fas fa-archive"></i>
                    </button>
                    </form>

                    <form action="{{ route('courses.destroy', $course->id) }}" method='post' class='d-inline'>
                        @csrf
                        @method('delete')
                    <button class='btn btn-danger' onclick='return confirm("Are Your Sure in Delte")'>
                        <i class="fas fa-archive"></i>
                    </button>
                    </form>
                </td>

            </tr>
            @endforeach
        </table>
        {{ $courses->appends($_GET)->links()  }}
    </div>

{{-- //library sweet alert  // Dont Forget https:--}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
   @if (session('msg'))
   Swal.fire(
        'Good job!',
        '{{ session("msg") }}',
        'success'
    )
   @endif

</body>
</html>
