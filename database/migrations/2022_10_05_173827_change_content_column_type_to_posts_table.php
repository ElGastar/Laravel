<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeContentColumnTypeToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('post_content')->change();//изменяем тип колонки content с text на string, post_content потому,что
            //предыдущем коммите меняли content на post_content
            //и когда вызываем php artisan migrate, content меняется на post_content
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('post_content')->change();// обратно откатываем тип на text
        });
    }
}
