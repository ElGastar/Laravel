<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteTableFromDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('posts');// Удалет таблицу
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Восстанавливает таблицу при откате
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('images')->nulable();
            $table->string('post_content');
            $table->unsignedBigInteger('likes');
            $table->boolean('is_published')->default(1);
            $table->timestamps();

            $table->softDeletes();
        });
    }
}
