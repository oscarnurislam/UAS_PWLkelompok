<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artikel;

class Pengarang extends Model
{
    use HasFactory;
    protected $table = 'pengarang';
    protected $fillable = ['nama_pengarang','lokasi','tanggal'];

    public function mahasiswa(){
       return $this->belongsToMany(Artikel::class)->withPivot('rating');
    }
}
