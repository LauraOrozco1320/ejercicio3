<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function goal()
    {
        return $this->belongsTo(Goal::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
