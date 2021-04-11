<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id');
            $table->foreign('id')->references('city_id')->on('citys')->cascadeOnDelete();
            $table->integer('street_id');
            $table->foreign('id')->references('street_id')->on('streets')->cascadeOnDelete();
            $table->text('address');
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
        Schema::dropIfExists('addresses');
    }
}
