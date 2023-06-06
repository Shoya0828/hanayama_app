<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    if (!Schema::hasTable('payments')) {
      Schema::create('payments', function (Blueprint $table) {
        $table->increments('id')->comment('商品ID');
        $table->unsignedBigInteger('order_id')->comment('注文ID');
        $table->string('method', 50)->comment('支払方法');
        $table->string('total_price', 100)->comment('支払金額');
        $table->timestamps();
      });
    }
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('payments');
  }
};
