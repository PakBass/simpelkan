<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // public function index()
    // {
    //     return view('posts.index', [
    //         'title' => 'Main Page admin/operator',
    //         'posts' => User::all()
    //     ]);
    // }
    public function profile()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang sedang masuk
        return view('posts.profileUser', [
            'title' => 'Profile Pemohon',
            'user' => $user
        ]);
    }

    public function ubahData(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'nama_perusahaan' => 'required|string',
            'siup' => 'required|string',
            'nib' => 'required|string',
            'alamat' => 'required|string',
            'pic' => 'required|string',
            'no_telepon' => 'string|regex:/^[0-9]+$/',
            'file_akte' => 'mimes:pdf,jpg,jpeg,png|max:2048',
            'file_nib' => 'mimes:pdf,jpg,jpeg,png|max:2048',
            'file_npwp' => 'mimes:pdf,jpg,jpeg,png|max:2048',
            'file_siup' => 'mimes:pdf,jpg,jpeg,png|max:2048',
        ],  [
            'name.required' => 'Kolom nama wajib diisi.',
            'username.required' => 'Kolom username wajib diisi.',
            'username.unique' => 'Username telah digunakan.',
            'email.required' => 'Kolom email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email telah terdaftar.',
            'password.required' => 'Kolom password wajib diisi.',
            'password.string' => 'Password harus berupa string.',
            'password.min' => 'Password minimal :min karakter.',
            'nama_perusahaan.required' => 'Kolom nama perusahaan wajib diisi.',
            'siup.required' => 'Kolom SIUP wajib diisi.',
            'nib.required' => 'Kolom NIB wajib diisi.',
            'alamat.required' => 'Kolom alamat wajib diisi.',
            'pic.required' => 'Kolom PIC wajib diisi.',
            'no_telepon.required' => 'Kolom nomor telepon wajib diisi.',
            'no_telepon.regex' => 'Nomor telepon hanya boleh berisi angka.',
            'file_akte.mimes' => 'File Akte harus berformat PDF, JPG, JPEG,dan PNG.',
            'file_akte.max' => 'File Akte tidak boleh lebih dari 2MB.',
            'file_nib.mimes' => 'File NIB harus berformat PDF.',
            'file_nib.max' => 'File NIB tidak boleh lebih dari 2MB.',
            'file_npwp.mimes' => 'File NPWP harus berformat PDF.',
            'file_npwp.max' => 'File NPWP tidak boleh lebih dari 2MB.',
            'file_siup.mimes' => 'File SIUP harus berformat PDF.',
            'file_siup.max' => 'File SIUP tidak boleh lebih dari 2MB.',
            'file_akte.mimes' => 'File Akte harus berupa PDF, JPG, JPEG, atau PNG.',
            'file_nib.mimes' => 'File NIB harus berupa PDF, JPG, JPEG, atau PNG.',
            'file_npwp.mimes' => 'File NPWP harus berupa PDF, JPG, JPEG, atau PNG.',
            'file_siup.mimes' => 'File SIUP harus berupa PDF, JPG, JPEG, atau PNG.',
        ]);

        $user = User::findOrFail($id);

        $oldFiles = [
            'file_akte' => $user->file_akte,
            'file_nib' => $user->file_nib,
            'file_npwp' => $user->file_npwp,
            'file_siup' => $user->file_siup,
        ];

        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'nama_perusahaan' => $request->nama_perusahaan,
            'siup' => $request->siup,
            'nib' => $request->nib,
            'alamat' => $request->alamat,
            'pic' => $request->pic,
            'no_telepon' => $request->no_telepon,
            'approved' => $request->approved,
        ];

        // Periksa apakah password diisi atau tidak
        if ($request->filled('password')) {
            $userData['password'] = bcrypt($request->password);
        }

        foreach (['file_akte', 'file_nib', 'file_npwp', 'file_siup'] as $fileType) {
            if ($request->hasFile($fileType)) {
                $file = $request->file($fileType);
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('uploads', $fileName, 'public');
                $userData[$fileType] = asset('storage/uploads/' . $fileName);

                // Hapus file lama jika ada file baru
                if ($oldFiles[$fileType] && file_exists(public_path($oldFiles[$fileType]))) {
                    unlink(public_path($oldFiles[$fileType]));
                }
            } else {
                // Jika tidak ada file baru, gunakan file lama
                $userData[$fileType] = $oldFiles[$fileType];
            }
        }

        $user->update($userData);

        if ($user) {
            return redirect()
                ->route('home')
                ->with([
                    'success' => 'Perubahan data telah BERHASIL dilakukan.'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

}
