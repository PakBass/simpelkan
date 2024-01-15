<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;
use App\Models\User;
use App\Models\Permohonan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        if ((Auth()->user()->role == "admin") || (Auth()->user()->role == "pemeriksa")) {
            return view('posts.index', [
                'title' => 'Main Page admin/pemeriksa',
                'posts' => User::paginate(3)
            ]);
        } else {
            return view('posts.index', [
                'title'  => 'Main Page Pemohon',
                'posts'  => User::where('id', Auth()->user()->id)->get()
            ]);
        }
    }

    public function profile()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang sedang masuk

        return view('posts.profileUser', [
            'title' => 'Profile Pemohon',
            'user' => $user
        ]);
    }

    public function create()
    {
        $data = [
            'title'     => 'Laporan Pemeriksaan'
        ];
        return view('posts.pengajuan', $data);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'title'     => 'required|string|max:155',
        //     'content'   => 'required',
        //     'status'    => 'required'
        // ]);

        // $post = PostModel::create([
        //     'title'     => $request->title,
        //     'content'   => $request->content,
        //     'status'    => $request->status,
        //     'slug'      => Str::slug($request->title),
        //     'user_id'   => Auth()->user()->id
        // ]);

        // if ($post) {
        //     return redirect()
        //         ->route('home')
        //         ->with([
        //             'success' => 'New post has been created successfully'
        //         ]);
        // } else {
        //     return redirect()
        //         ->back()
        //         ->withInput()
        //         ->with([
        //             'error' => 'Some problem occurred, please try again'
        //         ]);
        // }
        $this->validate($request, [
            'namaKapal' => 'required|string|max:255',
            'jenisKapal' =>'required|string|max:255',
            'jenisLayanan' => 'required|string|max:255',
            'ditujukan' => 'required|string|max:255',
            'nomor' => 'required|string|max:255',
            'tanggalSurat' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
            'gt' => 'required|string|max:255',
            'callSign' => 'required|string|max:255',
            'pemilik' => 'required|string|max:255',
            'file_suratPermohoan' => 'mimes:pdf,jpg,jpeg,png|max:2048',
            'file_ukurKapal' => 'mimes:pdf,jpg,jpeg,png|max:2048',
            'file_stkk' => 'mimes:pdf,jpg,jpeg,png|max:2048',
            'file_pelengkapan' => 'mimes:pdf,jpg,jpeg,png|max:2048',
            'file_konstruksi' => 'mimes:pdf,jpg,jpeg,png|max:2048',
            'file_radio' => 'mimes:pdf,jpg,jpeg,png|max:2048',
            'file_klassifikasi' => 'mimes:pdf,jpg,jpeg,png|max:2048',
            'file_ilr_pmk' => 'mimes:pdf,jpg,jpeg,png|max:2048',
            'file_pemeriksaan' => 'mimes:pdf,jpg,jpeg,png|max:2048',
            'file_docking1' => 'mimes:pdf,jpg,jpeg,png|max:2048',
            'file_docking2' => 'mimes:pdf,jpg,jpeg,png|max:2048',
        ]);
        try {
            $user = Permohonan::create([
                'namaKapal' => $request->namaKapal,
                'jenisKapal' =>$request->jenisKapal,
                'jenisLayanan' => $request->jenisLayanan,
                'ditujukan' => $request->ditujukan,
                'nomor' => $request->nomor,
                'tanggalSurat' => $request->tanggalSurat,
                'perihal' => $request->perihal,
                'gt' => $request->gt,
                'callSign' => $request->callSign,
                'pemilik' => $request->pemilik,
            ]);
            if ($user) {
                // Simpan file-file
                $fileTypes = [
                    'file_suratPermohoan',
                    'file_ukurKapal',
                    'file_stkk',
                    'file_pelengkapan',
                    'file_konstruksi',
                    'file_radio',
                    'file_klassifikasi',
                    'file_ilr_pmk',
                    'file_pemeriksaan',
                    'file_docking1',
                    'file_docking2',
                ];

                foreach ($fileTypes as $fileType) {
                    if ($request->hasFile($fileType)) {
                        $file = $request->file($fileType);
                        $fileName = time() . '_' . $file->getClientOriginalName();
                        $file->storeAs('documents', $fileName, 'public');
                        $user->{$fileType} = asset('storage/documents/' . $fileName); // Mengubah nilai file ke URL yang benar
                    }
                }

                $user->save();

                session()->flash('success', 'Data berhasil terkirim! Tunggu validasi admin untuk penerbitan SPT.');
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

    public function edit($id)
    {
        $post = User::findOrFail($id);
        $title = 'Validasi Data';
        return view('posts.editUser', compact('post', 'title'));
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()->role == "admin") {
            $user = User::findOrFail($id);

            $userData = [
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'approved' => $request->input('approve', 0), // Mengambil nilai dari checkbox, defaultnya adalah 0 jika checkbox tidak tercentang
                'unlogin'  => $request->input('unlogin', 1),
            ];

            $user->update($userData);

            if ($user) {
                return redirect()
                    ->route('home')
                    ->with([
                        'success' => 'User has been updated successfully'
                    ]);
            } else {
                return redirect()
                    ->back()
                    ->withInput()
                    ->with([
                        'error' => 'Some problem has occured, please try again'
                    ]);
            }
        } else {

            $user = User::findOrFail($id);

            $validasiData = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'username' => 'required|string',
                'password' => 'nullable|string|min:8',
                'nama_perusahaan' => 'required|string',
                'siup' => 'required|string',
                'nib' => 'required|string',
                'alamat' => 'required|string',
                'pic' => 'required|string',
                'no_telepon' => 'required|string',
                'file_akte' => 'mimes:pdf,jpg,jpeg,png|max:2048',
                'file_nib' => 'mimes:pdf,jpg,jpeg,png|max:2048',
                'file_npwp' => 'mimes:pdf,jpg,jpeg,png|max:2048',
                'file_siup' => 'mimes:pdf,jpg,jpeg,png|max:2048',
            ],  [
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

            try {
                 // Hanya mengupdate password jika ada input password baru
                    if ($request->filled('password')) {
                        $validasiData['password'] = Hash::make($request->password);
                    } else {
                        // Jika password tidak diubah, pertahankan password lama
                        unset($validasiData['password']);
                    }

                $user->update($validasiData);
                // Simpan file-file
                $fileTypes = ['file_akte', 'file_nib', 'file_npwp', 'file_siup'];

                foreach ($fileTypes as $fileType) {
                    if ($request->hasFile($fileType)) {
                        $file = $request->file($fileType);
                        $fileName = $file->getClientOriginalName();
                        $file->storeAs('uploads', $fileName, 'public');

                        // Hapus file lama jika ada file baru
                        if ($user->$fileType && Storage::exists($user->$fileType)) {
                            Storage::delete($user->$fileType);
                        }

                        $user->$fileType = asset('storage/uploads/' . $fileName); // Mengubah nilai file ke URL yang benar
                    }
                }

                $user->save();

                session()->flash('success', 'Data pengguna berhasil diperbarui.');
                return redirect()->route('home');
            } catch (\Exception $e) {
                // Tangani error (jika ada) tanpa melakukan redirect
                return back()->withInput()->withErrors(['trouble' => 'Terjadi kesalahan. Silakan coba lagi.']);
            }
        }
    }

    public function ubahData(Request $request, $id)
    {
        $this->validate($request, [
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
            // 'approved' => $request->approved,
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

    // public function destroy($id)
    // {
    //     $post = User::findOrFail($id);
    //     $post->delete();

    //     if ($post) {
    //         return redirect()
    //             ->route('home')
    //             ->with([
    //                 'success' => 'Post has been deleted successfully'
    //             ]);
    //     } else {
    //         return redirect()
    //             ->route('post.index')
    //             ->with([
    //                 'error' => 'Some problem has occurred, please try again'
    //             ]);
    //     }
    // }

    public function destroy($id)
    {

        $user = User::find($id);

        if ($user) {
            $fileTypes = [
                'file_akte',
                'file_nib',
                'file_npwp',
                'file_siup',
            ];

            foreach ($fileTypes as $fileType) {
                $filePath = str_replace(asset('storage'), 'public', $user->$fileType);
                Storage::delete($filePath);
            }

            $user->delete();
            return redirect()->route('post.index')->with('success', 'Data Pengguna berhasil dihapus.');
        }

        return redirect()->route('posts.index')->with('error', 'Pengguna tidak ditemukan.');
    }
}
