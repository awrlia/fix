<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $data = Produk::latest()->paginate(10);
        $type_menu = 'layout';

        // Compact data and pass additional variables to the view
        return view('admin.produk.index', compact('data', 'type_menu'));
    }

    public function create()
    {
        $type_menu = 'layout';
        // Logic untuk menampilkan form tambah data
        return view('admin.produk.create', compact('type_menu'));
    }

    public function store (Request $request){
        Produk::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);

        return redirect()->route('produks.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function show(string $id){
        $data = Produk::findorFail($id);
        $type_menu = 'layout';

        return view('admin.produk.show', compact('type_menu', 'data'));
    }

    public function update(Request $request, $id){
        $data = Produk::findorFail($id);
        $data->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);

        return redirect()->route('produks.index')->with(['success' => 'Data Berhasil Update']);
    }

    public function destroy($id){
        $data = Produk::findorFail($id);
        $data->delete();
        return redirect()->route('produks.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
