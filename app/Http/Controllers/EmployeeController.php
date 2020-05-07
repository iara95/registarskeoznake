<?php

namespace App\Http\Controllers;

use App\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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

        $employees = Employee::all();
        return ['success' => true,
                'employees' => $employees
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
            'ime' => 'required|max:255',
            'prezime' => 'required|max:255',
            'oib' => 'required|unique:drivers|max:11',
            'user_id' => 'required'
        ]);

        $employee = Employee::create($input);
        return [
            'success' => true,
            'employee' => $employee
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        return [
            'success' => true,
            'employee' => $employee
        ];
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        $input = $request->input();
        $employee->fill($input);
        $employee->save();
        return [
            'success' => true,
            'employee' => $employee
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $success = Employee::destroy($id) == 1; // true ili false
        return ['success' => $success];
    }
}
