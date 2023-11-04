<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pencegahan Pencemaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(90deg, #C7C5F4, #776BCC);
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
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
    <body>
        <div class="container mt-5">
            <form action="">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <button class="btn btn-md btn-danger mb-3 rounded" type="button" onclick="goBack();"><i
                                class="bi bi-box-arrow-left"></i> Back</button>
                        <h5 class="text-center mb-5">
                            <p>
                                <strong>LAPORAN</strong>
                            </p>
                            PEMERIKSAAN KONDISI PERALATAN-PERALATAN <br> PENCEGAHAN PENCEMARAN DI KAPAL BERDASARKAN <br> PERSYRATAN DALAM KONVENSI MARPOL 73/78 <br> LAMPIRAN -I
                        </h5>
                        <h5 class="text-center">
                            <p>
                                <strong><em>INSPECTION REPORT</em></strong>
                            </p>
                            <em>
                                CHECK LIST FOR SURVEY OF <br>
                                THE CONDITION OF THE PREVENTION OF <br> POLLUTION EQUIPMENTS ON BOARD UNDER THE TERMS <br>OF MARPOL CONVENTION 73/78,ANNEX-1
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
                                                <input type="text" class="form-control" id="namaKapal" name="nama_kapal">
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
                                                <input type="text" class="form-control" id="pelabuhan" name="pelabuhan">
                                            </div>

                                            <div class="mb-3">
                                                <label for="daerah" class="form-label">
                                                    <strong>DAERAH PELAYARAN</strong> <br>
                                                    <i>TRADING AREA</i>
                                                    <small>(SK dirjen No. /2012 Pasal 3)</small>
                                                </label>
                                                <input type="text" class="form-control" id="daerah" name="daerah">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Checkbox --}}
                                    <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                        <table class="table-responsive">
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="Ok"
                                                        id="defaultCheck1" name="pemriksaan_1">
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
                                                        id="defaultCheck1" name="pemriksaan_tahunan">
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
                                                            name="nama_kapal3">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="daerah" class="form-label">
                                                            <strong>Tanda Panggilan</strong> <br>
                                                            <i>Call Sign</i>
                                                        </label>
                                                        <input type="text" class="form-control" id="daerah"
                                                            name="tanda_panggilan">
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
                                                                            value="Ok" id="defaultCheck1"
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
                                                                            value="Ok" id="defaultCheck1"
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
                                                                            value="Ok" id="defaultCheck1"
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
                                                                            value="Ok" id="defaultCheck1"
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
                                                                            value="Ok" id="defaultCheck1"
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
                                        </div>
                                        <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                            <table class="table-responsive">
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" value=""
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
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="defaultCheck1">
                                                        <label class="form-check-label mx-2" for="defaultCheck1">
                                                            <strong>Sertifikat berlaku hingga
                                                            </strong> <br>
                                                            <i>
                                                                Certificate valid until
                                                            </i>
                                                            <input type="text" class="form-control" id="tglBerlaku"
                                                                name="tglBerlaku" placeholder="dd/mm/yyyy">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="defaultCheck1">
                                                        <label class="form-check-label mx-2" for="defaultCheck1">
                                                            <strong>Check dalam kondisi baik /√</strong> <br>
                                                            <i>Check of found satisfactory </i>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="defaultCheck1">
                                                        <label class="form-check-label mx-2" for="defaultCheck1">
                                                            <strong>Check peralatan tidak ada /- </strong> <br>
                                                            <i>Check but not applicable</i>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" value=""
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
                                                    name="pelabuhan" placeholder="Nama Pemeriksa"> <br>
                                                <input type="text" class="form-control" id="pelabuhan"
                                                    name="pelabuhan" placeholder="NIP"><br>
                                                <input type="text" class="form-control" id="pelabuhan"
                                                    name="pelabuhan" placeholder="Nomer MI">
                                            </div>
                                            <div id="sig">
                                                <canvas id="signatureCanvas" width="500" height="300"></canvas>
                                            </div>
                                            <br />
                                            <button id="clear" class="btn btn-danger btn-sm" type="button">Clear Signature</button>
                                            <textarea id="signature64" name="signed" style="display: none"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        {{-- 1. JUDUL --}}
                        <div class="table-responsive mt-2 mx-auto">
                            <div class="card border-0 shadow-bottom">
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
                            </div>
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
                                                    Rancangan dan Konstruksi termasuk informasi stabilitas pengaturan
                                                    kondisi bangunan, akomodasi dan integritas kekedapairan.
                                                </strong>
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button"
                                                data-target="data3"><i class="bi bi-calendar-plus-fill"></i> <small>Check
                                                    Data Kapal</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="data3">
                                                <table>
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th class="text-center">Item pemeriksaan Item inspected</th>
                                                            <th>Aturan Regulation</th>
                                                            <th>Y N N.A</th>
                                                            <th>Keterangan Remark</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->

                                                        <tr>
                                                            <td class="text-center align-text-top">1.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Informasi stabilitas <br>
                                                                    <em>Stability Booklet</em><br />
                                                                    (SK Dirjen No. /2012 Psll 25 dan 113, Bab VI Seksi 8.1
                                                                    dok. NCVS dan Bab VI App 10 dok. NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="informasi_stabilitas"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation1" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-xl mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak1" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">2.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pedoman Pemuatan <br>
                                                                    <i>Loading Manual/Booklet</i><br /> (Bab VI Seksi 11.2
                                                                    dok. NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="pedoman_pemuatan" value="Pedoman Pemuatan"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation2" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA2">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak2" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">3.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Gambar rancangan umum <br>
                                                                    <i>Loading Manual/Booklet</i><br /> (Bab II Seksi 32.3.2
                                                                    dok. NCVS, Bab II tabel.61 dok. NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation3" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA3">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak3" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">4.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Gambar rancang keselamatan <br>
                                                                    <i>Safety Equipment Plan</i><br /> (Bab II Seksi 32.3.2
                                                                    dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation4" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA4">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak4" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">5.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Gambar rancangan kebakaran
                                                                </p>
                                                                <p>
                                                                    <i>Fire Plan</i><br /> (SK dirjen No. /2012 Pasal 53(r),
                                                                    54(r), 55(r), 56(r), 57(r), 58(r), 59(r), 60(r), 6 (r),
                                                                    62(r), dan 63(r))
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation5" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA5">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak5" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">6.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pedoman Pengikatan Muatan <br>
                                                                    <i>Cargo Securing Manual</i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation6" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA6">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak6" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">7.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Catatan kesesuaian desain kapal dengan daerah
                                                                    pelayarannya <br>
                                                                    <i>Class Notification with regards to trading
                                                                        area</i><br /> (SK dirjen No. /2012 Pasal 26, Bab II
                                                                    bagian F Seksi 17.1 dokumen NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation7" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA7">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak7" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">8.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Bahan dasar kapal <br>
                                                                    <i>Material of the ship</i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">8.1</td>
                                                            <td style="padding-left: 20px;">
                                                                Baja/Steel<br /> (Bab II Seksi 20 dokumen NCVS)
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation8" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA8">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak8" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">8.2</td>
                                                            <td style="padding-left: 20px;">
                                                                Alumunium/Alumunium<br /> (Bab II Seksi 29 dokumen NCVS)
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation9" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA9">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak9" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">8.3</td>
                                                            <td style="padding-left: 20px;">
                                                                Fiber/Fiberglass<br /> (Bab II Seksi 30 dokumen NCVS)
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation10" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA10">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak10" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">8.4</td>
                                                            <td style="padding-left: 20px;">
                                                                Kayu/Wooden<br /> (Bab II Seksi 31 dokumen NCVS)
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation11" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA11">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak11" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">8.5</td>
                                                            <td style="padding-left: 20px;">
                                                                Ferro cement/Ferro cement<br /> (Bab II Seksi 4 dokumen
                                                                NCVS)
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation12" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA12">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak12" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">8.6</td>
                                                            <td style="padding-left: 20px;">
                                                                Bahan lainnya/Other material
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation13" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA13">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak13" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">9.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Keadaan marka Garis Muat <br>
                                                                    <i>Condition of Load line mark</i><br /> (Bab VI dokumen
                                                                    NCVS)
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">9.1</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kesesuaian Marka dengan sertifikat Garis Muat <br>
                                                                    <i>Load line is marked according to the load line
                                                                        certificate</i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation14" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA14">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak14" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">9.2</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Penandaan dapat dilihat dengan jelas <br>
                                                                    <i>The marking can be seen clearly </i><br /> (SK dirjen
                                                                    No. /2012 Psl 122(6), Bab VI Seksi 18 dok. NCVS, Bab VI
                                                                    App 1,2 dan 3 dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation15" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA15">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak15" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">10.</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Konstruksi Lambung kapal <br>
                                                                    <i>Ship’s Hull Construction</i> <br />
                                                                    (Bab II Bagian B dok. NCVS)
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.1 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.1</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jumlah sekat pada kamar mesin (untuk kapal dengan mesin
                                                                    didalam) <br>
                                                                    <i>Number of bulkhead (for inboard engine)</i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation16" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA16">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak16" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.2 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.2</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jendela Cahaya dengan kondisi yang baik <br>
                                                                    <i>Skylight is in good condition </i><br />
                                                                    (Bab II Seksi 11.10 dan 33.8, dok. NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation17" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA17">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak17" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.3 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.3</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi sekat tubrukan yang dapat dilihat
                                                                </p>
                                                                <p>
                                                                    <i>Condition of ship's collision bulkhead that can be
                                                                        seen </i><br />
                                                                    (Bab II Bag. B Seksi 7.4 dok. NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation18" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA18">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak18" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.4 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.4</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi sekat kedap air yang dapat dilihat
                                                                </p>
                                                                <p>
                                                                    <i>Condition of ship's watertight bulkhead that can be
                                                                        seen </i><br>
                                                                    (Bab II Bag. B Seksi 7.5 dok. NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation19" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA19">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak19" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.5 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.5</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi kekedapan cuaca pada geladak kapal
                                                                </p>
                                                                <p>
                                                                    <i>The ship's deck weather tight condition</i> <br>
                                                                    (SK dirjen No. /2012 Pasal 10(5))
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation20" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA20">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak20" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.6 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.6</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Penempatan tingkap sisi dilambung kapal, minimal
                                                                    berjarak 500mm diatas desain garis muat.
                                                                </p>
                                                                <p>
                                                                    <i>The placements of ship's side scuttle minimum 500mm
                                                                        above the loadline mark. </i><br>
                                                                    (SK dirjen No. /2012 Psl 132, Bab II Bag. B Seksi 7.8
                                                                    dok. NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation21" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA21">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak21" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.7 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.7</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kapal dilengkapi dengan pagar dan kubu-kubu dengan
                                                                    tinggi sesuai ketentuan garis muat
                                                                </p>
                                                                <p>
                                                                    <i>The ship's deck railings and bulwark are designed as
                                                                        load line requirement </i><br>
                                                                    (SK dirjen No. /2012 Pasal 134)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation22" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA22">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak22" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.8 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.8</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jumlah ruang muat/tangki
                                                                </p>
                                                                <p>
                                                                    <i>Number of tank/cargo hold(s) </i><br>
                                                                    (SK dirjen No. /2012 Psl 1(70))
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation23" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA23">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak23" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.9 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.9</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jenis ruang muat
                                                                </p>
                                                                <p>
                                                                    <i>Type of tank/cargo hold</i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation24" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA24">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak24" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.10 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.10</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi ruang muat/tangki
                                                                </p>
                                                                <p>
                                                                    <i>Condition of tank/cargo hold</i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation25" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA25">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak25" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.11 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.11</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi got-got ruang muat
                                                                </p>
                                                                <p>
                                                                    <i>Condition of cargo hold bilges </i><br>
                                                                    (SK dirjen No. /2012 Psl 19)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation26" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA26">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak26" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.12 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.12</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi pompa got ruang muat
                                                                </p>
                                                                <p>
                                                                    <i>Condition of cargo hold bilge pump </i><br>
                                                                    (SK dirjen No. /2012 Pasal 19)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation27" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA27">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak27" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.13 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.13</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi akses jalan/tangga keluar dan masuk ruang muatan
                                                                </p>
                                                                <p>
                                                                    <i>Condition of cargo holds access</i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation28" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA28">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak28" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.14 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.14</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Akses jalan keruang muat dilengkapi dengan penutup kedap
                                                                    cuaca
                                                                </p>
                                                                <p>
                                                                    <i>The access to cargo holds through weather tight
                                                                        cover/door</i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="keterangan_remak29" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA29">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak29" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.15 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.15</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jenis tutup palka
                                                                </p>
                                                                <p>
                                                                    <i>Type of hatch cover</i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation30" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA30">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="keterangan_remak30" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.16 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.16</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi tutup-tutup palka
                                                                </p>
                                                                <p>
                                                                    <i>The condition of hatch covers </i><br>
                                                                    (Bab V Seksi 8.9, 8.11 dokumen NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA31">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.17 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.17</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi tempat untuk mengikat muatan didalam palka
                                                                </p>
                                                                <p>
                                                                    <i>The condition of pad eye or lashing point to lash the
                                                                        cargo in the hold</i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA32">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.18 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.18</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi tempat untuk mengikat muatan digeladak
                                                                </p>
                                                                <p>
                                                                    <em>The condition of pad eye or lashing point to lash
                                                                        the cargo on deck</em>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA33">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.19 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.19</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Ruang muat dilengkapi dengan ventilasi <br>
                                                                    <em>The ship's cargo holds are equipped with
                                                                        ventilation</em> <br>
                                                                    (Bab V Seksi 9.15 dok. NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="format"
                                                                    name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                    disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA34">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.23 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.23</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Sistem pengoperasian:<br>
                                                                    Operation system: <br>
                                                                    a. Alami/Natural <br>
                                                                    b. Bermesin/Forced (Electric)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA35">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 10.24 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.24</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi konstruksi lambung kapal secara umum <br>
                                                                    <i>The condition of ship's hull construction in
                                                                        general</i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">a</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Alas/Bottom plate
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA36">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">b</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Gading-gading/frames <br>
                                                                    (Bab II Seksi 20.11 dok. NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA37">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">c</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Dasar berganda <br>
                                                                    <em>Double bottom</em> <br>
                                                                    (Bab II Seksi 9.3 dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA38">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">d</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kulit lambung ganda <br>
                                                                    <em>Double skin hull</em> <br>
                                                                    (Bab II Seksi 20.17 dok. NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA39">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">e</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Pelat geladak <br>
                                                                    <em>Deck plate</em><br>
                                                                    (Bab II Seksi 20.15 dok. NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA40">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">f</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Pelat kulit <br>
                                                                    <em>
                                                                        Ship's hull plate
                                                                    </em><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA41">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">g</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Pipa-pipa udara dan penutupnya <br>
                                                                    <em>
                                                                        Air vents and vent's head
                                                                    </em><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA42">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">h</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Pipa-pipa duga dan penutupnya
                                                                </p>
                                                                <p>
                                                                    <em>
                                                                        Sounding pipes and covers
                                                                        (Bab V Seksi 5.4.8 dok. NCVS)
                                                                    </em><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA43">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">i</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tangga-tangga geladak
                                                                </p>
                                                                <p>
                                                                    <em>
                                                                        Deck stairways
                                                                        (Bab II Seksi 15.4 dok. NCVS)
                                                                    </em><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA44">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.25</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi jalan akses (tangga/jembatan masuk) kekapal
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        The ship's gangway condition
                                                                    </i><br>
                                                                    (Bab II Seksi 11 dok. NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA45">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.26</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Akses masuk (tangga/jembatan) dilengkapi dengan pagar
                                                                    dan jala
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        The access/gangway is equipped with railing and net
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA46">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.27</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Bila dilengkapi dengan motor untuk mengangkat, tali
                                                                    kawat baja dalam kondisi yang baik
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        If it is equipped with motor/hydraulic engine to
                                                                        operate, the wire is in good condition
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA47">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.28</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tali kawat tersebut tidak berumur lebih dari 5 (lima)
                                                                    tahun semenjak pertama dipasang
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        The wire not been used for more than 5 (five) years
                                                                        since it’s installment
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA48">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">10.29</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tanggal berapa kawat tali tersebut dipasang?
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        What was the date of installment?
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA49">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">11</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Kondisi secara umum tali kawat baja dan sejenisnya yang
                                                                    digunakan diatas kapal kecuali cargo gear.

                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        General condition wire used on board
                                                                    </i> <br />
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">11.1</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Mempunyai rekomendasi penggunaan dari pabrikan sesuai
                                                                    ukuran dengan peruntukannya .
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA50">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">11.2</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Memiliki sertifikat uji pabrikan.
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA51">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">11.3</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Diperiksa rutin secara visual dan diberi pelumas/gemuk
                                                                    yang sesuai.
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA52">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">11.4</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Di putar balik dari ujung ke ujung setelah berumur 30
                                                                    bulan (2.5 tahun) semenjak tanggal pemasangan
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA53">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">11.5</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Diberi keterangan (stensil) yang berisi informasi
                                                                    Tanggal pemasangan/instalasi dan tanggal diputar balik.
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA54">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">12</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Bangunan atas, rumah geladak Deck houses and
                                                                    superstructure
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">12.1</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Rumah geladak dan bangunan atas dilengkapi dengan
                                                                    jendela-jendela kedap air
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        The deck houses and superstructure equipped with
                                                                        watertight port holes
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Psl 53(q), 54(q), 55(q),56(q) dan
                                                                    57(q), Bab VI Seksi 8.15.1 dok. NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA55">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">12.2</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi 12.1 memenuhi ketentuan <br>
                                                                    <i>
                                                                        The condition of 12.2 as required
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Psl 53(q), 54(q), 55(q),
                                                                    56(q) dan 57(q), Bab VI Seksi 8.15.1 dok. NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA56">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">12.3</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Rumah geladak dan bangunan atas dilengkapi dengan
                                                                    pintu-pintu kedap air <br>
                                                                    <i>
                                                                        The deck houses and superstructure equipped with
                                                                        watertight doors
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Pasal 11)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA57">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">12.4</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi 12.3 memenuhi ketentuan <br>
                                                                    <i>
                                                                        The condition of 12.3 as required
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Pasal 11)
                                                                </p>
                                                                <p>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA58">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">12.5</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Rumah geladak dan bangunan atas dilengkapi dengan
                                                                    ventilasi udara <br>
                                                                    <i>
                                                                        The deck houses and superstructure
                                                                        equipped with air ventilation
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA59">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">12.6</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Ventilasi tersebut dapat dibuka/tutup dengan baik <br>
                                                                    <i>
                                                                        The ventilation be opened / closed easily
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA60">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">12.7</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi ruang akomodasi baik <br>
                                                                    <i>
                                                                        The accommodation in good condition
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA61">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">12.8</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Penerangan diruang akomodasi mencukupi <br>
                                                                    <i>
                                                                        The lightning in accommodation room adequate
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA62">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">12.9</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kapal memiliki kamar mandi/toilet yang memadai <br>
                                                                    <i>
                                                                        The ship have adequate lavatory/toilet
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA63">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">12.10</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kapal memiliki dapur <br>
                                                                    <i>
                                                                        The ship have galley
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA64">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">13</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Perlengkapan kapal <br>
                                                                    <i>
                                                                        Ship's equipment
                                                                    </i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <input type="hidden" class="form-control" id="format"
                                                                name="item_pemeriksaan" value="Informasi Stabilitas"
                                                                disabled>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">13.1</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Perlengkapan alat bongkar muat yang ada diatas kapal.
                                                                    <br>
                                                                    <i>
                                                                        The ship's equipment cargo gear on board
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA65">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">13.2</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tali kawat baja dan sejenisnya untuk alat-alat bongkar
                                                                    muat telah disetujui oleh klas <br>
                                                                    <i>
                                                                        Cargo gear wires for cargo handling equipment
                                                                        approved by class
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA66">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">13.3</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tali kawat baja dan sejenisnya tersebut tidak berumur
                                                                    lebih dari 5 (lima) tahun semenjak pertama dipasang <br>
                                                                    <i>
                                                                        The wire not been used for more than 5 (five) years
                                                                        since it's installment
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA67">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">13.4</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tanggal tali kawat baja dan sejenisnya dipasang <br>
                                                                    <i>
                                                                        The date of wires installment
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA68">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">13.5</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Pengujian beban terakhir terhadap alat bongkar muat <br>
                                                                    <i>
                                                                        The last cargo gear load test carried out
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA69">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">13.6</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jumlah jangkar depan kapal <br>
                                                                    <i>
                                                                        How many forward anchor the ship has
                                                                    </i><br>
                                                                    (Bab II Bagian H dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA70">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">13.7</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Berat masing-masing jangkar <br>
                                                                    <i>
                                                                        The weight of each anchor
                                                                    </i><br>
                                                                    (Bab II Bagian H dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA71">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">13.8</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Panjang rantai jangkar dalam shackle Shackles <br>
                                                                    <i>
                                                                        does each anchor have
                                                                    </i><br>
                                                                    (Bab II Bagian H dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA72">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">13.9</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kapal memiliki jangkar buritan <br>
                                                                    <i>
                                                                        The ship have stern anchor
                                                                    </i><br>
                                                                    (Bab II Bagian H dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA73">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">13.10</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Panjang rantai jangkar buritan dalam shackle <br>
                                                                    <i>
                                                                        Shackles does the stern anchor have?
                                                                    </i><br>
                                                                    (Bab II Bagian H dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="format" name="item_pemeriksaan"
                                                                    value="Informasi Stabilitas" disabled>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="Ok" name="Y_N_NA74">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="aturan_regulation" style="width: 100%;"></textarea>
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
                                            style="width: 5%"><strong>II</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Permesinan dan Instalasi Listrik <br>
                                                    <i>
                                                        Engines and electrical installation <br>
                                                    </i>
                                                    (Bab V dok NCVS)
                                                </strong>
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button"
                                                data-target="data4"><i class="bi bi-calendar-plus-fill"></i>
                                                <small>Check Data Kapal</small></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="data4">
                                                <table>
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th class="text-center">Item pemeriksaan Item inspected</th>
                                                            <th>Aturan Regulation</th>
                                                            <th>Y N N.A</th>
                                                            <th>Keterangan Remark</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td class="text-center align-text-top bold-text">1</td>
                                                            <td colspan="4" style="padding-left: 20px;">
                                                                <p>
                                                                    Permesinan <br>
                                                                    <i>Engines</i>
                                                                </p>
                                                                <p>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.1</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Mesin Utama <br>
                                                                    <i>Main Engine</i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">a</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jumlah <br>
                                                                    <i>Number</i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" name="Y_N_NA">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">b</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Merk <br>
                                                                    <i>Maker</i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" name="Y_N_NA">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">c</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tipe <br>
                                                                    <i>Type</i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" name="Y_N_NA">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">d</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    No. Seri <br>
                                                                    <i>Serial No.</i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" name="Y_N_NA">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">e</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    TK/KW <br>
                                                                    <i>Power in TK/kW</i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" name="Y_N_NA">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">f</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    RPM <br>
                                                                    <i>RPM</i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" name="Y_N_NA">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.2 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.2</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Sistem mekanis pengendali olah gerak mesin utama
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        Mechanical control system to operate main engine
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" name="Y_N_NA">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.3 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.3</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Sistem alarm untuk gangguan
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        Alarm system for any trouble
                                                                    </i><br>
                                                                    (Bab V Seksi 2.4.3.3) dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.4 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.4</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Memiliki pompa minyak lumas cadangan dilengkapi motor
                                                                    penggeraknya (2 maupun 4 langkah)
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        There is any reserver lubricating oil pump with
                                                                        electro motor(2&4 stroke)
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.5 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.5</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Memiliki tangki harian
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        There is any daily/service tank
                                                                    </i><br>
                                                                    (Bab II Seksi 35.23.5.3 dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.6</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Sistem pemberhenti/penutup darurat
                                                                    \
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        There is any quick closing valve
                                                                    </i><br>
                                                                    (Bab II Seksi 35.23.5.3) dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.7</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Alat tersebut bekerja dengan baik
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        The quick closing valve work well
                                                                    </i><br>
                                                                    (Bab II Seksi 35.23.5.3) dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.8</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Memiliki kamar kontrol mesin
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        The ship have engine control room
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.9</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Perangkat mengolah gerak dari anjungan
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        Maneuvering equipment from bridge
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.10</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Mesin induk dan mesin bantu yang dilengkapi dengan
                                                                    system pengaman
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        Main and Aux Engines are equipped with safety device
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.11</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jenis sistem pendingin mesin
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        Engine cooling system
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">a</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Pendingin air
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        Water cooler system
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">b</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Pendingin udara
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        Air cooler system
                                                                    </i><br>
                                                                    (Bab V Seksi 2.4.7 dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 2 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top bold-text">2</td>
                                                            <td colspan="4" style="padding-left: 20px;">
                                                                <p>
                                                                    Ventilasi <br>
                                                                    <i>Ventilation</i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">2.2</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Ventilasi tersebut dapat dibuka/tutup dengan baik
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        The ventilation be opened / closed easily
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">2.1</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Ventilasi-ventilasi kamar mesin
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        Engine room’s ventilations
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">2.3</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Cara pengoperasian:
                                                                </p>
                                                                <p>
                                                                    <i>
                                                                        Operation method:
                                                                    </i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">a</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Matural <br>
                                                                    <i>
                                                                        Natural
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">b</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Bermesin <br>
                                                                    <i>
                                                                        Forced (Electric)
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 3 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top bold-text">3</td>
                                                            <td colspan="4" style="padding-left: 20px;">
                                                                <p>
                                                                    Pembangkit Listrik <br>
                                                                    <i>Generator</i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        {{-- 3.1 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">3.1</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Generator <br>
                                                                    <i>Generator</i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">a</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jumlah <br>
                                                                    <i>
                                                                        Number
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Pasal 109)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">b</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Merk <br>
                                                                    <i>
                                                                        Maker
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Pasal 109)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">c</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tipe <br>
                                                                    <i>
                                                                        Type
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Pasal 109)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">d</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    No. Seri <br>
                                                                    <i>
                                                                        Serial no.
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Pasal 109)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">e</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    TK/kW <br>
                                                                    <i>
                                                                        Power in HP/kW
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Pasal 109)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">f</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    RPM <br>
                                                                    <i>
                                                                        RPM
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Pasal 109)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 3.2 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">3.2</td>
                                                            <td colspan="4" style="padding-left: 20px;">
                                                                <p>
                                                                    Generator darurat <br>
                                                                    <i>Emergency Generator</i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">a</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jumlah <br>
                                                                    <i>
                                                                        Number
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Pasal 110)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">b</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Merk <br>
                                                                    <i>
                                                                        Maker
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Pasal 110)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">c</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tipe <br>
                                                                    <i>
                                                                        Type
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Pasal 110)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">d</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    No. Seri <br>
                                                                    <i>
                                                                        Serial no.
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Pasal 110)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">e</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    TK/kW <br>
                                                                    <i>
                                                                        Power in HP/kW
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Pasal 110)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">f</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    RPM <br>
                                                                    <i>
                                                                        RPM
                                                                    </i><br>
                                                                    (SK dirjen No. /2012 Pasal 110)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 4 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top bold-text">4</td>
                                                            <td colspan="4" style="padding-left: 20px;">
                                                                <p>
                                                                    Kemudi <br>
                                                                    <i>Steering</i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        {{-- 4.1 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">4.1</td>
                                                            <td colspan="4" style="padding-left: 20px;">
                                                                <p>
                                                                    Sistem Kemudi <br>
                                                                    <i>Steering System</i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">a</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jumlah <br>
                                                                    <i>
                                                                        Number
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">b</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Merk <br>
                                                                    <i>
                                                                        Maker
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">c</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tipe <br>
                                                                    <i>
                                                                        Type
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">d</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    No. Seri <br>
                                                                    <i>
                                                                        Serial no.
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 4.2 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">4.2</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Sarana komunikasi antara anjungan dan ruang kemudi <br>
                                                                    <i>
                                                                        Communication device between bridge and steering
                                                                        room
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 4.3 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">4.3</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Indicator sudut kemudi independen di ruang kemudi <br>
                                                                    <i>
                                                                        Independent rudder angle indicator in steering room
                                                                        <br>
                                                                    </i>
                                                                    (Bab V Seksi 6.3.1.8 dokumen NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 4.4 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">4.4</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Sistem pengoperasian kemudi darurat <br>
                                                                    <i>
                                                                        Emergency steering system
                                                                        <br>
                                                                    </i>
                                                                    (Bab V Seksi 6 dokumen NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 4.5 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">4.5</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Bagan/instruksi manual untuk pengoperasian kemudi
                                                                    darurat <br>
                                                                    <i>
                                                                        The instruction manual for emergency steering system
                                                                        <br>
                                                                    </i>
                                                                    (Bab V Seksi 6 dokumen NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 4.6 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">4.6</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Alarm-alarm gangguan pengoperasian sistem kemudi <br>

                                                                    <i>
                                                                        The alarm to indicate trouble for steering system
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 5 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top bold-text">5</td>
                                                            <td colspan="4" style="padding-left: 20px;">
                                                                <p>
                                                                    Instalasi listrik <br>
                                                                    <i>Electrical installation</i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        {{-- 5.1 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">5.1</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Alarm-alarm gangguan pengoperasian sistem kemudi Kapal
                                                                    memiliki daya listrik utama yang mencukupi untuk semua
                                                                    kegiatan operasi kapal dalam keadaan normal. <br>
                                                                    <i>
                                                                        The ship has it’s main electrical power for all
                                                                        operations without using additional emergency power
                                                                        in normal condition. <br>
                                                                        (Bab V Seksi 8 dok NCVS)
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 5.2 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">5.2</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    ADaya listrik utama yang digunakan untuk ventilasi mesin
                                                                    dan ruang muatan dipasok dari panel utama <br>
                                                                    <i>
                                                                        The main electric power which used for engine room
                                                                        and cargo hold ventilations supplied from Feeder
                                                                        Panel <br>
                                                                    </i>
                                                                    (Bab V Seksi 8 dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 5.3 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">5.3</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Sistem ventilasi ruangan dapat dihidupkan dan dimatikan
                                                                    dari posisi diluar ruangan (hisap/buang) <br>
                                                                    <i>
                                                                        Ventilation system for spaces can be switched on or
                                                                        off from outside of its space (inlet/outlet) <br>
                                                                    </i>
                                                                    (Bab V Seksi 8 dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 5.4 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">5.4</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kapal memiliki daya listrik cadangan untuk kondisi
                                                                    darurat.
                                                                    <br>
                                                                    <i>
                                                                        The ship has back up electrical power system for
                                                                        emergency.
                                                                        <br>
                                                                    </i>
                                                                    (Bab V Seksi 8 dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 5.5 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">5.5</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Pasokan listrik darurat untuk radio dan peralatan
                                                                    navigasi yang utama
                                                                    <br>
                                                                    <i>
                                                                        Emergency power for radio communication and main
                                                                        navigation equipment?
                                                                        <br>
                                                                    </i>
                                                                    (Bab V Seksi 8 dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 5.6 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">5.6</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Instalasi listrik yang terpasang tidak membahayakan awak
                                                                    kapal dan/atau penumpang
                                                                    <br>
                                                                    <i>
                                                                        The electrical installation safe for its crew and/or
                                                                        passenger?
                                                                        <br>
                                                                    </i>
                                                                    (Bab V Seksi 8 dok NCVS)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 5.7 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">5.7</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Instalasi baterai telah dipasang dengan baik
                                                                    <br>
                                                                    <i>
                                                                        The battery installation been fitted
                                                                        <br>
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 5.8 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">5.8</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Lampu-lampu darurat berfungsi dengan baik
                                                                    <br>
                                                                    <i>
                                                                        All emergency lights work well
                                                                        <br>
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
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
                            {{-- FORM 3 --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    {{-- JUDUL FORM --}}
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>III</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    Instalasi perlindungan, deteksi, dan pemadaman kebakaran <br>
                                                    <i>
                                                        Fire protection, detection and extinction installation
                                                    </i>
                                                </strong>
                                            </h6>
                                        </td>
                                    </tr>
                                    {{-- Tombol buka form --}}
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary my-2 toggleButton" type="button"
                                                data-target="data5"><i class="bi bi-calendar-plus-fill"></i>
                                                <small>Check Data Kapal</small></button>
                                        </td>
                                    </tr>
                                    {{-- Header --}}
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="data5">
                                                <table>
                                                    <thead class="table-success text-center">
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th class="text-center">Item pemeriksaan Item inspected</th>
                                                            <th>Aturan Regulation</th>
                                                            <th>Y N N.A</th>
                                                            <th>Keterangan Remark</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        {{-- 1 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top bold-text">1</td>
                                                            <td colspan="4" style="padding-left: 20px;">
                                                                <p>
                                                                    Perlindungan terhadap kebakaran
                                                                </p>
                                                                <p>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.1 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.1</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Ruang akomodasi memiliki sekat yang mampu menahan aliran
                                                                    asap atau nyala api kebakaran
                                                                    <br>
                                                                    <i>
                                                                        The accommodation room have bulkhead(s) that can
                                                                        delay the movement of smoke or fire?
                                                                        <br>
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.2 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.2</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Pintu-pintu yang mampu menahan aliran asap atau nyala
                                                                    api kebakaran disetiap ruangan
                                                                    <br>
                                                                    <i>
                                                                        The ship have accommodation fire doors type
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.3 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.3</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Alat penghentian aliran udara ventilasi secara cepat di
                                                                    dapur
                                                                    <br>
                                                                    <i>
                                                                        The ventilation's emergency shut down for galley
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.4 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.4</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Instalasi pendeteksian kebakaran
                                                                    <br>
                                                                    <i>
                                                                        Fire detector on the ship
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.5 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.5</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jika ada, jenis instalasi pendeteksian kebakaran
                                                                    <br>
                                                                    <i>
                                                                        If yes, The type of the detector
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.6 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.6</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Ventilasi udara di akomodasi termasuk “fire dampers”
                                                                    dapat ditutup dengan baik
                                                                    <br>
                                                                    <i>
                                                                        The accommodation ventilations including fire
                                                                        dampers can be shut effectively
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.7 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.7</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Ventilasi udara di ruang mesin termasuk “fire flaps”
                                                                    dapat ditutup dengan baik
                                                                    <br>
                                                                    <i>
                                                                        The engine room ventilation including fire flaps can
                                                                        be shut effectively
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.8 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.8</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jenis instalasi pemadam tetap diatas kapal
                                                                    <br>
                                                                    <i>
                                                                        The type of fixed fire extinction system on board
                                                                        the ship
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.9 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.9</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jika instalasi pemadam kebakaran tetap berjenis air,
                                                                    apakah air dapat dipancarkan dari 2 (dua) selang pemadam
                                                                    dalam jarak yang berjauhan dengan kekuatan pancar yang
                                                                    memadai?
                                                                    <br>
                                                                    <i>
                                                                        If the installation type is water system, is the
                                                                        pressure from at least 2 (two) fire hose nozzle that
                                                                        fitted in a distance found satisfactorily?
                                                                    </i><br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.10 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.10</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kondisi kotak selang beserta perlengkapannya dan hidran
                                                                    yang memadai
                                                                    <br>
                                                                    <i>
                                                                        Condition of fire hose and hydrant
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.11 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.11</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Pengujian kebocoran selang secara random
                                                                    <br>
                                                                    <i>
                                                                        The hose that has been tested randomly
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.12 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.12</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Instalasi sprinkle water diruang-ruang yang diperlukan
                                                                    <br>
                                                                    <i>
                                                                        Sprinkle water installation for the space required
                                                                    </i>
                                                                    <br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.13 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.13</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Instalasi tersebut menggunakan system otomatis atau
                                                                    manual
                                                                    <br>
                                                                    <i>
                                                                        The installation used manual or automatic operation
                                                                        system
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.14 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.14</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tanggal terakhir dan hasil pengecekan instalasi
                                                                    sprinkler
                                                                    <br>
                                                                    <i>
                                                                        The last date and result of sprinkler installation
                                                                        tested
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.15 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.15</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jika menggunakan system pemadam tetap berjenis CO2,
                                                                    instalasi tersebut telah diservis sesuai dengan
                                                                    jadwalnya
                                                                    <br>
                                                                    <i>
                                                                        For fixed CO2 system, has the system been serviced
                                                                        as per the schedule required
                                                                        <br>
                                                                    </i>
                                                                    (SK dirjen No. /2012 Pasal 53(j), 54(j), 55(j), 56(j),
                                                                    57(j), 58(j), 59(j), 60(j), 61(j) dan 62(j))
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.16 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.16</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tanggal terakhir instalasi tersebut diservis
                                                                    <br>
                                                                    <i>
                                                                        The last date of service
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.17 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.17</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jumlah tabung dan kapasitas tiap tabung
                                                                    <br>
                                                                    <i>
                                                                        Number of bottle and each capacity
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.18 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.18</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jika menggunakan system pemadam tetap berjenis foam,
                                                                    system tersebut telah diservis sesuai dengan jadwalnya
                                                                    <br>
                                                                    <i>
                                                                        For fixed foam installation , has the system been
                                                                        serviced as per the schedule required
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.19 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.19</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tanggal terakhir instalasi tersebut diservis
                                                                    <br>
                                                                    <i>
                                                                        The last date of service
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.20 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.20</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jumlah tangki dan kapasitas cairan dalam tanki tersebut
                                                                    (ltrs)
                                                                    <br>
                                                                    <i>
                                                                        Number of tanks and each capacity
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.21 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.21</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Setiap geladak di akomodasi diperlengkapi dengan:
                                                                    <br>
                                                                    <i>
                                                                        Are there in each deck in accommodation equipped
                                                                        with:
                                                                    </i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.21.a --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">a</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tombol alarm kebakaran
                                                                    <br>
                                                                    <i>
                                                                        Fire alarm button
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.21.b --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">b</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Pemadam kebakaran yang sesuai
                                                                    <br>
                                                                    <i>
                                                                        Fire extinguishing accordingly
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.21.c --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 150px;">c</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Petunjuk arah untuk melarikan diri
                                                                    <br>
                                                                    <i>
                                                                        Escape route direction
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.22 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.22</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Jumlah pompa kebakaran utama
                                                                    <br>
                                                                    <i>
                                                                        Number of main fire pumps
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.23 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.23</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tanggal terakhir dan hasil pengecekan pompa
                                                                    <br>
                                                                    <i>
                                                                        The latest date and result of main fire pump test
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.24 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.24</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Letak pompa kebakaran darurat
                                                                    <br>
                                                                    <i>
                                                                        The emergency fire pump location
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                        </tr>
                                                        {{-- 1.25 --}}
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.25</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Tanggal terakhir dan hasil pengecekan pompa
                                                                    <br>
                                                                    <i>
                                                                        The latest date and result of main fire pump test
                                                                    </i>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <input
                                                                    class="form-check-input-lg mx-auto my-auto text-center"
                                                                    type="checkbox" value="" id="check1">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%;"></textarea>
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
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">2</td>
                                            <td style="font-weight: bold;">DATA-DATA KHUSUS INFOMASI TAMBAHAN</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><i>PARTICULARS OF ANY SPECIAL FEATURES OR ADDITIONAL INFORMATION</i></td>
                                        </tr>
                                    </table>
                                </div>
                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%; height: 5em;"></textarea>
                            </div>
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">3</td>
                                            <td style="font-weight: bold;">DAFTAR DATA YANG TIDAK SESUAI</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><i>PARTICULARS OF OUTSTANDING ITEMS</i></td>
                                        </tr>
                                    </table>
                                </div>
                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%; height: 5em;"></textarea>
                            </div>
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">4</td>
                                            <td style="font-weight: bold;">CATATAN DAN KESIMPULAN</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><i>NOTE AND CONCLUSION</i></td>
                                        </tr>
                                    </table>
                                </div>
                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%; height: 5em;"></textarea>
                            </div>
                            {{-- FOTO-FOTO --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="width: 30px; font-weight: bold;">5</td>
                                            <td style="font-weight: bold;">LAMPIRAN PHOTO <br>HASIL PEMERIKSAAN KAPAL
                                                DALAM RANGKA <br>PENERBITAN SERTIFIKAT KESELAMATAN PERLENGKAPAN KAPAL BARANG
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><i>ANNEX PHOTOS SHIP INSPECTION RESULTS FOR ISSUANCE OF CARGO SHIP SAFETY
                                                    EQUIPMENT CERTIFICATE</i></td>
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
                                                data-target="data6"><i class="bi bi-calendar-plus-fill"></i>
                                                <small>Folder Upload Foto</small></button>
                                        </td>
                                    </tr>
                                    {{-- Header --}}
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="data6">
                                                <div class="container">
                                                    <fieldset class="border p-2">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="border p-2">
                                                                    {{-- foto 1 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="FOTO DEPAN KAPAL" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile01" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 2 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="KAPAL TAMPAK SAMPING"
                                                                                disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile02" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 3 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="MARKA GARIS MUAT" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile03" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 4 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="HALUAN" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile04" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 5 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="BURITAN" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile05" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="border p-2">
                                                                    {{-- foto 6 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 190px;" value=""
                                                                                placeholder="GELADAK" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile06" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 7 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 190px;" value=""
                                                                                placeholder="WINCH" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile07" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 8 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 190px;" value=""
                                                                                placeholder="RUANG MUAT" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile08" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 9 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 200px;" value=""
                                                                                placeholder="VENTILASI" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile09" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 10 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 200px;" value=""
                                                                                placeholder="MANHOLE" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile10" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-6">
                                                                <div class="border p-2">
                                                                    {{-- foto 11 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="PINTU KEDAP CUACA" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile11" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 12 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="SKYLIGHT" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile12" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 13 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="MAIN ENGINE" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile13" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 14 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="AUXILIARY ENGINE" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile14" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 15 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="EMERGENCY FIRE PUMP"
                                                                                disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile15" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="border p-2">
                                                                    {{-- foto 16 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="STEERING GEAR" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile16" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 17 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="KEMUDI" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile17" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 18 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="TANGGA" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile18" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 19 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="PIPA UDARA" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile19" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 20 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="ALAT BONGKAR MUAT" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile20" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-6">
                                                                <div class="border p-2">
                                                                    {{-- foto 21 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="EMERGENCY STERING" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile21" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 22 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="SPRINGKLER" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile22" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 23 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="SMOKE DETECTOR" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile23" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 24 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="FIRE DETECTOR" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile24" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 25 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="HYDRAN" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile25" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 31 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="LAMPU NAVIGASI" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile31" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 32 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="TALI KAWAT" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile32" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="border p-2">
                                                                    {{-- foto 26 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="FIRE BOX" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile26" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 27 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="FIRE EXTINGUSHER" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile27" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 28 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="JANGKAR" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile28" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 29 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="FIRE DUMPER" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile29" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 30 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="CEROBONG ASAP" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile30" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 33 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="MAIN SWITCH BOARD" disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile33" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
                                                                        </div>
                                                                    </div>
                                                                    {{-- foto 34 --}}
                                                                    <div class="mb-1">
                                                                        <div
                                                                            class="input-group-md-5 d-flex align-items-center">
                                                                            <input type="text" class="form-control"
                                                                                style="width: 500px;" value=""
                                                                                placeholder="QUICK CLOSING VALVE"
                                                                                disabled>
                                                                            <input type="file"
                                                                                class="form-control file-input"
                                                                                id="inputGroupFile34" accept="image/*"
                                                                                capture>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm remove-btn"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </div>
                                                                        <div class="mt-1">
                                                                            <img class="image-preview" src="#"
                                                                                alt=""
                                                                                style="max-width: 50%; max-height: 200px;">
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
                                            <td style="width: 30px; font-weight: bold;">6</td>
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
                                                data-target="data7"><i class="bi bi-calendar-plus-fill"></i>
                                                <small>Entry Data</small></button>
                                        </td>
                                    </tr>
                                    {{-- Header --}}
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-container" id="data7">
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
                                                                            id="namaKapal" name="namaKapal">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="pemilik" class="form-label">
                                                                            <strong>Tanda panggilan</strong> <br>
                                                                            <i>Call sign</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            id="pemilik" name="pemilik">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="pelabuhan" class="form-label">
                                                                            <strong>Isi kotor</strong> <br>
                                                                            <i>Gross tonnage</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            id="pelabuhan" name="pelabuhan">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="daerah" class="form-label">
                                                                            <strong>Tahun pembuatan</strong> <br>
                                                                            <i>Year building</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            id="daerah" name="daerah">
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
                                                                            id="daerah" name="daerah">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="daerah" class="form-label">
                                                                            <strong>Pelabuhan pendaftaran</strong> <br>
                                                                            <i> Port of registry</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            id="daerah" name="daerah">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="daerah" class="form-label">
                                                                            <strong>Pemilik</strong> <br>
                                                                            <i> Owner</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            id="daerah" name="daerah">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="daerah" class="form-label">
                                                                            <strong>Jenis pemeriksaan</strong> <br>
                                                                            <i> Type of inspection</i>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            id="daerah" name="daerah">
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
                                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%; height: 5em; resize: none;"></textarea>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label for="daerah"
                                                                                    class="form-label p-2">
                                                                                    <strong>TINDAK LANJUT</strong>
                                                                                </label>
                                                                                <textarea class="form-control" name="InformasiStabilitas" style="width: 100%; height: 5em; resize: none;"></textarea>
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
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="defaultCheck1">
                                                                            <label class="form-check-label mx-2"
                                                                                for="defaultCheck1">
                                                                                <strong>Diterima</strong> <br>
                                                                            </label>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="defaultCheck1">
                                                                            <label class="form-check-label mx-2"
                                                                                for="defaultCheck1">
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
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="defaultCheck1">
                                                                            <label class="form-check-label mx-2"
                                                                                for="defaultCheck1">
                                                                                <strong>Sertifikat dapat
                                                                                    diterbitkan</strong> <br>
                                                                            </label>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="defaultCheck1">
                                                                            <label class="form-check-label mx-2"
                                                                                for="defaultCheck1">
                                                                                <strong>Diadakan tindakan perbaikan</strong>
                                                                                <br>
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
    </body>
</html>
