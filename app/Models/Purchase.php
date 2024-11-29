<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Game;
use app\Models\Publisher;
use app\Models\Tag;

class Purchase extends Model
{
    protected $fillable = ['game_id', 'user_id', 'price'];

}
