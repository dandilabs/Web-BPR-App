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
    <div class="container-fluid ">
        <div class="row">
            <div class="text-center">
                <h4>Data Pengajuan Kredit</h4>
            </div>
            <div class="table-responsive-xxl mt-3">
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No E-Ktp</th>
                            <th scope="col" width="150px">Jenis Kelamin</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Jaminan</th>
                            <th scope="col">No Telp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cetakPertanggal as $item)
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
