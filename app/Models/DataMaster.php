<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMaster extends Model
{
    use HasFactory;
    protected $table = 'data_master';

    protected $fillable = [
        'tipe',
        'name',
        'kode',
        'value',
    ];
}
