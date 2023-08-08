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
        Schema::create('books', function (Blueprint $table) {
            //BIGINT UNSIGNED、AUTO_INCREMENT　主キー
            $table->id();
            //VARCHAR(100)、NOT NULL
            $table->string('title',100);
            //VARCHAR(50)、NOT NULL
            $table->string('author',50);
            //INT、NOT NULL
            $table->integer('price');
            //INT、NOT NULL、FOREIGN KEY（category_id）
            //categorysテーブルのid
            // ※sはついていない単数形になっている
            $table->foreignId('category_id')->constrained();
            //created_at、TIMESTAMP、NOT NULL
            //updated_at、TIMESTAMP、NOT NULL
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
