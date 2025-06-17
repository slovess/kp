<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'image','isPopular'];
    
    public function goods()
    {
        return $this->hasMany(Good::class);
    }
    
    public function getImagePath()
    {
        return asset('categories/' . $this->image);
    }
}