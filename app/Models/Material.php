<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function goods() {
        return $this->belongsToMany(Good::class, 'goods_has_materials');
    }
}
