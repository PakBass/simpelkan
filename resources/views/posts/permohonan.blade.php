<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Pengunggahan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/clientScript.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            /* Menetapkan font Montserrat sebagai font utama */
            background: linear-gradient(90deg, #ffffff, #e4e4e7);
            height: 100%;
            margin: 0;
            min-height: 100vh;
            position: relative;
        }

        .center_div {
            margin: 0 auto;
            width: 30%;
        }

        .footer-img {
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Form Permohonan Baru</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/home"><h4><span class="label label-danger"><span class="glyphicon glyphicon-menu-left"></span> BACK</span></h4></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <form id="uploadForm">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="namaKapal"><span class="glyphicon glyphicon-pencil"></span> NAMA KAPAL</label>
                        <input type="text" class="form-control" id="namaKapal" oninput="this.value = this.value.toUpperCase()" autocomplete="off" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenisKapal"><span class="glyphicon glyphicon-pencil"></span> JENIS KAPAL</label>
                        <input type="text" class="form-control" id="jenisKapal" oninput="this.value = this.value.toUpperCase()" autocomplete="off" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenisLayanan"><span class="glyphicon glyphicon-pencil"></span> JENIS LAYANAN</label>
                        <input type="text" class="form-control" id="jenisLayanan" oninput="this.value = this.value.toUpperCase()" autocomplete="off" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="ditujukan"><span class="glyphicon glyphicon-home"></span> DITUJUKAN</label>
                        <input type="text" class="form-control"
                            value="KANTOR KESYAHBANDARAN DAN OTORITAS PELABUHAN KELAS I BALIKPAPAN" id="ditujukan"
                            readonly autocomplete="off" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="nomorSurat"><span class="glyphicon glyphicon-th-list"></span> NOMOR</label>
                        <input type="text" class="form-control" id="nomorSurat" oninput="this.value = this.value.toUpperCase()" autocomplete="off" />
                    </div>
                    <div class="form-group">
                        <label for="tanggalSurat"><span class="glyphicon glyphicon-calendar"></span> TANGGAL SURAT Surat:</label>
                        <div class="input-group date" id="tanggalSuratPicker">
                            <input type="text" class="form-control" id="tanggalSurat" >
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="perihalSurat"><span class="glyphicon glyphicon-comment"></span> PERIHAL</label>
                        <input type="text" class="form-control" id="perihalSurat" oninput="this.value = this.value.toUpperCase()" autocomplete="off" required/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="gt"><span class="glyphicon glyphicon-briefcase"></span> GT</label>
                        <input type="text" class="form-control" id="gt" oninput="this.value = this.value.toUpperCase()" autocomplete="off" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="callSign"><span class="	glyphicon glyphicon-tag"></span> CALL SIGN</label>
                        <input type="text" class="form-control" id="callSign" oninput="this.value = this.value.toUpperCase()" autocomplete="off" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="pemilik"><span class="	glyphicon glyphicon-tag"></span> PEMILIK</label>
                        <input type="text" class="form-control" id="pemilik" oninput="this.value = this.value.toUpperCase()" autocomplete="off" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="attach"><span class="glyphicon glyphicon-cloud-upload"></span> Upload File document (<i>dalam Format PDF</i>)</label>
                        <input type="file" class="form-control" id="attach" multiple required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-title">
                            <div class="table table-borderless" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:13pt">
                                <h4>
                                    Tata cara pengisian formulir Pengajuan Permohonan Baru secara online:</h4>
                                <ol>
                                    <li>Isilah semua data dengan lengkap</li>
                                    <li>Siapkan dokumen pendukung sesuai dengan list dibawah ini dalam format <b>PDF</b>
                                        :</li>
                                    <ul>
                                        <li>Surat Permohonan</li>
                                        <li>Copy surat ukur kapal</li>
                                        <li>Copy surat tanda kebangsaan kapal</li>
                                        <li>Sertifikat perlengkapan lama</li>
                                        <li>Sertifikat konstruksi lama</li>
                                        <li>Sertifikat radio lama</li>
                                        <li>Copy sertifikat klassifikasi kapal</li>
                                        <li>Copy sertifikat ILR dan PMK</li>
                                        <li>LAPORAN PEMERIKSAAN KESELAMATAN KAPAL DAN MARINE INSPECTOR</li>
                                        <li>LAPORAN DOCKING DARI GALANGAN (UNTUK KAPAL YANG MELAKSANAKAN DOCKING)</li>
                                        <li>LAPORAN DOCKING DARI MARINE INSPECTOR (UNTUK KAPAL YANG MELAKSANAKAN
                                            DOCKING)</li>
                                    </ul>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-check btn btn-primary" onclick="submit();"><span class="	glyphicon glyphicon-floppy-disk"></span> Kirim Data</button>
                </div>
            </div>
        </div>
    </div>
    <img class="footer-img" src="{{ asset('storage/image/footer-bg.png') }}" alt="">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tanggalSuratPicker').datepicker({
                format: 'dd/mm/yyyy', // Sesuaikan format tanggalnya di sini
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>

</body>

</html>
