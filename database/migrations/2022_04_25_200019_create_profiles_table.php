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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->default('1');
            $table->unsignedBigInteger('user_id')->default('1');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('phone');
            $table->string('gander');
            $table->text('country');
            $table->text('major');
            $table->text('Job_title');
            $table->text('describe');
            $table->string('image')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('profiles');
    }
};
