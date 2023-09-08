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
        if (!Schema::hasColumn('tasks', 'content')) {
            $table->string('content');
        }
        // 他のカラムの追加処理
    });
}


    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('content');  // contentカラムを削除
        });
    }

};
