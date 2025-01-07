<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    User::factory()->create([
      'name'     => 'Admin',
      'email'    => 'admin@gmail.com',
      'password' => bcrypt('qwert123'),
      'role'     => 'admin',
    ]);

    User::factory()->create([
      'name'     => 'Operator',
      'email'    => 'operator@gmail.com',
      'password' => bcrypt('qwert123'),
      'role'     => 'operator',
    ]);
  }
}
