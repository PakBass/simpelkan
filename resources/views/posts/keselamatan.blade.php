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
    {{-- <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            /* Menetapkan font Montserrat sebagai font utama */
            background: linear-gradient(90deg, #C7C5F4, #e5f193);
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
            color: #f15806;
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
                            KESELAMATAN PERLENGKAPAN KAPAL BARANG <br>MENURUT STANDAR KAPAL NON KONVENSI (NCVS) <br>PERATURAN
                            MENTERI PERHUBUNGAN N0. : KM 65 TAHUN 2009
                        </h5>
                        <h5 class="text-center">
                            <p>
                                <strong><em>INSPECTION REPORT</em></strong>
                            </p>
                            <em>
                                CARGO SHIP SAFETY CONSTRUCTION <br> TO MEET PROVISION 0F NON CONVENTION VESSEL STANDARD
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
                                        <div class="border p-2">
                                            <div class="mb-3">
                                                <label for="namaKapal" class="form-label">
                                                    <strong>NAMA KAPAL</strong> <br>
                                                    <i>NAME OF SHIP</i>
                                                </label>
                                                <input type="text" class="form-control" id="namaKapal" name="nama_kapal_lembar1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pemilik" class="form-label">
                                                    <strong>PEMILIK SESUAI SURAT LAUT</strong> <br>
                                                    <i>OWNER AS REGISTRY CERTIFICATE</i>
                                                </label>
                                                <input type="text" class="form-control" id="pemilik"
                                                    name="pemilik_sesuai_surat">
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

                                            <div class="mb-3">
                                                <label for="daerah" class="form-label">
                                                    <strong>DAERAH PELAYARAN</strong> <br>
                                                    <i>TRADING AREA</i>
                                                    <small>(SK dirjen No. /2012 Pasal 3)</small>
                                                </label>
                                                <input type="text" class="form-control" id="daerah" name="daerah_pelayaran">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Checkbox --}}
                                    <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                        <table class="table-responsive">
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="Ok"
                                                        id="defaultCheck1" name="pemeriksaan_pertama_lembar1">
                                                    <label class="form-check-label mx-2" for="defaultCheck1">
                                                        <strong>PEMERIKSAAN PERTAMA</strong> <br>
                                                        <i>INITIAL INSPECTION </i>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="Ok"
                                                        id="defaultCheck1" name="pemeriksaan_pembaharuan">
                                                    <label class="form-check-label mx-2" for="defaultCheck1">
                                                        <strong>PEMERIKSAAN PEMBAHARUAN</strong> <br>
                                                        <i>RENEWAL INSPECTIO</i>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="Ok"
                                                        id="defaultCheck1" name="pemeriksaan_tahunan_lembar1">
                                                    <label class="form-check-label mx-2" for="defaultCheck1">
                                                        <strong>PEMERIKSAAN TAHUNAN </strong> <br>
                                                        <i>ANNUAL INSPECTION </i>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="Ok"
                                                        id="defaultCheck1" name="pemeriksaan_antara">
                                                    <label class="form-check-label mx-2" for="defaultCheck1">
                                                        <strong>PEMERIKSAAN ANTARA </strong> <br>
                                                        <i>INTERMEDIATE INSPECTION</i>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="Ok"
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
                                                                        readonly>
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
                                                    name="pelabuhan_pemeriksaan">
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
                                                            name="nama_kapal_lembar2">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="daerah" class="form-label">
                                                            <strong>Tanda Panggilan</strong> <br>
                                                            <i>Call Sign</i>
                                                        </label>
                                                        <input type="text" class="form-control" id="daerah"
                                                            name="tanda_panggilan_lembar2">
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
                                                            name="nama_alamat_pemilik_perusahaan">
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
                                                                            value="Ok" id="defaultCheck1"
                                                                            name="pemeriksaan_pertama_lembar2">
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
                                                                            value="Ok" id="defaultCheck1"
                                                                            name="pemeriksaan_tahunan_lembar2">
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
                                                                            value="Ok" id="defaultCheck1"
                                                                            name="pemeriksaan_pembaharuan_lembar2 ">
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
                                                                            value="Ok" id="defaultCheck1"
                                                                            name="pemeriksaan_antara_lembar2">
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
                                                                            value="Ok" id="defaultCheck1"
                                                                            name="pemeriksaan_tambahan_lembar2">
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
                                        </div>
                                        <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                            <table class="table-responsive">
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" name="check_kondisi_baik" type="checkbox" value=""
                                                            id="defaultCheck1">
                                                        <label class="form-check-label mx-2" for="defaultCheck1">
                                                            <strong>Check dalam kondisi baik /√</strong> <br>
                                                            <i>Check of found satisfactory </i>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" name="check_peralatan_tidak_ada" type="checkbox" value=""
                                                            id="defaultCheck1">
                                                        <label class="form-check-label mx-2" for="defaultCheck1">
                                                            <strong>Check peralatan tidak ada /- </strong> <br>
                                                            <i>Check but not applicable</i>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" name="check_peralatan_ada_tapi_tdk_berfungsi" type="checkbox" value=""
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
                                    {{-- Tanda tangan Digital --}}
                                    <div class="col-md-6 mt-3">
                                        <div class="col-md-12">
                                            <label class="text-center" for=""><strong>Data
                                                    Pemeriksa</strong></label>
                                            <div class="p-2">
                                                <input type="text" class="form-control" id="pelabuhan"
                                                    name="nama_pemeriksa" placeholder="Nama Pemeriksa"> <br>
                                                <input type="text" class="form-control" id="pelabuhan"
                                                    name="nip_pemeriksa" placeholder="NIP"><br>
                                                <input type="text" class="form-control" id="pelabuhan"
                                                    name="no_mi_pemeriksa" placeholder="Nomer MI">
                                            </div>
                                            <div id="sig">
                                                <canvas id="signatureCanvas" width="500" height="300"></canvas>
                                            </div>
                                            <br />
                                            <button id="clear" class="btn btn-danger btn-sm" type="button">Clear Signature</button>
                                            <textarea id="signature_pemeriksa" name="ttd_pemeriksa" style="display: none"></textarea>
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
                            {{-- <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">1</td>
                                            <td style="font-weight: bold;">CATATAN LAPORAN PEMERIKSAAN</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><i>RECORD OF INSPECTION REPORT</i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div> --}}
                            {{-- FORM 1 --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>I</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Keterangan Tentang Perlengkapan Keselamatan Jiwa <br>
                                                    <i>Details of Life Saving Appliances</i>
                                                </strong>
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
                                                            <th class="text-center align-middle" rowspan="2">No</th>
                                                            <th class="text-center align-middle" rowspan="2">Items</th>
                                                            <th colspan="2" class="text-center align-middle">Jumlah/Quantity</th>
                                                            <th class="text-center align-middle" rowspan="2">Jenis/Kapasitas <br> Model/Capacity (*)</th>
                                                            <th colspan="3" class="text-center align-middle">Check List</th>
                                                            <th class="text-center align-middle" rowspan="2">Keterangan Remark</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="align-middle">Syarat/Require</th>
                                                            <th class="align-middle">Dikapal/Onboard</th>
                                                            <th class="align-middle">Y</th>
                                                            <th class="align-middle">N</th>
                                                            <th class="align-middle">NA</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        {{-- Sekoci Penolong --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">1.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Sekoci Penolong <br>
                                                                    <em>Lifeboats</em><br />
                                                                    SK Dirjen No .. 2012 <br>Bab IV seksi 2 2.17 s/d 2.1.17
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_sekoci_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_sekoci_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="jenis_sekoci_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_sekoci_penolong">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_sekoci_penolong">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_sekoci_penolong">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_sekoci_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Rakit Penolong --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">2.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Rakit Penolong <br>
                                                                    <em>LiferaftsBab</em><br />
                                                                    Bab IV seksi 2 1.1.15
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_rakit_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_rakit_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="jenis_rakit_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_rakit_penolong">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_rakit_penolong">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_rakit_penolong">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_rakit_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Sekoci Penyelamat --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">3.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Sekoci Penyelamat <br>
                                                                    <em>Rescue Lifeboats</em><br />
                                                                    Bab IV seksi 4 4.1.1 s/d 4.3.1
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_sekoci_penyelamat" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_sekoci_penyelamat" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="jenis_sekoci_penyelamat" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_sekoci_penyelamat">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_sekoci_penyelamat">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_sekoci_penyelamat">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_sekoci_penyelamat" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Pelampung Penolong --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">4.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pelampung Penolong <br>
                                                                    <em>Lifebuoys</em><br />
                                                                    Bab IV seksi 9 9. s/d 9.2.4
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_pelampung_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_pelampung_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="jenis_pelampung_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_pelampung_penolong">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_pelampung_penolong">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_pelampung_penolong">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_pelampung_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Jaket Penolong --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">5.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Jaket Penolong<br>
                                                                    <em>Life Jackets</em><br />
                                                                    Bab IV seksi 10 10.1 s/d 10.2.2.4
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_jaket_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_jaket_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="jenis_jaket_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_jaket_penolong">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_jaket_penolong">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_jaket_penolong">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_jaket_penolong" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Baju cebur --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">6.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Baju cebur<br>
                                                                    <em>Immersion Suits</em><br />
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_baju_cebur" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_baju_cebur" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="jenis_baju_cebur" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_baju_cebur">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_baju_cebur">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_baju_cebur">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_baju_cebur" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Alat Pelontar Tali --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">7.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alat Pelontar Tali<br>
                                                                    <em>Line Throwing Apparatus</em><br />
                                                                    Bab IV seksi 16 16.1 s/d 16.1.6
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_alat_pelontar_tali" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_alat_pelontar_tali" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="jenis_alat_pelontar_tali" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_alat_pelontar_tali">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_alat_pelontar_tali">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_alat_pelontar_tali">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_alat_pelontar_tali" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Isyarat Marabahaya --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">8.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Isyarat Marabahaya<br>
                                                                    <em>Line Throwing Apparatus</em><br />
                                                                    Bab IV seksi 16 16.1 s/d 16.1.6
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_isyarat_marabahaya" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_isyarat_marabahaya" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="jenis_isyarat_marabahaya" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_isyarat_marabahaya">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_isyarat_marabahaya">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_isyarat_marabahaya">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_isyarat_marabahaya" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Transponder Radar --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">9.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Transponder Radar<br>
                                                                    <em>Radar Transponders </em><br />
                                                                    Bab III seksi 4.2.5
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_transponder_radar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_transponder_radar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="jenis_transponder_radar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_transponder_radar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_transponder_radar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_transponder_radar">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_transponder_radar" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Perangkat Telepon Radio VHF dua arah --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">10.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Perangkat Telepon Radio VHF dua arah <br>
                                                                    <em>Two	Way	VHF	Radio Telephone Apparatus </em><br />
                                                                    Bab III seksi 4 4.6.
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_perangkat_telepon_radio_vhf_2_arah" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_perangkat_telepon_radio_vhf_2_arah" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="jenis_perangkat_telepon_radio_vhf_2_arah" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_perangkat_telepon_radio_vhf_2_arah">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_perangkat_telepon_radio_vhf_2_arah">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_perangkat_telepon_radio_vhf_2_arah">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_perangkat_telepon_radio_vhf_2_arah" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom">
                                                            <div class="card-body">
                                                                <label for="daerah" class="form-label">
                                                                    <strong>Rekomendasi Marine Inspector </strong> <br>
                                                                    <i>Marine Inspector Recomendation</i>
                                                                </label>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-12 p-3">
                                                                    <label for="daerah" class="form-label">
                                                                        <strong>Jumlah Total Pelayar Dimana Tersedia Perlengkapan Keselamatan Jiwa</strong><br>
                                                                        Total Number of Persons for which Life Saving Appliances are Provided
                                                                    </label>
                                                                    <textarea class="form-control" name="jml_total_pelayar" style="width: 80%; height: 5em; resize: none;"></textarea>
                                                                    <label for="daerah" class="form-label">
                                                                        <strong>Data-data yang tidak sesuai</strong><br>
                                                                        Particulars of outstanding items
                                                                    </label>
                                                                    <textarea class="form-control" name="data_yang_tidak_sesuai_form1" style="width: 80%; height: 5em; resize: none;"></textarea>
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
                            {{-- FORM 2 --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>II</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Keterangan Tentang Sistem dan Perlengkapan Navigasi <br>
                                                    <i>Details of Navigational Systems and Equipment</i>
                                                </strong>
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
                                                            <th class="text-center align-middle" rowspan="2">No</th>
                                                            <th class="text-center align-middle" rowspan="2">Items</th>
                                                            <th colspan="2" class="text-center align-middle">Jumlah/Quantity</th>
                                                            <th class="text-center align-middle" rowspan="2">Tipe/Pembuat <br> Type/Manufac</th>
                                                            <th colspan="3" class="text-center align-middle">Check List</th>
                                                            <th class="text-center align-middle" rowspan="2">Keterangan Remark</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="align-middle">Syarat/Require</th>
                                                            <th class="align-middle">Dikapal/Onboard</th>
                                                            <th class="align-middle">Y</th>
                                                            <th class="align-middle">N</th>
                                                            <th class="align-middle">NA</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        {{-- Pedoman Magnit Standar --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">1.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pedoman Magnit Standar  <br>
                                                                    <em>Standard Magnetic Compass </em><br />
                                                                    Bab III seksi 5 5.7.1 s/d 5.7.4
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_pedoman_magnit_standar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_pedoman_magnit_standar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_pedoman_magnit_standar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_pedoman_magnit_standar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_pedoman_magnit_standar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_pedoman_magnit_standar">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_pedoman_magnit_standar" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Pedoman Magnit Cadangan --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">2.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pedoman Magnit Cadangan <br>
                                                                    <em>Spare Magnetic Compass </em><br />
                                                                    Bab IV seksi 2 1.1.15
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_pedoman_magnit_cadangan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_pedoman_magnit_cadangan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_pedoman_magnit_cadangan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_pedoman_magnit_cadangan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_pedoman_magnit_cadangan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_pedoman_magnit_cadangan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_pedoman_magnit_cadangan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Pedoman Gasing --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">3.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pedoman Gasing <br>
                                                                    <em>Gyro Compass</em><br />
                                                                    Bab III seksi 5 5.8.1 s/d 5.8.6
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_pedoman_gasing" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_pedoman_gasing" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_pedoman_gasing" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_pedoman_gasing">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_pedoman_gasing">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_pedoman_gasing">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_pedoman_gasing" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Repeater Baringan Pedoman Gasing --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">4.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Repeater Baringan Pedoman Gasing <br>
                                                                    <em>Gyro Compass Bearing Repeater</em><br />
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_repeater_baringan_pedoman_gasing" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_repeater_baringan_pedoman_gasing" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_repeater_baringan_pedoman_gasing" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_repeater_baringan_pedoman_gasing">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_repeater_baringan_pedoman_gasing">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_repeater_baringan_pedoman_gasing">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_repeater_baringan_pedoman_gasing" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Pelorus atau Alat Baring Pedoman --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">5.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pelorus atau Alat Baring Pedoman<br>
                                                                    <em>Pelorus or Compass Bearing Device</em><br />
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_pelorus" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_pelorus" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_pelorus" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_pelorus">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_pelorus">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_pelorus">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_pelorus" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Alat Koreksi Garis Haluan dan Baringan --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">6.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alat Koreksi Garis Haluan dan Baringan <br> (Daftar Deviasi)<br>
                                                                    <em>Means of Correcting Headings and Bearings <br>(Deviation Card)</em><br />
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_alat_koreksi_garis_haluan_dan_baringan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_alat_koreksi_garis_haluan_dan_baringan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_alat_koreksi_garis_haluan_dan_baringan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_alat_koreksi_garis_haluan_dan_baringan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_alat_koreksi_garis_haluan_dan_baringan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_alat_koreksi_garis_haluan_dan_baringan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_alat_koreksi_garis_haluan_dan_baringan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Alat Pancar Penuntun Haluan --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">7.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alat Pancar Penuntun Haluan<br>
                                                                    <em>Transmitting Heading Device (THD)</em>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_alat_pancar_penuntun_haluan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_alat_pancar_penuntun_haluan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_alat_pancar_penuntun_haluan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_alat_pancar_penuntun_haluan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_alat_pancar_penuntun_haluan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_alat_pancar_penuntun_haluan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_alat_pancar_penuntun_haluan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Sistem Kendali Haluan atau Lintasan --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">8.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Sistem Kendali Haluan atau Lintasan<br>
                                                                    <em>Heading or Track Control System <br>(Auto Pilot)</em><br />
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_sistem_kendali_haluan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_sistem_kendali_haluan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_sistem_kendali_haluan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_sistem_kendali_haluan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_sistem_kendali_haluan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_sistem_kendali_haluan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_sistem_kendali_haluan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Peta Laut/Sistem Peraga Peta dan Informasi Elektronik --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">9.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Peta Laut/Sistem Peraga Peta dan Informasi Elektronik<br>
                                                                    <em>Nautical Charts/Electronic Chart Display and Information System (ECDIS)
                                                                    </em><br />
                                                                    Bab VIII seksi 5
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_peta_laut_ecdis" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_peta_laut_ecdis" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_peta_laut_ecdis" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_peta_laut_ecdis">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_peta_laut_ecdis">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_peta_laut_ecdis">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_peta_laut_ecdis" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Publikasi Nautika --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">10.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Publikasi Nautika <br>
                                                                    <em>Nautical Publication </em><br />
                                                                    Bab III seksi 5 5.6.1
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_publikasi_nautika" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_publikasi_nautika" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_publikasi_nautika" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_publikasi_nautika">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_publikasi_nautika">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_publikasi_nautika">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_publikasi_nautika" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Alat Penerima Sistem Satelit Navigasi Global --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">11.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alat Penerima Sistem Satelit Navigasi Global <br>
                                                                    <em>Receiver for Global	Navigation Satellite System (GPS)</em><br />
                                                                    Bab III seksi 4.2 pengawakan
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_alat_penerima_sistem_gps" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_alat_penerima_sistem_gps" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_alat_penerima_sistem_gps" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_alat_penerima_sistem_gps">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_alat_penerima_sistem_gps">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_alat_penerima_sistem_gps">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_alat_penerima_sistem_gps" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Radar --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">12.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Radar <br>
                                                                    <em>Radar</em><br />
                                                                    Bab III seksi 5 5.9.1 s/d 5.9.2
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_radar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_radar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_radar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_radar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_radar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_radar">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_radar" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Alat Bantu Plotting Radar Otomatis --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">13.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alat Bantu Plotting Radar Otomatis <br>
                                                                    <em>Automatic Radar Plotting Aid (ARPA) </em><br/>
                                                                    Bab III seksi 5 5.9.2
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_alat_bantu_plotting_radar_otomatis" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_alat_bantu_plotting_radar_otomatis" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_alat_bantu_plotting_radar_otomatis" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_alat_bantu_plotting_radar_otomatis">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_alat_bantu_plotting_radar_otomatis">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_alat_bantu_plotting_radar_otomatis">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_alat_bantu_plotting_radar_otomatis" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Automatic Tracking Aid --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">14.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alat Bantu Garis Haluan Otomatis <br>
                                                                    <em>Automatic Tracking Aid</em><br/>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_automatic_tracking_aid" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_automatic_tracking_aid" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_automatic_tracking_aid" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_automatic_tracking_aid">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_automatic_tracking_aid">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_automatic_tracking_aid">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_automatic_tracking_aid" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Alat Bantu Plotting Elektronik --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">15.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alat Bantu Plotting Elektronik <br>
                                                                    <em>Electronic Plotting Aid</em><br/>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_electronic_plotting_aid" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_electronic_plotting_aid" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_electronic_plotting_aid" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_electronic_plotting_aid">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_electronic_plotting_aid">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_electronic_plotting_aid">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_electronic_plotting_aid" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Sistem Identifikasi Otomatis --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">16.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Sistem Identifikasi Otomatis <br>
                                                                    <em>Automatic Identification System (AIS)</em><br/>
                                                                    Bab III seksi 5 5.11.1 s/d 5.11.2
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_sistem_identifikasi_otomatis" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_sistem_identifikasi_otomatis" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_sistem_identifikasi_otomatis" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_sistem_identifikasi_otomatis">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_sistem_identifikasi_otomatis">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_sistem_identifikasi_otomatis">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_sistem_identifikasi_otomatis" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Perekam Data Pelayaran --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">17.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Perekam Data Pelayaran<br>
                                                                    <em>Voyage Data Recorders (VDR) </em><br/>
                                                                    Seksi 5 5.10.1 s/d 5.10.2
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_perekam_data_pelayaran" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_perekam_data_pelayaran" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_perekam_data_pelayaran" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_perekam_data_pelayaran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_perekam_data_pelayaran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_perekam_data_pelayaran">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_perekam_data_pelayaran" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{--  Alat Ukur Kecepatan --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">18.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alat Ukur Kecepatan<br>
                                                                    <em>Speed and Distance Measuring Device</em><br/>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_alat_ukur_kecepatan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_alat_ukur_kecepatan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_alat_ukur_kecepatan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_alat_ukur_kecepatan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_alat_ukur_kecepatan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_alat_ukur_kecepatan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_alat_ukur_kecepatan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Petunjuk Daun Kemudi, Baling-baling Pendorong, Slip dan Mode Operasional --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">19.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Perum Gema<br>
                                                                    <em>Echosounding Device </em><br/>Bab III seksi 17 17.5
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_perum_gema" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_perum_gema" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_perum_gema" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_perum_gema">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_perum_gema">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_perum_gema">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_perum_gema" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Petunjuk daun kemudi --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">20.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Petunjuk Daun Kemudi, Baling-baling Pendorong, Slip dan Mode Operasional<br>
                                                                    <em>Rudder, Propeller, Thrust, Pitch and Operational Mode Indicator</em><br/>Bab II construksi dan stabilitas
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_petunjuk_daun_kemudi" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_petunjuk_daun_kemudi" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_petunjuk_daun_kemudi" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_petunjuk_daun_kemudi">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_petunjuk_daun_kemudi">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_petunjuk_daun_kemudi">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_petunjuk_daun_kemudi" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Corong Pemberitahuan --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">21.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Corong Pemberitahuan<br>
                                                                    <em>Public Addresser</em><br/>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_corong_pemberitahuan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_corong_pemberitahuan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_corong_pemberitahuan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_corong_pemberitahuan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_corong_pemberitahuan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_corong_pemberitahuan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_corong_pemberitahuan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Telepon ke Tempat Pengemudian Darurat --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">22.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Telepon ke Tempat Pengemudian Darurat<br>
                                                                    <em>Telephone to Emergency Steering Position</em><br/>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_telp_ke_tempat_pengemudian_darurat" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_telp_ke_tempat_pengemudian_darurat" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_telp_ke_tempat_pengemudian_darurat" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_telp_ke_tempat_pengemudian_darurat">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_telp_ke_tempat_pengemudian_darurat">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_telp_ke_tempat_pengemudian_darurat">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_telp_ke_tempat_pengemudian_darurat" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Lampu Isyarat Siang Hari --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">23.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Lampu Isyarat Siang Hari<br>
                                                                    <em>Daylight Signalling Lamp </em><br/>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_lampu_isyarat_siang" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_lampu_isyarat_siang" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_lampu_isyarat_siang" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_lampu_isyarat_siang">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_lampu_isyarat_siang">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_lampu_isyarat_siang">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_lampu_isyarat_siang" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Reflektor Radar --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">24.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Reflektor Radar<br>
                                                                    <em>Radar Reflector</em><br/>
                                                                    Bab II seksi 2 2..1.16
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_reflektor_radar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_reflektor_radar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_reflektor_radar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_reflektor_radar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_reflektor_radar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_reflektor_radar">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_reflektor_radar" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Kode Isyarat Internasional --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">25.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Kode Isyarat Internasional<br>
                                                                    <em>International Code of Signal </em><br/>Bab VIII
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_kode_isyarat_internasional" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_kode_isyarat_internasional" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_kode_isyarat_internasional" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_kode_isyarat_internasional">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_kode_isyarat_internasional">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_kode_isyarat_internasional">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_kode_isyarat_internasional" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Buku IAMSAR --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">26.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Buku IAMSAR<br>
                                                                    <em>IAMSAR Manual </em><br/>Bab VIII
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_buku_iamsar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_buku_iamsar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="tipe_buku_iamsar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_buku_iamsar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_buku_iamsar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_buku_iamsar">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_buku_iamsar" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom">
                                                            <div class="card-body">
                                                                <label for="daerah" class="form-label">
                                                                    <strong>Rekomendasi Marine Inspector </strong> <br>
                                                                    <i>Marine Inspector Recomendation</i>
                                                                </label>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-12 p-3">
                                                                    <label for="daerah"
                                                                        class="form-label">
                                                                        <strong>Data-data yang tidak sesuai</strong><br>
                                                                        Particulars of outstanding items
                                                                    </label>
                                                                    <textarea class="form-control" name="data_yang_tidak_sesuai_form2" style="width: 80%; height: 5em; resize: none;"></textarea>
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
                                            style="width: 5%"><strong>III</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Keterangan Tentang Perlengkapan Pemadam Kebakaran <br>
                                                    <i>Details of Fire Fighting Equipment</i>
                                                </strong>
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
                                                            <th class="text-center align-middle" rowspan="2">No</th>
                                                            <th class="text-center align-middle" rowspan="2">Items</th>
                                                            <th colspan="2" class="text-center align-middle">Jumlah/Quantity</th>
                                                            <th class="text-center align-middle" rowspan="2">Pemeriksaan Terakhir <br> Last Inspection</th>
                                                            <th colspan="3" class="text-center align-middle">Check List</th>
                                                            <th class="text-center align-middle" rowspan="2">Keterangan Remark</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="align-middle">Syarat/Require</th>
                                                            <th class="align-middle">Dikapal/Onboard</th>
                                                            <th class="align-middle">Y</th>
                                                            <th class="align-middle">N</th>
                                                            <th class="align-middle">NA</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        {{-- Alarm Umum dan Komunikasi --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">1.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alarm Umum dan Komunikasi<br>
                                                                    <em>Communication and General Alarm </em><br />
                                                                    Bab IV seksi 12 12.1.1 s/d 12.1.3
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_alat_umum_komunikasi" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_alat_umum_komunikasi" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_alat_umum_komunikasi" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_alat_umum_komunikasi">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_alat_umum_komunikasi">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_alat_umum_komunikasi">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_alat_umum_komunikasi" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{--  Pompa Utama Pemadam Kebakaran --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">2.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pompa Utama Pemadam Kebakaran<br>
                                                                    <em>Main of Fire Fighting Pumps</em><br />
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_pompa_utama_damkar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_pompa_utama_damkar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_pompa_utama_damkar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_pompa_utama_damkar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_pompa_utama_damkar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_pompa_utama_damkar">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_pompa_utama_damkar" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Pompa Pemadam Kebakaran Darurat --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">3.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pompa Pemadam Kebakaran Darurat<br>
                                                                    <em>Emergency Fire Fighting Pumps </em><br />
                                                                    Bab V seksi 13 13.1.5(4.c)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_pompa_damkar_darurat" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_pompa_damkar_darurat" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_pompa_damkar_darurat" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_pompa_damkar_darurat">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_pompa_damkar_darurat">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_pompa_damkar_darurat">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_pompa_damkar_darurat" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Hidran, Selang dan Nozzle Pemadam Kebakaran --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">4.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Hidran, Selang dan Nozzle Pemadam Kebakaran<br>
                                                                    <em>Hydrant, Hose and Nozzle of Fire Fighting</em><br />
                                                                    Bab III seksi 7 7.1.1 s/d 7.1.13
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_hidran_selang_nozzle_damkar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_hidran_selang_nozzle_damkar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_hidran_selang_nozzle_damkar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_hidran_selang_nozzle_damkar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_hidran_selang_nozzle_damkar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_hidran_selang_nozzle_damkar">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_hidran_selang_nozzle_damkar" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Hidran di Ruang Ketel Uap dan atau Permesinan --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">5.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Hidran di Ruang Ketel Uap dan atau Permesinan<br>
                                                                    <em>Hydrant of Boiler and or Engine Room</em><br />
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_hidran_druang_ketel_dan_permesinan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_hidran_druang_ketel_dan_permesinan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_hidran_druang_ketel_dan_permesinan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_hidran_druang_ketel_dan_permesinan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_hidran_druang_ketel_dan_permesinan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_hidran_druang_ketel_dan_permesinan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_hidran_druang_ketel_dan_permesinan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Sistem Pemercik Air --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">6.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Sistem Pemercik Air<br>
                                                                    <em>Water Sprinkler System</em><br />
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_sistem_pemercik_air" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_sistem_pemercik_air" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_sistem_pemercik_air" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_sistem_pemercik_air">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_sistem_pemercik_air">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_sistem_pemercik_air">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_sistem_pemercik_air" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Alat Pendeteksi Kebakaran --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">7.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alat Pendeteksi Kebakaran<br>
                                                                    <em>Fire Fighting Detection </em> <br>
                                                                    Bab V seksi 10 10.3.3
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_alat_pendeteksi_kebakaran" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_alat_pendeteksi_kebakaran" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_alat_pendeteksi_kebakaran" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_alat_pendeteksi_kebakaran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_alat_pendeteksi_kebakaran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_alat_pendeteksi_kebakaran">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_alat_pendeteksi_kebakaran" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Sistem Alarm Kebakaran --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">8.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Sistem Alarm Kebakaran<br>
                                                                    <em>Fire Fighting Alarm System</em><br />
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_sistem_alarm_kebakaran" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_sistem_alarm_kebakaran" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_sistem_alarm_kebakaran" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_sistem_alarm_kebakaran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_sistem_alarm_kebakaran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_sistem_alarm_kebakaran">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_sistem_alarm_kebakaran" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Instalasi Pemadam Kebakaran Tetap di Ruang Permesinan --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">9.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Instalasi Pemadam Kebakaran Tetap di Ruang Permesinan<br>
                                                                    <em>Fixed Fire Fighting Instalation at Engine Room</em><br />
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_instalasi_damkar_dipermesinan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_instalasi_damkar_dipermesinan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_instalasi_damkar_dipermesinan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_instalasi_damkar_dipermesinan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_instalasi_damkar_dipermesinan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_instalasi_damkar_dipermesinan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_instalasi_damkar_dipermesinan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Perangkat Pemadam Busa dan atau CO2 Bukan Jinjing --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">10.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Perangkat Pemadam Busa dan atau CO2 Bukan Jinjing<br>
                                                                    <em>Fixed Foam and or CO2 Fire Fighting System</em><br />
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_perangkat_pemadam_busa_bukan_jinjing" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_perangkat_pemadam_busa_bukan_jinjing" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_perangkat_pemadam_busa_bukan_jinjing" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_perangkat_pemadam_busa_bukan_jinjing">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_perangkat_pemadam_busa_bukan_jinjing">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_perangkat_pemadam_busa_bukan_jinjing">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_perangkat_pemadam_busa_bukan_jinjing" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Perlengkapan Pemadam Kebakaran Api Jinjing --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">11.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Perlengkapan Pemadam Kebakaran Api Jinjing<br>
                                                                    <em>Portable Fire Fighting Extingushing</em><br />
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_perlengkapan_damkar_jinjing" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_perlengkapan_damkar_jinjing" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_perlengkapan_damkar_jinjing" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_perlengkapan_damkar_jinjing">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_perlengkapan_damkar_jinjing">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_perlengkapan_damkar_jinjing">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_perlengkapan_damkar_jinjing" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Pasir dan atau Bahan Lainnya untuk Pemadam --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">12.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pasir dan atau Bahan Lainnya untuk Pemadam<br>
                                                                    <em>Sands and or Other Things for Extingushing</em>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_pasir_atau_bahan_lain_pemadam" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_pasir_atau_bahan_lain_pemadam" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_pasir_atau_bahan_lain_pemadam" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_pasir_atau_bahan_lain_pemadam">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_pasir_atau_bahan_lain_pemadam">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_pasir_atau_bahan_lain_pemadam">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_pasir_atau_bahan_lain_pemadam" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Selimut Pemadam Kebakaran --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">13.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Selimut Pemadam Kebakaran<br>
                                                                    <em>Fire Blanket</em><br/>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_selimut_damkar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_selimut_damkar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_selimut_damkar" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_selimut_damkar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_selimut_damkar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_selimut_damkar">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_selimut_damkar" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Perlengkapan Petugas Pemadam --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">14.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Perlengkapan Petugas Pemadam<br>
                                                                    <em>Fire Outfit Man</em><br/>
                                                                    BAB II construksi dan stabilitas
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_perlengkapan_petugas_pemadam" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_perlengkapan_petugas_pemadam" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_perlengkapan_petugas_pemadam" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_perlengkapan_petugas_pemadam">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_perlengkapan_petugas_pemadam">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_perlengkapan_petugas_pemadam">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_perlengkapan_petugas_pemadam" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Sambungan Darat Internasional --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">15.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Sambungan Darat Internasional<br>
                                                                    <em>International Shore Connection </em><br/>
                                                                    Bab II construksi dan stabilitas
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_sambungan_darat_internasional" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_sambungan_darat_internasional" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_sambungan_darat_internasional" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_sambungan_darat_internasional">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_sambungan_darat_internasional">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_sambungan_darat_internasional">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_sambungan_darat_internasional" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Alat Bantu Pernafasan untuk Melarikan Diri --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">16.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alat Bantu Pernafasan untuk Melarikan Diri<br>
                                                                    <em>Emergency Escape Breathung Device(EEBD)</em><br/>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_emergency_escape_breathung_device" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_emergency_escape_breathung_device" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_emergency_escape_breathung_device" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_emergency_escape_breathung_device">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_emergency_escape_breathung_device">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_emergency_escape_breathung_device">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_emergency_escape_breathung_device" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Rute untuk Melarikan Diri --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">17.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Rute untuk Melarikan Diri<br>
                                                                    <em>Escape Route</em><br/>
                                                                    Bab II construksi dan stabilitas
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_escape_route" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_escape_route" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_escape_route" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_escape_route">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_escape_route">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_escape_route">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_escape_route" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Bagan Pengendali Kebakaran --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">18.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Bagan Pengendali Kebakaran<br>
                                                                    <em>Fire Control Plan</em><br/>
                                                                    Bab II construksi dan stabilitas
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="syarat_fire_control_plan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="dikapal_fire_control_plan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="pemeriksaan_terakhir_fire_control_plan" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_fire_control_plan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_fire_control_plan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_fire_control_plan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_fire_control_plan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="card-body">
                                                                <label for="daerah" class="form-label">
                                                                    <strong>Rekomendasi Marine Inspector </strong> <br>
                                                                    <i>Marine Inspector Recomendation</i>
                                                                </label>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-12">
                                                                    <label for="daerah"
                                                                        class="form-label">
                                                                        <strong>Data-data yang tidak sesuai</strong><br>
                                                                        Particulars of outstanding items
                                                                    </label>
                                                                    <textarea class="form-control" name="data_yang_tidak_sesuai_form3" style="width: 80%; height: 5em; resize: none;"></textarea>
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
                            {{-- FORM 4 --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>IV</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Perlengkapan Pencegahan Pencemaran<br>
                                                    <i>Pollution Prevention Equipments</i>
                                                </strong>
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
                                                            <th class="text-center align-middle" rowspan="2">No</th>
                                                            <th class="text-center align-middle" rowspan="2">Items</th>
                                                            <th colspan="3" class="text-center align-middle">Check List</th>
                                                            <th class="text-center align-middle" rowspan="2">Keterangan Remark</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="align-middle">Y</th>
                                                            <th class="align-middle">N</th>
                                                            <th class="align-middle">NA</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        {{-- Pondasi-pondasi, Tangki-tangki dan Pipa-pipa --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">1.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pondasi-pondasi, Tangki-tangki dan Pipa-pipa<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_pondasi_tangki_pipa">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_pondasi_tangki_pipa">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_pondasi_tangki_pipa">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_pondasi_tangki_pipa" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Sistem Pipa Balas --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">2.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Sistem Pipa Balas<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_sistem_pipa_balas">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_sistem_pipa_balas">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_sistem_pipa_balas">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_sistem_pipa_balas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Sistem Pipa Minyak Bahan Bakar --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">3.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Sistem Pipa Minyak Bahan Bakar<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_sistem_pipa_minyak_bahan_bakar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_sistem_pipa_minyak_bahan_bakar">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_sistem_pipa_minyak_bahan_bakar">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_sistem_pipa_minyak_bahan_bakar" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Sistem Minyak Muatan --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">4.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Sistem Minyak Muatan<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_sistem_minyak_muatan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_sistem_minyak_muatan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_sistem_minyak_muatan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_sistem_minyak_muatan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Sistem Minyak Pelumas --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">5.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Sistem Minyak Pelumas<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_sistem_minyak_pelumas">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_sistem_minyak_pelumas">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_sistem_minyak_pelumas">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_sistem_minyak_pelumas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Tangki Penampungan Minyak Kotor --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">6.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Tangki Penampungan Minyak Kotor<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_tangki_penampung_minyak_kotor">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_tangki_penampung_minyak_kotor">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_tangki_penampung_minyak_kotor">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_tangki_penampung_minyak_kotor" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Standar Flens Sambungan Pembuangan --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">7.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Standar Flens Sambungan Pembuangan<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_standar_flens_sambungan_pembuangan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_standar_flens_sambungan_pembuangan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_standar_flens_sambungan_pembuangan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_standar_flens_sambungan_pembuangan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Peralatan Pemisah Air Berminyak --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">8.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Peralatan Pemisah Air Berminyak<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_peralatan_pemisah_air_berminyak">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_peralatan_pemisah_air_berminyak">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_peralatan_pemisah_air_berminyak">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_peralatan_pemisah_air_berminyak" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Buku Catatan Minyak Ruang Permesinan --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">9.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Buku Catatan Minyak Ruang Permesinan<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_buku_catatan_minyak_ruang_permesinan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_buku_catatan_minyak_ruang_permesinan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_buku_catatan_minyak_ruang_permesinan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_buku_catatan_minyak_ruang_permesinan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Buku Catatan Minyak Ruang Muatan --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">10.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Buku Catatan Minyak Ruang Muatan<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_buku_catatan_minyak_ruang_muatan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_buku_catatan_minyak_ruang_muatan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_buku_catatan_minyak_ruang_muatan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_buku_catatan_minyak_ruang_muatan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Bahan Kimia Pengurai --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">11.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Bahan Kimia Pengurai<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_bahan_kimia_pengurai">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_bahan_kimia_pengurai">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_bahan_kimia_pengurai">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_bahan_kimia_pengurai" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Oil Boom --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">12.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Oil Boom<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_oil_boom">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_oil_boom">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_oil_boom">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_oil_boom" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Alat Pengolah Kotoran --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">13.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alat Pengolah Kotoran<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_alat_pengolah_kotoran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_alat_pengolah_kotoran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_alat_pengolah_kotoran">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_alat_pengolah_kotoran" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Alat Penghancur Kotoran --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">14.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alat Penghancur Kotoran<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_alat_penghancur_kotoran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_alat_penghancur_kotoran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_alat_penghancur_kotoran">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_alat_penghancur_kotoran" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{--  Tangki Penampung Kotoran--}}
                                                        <tr>
                                                            <td class="text-center align-text-top">15.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Tangki Penampung Kotoran<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_tangki_penampung_kotoran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_tangki_penampung_kotoran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_tangki_penampung_kotoran">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_tangki_penampung_kotoran" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Bak Penampungan Sampah --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">16.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Bak Penampungan Sampah<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_bak_penampung_sampah">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_bak_penampung_sampah">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_bak_penampung_sampah">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_bak_penampung_sampah" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Buku Catatan Sampah --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">17.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Buku Catatan Sampah<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_buku_catatan_sampah">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_buku_catatan_sampah">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_buku_catatan_sampah">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_buku_catatan_sampah" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Tanda Terima Pembuangan Sampah --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">18.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Tanda Terima Pembuangan Sampah<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_tanda_terima_pembuangan_sampah">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_tanda_terima_pembuangan_sampah">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_tanda_terima_pembuangan_sampah">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_tanda_terima_pembuangan_sampah" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{--  Penyaring Gas Buang --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">19.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Penyaring Gas Buang
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_penyaring_gas_buang">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_penyaring_gas_buang">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_penyaring_gas_buang">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_penyaring_gas_buang" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="card-body">
                                                                <label for="daerah" class="form-label">
                                                                    <strong>Rekomendasi Marine Inspector </strong> <br>
                                                                    <i>Marine Inspector Recomendation</i>
                                                                </label>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-12">
                                                                    <label for="daerah"
                                                                        class="form-label">
                                                                        <strong>Data-data yang tidak sesuai</strong><br>
                                                                        Particulars of outstanding items
                                                                    </label>
                                                                    <textarea class="form-control" name="data_yang_tidak_sesuai_form4" style="width: 80%; height: 5em; resize: none;"></textarea>
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
                            {{-- FORM 5 --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>V</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Perlengkapan Medis<br>
                                                    <i>Medical Supply</i>
                                                </strong>
                                            </h6>
                                        </td>
                                    </tr>
                                    {{-- end judul --}}
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
                                                            <th class="text-center align-middle" rowspan="2">No</th>
                                                            <th class="text-center align-middle" rowspan="2">Items</th>
                                                            <th colspan="3" class="text-center align-middle">Check List</th>
                                                            <th class="text-center align-middle" rowspan="2">Keterangan Remark</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="align-middle">Y</th>
                                                            <th class="align-middle">N</th>
                                                            <th class="align-middle">NA</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        {{-- Tabung O2 dengan Selang dan Masker --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">1.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Tabung O2 dengan Selang dan Masker<br>
                                                                    <em>Oxygen Bottle completed with Hose and Mask</em>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_tabung_o2_dengan_selang_dan_masker">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_tabung_o2_dengan_selang_dan_masker">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_tabung_o2_dengan_selang_dan_masker">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_tabung_o2_dengan_selang_dan_masker" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Tensimeter dengan air raksa atau digital --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">2.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Tensimeter dengan air raksa atau digital<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_tensimeter_dengan_air_raksa_atau_digital">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_tensimeter_dengan_air_raksa_atau_digital">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_tensimeter_dengan_air_raksa_atau_digital">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_tensimeter_dengan_air_raksa_atau_digital" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Stetoscope --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">3.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Stetoscope<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_Stetoscope">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_Stetoscope">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_Stetoscope">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_Stetoscope" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Alat Bantu Nafas Manual --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">4.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alat Bantu Nafas Manual<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_alat_bantu_nafas_manual">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_alat_bantu_nafas_manual">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_alat_bantu_nafas_manual">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_alat_bantu_nafas_manual" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Alat Sterilisator Rebus --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">5.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alat Sterilisator Rebus<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_alat_sterilisator_rebus">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_alat_sterilisator_rebus">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_alat_sterilisator_rebus">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_alat_sterilisator_rebus" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Kantong Kompres Panas dan Dingin --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">6.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Kantong Kompres Panas dan Dingin<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_kantong_kompres_panas_dingin">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_kantong_kompres_panas_dingin">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_kantong_kompres_panas_dingin">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_kantong_kompres_panas_dingin" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Bidai untuk Patah Tulang, Kaki dan Tangan --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">7.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Bidai untuk Patah Tulang, Kaki dan Tangan<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_bidai_untuk_patah_tulang_kaki_tangan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_bidai_untuk_patah_tulang_kaki_tangan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_bidai_untuk_patah_tulang_kaki_tangan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_bidai_untuk_patah_tulang_kaki_tangan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Kulkas --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">8.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Kulkas<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_Kulkas">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_Kulkas">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_Kulkas">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_Kulkas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Brankas Dorong --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">9.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Brankas Dorong<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_brankas_dorong">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_brankas_dorong">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_brankas_dorong">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_brankas_dorong" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Wadah Stainless 20 cm --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">10.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Wadah Stainless 20 cm<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_wadah_stainless_20cm">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_wadah_stainless_20cm">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_wadah_stainless_20cm">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_wadah_stainless_20cm" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Baskom Cuci Tangan 20 cm --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">11.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Baskom Cuci Tangan 20 cm<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_baskom_cuci_tangan_20cm">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_baskom_cuci_tangan_20cm">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_baskom_cuci_tangan_20cm">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_baskom_cuci_tangan_20cm" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Pisau Bedah --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">12.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pisau Bedah<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_pisau_bedah">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_pisau_bedah">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_pisau_bedah">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_pisau_bedah" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Gunting Bedah --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">13.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Gunting Bedah<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_gunting_bedah">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_gunting_bedah">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_gunting_bedah">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_gunting_bedah" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Penjepit Tekan --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">14.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Penjepit Tekan<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_penjepit_tekan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_penjepit_tekan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_penjepit_tekan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_penjepit_tekan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Penjepit Jaringan --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">15.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Penjepit Jaringan<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_penjepit_jaringan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_penjepit_jaringan">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_penjepit_jaringan">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_penjepit_jaringan" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Pemegang Jarum Jahit --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">16.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pemegang Jarum Jahit<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_pemegang_jarum_jakit">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_pemegang_jarum_jakit">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_pemegang_jarum_jakit">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_pemegang_jarum_jakit" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Jarum Jahit untuk Otot 1/2 Lingkaran --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">17.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Jarum Jahit untuk Otot 1/2 Lingkaran<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_jarum_jahit_otot_stgh_lingkaran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_jarum_jahit_otot_stgh_lingkaran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_jarum_jahit_otot_stgh_lingkaran">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_jarum_jahit_otot_stgh_lingkaran" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Jarum Jahit untuk Kulit 1/2 Lingkaran --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">18.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Jarum Jahit untuk Kulit 1/2 Lingkaran<br>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_jarum_jahit_kulit_stgh_lingkaran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_jarum_jahit_kulit_stgh_lingkaran">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_jarum_jahit_kulit_stgh_lingkaran">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_jarum_jahit_kulit_stgh_lingkaran" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Jarum Suntik sekali pakai 1 ml --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">19.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Jarum Suntik sekali pakai 1 ml
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_jarum_suntik_1ml">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_jarum_suntik_1ml">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_jarum_suntik_1ml">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_jarum_suntik_1ml" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Jarum Suntik sekali pakai 3 ml --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">20.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Jarum Suntik sekali pakai 3 ml
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_jarum_suntik_3ml">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_jarum_suntik_3ml">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_jarum_suntik_3ml">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_jarum_suntik_3ml" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Jarum Suntik sekali pakai 5 ml --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">21.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Jarum Suntik sekali pakai 5 ml
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_jarum_suntik_5ml">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_jarum_suntik_5ml">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_jarum_suntik_5ml">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_jarum_suntik_5ml" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Kapas --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">22.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Kapas
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_Kapas">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_Kapas">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_Kapas">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_Kapas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Verban --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">23.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Verban
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_verban">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_verban">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_verban">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_verban" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{--  Kasa Steril --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">24.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Kasa Steril
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_kasa_steril">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_kasa_steril">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_kasa_steril">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_kasa_steril" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Alkohol 70% --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">25.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Alkohol 70%
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_alkohol_70_persen">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_alkohol_70_persen">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_alkohol_70_persen">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_alkohol_70_persen" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{--  Larutan Peroksida (H2O2) 3% --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">26.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Larutan Peroksida (H2O2) 3%
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_larutan_petroksida_3_persen">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_larutan_petroksida_3_persen">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_larutan_petroksida_3_persen">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_larutan_petroksida_3_persen" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Iodine Povidon 10% --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">27.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Iodine Povidon 10%
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_oidine_povidon_10_persen">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_oidine_povidon_10_persen">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_oidine_povidon_10_persen">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_oidine_povidon_10_persen" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Selang untuk Saluran Kemih --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">28.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Selang untuk Saluran Kemih
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_selang_saluran_kemih">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_selang_saluran_kemih">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_selang_saluran_kemih">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_selang_saluran_kemih" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Sarung Tangan Karet Steril --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">29.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Sarung Tangan Karet Steril
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_sarung_tangan_karetSteril">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_sarung_tangan_karetSteril">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_sarung_tangan_karetSteril">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_sarung_tangan_karetSteril" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Kotak Obat P3K --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">30.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Kotak Obat P3K
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_kotak_obat_p3k">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_kotak_obat_p3k">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_kotak_obat_p3k">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_kotak_obat_p3k" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{--  Chloramfenicol Tetes Mata --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">31.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Chloramfenicol Tetes Mata
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_chloramfenicol_tetes_mata">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_chloramfenicol_tetes_mata">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_chloramfenicol_tetes_mata">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_chloramfenicol_tetes_mata" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Pantocaine Tetes Mata --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">32.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pantocaine Tetes Mata
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_pantocaine_tetes_mata">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_pantocaine_tetes_mata">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_pantocaine_tetes_mata">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_pantocaine_tetes_mata" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Betadine Salep Kulit --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">33.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Betadine Salep Kulit
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_betadine_salep_kulit">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_betadine_salep_kulit">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_betadine_salep_kulit">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_betadine_salep_kulit" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Chloramfenicol Tetes Telinga --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">34.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Chloramfenicol Tetes Telinga
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_chloramfenicol_tetes_telinga">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_chloramfenicol_tetes_telinga">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_chloramfenicol_tetes_telinga">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_chloramfenicol_tetes_telinga" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Lidocaine Injeksi --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">35.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Lidocaine Injeksi
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_lidocaine_injeksi">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_lidocaine_injeksi">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_lidocaine_injeksi">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_lidocaine_injeksi" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{--  Minyak Kayu Putih --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">36.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Minyak Kayu Putih
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_minyak_kayu_putih">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_minyak_kayu_putih">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_minyak_kayu_putih">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_minyak_kayu_putih" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Balsem --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">37.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Balsem
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_balsem">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_balsem">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_balsem">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_balsem" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{--  Paracetamol Tablet 500 mg --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">38.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Paracetamol Tablet 500 mg
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_paracetamol_tablet_500mg">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_paracetamol_tablet_500mg">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_paracetamol_tablet_500mg">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_paracetamol_tablet_500mg" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{--  Metampiron/Antalgin 500 mg --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">39.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Metampiron/Antalgin 500 mg
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_metampiron_antalgin_500mg">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_metampiron_antalgin_500mg">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_metampiron_antalgin_500mg">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_metampiron_antalgin_500mg" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Obat Anti Mabok Laut --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">40.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Obat Anti Mabok Laut
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_obat_anti_mabok_laut">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_obat_anti_mabok_laut">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_obat_anti_mabok_laut">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_obat_anti_mabok_laut" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{--  CTM/Obat Anti Alergi --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">41.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    CTM/Obat Anti Alergi
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_ctm_obat_anti_alergi">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_ctm_obat_anti_alergi">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_ctm_obat_anti_alergi">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_ctm_obat_anti_alergi" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- Tandu --}}
                                                        <tr>
                                                            <td class="text-center align-text-top">42.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Tandu <br>
                                                                    <em>Stretcher</em>
                                                                </p>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="y_tandu">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="n_tandu">
                                                                </div>
                                                            </td>
                                                            <td class="align-center">
                                                                <div class="form-check custom-checkbox p-3 mx-3">
                                                                    <input class="form-check-input mx-auto my-auto" type="checkbox" value="ada" name="na_tandu">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remaks_tandu" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card border-0 shadow-bottom p-3">
                                                            <div class="card-body">
                                                                <label for="daerah" class="form-label">
                                                                    <strong>Rekomendasi Marine Inspector </strong> <br>
                                                                    <i>Marine Inspector Recomendation</i>
                                                                </label>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-12">
                                                                    <p class="text-justify">
                                                                        Spesifikasi teknis dari seluruh perlengkapan medis dan obat haruslah disetujui dan dilegalisasi oleh pihak Pemerintah yang berwenang. <br>
                                                                        <em>Technical specification of all medical supply and medicine should be approved and endorsed by the administration.</em>
                                                                    </p>
                                                                    <label for="daerah"
                                                                        class="form-label">
                                                                        <strong>Data-data yang tidak sesuai</strong><br>
                                                                        Particulars of outstanding items
                                                                    </label>
                                                                    <textarea class="form-control" name="data_yang_tidak_sesuai_form5" style="width: 80%; height: 5em; resize: none;"></textarea>
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
                            {{-- FOTO-FOTO --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">6</td>
                                            <td style="font-weight: bold;">LAMPIRAN PHOTO <br>HASIL PEMERIKSAAN KAPAL
                                                DALAM RANGKA <br>PENERBITAN SERTIFIKAT KESELAMATAN PERLENGKAPAN KAPAL BARANG
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><i>ANNEX PHOTOS SHIP INSPECTION RESULTS FOR ISSUANCE OF CARGO SHIP SAFETY EQUIPMENT CERTIFICATE</i></td>
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
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="SEKOCI I" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_sekoci_1" id="inputGroupFile01" accept="image/*"  capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 2 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="SEKOCI II" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_sekoci_2" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 3 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="RESCUE BOAT" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_rescue_boat" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 4 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="LIFERAFT" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_liferaft" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 5 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="LIFEBOUY" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_lifebouy" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 6 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="LIFEJACKET" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_lifejacket" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 7 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="IMMERSION SUITS" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_immersion_suits" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 8 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="RADAR TRANSPONDER" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_radar_transponder" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 9 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="TWO WAY VHF" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_two_way_vhf" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 10 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="PEDOMAN MAGNET" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_pedoman_magnet" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 11 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="PEDOMAN MAGNET CADANGAN" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_pedoman_magnet_cadangan" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 12 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="GYRO COMPASS" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_gyro_compas" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 13 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="ECDIS" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_ecois" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 14 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="PUBLIKASI NAUTIKA" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_publikasi_nautika" id="inputGroupFile01" accept="image/*" capture>
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
                                                                    {{-- foto 15 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="RADAR I" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_radar_1" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 16 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="RADAR II" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_radar_2" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 17 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="ARPA" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_arpa" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 18 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="AIS" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_ais" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 19 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="LRIT" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_lrit" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 20 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="S-VDR" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_s_vdr" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 21 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="ECHOSOUNDER" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_echosounder" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 22 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="RUDDER INDICATOR" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_rudder_indicator" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 23 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="EMERGENCY TELEPHONE" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_emergency_telephone" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 24 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="INTERNATIONAL CODE OF SIGNAL" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_international_code" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 25 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="IAMSAR MANUAL" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_iamsar_manual" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 26 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="ALDIS" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_aldis" id="inputGroupFile01" accept="image/*" capture>
                                                                            <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#" alt="" style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 27 --}}
                                                                    <div class="mb-1">
                                                                        <div class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control" style="width: 500px;" value="" placeholder="RADAR REFLECTOR" disabled>
                                                                            <input type="file" class="form-control file-input" name="foto_radar_reflector" id="inputGroupFile01" accept="image/*" capture>
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
                                            <td style="width: 30px; font-weight: bold;">7</td>
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
                                                                            id="namaKapal" name="nama_kapal_form_rekomendasi">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="pemilik" class="form-label">
                                                                            <strong>Tanda panggilan</strong> <br>
                                                                            <i>Call sign</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            id="pemilik" name="tanda_panggilann_form_rekomendasi">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="pelabuhan" class="form-label">
                                                                            <strong>Isi kotor</strong> <br>
                                                                            <i>Gross tonnage</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            id="pelabuhan" name="isi_kotor_form_rekomendasi">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="daerah" class="form-label">
                                                                            <strong>Tahun pembuatan</strong> <br>
                                                                            <i>Year building</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            id="daerah" name="thn_pembuatan_form_rekomendasi">
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
                                                                            id="daerah" name="tipe_kapal">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="daerah" class="form-label">
                                                                            <strong>Pelabuhan pendaftaran</strong> <br>
                                                                            <i> Port of registry</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            id="daerah" name="pelabuhan_pendaftaran">
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
                                                                                <textarea class="form-control" name="rekomendasi" style="width: 100%; height: 5em; resize: none;"></textarea>
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
                                                                    <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                        <div class="mb-3">
                                                                            <input class="form-check-input" name="hasil_pemeriksaan_diterima" type="checkbox" value="diterima" id="defaultCheck1">
                                                                            <label class="form-check-label mx-2" for="defaultCheck1">
                                                                                <strong>Diterima</strong> <br>
                                                                            </label>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <input class="form-check-input" name="hasil_pemeriksaan_ditolak" type="checkbox" value="ditolak" id="defaultCheck1">
                                                                            <label class="form-check-label mx-2" for="defaultCheck1">
                                                                                <strong>Ditolak</strong> <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="border p-2">
                                                                    <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                        <div class="mb-3">
                                                                            <input class="form-check-input" name="status_sertifikat1" type="checkbox" value="Sertifikat dapat diterbitkan" id="defaultCheck1">
                                                                            <label class="form-check-label mx-2" for="defaultCheck1">
                                                                                <strong>Sertifikat dapat diterbitkan</strong>
                                                                            </label>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <input class="form-check-input" name="status_sertifikat2" type="checkbox" value="Diadakan tindakan perbaikan" id="defaultCheck1">
                                                                            <label class="form-check-label mx-2" for="defaultCheck1">
                                                                                <strong>Diadakan tindakan perbaikan</strong>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="card-body">
                                                                    <div class="border float-right">
                                                                        <div class="mb-3">
                                                                            <label for="daerah" class="form-label">
                                                                                <strong>Tempat Pemeriksaan</strong>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 mx-2">
                                                                                    <input type="text" class="form-control" name="tempat_pemeriksaan">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <input type="date" class="form-control" name="tanggal_pemeriksaan">
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
                                                                    <label class="text-center" for=""><strong>Data Pemeriksa</strong></label>
                                                                    <div class="p-2">
                                                                        <input type="text" class="form-control" name="nama_pemeriksa_form_pemeriksaan" placeholder="Nama Pemeriksa"> <br>
                                                                        <input type="text" class="form-control" name="nip_pemeriksa" placeholder="NIP"><br>
                                                                    </div>
                                                                    <div id="sig">
                                                                        <canvas id="signatureCanvas2" width="500" height="300"></canvas>
                                                                    </div>
                                                                    <br />
                                                                    <button id="clear2" class="btn btn-danger btn-sm" type="button">Clear Signature</button>
                                                                    <textarea id="signature_pemeriksa2" name="ttd_pengesahan_pemeriksa" style="display: none"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="border p-2">
                                                                    <label class="text-center" for=""><strong>Data Nahkoda</strong></label>
                                                                    <div class="p-2">
                                                                        <input type="text" class="form-control"
                                                                            name="nama_nahkoda" placeholder="Nama Nahkoda"> <br>
                                                                    </div>
                                                                    <div id="sig">
                                                                        <canvas id="signatureCanvas3" width="500" height="300"></canvas>
                                                                    </div>
                                                                    <br />
                                                                    <button id="clear3" class="btn btn-danger btn-sm" type="button">Clear Signature</button>
                                                                    <textarea id="signature_nahkoda" name="ttd_pengesahan_nahkoda" style="display: none"></textarea>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-block btn-outline-success mt-4"><b>Kirim Data Pemeriksaan</b></button>
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
                var signatureInput = document.getElementById('signature_pemeriksa');

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
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                var canvas = new SignaturePad(document.getElementById('signatureCanvas2'));
                var clearButton = document.getElementById('clear2');
                var signatureInput = document.getElementById('signature_pemeriksa2');

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
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                var canvas = new SignaturePad(document.getElementById('signatureCanvas3'));
                var clearButton = document.getElementById('clear3');
                var signatureInput = document.getElementById('signature_nahkoda');

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
