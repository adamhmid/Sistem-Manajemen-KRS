<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
  public function dosen(): BelongsTo
  {
    return $this->belongsTo(Dosen::class);
  }

  public function mataKuliah(): BelongsTo
  {
    return $this->belongsTo(MataKuliah::class);
  }

  public function registrasiKuliah(): HasMany
  {
    return $this->hasMany(RegistrasiKuliah::class);
  }
}
