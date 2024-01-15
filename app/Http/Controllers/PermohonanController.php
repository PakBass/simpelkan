<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan; // Gantikan YourModel dengan nama model Anda

class PermohonanController extends Controller
{
    public function index()
    {
        $user = auth()->user(); // Ambil pengguna yang saat ini terotentikasi

        if ($user->approved == 0) {
            return redirect('/approval');
        } else if ($user->approved == 1) {
            return view('posts.permohonan2', [
                'title'     => 'Form Permohonan Baru'
            ]);
        }
    }

    public function permohonanBaru()
    {
        return view('posts.dataPermohonan', [
            'title' => 'Data Permohonan'
        ]);
    }

    public function daftar(Request $request)
    {
        $validasiData = $request->all();

        try {
            $user = Permohonan::create([
                'namaKapal' => $validasiData['namaKapal'],
                'jenisKapal' => $validasiData['jenisKapal'],
                'jenisLayanan' => $validasiData['jenisLayanan'],
                'ditujukan' => $validasiData['ditujukan'],
                'nomor' => $validasiData['nomor'],
                'tanggalSurat' => $validasiData['tanggalSurat'],
                'perihal' => $validasiData['perihal'],
                'gt' => $validasiData['gt'],
                'callSign' => $validasiData['callSign'],
                'pemilik' => $validasiData['pemilik'],
            ]);

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
        } catch (\Exception $e) {
            // Tangani error (jika ada) tanpa melakukan redirect
            return back()->withInput()->withErrors(['trouble' => 'Terjadi kesalahan. Silakan coba lagi.']);
        }

    }

    public function signNew(Request $request)
    {
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
}
