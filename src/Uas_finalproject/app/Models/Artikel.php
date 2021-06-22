<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Pengarang;

class Artikel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'artikel';
    protected $fillable = ['no_artikel','judul','kategori','deskripsi'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function matakuliah(){
        return $this->belongsToMany(Pengarang::class)->withPivot('rating');
    }
}
