<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
        {
            parent::setAttribute($key, $value);
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$user = User::find(Auth::user()->id);
        return $user->student->level;*/
        return view('home');
    }
    /*public function add(Request $request)
    {
        $user=new user;
        $user->name=$request->name;
        $user->username=$request->username;
        $user->password=Hash::make($request->password);
        $user->role_id=2;
        $user->save();
        return $user;
        /*if($request->type==2)
        {
            $student->id=$user->id;
            $student->name=$user->name;
            $student->save();
        }
    }

    public function addv()
    {
        return view('add');
    }*/
}
