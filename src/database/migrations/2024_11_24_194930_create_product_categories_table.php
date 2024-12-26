<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('udedokei');
            $table->string('hdd');
            $table->string('onion');
            $table->string('shoes');
            $table->string('pc');
            $table->string('mic');
            $table->string('shoulderbag');
            $table->string('tumbler');
            $table->string('coffeemill');
            $table->string('makeupset');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
