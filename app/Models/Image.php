<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    // La relazione con il modello Ad (ogni immagine appartiene a un annuncio)
    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }
}
