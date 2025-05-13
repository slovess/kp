<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function good() {
        return $this->hasMany(Good::class, 'color_id');
    }
}
