<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            //This zone is used to display all the cars in the database.
            $cars = Car::all();
            return view('cars.index',
            ['cars' => $cars]
        );
    }
}
        

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //This zone is used to allow a user to add a new car to the database.
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //This zone is used to store a new car in the database
        $car = new Car();
        $car->name = $request->input('name');
        $car->founded = $request->input('founded');
        $car->description = $request->input('description');
        $car->year = $request->input('year');
        $car->model = $request->input('model');
        $car->make = $request->input('make');
        $car->mileage = $request->input('mileage');
        $car->save();
        return redirect('/cars');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
        /**
 * Show the form for editing the specified resource.
 */
public function edit(string $id)

    {
        $car = Car::find($id); // Fetch the car by its ID
    
        if (!$car) {
            return redirect()->route('cars.index')->with('error', 'Car not found.');
        }
    
        return view('cars.edit')->with('car', $car);
        redirect('/cars');
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Car::find($id);
    
        if (!$car) {
            return redirect()->route('cars.index')->with('error', 'Car not found.');
        }
    
        // Validate and update the car details
        $request->validate([
            'founded' => 'required|integer',
            'name' => 'required|string',
            'description' => 'required|string',
            'year' => 'required|integer',
            'model' => 'required|string',
            'make' => 'required|string',
            'mileage' => 'required|integer',
        ]);
    
        // Update the car details
        $car->update($request->all());
    
        return redirect()->route('cars.index')->with('success', 'Car updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //This zone is used to delete a car from the database.
        $car = Car::find($id);
        $car->delete();
        return redirect('/cars');
        
        
    }
}
