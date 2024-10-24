@extends('layouts.app')

@section('content')
<h1 class="text-center">Eloquent Practice</h1>
<hr>
<div class="text-center mb-3">
    <a href="/cars/create" class="btn btn-primary">Add Car &raquo;</a>
</div>
@foreach ($cars as $car)
<div class="text-center fw-bold d-flex flex-column justify-content-center align-items-center my-3" style= "background-color: #f2f2f2; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 500px;">
    <p>Founded: {{$car->founded}}</p>
    <p class=" text-primary">Name:{{$car->name}}</p>
    <p>Description:{{$car->description}}</p>
    <p>Year of production:{{$car->year}}</p>
    <p>Model:{{$car->model}}</p>
    <p>Make:{{$car->make}}</p>
    <p>Mileage:{{$car->mileage}}</p>
    <div class="my-3">
    <a href="/cars/{{ $car->id }}/edit" class="btn btn-primary">Edit</a>
    <a href="/cars/{{ $car->id }}/delete" class="btn btn-danger">Delete</a>
    </div>
</div>
@endforeach
@endsection