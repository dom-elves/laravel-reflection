<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index()
    {
      return view('auth.login');
    }

  public function save(Request $request)
    {
      if ($request->email !== 'admin@admin.com' && $request->password !== 'password') {

        return view('auth.login');
      } else {
          if  ($request->email !== 'admin@admin.com') {

            return view('auth.login');
          } else {
            if ($request->email === 'admin@admin.com' && $request->password !== 'password') {

              return view('auth.login');
            } else {
              return view('admin');
            }
          }
        }
    }
}
