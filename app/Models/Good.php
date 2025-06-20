<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'isPresence',
        'isPopular',
        'size',
        'image',
        'brand_id',
        'category_id',
        'location_id',
        'color_id',
    ];

    public function baskets()
    {
        return $this->hasMany(Basket::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function location() {
        return $this->belongsTo(Location::class);
    }

    public function color() {
        return $this->belongsTo(Color::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
