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
}
