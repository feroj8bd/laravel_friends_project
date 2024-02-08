<!DOCTYPE html>
<html>

<head>
    {{-- bootstarp cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>FRIENDS</title>
</head>

<body>
    <div class="container">
        @include('allmenu')


        @if (Session::has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{ Session::get('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h4 class="text-center mt-5">View all types of gifts </h4>

        <table class="table">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Type Of Gift</th>
                    <th>Gift Size</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $type->type_id }}</td>
                        <td>{{ $type->gift_type }}</td>
                        <td>{{ $type->gift_size }}</td>
                        <td>{{ $type->image }}</td>

                        <td>
                            <a href="{{ route('type.show', $type->id) }}" class="btn btn-info">Show</a>

                            <a href="{{ route('type.edit', $type->id) }}" class="btn btn-warning">Edit</a>

                            <a href="{{ route('type.destroy', $type->id) }}" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- {{ $friends->links() }} --}}

    </div>


    {{-- bootstarpjs cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
