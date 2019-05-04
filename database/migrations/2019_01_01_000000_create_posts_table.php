<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->unsignedBigInteger('user_id')->index();
            $table->string('title');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('category_id')->index();
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->text('excerpt')->nullable();
            $table->string('source', 64)->nullable();
            $table->unsignedSmallInteger('order')->default(1);
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('likes')->default(0);
            $table->unsignedBigInteger('comments_count')->default(0);
            $table->string('image')->nullable();
            $table->string('format')->nullable('text');
            $table->string('type')->default('post');
            $table->string('template')->nullable();
            $table->boolean('is_top')->default(false);
            $table->enum('status', ['published', 'draft', 'private'])->default('published');
            $table->boolean('allow_comment')->default(true);
            $table->timestamp('published_at')->nullable()->useCurrent();
            $table->timestamp('viewed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
