<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
	{
	    $students = Student::orderBy('id', 'asc')->get();
		return view('student.home')->with('students', $students);
    }
    public function store(Request $request)
    {
		Student::store($request->toArray());
		
	}
}
