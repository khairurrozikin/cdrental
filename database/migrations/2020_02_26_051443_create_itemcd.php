<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemcd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cditems', function (Blueprint $table) {
            $table->increments('item_id');
            $table->string('title',255);
            $table->float('rate',8,2);
            $table->string('category',255);
            $table->integer('qty');
            $table->integer('price_item');
            $table->integer('price_rent');
        });
    }

    /**
     * Reverse the migrations.
     * 
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cditems');
    }
}
