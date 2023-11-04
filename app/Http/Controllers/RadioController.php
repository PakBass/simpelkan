<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RadioController extends Controller
{
    public function index() {
        return view('posts.radio', [
            'title' => 'Laporan Keselamatan Radio Kapal'
        ]);
    }
}
