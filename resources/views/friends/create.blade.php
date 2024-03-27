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

        <h4 class="text-center mt-5">ADD FRIEND</h4>

        <form action="{{ route('friend.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            {{-- Friends Name --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="name">Friend Name :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="col-md-4">
                    @error('name')
                        {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>

            </div>

            {{-- Friends Address --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="address">Address :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="address" id="address" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('address')
                        {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- Friend mobile no --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="mobile">Phone :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="mobile" id="mobile" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('mobile')
                        {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="date_of_birth">Date of birth :</label>
                </div>
                <div class="col-md-4">
                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('date_of_birth')
                        {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- Friend Email --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="email">Email :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('email')
                        {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>


            {{-- blood group --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="blood_group">Blooad Group :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="blood_group" id="blood_group" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('blood_group')
                    {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                    <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="image">Image :</label>
                </div>
                <div class="col-md-4">
                    <input type="file" name="image_url" id="image" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('image_url')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="image">My Image :</label>
                </div>
                <div class="col-md-4">
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('image')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- button --}}
            <div class="row mt-3">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <button type="reset" class="btn btn-warning">Rreset</button>
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </div>
        </form>
    </div>


    {{-- bootstarpjs cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
