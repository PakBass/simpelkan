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
        {{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light">
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
        </nav> --}}
        <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/home" class="nav-link"><i class="bi bi-person-fill"></i> Welcome,
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
            <a href="/" class="brand-link">
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
                                <a href="/permohonan" class="nav-link">
                                    <i class="nav-icon fas fa-calendar-alt"></i>
                                    <p>
                                        Forn Permohonan Baru
                                    </p>
                                </a>
                            </li>
                        @endcan
                        @can('isAdmin')
                            <li class="nav-item">
                                <a href="pages/gallery.html" class="nav-link">
                                    <i class="nav-icon far fa-image"></i>
                                    <p>
                                        Data Pemohon
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
                <versi style="position: absolute; bottom: 0; width: 100%; color: white; background-color: #333;">
                    <strong>Copyright &copy; 2023 <a href="#">SIMPELKAN</a>.</strong>
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
                    <div class="container mt-4">
                        <div class="row mb-2">
                            <div class="col-sm-6 mt-5">
                                <h4 class="mb-4"><span class="badge text-bg-warning text-black mx-3">Formulir Permohonan Baru</span></h4>
                            </div><!-- /.col -->
                        </div>
                    </div>
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body table-responsive p-0">
                                            {{-- <form action="/daftar" class="mx-3" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="namaKapal">NAMA KAPAL</label>
                                                            <input type="text"
                                                                class="form-control rounded"
                                                                name="namaKapal"
                                                                oninput="this.value = this.value.toUpperCase()" autocomplete="off" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jenisKapal">JENIS KAPAL</label>
                                                            <input type="text"
                                                                class="form-control rounded"
                                                                name="jenisKapal"
                                                                oninput="this.value = this.value.toUpperCase()" autocomplete="off" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jenisLayanan">JENIS LAYANAN</label>
                                                            <input type="text"
                                                                class="form-control rounded"
                                                                name="jenisLayanan"
                                                                oninput="this.value = this.value.toUpperCase()" autocomplete="off" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ditujukan">DITUJUKAN</label>
                                                            <input type="text"
                                                                class="form-control rounded"
                                                                name="ditujukan"
                                                                value="KANTOR KESYAHBANDARAN DAN OTORITAS PELABUHAN KELAS I BALIKPAPAN" id="ditujukan"
                                                                readonly/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nomor">NOMOR</label>
                                                            <input type="text"
                                                                class="form-control rounded"
                                                                name="nomor"
                                                                oninput="this.value = this.value.toUpperCase()" autocomplete="off" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tanggalSurat">TANGGAL SURAT</label>
                                                            <input type="date"
                                                                class="form-control rounded"
                                                                name="tanggalSurat"
                                                                oninput="this.value = this.value.toUpperCase()" autocomplete="off" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="perihal">PERIHAL</label>
                                                            <input type="text"
                                                                class="form-control rounded"
                                                                name="perihal"
                                                                oninput="this.value = this.value.toUpperCase()" autocomplete="off"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="gt">GT</label>
                                                            <input type="text"
                                                                class="form-control rounded"
                                                                name="gt"
                                                                oninput="this.value = this.value.toUpperCase()"
                                                                autocomplete="off" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="callSign">CALL SIGN</label>
                                                            <input type="text"
                                                                class="form-control rounded"
                                                                name="callSign"
                                                                oninput="this.value = this.value.toUpperCase()"
                                                                autocomplete="off" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pemilik">PEMILIK</label>
                                                            <input type="text"
                                                                class="form-control rounded"
                                                                name="pemilik"
                                                                oninput="this.value = this.value.toUpperCase()"
                                                                autocomplete="off" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="my-2 bg-primary">
                                                <h4 class="mb-1"><span class="badge text-bg-warning text-black mx-3">Upload File Dokumen</span></h4>
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-10">
                                                            <table class="table-responsive mt-3">
                                                                <table class="table table-border-less">
                                                                    <thead>
                                                                        <tr class="text-center">
                                                                            <th scope="col">No</th>
                                                                            <th scope="col">Nama Dokumen</th>
                                                                            <th scope="col">Upload Dokumen</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="align-middle">
                                                                            <td class="text-center">1</td>
                                                                            <td>File Surat Permohonan</td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_suratPermohoan"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_suratPermohoan" id="file_suratPermohoan">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="align-middle">
                                                                            <td class="text-center">2</td>
                                                                            <td>File Surat Ukur Kapal</td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_ukurKapal"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_ukurKapal" id="file_ukurKapal">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="align-middle">
                                                                            <td class="text-center">3</td>
                                                                            <td>File Surat Tanda Kebangsaan Kapal </td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_stkk"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_stkk" id="file_stkk">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="align-middle">
                                                                            <td class="text-center">4</td>
                                                                            <td>File sertifikat perlengkapan lama</td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_pelengkapan"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_pelengkapan" id="file_pelengkapan">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="align-middle">
                                                                            <td class="text-center">5</td>
                                                                            <td>File sertifikat konstruksi lama</td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_konstruksi"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_konstruksi" id="file_konstruksi">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="align-middle">
                                                                            <td class="text-center">6</td>
                                                                            <td>File sertifikat radio lama</td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_radio"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_radio" id="file_radio">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="align-middle">
                                                                            <td class="text-center">7</td>
                                                                            <td>File sertifikat klassifikasi kapal</td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_klassifikasi"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_klassifikasi" id="file_klassifikasi">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="align-middle">
                                                                            <td class="text-center">8</td>
                                                                            <td>File sertifikat ILR dan PMK</td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_ilr_pmk"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_ilr_pmk" id="file_ilr_pmk">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="align-middle">
                                                                            <td class="text-center">9</td>
                                                                            <td>File laporan pemeriksaan keselamatan kapal dan Marine Inspectore </td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_pemeriksaan"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_pemeriksaan" id="file_pemeriksaan">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="align-middle">
                                                                            <td class="text-center">10</td>
                                                                            <td>File laporan docking dari galangan(untuk kapal yang melaksanakan docking)</td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_docking1"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_docking1" id="file_docking1">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="align-middle">
                                                                            <td class="text-center">11</td>
                                                                            <td>File laporan docking dari marine(untuk kapal yang melaksanakan docking)</td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_docking2"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_docking2" id="file_docking2">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-3">
                                                    <button type="submit" class="btn btn-md btn-success"><i
                                                            class="bi bi-send"></i> Kirim data</button>
                                                    <a href="{{ route('home') }}"
                                                        class="btn btn-md btn-secondary">back</a>
                                                </div>
                                                <hr class="my-2 bg-primary">
                                            </form> --}}
                                            <iframe data-tally-src="https://tally.so/embed/wzY0Wg?alignLeft=1&hideTitle=1&transparentBackground=1&dynamicHeight=1" loading="lazy" width="100%" height="728" frameborder="0" marginheight="0" marginwidth="0" title="Form Permohonan Baru"></iframe><script>var d=document,w="https://tally.so/widgets/embed.js",v=function(){"undefined"!=typeof Tally?Tally.loadEmbeds():d.querySelectorAll("iframe[data-tally-src]:not([src])").forEach((function(e){e.src=e.dataset.tallySrc}))};if("undefined"!=typeof Tally)v();else if(d.querySelector('script[src="'+w+'"]')==null){var s=d.createElement("script");s.src=w,s.onload=v,s.onerror=v,d.body.appendChild(s);}</script>
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

        @if (session('success'))
            <script>
                swal("Data berhasil disimpan! Tunggu validasi admin untuk penerbitan SPT.", "{{ session('success') }}", "success");
            </script>
        @endif

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
        {{-- <script>
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
        </script> --}}
</body>
</html>
