<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reset extends Model
{
        //テーブル名
        protected $table = 'items';

        //可変項目
        protected $fillable =
        [
            'id',
            'user_id',
            'expiration_time',
            'created_at',
        ];
    use HasFactory;
}
