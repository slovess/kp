<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'image'];
    
    public function goods()
    {
        return $this->hasMany(Good::class);
    }
    
    // Метод для получения полного пути к изображению
    public function getImagePath()
    {
        return asset('categories/' . $this->image);
    }
}