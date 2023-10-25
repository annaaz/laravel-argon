<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            [
                'username' => 'admin',
                'firstname' => 'Admin',
                'lastname' => 'Admin',
                'email' => 'admin@argon.com',
                'password' => bcrypt('secret')
            ],
            [
                'username' => 'subsatker',
                'firstname' => 'Subsatker',
                'lastname' => 'Subsatker',
                'email' => 'subsatker@gmail.com',
                'password' => bcrypt('secret')
            ]
        ]);

        DB::table('data_master')->insert([
            [
                'tipe' => 'bk',
                'name' => 'bidang_kerjasama',
                'kode' => 'eg',
                'value' => 'Energi',
            ],
            [
                'tipe' => 'bk',
                'name' => 'bidang_kerjasama',
                'kode' => 'pp',
                'value' => 'Pangan dan Pertanian',
            ],
            [
                'tipe' => 'bk',
                'name' => 'bidang_kerjasama',
                'kode' => 'pd',
                'value' => 'Pendidikan',
            ],
            [
                'tipe' => 'bk',
                'name' => 'bidang_kerjasama',
                'kode' => 'ti',
                'value' => 'Teknologi Informasi dan Komunikasi',
            ],
            [
                'tipe' => 'bk',
                'name' => 'bidang_kerjasama',
                'kode' => 'tk',
                'value' => 'Teknologi Kesehatann dan Obat',
            ],
            [
                'tipe' => 'bk',
                'name' => 'bidang_kerjasama',
                'kode' => 'tm',
                'value' => 'Teknologi Material Maju',
            ],
            [
                'tipe' => 'bk',
                'name' => 'bidang_kerjasama',
                'kode' => 'tp',
                'value' => 'Teknologi Pertahanan dan Keamananan',
            ],
            [
                'tipe' => 'bk',
                'name' => 'bidang_kerjasama',
                'kode' => 'tt',
                'value' => 'Teknologi Transportasi',
            ],
            [
                'tipe' => 'bk',
                'name' => 'bidang_kerjasama',
                'kode' => 'll',
                'value' => 'Lain Lain',
            ],
            [
                'tipe' => 'kt',
                'name' => 'kategori',
                'kode' => 'ln',
                'value' => 'Luar Negri',
            ],
            [
                'tipe' => 'kt',
                'name' => 'kategori',
                'kode' => 'dn',
                'value' => 'Dalam Negri',
            ],
            [
                'tipe' => 'jn',
                'name' => 'jenis',
                'kode' => 'pk',
                'value' => 'Payung Kerjasama',
            ],
            [
                'tipe' => 'jn',
                'name' => 'jenis',
                'kode' => 'pp',
                'value' => 'Perjanjian Pelaksana',
            ],
            [
                'tipe' => 'jn',
                'name' => 'jenis',
                'kode' => 'sj',
                'value' => 'Seluruh Jenis',
            ],
            [
                'tipe' => 'st',
                'name' => 'status',
                'kode' => 'br',
                'value' => 'Baru',
            ],
            [
                'tipe' => 'st',
                'name' => 'status',
                'kode' => 'lj',
                'value' => 'Lanjutan',
            ],
            // Add more data as needed
        ]);


    }
}
