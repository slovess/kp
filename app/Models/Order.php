<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'status',
        'payment',
        'amountorder',
        'quantity',
    ];

    protected $hidden = [
        'user_id',
        'delivery_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function delivery() {
        return $this->belongsTo(Delivery::class);
    }
}
