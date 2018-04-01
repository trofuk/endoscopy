<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('type', 100);
            $table->string('model', 100);
            $table->string('filter', 100);
            $table->string('description', 1000);
            $table->string('image_main', 100);
            $table->string('image_1', 100);
            $table->string('image_2', 100);
            $table->string('image_3', 100);
            $table->string('image_4', 100);
                     
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
        Schema::dropIfExists('products');
    }
}
