<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerjasama', function (Blueprint $table) {
            $table->id();
            $table->string('instansi');
            $table->string('nama_kerjasama');
            $table->string('no_kerjasama_pihak_pertama');
            $table->string('kategori');
            $table->string('mitra');
            $table->string('jenis');
            $table->string('tempat');
            $table->date('tanggal');
            $table->integer('tahun_ttd');
            $table->string('status');
            $table->integer('tahun_berakhir');
            $table->string('file')->nullable();
            $table->timestamps();
            $table->string('link')->nullable();
            $table->string('bidang_kerjasama')->nullable();
            $table->string('no_kerjasama_pihak_kedua')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kerjasama');
    }
};
