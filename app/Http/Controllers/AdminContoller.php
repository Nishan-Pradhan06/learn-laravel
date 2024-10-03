<?php

namespace App\Http\Controllers;

use App\Models\CardJobModel;

class AdminContoller extends Controller
{
    //
   public function admin()
    {
        $totalJobs = CardJobModel::count();
        return view('client.dashboard',compact('totalJobs'));
       
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
