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
    if (!Schema::hasTable('resets')) {
      Schema::create('resets', function (Blueprint $table) {
        $table->increments('id')->comment('リセットID');
        $table->integer('user_id')->comment('会員ID');
        $table->integer('reset_token', 80)->comment('会員ID');
        $table->timestamp('expiration_time')->default('current_timestamp')->comment('トークン有効期限');
        $table->timestamps();
      });
    }
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('resets');
  }
};
