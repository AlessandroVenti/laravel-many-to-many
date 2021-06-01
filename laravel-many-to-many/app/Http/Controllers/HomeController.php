<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller {
    
    public function homeFunction() {
        $employees = Employee::all();
        return view('pages.home', compact('employees'));
    }
    
}
