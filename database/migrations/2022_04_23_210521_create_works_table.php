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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->default('1');
            $table->unsignedBigInteger('user_id')->default('1');
            $table->string('title');
            $table->text('describe');
            $table->text('date_end');
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
        Schema::dropIfExists('works');
    }
};
