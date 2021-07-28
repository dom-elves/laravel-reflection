<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{

  public function create()
    {
      return view('manage.employees');
    }



  public function save(Request $request)
    {
      // dd('test');
      $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:employees,email',
        'phone_number' => 'numeric',
        'company' => 'nullable|unique:employees,company'
      ]);
      // dd('test');
      $employee = new Employee; //model - tables need models
      $employee->first_name = $request->first_name;
      $employee->last_name = $request->last_name;
      $employee->email = $request->email;
      $employee->company = $request->company;
      $employee->phone_number = $request->phone_number;
      $employee->password = $request->password;
      $employee->save();
      // dd('test');
      return redirect('/employees-list');
    }



  public function destroy($id)
    {
      $employee = Employee::find($id);
      $employee->delete();

      return redirect('/employees-list');
    }



  public function edit($id)
    {
      $employee = Employee::find($id);
      return view('manage.edit' , ['employee' => $employee]);
    }



  public function update(Request $request, $id)
    {
      $employee = Employee::find($id);
      $employee->first_name = $request->first_name;
      $employee->last_name = $request->last_name;
      $employee->email = $request->email;
      $employee->company = $request->company;
      $employee->phone_number = $request->phone_number;
      $employee->save();

      return redirect('/employees-list');
    }
}
