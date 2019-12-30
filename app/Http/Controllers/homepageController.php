<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepageController extends Controller
{
    public  function index()
    {
        return view('homepage.home');
    }
    public function shop1()
    {
        return view('homepage.shop1');
    }
}
