<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiKategoriArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artikel', function(Blueprint $table) {
            $table->dropColumn('kategori'); //menghapus kolom kategori_id
            $table->unsignedBigInteger('kategori_id')->nullable(); //menambahkan kolom kategori_id
            $table->foreign('kategori_id')->references('id')->on('kategori'); //menambah foreign key di kolom kategori_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artikel', function(Blueprint $table) {
            $table->string('kategori');
            $table->dropForeign(['kategori_id']);
        });
    }
}
