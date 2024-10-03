<?php

namespace App\Http\Controllers;

use App\Models\CardJobModel;
use Illuminate\Http\Request;

class AdminContoller extends Controller
{
    //
   public function admin()
    {
        return view('client.dashboard');
       
    }

    public function allJobs()
    {
        $jobs = CardJobModel::OrderBy('created_at', 'desc')->get();
        return view('client.all-jobs', compact('jobs'));
    }

    public function allContracts()
    {
        
    }
}
