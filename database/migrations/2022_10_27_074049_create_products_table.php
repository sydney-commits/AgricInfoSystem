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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name')->default('001');
            $table->integer('price')->default(0);
            $table->text('method')->nullable();
            $table->text('disease')->nullable();
            $table->text('market')->nullable();
            $table->string('category')->default('001');
            $table->mediumText('image')->nullable();


        

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
