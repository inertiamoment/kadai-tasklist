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
            $table->unsignedBigInteger('user_id')->after('id'); // user_idカラムの追加
            $table->foreign('user_id')->references('id')->on('users'); // 外部キー制約の追加
            $table->string('title')->default('Default Title')->after('user_id'); 
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
            $table->dropColumn('title');
        });
    }
};
