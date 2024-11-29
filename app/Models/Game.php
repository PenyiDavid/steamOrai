<?php

namespace App\Models;

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
    
}
