<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $faker = Faker::create('id_ID');

    for ($i = 0; $i < 100; $i++) {
      Dosen::create([
        'nidn' => $faker->unique()->numerify('04########'),
        'nama' => $faker->name(),
        'email' => $faker->unique()->email(),
        'jenis_kelamin' => $faker->randomElement(['L', 'P']),
      ]);
    }
  }
}
