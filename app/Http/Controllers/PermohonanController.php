<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Gantikan YourModel dengan nama model Anda

class PermohonanController extends Controller
{
    public function index()
    {
        $user = auth()->user(); // Ambil pengguna yang saat ini terotentikasi

        if ($user->approved == 0) {
            return redirect('/approval');
        } else if ($user->approved == 1) {
            return view('posts.permohonan', [
                'title'     => 'Form Permohonan Baru'
            ]);
        }
    }
}
