<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee.index', [
            'employees' => Employee::paginate()
        ]);

    }
    public function create()
    {
        return view('employee.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'Name' => 'required|max:255',
            'LastName' => 'required|max:255',
            'Cargo' => 'required|max:255',
            'Pago' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0'

        ]);

        Employee::create($data);

        return back()->with('message', 'Employee created successfully');
    }
    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }
    public function update(Employee $employee, Request $request)
    {
        $data = $request->validate([
            'Name' => 'required|max:255',
            'LastName' => 'required|max:255',
            'Cargo' => 'required|max:255',
            'Pago' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0'
        ]);
        $employee->update($data);
        return back()->with('message', 'Employee updated.');
    }
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back()->with('message','Employee deleted.');
    }
}
