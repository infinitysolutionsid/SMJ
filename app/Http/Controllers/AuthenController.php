<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class AuthenController extends Controller
{
    public function tools()
    {
        return view('authen.login');
    }
    public function auth(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('/dashboard');
        }
        return back();
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/tools');
    }
}
