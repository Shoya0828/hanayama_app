<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    //テーブル名
    protected $table = 'categories';

    //可変項目
    protected $fillable =
    [
        'id',
        'category_name',
    ];
    use HasFactory;
}
