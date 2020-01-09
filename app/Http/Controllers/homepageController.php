<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homepageController extends Controller
{
    public  function index()
    {
        return view('homepage.home');
    }
    public function shop1()
    {
        $kategori = DB::table('categoriesSparepart')
            ->select('categoriesSparepart.*')
            ->get();
        return view('homepage.shop1', ['kategori' => $kategori]);
    }
    public function shop2()
    {
        $kategori = DB::table('categoriesSparepart')
            ->select('categoriesSparepart.*')
            ->get();
        return view('homepage.shop2', ['kategori' => $kategori]);
    }
    public function quickview()
    {
        return view('homepage.viewitem');
    }
    public function tools()
    {
        return view('authen.login');
    }
}
