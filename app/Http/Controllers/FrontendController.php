<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        return view('welcome');
    }
    function about()
    {
        return view('about');
    }

    function viewStudent()
    {
        // $students = student::all(); //get all data that store in database
        $students = student::orderBY('id', 'desc')->get(); //get all data that store in database in descending oder at first/ last value in first

        // dd($students);
        return view('view-student', compact('students'));
    }
}
