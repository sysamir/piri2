<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_news', function (Blueprint $table) {
            $table->increments('blog_id');
            $table->integer('blog_cat_id')->unsigned();
            $table->foreign('blog_cat_id')->references('cat_id')->on('blog_categories');
            $table->string('blog_title');
            $table->text('blog_descp');
            $table->string('blog_cover_picture');
            $table->string('blog_slug');
            $table->integer('hit')->default(0);
            $table->integer('blog_user_id');
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
        Schema::dropIfExists('blog_news');
    }
}
