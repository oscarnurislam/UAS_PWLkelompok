@extends('layouts.app')
  
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Artikel
                </div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <form method="post" action="{{ route('artikel.store') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="no_artikel">No_artikel</label>
                            <input type="text" name="no_artikel" class="form-control" id="no_artikel" aria-describedby="no_artikel" >
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="judul" name="judul" class="form-control" id="judul" aria-describedby="judul" >
                        </div>
                        
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" class="form-control">
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="deskripsi" name="deskripsi" class="form-control" id="deskripsi" aria-describedby="deskripsi" >
                        </div>

                        <div class="form-group">
                            <label for = "foto">Gambar</label>
                            <input type  = "file" class = "form-control-file" required = "required" name = "foto">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection