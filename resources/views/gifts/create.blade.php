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

        <h4 class="text-center mt-5">ADD Gift</h4>

        <form action="{{ route('gift.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            {{-- Friends Name --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="name">Friend Name :</label>
                </div>
                <div class="col-md-4">
                    <select name="friend_id" id="" class="form-control">
                        <option value="">--Select one--</option>
                        @foreach ($friends as $friend)
                            <option value="{{ $friend->id }}">{{ $friend->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    @error('friend_id')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>

            </div>

            {{-- Friends gift type --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="address" >Type of gift :</label>
                </div>
                <div class="col-md-4">
                    <select name="friend_id" id="" class="form-control">
                        <option value="">--Select one--</option>
                        @foreach ($gifts as $gift)
                            <option value="{{ $gift->id }}">{{ $gift->gift_type }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-md-4">
                    @error('gift_type')
                        {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- Friend gift_date --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="mobile">Date of Gift :</label>
                </div>
                <div class="col-md-4">
                    <input type="date" name="gift_date" id="mobile" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('gift_date')
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
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('image')
                        {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="image">Friend Image :</label>
                </div>
                <div class="col-md-4">
                    <input type="file" name="friend_image" id="friend_image" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('friend_image')
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
