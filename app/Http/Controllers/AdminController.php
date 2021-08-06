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
      // if ($request->email !== 'admin@admin.com' && $request->password !== 'password') {
      //
      //   dd('bad mail and password');
      // } else {
      //     if  ($request->email !== 'admin@admin.com') {
      //
      //       dd('bad mail');
      //     } else {
      //       if ($request->email === 'admin@admin.com' && $request->password !== 'password') {
      //
      //         dd('bad password');
      //       } else {
      //         return view('admin');
      //       }
      //     }
      //   }
    }
}
