<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembercd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cdmembers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',25);
            $table->string('address',255);
            $table->string('phone',20);
            $table->string('ktp',255);
            $table->dateTime('member_date');
            $table->dateTime('active_date');
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
        Schema::dropIfExists('cdmembers');
    }
}
