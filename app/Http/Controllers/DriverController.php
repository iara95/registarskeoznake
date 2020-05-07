<?php

namespace App\Http\Controllers;

use App\driver;
use Illuminate\Http\Request;

class DriverController extends Controller
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

        $drivers = Driver::all();
        return ['success' => true,
                'drivers' => $drivers
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
            'oib' => 'required|unique:drivers|max:11',
            'ime' => 'required|max:255',
            'prezime' => 'required|max:255',
        ]);

        $driver = Driver::create($input);
        return [
            'success' => true,
            'driver' => $driver
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        return [
        'success' => true,
        'driver' => $driver
    ];
        
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        $input = $request->input();
        $driver->fill($input);
        $driver->save();
        return [
            'success' => true,
            'driver' => $driver
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $success = Driver::destroy($id) == 1; // true ili false
        return ['success' => $success];
    }
}
