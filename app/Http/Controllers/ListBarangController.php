<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ListBarangController extends Controller
{
    public function index()
    {
        $tokoUsers = User::where('role', 'TOKO')->get();

        return view('barang.list', compact('tokoUsers'));
    }
}
