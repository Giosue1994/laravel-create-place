<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function indexStudents() {
      $students = Student::all();

      return view('students', compact('students'));
    }

    public function viewHandlebars() {
      $students = Student::all();

      return view('students-handlebars', compact('students'));
    }
}
