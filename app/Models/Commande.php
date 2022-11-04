<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    public function article(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
        //Or: return $this->hasMany(Post::class, 'foreign_key');
    }
}
