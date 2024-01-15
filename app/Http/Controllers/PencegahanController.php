<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan; // Gantikan YourModel dengan nama model Anda

class PencegahanController extends Controller
{
    public function index() {
        return view('posts.pencegahan', [
            'title' => 'Laporan Pencegahan Pencemaran'
        ]);
    }

    public function store(Request $request)
    {
        $validasiData = $request->validate([
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
        ], [
            'namaKapal.required' => 'Kolom Nama Kapal wajib diisi.',
            'jenisKapal.required' => 'Kolom Jenis Kapal wajib diisi.',
            'jenisLayanan.required' => 'Kolom Jenis Layanan wajib diisi.',
            'ditujukan.required' => 'Kolom Ditujukan wajib diisi.',
            'nomor.required' => 'Kolom Nomor wajib diisi.',
            'tanggalSurat.required' => 'Kolom Tanggal Surat wajib diisi.',
            'perihal.required' => 'Kolom Perihal wajib diisi.',
            'gt.required' => 'Kolom GT (Gross Tonnage) wajib diisi.',
            'callSign.required' => 'Kolom Call Sign wajib diisi.',
            'pemilik.required' => 'Kolom Pemilik wajib diisi.',
            'file_suratPermohoan.mimes' => 'Format file Surat Permohonan tidak valid. Pilih file PDF, JPG, JPEG, atau PNG.',
            'file_ukurKapal.mimes' => 'Format file Ukuran Kapal tidak valid. Pilih file PDF, JPG, JPEG, atau PNG.',
            'file_stkk.mimes' => 'Format file STKK tidak valid. Pilih file PDF, JPG, JPEG, atau PNG.',
            'file_pelengkapan.mimes' => 'Format file Pelengkap tidak valid. Pilih file PDF, JPG, JPEG, atau PNG.',
            'file_konstruksi.mimes' => 'Format file Konstruksi tidak valid. Pilih file PDF, JPG, JPEG, atau PNG.',
            'file_radio.mimes' => 'Format file Radio tidak valid. Pilih file PDF, JPG, JPEG, atau PNG.',
            'file_klassifikasi.mimes' => 'Format file Klasifikasi tidak valid. Pilih file PDF, JPG, JPEG, atau PNG.',
            'file_ilr_pmk.mimes' => 'Format file ILR PMK tidak valid. Pilih file PDF, JPG, JPEG, atau PNG.',
            'file_pemeriksaan.mimes' => 'Format file Pemeriksaan tidak valid. Pilih file PDF, JPG, JPEG, atau PNG.',
            'file_docking1.mimes' => 'Format file Dokumentasi Docking 1 tidak valid. Pilih file PDF, JPG, JPEG, atau PNG.',
            'file_docking2.mimes' => 'Format file Dokumentasi Docking 2 tidak valid. Pilih file PDF, JPG, JPEG, atau PNG.',
        ]);

        try {
            $user = Permohonan::create($validasiData);

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
