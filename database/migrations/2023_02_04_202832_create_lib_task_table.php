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
        Schema::create('lib_task', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',300);
            $table->longText('description');
            $table->boolean('status')->default(false);

            $table->unsignedInteger('from_project');
            $table->foreign('from_project')->references('id')->on('lib_project')->onDelete('cascade');

            $table->unsignedInteger('created_by');
            $table->foreign('created_by')->references('id')->on('lib_person')->onDelete('cascade');

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
        Schema::dropIfExists('lib_task');
    }
};
