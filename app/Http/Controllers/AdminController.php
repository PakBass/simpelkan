<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function showApproveUsers()
    {
        $users = User::where('approved', false)->get();
        return view('approval', compact('users'));
    }

    public function approveUser($id)
    {
        $user = User::findOrFail($id);
        $user->approved = true;
        $user->save();

        return redirect()->route('/approve-users')->with('success', 'Pengguna telah disetujui.');
    }
}
