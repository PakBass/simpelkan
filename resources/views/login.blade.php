<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dist/img/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    .form-control {
        border: 2px solid #ccc;
        /* Atur ketebalan dan warna border sesuai keinginan Anda */
    }

    .modal-xl {
        max-width: 70%;
        /* Sesuaikan dengan ukuran maksimum modal Anda */
        position: relative;
    }

    /* Stil untuk membuat latar belakang modal transparan */
    .modal-content {
        background-color: rgba(255, 255, 255, 0.8);
        border: none;
        position: relative;
        /* Pastikan posisi relatif untuk elemen dalam modal */
        z-index: 1;
        /* Pastikan form berada di depan gambar latar belakang */
    }

    #loading {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(140, 211, 231, 0.8);
        padding: 20px;
        border-radius: 5px;
        display: none;
    }
</style>

<body>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center flex-wrap">
            <div class="content">
                <div class="h2 text-white"><strong>SIMPELKAN</strong></div>
                <div class="fs-5 text-white text-grey">Sistem Pelayanan Elektronik Kelaiklautan Kapal</div>
                <div class="text my-4 text-white text-justify">
                    <p>SIMPELKAN v.1.0 adalah sistem pelayanan kelaiklautan kapal versi 1.0 yang dikembangkan untuk meningkatkan efektifitas pelayanan kepada pengguna jasa.</p>
                    <p>Saat ini SIMPELKAN v.1.0 terus melakukan pengembangan sistem guna mencapai pelayanan yangterbaik untuk pengguna jasa. </p>
                </div>
                <div class="d-flex align-items-center text-white mt-4">
                    <a href="" data-bs-toggle="modal" data-bs-target="#registrationModal"><span class="badge text-bg-warning">Klik disini</span></a>
                </div>
            </div>
            <div class="form-card">
                <div class="container">
                    <div class="screen">
                        <div class="screen__content">
                            <div class="logo">
                                <img src="{{ asset('storage/image/simpelkan.png') }}" alt="Logo">
                                <img src="{{ asset('storage/image/logo.png') }}" alt="Logo">
                            </div>
                            <form class="login" action="/actionlogin" method="POST" id="loginForm">
                                @csrf
                                <h2>Login Area</h2>
                                <div class="login__field">
                                    <i class="bi bi-person-check-fill"></i>
                                    <input type="text" name="identity" class="login__input" placeholder="Email atau Username"
                                        autocomplete="off">
                                </div>
                                {!! $errors->first('identity', '<small class="text-danger">:message</small>') !!}
                                <div class="login__field">
                                    <i class="bi bi-key-fill"></i>
                                    <input type="password" name="password" class="login__input" placeholder="Password" value="{{ old('password') }}">
                                </div>
                                {{-- {!! $errors->first('password', '<small class="text-danger">:message</small>') !!} --}}
                                <button class="btn btn-primary" type="submit">
                                    <i class="bi bi-box-arrow-in-right"></i> Log In Now
                                </button>
                                <span id="loading" class="d-none">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                                </span>
                            </form>
                            <div class="register-link mb-3">
                                <label for="reg">Belum punya akun ?</label>
                                <a href="" data-bs-toggle="modal" data-bs-target="#registrationModal"><span class="badge text-bg-warning">Klik disini</span></a>
                            </div>
                        </div>
                        <div class="screen__background">
                            <span class="screen__background__shape screen__background__shape4"></span>
                            <span class="screen__background__shape screen__background__shape3"></span>
                            <span class="screen__background__shape screen__background__shape2"></span>
                            <span class="screen__background__shape screen__background__shape1"></span>
                        </div>
                    </div>
                    <div id="loading" style="display: none;">
                        Loading...
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="footer-img" src="{{ asset('storage/image/footer-bg.png') }}" alt="">

    <!-- Modals Registrasi -->
    <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationModalLabel"><strong>Form Registrasi Pemohon Baru</strong>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr class="my-2 bg-primary">
                <div class="modal-body">
                    <!-- Isi form registrasi di sini -->
                    <form action="/register" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label"><i class="bi bi-pencil-fill"></i> Nama lengkap pemohon</label>
                                    <input type="text"
                                        class="form-control rounded @error('name') is-invalid @enderror" id="name"
                                        name="name" value="{{ old('name') }}" autocomplete="off" oninput="this.value = this.value.toUpperCase()">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label"><i class="bi bi-person-fill"></i>
                                        Username</label>
                                    <input type="text"
                                        class="form-control rounded @error('username') is-invalid @enderror"
                                        id="username" name="username" value="{{ old('username') }}" autocomplete="off">
                                    @error('username')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label"><i class="bi bi-envelope-fill"></i>
                                        Email</label>
                                    <input type="email"
                                        class="form-control rounded @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}"
                                        autocomplete="off">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label"><i class="bi bi-key-fill"></i>
                                        Password</label>
                                    <input type="password"
                                        class="form-control rounded @error('password') is-invalid @enderror"
                                        id="password" name="password" autocomplete="off">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="nama_perusahaan" class="form-label"><i
                                            class="bi bi-house-door-fill"></i> Nama Perusahaan</label>
                                    <input type="text"
                                        class="form-control rounded @error('nama_perusahaan') is-invalid @enderror"
                                        id="nama_perusahaan" name="nama_perusahaan"
                                        value="{{ old('nama_perusahaan') }}" autocomplete="off" oninput="this.value = this.value.toUpperCase()" >
                                    @error('nama_perusahaan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="siup" class="form-label"><i class="bi bi-card-text"></i> SIUP KK
                                        / SIUPAL</label>
                                    <input type="text"
                                        class="form-control rounded @error('siup') is-invalid @enderror"
                                        id="siup" name="siup" value="{{ old('siup') }}"
                                        autocomplete="off" oninput="this.value = this.value.toUpperCase()" >
                                    @error('siup')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nib" class="form-label"><i class="bi bi-123"></i> NIB</label>
                                    <input type="text"
                                        class="form-control rounded @error('nib') is-invalid @enderror" id="nib"
                                        name="nib" value="{{ old('nib') }}" autocomplete="off" oninput="this.value = this.value.toUpperCase()">
                                    @error('nib')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label"><i class="bi bi-houses-fill"></i> Alamat
                                        Domisili</label>
                                    <input type="text"
                                        class="form-control rounded @error('alamat') is-invalid @enderror"
                                        id="alamat" name="alamat" value="{{ old('alamat') }}" autocomplete="off" oninput="this.value = this.value.toUpperCase()">
                                    @error('alamat')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="pic" class="form-label"><i class="bi bi-person-workspace"></i>
                                        Penanggung Jawab Perusahaan</label>
                                    <input type="text"
                                        class="form-control rounded @error('pic') is-invalid @enderror" id="pic"
                                        name="pic" value="{{ old('pic') }}" autocomplete="off" oninput="this.value = this.value.toUpperCase()">
                                    @error('pic')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="no_telepon" class="form-label"><i class="bi bi-telephone-fill"></i> No
                                        Telephone/HP <i>(Nomor WhatsApp)</i></label>
                                    <input type="text"
                                        class="form-control rounded @error('no_telepon') is-invalid @enderror"
                                        id="no_telepon" name="no_telepon" value="{{ old('no_telepon') }}" autocomplete="off">
                                    @error('no_telepon')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-5">
                                    <label for="syarat">
                                        <strong>Siapkan dokumen dalam format PDF untuk untuk validasi akun pemohon
                                            baru</strong> <br>
                                        Daftar dokumen yang harus di upload :
                                        <ol>
                                            <li>AKTE PERUSAHAAN
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text bg-primary text-white"
                                                        for="file_akte"><i class="bi bi-file-pdf-fill"></i></label>
                                                    <input type="file" class="form-control" name="file_akte" id="file_akte">
                                                </div>
                                                @error('file_akte')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </li>
                                            <li>NIB
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text bg-primary text-white"
                                                        for="file_nib"><i class="bi bi-file-pdf-fill"></i></label>
                                                    <input type="file" class="form-control" name="file_nib"
                                                        id="file_nib">
                                                </div>
                                                @error('file_nib')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </li>
                                            <li>NPWP
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text bg-primary text-white"
                                                        for="file_npwp"><i class="bi bi-file-pdf-fill"></i></label>
                                                    <input type="file" class="form-control" name="file_npwp"
                                                        id="file_npwp">
                                                </div>
                                                @error('file_npwp')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </li>
                                            <li>SIUP KK / SIUPAL
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text bg-primary text-white"
                                                        for="file_siup"><i class="bi bi-file-earmark-pdf"></i></label>
                                                    <input type="file" class="form-control" name="file_siup"
                                                        id="file_siup">
                                                </div>
                                                @error('file_siup')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </li>
                                        </ol>
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-block btn-success"><i class="bi bi-person-plus-fill"></i>Registrasi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        function handleLogin() {
            var button = document.getElementById('loginBtn');
            var loading = document.getElementById('loading');

            // Sembunyikan tombol, tampilkan animasi loading
            button.classList.add('d-none');
            loading.classList.remove('d-none');

            setTimeout(function() {
                button.classList.remove('d-none');
                loading.classList.add('d-none');
                window.location.href = '/actionlogin';
            }, 3000);
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('loginBtn').addEventListener('click', function(e) {
                e.preventDefault(); // Hindari aksi bawaan dari tombol submit
                handleLogin();
            });
        });
    </script>

    @if (session('success'))
        <script>
            swal("Registrasi Berhasil!", "{{ session('success') }}", "success");
        </script>
    @endif

    @if (session('notApproved'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Akun Anda belum disetujui oleh admin!',
                text: '{{ session('notApproved') }}',
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            swal({
                title: "Login Gagal!",
                text: "Password atau username masih ada yang salah.",
                icon: "error",
                button: "OK",
            });
        </script>
    @endif
</body>

</html>
