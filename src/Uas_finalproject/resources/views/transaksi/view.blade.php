@extends('layouts.app')

@section('content')

<?php
$dekorasi = $_GET["dekorasi"];
$ukuran = $_GET["ukuran"];
$jumbar = $_GET["jumbar"];



            // TABLE 1
if($dekorasi == "dekorasi_dinding"){
    if($ukuran == "besar"){
        $harga = 60000;
    }else if($ukuran == "sedang"){
        $harga = 55000;
    }else if($ukuran == "kecil"){
        $harga = 50000;
    }
}
if($dekorasi == "dekorasi_meja"){
    if($ukuran == "besar"){
        $harga = 70000;
    }else if($ukuran == "sedang"){
        $harga = 60000;
    }else if($ukuran == "kecil"){
        $harga = 50000;
    }
}
if($dekorasi == "dekorasi_lantai"){
    if($ukuran == "besar"){
        $harga = 80000;
    }else if($ukuran == "sedang"){
        $harga = 70000;
    }else if($ukuran == "kecil"){
        $harga = 50000;
    }
}
if($dekorasi == "bingkai_foto"){
    if($ukuran == "besar"){
        $harga = 80000;
    }else if($ukuran == "sedang"){
        $harga = 70000;
    }else if($ukuran == "kecil"){
        $harga = 65000;
    }
}
$total = $harga*$jumbar;
            

            // TABEL 2


?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Harus Dibayar</title>
            <style>
                table{
                    margin: auto;
                }
                h1{
                    text-align:center;
                }
                #tag_a{
                    text-align:center;
                }
            </style>
        </head>
    <body>
        <h1>Harus Dibayar</h1>
            <table border="3" Cellpading="10" cellspacing="2">
                <form action="/kasir" method="GET">
                    <tr>
                        <th>No</th>
                        <th>Dekorasi</th>
                        <th>Ukuran</th>
                        <th>Jumlah Barang</th>
                        <th>Harga Satuan</th>
                        <th>Total Bayar</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><?= $dekorasi; ?></td>
                        <td><?= $ukuran; ?></td>
                        <td><?= $jumbar; ?></td>
                        <td><?= $harga; ?></td>
                        <td><?= $total; ?></td>
                    </tr>
                    
            </table>
            <div id="tag_a">
                <a href="/kasir">Kembali</a>
            </div>
    </body>
</html>
@endsection