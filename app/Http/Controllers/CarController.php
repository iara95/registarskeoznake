<?php

namespace App\Http\Controllers;

use App\car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    
    protected $perpage = 10;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('per_page')) {
            $this->perPage = $request->input('per_page');}

        $cars = Car::all();
        return ['success' => true,
                'cars' => $cars
            ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'tip_vozila' => 'required|max:255',
            'marka' => 'required|max:255',
            'model'=> 'required|max:255',
            'godina_proizvodnje' => 'required|date',
            'osig_kuca' => 'required|max:255',
            'broj_police' => 'required|max:255',
            'driver_id' => 'required',
            'reg_oznaka' => 'required|max:50'
        ]);

        $car = car::create($input);
        return [
            'success' => true,
            'car' => $car
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(car $car)
    {
        return [
            'success' => true,
            'car' => $car
        ];
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $input = $request->input();
        $car->fill($input);
        $car->save();
        return [
            'success' => true,
            'car' => $car
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $success = Car::destroy($id) == 1; // true ili false
        return ['success' => $success];
    }
}
