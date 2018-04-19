<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
	public function create()
	{
		return view('users.create');
	}


	public function show(User $user)
	{
		return view('users.show',compact('user'));
	}

	public function store(Request $request)
	{
		$this->validate($request,[
			'name'=>'required|max:50',
			'email'=>'required|email|unique:users|max:255',
			'password'=>'required|confirmed|max:6'
		]);
		
		$user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.show', [$user]);
	}

    
}
