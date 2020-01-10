<?php

namespace App\Http\Controllers;

use App\CategoriesModel;
use App\itemModel;
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
    public function messages()
    {
        $messages = DB::table('messages')
            ->select('messages.*')
            ->paginate(30);
        return view('dashboard.messages', ['messages' => $messages]);
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
        $item->type_product = $request->type_product;
        if ($request->hasFile('images')) {
            $request->file('images')->move('storage/shop/img/', $request->file('images')->getClientOriginalName());
            $item->images = $request->file('images')->getClientOriginalName();
            $item->save();
        }

        return back()->with('suksesitem', 'Yeay, data produk baru berhasil ditambahkan!');
    }
    public function updatekategori($id)
    {
        $kategori = CategoriesModel::find($id);
        return view('dashboard.editkat', ['kategori' => $kategori]);
    }
    public function prosesupdatekategori(Request $request, $id)
    {
        $datkategori = \App\CategoriesModel::find($id);
        $datkategori->nama_kategori = $request->nama_kategori;
        $datkategori->save();

        return redirect('/utility-item')->with('sukses', 'Kategori nya sudah berhasil diubah! Coba cek ya.. :)');
    }
    public function deletekategori($id)
    {
        $data_kategori = CategoriesModel::find($id);

        if ($data_kategori) {
            if ($data_kategori->delete()) {

                DB::statement('ALTER TABLE categoriesSparepart AUTO_INCREMENT = ' . (count(CategoriesModel::all()) + 1) . ';');

                return back()->with('sukses', 'Kategori berhasil dihapus!');
            }
        }
    }
    public function updateitem($itemId)
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
        return view('dashboard.edititem', ['item' => $item, 'itemkategori' => $itemkategori, 'kategori' => $kategori]);
    }
    public function prosesupdateitem(Request $request, $itemId)
    {
        $item = \App\itemModel::find($itemId);
        $item->nama_item  = $request->nama_item;
        $item->kategori_id = $request->kategori_id;
        $item->description = $request->description;
        $item->type_product = $request->type_product;
        if ($request->hasFile('images')) {
            $request->file('images')->move('storage/shop/img/', $request->file('images')->getClientOriginalName());
            $item->images = $request->file('images')->getClientOriginalName();
            $item->save();
        } else {
            $item->save();
        }
        return redirect('/utility-item')->with('sukses', 'Itemnya berhasil diupdate. Coba cek ya..');
        // dd($item);
    }
    public function deleteitem($itemId)
    {
        $data_member = itemModel::find($itemId);

        if ($data_member) {
            if ($data_member->delete()) {

                DB::statement('ALTER TABLE items AUTO_INCREMENT = ' . (count(itemModel::all()) + 1) . ';');

                return back()->with('suksesitem', 'Data produk berhasil dihapus!');
            }
        }
    }
}
