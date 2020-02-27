<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReturn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cdtablereturns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rent_id');
            $table->dateTime('day_return');
            $table->integer('payment');
            $table->integer('pinalty');
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
        Schema::dropIfExists('cdtablereturns');
    }
}
