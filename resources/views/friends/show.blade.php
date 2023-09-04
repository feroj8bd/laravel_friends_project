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
        <div class="mt-3">
            <a href="{{ url('/') }}" class="btn btn-success">Home</a>
            <a href="{{ route('friend.create') }}" class="btn btn-success">Add Friend</a>
            <a href="{{ route('friend.index') }}" class="btn btn-info">See All Friends</a>
        </div>

        @if (Session::has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{ Session::get('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h4 class="text-center mt-5">See Friend Information</h4>

        <div class="row">
            <div class="col-md-2">Name :</div>
            <div class="col-md-4">{{ $friends->name }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Address :</div>
            <div class="col-md-4">{{ $friends->address }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Phone :</div>
            <div class="col-md-4">{{ $friends->mobile }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Email :</div>
            <div class="col-md-4">{{ $friends->email }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Blood Group :</div>
            <div class="col-md-4">{{ $friends->blood_group }}</div>
        </div>

    </div>


    {{-- bootstarpjs cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
