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
    if (!Schema::hasTable('orders')) {
      Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('session_id', 255)->default('')->nullable();
        $table->string('name_sei', 50)->comment('姓');
        $table->string('name_mei', 50)->comment('名');
        $table->string('post', 7)->comment('郵便番号');
        $table->string('prefecture', 5)->comment('都道府県');
        $table->string('city', 20)->comment('市区町村');
        $table->string('others', 150)->comment('番地以降');
        $table->string('tell', 20)->comment('電話番号');
        $table->string('email', 254)->comment('メールアドレス');
        $table->decimal('total_price', 10, 2);
        $table->string('status')->default('pending'); // 注文ステータスの追加
        $table->string('payment', 250)->default('代金引換');
        $table->timestamps();
      });
    }
  }




  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('orders');
  }
};
