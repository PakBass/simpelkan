<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dist/img/favicon.ico') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <style>
        .footer-img {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            z-index: -1;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/home" class="nav-link"><i class="bi bi-person-fill"></i> Welcom,
                        {{ Auth::user()->name }}</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="btn btn-md btn-danger float-right mb-3" onclick="confirmLogout();"><i
                            class="bi bi-box-arrow-left"></i> Logout</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{ asset('storage/image/simpelkan.png') }}" alt="Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                @can('isAdmin')
                    <span class="brand-text font-weight-light">Administrator</span>
                @elsecan('isPemeriksa')
                    <span class="brand-text font-weight-light">Pemeriksa</span>
                @elsecan('isPemohon')
                    <span class="brand-text font-weight-light">Pemohon</span>
                @endcan
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        </li>
                        <li class="nav-header">MENU</li>
                        @can('isPemohon')
                            <li class="nav-item">
                                <a href="/profile" class="nav-link">
                                    <i class="nav-icon fas fa-calendar-alt"></i>
                                    <p>
                                        Profile Pemohon
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/permohonan" class="nav-link permohonanBtn">
                                    <i class="nav-icon fas fa-calendar-alt"></i>
                                    <p>
                                        Forn Permohonan Baru
                                    </p>
                                </a>
                            </li>
                        @endcan
                        @can('isAdmin')
                            <li class="nav-item">
                                <a href="/" class="nav-link">
                                    <i class="nav-icon far fa-image"></i>
                                    <p>
                                        Data Pemohon
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dataPermohonan" class="nav-link">
                                    <i class="nav-icon far fa-image"></i>
                                    <p>
                                        Data Permohonan Baru
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/cetak" class="nav-link">
                                    <i class="nav-icon far fa-image"></i>
                                    <p>
                                        Cetak SPK
                                    </p>
                                </a>
                            </li>
                        @endcan
                        @can('isPemeriksa')
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-chart-pie"></i>
                                    <p>
                                        Form Pemeriksaan
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/pengajuan" class="nav-link">
                                            <i class="bi bi-pencil"></i>
                                            <p>Konstruksi Kapal</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/radio" class="nav-link">
                                            <i class="bi bi-pencil"></i>
                                            <p>Radio Kapal</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/keselamatan" class="nav-link">
                                            <i class="bi bi-pencil"></i>
                                            <p>Keselamatan Perlengkapan Kapal Barang</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endcan
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
                <versi
                    style="position: absolute; bottom: 0; width: 100%; color: white; background-color: #333; overflow-x: hidden;">
                    <strong>Copyright &copy; 2023-2024 <br> <a href="#">SIMPELKAN</a>.</strong>
                    <div class="d-none d-sm-inline-block">
                        <b>Version</b> 1.0.
                    </div>
                </versi>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                @can('isPemohon')
                    <div class="card-body">
                        <div class="container mt-3">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-8">
                                    <div class="card border-0 shadow rounded text-center">
                                        <div class="card-header" style="color: rgb(0, 4, 255)">SELAMAT DATANG DI SIMPELKAN
                                        </div>
                                        <div class="card-body">
                                            Aplikasi ini merupakan versi 1.0 dari pengembangan sistem yang sedang dilakukan.
                                            <img src="{{ asset('storage/image/simpelkan.png') }}" alt="Logo"
                                                class="brand-image img-circle elevation-3"
                                                style="opacity: .8; max-width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endcan
                @can('isPemeriksa')
                    <div class="card-body">
                        <div class="container mt-3">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-8">
                                    <div class="card border-0 shadow rounded text-center">
                                        <div class="card-header" style="color: rgb(0, 4, 255)">SELAMAT DATANG DI SIMPELKAN
                                        </div>
                                        <div class="card-body">
                                            Aplikasi ini merupakan versi 1.0 dari pengembangan sistem yang sedang dilakukan.
                                            <img src="{{ asset('storage/image/simpelkan.png') }}" alt="Logo"
                                                class="brand-image img-circle elevation-3"
                                                style="opacity: .8; max-width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endcan
                @can('isAdmin')
                    <div class="container mt-3">
                        <div class="row mb-2">
                            <div class="col-sm-6 mt-5">
                                {{-- <h4 class="mb-4"><span class="badge text-bg-primary text-white"> CETAK SURAT
                                        PERINTAH KERJA(SPK)</span></h4> --}}
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                        {{-- Content --}}
                                            {{-- <form class="mx-3">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="title">NOMOR SURAT</label>
                                                            <input type="text"
                                                                class="form-control
                                                                name="nomor"
                                                                oninput="this.value = this.value.toUpperCase()">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">NAMA PERUSAHAAN</label>
                                                            <input type="text"
                                                                class="form-control
                                                                name="perusahaan"
                                                                oninput="this.value = this.value.toUpperCase()">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">Tanggal Surat</label>
                                                            <input type="date"
                                                                class="form-control
                                                                name="tgl_surat"
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="title">NOMOR SURAT PEMOHON</label>
                                                                <input type="text"
                                                                    class="form-control
                                                                name="nomor_surat_pemohon"
                                                                    oninput="this.value = this.value.toUpperCase()">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="title">PERIHAL</label>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="btn-check"
                                                                    id="btn-check-1-outlined"
                                                                    value="Perpanjangan Sertifikat Keselamatan Konstruksi"
                                                                    name="perihal1">
                                                                <label class="btn btn-outline-info"
                                                                    for="btn-check-1-outlined">
                                                                    <i class="bi bi-file-earmark-check"> Perpanjangan
                                                                        Sertifikat
                                                                        Keselamatan Konstruksi</i>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="btn-check"
                                                                    id="btn-check-2-outlined"
                                                                    value="Perpanjangan Sertifikat Keselamatan Konstruksi"
                                                                    name="perihal1">
                                                                <label class="btn btn-outline-info"
                                                                    for="btn-check-2-outlined">
                                                                    <i class="bi bi-file-earmark-check"> Perpanjangan
                                                                        Sertifikat Perlengkapan</i>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="btn-check"
                                                                    id="btn-check-3-outlined"
                                                                    value="Perpanjangan Sertifikat Keselamatan Konstruksi"
                                                                    name="perihal1">
                                                                <label class="btn btn-outline-info"
                                                                    for="btn-check-3-outlined">
                                                                    <i class="bi bi-file-earmark-check"> Perpanjangan
                                                                        Sertifikat Radio</i>
                                                                </label>
                                                            </div>
                                                            <label for="title">Memberi Tugas Kepada</label>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <select class="form-select" name="marine_1">
                                                                            <option selected>Marine Inspector 1</option>
                                                                            <option value="Rudi W Amin">Rudi W Amin</option>
                                                                            <option value="Suyatmi Sianna">Suyatmi Sianna</option>
                                                                            <option value="Robinson Parsaoran">Robinson Parsaoran</option>
                                                                            <option value="Riva Gazali">Riva Gazali</option>
                                                                            <option value="Bekti Purbowo">Bekti Purbowo</option>
                                                                            <option value="Ari Subekti">Ari Subekti</option>
                                                                            <option value="Dedy Supriadi">Dedy Supriadi</option>
                                                                            <option value="Hafiz Hamdanil">Hafiz Hamdanil</option>
                                                                            <option value="Usman">Usman</option>
                                                                            <option value="Harsoyo">Harsoyo</option>
                                                                            <option value="Josua Hutahayyan">Josua Hutahayyan</option>
                                                                            <option value="Luis Setiawan">Luis Setiawan</option>
                                                                            <option value="Maulana Erzal Denata">Maulana Erzal Denata</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select class="form-select" name="marine_2">
                                                                            <option selected>Marine Inspector 2</option>
                                                                            <option value="Rudi W Amin">Rudi W Amin</option>
                                                                            <option value="Suyatmi Sianna">Suyatmi Sianna</option>
                                                                            <option value="Robinson Parsaoran">Robinson Parsaoran</option>
                                                                            <option value="Riva Gazali">Riva Gazali</option>
                                                                            <option value="Bekti Purbowo">Bekti Purbowo</option>
                                                                            <option value="Ari Subekti">Ari Subekti</option>
                                                                            <option value="Dedy Supriadi">Dedy Supriadi</option>
                                                                            <option value="Hafiz Hamdanil">Hafiz Hamdanil</option>
                                                                            <option value="Usman">Usman</option>
                                                                            <option value="Harsoyo">Harsoyo</option>
                                                                            <option value="Josua Hutahayyan">Josua Hutahayyan</option>
                                                                            <option value="Luis Setiawan">Luis Setiawan</option>
                                                                            <option value="Maulana Erzal Denata">Maulana Erzal Denata</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select class="form-select" name="marine_3">
                                                                            <option selected>Marine Inspector 3</option>
                                                                            <option value="Rudi W Amin">Rudi W Amin</option>
                                                                            <option value="Suyatmi Sianna">Suyatmi Sianna</option>
                                                                            <option value="Robinson Parsaoran">Robinson Parsaoran</option>
                                                                            <option value="Riva Gazali">Riva Gazali</option>
                                                                            <option value="Bekti Purbowo">Bekti Purbowo</option>
                                                                            <option value="Ari Subekti">Ari Subekti</option>
                                                                            <option value="Dedy Supriadi">Dedy Supriadi</option>
                                                                            <option value="Hafiz Hamdanil">Hafiz Hamdanil</option>
                                                                            <option value="Usman">Usman</option>
                                                                            <option value="Harsoyo">Harsoyo</option>
                                                                            <option value="Josua Hutahayyan">Josua Hutahayyan</option>
                                                                            <option value="Luis Setiawan">Luis Setiawan</option>
                                                                            <option value="Maulana Erzal Denata">Maulana Erzal Denata</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <select class="form-select" name="jabatan_1">
                                                                            <option selected> Jabatan Marine Inspector 1</option>
                                                                            <option value="Auditor ISM Code">Auditor ISM Code</option>
                                                                            <option value="Petugas Kesyahbandaran (Marine Inspector)">Petugas Kesyahbandaran (Marine Inspector)</option>
                                                                            <option value="Marine Inspector Radio">Marine Inspector Radio</option>
                                                                            <option value="Pengawas Keselamatan Pelayaran Pelaksana Lanjutan">Pengawas Keselamatan Pelayaran Pelaksana Lanjutan</option>
                                                                            <option value="Ahli Ukur Kapal">Ahli Ukur Kapal</option>
                                                                            <option value="Pembantu Petugas Kesyahbandaran (Marine Inspector)">Pembantu Petugas Kesyahbandaran (Marine Inspector)</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select class="form-select" name="jabatan_2">
                                                                            <option selected> Jabatan Marine Inspector 2</option>
                                                                            <option value="Auditor ISM Code">Auditor ISM Code</option>
                                                                            <option value="Petugas Kesyahbandaran (Marine Inspector)">Petugas Kesyahbandaran (Marine Inspector)</option>
                                                                            <option value="Marine Inspector Radio">Marine Inspector Radio</option>
                                                                            <option value="Pengawas Keselamatan Pelayaran Pelaksana Lanjutan">Pengawas Keselamatan Pelayaran Pelaksana Lanjutan</option>
                                                                            <option value="Ahli Ukur Kapal">Ahli Ukur Kapal</option>
                                                                            <option value="Pembantu Petugas Kesyahbandaran (Marine Inspector)">Pembantu Petugas Kesyahbandaran (Marine Inspector)</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select class="form-select" name="jabatan_3">
                                                                            <option selected>Jabatan Marine Inspector 3</option>
                                                                            <option value="Auditor ISM Code">Auditor ISM Code</option>
                                                                            <option value="Petugas Kesyahbandaran (Marine Inspector)">Petugas Kesyahbandaran (Marine Inspector)</option>
                                                                            <option value="Marine Inspector Radio">Marine Inspector Radio</option>
                                                                            <option value="Pengawas Keselamatan Pelayaran Pelaksana Lanjutan">Pengawas Keselamatan Pelayaran Pelaksana Lanjutan</option>
                                                                            <option value="Ahli Ukur Kapal">Ahli Ukur Kapal</option>
                                                                            <option value="Pembantu Petugas Kesyahbandaran (Marine Inspector)">Pembantu Petugas Kesyahbandaran (Marine Inspector)</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-md btn-success"><i class="bi bi-send"></i> Cetak SPK</button>
                                                <hr class="my-2 bg-primary">
                                            </form> --}}
                                            <iframe data-tally-src="https://tally.so/embed/w4r925?alignLeft=1&transparentBackground=1&dynamicHeight=1" loading="lazy" width="100%" height="734" frameborder="0" marginheight="0" marginwidth="0" title="Cetak Surat Perintah Kerja (SPK)"></iframe><script>var d=document,w="https://tally.so/widgets/embed.js",v=function(){"undefined"!=typeof Tally?Tally.loadEmbeds():d.querySelectorAll("iframe[data-tally-src]:not([src])").forEach((function(e){e.src=e.dataset.tallySrc}))};if("undefined"!=typeof Tally)v();else if(d.querySelector('script[src="'+w+'"]')==null){var s=d.createElement("script");s.src=w,s.onload=v,s.onerror=v,d.body.appendChild(s);}</script>
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="card-body table-responsive p-4">
                                                            <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ7mZ2MZgV9c2Sd5OKYI_DVSGKIwef51cvhG_zAeYq71SmOrsLxxQW8QbIOs52LH-2SSlFrQ-0vxqDO/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false" width="100%" height="400"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                @endcan
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
        </div>
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE -->
        <script src="{{ asset('dist/js/adminlte.js') }}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>
            function confirmLogout() {
                // Gunakan SweetAlert 1 untuk konfirmasi logout
                swal({
                    title: "Apakah Anda Yakin Keluar dari sistem?",
                    icon: "warning",
                    buttons: ["Tidak", "Ya"],
                    dangerMode: true,
                }).then((willLogout) => {
                    if (willLogout) {
                        // Jika pengguna mengonfirmasi logout, arahkan ke tautan logout
                        window.location.href = '/logout';
                    }
                });
                return false; // Pastikan tombol default tidak di-klik
            }
        </script>
        {{-- toggle Button --}}
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
            document.addEventListener('DOMContentLoaded', function() {
                const searchInput = document.getElementById('searchInput');

                searchInput.addEventListener('input', function() {
                    const searchTerm = this.value.trim().toLowerCase();
                    const buttons = document.querySelectorAll('.btn.btn-md');

                    buttons.forEach(function(button) {
                        const buttonText = button.innerText.toLowerCase();
                        const buttonParent = button.parentElement;

                        if (buttonText.includes(searchTerm)) {
                            buttonParent.style.display = 'block';
                        } else {
                            buttonParent.style.display = 'none';
                        }
                    });
                });

                searchInput.addEventListener('focusout', function() {
                    const buttons = document.querySelectorAll('.btn.btn-md');

                    buttons.forEach(function(button) {
                        const buttonParent = button.parentElement;
                        buttonParent.style.display = 'block';
                    });
                });
            });
        </script>
        <script>
            document.getElementById('searchButton').addEventListener('click', function() {
                var searchTerm = document.getElementById('searchInput').value.toLowerCase();
                var buttons = document.querySelectorAll('.badge');

                buttons.forEach(function(button) {
                    var buttonText = button.textContent.toLowerCase();
                    if (buttonText.includes(searchTerm)) {
                        button.style.display = 'block';
                    } else {
                        button.style.display = 'none';
                    }
                });
            });

            document.getElementById('searchInput').addEventListener('keyup', function(event) {
                if (event.key === 'Enter') {
                    var searchTerm = document.getElementById('searchInput').value.toLowerCase();
                    var buttons = document.querySelectorAll('.badge');

                    buttons.forEach(function(button) {
                        var buttonText = button.textContent.toLowerCase();
                        if (buttonText.includes(searchTerm)) {
                            button.style.display = 'block';
                        } else {
                            button.style.display = 'none';
                        }
                    });
                }
            });
        </script>
</body>

</html>
