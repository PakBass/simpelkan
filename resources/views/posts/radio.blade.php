<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    {{-- <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css"> --}}

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            /* Menetapkan font Montserrat sebagai font utama */
            background: linear-gradient(90deg, #C7C5F4, #4e5ef0);
            height: 100%;
            margin: 0;
            min-height: 100vh;
            position: relative;
        }

        .footer-img {
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
        }

        .bold-text {
            font-weight: bold;
        }

        .shadow-bottom {
            box-shadow: 0px 4px 2px -2px rgba(0, 0, 0, 0.1);
        }

        .custom-checkbox .form-check-input[type="checkbox"] {
            width: 1.5em;
            height: 1.5em;
            background-color: #808080;
        }

        #signatureCanvas {
            border: 1px solid #000;
            cursor: crosshair;
        }

        #keterangan del {
            text-decoration: line-through;
        }

        .form-container {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out;
        }

        .form-control {
            border: 2px solid #ccc; /* Atur ketebalan dan warna border sesuai keinginan Anda */
        }

        #progress-container {
        width: 100%;
        height: 30px;
        background-color: #f3f3f3;
        margin-top: 20px;
        }

        #progress-bar {
            height: 100%;
            width: 0;
            background-color: #4caf50;
            text-align: center;
            line-height: 30px;
            color: white;
        }

        #scrollToTopBtn {
            display: none;
            font-size: 4rem;
            color: #f3f3f3;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            transition: opacity 0.5s; /* Animasi transisi opacity selama 0.5 detik */
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
    <body>
        <div class="container mt-5">
            <form action="" id="myForm">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <button class="btn btn-md btn-danger mb-3 rounded" type="button" onclick="goBack();"><i class="bi bi-box-arrow-left"></i> Back</button>
                        <h5 class="text-center mb-5">
                            <p>
                                <strong>LAPORAN PEMERIKSAAN</strong>
                            </p>
                            KESELAMATAN RADIO KAPAL <br>MENURUT STANDAR KAPAL NON KONVENSI (NCVS) <br>PERATURAN
                            MENTERI PERHUBUNGAN N0. : KM 65 TAHUN 2009
                        </h5>
                        <h5 class="text-center">
                            <p>
                                <strong><em>INSPECTION REPORT</em></strong>
                            </p>
                            <em>
                                SHIP SAFETY RADIO <br> TO MEET PROVISION 0F NON CONVENTION VESSEL STANDARD
                                (NCVS) <br> REGULATION OF MINISTRY OF TRANSPORTATION NO. : KM 65 TAHUN 2009
                            </em>
                        </h5>
                        {{-- Tombol lembar 1 dan 2 --}}
                        <div class="align-middle text-center">
                            <button class="btn btn-outline-primary my-2 mt-5 toggleButton" type="button"
                                data-target="data"><i class="bi bi-calendar-plus-fill"></i> <small>Lembar 1</small></button>
                            <button class="btn btn-outline-primary my-2 mt-5 toggleButton" type="button"
                                data-target="data2"><i class="bi bi-calendar-plus-fill"></i> <small>Lembar
                                    2</small></button>
                        </div>
                        {{-- Form lembar 1 --}}
                        <div class="form-container" id="data">
                            <fieldset class="border p-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-border p-2">
                                            <div class="mb-3">
                                                <label for="namaKapal" class="form-label">
                                                    <strong>NAMA KAPAL</strong> <br>
                                                    <i>NAME OF SHIP</i>
                                                </label>
                                                <input type="text" class="form-control" id="namaKapal" name="nama_kapal">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pemilik" class="form-label">
                                                    <strong>PEMILIK SESUAI SURAT LAUT</strong> <br>
                                                    <i>OWNER AS REGISTRY CERTIFICATE</i>
                                                </label>
                                                <input type="text" class="form-control" id="pemilik_sesuai_surat"
                                                    name="pemilik_sesuai_surat">
                                            </div>
                                             {{-- Checkbox --}}
                                            <div class="form-check form-check-lg custom-checkbox mx-3">
                                                <table class="table-responsive">
                                                    <tr>
                                                        <td>
                                                            <input class="form-check-input" type="checkbox" value="ada"
                                                                id="defaultCheck1" name="pemriksaan_pertama">
                                                            <label class="form-check-label mx-2" for="defaultCheck1">
                                                                <strong>PEMERIKSAAN PERTAMA</strong> <br>
                                                                <i>INITIAL INSPECTION </i>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="form-check-input" type="checkbox" value="ada"
                                                                id="defaultCheck1" name="pemeriksaan_pembaharuan">
                                                            <label class="form-check-label mx-2" for="defaultCheck1">
                                                                <strong>PEMERIKSAAN PEMBAHARUAN</strong> <br>
                                                                <i>RENEWAL INSPECTIO</i>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="form-check-input" type="checkbox" value="ada"
                                                                id="defaultCheck1" name="pemriksaan_tahunan">
                                                            <label class="form-check-label mx-2" for="defaultCheck1">
                                                                <strong>PEMERIKSAAN TAHUNAN </strong> <br>
                                                                <i>ANNUAL INSPECTION </i>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="form-check-input" type="checkbox" value="ada"
                                                                id="defaultCheck1" name="pemeriksaan_antara">
                                                            <label class="form-check-label mx-2" for="defaultCheck1">
                                                                <strong>PEMERIKSAAN ANTARA </strong> <br>
                                                                <i>INTERMEDIATE INSPECTION</i>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="form-check-input" type="checkbox" value="ada"
                                                                id="defaultCheck1" name="pemeriksaan_tambahan">
                                                            <label class="form-check-label mx-2" for="defaultCheck1">
                                                                <strong>PEMERIKSAAN TAMBAHAN </strong> <br>
                                                                <i>ADDITIONAL INSPECTION</i>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="border p-2">
                                            <div class="mb-3">
                                                <label for="pelabuhan" class="form-label">
                                                    <strong>PELABUHAN PEMERIKSAAN</strong> <br>
                                                    <i>PORT OF INSPECTION</i>
                                                </label>
                                                <input type="text" class="form-control" id="pelabuhan" name="pelabuhan_pemeriksaan">
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="daerah" class="form-label">
                                                    <strong>DAERAH OPERASI RADIO</strong> <br>
                                                </label>
                                                <div class="form-check form-check-lg custom-checkbox mt-3">
                                                    <table class="table-responsive">
                                                        <tr class="mb-3">
                                                            <td>
                                                                <input class="form-check-input" type="checkbox" value="ada"
                                                                    id="defaultCheck1" name="daerah_operasi_a1">
                                                                <label class="form-check-label mx-3 my-2" for="defaultCheck1">
                                                                    <strong>A-1</strong> <br>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr class="mb-3">
                                                            <td>
                                                                <input class="form-check-input" type="checkbox" value="ada"
                                                                    id="defaultCheck1" name="daerah_operasi_a1_a2">
                                                                <label class="form-check-label mx-3 my-2" for="defaultCheck1">
                                                                    <strong>A1+A2</strong> <br>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr class="mb-3">
                                                            <td>
                                                                <input class="form-check-input" type="checkbox" value="ada"
                                                                    id="defaultCheck1" name="daerah_operasi_a1_a2_a3">
                                                                <label class="form-check-label mx-3 my-2" for="defaultCheck1">
                                                                    <strong>A1+A2+A3</strong> <br>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr class="mb-3">
                                                            <td>
                                                                <input class="form-check-input" type="checkbox" value="ada"
                                                                    id="defaultCheck1" name="daerah_operasi_a1_a2_a3_a4">
                                                                <label class="form-check-label mx-3 my-2" for="defaultCheck1">
                                                                    <strong>A1+A2+A3+A4</strong> <br>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        {{-- Form lembar 2 --}}
                        <div class="form-container" id="data2">
                            <fieldset class="border p-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="border p-2">
                                            <div class="row">
                                                <div class="col-md-8 mb-3">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    <label for="nomor"
                                                                        class="form-label p-2">No</label>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control p-2"
                                                                        id="nomor" name="nomor"
                                                                        placeholder=".....">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                        id="format" name="format" value="/SCC/NCVS"
                                                                        disabled>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="pemilik" class="form-label">
                                                    <strong>Pelabuhan Pemeriksaan</strong> <br>
                                                    <i>Port of Inspection</i>
                                                </label>
                                                <input type="text" class="form-control" id="pemilik"
                                                    name="pelabuhan_pemeriksaan2">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pemilik" class="form-label">
                                                    <strong>Tanggal Pemeriksaan</strong> <br>
                                                    <i>Date of Inspection</i>
                                                </label>
                                                <input type="date" class="form-control" id="pemilik"
                                                    name="tgl_pemeriksaan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="border p-2">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="pelabuhan" class="form-label">
                                                            <strong>Nama Kapal</strong> <br>
                                                            <i>Name of Ship</i>
                                                        </label>
                                                        <input type="text" class="form-control" id="pelabuhan"
                                                            name="nama_kapal3">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="daerah" class="form-label">
                                                            <strong>Tanda Panggilan</strong> <br>
                                                            <i>Call Sign</i>
                                                        </label>
                                                        <input type="text" class="form-control" id="daerah"
                                                            name="tanda_panggilan1">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="daerah" class="form-label">
                                                            <strong>Kebangsaan dan Pelabuhan Pendaftaran </strong> <br>
                                                            <i>Nationality and port of Registry
                                                            </i>
                                                        </label>
                                                        <input type="text" class="form-control" id="daerah"
                                                            name="Kebangsaan">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="pelabuhan" class="form-label">
                                                            <strong>Berat Kotor</strong> <br>
                                                            <i>Gross Tonnage</i>
                                                        </label>
                                                        <input type="text" class="form-control" id="pelabuhan"
                                                            name="berat_kotor">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="daerah" class="form-label">
                                                            <strong>Tanggal Peletakan Lunas </strong> <br>
                                                            <i>Date Keel Laid</i>
                                                        </label>
                                                        <input type="date" class="form-control" id="daerah"
                                                            name="tgl_peletakan_lunas">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="border p-2">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="pelabuhan" class="form-label">
                                                            <strong>No. Klasifikasi</strong> <br>
                                                            <i>Classification No</i>
                                                        </label>
                                                        <input type="text" class="form-control" id="pelabuhan"
                                                            name="no_klasifikasi">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="pelabuhan" class="form-label">
                                                            <strong>Jenis Kapal</strong> <br>
                                                            <i>Type of Ship</i>
                                                        </label>
                                                        <input type="text" class="form-control" id="pelabuhan"
                                                            name="jenis_kapal">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="daerah" class="form-label">
                                                            <strong>Nama dan alamat dari Pemilik Perusahaan atau Keagenan
                                                            </strong> <br>
                                                            <i>Name and Address of Owner Manager or Managing agent </i>
                                                        </label>
                                                        <input type="text" class="form-control" id="daerah"
                                                            name="nama_alamat_pemilik">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- CheckBox --}}
                                    <div class="col-md-6">
                                        <div class="border p-2">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                            <table class="table-responsive">
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="kapalBaru"
                                                                                value="kapalBaru" name="kapalBaru">
                                                                            <label class="form-check-label"
                                                                                for="kapalBaru">Kapal Baru</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="kapalLama"
                                                                                value="kapalLama" name="kapalLama">
                                                                            <label class="form-check-label"
                                                                                for="kapalLama">Kapal Lama</label>
                                                                        </div>
                                                                        <div class="mx-1" id="keterangan"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="ada" id="defaultCheck1"
                                                                            name="pemeriksaan_pertama">
                                                                        <label class="form-check-label mx-2"
                                                                            for="defaultCheck1">
                                                                            <strong>Pemeriksaan Pertama</strong> <br>
                                                                            <i>Initial Inspection </i>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="ada" id="defaultCheck1"
                                                                            name="pemeriksaan_tahunan">
                                                                        <label class="form-check-label mx-2"
                                                                            for="defaultCheck1">
                                                                            <strong>Pemeriksaan Tahunan</strong> <br>
                                                                            <i>Annual Inspection</i>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="ada" id="defaultCheck1"
                                                                            name="pemeriksaan_pembaharuan2 ">
                                                                        <label class="form-check-label mx-2"
                                                                            for="defaultCheck1">
                                                                            <strong>Pemeriksaan Pembaharuan</strong> <br>
                                                                            <i>Renewal Inspection</i>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="ada" id="defaultCheck1"
                                                                            name="pemeriksaan_antara2">
                                                                        <label class="form-check-label mx-2"
                                                                            for="defaultCheck1">
                                                                            <strong>Pemeriksaan Antara </strong> <br>
                                                                            <i>Intermediate Inspection</i>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="ada" id="defaultCheck1"
                                                                            name="pemeriksaan_tambahan2">
                                                                        <label class="form-check-label mx-2"
                                                                            for="defaultCheck1">
                                                                            <strong>Pemeriksaan Tambahan </strong> <br>
                                                                            <i>Additional Inspection</i>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="border p-2">
                                            <div class="row">
                                                <p class="text-justify">
                                                    DENGAN INI MENYATAKAN bahwa yang bertanda tangan dibawah ini teleh
                                                    memeriksa Konstruksi Keselamatan Kapal dan ditemukan telah sesuai dengan
                                                    NCVS sebagaimana tersebut dalam laporan berikut : <br>
                                                    <i>
                                                        THIS IS TO CERTIFITY that undersigned has examined Ship’s Safety
                                                        Constructions and found them in compliance with NCVS as reported
                                                        herein.
                                                    </i>
                                                </p>
                                            </div>

                                        <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                            <table class="table-responsive">
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" name="kondisi_baik" value="ada"
                                                            id="defaultCheck1">
                                                        <label class="form-check-label mx-2" for="defaultCheck1">
                                                            <strong>Check dalam kondisi baik /√</strong> <br>
                                                            <i>Check of found satisfactory </i>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" name="rekomendasi" value="ada"
                                                            id="defaultCheck1">
                                                        <label class="form-check-label mx-2" for="defaultCheck1">
                                                            <strong>Rekomendasi untuk hal-hal yang belum
                                                                disesuaikan</strong> <br>
                                                            <i>Recommendation(s) left outstanding </i>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" name="sertifikat_berlaku" value="ada"
                                                            id="defaultCheck1">
                                                        <label class="form-check-label mx-2" for="defaultCheck1">
                                                            <strong>Sertifikat berlaku hingga
                                                            </strong> <br>
                                                            <i>Certificate valid until</i>
                                                            <input type="text" class="form-control" id="tglBerlaku" name="tgl_berlaku" placeholder="dd/mm/yyyy">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" name="peralatan_tidak_ada" value="ada"
                                                            id="defaultCheck1">
                                                        <label class="form-check-label mx-2" for="defaultCheck1">
                                                            <strong>Check peralatan tidak ada /- </strong> <br>
                                                            <i>Check but not applicable</i>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" name="peralatan_tidak_berfungsi" value="ada"
                                                            id="defaultCheck1">
                                                        <label class="form-check-label mx-2" for="defaultCheck1">
                                                            <strong>Check peralatan ada tapi tidak berfungsi </strong> <br>
                                                            <i>Check applicable but not found satisfactory /x</i>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                    {{-- Tanda tangan Digital --}}
                                    <div class="col-md-6 mt-3">
                                        <div class="col-md-12">
                                            <label class="text-center" for=""><strong>Data
                                                    Pemeriksa</strong></label>
                                            <div class="p-2">
                                                <input type="text" class="form-control" id="pelabuhan"
                                                    name="nama_pemeriksa" placeholder="Nama Pemeriksa"> <br>
                                                <input type="text" class="form-control" id="pelabuhan"
                                                    name="no_nip" placeholder="NIP"><br>
                                                <input type="text" class="form-control" id="pelabuhan"
                                                    name="no_mi" placeholder="Nomer MI">
                                            </div>
                                            <div id="sig">
                                                <canvas id="signatureCanvas" width="500" height="300"></canvas>
                                            </div>
                                            <br />
                                            <button id="clear" class="btn btn-danger btn-sm" type="button">Clear Signature</button>
                                            <textarea id="signature64" name="ttd" style="display: none"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        {{-- <div id="progress-container">
                            <div id="progress-bar"></div>
                        </div> --}}
                        {{-- 1. JUDUL --}}
                        <div class="table-responsive mt-2 mx-auto">
                            {{-- 1 --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">1</td>
                                            <td style="font-weight: bold;">SUMBER TENAGA LISTRIK/ <i>SOURCE OF ELECTRICAL POWER</i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            {{-- FORM 1 --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>(1)</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Sumber Tenaga Listrik Utama <br>
                                                </strong>
                                                    <i>Main source of power</i> <br>
                                                    [Bab V Pasal 109 Dokumen NCVS]
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="data3"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="data3">
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Items</th>
                                                            <th class="text-center align-middle">Volts</th>
                                                            <th class="text-center align-middle">KVA</th>
                                                            <th class="text-center align-middle">Unit/Sets</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Sumber Tenaga Listrik Utama <br>
                                                                    <em>Main source of power</em><br />
                                                                    [Bab V Pasal 109 Dokumen NCVS]
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="volts_sumber_tenaga_listrik" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="kva_sumber_tenaga_listrik" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="unit_sumber_tenaga_listrik" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- FORM 2 --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>(2)</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Sumber Tenaga Listrik Darurat <br>
                                                </strong>
                                                    <i>Emergency source of electrical power</i> <br>
                                                    [KM 65 Tahun 2009, Bab V Pasal 110]
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="data4"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="data4">
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Items</th>
                                                            <th class="text-center align-middle">Voltase/Voltage</th>
                                                            <th class="text-center align-middle">Kapasitas/Capacity</th>
                                                            <th class="text-center align-middle">Unit/Sets</th>
                                                            <th class="text-center align-middle">Lokasi/Laocated at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td class="align-middle">
                                                                <p>Generator</p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="generator_voltase" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="generator_kapasitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="generator_unit" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="generator_lokasi" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="align-middle">
                                                                <p>Battery</p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="battery_voltase" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="battery_kapasitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="battery_unit" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="battery_lokasi" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="row mb-3">
                                                                <div class="col-md-8">
                                                                    <label for="daerah" class="form-label">
                                                                        <strong>Peralatan yang dioperasikan oleh listrik cadangan untuk</strong><br> <i>Equipments operated by emergency source of electrical power for</i>
                                                                    </label>
                                                                    <div class="input-group">
                                                                        <input type="number" class="form-control" name="alat_listrik_cadangan">
                                                                        <span class="input-group-text">Jam</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                    <table class="table table-responsive">
                                                                        <tr>
                                                                            <td>a.</td>
                                                                            <td>
                                                                                <label class="form-check-label mx-5" for="defaultCheck1">
                                                                                    Instalasi VHF Radio, Sistem dengan penerima DSC
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <input class="form-check-input mx-3" type="checkbox" name="check_instalasi_vhf_radio" value="ada">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>b.</td>
                                                                            <td>
                                                                                <label class="form-check-label mx-5" for="defaultCheck1">
                                                                                    Instalasi Radio MF/<i>MF Radio Installation</i>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <input class="form-check-input mx-3" type="checkbox" name="check_instalasi_radio_mf" value="ada">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>c.</td>
                                                                            <td>
                                                                                <label class="form-check-label mx-5" for="defaultCheck1">
                                                                                    Instalasi Radio MF/HF dengan penerima DSC/ <br><i>MF/HF Radio Installation with DSC watch receiver</i>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <input class="form-check-input mx-3" type="checkbox" name="check_instalasi_radio_mf_dengan_dsc" value="ada">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>d.</td>
                                                                            <td>
                                                                                <label class="form-check-label mx-5" for="defaultCheck1">
                                                                                    SES INMARSAT/<i>INMARSAT SES</i>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <input class="form-check-input mx-3" type="checkbox" name="check_ses_inmarsat" value="ada">
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- FORM 3 --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>(3)</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Tenaga Cadangan (accu)<br>
                                                </strong>
                                                <i>Reserve source of energy (battery)</i> <br>
                                                [Bab III Pasal 43,44,48,49,50 Dokumen NCVS]
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="data5"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="data5">
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Tipe/Type</th>
                                                            <th class="text-center align-middle">Voltase/Voltage</th>
                                                            <th class="text-center align-middle">Kapasitas/Capacity</th>
                                                            <th class="text-center align-middle">Specific weight Of acid</th>
                                                            <th class="text-center align-middle">Lokasi/Laocated at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_tenaga_cadangan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="voltase_tenaga_cadangan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="kapasitas_terakhir_tenaga_cadangan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="specific_terakhir_tenaga_cadangan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="lokasi_terakhir_tenaga_cadangan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Kedudukan dan instalasi accu/<i>Sitting and installation of battery</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="kedudukan_instalasi_accu" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Pengisian accu secara otomatis/<i>Means of automatically charging</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="pengisian_accu_otomatis" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Jam Pengoperasian/<i>Operating hours</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="jam_operasional" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">a.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                1 jam atau lebih, VHF, MF/HF & INMARSAT/<i>1 Hour or more, if VHF, MF, MF/HF & INMARSAT</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="one_hour_or_more" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px"></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                SES dapat dioperasikan oleh sumber tenaga cadangan/<i>SES are operated by the emergency source</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="ses_dapat_dioperasikan" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">b.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                6 jam atau lebih/<i>6 hours or more</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="6_jam_lebih" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Perangkat yang dapat dioperasikan oleh sumber tenaga cadangan/<i>Equipments operated by reserve source of energy</i>
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">a.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Lampu darurat untuk radio kontrol/<i>Emergency light for radio controller</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="lampu_darurat_radio_kontrol" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">b.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Instalasi radio VHF/<i>VHF radio installation of </i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="instalasi_radio_vhf" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">c.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Instalasi radio MF/<i>MF Radio installation</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="instalasi_radio_mf" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">d.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Instalasi radio MF/HF/<i>MF/HF Radio installation of</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="instalasi_radio_mf_hf" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">e.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                SES INMARSAT Sistem<i>INMARSAT SES system</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="ses_inmarsat_sistem" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 2 --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">2</td>
                                            <td style="font-weight: bold;">PERALATAN KESELAMATAN/<i>LIFE SAVING APPLIANCES</i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            {{-- FORM 2.1 --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>(1)</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Peralatan Radio Panggil Komunikasi dua arah <br>
                                                </strong>
                                                    <i>Two-way VHF radiotelephony apparatus</i>
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="data6"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="data6">
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">No</th>
                                                            <th class="text-center align-middle">Pabrik/Manufacturer</th>
                                                            <th class="text-center align-middle">Tipe (No. Seri)/Type (Serial No)</th>
                                                            <th class="text-center align-middle">Channels</th>
                                                            <th class="text-center align-middle">Disetuji ole/Approved by</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td class="text-center align-middle">1</td>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_radio_panggil_dua_arah" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_radio_panggil_dua_arah" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="channels_radio_panggil_dua_arah" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_radio_panggil_dua_arah" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-middle">2</td>
                                                            <td>
                                                                <textarea class="form-control" name="voltase_tenaga_cadangan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="kapasitas_terakhir_tenaga_cadangan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="specific_terakhir_tenaga_cadangan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="lokasi_terakhir_tenaga_cadangan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- FORM 2.2 --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>(2)</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Radar transponders [Bab IV Pasal 83 g Dokumen NCVS] <br>
                                                </strong>
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="data7"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="data7">
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">No</th>
                                                            <th class="text-center align-middle">Manufacturer</th>
                                                            <th class="text-center align-middle">Type (Serial No)</th>
                                                            <th class="text-center align-middle">Channels</th>
                                                            <th class="text-center align-middle">Approved by</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td class="text-center align-middle">1</td>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_radar_transponders" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_radar_transponders" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="channels_radar_transponders" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_radar_transponders" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 3 --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">3</td>
                                            <td style="font-weight: bold;">INSTALASI RADIO/<i>LRADIO INSTALLATION</i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                        style="width: 5%"></td>
                                        <td class="table-secondary align-items-center justify=content-center"
                                            style="width: 1100px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio3"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Lokasi dan kondisi lingkungan radio/<i>Location and environmental conditions of radio installation</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="kondisi_lingkungan_radio" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Penerangan darurat untuk kontrol radio/<i>Emergency lighting for radio controller</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="penerangan_darurat_untuk_kontrol" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Penandaan yang jelas untuk call sign, Id dan code lainnya/<i>Clear marking of call-sign, ship's ID and other codes</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="penandaan_callsign_id_code" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Suku cadang dan peralatan/<i>Spare parts & tools</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="suku_cadang_peralatan" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Dokumen teknik tambahan, alat ukur dan suku cadang, pemeliharaan di laut/<i>Additional technical documentation, tools measuring equipment & parts at sea maintenance</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="dokumen_tambahan" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 4 --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">4</td>
                                            <td style="font-weight: bold;">KOMPOSISI INSTALASI RADIO/<i>COMPOSITION OF RADIO INSTALLATION</i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            {{-- 4.1 --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                        style="width: 5%"><strong>(1)</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px"><strong>Sistem Utama</strong>/<i>Primary system</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio4"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                               VHF DSC
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input align-middle" type="checkbox" name="sistem_utama_vhf_dsc" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                MF DSC
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="sistem_utama_mf_dsc" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                MF/HF DSC
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="sistem_utama_mfhf_dsc" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                INMARSAT-C
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="sistem_utama_inmarsat_c" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 4.2 --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                        style="width: 5%"><strong>(2)</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px"><strong>Sistem yang digandakan</strong>/<i>Duplicated system</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio5"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio5">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                               VHF DSC
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input align-middle" type="checkbox" name="duplicated_system_vhf_dsc" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                MF DSC
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="duplicated_system_mf_dsc" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                MF/HF DSC
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="duplicated_system_mf_hf_dsc" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                INMARSAT-C
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="duplicated_system_inmarsat_c" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 4.3 --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                        style="width: 5%"><strong>(3)</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px"><strong>Sinyal peringatan kedua</strong>/<i>Second mean of alerting</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio6"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                               VHF DSC
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input align-middle" type="checkbox" name="sistemPeringatan_kedua_vhf_dsc" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                MF DSC
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="sistemPeringatan_kedua_mf_dsc" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                MF/HF DSC
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="sistemPeringatan_kedua_mf_hf_dsc" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                INMARSAT-C
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="sistemPeringatan_kedua_inmarsat_c" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                EPIRB <br> 406MHz
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="sistemPeringatan_kedua_epirb" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 5 --}}
                            {{-- JUDUL --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">5</td>
                                            <td style="font-weight: bold;">PERANGKAT RADIO PRIMARY & DUPLICATED SYSTEM/ <i>RADIO EQUIPMENT PRIMARY & DUPLICATED SYSTEM</i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            {{-- END JUDUL --}}
                            {{-- 5.(1) --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>(1)</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Instalasi Radio<br>
                                                </strong>
                                                <i>VHF Radio installation </i> <br>
                                                [Bab III Pasal 43,44,48,49,50 Dokumen NCVS]
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio7"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio7">
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Pabrik/Manufacturer</th>
                                                            <th class="text-center align-middle">Tipe (No. Seri)/Type (Serial No)</th>
                                                            <th class="text-center align-middle">Channels</th>
                                                            <th class="text-center align-middle">Disetuji oleh/Approved by</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_radio_instalasi_radio" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_radio_instalasi_radio" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="channels_radio_instalasi_radio" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_radio_instalasi_radio" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_radio_instalasi_radio_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_radio_instalasi_radio_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="channels_radio_instalasi_radio_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_radio_instalasi_radio_2" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Inisiasi peringatan dini pada Ch 70 dari anjungan/<i>Initiation of DSC distress alert on ch.70 from navigating position</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="inisiasi_peringatan_dini" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Prioritas utama kontrol diruang kemudi/<i>Highest priority of controller in wheel house (bridge)</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="prioritas_diruang_kemudi" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Fasilitas untuk olah gerak/<i>Facility for bridge wings communication</i>
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">a.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Menggunakan kabel/<i>Extension cord</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="menggunakan_kabel" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">b.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Saluran telepon terpasang/<i>Fixed handset line</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="saluran_telepon_terpasang" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">c.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Pemancar penerima VHF/<i>VHF transceiver</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="pemancar_penerima_vhf" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Fungsi VHF DSC/<i>VHF DSC function :</i>
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">a.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Menyatu dengan VHF/<i>Combined with VHF radio installation</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="menyatu_dengan_vhf" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">b.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Terpisah dari instalasi Radio VHF/<i>Separate from VHF radio installation</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="terpisah_dari_intalasi_radio_vhf" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <h5 class="mt-3">Terminal VHF DSC/Separated VHF DSC terminal</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Pabrik/Manufacturer</th>
                                                            <th class="text-center align-middle">Tipe (No. Seri)/Type (Serial No)</th>
                                                            <th class="text-center align-middle">Disetuji oleh/Approved by</th>
                                                            <th class="text-center align-middle">Lokasi/Located at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_terminal_vhf_dsc" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_terminal_vhf_dsc" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_terminal_vhf_dsc" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="lokasi_terminal_vhf_dsc" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_terminal_vhf_dsc_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_terminal_vhf_dsc_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_terminal_vhf_dsc_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="lokasi_terminal_vhf_dsc_2" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>5.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                VHF DSC receiver
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Fungsi jaga dengan VHF DSC/<i>VHF DSC watch keeping function :</i>
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">a.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Kombinasi dengan VHF Radio Instalasi/<i>Combined with VHF radio installation</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="kombinasi_dengan_vhf_radio" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">b.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Terpisah dari instalasi Radio VHF/<i>Separate from VHF radio installation</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="terpisah_dari_intalasi_radio_vhf2" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <h5 class="mt-3">Penerima Jaga pada saluran 70 VHF DSC terpisah/Separate VHF DSC watch receiver on ch70</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Pabrik/Manufacturer</th>
                                                            <th class="text-center align-middle">Tipe (No. Seri)/Type (Serial No)</th>
                                                            <th class="text-center align-middle">Disetuji oleh/Approved by</th>
                                                            <th class="text-center align-middle">Lokasi/Located at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_penerima_jaga_saluran_70vhf_dsc" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_penerima_jaga_saluran_70vhf_dsc" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_penerima_jaga_saluran_70vhf_dsc" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="lokasi_penerima_jaga_saluran_70vhf_dsc" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 5.(2) --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>(2)</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Instalasi Radio MF/HF/<br>
                                                </strong>
                                                <i>MF/HF radio installation</i> <br>
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio8"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio8">
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Pabrik/Manufacturer</th>
                                                            <th class="text-center align-middle">Tipe (No. Seri)/Type (Serial No)</th>
                                                            <th class="text-center align-middle">Jarak Frekwensi/Freq range</th>
                                                            <th class="text-center align-middle">Output power</th>
                                                            <th class="text-center align-middle">Disetuji oleh/Approved by</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_radio_instalasi_radio_mf_hf" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="freq_range_radio_instalasi_radio_mf_hf" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_radio_instalasi_radio_mf_hf" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="Output_power_radio_instalasi_radio_mf_hf" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_radio_instalasi_radio_mf_hf" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_radio_instalasi_radio_mf_hf_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="freq_range_radio_instalasi_radio_mf_hf_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_radio_instalasi_radio_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="output_power_radio_instalasi_radio_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_radio_instalasi_radio_2" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Institusi peringatan dini dari posisi navigasi normal/<i>Institution of DSC distress alert from normal navigating position</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="institusi_peringatan_dini" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Fungsi MF/HF/DSC : Disatukan dengan instalasi Radio MF/HF DSC/<i>MF/HF DSC function : combined with MF/HF radio installation.</i>
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">a.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Kombinasi dengan instalasi Radio MF/HF/<i>Combined with MF/HF Radio installation</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="combined_with_nf_hf" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">b.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Terpisah dari instalasi radio MF/HF/<i>Separate from MF/HF Radio installation</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="separate_from_mf_hf" value="ada">
                                                                        </td>
                                                                    </tr>

                                                                </table>
                                                            </div>
                                                            <h5 class="mt-3">Terminal MF/HF Terpisah/<i>Separate MF/HF DSC terminal</i></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Pabrik/Manufacturer</th>
                                                            <th class="text-center align-middle">Tipe (No. Seri)/Type (Serial No)</th>
                                                            <th class="text-center align-middle">Disetuji oleh/Approved by</th>
                                                            <th class="text-center align-middle">Lokasi/Located at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_terminal_mf_hf_terpisah" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_terminal_mf_hf_terpisah" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_terminal_mf_hf_terpisah" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="lokasi_terminal_mf_hf_terpisah" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>3.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Penerima jaga <MF>
                                                                                <i>HF DSC/MF/HF DSC watch receiver</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="penerima_jaga" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Fungsi Jaga dengar MF/HF DSC/<i>MF/HF DSC watch keeping function</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="fungsi_jaga_dengar" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Kombinasi dengan instalasi radio MF/HF/<i>Combined with MF/HF Radio Installation</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="kombinasi_instalasi_radio_mf" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Terpisah dari instalasi Radio MF/HF/<i>Separate from MF/HF radio installation</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="terpisah_dari_instalasi_radio_mfhf" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <h5 class="mt-3">Penerima Jaga MF/HF DSC/<i>Separated MF/HF DSC watch receiver</i></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Pabrik/Manufacturer</th>
                                                            <th class="text-center align-middle">Tipe (No. Seri)/Type (Serial No)</th>
                                                            <th class="text-center align-middle">Disetuji oleh/Approved by</th>
                                                            <th class="text-center align-middle">Lokasi/Located at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_penerima_jaga_mf_hf_dsc" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_penerima_jaga_mf_hf_dsc" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_penerima_jaga_mf_hf_dsc" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="lokasi_penerima_jaga_mf_hf_dsc" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>4.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Telegrap cetak langsung/<MF>
                                                                                <i>Direct printing telegraphy</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="telegrap_cetak_langsung" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Fungsi Telegrap cetak langsung/<i>Direct printing telegraphy function</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="fungsi_telegrap_cetak_langsung" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Kombinasi dengan instalasi MF/HF/
                                                                               <i>Combined with MF/HF installation</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="kombinasi_instalasi_radio_mf_hf" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Terpisah dari instalasi Radio MF/HF/<i>Separate from MF/HF radio installation</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="terpisah_dari_instalasi_radio_mfhf_4" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <h5 class="mt-3">Perangkat Telegrap cetak Langsung terpisah/<i>Separated direct printing telegraphy terminal</i></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Pabrik/Manufacturer</th>
                                                            <th class="text-center align-middle">Tipe (No. Seri)/Type (Serial No)</th>
                                                            <th class="text-center align-middle">Disetuji oleh/Approved by</th>
                                                            <th class="text-center align-middle">Lokasi/Located at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_perangkat_telegrap_cetak_langsung_terpisah" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_perangkat_telegrap_cetak_langsung_terpisah" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_perangkat_telegrap_cetak_langsung_terpisah" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="lokasi_perangkat_telegrap_cetak_langsung_terpisah" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 5.(3) --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>(3)</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Fasilitas terpasang kapal INMARSAT/<br>
                                                </strong>
                                                <i>INMARSAT ship earth station</i> <br>
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio9"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio9">
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Dibuat/Manufactured</th>
                                                            <th class="text-center align-middle">INMARSAT</th>
                                                            <th class="text-center align-middle">Tipe(No Seri)</th>
                                                            <th class="text-center align-middle">Disetuji oleh/Approved by</th>
                                                            <th class="text-center align-middle">Lokasi/Located at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="dibuat_fasilitas_kapal_inmarsat" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="inmarsat_fasilitas_kapal_inmarsat" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_fasilitas_kapal_inmarsat" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh__fasilitas_kapal_inmarsat" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="lokasi_fasilitas_kapal_inmarsat" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="dibuat_fasilitas_kapal_inmarsat_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="inmarsat_fasilitas_kapal_inmarsat_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_fasilitas_kapal_inmarsat_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetuji_oleh_fasilitas_kapal_inmarsat_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="lokasi_fasilitas_kapal_inmarsat_2" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Pengamatan tanda peringatan dini dari anjungan/<i>IInstallation of distress alert from normal navigating position</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="pengamatan_tanda_peringatan_dini" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Situasi antena/<i>Antenna situation</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="situasi_antena" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Ketinggian yang dimungkinkan/<i>Fitted high as possible</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="ketinggian_yang_dimungkinkan" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Cukup terpisah dari antena lainnya/<i>Sufficiently separated from other antenna</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="cukup_terpisah_antena_lainnya" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Tidak ada halangan yang berarti dalam penurunan kemampuan/<i>Fitted in such position that no obstacles significantly degrade the performance</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="tidak_ada_halangan" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Dalam kaitan dengan INMARSAT-A atau alur antena lainnya/<i>In case of INMARSAT - A or other tracking antenna:</i>
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Memastikan dapat memberikan informasi kapal-kapal secara berkesinambungan/<i>Ensuring of continues supply of ship's heeding information</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="memberikan_informasi_berkesinambungan" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 6 --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">6</td>
                                            <td style="font-weight: bold;">PERANGKAT RADIO-FASILITAS PENERIMA MSI/<i>RADIO EQUIPMENT-MSI Receiving FACILITIES</i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            {{-- 6.(1) --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>(1)</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    NAVTEX receiver<br>
                                                </strong>
                                                [Bab III Pasal 43,44,48,49,50 Dokumen NCVS]
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio10"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio10">
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Pabrik/Manufacturer</th>
                                                            <th class="text-center align-middle">Tipe(No Seri)</th>
                                                            <th class="text-center align-middle">Disetuji oleh/Approved by</th>
                                                            <th class="text-center align-middle">Lokasi/Located at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_navtex_receiver" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_navtex_receiver" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_navtex_receiver" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="lokasi_navtex_receiver" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 6.(2) --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>(2)</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Penerima/pencatat EGC/<br>
                                                </strong>
                                                <em>EGC receiver /recorder</em>
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio11"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio11">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Fungsi/<i>Function :</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="fungsi" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">a.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Menyatu dengan INMARSAT/<i>Built in INMARSAT</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="menyatu_dengan_inmarsat" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 40px">b.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Terpisah dari INMARSAT/<i>Separated from INMARSAT</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="terpisah_dari_inmarsat" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <h5 class="mt-3">Decoder/penerima EGC Terpisah/<i>Separated EGC receiver/decoder</i></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Pabrik/Manufacturer</th>
                                                            <th class="text-center align-middle">Tipe(No Seri)</th>
                                                            <th class="text-center align-middle">Disetuji oleh/Approved by</th>
                                                            <th class="text-center align-middle">Lokasi/Located at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_penerima_egc_terpisah" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_penerima_egc_terpisah" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_penerima_egc_terpisah" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="lokasi_penerima_egc_terpisah" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 6.(3) --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>(3)</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Penerima HF NBDP<br>
                                                </strong>
                                                <em>HF NBDP receiver</em>
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio12"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                HF NBDP receiving function:
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="fungsi_penerima_nbdp_hf" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Menyatu dengan instalasi Radio MF/HF/<i>Build in MF/HF radio installation</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="menyatu_dengan_instalasi_radio_mfhf" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <h5 class="mt-3">Penerima HF NBDP/<i>Separate HF NBDP receiver</i></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Pabrik/Manufacturer</th>
                                                            <th class="text-center align-middle">Tipe(No Seri)</th>
                                                            <th class="text-center align-middle">Disetuji oleh/Approved by</th>
                                                            <th class="text-center align-middle">Lokasi/Located at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_penerima_hf_nbdp" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_penerima_hf_nbdp" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_penerima_hf_nbdp" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="lokasi_penerima_hf_nbdp" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 7 --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">7</td>
                                            <td style="font-weight: bold;">PERANGKAT RADIO - EPIRB [Bab III Pasal 43, 44, 48, 49, 50 Dokumen NCVS]/<i>RADIO EQUIPMENT - EPIRB</i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            {{-- 7.(1) --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                        style="width: 5%"></td>
                                        <td class="table-secondary align-items-center justify=content-center"
                                            style="width: 1100px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio13"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio13">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Satellite EPIRB :
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="satelite_epirb" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <table class="table table-bordered">
                                                                <thead class="table-success text-center">
                                                                    <tr>
                                                                        <th class="text-center align-middle">Pabrik/Manufacturer</th>
                                                                        <th class="text-center align-middle">Tipe(No Seri)</th>
                                                                        <th class="text-center align-middle">Disetuji oleh/Approved by</th>
                                                                        <th class="text-center align-middle">Lokasi/Located at</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- Baris dan kolom dengan form -->
                                                                    <tr>
                                                                        <td>
                                                                            <textarea class="form-control" name="pabrik_satelite_epirb" style="width: 100%;"></textarea>
                                                                        </td>
                                                                        <td>
                                                                            <textarea class="form-control" name="tipe_satelite_epirb" style="width: 100%;"></textarea>
                                                                        </td>
                                                                        <td>
                                                                            <textarea class="form-control" name="disetujui_oleh_satelite_epirb" style="width: 100%;"></textarea>
                                                                        </td>
                                                                        <td>
                                                                            <textarea class="form-control" name="lokasi_satelite_epirb" style="width: 100%;"></textarea>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                    <!-- Baris dan kolom dengan form -->
                                                                    <tr>
                                                                        <td class="align-middle text-center">1.</td>
                                                                        <td class="align-middle">
                                                                            <p>
                                                                                Kode khusus data beacon/
                                                                                <br>
                                                                                <em>Data of unique beacon of identification code</em>
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <textarea class="form-control" name="kode_data_beacon" style="width: 100%;"></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="align-middle text-center">2.</td>
                                                                        <td class="align-middle">
                                                                            <p>
                                                                                Fasilitas Penuntun/<br>
                                                                                <em>Homing facilities</em>
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <textarea class="form-control" name="fasilitas_penuntun" style="width: 100%;"></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="align-middle text-center">3.</td>
                                                                        <td class="align-middle">
                                                                            <p>
                                                                                Jenis Sensor Pelepas/<br>
                                                                                <em>Type of release sensor</em>
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <textarea class="form-control" name="jenis_sensor_pelepas" style="width: 100%;"></textarea>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                             {{-- 8 --}}
                             <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">8</td>
                                            <td style="font-weight: bold;">PERLENGKAPAN RADIO TRANSPONDER RADAR KAPAL PADA 9 GHz/<i>RADIO EQUIPMENT - SHIP'S RADAR TRANSPONDER ON 9 GHz</i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            {{-- 8.(1) --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                        style="width: 5%"></td>
                                        <td class="table-secondary align-items-center justify=content-center"
                                            style="width: 1100px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio14"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio14">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Satu ditempatkan pada sekoci penolong/<i>One of those required for survival craft</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="ditempatkan_pada_sekoci" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Digunakan khusus diatas kapal/<i>Use exclusively-on board ship</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="digunakan_khusus_dikapal" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="mt-3" style="font-size: 18px">Penggunaan Radar Transponder secara ekslusif/<i>Radar transponder use exclusively</i></div>
                                                            <table class="table table-bordered">
                                                                <thead class="table-success text-center">
                                                                    <tr>
                                                                        <th class="text-center align-middle">Pabrik/Manufacturer</th>
                                                                        <th class="text-center align-middle">Tipe(No Seri)</th>
                                                                        <th class="text-center align-middle">Disetuji oleh/Approved by</th>
                                                                        <th class="text-center align-middle">Lokasi/Located at</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- Baris dan kolom dengan form -->
                                                                    <tr>
                                                                        <td>
                                                                            <textarea class="form-control" name="pabrik_penggunaan_radar_secara_eksklusif" style="width: 100%;"></textarea>
                                                                        </td>
                                                                        <td>
                                                                            <textarea class="form-control" name="tipe_penggunaan_radar_secara_eksklusif" style="width: 100%;"></textarea>
                                                                        </td>
                                                                        <td>
                                                                            <textarea class="form-control" name="disetujui_oleh_penggunaan_radar_secara_eksklusif" style="width: 100%;"></textarea>
                                                                        </td>
                                                                        <td>
                                                                            <textarea class="form-control" name="lokasi_penggunaan_radar_secara_eksklusif" style="width: 100%;"></textarea>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 9 --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">9</td>
                                            <td style="font-weight: bold;">Perangkat Radio - Fasilitas Frekuensi Marabahaya Radio Telepon Pada 2182 kHz</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><i>RADIO EQUIPMENT - Radio Telephone distress frequency facilities on 2182 khz</i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>(1)</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Penerima jaga frekuensi Marabahaya Radio Telepon pada 2182 kHz/<br>
                                                </strong>
                                                <i>Radiotelephony distress frequency watch receiver on 2182 kHz</i> <br>
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio15"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio15">
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Pabrik/Manufacturer</th>
                                                            <th class="text-center align-middle">Tipe (No. Seri)/Type (Serial No)</th>
                                                            <th class="text-center align-middle">Jarak Frekwensi/Freq range</th>
                                                            <th class="text-center align-middle">Output power</th>
                                                            <th class="text-center align-middle">Disetuji oleh/Approved by</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_penerima_jaga_frekuensi2182khz" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="freq_range_penerima_jaga_frekuensi2182khz" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_penerima_jaga_frekuensi2182khz" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="Output_power_penerima_jaga_frekuensi2182khz" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_penerima_jaga_frekuensi2182khz" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_radio_instalasi_radio_mf_hf_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="freq_range_radio_instalasi_radio_mf_hf_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_radio_instalasi_radio_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="output_power_radio_instalasi_radio_2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_radio_instalasi_radio_2" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Jika ditempatkan dalam ruangan radio sebuah alat pengeras suara dengan penghilang suara yang disediakan di anjungan/<i>If located in radio room: A speaker with mute device is provided in bridge<i>Institution of DSC distress alert from normal navigating position</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="penghilang_suara_dianjungan" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <h5 class="mt-3">Generator Sinyal alarm radio telepon/<i>Radiotelephone alarm signal generator on 2182kHz</i></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">Pabrik/Manufacturer</th>
                                                            <th class="text-center align-middle">Tipe (No. Seri)/Type (Serial No)</th>
                                                            <th class="text-center align-middle">Disetuji oleh/Approved by</th>
                                                            <th class="text-center align-middle">Lokasi/Located at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td>
                                                                <textarea class="form-control" name="pabrik_generator_sinyal_alarm" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_generator_sinyal_alarm" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="disetujui_oleh_generator_sinyal_alarm" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="lokasi_generator_sinyal_alarm" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 10 --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">10</td>
                                            <td style="font-weight: bold;">DOKUMENTASI/<i>DOCUMENTATION</i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                        style="width: 5%"></td>
                                        <td class="table-secondary align-items-center justify=content-center"
                                            style="width: 1100px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio16"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio16">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Izin komunikasi radio/<i>Radio station license</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="izin_komunikasi_radio" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Sertifikat personil radio/<i>Certificate of radio personnel</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="sertifikat_personil_radio" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Buku radio/<i>Radio log</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="buku_radio" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Daftar menurut abjad tanda panggilan dan tabel angka dari identifikasi tempat(pantai, pantai daratan, determinasi rasio dan tempat jasa khusus)/<i>Alphabetical list of call Signs and numerical table of identificationof station (coast, coast earth, ship, ship earth, radio determination & special service station)</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="daftar_identifikasi_tempat" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Daftar stasiun radio kapal/<i>List of ship stations</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="daftar_stasiun_radio_kapal" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>6.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Buku petunjuk penggunaan dengan jasa satelit bergerak kelautan dan maritim/<i>Manual of use by maritime mobile and maritime mobile satellite service</i>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="buku_penggunaan_jasa_satelit" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 11 --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">11</td>
                                            <td style="font-weight: bold;">KHUSUS INFORMASI TAMBAHAN JIKA ADA/<i>SPECIAL FEATURES OR ADDITION INFORMATIONS, IF ANY</i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                        style="width: 5%"></td>
                                        <td class="table-secondary align-items-center justify=content-center"
                                            style="width: 1100px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio17"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio17">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <table class="table table-responsive">
                                                                <tr>
                                                                    <td>
                                                                        <label class="form-check-label mx-3" for="defaultCheck1">
                                                                            Khusus informasi tambahan (jika ada)
                                                                        </label>
                                                                        <textarea class="form-control" name="khusus_informasi_tambahan" style="width: 700px; height: 20em;"></textarea>
                                                                    </td>
                                                                    <td>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 12 --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">12</td>
                                            <td style="font-weight: bold;">KETERSEDIAAN PERANGKAT LAIN/<i>OTHER EQUIPMENT PROVIDED</i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong></strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio18"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio18">
                                                <table class="table table-bordered">
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center align-middle">No</th>
                                                            <th class="text-center align-middle">Equipment</th>
                                                            <th class="text-center align-middle">Manufacturer/Type</th>
                                                            <th class="text-center align-middle">Serial No.</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td class="text-center align-middle">1.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Radar 9 GHz. [Bab III pasal 31 j Dokumen NCVS]
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="manufacturer_radar_9ghz" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="Serial_no_radar_9ghz" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-middle">2.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Radar 3 GHz [Bab III pasal 31 k Dokumen NCVS]
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="manufacturer_radar_3ghz" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="Serial_no_radar_3ghz" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-middle">3.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    ARPA [Bab III pasal 31 l Dokumen NCVS]
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="manufacturer_arpa" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="Serial_no_arpa" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-middle">4.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    2 ARPA [Bab III pasal 31 k Dokumen NCVS]
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="manufacturer_2arpa" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="Serial_no_2arpa" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-middle">5.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Homing function on 2182 KHz
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="manufacturer_homing_function2182khz" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="Serial_no_homing_function2182khz" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-middle">6.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Satellite Navigator (NNSS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="manufacturer_satelite_navigator" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="Serial_no_satelite_navigator" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-middle">7.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Facsimile Receiver
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="manufacturer_facsimile_receiver" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="Serial_no_facsimile_receiver" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-middle">8.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Echo Sounder [Bab III pasal 31 r Dokumen NCVS]
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="manufacturer_echo_sounder" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="Serial_no_echo_sounder" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-middle">9.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    AIS [Bab III pasal 31 p, 32 p Dokumen NCVS]
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="manufacturer_ais" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="Serial_no_ais" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-middle">10.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    LRIT*
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="manufacturer_lrit" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="Serial_no_lrit" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-middle">11.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    SSAS
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="manufacturer_ssas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="Serial_no_ssas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-middle">12.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    VDR* [Bab III pasal 31 p, 32 p Dokumen NCVS]
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="manufacturer_vdr" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="Serial_no_vdr" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-middle">13.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Global Positioning System (GPS) [Bab III pasal 31 i Dokumen NCVS]
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="manufacturer_gps" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="Serial_no_gps" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- 13 - DIRECTORATE --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;"><i class="bi bi-gear"></i></td>
                                            <td style="font-weight: bold;">
                                                DIRECTORATE GENERAL OF SEA COMMUNICATION <br>
                                                DIRECTORATE OF MARINE SAFETY
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <table class="table mt-2 mx-auto">
                                <tbody>
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="px-5">
                                            <button class="btn btn-primary my-2 toggleButton" type="button" data-target="radio19"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="radio19">
                                                <fieldset class="border p-2">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="border p-2">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-3">
                                                                        <div class="table-responsive">
                                                                            <table class="table">
                                                                                <tr>
                                                                                    <td>
                                                                                        <label for="nomor"
                                                                                            class="form-label p-2">No</label>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control p-2"
                                                                                            id="nomor" name="nomor"
                                                                                            placeholder=".....">
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" class="form-control"
                                                                                            id="format" name="format" value="/SCC/NCVS"
                                                                                            disabled>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="pemilik" class="form-label">
                                                                        <strong>Tanggal/Survey Date</strong> <br>
                                                                        <i>Date of Inspection</i>
                                                                    </label>
                                                                    <input type="date" class="form-control" id="pemilik"
                                                                        name="tgl_survey">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="border p-2">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="pelabuhan" class="form-label">
                                                                                <strong>Nama Kapal</strong> <br>
                                                                                <i>Name of Ship</i>
                                                                            </label>
                                                                            <input type="text" class="form-control" id="pelabuhan"
                                                                                name="ship_name">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="daerah" class="form-label">
                                                                                <strong>Bendera Kapal</strong> <br>
                                                                                <i>Call Sign</i>
                                                                            </label>
                                                                            <input type="text" class="form-control" id="daerah"
                                                                                name="bendera_kapal">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                <table class="table table-responsive">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                SHIP'S NAVIGATING AREAS
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                               A1
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="navigating_area_a1" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                A1 + A2
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="navigating_area_a1_a2" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                A1 + A2 + A3
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="navigating_area_a1_a2_a3" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                               A1 + A2 + A3 + A4
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="navigating_area_a1_a2_a3_a4" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                METHODS OF INSURING AVAILBILITY OF EQUIPMENT Duplication of equipment
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Shore based maintenance
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="shore_based_maintenance" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                At-sea electronic maintenance capability (On board Maintenance)
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="on_board_maintenance" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <td>3.</td>
                                                                </table>
                                                                <table>
                                                                    <thead class="table-success text-center">
                                                                        <tr>
                                                                            <th class="text-center align-middle">* *</th>
                                                                            <th class="text-center align-middle">Name of Radio Operator</th>
                                                                            <th class="text-center align-middle">Class & Certificate No</th>
                                                                            <th class="text-center align-middle">Certificate Issued by</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <!-- Baris dan kolom dengan form -->
                                                                        <tr>
                                                                            <td>
                                                                                <textarea class="form-control" name="no_radio_personil" style="width: 100%;"></textarea>
                                                                            </td>
                                                                            <td>
                                                                                <textarea class="form-control" name="manufacturer_radar_9ghz" style="width: 100%;"></textarea>
                                                                            </td>
                                                                            <td>
                                                                                <textarea class="form-control" name="manufacturer_radar_9ghz" style="width: 100%;"></textarea>
                                                                            </td>
                                                                            <td>
                                                                                <textarea class="form-control" name="Serial_no_radar_9ghz" style="width: 100%;"></textarea>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <textarea class="form-control" name="no_radio_personil" style="width: 100%;"></textarea>
                                                                            </td>
                                                                            <td>
                                                                                <textarea class="form-control" name="name_radio_personil" style="width: 100%;"></textarea>
                                                                            </td>
                                                                            <td>
                                                                                <textarea class="form-control" name="class_certificate_radio_personil" style="width: 100%;"></textarea>
                                                                            </td>
                                                                            <td>
                                                                                <textarea class="form-control" name="certificate_issue_radio_personil" style="width: 100%;"></textarea>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="4">
                                                                                <label class="form-control-label mx-3" for="defaultCheck1">
                                                                                    * * Check with “X” for the radio operator who is designated to have primary responsibility for radio communication = during distress incidents
                                                                                </label>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table>
                                                                    <tr>
                                                                        <td>4.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                ACTUAL PRIVISION OF SHIP'S RADIO EQUIPMENT
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 50px">(1)</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Primary system
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                               VHF <br>DSC
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="primary_system_vhf_dsc" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                MF/HF <br> DSC
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="primary_system_mf_hf_dsc" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                INMARSAT - C
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="primary_system_inmarsat_c" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 50px">(2)</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Duplicated system
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                               VHF <br>DSC
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="duplicated_system_vhf_dsc" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                MF/HF <br> DSC
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="duplicated_system_mf_hf_dsc" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                INMARSAT - C
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="duplicated_system_inmarsat_c" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <table>
                                                                    <tr>
                                                                        <td>5.</td>
                                                                        <td>
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                AVAILABILITY AND CONDITION
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 50px">5.1</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                VHF Radio Installation
                                                                            </label>
                                                                        </td>
                                                                        <td><strong>(P)</strong></td>
                                                                        <td></td>
                                                                        <td><strong>(D)</strong></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 100px">5.1.1</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Radiotelephony
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="p_radiotelephony_511" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="d_radiotelephony_511" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 100px">5.1.2</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                DSC (Digital Selective Call)
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="p_dsc_512" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="d_dsc_512" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 100px">5.1.3</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Jaga Dengar DSC/DSC watch-keeping
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="p_jaga_dengar_dsc_513" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="d_jaga_dengar_dsc_513" value="ada">
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="padding-left: 50px">5.2</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                MF Radio Installation
                                                                            </label>
                                                                        </td>
                                                                        <td><strong>(P)</strong></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 100px">5.2.1</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Radiotelephony
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="p_radiotelephony_521" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 100px">5.2.2</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                DSC (Digital Selective Call)
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="p_dsc_522" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 100px">5.2.3</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Jaga Dengar DSC/DSC watch-keeping
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="p_jaga_dengar_dsc_523" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="padding-left: 50px">5.3</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                MF/HF Radio Installation
                                                                            </label>
                                                                        </td>
                                                                        <td><strong>(P)</strong></td>
                                                                        <td></td>
                                                                        <td><strong>(D)</strong></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 100px">5.3.1</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Radiotelephony
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="p_radiotelephony_531" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="d_radiotelephony_531" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 100px">5.3.2</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                DSC
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="p_dsc_532" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="d_dsc_532" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 100px">5.3.3</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Jaga Dengar DSC/ DSC watch-keeping
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="p_jaga_dengar_dsc_533" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="d_jaga_dengar_dsc_533" value="ada">
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="padding-left: 50px">5.4</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                INMARSAT Ship Earth Station
                                                                            </label>
                                                                        </td>
                                                                        <td><strong>(P)</strong></td>
                                                                        <td></td>
                                                                        <td><strong>(D)</strong></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 100px">5.4.1</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                INMARSAT-A Radiotelephony
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="p_inmarsat_a_radiotelephony_531" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="d_inmarsat_a_radiotelephony_531" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 100px">5.4.2</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                Radio Telegram pencetak langsung/Direct-printing radiotelegraphy
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="p_radio_telegram_532" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="d_radio_telegram_532" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-left: 100px">5.4.3</td>
                                                                        <td style="padding-left: 20px">
                                                                            <label class="form-check-label mx-3" for="defaultCheck1">
                                                                                INMARSAT-C Direct-printing radiotelegraphy
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="p_inmarsat_c_direct_printing" value="ada">
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <input class="form-check-input mx-1" type="checkbox" name="d_inmarsat_c_direct_printing" value="ada">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            {{-- FOTO-FOTO --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">13</td>
                                            <td style="font-weight: bold;">PHOTOS FOR <br>SHIP SAFETY RADIO
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong><i class="bi bi-camera-fill"></i></strong></td>
                                        <td class="table-primary" style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>Upload File Foto</strong>
                                            </h6>
                                        </td>
                                    </tr>
                                    {{-- Tombol buka form --}}
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button"
                                                data-target="data8"><i class="bi bi-calendar-plus-fill"></i>
                                                <small>Folder Upload Foto</small></button>
                                        </td>
                                    </tr>
                                    {{-- Header --}}
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="data8">
                                                <div class="container">
                                                    <fieldset class="border p-2">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="border p-2">
                                                                    {{-- foto 1 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="VHF I" disabled>
                                                                            <input type="file" class="form-control file-input" name="vhf_1" id="inputGroupFile01" accept="image/*"  capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 2 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="VHF II" disabled>
                                                                            <input type="file" class="form-control file-input" name="vhf_2" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 3 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="MF/HF " disabled>
                                                                            <input type="file" class="form-control file-input" name="mf_hf" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 4 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="INMARSAT" disabled>
                                                                            <input type="file" class="form-control file-input" name="inmarsat_foto" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 5 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="NAVTEX" disabled>
                                                                            <input type="file" class="form-control file-input" name="navtex_foto" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 6 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="EPIRB" disabled>
                                                                            <input type="file" class="form-control file-input" name="epirb_foto" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 7 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="SART" disabled>
                                                                            <input type="file" class="form-control file-input" name="sart_foto" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 8 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="TWO WAY" disabled>
                                                                            <input type="file" class="form-control file-input" name="two_way_foto" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="border p-2">
                                                                    {{-- foto 9 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="RADAR I" disabled>
                                                                            <input type="file" class="form-control file-input" name="radar_1_foto" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 10 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="RADAR II" disabled>
                                                                            <input type="file" class="form-control file-input" name="radar_2_foto" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 11 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="ECHO SOUNDER" disabled>
                                                                            <input type="file" class="form-control file-input" name="echo_sounder_foto" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 12 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="LRIT" disabled>
                                                                            <input type="file" class="form-control file-input" name="lrit_foto" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 13 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="VDR / SVDR" disabled>
                                                                            <input type="file" class="form-control file-input" name="vdr_svdr_foto" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 14 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="GPS" disabled>
                                                                            <input type="file" class="form-control file-input" name="gps_foto" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 15 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="AIS" disabled>
                                                                            <input type="file" class="form-control file-input" name="ais_foto" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 16 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="WEATHER FAX" disabled>
                                                                            <input type="file" class="form-control file-input" name="weather_fax_foto" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                                </tbody>
                            </table>
                            {{-- REKOMENDASI HASIL --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">13</td>
                                            <td style="font-weight: bold;">REKOMENDASI HASIL PEMERIKSAAAN MI</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><i>RECOMMENDATION OF MI'S INSPECTION</i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong><i class="bi bi-pencil-fill"></i></i></strong>
                                        </td>
                                        <td class="table-primary" style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>Hasil Rekomendasi</strong>
                                            </h6>
                                        </td>
                                    </tr>
                                    {{-- Tombol buka form --}}
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button"
                                                data-target="data9"><i class="bi bi-calendar-plus-fill"></i>
                                                <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    {{-- Header --}}
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="data9">
                                                <div class="container">
                                                    <fieldset class="border p-2">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="border p-2">
                                                                    <div class="mb-3">
                                                                        <label for="namaKapal" class="form-label">
                                                                            <strong>Nama kapal</strong> <br>
                                                                            <i>Ships name</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            id="namaKapal" name="nama_kapal2">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="pemilik" class="form-label">
                                                                            <strong>Tanda panggilan</strong> <br>
                                                                            <i>Call sign</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            name="tanda_panggilann">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="pelabuhan" class="form-label">
                                                                            <strong>Isi kotor</strong> <br>
                                                                            <i>Gross tonnage</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            name="isi_kotor">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="daerah" class="form-label">
                                                                            <strong>Tahun pembuatan</strong> <br>
                                                                            <i>Year building</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            name="thn_pembuatan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="border p-2">
                                                                    <div class="mb-3">
                                                                        <label for="daerah" class="form-label">
                                                                            <strong>Tipe kapal</strong> <br>
                                                                            <i>Type of ships</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            name="tipe_kapal">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="daerah" class="form-label">
                                                                            <strong>Pelabuhan pendaftaran</strong> <br>
                                                                            <i> Port of registry</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            name="pelabuhan_pendaftaran">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="daerah" class="form-label">
                                                                            <strong>Pemilik</strong> <br>
                                                                            <i> Owner</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            id="daerah" name="pemilik_kapal">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="daerah" class="form-label">
                                                                            <strong>Jenis pemeriksaan</strong> <br>
                                                                            <i> Type of inspection</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            id="daerah" name="jenis_pemeriksaan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card border-0 shadow-bottom">
                                                                        <div class="card-body">
                                                                            <label for="daerah" class="form-label">
                                                                                <strong>Hasil pemeriksaan yang harus
                                                                                    dilakukan</strong> <br>
                                                                                <i>Followed item inspection should be
                                                                                    done</i>
                                                                            </label>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-6">
                                                                                <label for="daerah"
                                                                                    class="form-label p-2">
                                                                                    <strong>REKOMENDASI</strong>
                                                                                </label>
                                                                                <textarea class="form-control" name="rekomendasii" style="width: 100%; height: 5em; resize: none;"></textarea>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label for="daerah"
                                                                                    class="form-label p-2">
                                                                                    <strong>TINDAK LANJUT</strong>
                                                                                </label>
                                                                                <textarea class="form-control" name="tindak_lanjutt" style="width: 100%; height: 5em; resize: none;"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- Checkbox --}}
                                                        <div class="row">
                                                            <div class="card-body">
                                                                <label for="daerah" class="form-label">
                                                                    <strong>Catatan dan hasil pemeriksaan ini agar ditindak
                                                                        lanjuti sebagaimana mestinya</strong> <br>
                                                                    <i>Record of above inspection as soon posible should be
                                                                        done as procedure</i>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="border p-2">
                                                                    <div
                                                                        class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                        <div class="mb-3">
                                                                            <input class="form-check-input" name="hasil_pemeriksaan1" type="checkbox" value="diterima" id="defaultCheck1">
                                                                            <label class="form-check-label mx-2" for="defaultCheck1">
                                                                                <strong>Diterima</strong> <br>
                                                                            </label>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <input class="form-check-input" name="hasil_pemeriksaan2" type="checkbox" value="ditolak" id="defaultCheck1">
                                                                            <label class="form-check-label mx-2" for="defaultCheck1">
                                                                                <strong>Ditolak</strong> <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="border p-2">
                                                                    <div
                                                                        class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                        <div class="mb-3">
                                                                            <input class="form-check-input" name="status1" type="checkbox" value="Sertifikat dapat diterbitkan" id="defaultCheck1">
                                                                            <label class="form-check-label mx-2" for="defaultCheck1">
                                                                                <strong>Sertifikat dapat diterbitkan</strong>
                                                                            </label>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <input class="form-check-input" name="status2" type="checkbox" value="Diadakan tindakan perbaikan" id="defaultCheck1">
                                                                            <label class="form-check-label mx-2" for="defaultCheck1">
                                                                                <strong>Diadakan tindakan perbaikan</strong>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <i class="bi bi-arrow-up-circle-fill" id="scrollToTopBtn"></i>
        <img class="footer-img" src="{{ asset('storage/image/footer-bg.png') }}" alt="">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Memuat library SignaturePad dari CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
        {{-- <script src="http://keith-wood.name/js/jquery.signature.css"></script> --}}

        <script>
            function goBack() {
                window.history.back();
            }
        </script>
        <style>
            .kbw-signature {
                width: 100%;
                height: 200px;
            }

            #sig canvas {
                width: 100% !important;
                height: auto;
            }
        </style>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                var canvas = new SignaturePad(document.getElementById('signatureCanvas'));
                var clearButton = document.getElementById('clear');
                var signatureInput = document.getElementById('signature64');

                clearButton.addEventListener('click', function() {
                    canvas.clear();
                    signatureInput.value = '';
                });

                canvas.onEnd = function() {
                    // Ketika tanda tangan selesai, konversi ke base64 dan simpan di textarea
                    signatureInput.value = canvas.toDataURL();
                };
            });
        </script>
        <script>
            document.getElementById('kapalBaru').addEventListener('change', function() {
                var keterangan = document.getElementById('keterangan');
                keterangan.innerHTML = this.checked ?
                    '<b>Kapal Baru sesuai dengan Ketentuan-ketentuan dari NCVS</b> <br/><i>New ship under the provisions of the NCVS</i>' :
                    '';
            });

            document.getElementById('kapalLama').addEventListener('change', function() {
                var keterangan = document.getElementById('keterangan');
                keterangan.innerHTML = this.checked ?
                    '<b>Kapal Lama sesuai dengan Ketentuan-ketentuan dari NCVS</b> <br/><i>Existing ship under the provisions of the NCVS</i>' :
                    '';
            });
        </script>

        {{-- Preview gambar --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Fungsi untuk menangani perubahan pada input file
                function handleFileUpload(event) {
                    var file = event.target.files[0];
                    var reader = new FileReader();

                    reader.onload = function() {
                        var img = event.target.parentNode.nextElementSibling.querySelector('.image-preview');
                        img.src = reader.result;
                        img.style.maxWidth = '50%';
                        img.style.maxHeight = '200px';
                        img.classList.add('mt-3');
                    }

                    reader.readAsDataURL(file);
                }

                // Fungsi untuk menghapus gambar
                function removeImage(event) {
                    var input = event.target.parentNode.querySelector('.file-input');
                    input.value = ''; // Mengosongkan nilai input file
                    var img = event.target.parentNode.nextElementSibling.querySelector('.image-preview');
                    img.src = ''; // Menghapus sumber gambar
                }

                // Menangani perubahan pada setiap input file
                var fileInputs = document.querySelectorAll('.file-input');
                fileInputs.forEach(function(input) {
                    input.addEventListener('change', handleFileUpload);
                });

                // Menangani klik pada tombol "Hapus"
                var removeButtons = document.querySelectorAll('.remove-btn');
                removeButtons.forEach(function(button) {
                    button.addEventListener('click', removeImage);
                });
            });
        </script>
        <script>
            document.querySelectorAll('.toggleButton').forEach(function(button) {
                button.addEventListener('click', function() {
                    var targetId = this.dataset.target;
                    var formContainer = document.getElementById(targetId);

                    if (formContainer.style.maxHeight) {
                        formContainer.style.maxHeight = null;
                    } else {
                        formContainer.style.maxHeight = formContainer.scrollHeight + 'px';
                    }
                });
            });
        </script>

        <script>
            document.getElementById('myForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Mencegah formulir untuk melakukan aksi default (yaitu mengirimkan data)

                var progress = 0;
                var inputs = this.querySelectorAll('input');
                var progressBar = document.getElementById('progress-bar');

                var interval = setInterval(function() {
                    if (progress >= 100) {
                        clearInterval(interval);
                    } else {
                        progress += 33.33; // Ubah ini sesuai dengan jumlah langkah atau inputan Anda
                        progressBar.style.width = progress + '%';
                        progressBar.innerText = Math.round(progress) + '%';
                    }
                }, 1000); // 1000 milidetik (1 detik) per langkah

                // Proses pengiriman data formulir
                // ...
                // Jika formulir dikirimkan berhasil, Anda bisa menghentikan interval dan menampilkan pesan sukses atau melakukan aksi lainnya.
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var scrollToTopBtn = document.getElementById('scrollToTopBtn');

                window.addEventListener('scroll', function() {
                    // Tampilkan tombol ketika pengguna menggulir di bawah setengah tinggi jendela
                    if (document.body.scrollTop > window.innerHeight / 2 || document.documentElement.scrollTop > window.innerHeight / 2) {
                        scrollToTopBtn.style.display = 'block';
                    } else {
                        scrollToTopBtn.style.display = 'none';
                    }
                });

                scrollToTopBtn.addEventListener('click', function() {
                    document.body.scrollTop = 0; // Untuk Safari
                    document.documentElement.scrollTop = 0; // Untuk Chrome, Firefox, IE, dan Opera
                });
            });
        </script>
    </body>
</html>
