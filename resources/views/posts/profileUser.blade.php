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
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
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
                    <div class="container">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h4 class="mb-4"><span class="badge text-bg-warning text-black mx-3">Profile Pemohon
                                        Baru</span></h4>
                            </div><!-- /.col -->
                        </div>
                    </div>
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body table-responsive p-0">
                                            <form class="mx-3" action="{{ route('post.update', $user->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="title">NAMA LENGKAP PEMOHON</label>
                                                            <input type="text"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                name="name" id="name"
                                                                value="{{ old('name', $user->name) }}"
                                                                oninput="this.value = this.value.toUpperCase()" readonly>
                                                            @error('name')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">EMAIL</label>
                                                            <input type="email"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                name="email" id="email"
                                                                value="{{ old('email', $user->email) }}" readonly>
                                                            @error('email')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">USERNAME</label>
                                                            <input type="text"
                                                                class="form-control @error('username') is-invalid @enderror"
                                                                name="username" id="username"
                                                                value="{{ old('username', $user->username) }}" readonly>
                                                            @error('username')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">PASSWORD</label>
                                                            <input type="password"
                                                                class="form-control @error('password') is-invalid @enderror"
                                                                name="password" id="password"
                                                                placeholder="Biarkan kosong jika tidak ingin diubah"
                                                                readonly>
                                                            @error('password')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">NAMA PERUSAHAAN</label>
                                                            <input type="text"
                                                                class="form-control @error('nama_perusahaan') is-invalid @enderror"
                                                                name="nama_perusahaan" id="nama_perusahaan"
                                                                value="{{ old('nama_perusahaan', $user->nama_perusahaan) }}"
                                                                oninput="this.value = this.value.toUpperCase()" readonly>
                                                            @error('nama_perusahaan')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="title">SIUP KK / SIUPAL</label>
                                                            <input type="text"
                                                                class="form-control @error('siup') is-invalid @enderror"
                                                                name="siup" id="siup"
                                                                value="{{ old('siup', $user->siup) }}" readonly>
                                                            @error('siup')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">NIB</label>
                                                            <input type="text"
                                                                class="form-control @error('nib') is-invalid @enderror"
                                                                name="nib" id="nib"
                                                                value="{{ old('nib', $user->nib) }}" readonly>
                                                            @error('nib')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">ALAMAT DOMISILI</label>
                                                            <input type="text"
                                                                class="form-control @error('alamat') is-invalid @enderror"
                                                                name="alamat" id="alamat"
                                                                value="{{ old('alamat', $user->alamat) }}"
                                                                oninput="this.value = this.value.toUpperCase()" readonly>
                                                            @error('alamat')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">PENANGGUNG JAWAB PERUSAHAAN</label>
                                                            <input type="text"
                                                                class="form-control @error('pic') is-invalid @enderror"
                                                                name="pic" id="pic"
                                                                value="{{ old('pic', $user->pic) }}"
                                                                oninput="this.value = this.value.toUpperCase()" readonly>
                                                            @error('pic')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_telepon">No TELEPHONE / HP</label>
                                                            <input type="text"
                                                                class="form-control @error('no_telepon') is-invalid @enderror"
                                                                name="no_telepon" id="no_telepon"
                                                                value="{{ old('no_telepon', $user->no_telepon) }}"
                                                                readonly>
                                                            @error('no_telepon')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="button" class="btn btn-info" value="Ubah Data"
                                                                id="ubahButton">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="my-2 bg-primary">
                                                <div class="row">
                                                    <div class="container">
                                                        <div class="col-md-12">
                                                            <table class="table-responsive mt-3">
                                                                <table class="table table-border-less">
                                                                    <thead>
                                                                        <tr class="text-center">
                                                                            <th scope="col">No</th>
                                                                            <th scope="col">Nama Dokumen <i>(Format :
                                                                                    PDF)</i></th>
                                                                            <th scope="col">Lihat Dokumen</th>
                                                                            <th scope="col">Upload Ulang Dokumen</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="align-middle">
                                                                            <td class="text-center">1</td>
                                                                            <td>AKTE PERUSAHAAN</td>
                                                                            <td class="text-center">
                                                                                @if ($user->file_akte)
                                                                                    <a href="{{ url($user->file_akte) }}"
                                                                                        target="_blank"
                                                                                        class="btn btn-info"><i
                                                                                            class="bi bi-search"></i></a>
                                                                                @else
                                                                                    <i class="bi bi-x-lg"></i>
                                                                                @endif
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_akte"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_akte" id="file_akte">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="align-middle">
                                                                            <td class="text-center">2</td>
                                                                            <td>NIB</td>
                                                                            <td class="text-center">
                                                                                @if ($user->file_nib)
                                                                                    <a href="{{ $user->file_nib }}"
                                                                                        target="_blank"
                                                                                        class="btn btn-info"><i
                                                                                            class="bi bi-search"></i></a>
                                                                                @else
                                                                                    <i class="bi bi-x-lg"></i>
                                                                                @endif
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_nib"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_nib" id="file_nib">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="align-middle">
                                                                            <td class="text-center">3</td>
                                                                            <td>NPWP</td>
                                                                            <td class="text-center">
                                                                                @if ($user->file_npwp)
                                                                                    <a href="{{ $user->file_npwp }}"
                                                                                        target="_blank"
                                                                                        class="btn btn-info"><i
                                                                                            class="bi bi-search"></i></a>
                                                                                @else
                                                                                    <i class="bi bi-x-lg"></i>
                                                                                @endif
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_npwp"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_npwp" id="file_npwp">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="align-middle">
                                                                            <td class="text-center">3</td>
                                                                            <td>SIUP KK/SIUPAL</td>
                                                                            <td class="text-center">
                                                                                @if ($user->file_siup)
                                                                                    <a href="{{ $user->file_siup }}"
                                                                                        target="_blank"
                                                                                        class="btn btn-info"><i
                                                                                            class="bi bi-search"></i></a>
                                                                                @else
                                                                                    <i class="bi bi-x-lg"></i>
                                                                                @endif
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_siup"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_siup" id="file_siup">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        {{-- <tr class="align-middle">
                                                                            <td class="text-center">4</td>
                                                                            <td>SIUP KK / SIUPAL</td>
                                                                            <td class="text-center">
                                                                                @if ($user->file_siup)
                                                                                    <a href="{{ $user->file_siup }}"
                                                                                        target="_blank"
                                                                                        class="btn btn-info"><i
                                                                                            class="bi bi-search"></i></a>
                                                                                @else
                                                                                    <i class="bi bi-x-lg"></i>
                                                                                @endif
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <div class="input-group mb-1">
                                                                                    <label
                                                                                        class="input-group-text bg-danger text-white"
                                                                                        for="file_siup"><i
                                                                                            class="bi bi-file-pdf-fill"></i></label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="file_siup" id="file_siup">
                                                                                </div>
                                                                            </td>
                                                                        </tr> --}}
                                                                    </tbody>
                                                                </table>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-3">
                                                    <button type="submit" class="btn btn-md btn-success"><i
                                                            class="bi bi-send"></i> Update</button>
                                                    <a href="{{ route('home') }}"
                                                        class="btn btn-md btn-secondary">back</a>
                                                </div>
                                                <hr class="my-2 bg-primary">
                                            </form>
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
        @if (session('notApproved'))
            <script>
                swal("Akun Anda belum disetujui oleh admin.!", "{{ session('notApproved') }}", "success");
            </script>
        @endif

        @if (session('success'))
            <script>
                swal("Data berhasil diupdate!", "{{ session('success') }}", "success");
            </script>
        @endif

        <script>
            document.getElementById('ubahButton').addEventListener('click', function() {
                var inputFields = ['name', 'email', 'username', 'password', 'nama_perusahaan', 'siup', 'nib', 'alamat',
                    'pic', 'no_telepon'
                ];

                for (var i = 0; i < inputFields.length; i++) {
                    var field = document.getElementById(inputFields[i]);
                    field.readOnly = !field.readOnly;
                }
            });
        </script>
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
        <script>
            function confirmDelete() {
                // Gunakan SweetAlert 1 untuk konfirmasi penghapusan
                swal({
                    title: "Apakah Anda Yakin?",
                    text: "Setelah dihapus, Anda tidak akan dapat memulihkan data ini!",
                    icon: "warning",
                    buttons: ["Batal", "Ya"],
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        swal("Data berhasil dihapus", {
                            icon: "success",
                        });
                        // Jika pengguna mengonfirmasi penghapusan, kirim formulir
                        document.getElementById('delete-form').submit();
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
