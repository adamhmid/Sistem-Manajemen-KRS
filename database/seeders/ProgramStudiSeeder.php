<?php

namespace Database\Seeders;

use App\Models\ProgramStudi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramStudiSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    ProgramStudi::insert([
      ['nama' => 'Teknik Informatika'],
      ['nama' => 'Manajemen Informatika'],
    ]);
  }
}
