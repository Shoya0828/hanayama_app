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
    if (!Schema::hasTable('items')) {
      Schema::create('items', function (Blueprint $table) {
        $table->increments('id')->comment('商品ID');
        $table->string('img')->comment('画像');
        $table->string('name',50)->comment('商品名');
        $table->string('kana',50)->comment('フリガナ');
        $table->text('detail')->comment('商品詳細');
        $table->integer('category_id')->comment('カテゴリID');
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
    Schema::dropIfExists('items');
  }
};
