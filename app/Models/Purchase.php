<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Game;
use app\Models\Publisher;
use app\Models\Tag;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Purchase extends Pivot
{
    protected $fillable = ['game_id', 'user_id', 'price'];

}
