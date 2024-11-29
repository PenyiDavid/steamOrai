<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Game;
use app\Models\Publisher;
use app\Models\Purchase;

class Tag extends Model
{
    protected $fillable = ['tag_name'];

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }
}
