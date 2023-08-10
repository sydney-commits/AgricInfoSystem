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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // $table->integer('forum_id')->unsigned();
            $table->bigInteger('forum_id')->unsigned()->nullable();

            $table->string('username')->default('0');


            $table->string("comment");
            $table->foreign('forum_id')->references('id')->on('forums')
              ->onDelete('cascade');

         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
