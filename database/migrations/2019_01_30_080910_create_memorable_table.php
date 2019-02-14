<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemorableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memorable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('nickname',30)->nullable(true);
            $table->enum('sex',['f','m'])->nullable(true);
            $table->text('content')->nullable(true);
            $table->smallInteger('status')->default(0);
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
        Schema::dropIfExists('memorable');
    }
}
