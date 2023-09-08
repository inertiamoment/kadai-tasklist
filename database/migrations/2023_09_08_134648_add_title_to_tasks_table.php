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
        $table->string('title')->after('id'); // 'id' の後に 'title' カラムを追加
    });
}

public function down()
{
    Schema::table('tasks', function (Blueprint $table) {
        $table->dropColumn('title');
    });
}
};
