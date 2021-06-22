<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artikel;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';

    public function artikel(){
        return $this->hasMany(Artikel::class);
    }
}
