<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //  dd($request->all());
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->contact = $request->contact;
        $student->save();
        return redirect()->back()->with('success', 'Student Insert successfully');
        // return back(); //return to same back form whre you was previous
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit-students', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student =  Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->contact = $request->contact;
        $student->update();
        return redirect('/view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // dd($id);
        $student = Student::find($id);
        $student->delete();
        return back();
    }
}
