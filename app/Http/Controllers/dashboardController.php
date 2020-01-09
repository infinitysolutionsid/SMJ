<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dash');
    }
    public function utility()
    {
        $kategori = DB::table('categoriesSparepart')
            ->select('categoriesSparepart.*')
            ->get();
        return view('dashboard.utility', ['kategori' => $kategori]);
    }
}
