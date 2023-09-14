<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            if (!Schema::hasColumn('tasks', 'user_id')) {
                $table->unsignedBigInteger('user_id')->after('id'); // user_idカラムの追加
                $table->foreign('user_id')->references('id')->on('users'); // 外部キー制約の追加
            }

            if (!Schema::hasColumn('tasks', 'content')) {
                $table->string('content')->after('user_id');
            }
            // 他のカラムの追加処理
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // 外部キー制約の削除
            $table->dropColumn('user_id'); // user_idカラムの削除
            $table->dropColumn('content');  // contentカラムを削除
        });
    }
};
