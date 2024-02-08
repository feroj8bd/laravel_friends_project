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

        <h4 class="text-center mt-5">See Your Gift </h4>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4"><img  width="100px" src="{{ asset('storage/'. $gifts->image) }}" alt=""></div>
        </div>

        <div class="row">
            <div class="col-md-2">Name :</div>
            <div class="col-md-4">{{ $gifts?->friend?->name }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Type of Gift :</div>
            <div class="col-md-4">{{ $gifts->gift_type }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Date of gift :</div>
            <div class="col-md-4">{{ $gifts->gift_date }}</div>
        </div>



       

      

    </div>


    {{-- bootstarpjs cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
