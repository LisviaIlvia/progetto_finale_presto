<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    // Genera automaticamente lo slug quando si salva un nuovo tag
    public static function boot()
    {
        parent::boot();
        static::creating(function ($tag) {
            $tag->slug = Str::slug($tag->name);
        });
    }

     // Un tag può avere molti annunci
     public function ads()
     {
         return $this->hasMany(Ad::class);
     }
}

