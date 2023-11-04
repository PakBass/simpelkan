<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$title}}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif; /* Menetapkan font Montserrat sebagai font utama */
            position: relative;
            min-height: 100vh;
        }

        .footer-img {
            position:fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            z-index: -1;
        }

        .custom-checkbox .form-check-input[type="checkbox"] {
            width: 1.5em;
            height: 1.5em;
            background-color: #000000;
        }
    </style>
</head>
<body>
    <div class="container p-5 mt-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-12">
                <!-- Notifikasi menggunakan flash session data -->
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif

                <div class="card border-0 shadow rounded">
                    <div class="row g-0">
                        <!-- Sidebar -->
                        <div class="col-md-3 sidebar">
                            <div class="card-body">
                                <div class="logo">
                                    <img src="{{ asset('storage/image/simpelkan.png') }}" alt="Logo">
                                    <img src="{{ asset('storage/image/logo.png') }}" alt="Logo">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <button type="button" class="btn btn-transparent position-relative mt-3" disabled>
                                    <i class="bi bi-person-fill"></i> Welcome, {{Auth::user()->name}}
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        {{Auth::user()->role}}
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </button>
                                <a href="#" class="btn btn-md btn-danger float-right mb-3" onclick="confirmLogout();"><i class="bi bi-box-arrow-left"></i> Logout</a>
                            <hr class="my-2 bg-primary">
                            </div>
                            <h4 class="mb-4"><span class="badge text-bg-primary text-white mx-3"> VALIDASI DATA PEMOHON</span></h4>
                            <form class="mx-3" action="{{ route('post.update', $post->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">NAMA LENGKAP PEMOHON</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name', $post->name) }}" readonly>
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="title">EMAIL</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email', $post->email) }}" readonly>
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="title">USERNAME</label>
                                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                                name="username" value="{{ old('username', $post->username) }}" readonly>
                                            @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="title">PASSWORD</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Biarkan kosong jika tidak ingin diubah" readonly>
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="title">NAMA PERUSAHAAN</label>
                                            <input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror"
                                                name="nama_perusahaan" value="{{ old('nama_perusahaan', $post->nama_perusahaan) }}" readonly>
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
                                            <input type="text" class="form-control @error('siup') is-invalid @enderror"
                                                name="siup" value="{{ old('siup', $post->siup) }}" readonly>
                                            @error('siup')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="title">NIB</label>
                                            <input type="text" class="form-control @error('nib') is-invalid @enderror"
                                                name="nib" value="{{ old('nib', $post->nib) }}" readonly>
                                            @error('nib')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="title">ALAMAT DOMISILI</label>
                                            <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                                name="alamat" value="{{ old('alamat', $post->alamat) }}" readonly>
                                            @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="title">PENANGGUNG JAWAB PERUSAHAAN</label>
                                            <input type="text" class="form-control @error('pic') is-invalid @enderror"
                                                name="pic" value="{{ old('pic', $post->pic) }}" readonly>
                                            @error('pic')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="no_telepon">No TELEPHONE / HP</label>
                                            <input type="text" class="form-control @error('no_telepon') is-invalid @enderror"
                                                name="no_telepon" value="{{ old('no_telepon', $post->no_telepon) }}" readonly>
                                            @error('no_telepon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
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
                                                            <th scope="col">Nama File</th>
                                                            <th scope="col">Check Dokumen</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="align-middle">
                                                            <td class="text-center">1</td>
                                                            <td>AKTE PERUSAHAAN</td>
                                                            <td class="text-center">
                                                                @if($post->file_akte)
                                                                    <a href="{{ url($post->file_akte) }}" target="_blank" class="btn btn-warning"><i class="bi bi-search"></i> Lihat data</a>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td class="text-center">2</td>
                                                            <td>NIB</td>
                                                            <td class="text-center">
                                                                @if($post->file_nib)
                                                                    <a href="{{ $post->file_nib }}" target="_blank" class="btn btn-warning"><i class="bi bi-search"></i> Lihat data</a>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td class="text-center">3</td>
                                                            <td>NPWP</td>
                                                            <td class="text-center">
                                                                @if($post->file_npwp)
                                                                    <a href="{{ $post->file_npwp }}" target="_blank" class="btn btn-warning"><i class="bi bi-search"></i> Lihat data</a>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td class="text-center">4</td>
                                                            <td>SIUP KK / SIUPAL</td>
                                                            <td class="text-center">
                                                                @if($post->file_siup)
                                                                    <a href="{{ $post->file_siup }}" target="_blank" class="btn btn-warning"><i class="bi bi-search"></i> Lihat data</a>
                                                                @endif
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-flex">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="btn-check" id="btn-check-2-outlined" value="1" name="approve" {{ $post->approved ? 'checked' : '' }}>
                                            <label class="btn btn-outline-primary" for="btn-check-2-outlined">
                                                <i class="bi bi-file-earmark-check"></i> AKTIFASI AKUN
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-2 bg-primary">
                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-md btn-success"><i class="bi bi-send"></i> Update</button>
                                    <a href="{{ route('home') }}" class="btn btn-md btn-secondary">back</a>
                                </div>
                                <hr class="my-2 bg-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="footer-img" src="{{ asset('storage/image/footer-bg.png') }}" alt="">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
