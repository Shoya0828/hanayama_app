<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    
    //テーブル名
    protected $table = 'coupons';

    //可変項目
    protected $fillable =
    [
        'id',
        'coupon_name',
        'discount', 
        'period',
        'user_flag',
    ];
    use HasFactory;
}
