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
        Schema::table('kerjasama', function (Blueprint $table) {
            $table->string('instansi')->nullable()->change();
            $table->string('nama_kerjasama')->nullable()->change();
            $table->string('no_kerjasama')->nullable()->change();
            $table->string('kategori')->nullable()->change();
            $table->string('mitra')->nullable()->change();
            $table->string('jenis')->nullable()->change();
            $table->string('tempat')->nullable()->change();
            $table->date('tanggal')->nullable()->change();
            $table->date('berlaku')->nullable()->change();
            $table->string('status')->nullable()->change();
            $table->date('tanggal_berakhir')->nullable()->change();
            $table->string('file')->nullable()->change();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kerjasama', function (Blueprint $table) {
            //
        });
    }
};
