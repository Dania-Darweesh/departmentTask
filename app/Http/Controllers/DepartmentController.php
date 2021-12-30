<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{


    public function index()
    {
        //
        $department = Department::all();
        return view('admin.department.index', compact('department'));
    }


    public function create()
    {
        //
        return view('admin.department.create');
    }


    public function store(Request $request)
    {
        //
        Department::create([      //Movies :the name of the model
            "dep_name"  => $request->dep_name,



        ]);
        return redirect()->route('department.index');
    }


    public function show(Department $department)
    {
        //
    }


    public function edit($id)
    {
        //
        $depEdit = Department::find($id);
        return view('admin.department.edit', compact('depEdit'));
    }



    public function update(Request $request, $id)
    {
        //
        $depEdit = Department::find($id);

        $depEdit->dep_name = $request->dep_name;

        // call update func
        $depEdit->update();
        return redirect()->route('department.index');
    }


    public function destroy($id)
    {
        //
        $dempDestroy = Department::find($id);
        $dempDestroy->destroy($id);
        return redirect()->route('department.index');
    }
}
