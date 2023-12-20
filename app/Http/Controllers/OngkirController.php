<?php

namespace App\Http\Controllers;

use App\Models\Ongkir;
use Illuminate\Http\Request;

class OngkirController extends Controller
{
    public function index(){
        $data = Ongkir::latest()->paginate(10);
        $type_menu = 'layout';

        // Compact data and pass additional variables to the view
        return view('admin.shipping.index', compact('data', 'type_menu'));
    }

    public function create()
    {
        $type_menu = 'layout';
        // Logic untuk menampilkan form tambah data
        return view('admin.shipping.create', compact('type_menu'));
    }

    public function store(Request $request){
        Ongkir::create([
            'nama_kota' => $request->nama_kota,
            'tarif' => $request->tarif,
        ]);

        return redirect()->route('shippings.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function show(string $id){
        $data = Ongkir::findorFail($id);
        $type_menu = 'layout';

        return view('admin.shipping.show', compact('type_menu', 'data'));
    }

    public function update(Request $request, $id){
        $data = Ongkir::findorFail($id);
        $data->update([
            'nama_kota' => $request->nama_kota,
            'tarif' => $request->tarif,
        ]);

        return redirect()->route('shippings.index')->with(['success' => 'Data Berhasil Update']);
    }

    public function destroy($id){
        $data = Ongkir::findorFail($id);
        $data->delete();
        return redirect()->route('shippings.index')->with(['success' => 'Data Berhasil Dihapus']);
    }

}
