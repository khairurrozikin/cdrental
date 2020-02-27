<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRentDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cdtablerentdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rent_id');
            $table->integer('item_id');
            $table->integer('qty_id');
            
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
        Schema::dropIfExists('cdtablerentdetails');   
    }
}
