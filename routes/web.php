<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CourseController;
use App\Models\Company;
use App\Models\Course;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// company routes
Route::get('/', [CompanyController::class,"table"])->name("company");

Route::get('/company/create', [CompanyController::class,"create"])->name("company-create");

Route::post('/save-company',[CompanyController::class,"save"])->name("company-save");

Route::get('/edit-company/{id}',[CompanyController::class,"edit"])->name("company-edit");

Route::patch('/update-company/{id}',[CompanyController::class,"update"])->name("company-update");

Route::delete('/delete-company/{id}', [CompanyController::class,"delete"])->name("company-delete");

// about routes
Route::get('/about', function () {return view('about');})->name("about");

// contact routes
Route::get('/contact', function () {return view('contact');})->name("contact");

// Course routes
Route::get('/course' ,[CourseController::class, "table"])->name("course");

Route::get('/course/create', [CourseController::class,"create"])->name("course-create");

Route::post('/save-course', [CourseController::class, "save"])->name("course-save");

Route::delete('/delete-course/{id}', [CourseController::class,"delete"])->name("course-delete");

Route::get('/edit-course/{id}', [CourseController::class, "edit"])->name("course-edit");

Route::patch('/update-course/{id}', [CourseController::class, "update"])->name("course-update");

// Admissions routes
Route::get('/admission', [AdmissionController::class,"table"])->name("admission");
