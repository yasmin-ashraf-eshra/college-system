<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\student;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\StudentController;
class UserController extends Controller
{
    
    public function index()
    {
        $student = User::join('students', 'users.id', '=', 'students.id')
        ->get(['users.id','users.name','users.email', 'students.*']);
        return view('studentstable', ['student' => $student]);
    }

    public function create()
    {
        return view('create');
    }

     /**
     * Store a new flight in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // Validate the request...
 
        $student = new User;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = Hash::make('12345678');
        $student->save();
        return redirect('student/create');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $user = User::find($id);
        $student = student::find($id);
        return view('information')->with(['user'=>$user , 'student' => $student]);
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
        $user = User::find($id);
        return view('edit')->with('user',$user);
    }
    public function update(Request $request, $id)
    {
        User::where('id', $id)->update($request->except(['_token','_method']));
        return redirect('student/' . $id . '/edit');
    }
    public function destroy($id)
    {
        User::destroy($id);
        student::destroy($id);
        return redirect('user');
    }
}
