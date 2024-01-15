<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'Form Login'
        ];
        return view('login', $data);
    }

    public function actionlogin(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        // $data = [
        //     'email'     => $request->input('email'),
        //     'password'  => $request->input('password')
        // ];

        // if(Auth::attempt($data)){
        //     return redirect('home');
        // } else {
        //     return redirect('/')->with('error', 'Email atau Password salah');
        // }
        $credentials = $request->only('identity', 'password');

        if (Auth::attempt(['email' => $credentials['identity'], 'password' => $credentials['password']])) {
            $user = Auth::user();
            if ($user->unlogin == 0) {
                return redirect('/approval2')->with('error', 'Akun Anda Sudah Tidak Bisa Digunakan Lagi!.');
            }
            return redirect()->intended('home');
        }

        if (Auth::attempt(['username' => $credentials['identity'], 'password' => $credentials['password']])) {
            $user = Auth::user();
            if ($user->unlogin == 0) {
                return redirect('/approval2')->with('error', 'Akun Anda Sudah Tidak Bisa Digunakan Lagi!.');
            }
            return redirect()->intended('home');
        }

        return redirect('/')->with('error', 'Email atau Password salah');

    }

    public function register(Request $request)
    {
        $validasiData = $request->validate([
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
        ], [
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

        $validasiData['password'] = Hash::make($validasiData['password']);

        try {
            $user = User::create($validasiData);

            if ($user) {
                // Simpan file-file
                $fileTypes = ['file_akte', 'file_nib', 'file_npwp', 'file_siup'];

                foreach ($fileTypes as $fileType) {
                    if ($request->hasFile($fileType)) {
                        $file = $request->file($fileType);
                        $fileName = time() . '_' . $file->getClientOriginalName();
                        $file->storeAs('uploads', $fileName, 'public');
                        $user->{$fileType} = asset('storage/uploads/' . $fileName); // Mengubah nilai file ke URL yang benar
                    }
                }

                $user->save();

                session()->flash('success', 'Registrasi berhasil! Tunggu verifikasi dan persetujuan admin.');
                return redirect('/');
            } else {
                session()->flash('error', 'Terjadi kesalahan saat membuat pengguna. Silakan coba lagi.');
                return back()->withInput();
            }
        } catch (\Exception $e) {
            // Tangani error (jika ada) tanpa melakukan redirect
            return back()->withInput()->withErrors(['trouble' => 'Terjadi kesalahan. Silakan coba lagi.']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('exit', 'Anda telah berhasil logout!');
        // Session::flush();
    }

    public function pencegahan()
    {
        return view('posts.pencegahan', [
            'title' => 'Laporan Pencegahan Pencemaran'
        ]);
    }
}
