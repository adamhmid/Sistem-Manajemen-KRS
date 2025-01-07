<?php

namespace Database\Seeders;

use App\Models\RegistrasiKuliah;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrasiKuliahSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $faker = Faker::create('id_ID');

    for ($i = 0; $i < 100; $i++) {
      RegistrasiKuliah::create([
        'semester' => $faker->numberBetween(1, 7),
        'status' => $faker->randomElement(['Aktif', 'Non-Aktif']),
        'mahasiswa_id' => $faker->numberBetween(1, 100),
        'kelas_id' => $faker->numberBetween(1, 16),
      ]);
    }
  }
}
