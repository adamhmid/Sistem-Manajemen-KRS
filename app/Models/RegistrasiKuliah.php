<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RegistrasiKuliah extends Model
{
  protected $guarded = [];

  public function mahasiswa(): BelongsTo
  {
    return $this->belongsTo(Mahasiswa::class);
  }

  public function kelas(): BelongsTo
  {
    return $this->belongsTo(Kelas::class);
  }
}
