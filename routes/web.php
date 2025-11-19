<?php

use App\Models\Company;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // toast("welcome to CodeIT Class","info");
    $companies = Company::all();
    return view('welcome',compact ('companies'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/course', function () {
    $courses = Course::all();
    return view('course',compact('courses'));
});

Route::post('/save-company',function(Request $request){

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
});

Route::post("/save-course", function(Request $request){

    $course = new Course();
    $course->name = $request->name;
    $course->price = $request->price;
    $course->description = $request->description;
    $course->save();
    toast("Course added successfully","success");
    return redirect('/course');
});

Route::delete('/delete-company/{id}', function ($id) {
    Company::find($id)->delete();
    toast("Company deleted successfully","success");
    return redirect()->back();
});

Route::delete('/delete-course/{id}', function ($id) {
    Course::find($id)->delete();
    toast("Course deleted successfully","success");
    return redirect()->back();
});
