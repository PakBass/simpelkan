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

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            /* Menetapkan font Montserrat sebagai font utama */
            background: linear-gradient(90deg, #C7C5F4, #67b4d0);
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

        td.custom-checkbox .form-check-input[type="checkbox"] {
            width: 2em;
            height: 2em;
            padding-left: 10px;
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
        sup {
            font-size: 1em; /* Mengurangi ukuran font teks kecil */
        }

        @keyframes rotate-coin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
        }

        .rotate-coin {
        animation: rotate-coin 2s linear infinite;
        transform-origin: center;
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
                            PEMERIKSAAN KONDISI PERALATAN-PERALATAN <br>PENCEGAHAN PENCEMARAN DI KAPAL BERDASARKAN <br>PERSYRATAN DALAM KONVENSI MARPOL 73/78 <br>LAMPIRAN -I
                        </h5>
                        <h5 class="text-center">
                            <em>
                                CHECK LIST FOR SURVEY OF <br>THE CONDITION OF THE PREVENTION OF <br>POLLUTION EQUIPMENTS ON BOARD UNDER THE TERMS <br>OF MARPOL CONVENTION 73/78,ANNEX-1
                            </em>
                        </h5>
                        {{-- Tombol lembar 1 dan 2 --}}
                        <div class="align-middle text-center">
                            <button class="btn btn-outline-primary my-2 mt-5 toggleButton" type="button"
                                data-target="data"><i class="bi bi-calendar-plus-fill"></i> <small>Lembar 1</small></button>
                        </div>
                        {{-- Form lembar 1 --}}
                        <div class="form-container" id="data">
                            <fieldset class="border-0 p-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="border p-2">
                                            <div class="mb-3">
                                                <label for="namaKapal" class="form-label">
                                                    <strong>UNTUK DAERAH MUATAN KAPAL</strong> <br>
                                                    <i>FOR CARGO AREA</i>
                                                </label>
                                                <input type="text" class="form-control" id="namaKapal" name="daerah_muatan">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pemilik" class="form-label">
                                                    <strong>NAMA KAPAL</strong> <br>
                                                    <i>NAME OF SHIP</i>
                                                </label>
                                                <input type="text" class="form-control" id="pemilik"
                                                    name="data_nama_kapal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="border p-2">
                                            <div class="mb-3 text-center">
                                                <img src="{{ asset('storage/image/06.png') }}" alt="Logo" class="rotate-coin" style="width: 100px; height:120px">
                                                <img src="{{ asset('storage/coin/logo.png') }}" alt="Logo" class="rotate-coin" style="width: 100px; height:120px">
                                            </div>
                                            <div class="mb-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        {{-- Main Menu --}}
                        <div class="table-responsive mt-2 mx-auto">
                            {{-- 1. JUDUL --}}
                            <div class="card border-0 shadow-bottom">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="font-weight: bold;">LAPORAN PEMERIKSAAN KONDISI PERALATAN-PERALATAN PENCEGAHAN PENCEMARAN DIKAPAL BERDASARKAN PERSYARATAN- DALAM KONVENSI MARPOL 73/78, LAMPIRAN-I <br>
                                            <em>Check list for survey of the condition to the prevention of pollution equipments on board under the terms of marpol Convention 73/78, Annex-1</em></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            {{-- FORM A --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>A</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    DATA KAPAL <br>
                                                    <em>PARTICULARS OF SHIP</em>
                                                </strong>
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-info my-2 toggleButton" type="button"
                                                data-target="data3"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
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
                                                            <th colspan="4">Item pemeriksaan <br> <i>Item inspected</i></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td class="text-center align-text-top">1.1</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Nama Kapal <br>
                                                                    <em>Name of Ship</em><br />
                                                                </p>
                                                            </td>
                                                            <td colspan="3">
                                                                <input type="text" class="form-control" id="format"
                                                                    name="data_nama_kapal1">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">1.2</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Angka atau huruf pengenal <br>
                                                                    <i>Distinctive number or letters</i>
                                                                </p>
                                                            </td>
                                                            <td colspan="3">
                                                                <input type="text" class="form-control" id="format"
                                                                    name="huruf_pengenal">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">1.3</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pelabuhan pendaftaran <br>
                                                                    <i>Port of registry</i>
                                                                </p>
                                                            </td>
                                                            <td colspan="3">
                                                                <input type="text" class="form-control" id="format"
                                                                    name="pelabuhan_pendaftaran">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">1.4</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Tonase kotor <br>
                                                                    <i>Gross tonnage</i>
                                                                </p>
                                                            </td>
                                                            <td colspan="3">
                                                                <input type="text" class="form-control" id="format" name="tonase_kotor">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">1.5</td>
                                                            <td class="align-middle">
                                                                <p>Kapasitas angkut dari kapal <br>
                                                                    <i>Carrying capacity of ship</i></p>
                                                            </td>
                                                            <td colspan="3">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="format" name="kapasitas_angkut_dari_kapal">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">m<sup>3</sup></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">1.6</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Bobot mati kapal (Aturan 1 (23)) <br>
                                                                    <i>Deadweight of ship (tonnes ) (Regulation 1 (23))</i>
                                                                </p>
                                                            </td>
                                                            <td colspan="3">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="format" name="bobot_mati_kapal">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">tonnes</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">1.7</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Panjang kapal (Aturan 1 (19)) <br>
                                                                    <i>Length of ship (m) (Regulation 1 (19))</i>
                                                                </p>
                                                            </td>
                                                            <td colspan="3">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="format" name="panjang_kapal">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">m</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">1.8</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Tanggal Pembangunan <br>
                                                                    <i>Date of Build</i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.8.1</td>
                                                            <td style="padding-left: 20px;">
                                                                Tanggal kontrak pembangunan <br>
                                                                <i>Date of building contract</i>
                                                            </td>
                                                            <td colspan="3">
                                                                <div class="input-group">
                                                                    <input type="date" class="form-control" id="format" name="tgl_kontrak_pembangunan">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.8.2</td>
                                                            <td style="padding-left: 20px;">
                                                                Tanggal peletakan lunas atau kapal pada tahapan pembangunan yang serupa <br /> <i>Date on which keel was laid or ship was at a similar stage of construction</i>
                                                            </td>
                                                            <td colspan="3">
                                                                <div class="input-group">
                                                                    <input type="date" class="form-control" id="format" name="tgl_peletakan_lunas">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.8.3</td>
                                                            <td style="padding-left: 20px;">
                                                                Tanggal persyaratan<br /> <i>Date of delivery</i>
                                                            </td>
                                                            <td colspan="3">
                                                                <div class="input-group">
                                                                    <input type="date" class="form-control" id="format" name="tgl_persyaratan">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">1.9</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Perubahan besar (bilamana dilakukan) <br>
                                                                    <i>Major conversion (if applicable)</i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.9.1</td>
                                                            <td style="padding-left: 20px;">
                                                                Tanggal kontrak perubahan<br /> <i>Date of conversion contract</i>
                                                            </td>
                                                            <td colspan="3">
                                                                <div class="input-group">
                                                                    <input type="date" class="form-control" id="format" name="tgl_kontrak_perubahan">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.9.2</td>
                                                            <td style="padding-left: 20px;">
                                                                Tanggal perubahan dimulai <br /> <i>Date on which conversion was commenced</i>
                                                            </td>
                                                            <td colspan="3">
                                                                <div class="input-group">
                                                                    <input type="date" class="form-control" id="format" name="tgl_perubahan_dimulai">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.9.3</td>
                                                            <td style="padding-left: 20px;">
                                                                Tanggal penyelesaian perubahan <br /> <i>Date of completion of conversion</i>
                                                            </td>
                                                            <td colspan="3">
                                                                <div class="input-group">
                                                                    <input type="date" class="form-control" id="format" name="tgl_penyelesaian_perubahan">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">1.10</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Keterlambatan pengiriman yang tidak terduga <br>
                                                                    <i>Unforeseen delay in delivery</i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top"
                                                                style="padding-left: 70px;">1.10.1</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kapal diakui oleh Pemerintah sebagai “kapal yang diserahkan pada atau sebelum tanggal 31 Desember 1979” sesuai Aturan 1.28.1 karena keterlambatan yang tidak terduga pada waktu penyerahan. <br> <em>The ship has been accepted by the Administration as a “ship delivered on or before 31 December 1979” under regulation 1.28.1 due to unforeseen delay in delivery.</em>
                                                                </p>
                                                            </td>
                                                            <td colspan="3" style="text-align: center;" class="custom-checkbox ">
                                                                <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                    <input class="form-check-input mx-auto my-auto text-center" type="checkbox" value="Ok" name="kapal_diakui_pemerintah_1979">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">1.10.2</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kapal diakui oleh Pemerintah sebagai “kapal tangki minyak yang diserahkan pada atau sebelum tanggal 1 Juni 1982” sesuai Aturan 1.28.3 karena keterlambatan yang tidak terduga pada waktu penyerahan.<br>
                                                                    <i>The ship has been accepted by the Administration as an “oil tanker delivered on or before 1 June 1982” under regulation 1.28.3 due to unforeseen delay in delivery </i>
                                                                </p>
                                                            </td>
                                                            <td colspan="3" style="text-align: center;" class="custom-checkbox ">
                                                                <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                    <input class="form-check-input mx-auto my-auto text-center" type="checkbox" value="Ok" name="kapal_diakui_pemerintah_1982">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">1.10.3</td>
                                                            <td style="padding-left: 20px;">
                                                                <p>
                                                                    Kapal tidak disyaratkan untuk memenuhi ketentuan-ketentuan dari Aturan 26 karena keterlambatan yang tidak terduga pada waktu penyerahan.<br>
                                                                    <i>The ship is not required to comply with the provisions of regulation 26 due to unforeseen delay in delivery. </i>
                                                                </p>
                                                            </td>
                                                            <td colspan="3" style="text-align: center;" class="custom-checkbox ">
                                                                <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                    <input class="form-check-input mx-auto my-auto text-center" type="checkbox" value="Ok" name="kapal_tidak_disyaratkan">
                                                                </div>
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
                            {{-- FORM B --}}
                            <table class="table-striped mt-2 mx-auto">
                                <tbody>
                                    <tr>
                                        <td class="text-center align-item-center justify-content-center table-danger"
                                            style="width: 5%"><strong>B</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    JENIS KAPAL <br>
                                                    <em>TYPE OF SHIP</em>
                                                </strong>
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-info my-2 toggleButton" type="button"
                                                data-target="data4"><i class="bi bi-calendar-plus-fill"></i> <small>Entry Data</small></button>
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
                                                            <th colspan="6">Item pemeriksaan <br> <i>Item inspected</i></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Baris dan kolom dengan form -->
                                                        <tr>
                                                            <td class="text-center align-text-top">1</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Kapal tangki minyak mentah <br>
                                                                    <em>Crude oil tanker</em><br />
                                                                </p>
                                                            </td>
                                                            <td colspan="3" style="text-align: center;" class="custom-checkbox">
                                                                <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                    <input class="form-check-input mx-auto my-auto text-center" type="checkbox" value="Ok" name="kapal_tangki_minyak_mentah">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">2</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pengangkut hasil olahan <br>
                                                                    <i>Product carrier</i>
                                                                </p>
                                                            </td>
                                                            <td colspan="3" style="text-align: center;" class="custom-checkbox">
                                                                <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                    <input class="form-check-input mx-auto my-auto text-center" type="checkbox" value="Ok" name="pengangkut_hasil_olahan">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">3</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pengangkut hasil olahan yang tidak mengangkut bahan bakar minyak atau minyak diesel    berat sebagaimana dimaksud dalam Aturan 20.2 atau minyak pelumas. <br>
                                                                    <i>Product carrier not carrying fuel oil or heavy diesel oil as referred to in regulation 20.2 or lubricating oil</i>
                                                                </p>
                                                            </td>
                                                            <td colspan="3" style="text-align: center;" class="custom-checkbox">
                                                                <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                    <input class="form-check-input mx-auto my-auto text-center" type="checkbox" value="Ok" name="aturan_20_2">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">4</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Kapal minyak mentah / pengangkut hasil olahan <br>
                                                                    <i>Crude oil / product carrier</i>
                                                                </p>
                                                            </td>
                                                            <td colspan="3" style="text-align: center;" class="custom-checkbox">
                                                                <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                    <input class="form-check-input mx-auto my-auto text-center" type="checkbox" value="Ok" name="kapal_minyak_mentah">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">5</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Pengangkut kombinasi <br>
                                                                    <i>Combination carrier</i>
                                                                </p>
                                                            </td>
                                                            <td colspan="3" style="text-align: center; padding-left:50px" class="custom-checkbox">
                                                                <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                    <input class="form-check-input" type="checkbox" value="Ok" name="pengangkut_kombinasi">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">6</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Kapal yang bukan kapal tangki minyak dengan tangki-tangki muatan tunduk dibawah Aturan 2.2 Annex I dari Konvensi. <br>
                                                                    <i>Ship other than an oil tanker, with cargo tanks coming under regulation 2.2 of Annex I of the Convention.</i>
                                                                </p>
                                                            </td>
                                                            <td colspan="3" style="text-align: center; padding-left:50px" class="custom-checkbox">
                                                                <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                    <input class="form-check-input" type="checkbox" value="Ok" name="kapal_bukan_tangki_minyak">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center align-text-top">7</td>
                                                            <td class="align-middle">
                                                                <p>
                                                                    Kapal tangki minyak yang digunakan sebagai pengangkut hasil olahan yang termasuk dalam Aturan 2.4 <br>
                                                                    <i>Oil tanker dedicated to the carriage of products referred to in	regulation 2.4</i>
                                                                </p>
                                                            </td>
                                                            <td colspan="3" style="text-align: center; padding-left:50px" class="custom-checkbox">
                                                                <div class="form-check form-check-lg custom-checkbox mx-3 mt-3">
                                                                    <input class="form-check-input" type="checkbox" value="Ok" name="kapal_pengangkut_olahan">
                                                                </div>
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
                                            style="width: 5%"><strong>C</strong></td>
                                        <td class="table-primary align-items-center justify=content-center"
                                            style="width: 1100px">
                                            <h6 class="my-auto mx-auto">
                                                <strong>
                                                    DOKUMEN YANG ADA DI KAPAL <br>
                                                    <i>
                                                        DOCUMENTS ON BOARD
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
