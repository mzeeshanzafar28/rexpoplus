<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public function tab()
    {
        return $this->belongsTo(Tab::class, 'tab_link', 'tab_link');
    }
}
