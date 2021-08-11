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
      $company->logo = $request->logo->getClientOriginalName();
      $company->website = $request->website;
      $company->save();

      return redirect('/save');
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


        return view('/save');
      }

     public function logos(Request $request, $id)
       {
          $company = Company::find($id);
          $logo = $company->logo;

          $link = asset('public/storage' . '/'.$logo );



         return view('manage.company-logos')->with('logo', $logo);
       }


}
