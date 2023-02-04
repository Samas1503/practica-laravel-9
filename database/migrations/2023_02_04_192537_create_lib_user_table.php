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
        Schema::create('lib_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',100);
            $table->string('email',100);
            $table->text('password');

            $table->unsignedInteger('id_person');
            $table->foreign('id_person')->references('id')->on('lib_person')->onDelete('cascade');

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
        Schema::dropIfExists('lib_user');
    }
};
