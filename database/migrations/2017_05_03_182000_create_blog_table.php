<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

          Schema::create('blog', function (Blueprint $table) {
              $table->increments('blog_id');
              $table->string('blog_name');
              $table->string('blog_url')->unique();
              $table->string('blog_desc');
              $table->timestamps('created_at');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blog');
    }
}
