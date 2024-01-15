<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function approval() {
        return view('approval', [
            'title' => 'Approval'
        ]);
    }

    public function unlogin() {
        return view('approval2', [
            'title' => 'Deactivated'
        ]);
    }
}
