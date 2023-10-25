<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
    use HasFactory;

    protected $table = 'kerjasama';

    protected $fillable = [
        'instansi',
        'nama_kerjasama',
        'no_kerjasama_pihak_pertama',
        'no_kerjasama_pihak_kedua',
        'kategori',
        'mitra',
        'jenis',
        'tempat',
        'tanggal',
        'tahun_ttd',
        'status',
        'tahun_berakhir',
        'file',
        'link'
    ];
}
