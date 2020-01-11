<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
    public function registrasi(Request $request)
    {
        $usernew = new \App\User;
        $usernew->name = $request->name;
        $usernew->email = $request->email;
        $usernew->password = Hash::make($request->password);
        $usernew->role = 'user';
        $usernew->username = $request->username;
        $usernew->status = 'inactive';
        $usernew->unpassword = $request->password;
        $usernew->logIP = $request->getClientIp();
        $usernew->login_record = $request->getClientIp();
        $usernew->created_by = 'guest';
        $usernew->updated_by = 'guest';
        $usernew->save();
        return redirect('/tools')->with('sukses', 'Yey! Akunmu berhasil didaftarkan. Tunggu hingga admin menyetujui akun barumu dan setelah disetujui, silahkan login kembali.');
    }
}
