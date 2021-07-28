<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompaniesController extends Controller
{

  public function create()
    {
      return view('manage.companies');
    }

  public function save(Request $request)
    {

      $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:companies,email',
        // 'logo' => 'image',
        'website' => 'required'
      ]);

      $company = new Company; //model - tables need models
      $company->id = $request->id;
      $company->name = $request->name;
      $company->email = $request->email;
      $company->logo = $request->logo;
      $company->website = $request->website;
      $company->save();

      return redirect('/companies');
    }
    public function destroy($id)
      {
        $employee=Company::find($id);
        $employee->delete();
        dd('success');
      }
}
