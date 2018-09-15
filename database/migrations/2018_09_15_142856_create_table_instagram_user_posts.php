<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInstagramUserPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instagram_user_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('instagram_user_id');
            $table->unsignedBigInteger('post_id');
            $table->string('text');
            $table->string('post_url');
            $table->string('post_image_url');
            $table->unsignedInteger('like_count');
            $table->timestamp('posted_at');

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('instagram_user_id')->references('id')->on('instagram_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instagram_user_posts');
    }
}
