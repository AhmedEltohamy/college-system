<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Hash;

use Validator;

use App\Student;

use App\User;

class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role_id', 3)->get();
        
        return view('student.studentIndex', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.studentCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'name'=>'required|max:50',
            'username'=>'required|max:50|unique:users',
            'level'=>'required',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User([
            'name' => $request->get('name'),
            'username' => $request->get('username'),
            'role_id' => 3,
            'password' => Hash::make($request->get('password')),
        ]);

        $user->save();

        $student = new Student();
        $student->level = $request->get('level');
        $user->teacher()->save($student);

        return redirect('/student')->with('success', 'Student added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::where('role_id', 3)->get();
        
        return view('student.studentIndex', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('student.studentEdit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required|max:50',
            'username'=>'required|max:50|unique:users',
            'level'=>'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::with('student')->find($id);
        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->student->level = $request->get('level');
        $user->push();
            
        return redirect('/student')->with('success', 'Student information updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->student()->delete();
        $user->delete();

        return redirect('/student')->with('success', 'Student deleted');
    }
}
