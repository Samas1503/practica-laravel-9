<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lib_task_comment', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('from_yask');
            $table->foreign('from_yask')->references('id')->on('lib_task')->onDelete('cascade');
            
            $table->unsignedInteger('comment');
            $table->foreign('comment')->references('id')->on('lib_comment')->onDelete('cascade');
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
        Schema::dropIfExists('lib_task_comment');
    }
};
