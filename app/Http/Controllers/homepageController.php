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
            ->paginate(9);
        $kategori = DB::table('categoriesSparepart')
            ->select('categoriesSparepart.*')
            ->get();
        return view('homepage.shop1', ['kategori' => $kategori, 'itemkategori' => $itemkategori]);
    }
    public function shop2()
    {
        $itemkategori = DB::table('items')
            ->where('items.type_product', '=', 'Sparepart Truck')
            ->join('categoriesSparepart', 'categoriesSparepart.id', '=', 'items.kategori_id')
            ->select('items.*', 'categoriesSparepart.*')
            ->paginate(9);
        $kategori = DB::table('categoriesSparepart')
            ->select('categoriesSparepart.*')
            ->get();
        return view('homepage.shop2', ['kategori' => $kategori, 'itemkategori' => $itemkategori]);
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

    public function kirimpenawaran(Request $request)
    {
        $pesan = new \App\MessagesModel;
        $pesan->nama = $request->nama;
        $pesan->email = $request->email;
        $pesan->nohp = $request->nohp;
        $pesan->subject = 'Saya tertarik dengan produk ' . $request->subject;
        $pesan->messages = $request->notes;
        $pesan->logIP = $request->getClientIp();
        $pesan->status = 'unread';

        $pesan->save();
        return redirect('/')->with('sukses', 'Penawaran kamu berhasil kami terima. Kami akan menghubungi kamu dalam waktu 1x24 jam. Jika belum menerima email/panggilan telepon, kamu boleh mengirim pesan ke email info@sumberparts.com. Terima kasih.');
    }
    public function kirimpesan(Request $request)
    {
        $pesan = new \App\MessagesModel;
        $pesan->nama = $request->nama;
        $pesan->email = $request->email;
        $pesan->nohp = $request->nohp;
        $pesan->subject = $request->subject;
        $pesan->messages = $request->notes;
        $pesan->logIP = $request->getClientIp();
        $pesan->status = 'unread';

        $pesan->save();
        return back()->with('sukses', 'Yes');
    }
    public function about()
    {
        return view('homepage.about');
    }
    public function contact()
    {
        return view('homepage.contact');
    }
}
