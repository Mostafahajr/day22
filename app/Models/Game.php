<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fileable = ["teamHome","teamAway","teamHomeLogo","teamAwayLogo","stidume","matchTime","compitation","stage"];
    public function tickets(){
        return $this->hasOne(ticket::class);
    }
}
