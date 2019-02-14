<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemorableTagRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memorable_tag_relation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('memorable_id')->default(0)->comment('人物表ID');
            $table->integer('tag_id')->default(0)->comment('标签表ID');
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
        Schema::dropIfExists('memorable_tag_relation');
    }
}
