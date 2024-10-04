<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Exception;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('proposal.proposal');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $proposal = new Proposal();
            $proposal->proposal = $request->proposal;
            $proposal->save();

            return redirect()->back()->with('success', 'Proposal Sent Sucessfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to sent proposal!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Proposal $proposal)
    {
        if (!$proposal) {
            $proposal = Proposal::all();
            return view('proposal.show');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proposal = Proposal::find($id);
        if (!$proposal) {
            return redirect()->back()->with('error', 'No any Proposal');
        }
        return view('proposal.edit', compact('proposal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proposal $proposal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proposal $proposal)
    {
        //
    }
}
