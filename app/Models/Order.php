<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'session_id',
        'name_sei',
        'name_mei',
        'post',
        'prefecture',
        'city',
        'others',
        'tell',
        'email',
        'total_price',
        'status',
        'payment',
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}