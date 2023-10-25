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
            $table->string('instansi')->nullable();
            $table->string('nama_kerjasama')->nullable();
            $table->string('no_kerjasama')->nullable();
            $table->string('kategori')->nullable();
            $table->string('mitra')->nullable();
            $table->string('jenis')->nullable();
            $table->string('tempat')->nullable();
            $table->date('tanggal')->nullable();
            $table->date('berlaku')->nullable();
            $table->string('status')->nullable();
            $table->date('tanggal_berakhir')->nullable();
            $table->string('filepath')->nullable();
            $table->timestamps();
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
