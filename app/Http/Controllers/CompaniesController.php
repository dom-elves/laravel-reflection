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
        // 'email' => 'required|email|unique:companies,email',
        // 'logo' => 'image',
        'website' => 'required'
      ]);

      $company = new Company; //model - tables need models
      $company->id = $request->id;
      $company->name = $request->name;
      $company->email = $request->email;
      $company->logo = $request->logo->storeAs('public', $request->logo->getClientOriginalName());
      $company->website = $request->website;
      $company->save();

      return redirect('/companies-list');
    }

    public function destroy($id)
      {
        $company=Company::find($id);
        $company->delete();
        return view('/delete');
      }


    public function edit($id)
      {
        $company = Company::find($id);
        return view('manage.edit-companies' , ['company' => $company]);
      }


    public function update(Request $request, $id)
      {
        $company = Company::find($id);
        $company->id = $request->id;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->logo = $request->logo;
        $company->website = $request->website;
        $company->save();

        return redirect('/companies-list');
      }

     public function logos($id)
       {
         $company = Company::find($id);
         // $logo = $company->file->('logo')->storeAs($company->logo->getClientOriginalName());
         $logo = $company->logo->storeAs('public', $company->logo->getClientOriginalName());

         return view('manage.company-logos' , ['logo' => $company]);
       }


}
