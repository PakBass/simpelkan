<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeselamatanController extends Controller
{
    public function index() {
        return view('posts.keselamatan', [
            'title' => 'Laporan Keselamatan Perlengkapan Kapal Barang'
        ]);
    }

    
}
