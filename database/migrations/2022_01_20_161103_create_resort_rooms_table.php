<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResortRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resort_rooms', function (Blueprint $table) {
            $table->id();
            $table->double('resort_id');
            $table->string('roomtype_name');
            $table->longText('feature')->nullable();

            $table->double('totalroomno');
            $table->double('B2B');
            $table->double('B2C');
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
        Schema::dropIfExists('resort_rooms');
    }
}
