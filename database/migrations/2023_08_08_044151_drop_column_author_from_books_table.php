<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     //テーブル定義を変更する場合マイグレファイルを新規に作成する
     //コマンド
     //sail artisan make:migration drop_column_author_from_books_table --table=books
    public function up(): void
    {
        // 「Schema::table」が「create」でなく「table」になっている
        Schema::table('books', function (Blueprint $table) {
            // 著者列を削除する処理
            $table->dropColumn('author');
        });
    }

    /**
     * Reverse the migrations.
     */
    //マイグレ取消時（ロールバック時）に呼び出される
    //upメソッドの内容を打消す処理を書く
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            // 著者列を追加する処理
            $table->string('author',50);
        });
    }
};
