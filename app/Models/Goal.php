<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;
    protected $fillable = ['minuto', 'desc'];

    public function games()
    {
        return $this->hasMany(Game::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
