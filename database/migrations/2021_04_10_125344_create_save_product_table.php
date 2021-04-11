<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaveProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('save_product', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->foreign('id')->references('product_id')->on('products')->cascadeOnDelete();
            $table->integer('user_id');
            $table->foreign('id')->references('user_id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('save_product');
    }
}
