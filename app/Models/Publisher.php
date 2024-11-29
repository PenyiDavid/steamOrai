<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Game;
use app\Models\Tag;
use app\Models\Purchase;

class Publisher extends Model
{
    protected $fillable = ['publisher_team'];

    public function game()
    {
        return $this->hasMany(Game::class);
    }
}
