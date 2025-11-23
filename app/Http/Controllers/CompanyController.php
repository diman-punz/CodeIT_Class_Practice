<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function table() {
    $companies = Company::all();
    return view('company.table',compact ('companies'));
    }

    public function create() {
    return view('company.create');
    }
    
    public function save(Request $request){
    $company = new Company();
    $company->name = $request->name;
    $company->email = $request->email;
    $company->contact = $request->contact;
    $company->address = $request->address;
    $image = $request->image;
    if($image){
        $imageName = time().$image->getClientOriginalName();
        $image->move('images/',$imageName);
        $company->image =  "images/$imageName";
    }
    $company->save();
    toast("Company added successfully","success");
    return redirect('/');
    }

    public function edit($id){
    $company = Company::find($id);
    return view('company.edit',compact('company'));
    }

    public function update(Request $request, $id) {
    $company = Company::find($id);
    $company->name = $request->name;
    $company->email = $request->email;
    $company->contact = $request->contact;
    $company->address = $request->address;
    $image = $request->image;
    if($image){
        $imageName = time().$image->getClientOriginalName();
        $image->move('images/',$imageName);
        $company->image = "images/$imageName";
    }
    $company->save();
    toast("Company updated successfully","success");
    return redirect('/');
    }

    public function delete($id) {
    Company::find($id)->delete();
    toast("Company deleted successfully","success");
    return redirect()->back();
    }
}
