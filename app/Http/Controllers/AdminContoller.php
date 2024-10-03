<?php

namespace App\Http\Controllers;

use App\Models\CardJobModel;
use Illuminate\Http\Request;

class AdminContoller extends Controller
{
    //
   public function admin()
    {
        $jobs = CardJobModel::OrderBy('created_at','desc')->get();
        return view('client.dashboard',compact('jobs'));
    }
}
