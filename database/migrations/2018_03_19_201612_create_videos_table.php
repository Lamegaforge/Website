<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('video_channel_id')->unsigned();
            $table->string('hash')->unique();
            $table->string('title')->nullable();
            $table->string('duration')->nullable();
            $table->text('description')->nullable();
            $table->integer('view_count')->nullable();
            $table->integer('like_count')->nullable();
            $table->integer('dislike_count')->nullable();
            $table->boolean('online')->default(true);
            $table->time('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
