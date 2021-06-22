@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem">
                <div class="card-header">
                    Edit Artikel
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong> Whoops!!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{ route('artikel.update', $artikel->id) }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="no_artikel">No_artikel</label>
                            <br><input type="text" name="no_artikel" class="form-control" id="no_artikel" value="{{ $artikel->no_artikel }}" aria-describedby="no_artikel">  
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <br><input type="judul" name="judul" class="form-control" id="judul" value="{{ $artikel->judul }}" aria-describedby="judul">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" class="form-control">
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}" {{ $artikel->kategori_id == $item->id ? 'selected': '' }}>{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <br><input type="deskripsi" name="deskripsi" class="form-control" id="deskripsi" value="{{ $artikel->deskripsi }}" aria-describedby="deskripsi">
                        </div>
                        
                        <div class="form-group">
                            <label for="foto">Gambar</label>
                            <input type="file" class="form-control-file" required="required" name="foto" value="{{$artikel->foto}}"></br>
                            <img width="150px" src="{{asset('storage/'.$artikel->foto)}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection