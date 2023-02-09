<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center mt-3">
        <div class="row">
            {{-- <div class="col-sm-3">
                <img src="{{ asset('vendor/images/logo-bpr.png') }}" width="130" alt="">
            </div>
            <div class="col-sm-9">
                <h4>PT. BANK PERKREDITAN RAKYAT</h4>
                <h3 style="color:blue;">RIZKY BAROKAH</h3>
                <p>Jl. Bintaro Utama Sektor IX, Blok HB 19 No. 3A Tangerang Selatan</p>
                <p>Telp. 021 22213065, 021 7457667 Fax. 021 22213044, E-mail : rizky_barokah@yahoo.com</p>

            </div> --}}
            {{-- <hr size="10px" width="50%"> --}}
            <h3>
                <strong>Data Pengajuan Kredit</strong>
            </h3>

        </div>
        <section>
            <div class="container mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No E-Ktp</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Jaminan</th>
                            <th scope="col">No Telp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->no_ktp }}</td>
                                <td>{{ $item->gender->jenis_kelamin }}</td>
                                <td>
                                    {{ \Carbon\Carbon::parse($item->tanggal_lahir)->translatedFormat('d F Y') }}
                                </td>
                                <td>{{ $item->jenis->name }}</td>
                                <td>{{ $item->jaminan->name }}</td>
                                <td>{{ $item->no_telp }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
