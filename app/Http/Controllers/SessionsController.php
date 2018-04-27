<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Http\Requests;
use Auth;

>>>>>>> sign-up

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

<<<<<<< HEAD
     public function store(Request $request)
=======
    public function store(Request $request)
>>>>>>> sign-up
    {
       $credentials = $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

<<<<<<< HEAD
       if(Auth::attempt($credentials)){
       	   sessions->flash('success','欢迎回来！');
       	   return redirect()->route('users.show', [Auth::user()]);
=======
       if (Auth::attempt($credentials, $request->has('remember'))) {
           session()->flash('success', '欢迎回来！');
           return redirect()->route('users.show', [Auth::user()]);
>>>>>>> sign-up
       } else {
           session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
           return redirect()->back();
       }

       return;
    }
<<<<<<< HEAD
=======

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }
>>>>>>> sign-up
}
