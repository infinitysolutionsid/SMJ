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
    public function kategoriadd(Request $request)
    {
        $kategori = new \App\CategoriesModel;
        $kategori->nama_kategori  = $request->nama_kategori;
        $kategori->save();

        return back()->with('sukses', 'Yeay, data kategori baru berhasil ditambahkan!');
    }
}
