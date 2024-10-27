<?php

namespace App\Http\Controllers;

use App\Models\rc;
use Illuminate\Http\Request;

class authPage extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    public function signUp()
    {
        return view('signup');
    }

  
}
