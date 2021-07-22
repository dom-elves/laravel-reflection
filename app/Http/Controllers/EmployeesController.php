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

      $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:employees,email',
        'phone_number' => 'numeric',
        'company' => 'nullable|unique:employees,company'
      ]);


      $employee = new Employee; //model - tables need models
      $employee->first_name = $request->first_name;
      $employee->last_name = $request->last_name;
      $employee->email = $request->email;
      $employee->company = $request->company;
      $employee->phone_number = $request->phone_number;
      $employee->password = $request->password;
      $employee->save();

      return redirect('/employees');
    }

}
