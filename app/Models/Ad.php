<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price', 'description', 'user_id', 'tag_id'];

    public function setAccepted($value)  {
        
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisedCount() {
        return Ad::where('is_accepted', null)->count();
    }

      /**
     * Get the user that owns the ads.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Un annuncio appartiene a un tag
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    // Un annuncio può avere molte immagini
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
