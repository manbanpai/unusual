<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',150)->nullable(true)->unique();
            $table->text('content')->nullable(true);
            $table->integer('click')->default(0)->comment('点击量');
            $table->smallInteger('category')->default(0)->comment('分类');
            $table->smallInteger('status')->default(0)->comment('状态:0显示,1不显示');
            $table->string('author')->default('admin')->nullable(true)->comment('作者');
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
        Schema::dropIfExists('articles');
    }
}
