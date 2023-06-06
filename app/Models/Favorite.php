<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //テーブル名
    protected $table = 'favorites';

    //可変項目
    protected $fillable =
    [
        'item_id',
        'user_id',
        'user_flag',
        'created_at',
    ];
    use HasFactory;
}
