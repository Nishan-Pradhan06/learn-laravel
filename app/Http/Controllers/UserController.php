<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser()
    {
        return "Nishan Pradhan";
    }

    function getPasword()
    {
        return "password";
    }
    function getUserName($name)
    {
        echo "Hello this is" . $name;
        return view('getuser', ['name' => $name]);
    }

    function getController()
    {
        return view('controller');
    }

    function adminLogin()
    {
        return view('admin.login');
    }
}
