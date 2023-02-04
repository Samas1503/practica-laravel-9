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
        Schema::create('lib_project', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->longText('description');

            $table->unsignedInteger('created_by');
            $table->foreign('created_by')->references('id')->on('lib_user')->onDelete('cascade');

            $table->timestamps(); // created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lib_project');
    }
};
