@extends('layouts.public.layout')

@section('content')
    
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
                        <a href="#" class="btn btn-primary">View Vehicle</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>

@endsection