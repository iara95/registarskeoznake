<?php

namespace App\Http\Controllers;

use App\permit;
use Illuminate\Http\Request;

class PermitController extends Controller
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

        $permits = Permit::all();
        return ['success' => true,
                'permits' => $permits
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
            'vrijedi_od' => 'required|date',
            'vrijedi_do' => 'required|date',
            'tehnicki_pregled' =>'required|max:255',
            'employee_id' =>'required',
            'city_id' =>'required',
            'car_id' =>'required'
        ]);

        $permit = Permit::create($input);
        return [
            'success' => true,
            'permit' => $permit
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function show(permit $permit)
    {
        return [
            'success' => true,
            'permit' => $permit
        ];
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permit $permit)
    {
        $input = $request->input();
        $permit->fill($input);
        $permit->save();
        return [
            'success' => true,
            'permit' => $permit
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $success = Permit::destroy($id) == 1; // true ili false
        return ['success' => $success];
    }
}
