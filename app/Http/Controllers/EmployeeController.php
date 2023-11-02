<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Company;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        $company = Company::all();
        return view('employee.employee')->with(['employees' => $employees , 'company' => $company]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        //Validation Option
        $request->validate([
            'name' => 'required|string|max:50',
            'company_id' => 'required|string|max:50',
            'email' => 'nullable|string|max:50',
            'phone' => 'nullable|string|max:50',
        ]);

        //Data Store
        Employee::create($request->all());
        return back()->with('message', 'Save Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $company = Company::all();
        return view('employee.employeeEdit')->with(['employee' => $employee, 'company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        //Validation Option
        $request->validate([
            'name' => 'required|string|max:50',
            'company_id' => 'required|string|max:50',
            'email' => 'nullable|string|max:50',
            'phone' => 'nullable|string|max:50',
        ]); 

        //Data Update
        $employee->update($request->all());
        return redirect()->route('employee.index')->with('message', 'Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back()->with('delete-message', 'Delete Successfully.');
    }
}
