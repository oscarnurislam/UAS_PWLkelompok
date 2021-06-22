<!DOCTYPE html>
<html>

<head>
    <title>Laporan Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

    </style>
    <center>
        <h3>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h3>
            <br><h3>KARTU HASIL STUDI(KHS)</h3>
    </center>

        <p><b>Judul : </b>{{ $mhs->judul }}
            <p><b>No_artikel : </b>{{ $mhs->no_artikel }}
                <p><b>Kategori : </b>{{ $mhs->kelas->nama_kategori }}

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Pengarang</th>
                <th scope="col">Lokasi</th>
               
                <th scope="col">Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mhs->matakuliah as $item)
                <tr>
                    <th scope="row">{{$item->nama_pengarang}}</th>
                    <td>{{$item->lokasi}}</td>
               
                    <td>{{$item->pivot->rating}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>