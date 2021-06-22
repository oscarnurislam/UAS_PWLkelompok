@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Kasir</title>
    <style>
        h1{
            text-align:center;
        }
        table{
            margin:auto;
        }
    </style>
</head>
<body>
<h1><u>TRANSAKSI</u></h1>

        <form action="/view" method="GET">
            <table>
                <tr>
                    <td>Dekorasi</td>
                    <td>:</td>
                    <td>
                        <select name="dekorasi">
                            <option value="dekorasi_dinding">Dekorasi Dinding</option>
                            <option value="dekorasi_meja">Dekorasi Meja</option>
                            <option value="dekorasi_lantai">Dekorasi Lantai</option>
                            <option value="bingkai_foto">Bingkai Foto</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Ukuran</td>
                    <td>:</td>
                    <td>
                        <select name="ukuran">
                            <option value="besar">Besar</option>
                            <option value="sedang">Sedang</option>
                            <option value="kecil">Kecil</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Barang</td>
                    <td>:</td>
                    <td><input type="text" name="jumbar" required=""></td>
                </tr>
                <tr>


                 
                 
                 
                 <!-- BUTTON SUBMIT -->
                 
                    <td>
                        <button type="submit" name="submit">Proses</button> ||
                        <button type="reset" name="kosong">Kosong</button>
                    </td>
                </tr>
            </table>
        </form>
</body>
</html>
<a class="tm-btn tm-btn-rounded tm-article-link" href="http://localhost:8000/product">Informasi baru</a>
@endsection