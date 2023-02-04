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
        Schema::create('lib_project_comment', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('from_project');
            $table->foreign('from_project')->references('id')->on('lib_project')->onDelete('cascade');
            
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
        Schema::dropIfExists('lib_project_comment');
    }
};
