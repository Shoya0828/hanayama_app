<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
        //テーブル名
        protected $table = 'payments';

        //可変項目
        protected $fillable =
        [
            'id',
            'order_id',
            'method',
            'total_price',            
        ];

        public function order()
        {
            return $this->hasOne(Order::class);
        }

    use HasFactory;
}
