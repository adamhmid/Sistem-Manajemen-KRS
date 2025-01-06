<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dosen extends Model
{
  public function registrasiKuliah(): HasMany
  {
    return $this->hasMany(RegistrasiKuliah::class);
  }
}
