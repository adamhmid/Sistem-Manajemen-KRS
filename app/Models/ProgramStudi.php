<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProgramStudi extends Model
{
  protected $guarded = [];

  public function mahasiswa(): HasMany
  {
    return $this->hasMany(Mahasiswa::class);
  }
}
