<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class LoginController extends Controller
{


  public function create()
    {
      return view('auth.signup');
    }

  public function save(Request $request)
    {

      $employee = new Employee; //model - tables need models
      $employee->first_name = $request->first_name;
      $employee->last_name = $request->last_name;
      $employee->email = $request->email;
      $employee->password = $request->password;
      $employee->save();

      return redirect('/thankyou');
    }

}
