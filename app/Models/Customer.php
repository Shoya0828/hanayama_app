<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //テーブル名
    protected $table = 'customers';

    //可変項目
    protected $fillable =
    [
        'id',
        'name_sei',
        'name_mei',
        'post',
        'prefecture',
        'city',
        'others',
        'tell',
        'mail',
        'created_at',
    ];
    use HasFactory;
}
