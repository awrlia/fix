<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index(){
        $data = Pembelian::latest()->paginate(10);
        $type_menu = 'layout';

        // Compact data and pass additional variables to the view
        return view('admin.pembelian.index', compact('data', 'type_menu'));
    }

    public function create()
    {
        $type_menu = 'layout';
        // Logic untuk menampilkan form tambah data
        return view('admin.pembelian.create', compact('type_menu'));
    }

    public function store(Request $request){
        Pembelian::create([
            'id_pelanggan' => $request->id_pelanggan,
            'total_pembelian' => $request->total_pembelian,
        ]);

        return redirect()->route('pembelians.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function show(string $id){
        $data = Pembelian::findorFail($id);
        $type_menu = 'layout';

        return view('admin.pembelian.show', compact('type_menu', 'data'));
    }

    public function update(Request $request, $id){
        $data = Pembelian::findorFail($id);
        $data->update([
            'id_pelanggan' => $request->id_pelanggan,
            'total_pembelian' => $request->total_pembelian,
        ]);

        return redirect()->route('pembelians.index')->with(['success' => 'Data Berhasil Update']);
    }

    public function destroy($id){
        $data = Pembelian::findorFail($id);
        $data->delete();
        return redirect()->route('pembelians.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
