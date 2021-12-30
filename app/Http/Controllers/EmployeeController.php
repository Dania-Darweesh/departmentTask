<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        //
        $employee = Employee::all();

        return view('admin.employee.index', compact('employee'));
    }


    public function create()
    {
        //
        return view('admin.employee.create');
    }


    public function store(Request $request)
    {
        //
        Employee::create([
            "name"  => $request->name,
            "dep_id"  => $request->dep_id,
            "job_title" => $request->job_title,
            "salary" => $request->salary,



        ]);
        return redirect()->route('employee.index');
    }


    public function show(Employee $employee)
    {
        //
    }


    public function edit($id)
    {
        //
        $empEdit = Employee::find($id);
        return view('admin.employee.edit', compact('empEdit'));
    }


    public function update(Request $request, $id)
    {
        //
        $empEdit = Employee::find($id);
        $empEdit->dep_id = $request->dep_id;
        $empEdit->name = $request->name;
        $empEdit->job_title = $request->job_title;
        $empEdit->salary = $request->salary;

        // call update func
        $empEdit->update();
        return redirect()->route('employee.index');
    }


    public function destroy($id)
    {
        //
        $empDestroy = Employee::find($id);
        $empDestroy->destroy($id);
        return redirect()->route('employee.index');
    }
}
