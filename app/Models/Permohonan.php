<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    // use HasFactory;

    // protected $guarded = ['id'];
    protected $fillable = [
        'namaKapal',
        'jenisKapal',
        'jenisLayanan',
        'ditujukan',
        'nomor',
        'tanggalSurat',
        'perihal',
        'gt',
        'callSign',
        'pemilik',
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
}
