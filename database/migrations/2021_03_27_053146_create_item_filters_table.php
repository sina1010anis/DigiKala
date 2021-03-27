<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemFiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_filters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('title_filter_id');
            $table->foreign('id')->references('title_filter_id')->on('title_filters');
            $table->integer('product_id');
            $table->foreign('id')->references('product_id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_filters');
    }
}
