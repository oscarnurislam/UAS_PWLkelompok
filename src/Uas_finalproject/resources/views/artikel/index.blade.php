@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-center mt-2">
            <h2>KUMPULAN ARTIKEL TERBARU</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{route('artikel.create')}}"> Input Artikel</a>
        </div>
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action="{{ route('artikel.cari') }}" method="GET">
              <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Cari artikel.." aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </nav>
    </div>
</div>

@if ($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<div class="table-responsive">
<table class="table">
   <tr>
       <th>No_artikel</th>
       <th>Judul</th>
       <th >Foto</th>
       <th>Kategori</th>
       <th>Deskripsi</th>
       <th>Action</th>
    </tr>

    @foreach ($mhs as $Artikel)
        <tr>
            <td>{{$Artikel->no_artikel}}</td>
            <td>{{$Artikel->judul}}</td> 
            <td><img width="100px" height="100px" src="{{asset('storage/'.$Artikel->foto)}}"></td>
            <td>{{$Artikel->kategori->nama_kategori}}</td>
            <td>{{$Artikel->deskripsi}}</td>
            <td> 
                <form action="{{route('artikel.destroy',$Artikel->id)}}" method="DELETE" onsubmit="return confirm('Anda yakin ingin menghapus data?')">
                    <a class="btn btn-info" href="{{route('artikel.show',$Artikel->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{route('artikel.edit',$Artikel->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a class="btn btn-warning" href="{{route('artikel.rating',$Artikel->id)}}">Rating</a>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<div class="d-flex justify-content-center">
    {{ $mhs->links() }}  
</div>  
<a class="tm-btn tm-btn-rounded tm-article-link" href="product">Kembali Ke Halaman News</a>
</div>
@endsection