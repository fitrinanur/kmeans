<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->double('speed');
            $table->double('activity');
            $table->double('lane');
            $table->string('first_latitude');
            $table->string('first_longitude');
            $table->string('second_latitude');
            $table->string('second_longitude');
            $table->double('long');
            $table->double('width');
            $table->double('time');
            $table->string('type');
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
        Schema::dropIfExists('roads');
    }
}
