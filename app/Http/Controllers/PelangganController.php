<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $data = Pelanggan::latest()->paginate(10);
        $type_menu = 'layout';

        // Compact data and pass additional variables to the view
        return view('admin.pelanggan.index', compact('data', 'type_menu'));
    }

    public function create()
    {
        $type_menu = 'layout';
        // Logic untuk menampilkan form tambah data
        return view('admin.pelanggan.create', compact('type_menu'));
    }

    public function store (Request $request){
        Pelanggan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'username' => $request->username,
            'no_telepon' => $request->no_telepon,
        ]);

        return redirect()->route('pelanggans.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function show(string $id){
        $data = Pelanggan::findorFail($id);
        $type_menu = 'layout';

        return view('admin.pelanggan.show', compact('type_menu', 'data'));
    }

    public function update(Request $request, $id){
        $data = Pelanggan::findorFail($id);
        $data->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'username' => $request->username,
            'no_telepon' => $request->no_telepon,
        ]);

        return redirect()->route('pelanggans.index')->with(['success' => 'Data Berhasil Update']);
    }

    public function destroy($id){
        $data = Pelanggan::findorFail($id);
        $data->delete();
        return redirect()->route('pelanggans.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
