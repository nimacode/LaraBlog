<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',256);
            $table->text('content');
            $table->string('thumbnail');
            $table->string('slug',256);
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('commentCount')->default(0);
            $table->unsignedBigInteger('viewCount')->default(0);
            $table->enum('status',['publish','draft','delete'])->default('draft');
            $table->softDeletes();
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
        Schema::dropIfExists('posts');
    }
}
