<?php

namespace App\Http\Controllers;

use App\city;
use Illuminate\Http\Request;

class CityController extends Controller

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

        $cities = City::all();
        return ['success' => true,
                'cities' => $cities
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
            'name' => 'required|unique:cities|max:255',
            'zip' => 'required|max:5',
        ]);

        $city = City::create($input);
        return [
            'success' => true,
            'city' => $city
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        return [
            'success' => true,
            'city' => $city
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $input = $request->input();
        $city->fill($input);
        $city->save();
        return [
            'success' => true,
            'city' => $city
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $success = City::destroy($id) == 1; // true ili false
        return ['success' => $success];
    }
}
