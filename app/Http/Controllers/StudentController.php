<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class StudentController extends Controller
{
    /**
     * Store a new flight in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registerStudent');
    }
    public function store(Request $request)
    {
        // Validate the request...
 
        $student = new student;
        $student->level = $request->level;
        $student->gpa = $request->gpa;
        $student->contact = $request->contact;
        $student->save();
        return redirect('user');
    }

    /**
     * Update the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = student::find($id);
        return view('edit2')->with('student',$student);
    }

    public function update(Request $request, $id)
    {
        student::where('id', $id)->update($request->except(['_token','_method']));
        return redirect('user');
    }
}
