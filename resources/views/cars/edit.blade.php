@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Please Enter Car Details</h1>
    <hr>
    <div>
    <form method="POST" action="/cars/{{ $car->id }}">
    @csrf
    @method('PATCH')
            <div class="mb-3">
                <label for="founded" class="form-label">Founded</label>
                <input type="number" class="form-control" id="founded" name="founded" value="{{ $car->founded }}" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $car->name }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" required>{{ $car->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year of production</label>
                <input type="number" class="form-control" id="year" name="year" value="{{ $car->year }}" required>
            </div>
            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" id="model" name="model" value="{{ $car->model }}" required>
            </div>
            <div class="mb-3">
                <label for="make" class="form-label">Make</label>
                <input type="text" class="form-control" id="make" name="make" value="{{ $car->make }}" required>
            </div>
            <div class="mb-3">
                <label for="mileage" class="form-label">Mileage</label>
                <input type="number" class="form-control" id="mileage" name="mileage" value="{{ $car->mileage }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
