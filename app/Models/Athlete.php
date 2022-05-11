<?php

namespace App\Models;

use Illuminate\Console\Scheduling\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }

    public function commentaires()
    {
        return $this->morphMany(Commentaire::class, 'commentable');
    }
}
