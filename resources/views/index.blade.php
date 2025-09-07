<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('/bootstrap-5.3.8-dist/css/bootstrap.css') }}" rel="stylesheet">
    <script src="{{ asset('/bootstrap-5.3.8-dist/js/bootstrap.js') }}" defer></script>
</head>
<body>
    <div class="container-lg">

        <div class="row row-cols-3 g-4">

            @foreach ($cars as $car)
            <div class="col-4">
                <div class="card overflow-hidden h-100">
                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('/storage/cars/' . $car->image) }}" class="object-fit-cover" alt="{{ $car->image }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->name }}</h5>
                        <p class="card-text">{{ $car->description }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
   
</body>
</html>