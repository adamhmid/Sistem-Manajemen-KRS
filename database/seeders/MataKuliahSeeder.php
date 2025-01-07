<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    MataKuliah::insert([
      [
        'kode_mk' => 'MK1001',
        'nama_mk' => 'Pemrograman Web III',
        'sks' => 4,
      ],
      [
        'kode_mk' => 'MK1002',
        'nama_mk' => 'Pemrograman Mobile',
        'sks' => 4,
      ],
      [
        'kode_mk' => 'MK1003',
        'nama_mk' => 'Pemrograman Desktop',
        'sks' => 4,
      ],
      [
        'kode_mk' => 'MK1004',
        'nama_mk' => 'Basis Data',
        'sks' => 2,
      ],
      [
        'kode_mk' => 'MK1005',
        'nama_mk' => 'Algoritma dan Pemrograman',
        'sks' => 3,
      ],
      [
        'kode_mk' => 'MK1006',
        'nama_mk' => 'Sistem Operasi',
        'sks' => 3,
      ],
      [
        'kode_mk' => 'MK1007',
        'nama_mk' => 'Pemrograman Web II',
        'sks' => 4,
      ],
      [
        'kode_mk' => 'MK1008',
        'nama_mk' => 'Pemrograman Mobile II',
        'sks' => 4,
      ],
    ]);
  }
}
