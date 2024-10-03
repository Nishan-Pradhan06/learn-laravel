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
        return view('client.post-work');
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
        // $jobs = CardJobModel::all();
        $jobs = CardJobModel::OrderBY('created_at', 'desc')->get();
        return view('freelancer.find-work', compact('jobs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $job = CardJobModel::find($id);
        if (!$job) {
            return redirect()->back()->with('error', 'Job not found.');
        }
        return view('client.edit', compact('job'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $job = CardJobModel::find($id);
            $job->title = $request->title;
            $job->des = $request->des;
            $job->duration = $request->duration;
            $job->budget = $request->budget;
            $job->req = $request->req;
            $job->update();
            return redirect()->back()->with('success', 'Job updated successfully');
        } catch (\Exception $e) {
            // dd($e->getMessage()); // This will show the actual error message
            return redirect()->back()->with('error', 'Failed to edit job post.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $job = CardJobModel::find($id);

            if ($job) {
                // If the job is found, delete it
                $job->delete();
                return view('client.all-jobs');
            } else {
                // If no job is found with the given id, return with an error message
                return redirect()->back()->with('error', 'Job post not found!');
            }
        } catch (\Exception $e) {
            // Log the actual error message if needed
            // dd($e->getMessage());
            return redirect()->back()->with('error', 'Failed to delete job post!');
        }
    }
}
