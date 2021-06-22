@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem">
            <div class="card-header">
                Detail artikel
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <img width="100px" height="100px" src="{{asset('storage/'.$artikel->foto)}}"></td>
                    <li class="list-group-item"><b>No_artikel: </b>{{ $artikel->no_artikel }}</li>
                    <li class="list-group-item"><b>Judul: </b>{{ $artikel->judul }}</li>
                    <li class="list-group-item"><b>Kategori: </b>{{ $artikel->kategori->nama_kategori }}</li>
                    <li class="list-group-item"><b>Deskripsi: </b>{{ $artikel->deskripsi }}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('artikel.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection