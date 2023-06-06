<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //テーブル名
    protected $table = 'items';

    //可変項目
    protected $fillable =
    [
        'id',
        'img',
        'name',
        'kana',
        'detail',
        'price',
        'category_id',

    ];

    public function getImagePathAttribute()
    {
        return asset('storage/item_images/' . $this->img);
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    use HasFactory;
}
