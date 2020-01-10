<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\itemModel;

class homepageController extends Controller
{
    public  function index()
    {
        return view('homepage.home');
    }
    public function shop1()
    {
        $itemkategori = DB::table('items')
            ->where('items.type_product', '=', 'Hydraulic Dump Truck')
            ->join('categoriesSparepart', 'categoriesSparepart.id', '=', 'items.kategori_id')
            ->select('items.*', 'categoriesSparepart.*')
            ->paginate(12);
        $kategori = DB::table('categoriesSparepart')
            ->select('categoriesSparepart.*')
            ->get();
        return view('homepage.shop1', ['kategori' => $kategori, 'itemkategori' => $itemkategori]);
    }
    public function shop2()
    {
        $kategori = DB::table('categoriesSparepart')
            ->select('categoriesSparepart.*')
            ->get();
        return view('homepage.shop2', ['kategori' => $kategori]);
    }
    public function quickview($itemId)
    {
        $item = itemModel::find($itemId);
        $itemkategori = DB::table('items')
            ->where('items.itemId', '=', $itemId)
            ->join('categoriesSparepart', 'categoriesSparepart.id', '=', 'items.kategori_id')
            ->select('items.*', 'categoriesSparepart.*')
            ->get();
        $kategori = DB::table('categoriesSparepart')
            ->select('categoriesSparepart.*')
            ->get();
        return view('homepage.viewitem', ['item' => $item, 'itemkategori' => $itemkategori, 'kategori' => $kategori]);
    }
    public function penawaran($itemId)
    {
        $item = itemModel::find($itemId);
        $itemkategori = DB::table('items')
            ->where('items.itemId', '=', $itemId)
            ->join('categoriesSparepart', 'categoriesSparepart.id', '=', 'items.kategori_id')
            ->select('items.*', 'categoriesSparepart.*')
            ->get();
        $kategori = DB::table('categoriesSparepart')
            ->select('categoriesSparepart.*')
            ->get();
        return view('homepage.penawaran', ['item' => $item, 'itemkategori' => $itemkategori, 'kategori' => $kategori]);
    }
    public function tools()
    {
        return view('authen.login');
    }
}
