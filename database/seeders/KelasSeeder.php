<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Kelas::insert([
      [
        'nama_kelas' => '1A',
        'dosen_id' => 1,
        'mata_kuliah_id' => 1
      ],
      [
        'nama_kelas' => '1B',
        'dosen_id' => 1,
        'mata_kuliah_id' => 1
      ],
      [
        'nama_kelas' => '2A',
        'dosen_id' => 2,
        'mata_kuliah_id' => 2
      ],
      [
        'nama_kelas' => '2B',
        'dosen_id' => 2,
        'mata_kuliah_id' => 2
      ],
      [
        'nama_kelas' => '3A',
        'dosen_id' => 3,
        'mata_kuliah_id' => 3
      ],
      [
        'nama_kelas' => '3B',
        'dosen_id' => 3,
        'mata_kuliah_id' => 3
      ],
      [
        'nama_kelas' => '4A',
        'dosen_id' => 4,
        'mata_kuliah_id' => 4
      ],
      [
        'nama_kelas' => '4B',
        'dosen_id' => 4,
        'mata_kuliah_id' => 4
      ],
      [
        'nama_kelas' => '5A',
        'dosen_id' => 5,
        'mata_kuliah_id' => 5
      ],
      [
        'nama_kelas' => '5B',
        'dosen_id' => 5,
        'mata_kuliah_id' => 5
      ],
      [
        'nama_kelas' => '6A',
        'dosen_id' => 6,
        'mata_kuliah_id' => 6
      ],
      [
        'nama_kelas' => '6B',
        'dosen_id' => 6,
        'mata_kuliah_id' => 6
      ],
      [
        'nama_kelas' => '7A',
        'dosen_id' => 7,
        'mata_kuliah_id' => 7
      ],
      [
        'nama_kelas' => '7B',
        'dosen_id' => 7,
        'mata_kuliah_id' => 7
      ],
      [
        'nama_kelas' => '8A',
        'dosen_id' => 8,
        'mata_kuliah_id' => 8
      ],
      [
        'nama_kelas' => '8B',
        'dosen_id' => 8,
        'mata_kuliah_id' => 8
      ],
    ]);
  }
}
