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
        .form-container {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out;
        }
        .form-container.active {
            max-width: 100%;
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
    </style>
    <style>
        .search-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px; /* Atur jarak antara pencarian dan tombol-tombol */
        }

        .search-box {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 5px;
        }

        .badge {
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border-radius: 10px;
        }

        .btn-container {
            margin-top: 20px;
        }

        .btn-custom {
            margin-bottom: 10px;
            display: block;
            width: 100%;
            text-align: left;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>

</head>
<body>
    <div class="container p-5 mt-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-12">
                <!-- Notifikasi menggunakan flash session data -->
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
                                <h4>
                                @can('isPemeriksa')
                                    <h5>Form Pemeriksaan Kapal</h5>
                                @endcan
                                </h4>
                                @can('isPemeriksa')
                                    {{-- button toggle --}}
                                    <button class="btn btn-outline-primary my-2 mt-5 toggleButton" type="button" data-target="tombol"><i class="bi bi-calendar-plus-fill"></i> <small>Choose Form Pemeriksaan</small></button>
                                @endcan
                                @can('isPemohon')
                                    <div class="btn-container mt-5">
                                        <a href="/permohonan" class="btn btn-md btn-outline-primary btn-custom text-center p-3">
                                            <i class="bi bi-person-fill-add"></i> Forn Permohonan Baru
                                        </a>
                                    </div>
                                @endcan
                            </div>
                            <div class="form-container" id="tombol">
                                <fieldset class="border p-2">
                                    <div class="row g-0">
                                        <div class="col-md-8">
                                            <div class="search-container">
                                                <input type="text" id="searchInput" class="search-box" placeholder="Cari...">
                                                <span class="badge" id="searchButton">Cari</span>
                                            </div>
                                            @can('isPemeriksa')
                                                <div class="btn-container">
                                                    <a href="/pengajuan" style="text-decoration: none"><span class="badge bg-danger"><i class="bi bi-pencil"></i> Konstruksi Kapal</span></a>
                                                </div>
                                                <div class="btn-container">
                                                    <a href="/radio" style="text-decoration: none"><span class="badge bg-danger"><i class="bi bi-pencil"></i> Radio Kapal</span></a>
                                                </div>
                                                <div class="btn-container">
                                                    <a href="/keselamatan" style="text-decoration: none"><span class="badge bg-danger"><i class="bi bi-pencil"></i> Keselamatan Perlengkapan Kapal Barang</span></a>
                                                </div>
                                            @endcan
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            @can('isAdmin')
                                    <a href="/pencegahan"class="btn btn-md btn-outline-danger float-right mr-3 mb-3"><i class="bi bi-pencil"></i> Form Pencegahan Pencemaran</a>
                            @endcan
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
                                @can('isAdmin')
                                <h4 class="mb-4"><span class="badge text-bg-primary text-white mx-3"> DATA PEMOHON BARU</span></h4>
                                    <table class="table-responsive mt-3">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr class="text-center">
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Full Name</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Registered At</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($posts as $key => $post)
                                                    <tr>
                                                        <td class="text-center">{{ $key + $posts->firstItem()}}</td>
                                                        <td>{{ $post->name }}</td>
                                                        <td>{{ $post->username }}</td>
                                                        <td>{{ $post->email }}</td>
                                                        <td>{{ $post->created_at->format('d-m-Y') }}</td>
                                                        <td class="text-center mb-3">
                                                            <form onsubmit="return confirmDelete();" id="delete-form" action="{{ route('post.destroy', $post->id) }}" >
                                                                @method('DELETE')
                                                                <a href="{{ route('post.edit', $post->id) }}"
                                                                    class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></a>
                                                                @csrf
                                                                @can('isAdmin')
                                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></button>
                                                                @elsecan('isPemohon')
                                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></button>
                                                                @endcan
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td class="text-center text-mute" colspan="4">Data post tidak tersedia</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </table>
                                    {{ $posts->links() }}
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="footer-img" src="{{ asset('storage/image/footer-bg.png') }}" alt="">

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
