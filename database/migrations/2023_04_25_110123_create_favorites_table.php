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
    if (!Schema::hasTable('favorites')) {
      Schema::create('favorites', function (Blueprint $table) {
        $table->string('item_id')->comment('商品ID');
        $table->string('user_id')->comment('会員ID');
        $table->tinyInteger('delete_flag')->comment('削除フラグ');
        $table->timestamps();
      });
    }
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('favorites');
  }
};
