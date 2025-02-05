<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MataKuliah extends Model
{
  protected $guarded = [];

  public function kelas(): HasMany
  {
    return $this->hasMany(Kelas::class);
  }
}
