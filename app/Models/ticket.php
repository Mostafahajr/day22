<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;
    protected $fileable = ["match_id"];

    public function matches(){
        return $this->belongsTo(Game::class);
    }
}
