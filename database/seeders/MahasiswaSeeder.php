<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $faker = Faker::create('id_ID');

    for ($i = 0; $i < 100; $i++) {
      Mahasiswa::create([
        'nim' => $faker->unique()->numerify('2104####'),
        'nama' => $faker->name(),
        'tempat_lahir' => $faker->city(),
        'tanggal_lahir' => $faker->date(),
        'jenis_kelamin' => $faker->randomElement(['L', 'P']),
        'program_studi_id' => $faker->numberBetween(1, 2),
      ]);
    }
  }
}
