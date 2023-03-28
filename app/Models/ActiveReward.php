<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveReward extends Model
{
    use HasFactory;

    public function reward(){
        return $this->belongsTo(Reward::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
