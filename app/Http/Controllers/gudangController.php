<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class gudangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('home', compact('barang'));
    }
}
