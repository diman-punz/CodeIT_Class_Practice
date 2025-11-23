<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function table() {
    // $admissions = admission:all();// compact("admissions")
    return view('admission.table',);
    }

    public function create(){
    return view('admission.create');
    }


}
