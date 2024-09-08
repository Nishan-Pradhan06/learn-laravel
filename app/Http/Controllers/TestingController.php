<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    function myFunction()
    {
        $name = 'isha';
        $users = ['isha', 'nisha', 'ishan'];
        return view('newpage', ['user' => $name, "users" => $users]);
    }
}
