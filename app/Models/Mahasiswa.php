<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mahasiswa extends Model
{
  protected $guarded = [];

  public function programStudi(): BelongsTo
  {
    return $this->belongsTo(ProgramStudi::class);
  }

  public function registrasiKuliah(): HasMany
  {
    return $this->hasMany(RegistrasiKuliah::class);
  }
}
