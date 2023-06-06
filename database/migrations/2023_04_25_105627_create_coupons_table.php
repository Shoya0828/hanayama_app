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
    if (!Schema::hasTable('coupons')) {
      Schema::create('coupons', function (Blueprint $table) {
        $table->increments('id')->comment('クーポンID');
        $table->string('coupon_name',50)->comment('クーポン名');
        $table->string('discount',100)->comment('割引価格');
        $table->date('period')->comment('適応期間');
        $table->timestamps();
      });
    }
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('coupons');
  }
};
