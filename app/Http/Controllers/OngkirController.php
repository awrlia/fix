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
        return view('ongkir.create');
    }

    public function store(Request $request)
    {
        // Validasi data input jika diperlukan

        $data = new Ongkir();
        $data->nama_kota = $request->input('nama_kota');
        $data->tarif = $request->input('tarif');
        // Atur properti lainnya sesuai kebutuhan

        $data->save();

        return redirect()->route('ongkir.create')->with('success', 'Data berhasil ditambahkan');
    }
}
