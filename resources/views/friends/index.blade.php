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

        <h4 class="text-center mt-5">See ALL FRIENDS </h4>

        <table class="table">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Date of Birth</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Boold Group</th>
                    <th>Image</th>
                    <th>My Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($friends as $friend)
                    <tr>
                        <td>{{ $friends->firstItem() + $loop->index }}</td>
                        <td>{{ $friend->name }}</td>
                        <td>{{ $friend->mobile }}</td>
                        <td>{{ $friend->date_of_birth }}</td>
                        <td>{{ $friend->email }}</td>
                        <td>{{ $friend->address }}</td>
                        <td>{{ $friend->blood_group }}</td>
                        <td>
                            <!-- Display image_url -->
                            @if ($friend->image_url)
                                <img src="{{ asset('storage/' . $friend->image_url) }}" width="100px" alt="{{ $friend->name }}">
                            @endif
                        </td>
                        <td>
                            <!-- Display image -->
                            @if ($friend->image)
                                <img src="{{ asset('storage/' . $friend->image) }}" width="100px" alt="{{ $friend->name }}">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('friend.show', $friend->id) }}" class="btn btn-info">Show</a>

                            <a href="{{ route('friend.edit', $friend->id) }}" class="btn btn-warning">Edit</a>

                            <a href="{{ route('friend.delete', $friend->id) }}" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $friends->links() }}

    </div>


    {{-- bootstarpjs cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
