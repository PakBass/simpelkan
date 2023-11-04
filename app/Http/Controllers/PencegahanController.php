<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PencegahanController extends Controller
{
    public function index() {
        return view('posts.pencegahan', [
            'title' => 'Laporan Pencegahan Pencemaran'
        ]);
    }
}
