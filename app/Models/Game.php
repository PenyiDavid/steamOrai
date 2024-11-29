<?php

namespace App\Models;
use app\Models\Publisher;
use app\Models\Tag;
use app\Models\Purchase;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //use HasFactory;
    protected $fillable = ['game_name', 'release_date', 'rating', 
        'age_restricted', 'price', 'picture_path', 'description', 'publisher_id'];
    
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'purchases')
                    ->withPivot('price');;
    }
    
}
