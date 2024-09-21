<?php

namespace App\Http\Controllers;

use App\Models\CardJobModel;
use Illuminate\Http\Request;

class CardJobModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('job.post-work');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $job = new CardJobModel();
            $job->title = $request->title;
            $job->des = $request->des;
            $job->duration = $request->duration;
            $job->budget = $request->budget;
            $job->req = $request->req;
            $job->save();

            return redirect()->back()->with('success', 'Job posted successfully');
        } catch (\Exception $e) {
            // dd($e->getMessage()); // This will show the actual error message
            return redirect()->back()->with('error', 'Failed to post job');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('job.find-work');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CardJobModel $cardJobModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CardJobModel $cardJobModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CardJobModel $cardJobModel)
    {
        //
    }
}
