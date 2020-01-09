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
        $item = DB::table('items')
            ->select('items.*')
            ->get();
        $itemkategori = DB::table('items')
            ->join('categoriesSparepart', 'categoriesSparepart.id', '=', 'items.kategori_id')
            ->select('items.*', 'categoriesSparepart.*')
            ->get();
        return view('dashboard.utility', ['kategori' => $kategori, 'item' => $item, 'itemkategori' => $itemkategori]);
    }
    public function kategoriadd(Request $request)
    {
        $kategori = new \App\CategoriesModel;
        $kategori->nama_kategori  = $request->nama_kategori;
        $kategori->save();

        return back()->with('sukses', 'Yeay, data kategori baru berhasil ditambahkan!');
    }
    public function itemadd(Request $request)
    {
        $item = new \App\itemModel;
        $item->nama_item  = $request->nama_item;
        $item->kategori_id = $request->kategori_id;
        $item->description = $request->description;
        if ($request->hasFile('images')) {
            $request->file('images')->move('storage/shop/img/', $request->file('images')->getClientOriginalName());
            $item->images = $request->file('images')->getClientOriginalName();
            $item->save();
        }

        return back()->with('suksesitem', 'Yeay, data produk baru berhasil ditambahkan!');
    }
}
