@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="mt-2" style="text-align: center">
            <h2>ARTIKEL TERBARU</h2>
            <br><h1>CETAK ARTIKEL</h1>
        </div>
        <div class="card-body">
                <p><b>Judul  : </b>{{ $artikel->judul }}
                <p><b>No_artikel   : </b>{{ $artikel->no_artikel }}
                <p><b>Kategori : </b>{{ $artikel->kategori->nama_kategori }}
        </div>
    </div>
</div>

<table class="table">
    <thead class="thead-dark">
      <tr>
            <th scope="col">Pengarang</th>
            <th scope="col">Lokasi</th>
            
            <th scope="col">Rating</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($artikel->matakuliah as $item)
            <tr>
                <th scope="row">{{$item->nama_pengarang}}</th>
                <td>{{$item->lokasi}}</td>
         
                <td>{{$item->pivot->rating}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<a class="btn btn-success mt-3" href="{{ route('artikel.index') }}">Kembali</a>
<a class="btn btn-danger mt-3" href="{{ route('artikel.cetak',$artikel->id) }}">Cetak Ke PDF</a>
@endsection