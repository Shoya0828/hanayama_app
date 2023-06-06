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
        if (!Schema::hasTable('customers')) {
            Schema::create('customers', function (Blueprint $table) {
                $table->increments('id')->comment('顧客ID');
                $table->string('name_sei', 50)->comment('姓');
                $table->string('name_mei', 50)->comment('名');
                $table->string('post', 7)->comment('郵便番号');
                $table->string('prefecture', 5)->comment('都道府県');
                $table->string('city', 20)->comment('市区町村');
                $table->string('others', 150)->comment('番地以降');
                $table->string('tell', 20)->comment('電話番号');
                $table->string('mail', 254)->comment('メールアドレス');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
