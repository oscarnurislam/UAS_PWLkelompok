<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Artikel;
use App\Models\Kategori;
use PDF;

class ArtikelController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = artikel::with('kategori')->paginate(5);
        return view('artikel.index',['mhs'=>$artikel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('artikel.create',['kategori'=>$kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_artikel' => 'required',
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required'
        ]);

        $image_name = $request->file('foto')->store('images','public');

        $artikel = new artikel;
        $artikel->no_artikel = $request->get('no_artikel');
        $artikel->judul = $request->get('judul');
        $artikel->deskripsi = $request->get('deskripsi');
        $artikel->foto = $image_name;
        $artikel->save();

        $kategori = new Kategori;
        $kategori->id = $request->get('kategori');

        $artikel->kategori()->associate($kategori);
        $artikel->save();

        return redirect()->route('artikel.index')->with('success', 'artikel berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = artikel::with('kategori')->where('id', $id)->first();
        return view('artikel.detail',['artikel'=>$artikel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = artikel::with('kategori')->where('id', $id)->first();
        $kategori = Kategori::all();
        return view('artikel.edit', compact('artikel','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_artikel' => 'required',
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required'
        ]);

        $artikel = artikel::with('kategori')->where('id',$id)->first();
        $artikel->no_artikel = $request->get('no_artikel');
        $artikel->judul = $request->get('judul');
        $artikel->deskripsi = $request->get('deskripsi'); 
        
        if($artikel->foto && file_exists(storage_path('app/public/' . $artikel->foto))){
            Storage::delete('public/' . $artikel->foto);
        }
        $image_name = $request->file('foto')->store('images', 'public');
        $artikel->foto = $image_name;

        $artikel->save();

        $kategori = new Kategori;
        $kategori->id = $request->get('kategori');

        //fungsi eloquent untuk menambah data dengan relasi belongTo
        $artikel->kategori()->associate($kategori);
        $artikel->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('artikel.index')->with('success', 'artikel berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        artikel::find($id)->delete();
        return redirect()->route('artikel.index')-> with('success', 'artikel berhasil dihapus');
    }

    public function cari(Request $request){
        //melakukan validasi data
        $cari=$request->cari;

        $artikel = artikel::where('judul','like',"%".$cari."%")->paginate(5);

        return view('artikel.index',['mhs'=>$artikel]);
    }

    public function hasil($id)
    {   
        $artikel = artikel::find($id);
        return view('artikel.tampilan_cetak',['artikel'=>$artikel]);
    }

    public function cetak_pdf($id){
        $artikel = artikel::find($id);
        $pdf = PDF::loadview('artikel.cetak',['mhs'=>$artikel]);
        return $pdf->stream();
    }
}
