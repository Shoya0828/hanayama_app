<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
}
