<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttrCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attr_comments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('model');
            $table->string('comment_id');
            $table->foreign('id')->references('comment_id')->on('comment_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attr_comments');
    }
}
