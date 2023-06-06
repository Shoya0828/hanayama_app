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
    if (!Schema::hasTable('administrators')) {
      Schema::create('administrators', function (Blueprint $table) {
        $table->increments('id')->comment('管理者ID');
        $table->string('userid', 254)->unique()->comment('userid');
        $table->string('password')->comment('パスワード');
        $table->rememberToken()->comment('リメンバートークン');
        $table->tinyInteger('delete_flag')->default(0)->comment('削除フラグ');
        $table->timestamps();
      });
    }
  }


  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('administrators');
  }
};
