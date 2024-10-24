@extends('layouts.app')
@section('content')

<div class="container">
<h1 class="text-center">Please Enter Car Details</h1>
<hr>
<div>
    <form action="{{ route('cars.store') }}"method="POST">
        @csrf
        <div class="block">
            <label for="name">Car Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
            <label for="founded">Car Founded</label>
            <input type="text" name="founded" id="founded" class="form-control">
            <label for="description">Car Description</label>
            <input type="text" name="description" id="description" class="form-control " required>
            <label for="year">Car Year</label>
            <input type="text" name="year" id="year" class="form-control" required>
            <label for="model">Car Model</label>
            <input type="text" name="model" id="model" class="form-control" required>
            <label for="make">Car Make</label>
            <input type="text" name="make" id="make" class="form-control" required>
            <label for="mileage">Car Mileage</label>
            <input type="text" name="mileage" id="mileage" class="form-control" required>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>
@endsection

