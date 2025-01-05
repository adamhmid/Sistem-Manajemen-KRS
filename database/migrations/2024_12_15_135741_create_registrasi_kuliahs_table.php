<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('registrasi_kuliahs', function (Blueprint $table) {
      $table->id();
      $table->string('semester');
      $table->string('status');
      $table->foreignId('mahasiswa_id')->constrained()->cascadeOnDelete();
      $table->foreignId('kelas_id')->constrained()->cascadeOnDelete();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('registrasi_kuliahs');
  }
};
