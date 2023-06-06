<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
  public function up(): void
  {
    if (!Schema::hasTable('prices')) {
      Schema::create('prices', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('item_id');
        $table->string('weight');
        $table->decimal('price', 8, 2);
        $table->timestamps();

        $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
      });
    }
  }

  public function down()
  {
    Schema::dropIfExists('prices');
  }
}
